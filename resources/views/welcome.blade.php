<x-app-layout>

    <section class="bg-cover" style="background-image: url({{asset('img/home/homeimage.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Aprende todas las áreas de la Robótica</h1>
                <p class="text-white text-lg mt-2 mb-4">Aquí encontraras todos los cursos que te ayudaran a aprender todos los temas en el area de la electrónica, mecánica y programación</p>   
            
            
                @livewire('search')
                     
            </div> 
            
        </div>
    </section>






    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-x1 h-36 w-full object-cover" src="{{asset('img\home\imagen1.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Programación</h1>
                </header>
                <p class="text-sm text-gray-500">Aprende todo sobre Programación; programación básica, estructuras de datos, diseño de algoritmos, Inteligencia artificial, vision artificial, programacion web, internet de las cosas, Realidad virtual.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-x1 h-36 w-full object-cover" src="{{asset('img\home\imagen2.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Electrónica</h1>
                </header>
                <p class="text-sm text-gray-500">Aprende todo sobre Electrónica; electrónica básica, electrónica digital, diseño de circuitos, PID, control avanzado, Telecomunicaciones, controladores programables, microcontroladores</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-x1 h-36 w-full object-cover" src="{{asset('img\home\imagen3.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Mecánica</h1>
                </header>
                <p class="text-sm text-gray-500">Aprende todo sobre Mecanica; mecánica, cinemática, hidraulica, diseño mecánico, ingenieria de meteriales, Diseño de mecánismos, Proyectos mecatronicos  </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-x1 h-36 w-full object-cover" src="{{asset('img\home\imagen4.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Negocios</h1>
                </header>
                <p class="text-sm text-gray-500">Aprende todo sobre Negocios; contabilidad, finanzas, marketing digital, Planes de Negocios, Formulacion de proyectos de inversión, gestion de empresas</p>
            </article>

        </div>
    </section>


    

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes por que curso empezar?</h1>
        <p class="text-center text-white">Dirigete al la seccion curso para que veas el catalogo de cursosa que tenemos para ti</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                Catalogo de Cursos
            </a>
    </div>
    </section>



    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
        <P class="text-center text-gray-500 text-sm mb-6">Los ultimos cursos recien subidos</P>
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                 <x-course-card :course="$course"/>
                
            @endforeach


        </div>
    
    </section>

</x-app-layout>


