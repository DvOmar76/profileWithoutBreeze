<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .image {
            /*border-radius: 73px;*/
            /*background: #ffffff;*/
            /*box-shadow:  5px 5px 10px #fafafa,*/
            /*-5px -5px 10px #ffffff;*/
            /*border-radius: 50px;*/
            /*background: #ffffff;*/
            /*box-shadow:  5px 5px 10px #f7f7f7,*/
            /*-5px -5px 10px #ffffff;*/
            border-radius: 49px;
            background: #ffffff;
            box-shadow: 5px 5px 10px #f7f7f7,
            -5px -5px 10px #ffffff;
        }

        .cards {
            border-radius: 50px;
            background: #ffffff;
            box-shadow:  8px 8px 8px 5px  #dbdbdb,
            -8px -8px  8px #ffffff;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;

        }

        .contact{
            border-radius: 25px;
            background: #ffffff;
            box-shadow: inset -7px 7px 14px #dbdbdb,
            inset 7px -7px 14px #ffffff;
        }
    </style>
</head>
<body class="antialiased bg-white">


<!-- component -->
<style>
    #menu-toggle:checked + #menu {
        display: block;
    }
</style>
<div class="antialiased bg-gray-50">
    <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 bg-gray-50">
        <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
            <nav>
                <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="#home">Home</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="#About_Me">About</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="#Courses">myCourses</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href="#Contact_Me">Contact</a></li>

                    @if (Route::has('login'))
                        @auth
                            <li> <a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"  href="{{ url('/dashboard') }}">Dashboard</a></li>
                        @else
                            <li>  <a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="{{ route('login') }}">Log in</a></li>

                            @if (Route::has('register'))
                                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"  href="{{ route('register') }}" >Register</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </nav>
        </div>

    </header>


</div>



<div class=" flex flex-wrap flex-wrap-reverse   items-center justify-center p-6   rounded rounded-bl-full bg-gray-50 p-10 " id="home">
    <div class=" w-full image md:w-1/2 sm:w-full  ">
        <div class="text-2xl font-medium">hi I'm</div>
        <div class="text-5xl font-bold ">WEB DEVELOPER</div>
        <div class="text-3xl ">Omar Alsulami</div>
        Graduated from University of Jeddah with a bachelor’s degree in Information Technology with Second Honors, fell
        in loveWith Back-end - (PHP, Laravel, MySQL ) - Debian Linux, always be curious and try to learn new things.
    </div>
    <div class="md:w-1/2  sm:w-full  lg:w-1/3   ">
        <div class="   ">
            <img src="{{'image/bg.png'}}">
        </div>
    </div>
</div>


<div class="About_Me m-5" id="About_Me">
    <div class="text-center text-3xl font-bold">
        About Me
    </div>
    <div class="flex flex-wrap   items-center justify-center p-6 ">
        <div class=" w-full p-5 pt-8 pb-8 m-2 image md:w-1/2 sm:w-full lg:w-1/3    ">
            <div class="text-2xl font-bold ">Graduated from University of Jeddah</div>
            <div class="text-1xl ">I was awarded the Bachelor of Information Technology From The Faculty Of Computer
                Science & Engineering With an accumulation grade point average of 4.56 out of 5 [EXCELLENT with -Second
                Honors-] Jeddah, Saudi Arabia
            </div>
        </div>
        <div class=" w-full rounded md:w-1/2  ">
            <div class=" p-3  w-full">
                @foreach ($skills as $skill)
                    @include("_partial.progressBars_skills",["skill_title"=>"$skill->skill_title","percentage"=>"$skill->percentage"])
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="Courses" id="Courses">
    <div class="text-center text-3xl font-bold">
        My courses
    </div>
    <section class="text-gray-700 body-font center  container">
        <div>
            <div class="flex flex-wrap  justify-center text-center   m-20">
                @foreach($courses as $course)
                    @include('_partial.course',[
                     'course_title'=>"$course->course_title",
                     'image_url'=>"$course->image_url",
                     'certificate_url'=>"$course->certificate_url"])
                @endforeach
            </div>
        </div>
    </section>

</div>
<div class="Contact_Me" id="Contact_Me">
    <div class="text-center text-3xl font-bold m-3">
        Contact Me
    </div>

    @if($errors->any())
        <div class="bg-red-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
            <ol>
                @foreach($errors->all() as $error)
                    <li class="m-1">{{$error}}</li>
                @endforeach
            </ol>
        </div>
    @endif
    @if(isset($_GET['alert']))

        <div id="alertMessage"  class="p-2">
            <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-teal text-sm">
                <button id="btnHide"  class="inline-flex bg-indigo-600 hover:bg-indigo-400 text-white rounded-full h-6 px-3 justify-center items-center">Success</button>
                <span class="inline-flex px-2">Your message is received </span>
            </div>
        </div>
    @endif
    <div class="flex flex-wrap  items-center justify-center sm:p-20   bg-gray-50 ">
        <div class=" p-6   xl:w-1/3 lg:w-1/2  md:w-full sm:w-full  ">
            @include('_partial.contact',['url'=>"/image/icon/email.png",'title'=>'Email','content'=>'dvomaralsulami@gmail.com'])
            @include('_partial.contact',['url'=>'/image/icon/phone-call.png','title'=>'Phone','content'=>'+966576371633'])
            @include('_partial.contact',['url'=>'/image/icon/locator.png','title'=>'Location','content'=>'Jeddah'])
        </div>

        <div class=" p-5 lg:w-1/2  md:w-full sm:w-full ">
            <form class="w-full max-w-lg " method="post" action="{{asset('message.store')}}">
                @csrf
                @method('post')
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <input class="appearance-none block w-full bg-white text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-600"  type="text" name="name" placeholder="Your Name">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <input class="appearance-none block w-full bg-white text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-600"  type="email" name="email" placeholder="Your Email">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <input  class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-600"  type="text" name="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <textarea class=" form-control  block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " rows="3" name="message" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/ pl-9">
                        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>


<script>
    $(document).ready(function (){
        $('.course').hover(function (){
            $(this).toggleClass('cards')
        })
        $('#btnHide').click(function (){
            $('#alertMessage').hide()
        })
        // $('.course').click(function (){
        //     window.location.href = "http://www.w3schools.com";
        // })

    })
</script>


</body>
</html>
