<!DOCTYPE html>
<html lang="en">

<head>

  @include('user/layouts/head')

</head>

<body>

@section('bg-img',asset('public/user/img/home-bg.jpg'))

  @include('user/layouts/header')

  @section('main-content')

  	@show

  @include('user/layouts/footer')

</body>

</html>
