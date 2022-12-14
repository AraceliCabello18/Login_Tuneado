<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro de Usuarios</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
<section class="vh-100">
<div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="./img/Gatos.jpg" class="img-fluid" alt="Phone image">
        </div>
    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="./procesos/registroUsuarios.php" method="post">
            <div class="d-flex align-items-center mb-3 pb-1">
                <span class="h1 fw-bold mb-0">Registro de Usuario</span>
            </div>
        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Regístrate Ahora</h5>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" id="Usuario" class="form-control form-control-lg" name="usuario" placeholder="Usuario"/>
            <label class="form-label" for="Usuario">Usuario</label>
        </div>
        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="Password" class="form-control form-control-lg" name="password" placeholder="Password"/>
            <label class="form-label" for="Password">Password</label>
        </div>
        <div class="d-flex justify-content-around align-items-center mb-4">
        <a href="./index.php">Si Ya Tienes Cuenta Entra Papito Chulo</a>
        </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-lg btn-block">Crear nuevo usuario</button>
        
    </form>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
