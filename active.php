<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<?php

if(isset($_GET['code'])){

    $username = "root";
    $password = "";
    $database = new PDO("mysql:host=localhost; dbname=db;",$username,$password);

    $checkCode = $database->prepare("SELECT SECURITY_CODE FROM users1 WHERE SECURITY_CODE = :SECURITY_CODE");
    $checkCode->bindParam("SECURITY_CODE",$_GET['code']);
    $checkCode->execute();
    if($checkCode->rowCount()>0){

        $update = $database->prepare("UPDATE users1 SET SECURITY_CODE = :NEWSECURITY_CODE ,
 ACTIVATED=true WHERE SECURITY_CODE = :SECURITY_CODE");
        $securityCode = md5(date("h:i:s"));
        $update->bindParam("NEWSECURITY_CODE",$securityCode);
        $update->bindParam("SECURITY_CODE",$_GET['code']);


        if($update->execute()){
            echo '<div class="alert alert-success" role="alert">
  Your account is confirmed and ready to use!
  </div>';
            echo '<a class="btn btn-warning" href="try.php">Login Here</a>';
        }
    }else{
        echo '<div class="alert alert-danger" role="alert">
    Th code is not available anymore!
  </div>';
    }

}
?>