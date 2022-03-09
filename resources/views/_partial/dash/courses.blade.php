<?php

?>

<div class="cards m-5 p-4 lg:w-1/4   md:w-1/3  text-center   rounded-lg justify-items-center justify-center transform transition duration-300  ">
    <a target="_blank" href="{{asset('course.update',)}}">
        <div
            class="p-6">
            <img src="{{asset("$image_url")}}">
        </div>
    </a>
    <div class="m-10 mb-5">
        <p class="  absolute inset-x-0 bottom-3   leading-relaxed font-bold text-2xl">{{$course_title}}</p>
        <div class=" leading-relaxed font-bold text-2xl">
            <img class="icon  absolute right-3 top-3 hover:scale-110" src="{{asset('image/icon/edit.png')}}" >
            <img class="icon absolute right-10 top-3 hover:scale-110" src="{{asset('image/icon/delete.png')}}" >
        </div>

    </div>
</div>
