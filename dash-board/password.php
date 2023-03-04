<?php
    try{
        $namepera = "mysql:host=localhost;dbname=startech";
        $con = new PDO ($namepera,"root","");
    }catch(Exception $e){
        print "<script>alert('Server Connection Failed...')</script>";
    }
    
    setcookie("admin","",time()+(0*60*60));
    setcookie("pass","",time()+(0*60*60));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="./password.css">
    <title>STARTECH-P(IHI:IMRAN)</title>
</head>
<body>
    <form action="password.php" method="post">
        <div class="one">
            <p>Password Authintication</p>
            <div class="two">
                <input type="text" name="admin" placeholder="ADMIN"><br>
                <input type="password" name="pass" placeholder="PASSWORD"><br>
                <button type="submit" name="btn">SUBMIT</button>
            </div>
        </div>
    </form>
</body>
</html>

<?php
    function checkInput(){
        if(!empty($_POST['admin'])){
            if(!empty($_POST['pass'])){
                return 1;
            }else{
                print "<script>alert('Please input password...')</script>";
            }
        }else{
            print "<script>alert('Please input admin...')</script>";
        }
    }

    if(isset($_POST['btn'])){
        if(checkInput() == 1){
            $admin = $_POST['admin'];
            $pass = $_POST['pass'];
            $sq = "SELECT *FROM `password` WHERE `admin`='$admin' AND `password`='$pass'";
            $st = $con-> prepare($sq);
            // $a = $admin;
            // $st->bindParam(1,$a,PDO::PARAM_STR);
            // $st->bindParam(2,$p,PDO::PARAM_STR);
            if($st -> execute() == true){
                setcookie("ddd",'ddd',time()+(3*60*60));
                setcookie("aaa",'aaa',time()+(3*60*60));
                print "<script>alert('Log in success...')</script>";
                print "<script>window.location.assign('dash.php')</script>";
            }else{
                print "<script>alert('Admin or Password incorrect...')</script>";
            }
        }
    }
?>