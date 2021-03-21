@extends('layouts.app')

@section('content')
<div class="flex justify-center">
<div class="w-5/12 bg-white p-5 rounded-lg">
    @if(session('status'))
        {{session('status')}}
    @endif
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" placeholder="Your email"
            class="bg-blue-100 border-2 w-full p-3 rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">

            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Your password"
            class="bg-blue-100 border-2 w-full p-3 rounded-lg @error('password') border-red-500 @enderror" value="">

            @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>
    

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
        </div>

    </form>
</div>
</div>

@endsection