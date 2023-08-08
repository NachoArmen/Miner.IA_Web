<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous"/> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEbT8E13Mv9O5wXwYjW3O+" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Wallpoet&display=swap" rel="stylesheet">
    <title>Miner.IA</title>
</head>
<body>
   <header>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand cali" href="index.php" target="">Miner.IA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto cali">
                 
            <?php
            
            
if (session_start() && isset($_SESSION['email'])) {
    // The user is logged in, so hide the login and register buttons
    $rol= $_SESSION['usuario'];
    if($rol=='admin'){
        echo '<li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>';
      echo '<li class="nav-item">
        <a class="nav-link" href="ABM/index.php">Admin</a>
      </li>';
    echo '<li class="nav-item">
        <form action="logout.php" method="post">
            <button type="submit">Log Out</button>
        </form>
    </li>'; 
    }else{
        echo '<li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>';
    echo '<li class="nav-item">
        <form action="logout.php" method="post">
            <button type="submit">Log Out</button>
        </form>
    </li>'; 
    }  
} else {
    // The user is not logged in, so show the login and register buttons
    echo '<li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.php">Sign Up</a>
          </li>';
}
?>
     
          </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link cali" href="cart.php">Cart 
                    
                </a>
            </li>
        </ul>
    </div>
</nav>
</header> 