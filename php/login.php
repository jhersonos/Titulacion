<?php 
    include('../conexion/conexion.php');
    /******************************Administrador******************************/
    /**/$sql="select * from personal where user='admin' and estado='1'";  /**/
    /**/$adminresult = mysql_query($sql,$con);                           /**/
    /**/$arraydata   = mysql_fetch_array($adminresult);                 /**/
    /*********************************************************************/
    $adminusuario   = $arraydata['user'];
    $adminpass      = $arraydata['pass'];
    /******************************usuario************************************/
    /**/$sql="select * from personal where user='usuario' and estado='1'";/**/
    /**/$userresult = mysql_query($sql,$con);                            /**/
    /**/$arraydato  = mysql_fetch_array($userresult);                   /**/
    /*********************************************************************/
    $userusuario = $arraydato['user'];
    $userpass    = $arraydato['pass'];
    
    $user        = $_POST['user'];
    $pass        = $_POST['pass'];
    if($user == $adminusuario && $pass == $adminpass) {
            echo 'admin';
    }else{
        if ($user == $userusuario && $pass == $userpass ) {
            echo "user";
        }else{
            echo "error";
        }
    }
 ?>