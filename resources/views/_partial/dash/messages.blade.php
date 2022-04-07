

{{--<div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">--}}
{{--    <div>--}}
{{--        ti--}}
{{--    </div>--}}
{{--</div>--}}
<!-- light mode -->
{{--@php(dd($messages))--}}

<div class="flex flex-wrap">

    @foreach($messages as $message)
        <div class=" m-5 bg-white rounded-2xl lg:w-1/3  md:w-1/3 sm:w-full shadow-xl  py-12 sm:px-12 lg:px-8 relative ">
                <div class="container" >
                    <!-- card header -->
                    <div class="py-4 bg-white border-b border-gray-200 font-bold uppercase">
                        {{$message->subject}}
                    </div>
                    <!-- card body -->
                    <div class=" bg-white border-b border-gray-200">
                        <!-- content goes here -->
                        {{$message->message}}
                    </div>
                    <!-- card footer -->
                    <div class=" relative bg-white border-gray-200 " >
                        <p class=" text-gray-500 font-bold uppercase " >{{$message->name}} </p>
                        <p class=" text-gray-400  " >{{$message->email}} </p>
                        <p class="text-gray-400  " >{{$message->created_at}}</p>
                    </div>
                    <form action="{{asset('message.destroy')}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id"value="{{$message->id}}">
                        <button class="absolute bottom-1 right-2  ml-2 w-64 bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2  border rounded-full" type="submit">delete</button>
                    </form>

                </div>
</div>
@endforeach
</div>

