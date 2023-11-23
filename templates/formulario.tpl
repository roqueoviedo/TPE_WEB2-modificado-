
<section class="containerlogin">
        <div class="formuLogin">
            <h1>Inicio de sesion Administrador</h1>  
            <form id="login" action='login' method="post">
                <h3>Logueate</h3>
                <input for="usuario" type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
                <input for="email" type="text" name="email" id="email" placeholder="Ingrese su email">
                <input type="password" name="contrasenia" id="contrasenia" placeholder="Ingrese su contraseña">
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div class="formuRegistro">
        <h1>Registrate</h1>  
        <form id="register" action='register' method="post">
            <input for="usuario" type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
            <input for="email" type="text" name="email" id="email" placeholder="Ingrese su email">
            <input type="password" name="contrasenia" id="contrasenia" placeholder="Ingrese una contraseña mayor a 5 digitos">
            <input type="submit" value="Enviar">
        </form>
    </div>


</section>