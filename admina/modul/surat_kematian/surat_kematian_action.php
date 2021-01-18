<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nik"=>$_POST["nik"],"nama"=>$_POST["nama"],"jenis_kel"=>$_POST["jenis_kel"],"hari_rip"=>$_POST["hari_rip"],"tanggal_rip"=>$_POST["tanggal_rip"],"tempat_rip"=>$_POST["tempat_rip"],"usia_rip"=>$_POST["usia_rip"],"id_user"=>$_POST["id_user"],"tanggal_create"=>$_POST["tanggal_create"],"status_form"=>$_POST["status_form"],);
  
  
  
   
    $in = $db->insert("formerip_tb",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("formerip_tb","id_rip",$_GET["id"]);
    break;
  case "up":
   $data = array("nik"=>$_POST["nik"],"nama"=>$_POST["nama"],"jenis_kel"=>$_POST["jenis_kel"],"hari_rip"=>$_POST["hari_rip"],"tanggal_rip"=>$_POST["tanggal_rip"],"tempat_rip"=>$_POST["tempat_rip"],"usia_rip"=>$_POST["usia_rip"],"id_user"=>$_POST["id_user"],"tanggal_create"=>$_POST["tanggal_create"],"status_form"=>$_POST["status_form"],);
   
   
   

    
    $up = $db->update("formerip_tb",$data,"id_rip",$_POST["id"]);
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