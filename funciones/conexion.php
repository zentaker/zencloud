
<?php


function fnconexion() {

        $cn = mysqli_connect('localhost','admin','Walejandro96', 'u472085672_zencloud');

        $bd = mysqli_select_db($cn,'u472085672_zencloud');

        return $cn;
        

}


?>
    
