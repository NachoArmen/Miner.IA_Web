    <!--Formulario de Login-->
    <div class="row justify-content-center">
 <div class="box">
    <div class="col-auto">
        <div class="register_card">
            <div class="d-flex justify-content-center form_container">
                <!--Action del form se dirige a su pagina de logica, para que reciba la informacion que se ingrese-->
            <form action="loginLogica.php" method="POST">
                <div class="form-row">
                    <div class="input-group mb-3 col-12">
                        <h1>Ingresar</h1>
                        </div>
                        </div>
                    <div class="form-row">
                        <div class="input-group mb-3 col-6">
                        <input type="email" name="email" id="email" class="form-control input_user" placeholder="Su mail">
                        </div>
                        <div class="input-group mb-3 col-6">
                        <input type="password" name="contrasena" id="contrasena" class="form-control input_pass" placeholder="Su contraseña">
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