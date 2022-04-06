@foreach($courses as $course)
<?php
$id=$course->id;
$image=$course->image_url;
$title=$course->course_title;
$certificate=$course->certificate_url;

?>

<div class="cards rounded  flex flex-wrap  justify-center text-center    course m-5 p-4 lg:w-1/4 xl:w-1/4   md:w-1/2  sm:w-1/2   rounded-lg justify-items-center justify-center transform transition duration-300">
       <form action="{{asset('courses.destroy')}}" method="post">
           @csrf
           @method('DELETE')
           <input type="hidden" name="id"value="{{$id}}">
           <button type="submit" >
               <img class="icon  absolute right-3 top-3 hover:scale-110" src="{{asset('image/icon/delete.png')}}" >
           </button>
       </form>
    <form action="{{asset('courses.edit')}}" method="post">
        @csrf
        @method('patch')
        <input type="hidden" name="id"value="{{$id}}">
        <button type="submit" >
            <img class="icon  absolute right-10 top-3 hover:scale-110" src="{{asset('image/icon/edit.png')}}" >
        </button>
        <div class="p-6">
            <img src="{{asset("$image")}}">
        </div>
    <div class=" mb-5">
        <p class="absolute inset-x-0 bottom-0 leading-relaxed font-bold text-2xl">{{$title}}</p>
    </div>
    </form>
</div>

@endforeach

    <a href="{{asset('courses.create')}}" class="text-center  h-8 bg-indigo-700 text-white font-bold  px-4  rounded">
        add
    </a>
