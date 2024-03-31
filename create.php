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

$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$venu=$_POST['venu'];
$description=$_POST['description'];
//$Link=$_GET['Link'];
$Link = isset($_GET['Link']) ? $_GET['Link'] : '';
$sql=" INSERT INTO `evento`.`evento`  ( `name`, `date`, `time`, `venu`, `description`) VALUES ('$name', '$date', '$time', '$venu', '$description' )";

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


    <link rel="stylesheet" href="land.css">
</head>
<style>
    
    body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin-right:200px;
}

.form {
    width: 300px; /* Adjust the width of the form as needed */
}

.input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border-radius:1rem;
}

.textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

.btn {
    width: 100%;
    padding: 10px;
    background-color: blue;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

</style>
<body>
    <div class="c">
        <header class="header">
            <a href="#" class="logo"><span>E</span>vento</a>
    
            <nav class="navbar">
                
                <a href="admin_page.php">home</a>
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
   <div class="form">
   <form  action="create.php" method="post">
    <input type="text" name="name" class="input" id="name" placeholder="Enter event name"><br><br>
    <input type="text" name="date"class="input" id="date" placeholder="Enter date"><br><br>
    <input type="text" name="time" class="input"id="time" placeholder="Enter time"><br><br>
    <input type="text" name="venu"class="input" id="venu" placeholder="Enter venue"><br><br>
    
    <textarea type="text" name ="description" class="input" id="description" cols="100" rows="10" placeholder="Event description"></textarea>
    
    
    <button class="btn">SUBMIT</button>

</form>
</div>
    
</body>
</html>
