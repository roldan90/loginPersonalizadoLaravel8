<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login de usuario</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Login de usuario</h2>
                <form action="{{ route('logear') }}" method="post">
                    @csrf
                    <label for="">Usuario</label>
                    <input type="text" name="name" class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                    <button class="btn btn-primary mt-3">
                        Entrar
                    </button>
                    <a href="{{ route('registro') }}" 
                    class="btn btn-success mt-3">
                        Registrar
                    </a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>