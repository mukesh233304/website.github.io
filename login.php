<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "memo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['email'])){

  $uname=$_POST['email'];
  $password=$_POST['password'];

  $sql="select * from loginform where email='".$uname."' AND password='".$password."' limit 1";

  $result=mysql_query($sql);

  if(mysql_num_rows($result)==1){
    echo "you have successfully login....";
    exit();
  }
  else{
    echo "error.....";
    exit();
  }

}
?>