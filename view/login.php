{{> header}}

<body class="bg-light text-center">

<div class="w-100 h-25 d-flex justify-content-center">

<main class="form-signin col-8 col-md-6 col-lg-3">
    <form action="/login/loguearUsuario" method="post">
        <img src="images/imagotipo.svg" alt="" style="
    width: 200px;
    height: 200px;
">
        <div class="form-floating">
            <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mt-2">
            <input type="text" name="contraseña" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3 mt-3">
            <label>
                <input type="checkbox" value="remember-me"> Recordarme
            </label>
        </div>
        <button class="col-8 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
        <a href="registro" class="col-8 mt-2 w-80 btn btn-lg btn-success">Crear nueva cuenta</a>
        <p class="mt-5 mb-3 text-muted">&copy;2021</p>
    </form>
</main>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>