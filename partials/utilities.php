<?php

$name = $_GET['name'];
$lastname = $_GET['lastname'];
$password = $_GET['password'];
$email = $_GET['email'];

if(isset($email)){
  if(str_contains($email, "@") && str_contains($email, ".")){
    ?>
    <div class="alert alert-success" role="alert">
      Perfect! Your email is: <strong><?= $email ?></strong>
    </div>
    <?php
  }else if(!str_contains($email, "@")){
    ?>
    <div class="alert alert-warning" role="alert">
      Error: Missing @. Please insert a valid email.
    </div>
    <?php
  }else if(!str_contains($email, ".")){
    ?>
    <div class="alert alert-warning" role="alert">
      Error: Missing dot. Please insert a valid email.
    </div>
    <?php
  }else{
    ?>
    <div class="alert alert-warning" role="alert">
      Error: Missing @ and dot. Please insert a valid email.
    </div>
    
    <?php
  }
}

?>