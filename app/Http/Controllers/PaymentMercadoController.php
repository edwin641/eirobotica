<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PayPalService;
use App\Resolvers\PaymentPlatformResolver;
use App\Services\MercadoPagoService;

class PaymentMercadoController extends Controller
{
    //
   
    public function pay(Request $request){

        
       
        $rules = [
            'value' ,
            'currency' ,
           
        ];

        $request->validate($rules);

        $paymentPlatform = resolve(MercadoPagoService::class);

        return $paymentPlatform->handlePayment($request);
    }
    public function approval(){
       
        $paymentPlatform = resolve(MercadoPagoService::class);

        
            return $paymentPlatform->handleApproval();
        
        return redirect()
            ->route('home')
            ->withErrors('We cannot retrieve your payment platform. Try again, plase.');
       
    }
    public function cancelled(){
        return redirect()
            ->route('home')
            ->withErrors('You cancelled the payment');
    }
}
