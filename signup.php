<?php
include_once "header.php";
?>
<br>
<h1 class="cali">Sign Up</h1>

<!--Formulario de registro-->
<div class="row justify-content-center">
    <div class="box">
        <div class="col-auto">
            <div class="register_card">
                <div class="form_container">
                    <!--En method aclaramos que usamos POST, mientras que en Action señalamos dónde está la lógica que usaremos-->
                    <form action="controlador/registroLogica.php" method="POST">
                        <div class="form-row">
                             <div class="input-group mb-3 col-6">
                                <input type="text" name="nombre" class="form-control input_user" placeholder="Nombre">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <input type="text" name="apellido" class="form-control input_pass" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3 col-12">
                                <input type="email" name="email" class="form-control input_user" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3 col-6">
                                <input type="text" name="usuario" class="form-control input_user" placeholder="Usuario">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <input type="password" name="contrasena" class="form-control input_pass" placeholder="contraseña">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit">Registrarse</button>
                        </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php
include_once "footer.php";
?>  