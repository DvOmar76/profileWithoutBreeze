{{--@php(dd($skills))--}}

<div class="flex flex-wrap">

    @foreach($skills as $skill)
    <div class="m-5 bg-white rounded-2xl lg:w-1/4 md:w-1/3 sm:w-full shadow-xl px-8 py-12 sm:px-12 lg:px-8 relative ">

            <form action="{{asset('skills.update')}}" method="post">
                @csrf
                @method('patch')
                <input name="id" type="hidden" value="{{$skill->id}}">

                <div class="mb-12 space-y-4">
                    <label for="skill_title">title: </label>
                    <input class="pt-2 pb-2 pl-3 w-full h-11 bg-slate-100 rounded-lg placeholder:text-slate-600 font-medium pr-20" type="text" name="skill_title" value="{{$skill->skill_title}}">
                    <label  for="percentage">percentage: </label>
                    <input class="pt-2 pb-2 pl-3  w-full h-11 bg-slate-100 rounded-lg placeholder:text-slate-600 font-medium pr-20" type="text" name="percentage" value="{{$skill->percentage}}">
                </div>
            <div class="flex justify-center">
                <button class="mr-2 w-64 bg-indigo-600 hover:bg-indigo-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">save</button>
            </form>
                <form action="{{asset('skills.destroy')}}" method="post">
                    @csrf
                    @method('delete')
                    <input name="id" type="hidden" value="{{$skill->id}}">

                    <button class="ml-2 w-full bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">delete</button>
            </div>
            </form>


    </div>
    @endforeach
<a class="rightButton" href="{{asset('skills.create')}}">
    <button class=" shadow-xl p-0 w-12 h-12 bg-indigo-600 rounded-full hover:bg-indigo-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none">
        <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
            <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399 C15.952,9,16,9.447,16,10z" />
        </svg>
    </button>
</a>
</div>



