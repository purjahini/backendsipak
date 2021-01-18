
<?php

include "../../inc/config.php";


$tes=$dtable->get("users", "users.id_user", array('users.nama_user','users.nik_user','users.password',"users.id_user"),"");


?>