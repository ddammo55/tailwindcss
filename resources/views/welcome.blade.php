<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class=" text-gray-600">

    <div>
        <div>
            <nav>
                <div>
                    <h1 class=" font-bold uppercase p-4 border-b border-gray-100">
                        <a href="/">Food Ninja</a>
                    </h1>
                </div>

                <ul>
                     <li class=" text-gray-900">
                         <a href="">
                             <span>Home</span>
                         </a>
                     </li>
                     <li>
                         <a href="">
                             <span>About</span>
                         </a>
                     </li>
                     <li>
                         <a href="">
                             <span>Contact</span>
                         </a>
                     </li>
                </ul>
            </nav>
        </div>{{--  end nav --}}
       
        <main class=" px-16 py-6">
             <div>
                 <a href="#" class=" text-primary">Log in</a>
                 <a href="#">Sign up</a>
             </div>

             <header>
                 <h2 class=" text-gray-700 text-6xl font-semibold">Recipes</h2>
                 <h3 class=" text-2xl">For Ninjas </h3>
             </header>

             <div>
                 <h4 class=" font-bold mt-12 pb-2 border-b border-gray-200">Latest Recipes</h4>

                 <div>
                     {{-- cards go here --}} 
                     <div class="mt-8">
                         <img src="/img/001.png" alt="">
                         <div>
                             <span>5 Bean Chilli Stew</span>
                             <span>Recipe by Mario</span>
                         </div>
                     </div>
                 </div>


                 <h4 class=" font-bold mt-12 pb-2 border-gray-200">Most Popular</h4>
                 <div class=" mt-8">
                     {{-- cards go here --}}
                 </div>

                 <div>
                     <div class="bg-secondary-100 text-secondary-200">Load more </div>
                 </div>

             </div>
       
        </main>
    </div>


</body>
</html>