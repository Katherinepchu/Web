<?php

$cnx = mysql_connect("localhost","root","");
mysql_select_db("alondra");
if (!$cnx){
    echo'Error al conectar a la base de datos';
    
}
else
{
    echo'Conectado a la base de datos';
}

?>