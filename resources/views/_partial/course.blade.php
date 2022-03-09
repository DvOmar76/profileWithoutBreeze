<?php
?>
<div class="course m-5 p-4 lg:w-1/4   md:w-1/3  sm:w-1/2   rounded-lg justify-items-center justify-center transform transition duration-300 hover:scale-110">
    <a target="_blank" href="{{asset("$certificate_url")}}">
        <div
        class="p-6">
            <img class="  " src="{{asset("$image_url")}}">
        </div>
    </a>
    <div class="m-10 mb-5">
        <p class="  absolute inset-x-0 bottom-0  leading-relaxed font-bold text-2xl">{{$course_title}}</p>
    </div>
</div>
