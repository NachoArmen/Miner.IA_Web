

<?php
include_once "header.php";
?>
<br>
<!--Formulario de registro-->
<div class="row justify-content-center">
    <div class="box">
        <div class="col-auto">
            <div class="register_card">
                <div class="form_container_fluid">
                    <h1 class="title-idx">Sign Up</h1>
                      <div class="">
                        <h2 class="title-idx">Welcome to the Miner.IA family.Feel free to sign up.</h2>
                      </div>  
                    <form action="registrologica.php" method="POST">                                           
                        <div class="row justify-content-center">
                            <div class="row">
                                <div class="col">
                                    <div class="col">
                                        <div class="row">
                                            <label class="title-idx" for="nombre">Name: </label>
                                            <input type="text" name="nombre" class="form-control input_user" placeholder="Name"> 
                                        </div>                                           
                                    </div>
                                    <br>
                                    <div class="col">
                                        <div class="row">
                                            <label class="title-idx" for="apellido">Surname: </label>
                                            <input type="text" name="apellido" class="form-control input_pass" placeholder="Surname">
                                        </div>                                        
                                    </div>
                                    <br>
                                    <div class="col">
                                        <div class="row">
                                            <label class="title-idx" for="email">E-mail: </label>
                                            <input type="email" name="email" class="form-control input_user" placeholder="E-mail">
                                        </div>                                          
                                    </div>
                                    <br>
                                    <div class="col">
                                        <div class="row">
                                            <label class="title-idx" for="contrasena">Password: </label>
                                            <input type="password" name="contrasena" class="form-control input_pass" placeholder="Password">
                                        </div>                                        
                                    </div>   
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button class='cali' id='sup' type='submit'>Sign Up</button>
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