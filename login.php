   

<?php
include_once "header.php";
?>


 <!--Formulario de Login-->
 <div class="row justify-content-center">
    <div class="box">
        <div class="col-auto">
            <div class="register_card">
                <div class="form_container_fluid">
                    <h1 class="title-idx">Log In</h1>
                      <div class="">
                        <h2 class="title-idx">Glad to have you back.Please identify yourself.</h2>
                      </div>  
                    <form action="loginlogica.php" method="POST">                                           
                        <div class="row justify-content-center">
                            <div class="row">
                                <div class="col">
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





<!--
    <div class="row justify-content-center">
    <div class="box">
        <div class="col-auto">
            <div class="register_card">
                <div class="form_container_fluid">
                    <h1 class="title-idx">Log In</h1>
                      <div class="">
                        <h2 class="title-idx">Glad to have you back.Please identify yourself.</h2>
                      </div>  
                    <form action="loginlogica.php" method="POST">                                           
                        <div class="row justify-content-center">
                            <div class="row">
                                <div class="col">
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
-->
























<br>




<?php
include_once "footer.php";
?>  