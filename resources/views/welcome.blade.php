<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.522/build/spline-viewer.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    

    <title>Sola Kabuta</title>

</head>

<body class="bg-black text-white">
    
    {{-- GRADIENT BACKGROUND TEST--}}
{{-- <body class="h-screen text-white bg-gradient-to-l from-black from-80% via-blue-950  to-black "> --}}

    {{-- NAV-BAR --}}
    <div class="container relative">
        <nav class="relative pt-3 ">  
                {{-- logo --}}
                {{-- <a href="#"><img id="logo" class="w-40" src="{{ URL ('images/log_detour.png')}}"></a> --}}
            <ul class="flex justify-center gap-64 place-items-center">
                <li><a id="solakab" class="gap-56" href="{{ route('welcome') }}">Sola Kabuta</a></li>
                <li><a href="#"><img id="logo" class="w-40" src="{{ URL ('images/log_detour.png')}}"></a></li>
                <li><label class="hamburger">
                    <input type="checkbox">
                    <svg viewBox="0 0 32 32">
                      <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                      <path class="line" d="M7 16 27 16"></path>
                    </svg>
                  </label></li>
                {{-- <li><a id="projects" href="{{ route('projects') }}">Projects</a></li>
                <li><a id="about" href="{{ route('about') }}">About</a></li>
                <li><a id="contact" href="{{ route('contact') }}">Contact</a></li>
                <li><a class="px-8 py-2 overflow-hidden text-lg bg-black border-2 border-white rounded-md z- mt-96 isolation-auto before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-blue-400 before:aspect-square before:hover:scale-150 before:hover:duration-700" href="">click me</a></li> --}}
                
            </ul>
        </nav>
    </div>

    {{-- CONTENT --}}

    <main>
        <div class="container relative flex justify-center place-items-center">
            <div class="absolute text-6xl font-bold text-center mix-blend-difference">
                <h1><span class="relative text-4xl title">HEY I AM SOLA</span> <span id="shola" class="text-lg text-green-400 animate-pulse"">(SHO.LA)</span></h1>
                <br>
                <p class="">A CREATIVE WEB DEVELOPER</p>
                <p class="absolute top-32 blur-2xl">A CREATIVE WEB DEVELOPER</p>
                <br>
                <p class="items-center text-base text-center ">Crafting top notch design and architecture to achieve
                    your goals.</p>
                <p class="absolute items-center text-base text-center top-32 blur-lg">Crafting top notch design and architecture to achieve
                    your goals.</p>
            </div>
            <div class="top-0 bottom-0 -z-20">
                <spline-viewer url="https://prod.spline.design/buk5gWzMWkDcjp0f/scene.splinecode" defer></spline-viewer>
            </div>
            
            

            {{-- SWIPER --}}

            {{-- <div class="container flex justify-center h-screen place-items-center">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="/assets/log.png" srcset="/assets/log-2x.png 2x" alt="Your image">Slide 1</div>
                        <div class="swiper-slide"><img src="/assets/Dev Icons/Mysql Logo.png" alt="Your image"></div>
                        <div class="swiper-slide">Slide 3</div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div> --}}
            
            {{-- TEST BARBA JS --}}
            {{-- <div data-barba="container" data-barba-namespace="home" class="container">
                <div class="relative w-screen h-screen header">
                    <h1>Homebase</h1>
                    <div class="header-reavealer"></div>
                </div>
                <div class="footer">(01)</div>
            </div> --}}


            <button
                class="absolute z-10 px-8 py-2 overflow-hidden text-xl bg-black border-2 border-white rounded-md mt-96 isolation-auto before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-green-400 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 hover:animate-bounce "><a
                    href="{{ route('contact') }}">Work with me</a>

            </button>
        </div>

    </main>
    <footer>
        <div class="container">
            <div class="fixed bottom-0 left-0 right-0 flex justify-center gap-5 pb-5 text-center">
                <p><a href="https://www.linkedin.com/in/sola-kabuta/">⏐ Linkedin ⏐</a></p>
                <p><a href="https://github.com/SolaKabuta">⏐ Github ⏐</a></p>
                <p><a href="https://www.behance.net/KamKabuta">⏐ Behance ⏐</a></p>
            </div>
        </div>


    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>




</body>

</html>
