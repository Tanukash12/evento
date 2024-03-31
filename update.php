<?php
$a=0;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to this database failed due to".mysqli_connect_error());
    
}
 $id=$_GET['updateid'];
// $sql="select * from `evento` where event_id=$id";
// $result=mysqli_query($con,$sql);
// $row=mysqli_fetch_assoc($result);
// $name=$row['name'];
// $date=$row['date'];
// $time=$row['time'];
// $venu=$row['venu'];
// $description=$row['description'];







$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$venu=$_POST['venu'];
$description=$_POST['description'];
//$Link=$_GET['Link'];
$Link = isset($_GET['Link']) ? $_GET['Link'] : '';
$sql="update `evento` set event_id=$id, name='$name', date='$date',time='$time',venu='$venu',description='$description' where event_id=$id";

if($con->query($sql) == true){
    //echo"Sucessfully recieved!";
$a=1;
}
else{
    echo"ERROR :$sql <br> $con->error";
}

$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- <link rel="stylesheet" href="land.css"> -->
</head>
<body>
    <div class="c">
        <header class="header">
            <a href="#" class="logo"><span>E</span>vento</a>
    
            <nav class="navbar">
                
                <a href="admin_user.php">home</a>
                <a href="show.php">view</a>
                <a href="create.php">create</a>
                <a href="logout.php" class="btn">logout</a>
                
               
            </nav>
    
            <div id="menu-bars" class="fas fa-bars"></div>
        </header>

    </div>
   <!-- INSERT INTO `evento` (`event_id`, `name`, `date`, `time`, `venu`, `description`) VALUES ('-12', 'AIWAR', '2024-03-31', '', 'Haldighati', 'ai war in haldighati'); -->
    
   <?php
if($a==1){
echo"<p class='submit'><b>Your response has been recorded. Thank you! </b></p>";
}
?>
   
   <form action=" " method="post">
    <input type="text" name="name" id="name" placeholder="Enter event name"value=<?php echo $name;?>>
    <input type="text" name="date" id="date" placeholder="Enter date" value= <?php echo $date;?>>
    <input type="text" name="time" id="time" placeholder="Enter time" value=<?php echo $time;?>>
    <input type="text" name="venu" id="venu" placeholder="Enter venue" value=<?php echo $venu;?>>
    
    <textarea type="text" name ="description" id="description" cols="100" rows="10" placeholder="Event description"value=<?php echo $description;?>></textarea>
    
    
    <button class="btn">Update</button>

</form>
    
</body>
</html>
