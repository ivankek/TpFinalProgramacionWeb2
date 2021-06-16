{{> header}}
<body class="bg-light text-center">
<main class="form-signin">
    <form>
        <img class="mb-4" src="img/imagotipo.svg" alt="" width="250" height="250">
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Recordarme
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
        <button class="mt-2 w-80 btn btn-lg btn-success" type="submit">Crear nueva cuenta</button>
        <p class="mt-5 mb-3 text-muted">&copy;2021</p>
    </form>
</main>
</body>