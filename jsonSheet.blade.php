<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> {{-- resource jquery--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous"> {{-- resource bootstrap --}}
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/style-googlesheet-index.css')}}" rel="stylesheet"/> {{-- get style css--}}

</head>
{{--start body--}}
<body>
{{--start navbar--}}
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.html">HARAKIRI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('curl')}}">PHP</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('jsku')}}">JS</a></li>
            </ul>
        </div>
    </div>
</nav>
{{--end navbar--}}

{{--start header--}}
<header class="masthead" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>HARAHKIRI</h1> {{-- judul--}}
                    <span class="subheading">Rumah Makan Online Nan Keren </span>{{-- sub judul--}}
                </div>
            </div>
        </div>
    </div>
</header>
{{--end header--}}
{{-- start card --}}
<div class="section"> {{-- start section--}}
    <div class="container py-3">
        <div class="row col-lg-10 mx-auto">
            <div class="col-md-4 py-3">
            {{-- card--}}
                <div id="cardku">
                   {{-- this card from import --}}
                </div>
            {{-- end card--}}
            </div>
        </div>
    </div>
</div> {{-- end sections--}}
{{--end card--}}
scipr

{{--end body--}}

</body>
{{-- script --}}
<script src="{{asset('js/jsonSheet.js')}}"></script>
</html>


