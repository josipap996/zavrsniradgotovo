<!DOCTYPE html>
<html data-theme="mi-light">

<head>
    <title>Title of the document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body >

<main class="mi-content" style="margin-top: 0px !important;min-height: 100vh;">
   <div class="row">
    <div class="col-sm-5 m-auto login-box">
        <div class="mi-card">
            <form action="{{ route('login.make') }}" method="POST">
                @csrf
                <div class="mi-header success transparent">ENTER VALID INFORMATION TO LOGIN</div>
                <div class="mi-body">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="remeber_me" type="checkbox" value="" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">
                        Remember me
                    </label>
                </div>
                </div>
                <div class="mi-footer text-center">
                    <button class="butn success">Login</button>
                </div>
            </form>

        </div>
    </div>
</div> 
</main>


</body>

</html>
