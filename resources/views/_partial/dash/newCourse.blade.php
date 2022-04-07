    <div class="absolute left-60 top-60 m-5  rounded-2xl lg:w-96 md:w-96 sm:w-full shadow-xl px-8 py-12 sm:px-12 lg:px-8  ">
        <form action="{{asset('courses.store')}}" method="post">
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
