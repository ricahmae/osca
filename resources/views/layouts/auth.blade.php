<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSCA</title>

    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--font-awesome-icons-->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

    <!--Custom Css-->
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
</head>

<body>
    
    @include('includes.auth.navbar')

    <div class="container">
        @yield('content')
    </div>

    {{-- @include('includes.footer') --}}

    <script src="{{asset('js/jquery-slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

     {{-- custom js --}}
     <script src="{{asset('js/auth/loginValidation.js')}}"></script>
     <script src="{{asset('js/auth/forgotPasswordValidation.js')}}"></script>
     <script src="{{asset('js/auth/resetPasswordValidation.js')}}"></script>
</body>

</html>