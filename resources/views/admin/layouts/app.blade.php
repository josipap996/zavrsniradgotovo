<!DOCTYPE html>
<html lang="en" data-theme="mi-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('user.list') }}">MANAGE USERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('role.list') }}">MANAGE ROLES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('page.list') }}">MANAGE PAGE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('menu.list') }}">MANAGE MENU</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
       <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@php
  if ($errors->any()){
      foreach ($errors->all() as $error){
        toastr()->addError($error);
      }
  }
@endphp

  <main class="mi-content">
    <div class="container">
        @yield('content')
    </div>
  </main>

<footer>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

<script>
  $("#dataTable").DataTable({
        dom: 'Blfrtip',
        buttons: [
            'excelHtml5', 'csvHtml5'
        ],
        "pageLength": 10,
        "lengthMenu": [10, 25, 50, 75, 100]
    });
</script>
</body>
</html>