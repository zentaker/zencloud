
<?php


function fnconexion() {

        $cn=mysqli_connect('localhost','u472085672_admin','Palomino12345');

        $bd=mysqli_select_db($cn,'u472085672_zencloud');

        return $cn;
        

}


?>
    
