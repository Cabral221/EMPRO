<!DOCTYPE html>
<html lang="fr">

<head>
@include('user/layouts/head')
@section('head')
@show
</head>

<body>
  <div class="fh5co-loader"></div>
  <div id="page">
    @include('user/layouts/header')
    @section('main-content')
    @show
    @include('user/layouts/footer')
  </div>
  @section('js')
  @show
</body>

</html>
