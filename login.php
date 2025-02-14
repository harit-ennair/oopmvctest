<?php
require_once "database.php";

if(isset($_POST["submit"])){

    $query = "select * from users where mail = '".$_POST['email']."' and password = '".$_POST['password']."'";
    $stmt=$conn->prepare($query);
    $resolt=$stmt->execute();
    $resolt=$stmt->fetch();

//    print_r( $resolt );

if($resolt){

    echo "mzyan";

}else{
    echo"mamzyanch";
}
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" placeholder="email" id="">
        <input type="password" name="password" placeholder="password" id="">
        <button type="submit" name="submit">login</button>
    </form>
</body>
</html>