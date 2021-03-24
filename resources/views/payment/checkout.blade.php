

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


.whatsapp {
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  z-index:100;
}

.whatsapp-icon {
  margin-top:13px;
}
 </style>
@endsection
<x-app-layout>


        
      <div class="container max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
        
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 mb-5">

              <h1 class="text-gray-500 text-3xl font-bold">Medio de pago</h1>
                    

                         <!-- check -->
                      
                         
                          <div class="col-lg-12 mx-auto">
                            <div class="bg-white rounded-lg shadow p-5">
                              <!-- Credit card form tabs -->
                              <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                                <li class="nav-item">
                                  <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                                      <i class="fa fa-credit-card"></i>
                                                      Tarjeta 
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
                                                      Otros medios de pago
                                                  </a>
                                </li>
                              </ul>
                              <!-- End -->
                      
                      
                              <!-- Credit card form content -->
                              <div class="tab-content">
                      
                                <!-- credit card info-->
                                <div id="nav-tab-card" class="tab-pane fade show active">
                                  <p >
    
                                              @if (isset($errors) && $errors->any())
                                              <div class="alert alert-danger">
                                                  <ul>
                                                      @foreach ($errors->all() as $error)
                                                          <li>{{ $error }}</li>
                                                      @endforeach
                                                  </ul>
                                              </div>
                                          @endif
                                  
                                          @if (session()->has('success'))
                                              <div class="alert alert-success">
                                                  <ul>
                                                      @foreach (session()->get('success') as $message)
                                                          <li>{{ $message }}</li>
                                                      @endforeach
                                                  </ul>
                                              </div>
                                          @endif
                                    
                                  </p>
                                  <form action="{{route('paymercado', $course)}}" method="POST" id="paymentForm">
                                    @csrf
                                    <div class="form-group">
                                      <label for="username">Nombre completo</label>
                                      <input class="form-control" type="text" data-checkout="cardholderName" placeholder="Tu Nombre completo" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="cardNumber">Número de Tarjeta</label>
                                      <div class="input-group">
                                        <input class="form-control" type="text" id="cardNumber" data-checkout="cardNumber" placeholder="Número de tarjeta" required>
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
                                            
                                            <input type="number" class="form-control"  data-checkout="cardExpirationMonth" placeholder="Mes" required>
                                            <input type="number" class="form-control"  data-checkout="cardExpirationYear" placeholder="Año" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="form-group mb-4">
                                          <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                                                      <i class="fa fa-question-circle"></i>
                                                                  </label>
                                          <input class="form-control" type="text" data-checkout="securityCode" placeholder="CVC" required>
                                        </div>
                                      </div>
                                      
                                      <input type="hidden" name="value" class="form-control" value="{{$course->price->value}}">
                                      <input type="hidden" name="currency" class="form-control" value="USD">
                                      <input class="form-control" type="hidden" data-checkout="cardholderEmail" value="{{ Auth::user()->email }}" name="email">
                                      
    
                                      <div class="form-group form-row">
                                        <div class="col-sm-4">
                                            <select class="custom-select" data-checkout="docType"></select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" data-checkout="docNumber" placeholder="Document">
                                        </div>
                                    </div>
    
    
    
                                    <div class="form-group form-row">
                                        <div class="col-8">
                                            <small class="form-text text-danger" id="paymentErrors" role="alert"></small>
                                        </div>
                                    </div>
    
                                    <input type="hidden" id="cardNetwork" name="card_network">
                                    <input type="hidden" id="cardToken" name="card_token">
                                    <input type="hidden" id="deviceId">
    
    
                                    </div>
                                    <button type="submit" id="payButton"  class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirma  </button>
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
                                  <h6>Otros medios de pago</h6>
                                  <dl>
                                    <dt>Western Unión</dt>
                                    {{--<dd>Comunicate con nosotros </dd>--}}
                                  </dl>
                                  <dl>
                                    <dt>Money Gram</dt>
                                    {{--<dd>Comunicate con nosotros </dd>--}}
                                  </dl>
                                  <dl>
                                    <dt>Transferencias interbancarias</dt>
                                    {{--<dd>Comunicate con nosotros </dd>--}}
                                  </dl>
                                  <p>
                                    <a href="https://wa.me/5211234567890?text=Que%20otros%20medios%20de%20pago%20hay?%20" class="btn btn-primary"><i class="fa fa-whatsapp mr-2"></i>Contactate con nosotros</a>
                                  </p>
                                  <p class="text-muted">Comunicate con nosotros para ver otros medios de pago.
                                  </p>
                                  <a href="https://wa.me/5211234567890?text=Que%20otros%20medios%20de%20pago%20hay?%20" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
                                </div>
                                <!-- End -->
                              </div>
                              <!-- End -->
                      
                            </div>
                          </div>
                        
                      
    
                      <!-- check -->




















                    
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">

               
            <h1 class="text-gray-500 text-3xl font-bold">Detalles del pedido</h1>


              <div class="card text-gray-600">
                <div class="card-body">
                    <article class="flex items-center">
                        <img class="h-24 w-24 object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                        <h1 class="text-lg ml-2">{{$course->title}}</h1>
                        <p class="text-xl font-bold ml-auto">U$$ {{$course->price->value}}</p>
                    </article>
                  
                    <hr>
                    <p class="text-sm mt-4">Al hacer clic en "Crear cuenta" acepto las Condiciones de Uso, la Política de Privacidad y recibir novedades y promociones. <a  class="text-red-500 font-bold" href="{{'terms'}}">Terminos y condiciones</a></p>
                </div>
            </div>
            

            <div class="mt-8">
              <p>
                <strong>
                Te Ofrecemos:
                </strong>
              </p>
              <hr>
              <p>
                <strong>
                <i class="fas fa-award"></i> 15 días de garantía. 
                </strong>
              </p>
              <p>
                <strong>
                <i class="fas fa-hand-holding-heart"></i> Acceso al curso de por vida. </strong> ¡Aprender a tu ritmo!
              </p>
              <p>
                <strong>
                <i class="fas fa-shield-alt"></i> Privacidad. </strong> Tu información está 100% segura
              </p>
              <p>
                <strong>
                <i class="fas fa-lock"></i> Compra segura.</strong> Ambiente seguro y autenticado
              </p>




            </div>


              
          </div>
        </div>
      </div>
        


          

             
         
           
   



















    

    @push('scripts')
      

    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    
    <script src="https://www.mercadopago.com/v2/security.js" view="checkout" output="deviceId"></script>
    
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
    
    

















</x-app-layout>

