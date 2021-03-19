

@section('formato')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    

<style>
    body {
  background: #f5f5f5;
}

.rounded-lg {
  border-radius: 1rem;
}

.nav-pills .nav-link {
  color: #555;
}

.nav-pills .nav-link.active {
  color: #fff;
}
 </style>
@endsection
<x-app-layout>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
        <h1 class="text-gray-500 text-3xl font-bold">Detalle del pedido</h1>

        <div class="card text-gray-600">
            <div class="card-body">
                <article class="flex items-center">
                    <img class="h-12 w-12 object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                    <h1 class="text-lg ml-2">{{$course->title}}</h1>
                    <p class="text-xl font-bold ml-auto">U$$ {{$course->price->value}}</p>
                </article>

                <div class="flex justify-end mt-2 mb-4">
                    <a href="{{route('payment.pay', $course)}}" class="btn btn-primary">Comprar este curso</a>
                </div>
                


                

{{--

        <!-- check -->

                
        

                                
          <div class="row">
            <div class="col-lg-7 mx-auto">
              <div class="bg-white rounded-lg shadow-sm p-5">
                <!-- Credit card form tabs -->
                <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                  <li class="nav-item">
                    <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                        <i class="fa fa-credit-card"></i>
                                        Tarjeta de Credito
                                    </a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                                        <i class="fa fa-paypal"></i>
                                        Paypal
                                    </a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                        <i class="fa fa-university"></i>
                                         Transferencia Bancaria
                                     </a>
                  </li>
                </ul>
                <!-- End -->
        
        
                <!-- Credit card form content -->
                <div class="tab-content">
        
                  <!-- credit card info-->
                  <div id="nav-tab-card" class="tab-pane fade show active">
                    <p class="alert alert-success">Some text success or error</p>
                    <form role="form">
                      <div class="form-group">
                        <label for="username">Nombre completo</label>
                        <input type="text" name="username" placeholder="Jason Doe" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="cardNumber">Número de Tarjeta</label>
                        <div class="input-group">
                          <input type="text" name="cardNumber" placeholder="Your card number" class="form-control" required>
                          <div class="input-group-append">
                            <span class="input-group-text text-muted">
                                                        <i class="fa fa-cc-visa mx-1"></i>
                                                        <i class="fa fa-cc-amex mx-1"></i>
                                                        <i class="fa fa-cc-mastercard mx-1"></i>
                                                    </span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="form-group">
                            <label><span class="hidden-xs">Expiracion</span></label>
                            <div class="input-group">
                              <input type="number" placeholder="Mes" name="" class="form-control" required>
                              <input type="number" placeholder="Año" name="" class="form-control" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group mb-4">
                            <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                                        <i class="fa fa-question-circle"></i>
                                                    </label>
                            <input type="text" required class="form-control">
                          </div>
                        </div>
        
        
        
                      </div>
                      <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirma  </button>
                    </form>
                  </div>
                  <!-- End -->
        
                  <!-- Paypal info -->
                  <div id="nav-tab-paypal" class="tab-pane fade">
                    <p>Para seguir con tu compra deberás inicar sesión en PayPal</p>
                    <p>
                      
                      <a href="{{route('payment.pay', $course)}}" class="btn btn-primary"><i class="fa fa-paypal mr-2"></i>Pagar con Paypal</a>
                    </p>
                    <p class="text-muted">Después del pago, permanece atento a tu email para recibir los datos de acceso al producto 
                    </p>
                  </div>
                  <!-- End -->
        
                  <!-- bank transfer info -->
                  <div id="nav-tab-bank" class="tab-pane fade">
                    <h6>Bank account details</h6>
                    <dl>
                      <dt>Bank</dt>
                      <dd> THE WORLD BANK</dd>
                    </dl>
                    <dl>
                      <dt>Account number</dt>
                      <dd>7775877975</dd>
                    </dl>
                    <dl>
                      <dt>IBAN</dt>
                      <dd>CZ7775877975656</dd>
                    </dl>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                  </div>
                  <!-- End -->
                </div>
                <!-- End -->
        
              </div>
            </div>
          </div>
        

        <!-- check -->



            --}}








                <hr>
                <p class="text-sm mt-4">Al hacer clic en "Crear cuenta" acepto las Condiciones de Uso, la Política de Privacidad y recibir novedades y promociones. <a  class="text-red-500 font-bold" href="{{'terms'}}">Terminos y condiciones</a></p>
            </div>
        </div>



















          {{--


                  <form action="{{ route('paymercado') }}" method="POST" id="paymentForm">
                    @csrf

                    <div class="row">
                        <div class="col-auto">
                            <label>Cuanto deseas pagar</label>
                            <input type="number" name="value" min="5" step="0.01" class="form-control" value="6.00">
                            <input type="text" name="currency" min="5" step="0.01" class="form-control" value="USD">
                            
                        </div>
                        <div class="row mt-3">
                            <label> Selecciona el metodo de pago</label>

                          
                            
                                <div>
                                    <label class="mt-3">Card details:</label>

                                                                    <div class="form-group form-row">
                                                                        <div class="col-5">
                                                                            <input class="form-control" type="text" id="cardNumber" data-checkout="cardNumber" placeholder="Card Number">
                                                                        </div>

                                                                        <div class="col-2">
                                                                            <input class="form-control" type="text" data-checkout="securityCode" placeholder="CVC">
                                                                        </div>

                                                                        <div class="col-1"></div>

                                                                        <div class="col-1">
                                                                            <input class="form-control" type="text" data-checkout="cardExpirationMonth" placeholder="MM">
                                                                        </div>

                                                                        <div class="col-1">
                                                                            <input class="form-control" type="text" data-checkout="cardExpirationYear" placeholder="YY">
                                                                        </div>
                                                                    </div>



                                                                    <div class="form-group form-row">
                                                                        <div class="col-5">
                                                                            <input class="form-control" type="text" data-checkout="cardholderName" placeholder="Your Name">
                                                                        </div>
                                                                        <div class="col-5">
                                                                            <input class="form-control" type="email" data-checkout="cardholderEmail" placeholder="email@example.com" name="email">
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group form-row">
                                                                        <div class="col-2">
                                                                            <select class="custom-select" data-checkout="docType"></select>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <input class="form-control" type="text" data-checkout="docNumber" placeholder="Document">
                                                                        </div>
                                                                    </div>



                                                                    <div class="form-group form-row">
                                                                        <div class="col">
                                                                            <small class="form-text text-danger" id="paymentErrors" role="alert"></small>
                                                                        </div>
                                                                    </div>

                                                                    <input type="hidden" id="cardNetwork" name="card_network">
                                                                    <input type="hidden" id="cardToken" name="card_token">


                                </div>

                                
                          
                        </div>
                    </div>
                  
                    <div class="text-center mt-3">
                        <button type="submit" id="payButton" class="btn btn-primary btn-lg">Pagar</button>
                    </div>

                  
                </form>




                --}}
















    </div>



















    {{--

    @push('scripts')
      

    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    
    <script>
        const mercadoPago = window.Mercadopago;
        mercadoPago.setPublishableKey('{{ config('services.mercadopago.key') }}');
        mercadoPago.getIdentificationTypes();
    </script>
    
    <script>
        function setCardNetwork()
        {
            const cardNumber = document.getElementById("cardNumber");
            mercadoPago.getPaymentMethod(
                { "bin": cardNumber.value.substring(0,7) },
                function(status, response) {
                    const cardNetwork = document.getElementById("cardNetwork");
                    cardNetwork.value = response[0].id;
                    mercadoPagoForm.submit();
                }
            );
        }
    </script>
    
    <script>
        const mercadoPagoForm = document.getElementById("paymentForm");
        mercadoPagoForm.addEventListener('submit', function(e) {
            
                e.preventDefault();
                mercadoPago.createToken(mercadoPagoForm, function(status, response) {
                    if (status != 200 && status != 201) {
                        const errors = document.getElementById("paymentErrors");
                        errors.textContent = response.cause[0].description;
                    } else {
                        const cardToken = document.getElementById("cardToken");
                        
                        cardToken.value = response.id;
                        
                        setCardNetwork();
                    }
                });
            
        });
    </script>
    @endpush
    
    --}}

















</x-app-layout>

