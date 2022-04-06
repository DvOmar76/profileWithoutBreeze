{{--@php(dd($skills))--}}
@foreach($skills as $skill)
<div class="m-5 bg-white rounded-2xl lg:w-1/4 md:w-1/3 sm:w-full shadow-xl px-8 py-12 sm:px-12 lg:px-8">

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
