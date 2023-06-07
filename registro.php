

<?php
include_once "header.php";
?>

<!--Formulario de registro-->
<div class="row justify-content-center">
    <div class="box">
        <div class="col-auto">
            <div class="register_card">
                <div class="form_container">
                    <!--Action del form se dirige a su pagina de logica, para que reciba la informacion que se ingrese-->
                    <form action="registrologica.php" method="POST">
                        <div class="form-row">
                            <div class="input-group mb-3 col-12">
                                <h1>Registrarse</h1>
                            </div>
                        </div>
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
                                <input type="password" name="contrasena" class="form-control input_pass" placeholder="contraseña">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            
                            <?php echo "<button id='sup' type='submit'>Registrarse</button>"; ?>
                        </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
include_once "footer.php";
?>  