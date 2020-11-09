<?php 
            $db_host="localhost";
            $db_name="btth04";
            $db_username="root";
            $db_password="";
            $con= mysqli_connect($db_name,$db_username,$db_password,$db_name);
            if(mysqli_connect_errno()){
                echo"Failed to connect";
                exit();
            }echo"connect success!"
            ?>