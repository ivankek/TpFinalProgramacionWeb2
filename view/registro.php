{{>header}}
<body>

<div class="container d-flex flex-column py-5">
    <div class="align-self-center rounded py-3 px-5 shadow">
    <h1 class="text-center font-weight-bold mb-3">Crea tu cuenta gratis</h1>
        <p class="text-center text-muted mb-4">Ingresa la siguiente información para registrarte.</p>
        <form action="/registro/registrarUsuario" method="post">
            <div class="form-row mb-2">
                <div class="form-group">
                    <label class="font-weight-bold mb-1">Nombre<span class="text-danger">*</span></label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group mt-3">
                    <label class="font-weight-bold mb-1">Apellido<span class="text-danger">*</span></label>
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                </div>
                <div class="form-group mt-3">
                    <label class="font-weight-bold mb-1">Legajo <span class="text-danger">*</span></label>
                    <input type="number" name="legajo" class="form-control" placeholder="Legajo">
                </div>
                <div class="form-group mt-3">
                    <label class="font-weight-bold mb-1">Dni<span class="text-danger">*</span></label>
                    <input type="number" name="dni" class="form-control" placeholder="Dni">
                </div>
                <div class="form-group mt-3">
                    <label class="font-weight-bold mb-1">Fecha de nacimiento<span class="text-danger">*</span></label>
                    <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento">
                </div>
                <div class="form-group mt-3">
                    <label class="font-weight-bold mb-1">Tipo de licencia<span class="text-danger">*</span></label>
                    <input type="text" name="tipo_licencia" class="form-control" placeholder="Tipo de licencia">
                </div>
                <div class="form-group mt-3">
                    <label class="font-weight-bold mb-1">Email<span class="text-danger">*</span></label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mt-3">
                    <label class="font-weight-bold mb-1">Contraseña<span class="text-danger">*</span></label>
                    <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
                </div>

                <div class="form-group mb-3">
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas
                            nuestro aviso de privacidad y los términos y condiciones</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-5 col-md-2">Regístrate</button>
                <a href="login" class="btn btn-dark col-5 col-md-2">Atras</a>
        </form>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</body>
