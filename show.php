<?php
    // DO NOT TOUCH
    $server="localhost";
    $username="root";
    $password="";
    
    $con= mysqli_connect($server,$username,$password);
    $db= mysqli_select_db($con,'evento');
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
    table,tr,th{
        border: 1px solid white;
        margin-top: 20rem;
       margin-left:30rem;
        color: white;
        padding: 20px;
        text-align:left;
        font-size=5px;


    }
    tr{
        text-align: center;
        border: 1px solid white;
        padding:20px;
        margin: 10px
        text-align:center;
        font-size=10px;
        
    }
    th{
        padding:20px;
        margin: 10px;
        text-align:center;
        font-size=10px;
    }
    .he{
        gap:2px;
        padding:40px;
        font-size=10px;
    }
    .bt{
        padding:5px;
        color: yellow;
        background-color:beige;
        border-radius:2px;
        padding-left:15px;
        padding-right:15px;
        cursor:pointer;
        gap:2rem;
    }
    </style>
<body>
  <!-- NAVBAR -->
    <div class="c">
        <header class="header">
            <a href="#" class="logo"><span>E</span>vento</a>
    
            <nav class="navbar">
                
                <a href="admin_page.php">home</a>
                <a href="show.php">view</a>
                <a href="create.php">create</a>
                <a href="logout.php" class="btn">logout</a>
                
               
</nav>
        </header>
       
    
  
   
    <table class="table" >
      <!-- THIS SHOWS CATEGORIES  -->
  <thead>
    <tr >
      <th class="he" scope="col">ID</th>
      <th class="he" scope="col">Event Name</th>
      <th class="he" scope="col">Date</th>
      <th class="he" scope="col">Time</th>
      <th class="he" scope="col">Venue</th>
      <th class="he" scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql="Select * from `evento`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['event_id'];
        $name=$row['name'];
        $date=$row['date'];
        $time=$row['time'];
        $venu=$row['venu'];
        echo'
        
        <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$date.'</td>
      <td>'.$time.'</td>
      <td>'.$venu.'</td>
      <td>
<button class="bt""><a href="modify.php?updateid='.$id.'">Update</a></button>
<button class="bt"><a href="delete.php?deleteid='.$id.'">Delete</a></button>  
<td>
    </tr>
        
        
        
        ';
    }
}

?>



    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</body>
</html>
