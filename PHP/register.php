<?php

    require_once "C:\\xampp\\htdocs\\webproject2022\\PHP\\connection.php";

    $reg_user="";
    $reg_pass= "";
    $reg_email= "";
    $reg_confirm_password= "";

    if(isset($_SESSION['user'])){

        header("location:C:\\xampp\\htdocs\\webproject2022\\HTML_CSS_JAVASCRIPT\\2.Main_Page\\Main_Page.php");

    }

    if(isset($_REQUEST["Register_button"])){
        
        echo "<pre>";
            print_r($_REQUEST);
        echo "<pre>";

        $reg_user =$_REQUEST(['reg_user']);
        $reg_pass =$_REQUEST['reg_pass'];
        $reg_email=$_REQUEST(['reg_email'],FILTER_SANITIZE_EMAIL);
        $reg_confirm_password=$_REQUEST['reg_conf_pass'];
        
        if(empty($reg_user)){
            echo"Requires Username";
        }
        
        if(empty($reg_pass)){
            echo"Requires Password";
        }
        
        if(empty($reg_email)){
            
            echo"Requires Email";
        }
        
        if(empty($reg_confirm_password)){
            
            echo"Confirmation Password should match Password";
        }



    }
    echo "asdiajda";
?>

<html>

</html>