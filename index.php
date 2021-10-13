<?php
//local
//$host="localhost";
//$user="root";
//$password="";
//$db="user";
 
//remote
$host="remotemysql.com";
$user="RtcRRr0Djc";
$password="O3Gku8htW9";
$db="RtcRRr0Djc";
 
session_start();

$data=mysqli_connect($host,$user,$password,$db);

if($_SERVER["REQUEST_METHOD"]=="POST"){
 
    $username=$_POST["username"];
    $password=$_POST["password"]; //recieve uname and pass
 
    $sql="select * from login where username='".$username."' AND password='".$password."'";
 
    $result=mysqli_query($data, $sql);
 
    $row=mysqli_fetch_array($result);
 
    if($row["status"]=="ya"){
        $_SESSION['username']=$username;
        header("location:invited.php");
    }elseif($row["status"]=="tidak"){
        $_SESSION['username']=$username;
        header("location:notinvited.php");
    }else{
        $Color = "white";
        $Text = "USERNAME ATAU PASSWORD SALAH";

        echo '<div style="Color:'.$Color.'">'.$Text.'</div>';
    }
 
}
 
?>
 
 <!DOCTYPE html>
<html>
<head>
    <title>Pengumuman LDKO 2021</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <br>

    <div class="main">
        <p class="sign cent">Login Pengumuman LDKO</p>
        <form action="#" method="POST">
            <input class="uname cent" type="text" name="username" placeholder="Username" required>
            <br>
            <input class="pass cent" type="password" name="password" placeholder="Password" required>
            <br>
            <input class="button cent" type="submit" value="Login">
        </form>
    </div>

    <div class="footer">
        Made by : <br>
        nafisuling<br>
        sitoxxsm<br>
        BPH OSIS/MPK 2021/2022
    </div>
</body>

<style>
    body {
        background: linear-gradient(to right, #b02727, #3912eb);;
    }

    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 310px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }

    .sign {
        padding-top: 40px;
        color: #731c8d;
        font-weight: bolder;
        font-size: 23px;
    }

    .uname {
        width: 75%;
        font-size: 14px;
        color: rgb(38, 50, 56);
        background: rgba(136, 126, 126, 0.04);
        font-weight: 700;
        letter-spacing: 1px;
        padding: 10px 20px;
        border: 2px solid rgba(0, 0, 0, 0.02);
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        margin-left: 46px;
        margin-bottom: 27px;
    }
        
    .pass {
        width: 75%;
        font-size: 14px;
        color: rgb(38, 50, 56);
        background: rgba(136, 126, 126, 0.04);
        font-weight: 700;
        letter-spacing: 1px;
        padding: 10px 20px;
        border: 2px solid rgba(0, 0, 0, 0.02);
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        margin-left: 46px;
        margin-bottom: 27px;
    }
        
    
    .uname:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
            
    }
        
    .button {
        cursor: pointer;
        border-radius: 5em;
        color: #FFFFFF;
        background: #731c8d;
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        margin-left: 35%;
        font-size: 13px;
        font-weight: bold;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }

    .footer {
        color: #FFFFFF;
        position: fixed;
        text-align: right;
        right: 10px;
        bottom: 10px;
        width: 100%;
    }

    .cent {
        text-align: center;
    }
</style>
</html>
