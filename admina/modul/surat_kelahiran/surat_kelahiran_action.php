<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nama"=>$_POST["nama"],"jenis_kelamin"=>$_POST["jenis_kelamin"],"tempat_lahir"=>$_POST["tempat_lahir"],"jam_lahir"=>$_POST["jam_lahir"],"hari_lahir"=>$_POST["hari_lahir"],"tanggal_lahir"=>$_POST["tanggal_lahir"],"jenis_kelahiran"=>$_POST["jenis_kelahiran"],"kelahiran_ke"=>$_POST["kelahiran_ke"],"penolong_lahir"=>$_POST["penolong_lahir"],"berat_bayi"=>$_POST["berat_bayi"],"alamat"=>$_POST["alamat"],"rt"=>$_POST["rt"],"rw"=>$_POST["rw"],"dusun"=>$_POST["dusun"],"kelurahan"=>$_POST["kelurahan"],"kecamatan"=>$_POST["kecamatan"],"kabupaten"=>$_POST["kabupaten"],"provinsi"=>$_POST["provinsi"],"nama_ibu"=>$_POST["nama_ibu"],"nama_ayah"=>$_POST["nama_ayah"],"id_user"=>$_POST["id_user"],"status_form_lahir"=>$_POST["status_form_lahir"],"tanggal_pengajuan"=>$_POST["tanggal_pengajuan"],);
  
  
  
   
    $in = $db->insert("formkelahiran_tb",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("formkelahiran_tb","id_kelahiran",$_GET["id"]);
    break;
  case "up":
   $data = array("nama"=>$_POST["nama"],"jenis_kelamin"=>$_POST["jenis_kelamin"],"tempat_lahir"=>$_POST["tempat_lahir"],"jam_lahir"=>$_POST["jam_lahir"],"hari_lahir"=>$_POST["hari_lahir"],"tanggal_lahir"=>$_POST["tanggal_lahir"],"jenis_kelahiran"=>$_POST["jenis_kelahiran"],"kelahiran_ke"=>$_POST["kelahiran_ke"],"penolong_lahir"=>$_POST["penolong_lahir"],"berat_bayi"=>$_POST["berat_bayi"],"alamat"=>$_POST["alamat"],"rt"=>$_POST["rt"],"rw"=>$_POST["rw"],"dusun"=>$_POST["dusun"],"kelurahan"=>$_POST["kelurahan"],"kecamatan"=>$_POST["kecamatan"],"kabupaten"=>$_POST["kabupaten"],"provinsi"=>$_POST["provinsi"],"nama_ibu"=>$_POST["nama_ibu"],"nama_ayah"=>$_POST["nama_ayah"],"id_user"=>$_POST["id_user"],"status_form_lahir"=>$_POST["status_form_lahir"],"tanggal_pengajuan"=>$_POST["tanggal_pengajuan"],);
   
   
   

    
    $up = $db->update("formkelahiran_tb",$data,"id_kelahiran",$_POST["id"]);
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