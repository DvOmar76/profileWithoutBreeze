
@foreach($courses as $course)
<div class="cards  flex flex-wrap  justify-center text-center    course m-5 p-4 lg:w-1/4 xl:w-1/4   md:w-1/2  sm:w-1/2   rounded-lg justify-items-center justify-center transform transition duration-300 hover:scale-110">
        <div class="p-6">
            <img src="{{asset("$course->image_url")}}">
        </div>
    <div class=" mb-5">
        <p class="absolute inset-x-0 bottom-0   leading-relaxed font-bold text-2xl">{{$course->course_title}}</p>
    </div>
</div>
@endforeach
