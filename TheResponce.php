<?php


// Create connection
$host='localhost';
$user ='root';
$password ='';
$database ='robot_control2';
$connect= mysqli_connect($host,$user,$password,$database);

if(mysqli_connect_errno()){

die("cant connect with database". mysqli_connect_error());
}
else{
 echo "Connected successfully, the response is :      ";
 echo "\r\n";
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Robot Control</title>
<style>



body {

  background-color:azure;
 

}





h1 {
color:blue;
top: 50px;
    left: 70px;
	right:50%;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-size: 90px;


}

.button1{
  background-color: lightblue;
  border: none;
  color: white;
  padding: 20px 48px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position: relative;
  left: 30%;
  top: 200px;

}




.button3{
border-radius: 60%;
  background-color:red;
  border: none;
  color: white;
  padding: 20px 48px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position: relative;
  left: 20%;
  top: 203px;
}
.button2{
  background-color:lightblue;
  border: none;
  color: white;
  padding: 20px 48px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position: relative;
  left: 30%;
  top: 140px;
}
.button5{
  background-color:lightblue;
  border: none;
  color: white;
  padding: 20px 48px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position: relative;
  left: 9%;
  top: 200px;
}
.button4{
  background-color: lightblue;
  border: none;
  color: white;
  padding: 20px 48px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position: relative;
  left: 9.3%;
  top: 270px;
}

</style>

</head>
<body>


<?php

$query = "SELECT * FROM control_panel ORDER BY id DESC LIMIT 1 ";
$result = mysqli_query($connect,$query);
 if(!$result)
    {
        die (" error on qurey");
    }
   
     

while ($row=$result->fetch_assoc()) {

           

echo "$row[forward]" ;
echo "$row[stop]" ;

echo $row['left'] ;
echo $row['right'] ;
echo $row['back'] ;

}
?>


<?php 
mysqli_free_result($result);

?>
</body>

</html>


<?php
mysqli_close($connect);
?>