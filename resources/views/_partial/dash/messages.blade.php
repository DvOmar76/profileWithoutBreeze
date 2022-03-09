<?php

@include('dashboard')

{{--<div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">--}}
{{--    <div>--}}
{{--        ti--}}
{{--    </div>--}}
{{--</div>--}}
<!-- light mode -->
@section('content')
                        @foreach($messages as $message)
                            <div class="max-w-2xl mx-auto sm:px-6 sm:w-full lg:px-8 m-5 md:w-full lg:w-1/3">
                                <div class="overflow-hidden shadow-md">
                                    <!-- card header -->
                                    <div class="relative px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase">
                                        {{$message->subject}}
                                        <div class=" absolute bottom-0 right-0 text-gray-300 lowercase" > </div>
                                        <div class=" leading-relaxed font-bold text-2xl">
                                            <form action="{{asset('message.destroy')}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id"value="{{$id}}">
                                                <button type="submit" >
                                                    <img class="icon  absolute right-3 top-3 hover:scale-110" src="{{asset('image/icon/delete.png')}}" >
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="p-6 bg-white border-b border-gray-200">
                                        <!-- content goes here -->
                                        {{$message->contentMessage}}
                                    </div>
                                    <!-- card footer -->
                                    <div class=" relative p-6 bg-white border-gray-200 text-right " >
                                        <div class="absolute top-0 left-2 text-gray-500 font-bold	  uppercase " >{{$message->name}} </div>
                                        <div class=" absolute bottom-0 left-2 text-gray-400  " >{{$message->email}} </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

@endsection
{{--<!-- divider -->--}}
{{--<hr class="my-6">--}}
