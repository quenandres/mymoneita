<html>
    <head><title>Probando conexion PGs</title></head>
    <body>
<?php
    $host="127.0.0.1";
    $port="5432";
    $user="mymoneita";
    $pass="mm666";
    $dbname="mymoneita";

    $connect = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass") or die('No se ha podido conectar: ' . pg_last_error());;

    if(!$connect)
        echo "<p><i>No me conecte a la base de datos de postgre</i></p>";
    else
        echo "<p><i>Me conecteeeee... FOCA YEAH</i></p>";

    pg_close($connect);
?>
    </body>
</html>