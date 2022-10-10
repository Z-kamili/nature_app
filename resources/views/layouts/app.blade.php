<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Naturte Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans gray-background text-gray-900 text-sm">
       
        <header class="flex items-center justify-between  py-4 px-8">

            <a href=""><img src="{{asset('img/logo.svg')}}" alt="logo"  ></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex" style="max-width:1000px">
            <div class="w-70 mr-5">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quod vitae sapiente optio hic rem voluptate doloribus, facere quisquam fugiat ex modi quas. Harum iste culpa mollitia quis consequatur dolor rerum, ullam temporibus illo dignissimos eaque ut quibusdam maxime totam eius fugiat commodi nam animi cumque labore quaerat quae est. Deleniti voluptas quasi facilis nisi quam cupiditate ad itaque ipsam quos sunt tempore impedit architecto quis minus repellendus, distinctio provident assumenda sapiente sit possimus cumque. Numquam debitis animi ex quaerat similique reiciendis quia eos dolor culpa assumenda temporibus, dignissimos, necessitatibus totam iste obcaecati quis, labore molestias perferendis illum. Eligendi voluptatibus suscipit beatae, distinctio necessitatibus vero blanditiis nisi quis quam in ut eum. Veritatis reiciendis corrupti consequuntur alias ipsam explicabo maiores aperiam repellat quasi tempora? Assumenda cumque adipisci voluptatum perferendis cupiditate et dolorum incidunt? Rem et excepturi natus. Earum totam recusandae nesciunt pariatur sapiente? Maiores aperiam minima doloremque expedita harum nulla blanditiis placeat quia perspiciatis sequi, adipisci iste, natus, consequuntur ipsum optio ratione. Dicta aliquam totam enim pariatur quis consequatur accusantium rem debitis, libero dolor ab natus necessitatibus magni repellat quas veniam modi fuga repellendus quae! Numquam eaque asperiores beatae libero sequi facere consequatur distinctio sunt obcaecati. Reprehenderit odit voluptate perferendis.
            </div>
            <div class="w-175">
               <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-blue"> All Idea (87) </a></li>
                        <li><a href="#" class="text-gray-200 transition duration-150 border-b-4 pb-3 hover:border-blue">Considering (6) </a></li>
                        <li><a href="#" class="text-gray-200 transition duration-150 border-b-4 pb-3 hover:border-blue">IN PROGRESS (1) </a></li>
                        {{-- <li><a href="#" class="">All Idea (87) </a></li> --}}
                    </ul>
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="text-gray-200 transition duration-150 border-b-4 pb-3 hover:border-blue">Implemented (10) </a></li>
                        <li><a href="#" class="text-gray-200 transition duration-150 border-b-4 pb-3 hover:border-blue">Closed (55) </a></li>
                    </ul>
               </nav>
            </div>
        </main>

    </body>
</html>
