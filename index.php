<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" conntent="width=device-width, initial-scale=1.0">
     <title>Login y Registro</title>
     <link rel="stylesheet" href="assets/css/estilos.css">
     
</head>
<body>

<main>

    <div class=".contenedor__todo">
    
        <div class="caja__trasera">
           <div class="caja__trasera-login">
               <h3> ¿Ya tienes una cuenta?</h3> 
               <p>Inicia Sesión para entrar en la página</p>
               <button id="btn__iniciar-sesion">Iniciar Sesión</button>
              </div>
 
               <div class="caja__trasera-register">
               <h3> ¿Aún no tienes una cuenta?</h3> 
               <p>Registrate para que puedas iniciar Sesión</p>
               <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>
        <!--Formulario de login-register-->
        <div class="contenedor__login-register">
            <!--login-->
            <form action="php/login_usuario_be.php" method="POST"
            class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Documento" name=documento>
                <input type="password" placeholder="Contraseña" name=contraseña>
                <button>Entrar</button>

            </form>
            <!--Resgistro-->
            <form action="" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name=nombre_completo>
                <input type="text" placeholder="documento" name=documento_identidad>
                <input type="password" placeholder="Contraseña" name=contraseña>
                <button>Regístrarse</button>
             </form>
            </div>
         </div>
         </main>
         <script src="assets/js/script.js"></script>">

</body>
<html>