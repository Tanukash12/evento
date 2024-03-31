<?php
    
    $server="localhost";
    $username="root";
    $password="";
    
    $con= mysqli_connect($server,$username,$password);
    $db= mysqli_select_db($con,'evento');

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="delete from `evento` where event_id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:show.php');
        }
    }
    ?>