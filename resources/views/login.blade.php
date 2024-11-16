<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratikum web 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container"></div>
    <div class="card"></div>
    <div class="cord-body"></div>
    <h1>halaman login</h1>
    <br>
    
    <form action="{{route('login.Store')}}" method="post">
        @csrf
        <div class="rorm-group">
            <label for="">Username</label>
            <input type="text" name="username" id="" class="form-control">
    </div>
    <div class="rorm-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
    </div>
    <br>
    <button type="submit" class="btn btn-sm btn-primary">Login</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>