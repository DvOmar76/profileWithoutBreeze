<div class="flex items-center justify-center h-screen  from-indigo-500 to-indigo-800">
    <div class=" bg-white font-semibold  text-center rounded-3xl border shadow-lg p-12 max-w-xs">
        <form action="{{asset('courses.store')}}">
            @method('post')
            @csrf
            <label for="course_title">title: </label>
            <input type="text" name="course_title">
            <label for="certificate_url">certificate: </label>
            <input type="file" name="certificate_url">
            <label for="image_url">image: </label>
            <input type="file" name="image_url">
            <div class="mt-4">
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit">save</button>
            </div>
        </form>

    </div>
</div>
