
<div class="absolute left-60 top-60 m-5  rounded-2xl lg:w-96 md:w-96 sm:w-full shadow-xl px-8 py-12 sm:px-12 lg:px-8  ">
    <div class="">
        @if($errors->any())
            <div class="bg-red-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                <ol>
                    @foreach($errors->all() as $error)
                        <li class="m-1">{{$error}}</li>
                    @endforeach
                </ol>
            </div>
        @endif
{{--            @if(isset($_GET['validatedData']))--}}

{{--                <div id="alertMessage"  class="p-2">--}}
{{--                    <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-teal text-sm">--}}
{{--                        <button id="btnHide"  class="inline-flex bg-indigo-600 hover:bg-indigo-400 text-white rounded-full h-6 px-3 justify-center items-center">Success</button>--}}
{{--                        <span class="inline-flex px-2">Course is added </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
    </div>
        <form action="{{asset('courses.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-12 space-y-4">
                <label for="course_title">title: </label>
                <input class="pt-2 pb-2 pl-3 w-full h-11 bg-slate-100 rounded-lg placeholder:text-slate-600 font-medium pr-20" type="text" name="course_title">
                <label  for="certificate_url">certificate: </label>
                <input class="pt-2 pb-2 pl-3  w-full h-11 bg-slate-100 rounded-lg placeholder:text-slate-600 font-medium pr-20" type="file" name="certificate_url">

                <label  for="image_url">image: </label>
                <input class="pt-2 pb-2 pl-3  w-full h-11 bg-slate-100 rounded-lg placeholder:text-slate-600 font-medium pr-20" type="file" name="image_url">

            </div>
            <div class="flex justify-center">
                <button class="mr-2 w-64 bg-indigo-600 hover:bg-indigo-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">save</button>
            </div>
        </form>
    </div>
