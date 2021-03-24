<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use App\Services\CurrencyConversionService;
use App\Models\Course;
use App\Http\Controllers\PaymentController;
use RuntimeException;


class MercadoPagoService
{
    use ConsumesExternalServices;
    

    protected $baseUri;

    protected $key;

    protected $secret;

    protected $baseCurrency;

    protected $converter;

    public function __construct(CurrencyConversionService $converter)
    {
        $this->baseUri = config('services.mercadopago.base_uri');
        $this->key = config('services.mercadopago.key');
        $this->secret = config('services.mercadopago.secret');
        $this->baseCurrency = config('services.mercadopago.base_currency');

        $this->converter = $converter;
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $queryParams['access_token'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        return $this->secret;
    }

    public function handlePayment(Request $request, Course $course)
    {   
       
                $request->validate([
                    'card_network' => 'required',
                    'card_token' => 'required',
                    'email' => 'required',
                ]);

                $payment = $this->createPayment(
                    $request->value,
                    $request->currency,
                    $request->card_network,
                    $request->card_token,
                    $request->email,
                );

                if ($payment->status === "approved") {
                    $name = $payment->payer->first_name;
                    $currency = strtoupper($payment->currency_id);
                    $amount = number_format($payment->transaction_amount, 0, ',', '.');

                    $originalAmount = $request->value;
                    $originalCurrency = strtoupper($request->currency);

                    $matricula = new PaymentController;
                    $matricula->matricula($course);
                    //$course->students()->attach(auth()->user()->id);
                    
                     
                   
                    //return back()
                        
                     //->withSuccess(['payment' => "Thanks, {$name}. We received your {$originalAmount}{$originalCurrency} payment ({$amount}{$currency})."]);

                     return redirect()->route('courses.status', $course);
                }

                return back()
                    
                    ->withErrors('No pudimos confirmar su pago. Trate otra vez, por favor');
        
           
    }

    public function handleApproval()
    {
        //
    }

    public function createPayment($value, $currency, $cardNetwork, $cardToken, $email, $installments = 1)
    {
        return $this->makeRequest(
            'POST',
            '/v1/payments',
            [],
            [
                'payer' => [
                    'email' => $email,
                ],
                'binary_mode' => true,
                'transaction_amount' => round($value * $this->resolveFactor($currency)),
                'payment_method_id' => $cardNetwork,
                'token' => $cardToken,
                'installments' => $installments,
                'statement_descriptor' => config('app.name'),
            ],
            [],
            $isJsonRequest = true,
        );
    }

    public function resolveFactor($currency)
    {
        return $this->converter
            ->convertCurrency($currency, $this->baseCurrency);
    }
}