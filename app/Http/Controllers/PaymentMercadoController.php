<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PayPalService;
use App\Resolvers\PaymentPlatformResolver;
use App\Services\MercadoPagoService;
use App\Models\Course;

class PaymentMercadoController extends Controller
{
    //
   
    public function pay(Request $request,Course $course){

       
       
            $rules = [
                'value' ,
                'currency' ,
            
            ];

            $request->validate($rules);

            $paymentPlatform = resolve(MercadoPagoService::class);

            return $paymentPlatform->handlePayment($request, $course);
       

    }
    public function approval(){
       
        $paymentPlatform = resolve(MercadoPagoService::class);

        
            return $paymentPlatform->handleApproval();
        
        return back()
           
            ->withErrors('We cannot retrieve your payment platform. Try again, plase.');
       
    }
    public function cancelled(){
        return back()
            
            ->withErrors('You cancelled the payment');
    }
}
