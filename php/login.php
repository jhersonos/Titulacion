<?php 
    session_start();
 ?>
<?php 
    include('../conexion/conexion.php');
    /******************************Administrador******************************/
    /**/$sql="select * from personal where user='admin' and estado='1'";  /**/
    /**/$adminresult = mysqli_query($con,$sql);                           /**/
    /**/$arraydata   = mysqli_fetch_array($adminresult);                 /**/
    /*********************************************************************/
    $adminusuario   = $arraydata['user'];
    $adminpass      = $arraydata['pass'];
    /******************************usuario************************************/
    /**/$sql="select * from personal where user='usuario' and estado='1'";/**/
    /**/$userresult = mysqli_query($con,$sql);                            /**/
    /**/$arraydato  = mysqli_fetch_array($userresult);                   /**/
    /*********************************************************************/
    $userusuario = $arraydato['user'];
    $userpass    = $arraydato['pass'];
    
    $user        = $_POST['user'];
    $pass        = $_POST['pass'];
    if($user == $adminusuario && $pass == $adminpass) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $adminusuario;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
            echo 'admin';
    }else{
        if ($user == $userusuario && $pass == $userpass ) {
            echo "user";
        }else{
            echo "error";
        }
    }
 ?>