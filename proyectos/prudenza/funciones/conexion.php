
<?php


function fnconexion() {
        $cn=mysqli_connect('localhost','u472085672_prudenza','Palomino12345');

        $bd=mysqli_select_db($cn,'u472085672_prudenzav1');
        return $cn;
        

}


?>
    
