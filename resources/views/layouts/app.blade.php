<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body class="bg-blue-100" style="height:100%; margin:0">
    <nav class="p-6 bg-white flex justify-between">
      <ul class="flex items-center">
        <li class="p-3">
          <a href="">Home</a>
        </li>
        <li class="p-3">
          <a href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li class="p-3">
          <a href="{{route('posts')}}">Posts</a>
        </li>
      </ul>

      <ul class="flex items-center">
        <li class="p-3">
          <a href="">Chance Croft</a>
        </li>
        <li class="p-3">
          <a href="">Login</a>
        </li>
        <li class="p-3">
          <a href="{{route('register')}}">Register</a>
        </li>
        <li class="p-3">
          <a href="">Logout</a>
        </li>
      </ul>

    </nav>
    <div style="min-height:100%; margin-bottom:-50px;">


    @yield('content')

    <div style="height:50px;"></div>
    </div>
    @yield('footer')
  </body>
</html>