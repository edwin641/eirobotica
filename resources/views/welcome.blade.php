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

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">APRENDE HACIENDO</h1>
        <P class="text-center text-gray-500 text-sm mb-6">Accede a los mejores cursos de robótica, aprende haciendo distintas clases de proyectos mecáctronicos</P>
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                 <x-course-card :course="$course"/>
                
            @endforeach


        </div>
    
    </section>

     <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                Catalogo de Cursos
            </a>
        </div>
{{--
    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes por que curso empezar?</h1>
        <p class="text-center text-white">Dirigete al la seccion curso para que veas el catalogo de cursosa que tenemos para ti</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                Catalogo de Cursos
            </a>
        </div>
    </section>
--}}

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">¿POR QUE ELEGIRNOS? </h1>


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-x1 h-36 w-full object-cover" src="{{asset('img\home\imagen1.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Aprende a tu ritmo</h1>
                </header>
                <p class="text-sm text-gray-500">Disfruta los cursos desde casa, en el horario que quieras </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-x1 h-36 w-full object-cover" src="{{asset('img\home\imagen2.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Acceso ilimitado</h1>
                </header>
                <p class="text-sm text-gray-500">Lleva los cursos a la hora que quieras, donde quieras y cuando quieras, tienes acceso de de por vida</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-x1 h-36 w-full object-cover" src="{{asset('img\home\imagen3.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos especializados</h1>
                </header>
                <p class="text-sm text-gray-500">Aprende todo sobre Mecánica, cinemática, diseño mecánico, electrónica, diseño de circuitos, programacion, vision artificial, entre otros cursos especializados en la robótica  </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-x1 h-36 w-full object-cover" src="{{asset('img\home\imagen4.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Profesores expertos</h1>
                </header>
                <p class="text-sm text-gray-500">Todos nuestros docentes son expertos en el tem ay llevan años en el campo de la robótica</p>
            </article>

        </div>
    </section>


    

    



    

</x-app-layout>


