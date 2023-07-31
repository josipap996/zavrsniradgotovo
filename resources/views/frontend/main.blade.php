<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="frontend">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('frontend/img/logo.png') }}" alt="" width="45px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @foreach ($menus as $menu)
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?page={{ optional($menu->page)->name }}">{{ $menu->name }}</a>
            </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>
<div class="banner" style="background-image:url({{ $pageDetails->banner_image_url }})">
    <h2>{{ $pageDetails->banner_title }}</h2>
</div>

<div class="container page-desc">
  <p>
    {!! $pageDetails->content !!}
  </p>
</div>

</body>

<footer>
  <p>&copy; 2020 All righ reserved</p>
</footer>
</html>