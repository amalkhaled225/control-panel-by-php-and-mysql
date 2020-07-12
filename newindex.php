
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
echo"database is conected" ;}

?>

<!DOCTYPE html>
<html>
<head>
<title>Control Panel</title>
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

<form action="" method="post">
<button class=" button1"id ="1"type="submit" name="L" value="left">Left </button>
<button class=" button2" id ="2"type="submit"name="F" value="forwords">Forwords </button>
<button class=" button3"id ="3"type="submit"name="S" value="stop">Stop </button>
<button class=" button4"id ="4"type="submit"name="B" value="backwords">Backwords </button>
<button class=" button5" id ="5"type="submit"name="R" value="right">Right </button>
</form>


<?php 

    if(isset($_POST['R'])) {
   
       $s = "INSERT INTO control_panel(`ID`, `right`, `left`, `forward`, `back`,`stop`) VALUES ('', 'R', '', '', '', '')";
       $result = mysqli_query($connect,$s);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }
	
	
    if(isset($_POST['L'])) {
   
       $s = "INSERT INTO control_panel(`ID`, `right`, `left`, `forward`, `back`,`stop`) VALUES (NULL, '', 'L', '', '', '')";
       $result = mysqli_query($connect,$s);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }


    if(isset($_POST['F'])) {
   
       $s =  "INSERT INTO control_panel(`ID`, `right`, `left`, `forward`, `back`,`stop`) VALUES (NULL, '', '', 'F', '', '')";
       $result = mysqli_query($connect,$s);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }






    if(isset($_POST['B'])) {
   
       $s = "INSERT INTO control_panel(`ID`, `right`, `left`, `forward`, `back`,`stop`) VALUES (NULL, '', '', '', 'B', '')";
       $result = mysqli_query($connect,$s);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }


    if(isset($_POST['S'])) {
   
       $s = "INSERT INTO control_panel(`ID`, `right`, `left`, `forward`, `back`,`stop`) VALUES (NULL, '', '', '', '', 'S')";
       $result = mysqli_query($connect,$s);
      

       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {
        
        die ("Records added successfully.");
    }
    }








?>
    





</body>

</html>


<?php

mysqli_close($connect);
?>