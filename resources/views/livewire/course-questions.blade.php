<section class="mt-4">

                    
    <div class="overflow-auto h-64">  
        <div class="card">
            <div class="card-body">
                <p class="text-gray-800 text-xl">{{$course->questions->count()}} preguntas</p>
                @foreach ($course->questions as $question)
                    <article class="flex mb-4 text-gray-800">
                        <figure class="mr-4">
                            <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$question->user->profile_photo_url}}" alt="">
                        </figure>

                        <div class="card flex-1">
                       {{-- <div x-data="{open: false}">    --}}     
                                <div class="card-body bg-gray-100">
                                    <div class="flex justify-between items-center">
                                        <p><b>{{$question->user->name}}</b>                              
                                        </p>
                                            <div>
                                                <i {{-- x-show="!open" x-on:click = "open = true" --}}class="fas fa-edit cursor-pointer text-blue-500" ></i>
                                            
                                            </div>
                                    </div>
                                    {{$question->comment}}
                                </div>
                              {{--  <article class="mb-4" x-show="open">         
                                        <textarea wire:model="answer" class="form-input w-full" rows="3" placeholder="Escribe tu respuesta"></textarea>    
                                        <button class="btn btn-primary mr-2" wire:click = "store" x-on:click = "open = false">Responder</button>    
                                        <button class="btn btn-danger" x-on:click = "open = false">Cancelar</button>             
                                </article> 
                            </div>--}}
                        </div>
                        
                    </article>
                    
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-4" x-data="{open: false}">
        <a x-show="!open" x-on:click = "open = true" class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Hacer una pregunta
        </a>
         @error('comment')
                        <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
        <article class="mb-4" x-show="open">         
                <textarea wire:model="comment" class="form-input w-full" rows="3" placeholder="¿Tienes una pregunta?"></textarea>    
                <button class="btn btn-primary mr-2" wire:click = "store" x-on:click = "open = false">Publicar</button>    
                <button class="btn btn-danger" x-on:click = "open = false">Cancelar</button>             
        </article>  
    </div>
</section>