<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
  @vite([
    'resources/css/app.css',
    'resources/js/app.js'
])
    <title>Home Page</title>
</head>

<body>

    <nav class="m-[80px] flex justify-evenly items-center">

     <h1 class="text-2xl">IT RAFAEL</h1>

     <ul class="flex gap-[20px] text-xl">
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
     </ul>

  <i class="fa-regular fa-user text-xl"></i>
  <i class="fa-solid fa-magnifying-glass text-xl"></i>

    </nav>

    <!---End of the Navbar---> 


    <section>

        <div>
            <img src="{{ asset('images/1.jpg') }}" alt="">
        </div>

        <div>
             <img src="{{ asset('images/2.jpg') }}" alt="">
        </div>

    </section>

    <!---END Home landing page--->



</body>
</html>