<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nama"=>$_POST["nama"],"nik"=>$_POST["nik"],"jenis_kel"=>$_POST["jenis_kel"],"tempat_lahir"=>$_POST["tempat_lahir"],"tanggal_lahir"=>$_POST["tanggal_lahir"],"pekerjaan"=>$_POST["pekerjaan"],"alamat"=>$_POST["alamat"],"rt"=>$_POST["rt"],"rw"=>$_POST["rw"],"dusun"=>$_POST["dusun"],"kelurahan"=>$_POST["kelurahan"],"kecamatan"=>$_POST["kecamatan"],"kabupaten"=>$_POST["kabupaten"],"provinsi"=>$_POST["provinsi"],"status_nikah"=>$_POST["status_nikah"],"agama"=>$_POST["agama"],"gol_darah"=>$_POST["gol_darah"],"kewarganegaraan"=>$_POST["kewarganegaraan"],"masa_berlaku"=>$_POST["masa_berlaku"],"id_user"=>$_POST["id_user"],"tanggal_create"=>$_POST["tanggal_create"],"status_form"=>$_POST["status_form"],);
  
  
  
   
    $in = $db->insert("formektp_tb",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("formektp_tb","id_form_ektp",$_GET["id"]);
    break;
  case "up":
   $data = array("nama"=>$_POST["nama"],"nik"=>$_POST["nik"],"jenis_kel"=>$_POST["jenis_kel"],"tempat_lahir"=>$_POST["tempat_lahir"],"tanggal_lahir"=>$_POST["tanggal_lahir"],"pekerjaan"=>$_POST["pekerjaan"],"alamat"=>$_POST["alamat"],"rt"=>$_POST["rt"],"rw"=>$_POST["rw"],"dusun"=>$_POST["dusun"],"kelurahan"=>$_POST["kelurahan"],"kecamatan"=>$_POST["kecamatan"],"kabupaten"=>$_POST["kabupaten"],"provinsi"=>$_POST["provinsi"],"status_nikah"=>$_POST["status_nikah"],"agama"=>$_POST["agama"],"gol_darah"=>$_POST["gol_darah"],"kewarganegaraan"=>$_POST["kewarganegaraan"],"masa_berlaku"=>$_POST["masa_berlaku"],"id_user"=>$_POST["id_user"],"tanggal_create"=>$_POST["tanggal_create"],"status_form"=>$_POST["status_form"],);
   
   
   

    
    $up = $db->update("formektp_tb",$data,"id_form_ektp",$_POST["id"]);
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