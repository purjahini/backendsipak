<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nama"=>$_POST["nama"],"nik"=>$_POST["nik"],"jenis_kelamin"=>$_POST["jenis_kelamin"],"tempat_lahir"=>$_POST["tempat_lahir"],"tanggal_lahir"=>$_POST["tanggal_lahir"],"pekerjaan"=>$_POST["pekerjaan"],"alamat"=>$_POST["alamat"],"rt"=>$_POST["rt"],"rw"=>$_POST["rw"],"dusun"=>$_POST["dusun"],"kelurahan"=>$_POST["kelurahan"],"kecamatan"=>$_POST["kecamatan"],"kabupaten"=>$_POST["kabupaten"],"provinsi"=>$_POST["provinsi"],"status_nikah"=>$_POST["status_nikah"],"agama"=>$_POST["agama"],"gol_darah"=>$_POST["gol_darah"],"warganegara"=>$_POST["warganegara"],"id_user"=>$_POST["id_user"],"status_form"=>$_POST["status_form"],"tanggal_pengajuan"=>$_POST["tanggal_pengajuan"],);
  
  
  
   
    $in = $db->insert("formkartukeluarga_tb",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("formkartukeluarga_tb","id_kartukeluarga",$_GET["id"]);
    break;
  case "up":
   $data = array("nama"=>$_POST["nama"],"nik"=>$_POST["nik"],"jenis_kelamin"=>$_POST["jenis_kelamin"],"tempat_lahir"=>$_POST["tempat_lahir"],"tanggal_lahir"=>$_POST["tanggal_lahir"],"pekerjaan"=>$_POST["pekerjaan"],"alamat"=>$_POST["alamat"],"rt"=>$_POST["rt"],"rw"=>$_POST["rw"],"dusun"=>$_POST["dusun"],"kelurahan"=>$_POST["kelurahan"],"kecamatan"=>$_POST["kecamatan"],"kabupaten"=>$_POST["kabupaten"],"provinsi"=>$_POST["provinsi"],"status_nikah"=>$_POST["status_nikah"],"agama"=>$_POST["agama"],"gol_darah"=>$_POST["gol_darah"],"warganegara"=>$_POST["warganegara"],"id_user"=>$_POST["id_user"],"status_form"=>$_POST["status_form"],"tanggal_pengajuan"=>$_POST["tanggal_pengajuan"],);
   
   
   

    
    $up = $db->update("formkartukeluarga_tb",$data,"id_kartukeluarga",$_POST["id"]);
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