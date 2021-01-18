<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nama_user"=>$_POST["nama_user"],"nik_user"=>$_POST["nik_user"],"password"=>MD5($_POST["password"]),);
  
  
  
   
    $in = $db->insert("users",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("users","id_user",$_GET["id"]);
    break;
  case "up":
   $data = array("nama_user"=>$_POST["nama_user"],"nik_user"=>$_POST["nik_user"],"password"=>$_POST["password"],);
   
   
   

    
    $up = $db->update("users",$data,"id_user",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;
  default:
    # code...
    break;
}

?>