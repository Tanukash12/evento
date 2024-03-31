<!doctype html>
<html lang="en">
  <head>
    <!-- THIS IS UPDATE PAGE -->
    <!-- ADD CSS AND FORM OUTPUT-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <title>Evento</title>
  </head>
  <style>
    

.c .header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 10000;
    /* background: #333; */
    background-color : black;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 5%;
    margin-top:-20px;
    margin-bottom:-20px;
    
}


.header .logo {
    font-weight: bolder;
    color: #fff;
    font-size: 2rem;
}

.c .header .logo span {
    color: var(--theme-color);
    color :  blue;
    background-color : black;
}

.c .header .navbar a {
    font-size: 1.2rem;
    color: black;
    margin-left: 2rem;
    
    
}

.c .header .navbar a:hover {
    color: var(--theme-color);
}

#menu-bars {
    font-size: 2rem;
    color: #fff;
    cursor: pointer;
    display: none;
}
.center{
  margin-top:6rem;

}
*{
  background-color:beige;
  color:black;
}
.d{
 
  color:black;
}
form {
    width: 80%;
    max-width: 500px;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 0 auto; /* Center the form horizontally */
   
}

form input[type="text"],
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

form textarea {
    height: 150px;
}

form input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

  </style>
  <body>
  <div class="d">
  <div class="c">
        <header class="header">
            <a href="#" class="logo"><span color="blue">E</span>vento</a>
    
            <nav class="navbar">
                
                <a href="admin_page.php">home</a>
                <a href="show.php">view</a>
                <a href="create.php">create</a>
                <a href="logout.php" class="btn">logout</a>
                
               
            </nav>
    
            <div id="menu-bars" class="fas fa-bars"></div>
        </header>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    
    <center class="center" >
     <h1>Update Data</h1>
     <form action="" method="POST">
      <input type="text" name="id" placeholder="Enter id for Searching">
      <input type="submit" name="search" value="search">
     </form>
    </center>
    <?php
    
     $server="localhost";
     $username="root";
     $password="";
     
     $con= mysqli_connect($server,$username,$password);
     $db= mysqli_select_db($con,'evento');
     if(isset($_POST['id'])){
      $id=$_POST['id'];
      $query="SELECT * FROM evento where event_id='$id'";
      $query_run= mysqli_query($con,$query);

      while ($row=mysqli_fetch_array($query_run)) {
      ?>
         <form action=" " method="post">
    <input type="text" name="id" id="id" value="<?php echo $row['event_id']?>"/> <br>
    <input type="text" name="name" id="name" value="<?php echo $row['name']?>"/> <br>
    <input type="text" name="date" id="date" value="<?php echo $row['date']?>"/> <br>
    <input type="text" name="time" id="time" value="<?php echo $row['time']?>"/><br >
    <input type="text" name="venu" id="venu" value="<?php echo $row['venu']?>"/><br >
    <textarea type="text" name ="description" id="description" cols="100" rows="10" ><?php echo $row['description']?></textarea><br>
    

    <input type="submit" name="update" value="update">
      </form>
        <?php


      }

     }


    ?>
    </div>
</body>
</html>

<?php
 $server="localhost";
 $username="root";
 $password="";
 
 $con= mysqli_connect($server,$username,$password);
 $db= mysqli_select_db($con,'evento');
 if(isset($_POST['update'])){
$id=$_POST['id'];
$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$venu=$_POST['venu'];
$description=$_POST['description'];
$query="UPDATE `evento` SET  name='$_POST[name]',date='$_POST[date]',time='$_POST[time]',venu='$_POST[venu]',description='$_POST[description]' where event_id='$_POST[id]'";
$query_run= mysqli_query($con,$query);
if($query_run){
  echo'<script>alert("Data Updated")</script>';
}
else{
  echo'<script>alert("Data not Updated")</script>';
}

 }


?>