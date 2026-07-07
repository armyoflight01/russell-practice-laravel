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

    <nav class="m-[80px] flex justify-evenly items-center bg-pink-400 p-[20px] rounded-[20px]">

     <h1 class="text-2xl text-white">IT RAFAEL</h1>

     <ul class="flex gap-[20px] text-xl text-white">
        <li><a id="loginbtn" href="">Home</a></li>
        <li><a href="">Contact</a></li>
     </ul>

  <i class="fa-regular fa-user text-xl text-white"></i>
  <i class="fa-solid fa-magnifying-glass text-xl text-white"></i>

    </nav>

    <!---End of the Navbar---> 
    

    <section class="relative m-[80px] flex items-center justify-center min-h-[400px]">

        <div class="flex flex-col items-center justify-center border border-black p-[20px] gap-[20px] bg-blue-400">
         
            <h2 class="text-white">Login Page</h2>
            <input type="email" placeholder="Enter Email">
            <input type="password" placeholder="Enter Password">
            <button class="border border-none p-[10px] text-white bg-pink-300 rounded">Submit</button>

        </div>

    </section>


     <section class="m-[80px]">

      <div class="grid grid-cols-[repeat(3,_1fr)] gap-6 ">


        <div class="flex flex-col items-end justify-start relative nth-[2]:[&>h2]:bg-red-500">
            <h2 class="border border-none bg-blue-400 p-[20px] rounded-[100%] text-white absolute mt-[10px] mr-[10px]">30 0ff</h2>
            <img class="w-[100%] h-[40%]"  src="{{ asset('images/1.jpg') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consectetur nobis repellendus suscipit corporis harum possimus, libero mollitia unde voluptate totam architecto ex. Porro possimus sapiente adipisci? Natus, tempore dolores?</p>
        </div>

             <div class="flex flex-col items-end justify-start relative">
            <h2 class="border border-none bg-blue-400 p-[20px] rounded-[100%] text-white absolute mt-[10px] mr-[10px]">30 0ff</h2>
            <img class="w-[100%] h-[40%]"  src="{{ asset('images/1.jpg') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consectetur nobis repellendus suscipit corporis harum possimus, libero mollitia unde voluptate totam architecto ex. Porro possimus sapiente adipisci? Natus, tempore dolores?</p>
        </div>


            <div class="flex flex-col items-end justify-start relative">
            <h2 class="border border-none bg-blue-400 p-[20px] rounded-[100%] text-white absolute mt-[10px] mr-[10px]">30 0ff</h2>
            <img class="w-[100%] h-[40%]"  src="{{ asset('images/1.jpg') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consectetur nobis repellendus suscipit corporis harum possimus, libero mollitia unde voluptate totam architecto ex. Porro possimus sapiente adipisci? Natus, tempore dolores?</p>
        </div>

         <div class="flex flex-col items-end justify-start relative">
            <h2 class="border border-none bg-blue-400 p-[20px] rounded-[100%] text-white absolute mt-[10px] mr-[10px]">30 0ff</h2>
            <img class="w-[100%] h-[40%]"  src="{{ asset('images/1.jpg') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consectetur nobis repellendus suscipit corporis harum possimus, libero mollitia unde voluptate totam architecto ex. Porro possimus sapiente adipisci? Natus, tempore dolores?</p>
        </div>

           <div class="flex flex-col items-end justify-start relative">
            <h2 class="border border-none bg-blue-400 p-[20px] rounded-[100%] text-white absolute mt-[10px] mr-[10px]">30 0ff</h2>
            <img class="w-[100%] h-[40%]"  src="{{ asset('images/1.jpg') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consectetur nobis repellendus suscipit corporis harum possimus, libero mollitia unde voluptate totam architecto ex. Porro possimus sapiente adipisci? Natus, tempore dolores?</p>
        </div>


              <div class="flex flex-col items-end justify-start relative">
            <h2 class="border border-none bg-blue-400 p-[20px] rounded-[100%] text-white absolute mt-[10px] mr-[10px]">30 0ff</h2>
            <img class="w-[100%] h-[40%]"  src="{{ asset('images/1.jpg') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consectetur nobis repellendus suscipit corporis harum possimus, libero mollitia unde voluptate totam architecto ex. Porro possimus sapiente adipisci? Natus, tempore dolores?</p>
        </div>

      </div>
  <!---father end--->
   

     </section>

    <!---END Home landing page--->


    <hr class="border border-black">
    <section class="flex items-center justify-center p-[20px]">
        <button class="border border-black p-[10px] rounded">GET MORE</button>
    </section>
    <hr class="border border-black">


    <footer class="m-[80px] flex justify-evenly ">
        
        <ul class="text-2xl font-bold flex flex-col gap-[20px]">
            <li ><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Login</a></li>
        </ul>
        
 
       <div class="flex gap-[50px]">
          <i class="fa-regular fa-user text-2xl"></i>
         <i class="fa-solid fa-magnifying-glass text-2xl"></i>
       </div>

    </footer>


</body>
</html>