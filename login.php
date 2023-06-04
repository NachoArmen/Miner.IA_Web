<?php
include_once "header.php";
?>
<br>

<h1 class="cali">Login</h1>
<!--Formulario de Login-->
<div class="row justify-content-center">
 <div class="box">
    <div class="col-auto">
        <div class="register_card">
            <div class="d-flex justify-content-center form_container">
                <!--En method aclaramos que usamos POST, mientras que en Action señalamos dónde está la lógica que usaremos-->
            <form action="controlador/loginLogica.php" method="POST">              
                    <div class="form-row">
                        <div class="input-group mb-3 col-6">
                        <input type="email" name="email" class="form-control input_user" placeholder="Su mail">
                        </div>
                        <div class="input-group mb-3 col-6">
                        <input type="password" name="contrasena" class="form-control input_pass" placeholder="Su contraseña">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="submit">Ingresar</button>
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