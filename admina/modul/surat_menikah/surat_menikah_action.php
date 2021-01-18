<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("nama_pria"=>$_POST["nama_pria"],"nik_pria"=>$_POST["nik_pria"],"jenis_kel_pria"=>$_POST["jenis_kel_pria"],"tempat_lahir_pria"=>$_POST["tempat_lahir_pria"],"tanggal_lahir_pria"=>$_POST["tanggal_lahir_pria"],"pekerjaan_pria"=>$_POST["pekerjaan_pria"],"alamat_pria"=>$_POST["alamat_pria"],"nama_wanita"=>$_POST["nama_wanita"],"nik_wanita"=>$_POST["nik_wanita"],"jenis_kel_wanita"=>$_POST["jenis_kel_wanita"],"tempat_lahir_wanita"=>$_POST["tempat_lahir_wanita"],"tanggal_lahir_wanita"=>$_POST["tanggal_lahir_wanita"],"pekerjaan_wanita"=>$_POST["pekerjaan_wanita"],"alamat_wanita"=>$_POST["alamat_wanita"],"id_user"=>$_POST["id_user"],"create_surat_nikah"=>$_POST["create_surat_nikah"],"status_form_nikah"=>$_POST["status_form_nikah"],);
  
  
  
   
    $in = $db->insert("formmenikah",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("formmenikah","id_menikah",$_GET["id"]);
    break;
  case "up":
   $data = array("nama_pria"=>$_POST["nama_pria"],"nik_pria"=>$_POST["nik_pria"],"jenis_kel_pria"=>$_POST["jenis_kel_pria"],"tempat_lahir_pria"=>$_POST["tempat_lahir_pria"],"tanggal_lahir_pria"=>$_POST["tanggal_lahir_pria"],"pekerjaan_pria"=>$_POST["pekerjaan_pria"],"alamat_pria"=>$_POST["alamat_pria"],"nama_wanita"=>$_POST["nama_wanita"],"nik_wanita"=>$_POST["nik_wanita"],"jenis_kel_wanita"=>$_POST["jenis_kel_wanita"],"tempat_lahir_wanita"=>$_POST["tempat_lahir_wanita"],"tanggal_lahir_wanita"=>$_POST["tanggal_lahir_wanita"],"pekerjaan_wanita"=>$_POST["pekerjaan_wanita"],"alamat_wanita"=>$_POST["alamat_wanita"],"id_user"=>$_POST["id_user"],"create_surat_nikah"=>$_POST["create_surat_nikah"],"status_form_nikah"=>$_POST["status_form_nikah"],);
   
   
   

    
    $up = $db->update("formmenikah",$data,"id_menikah",$_POST["id"]);
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