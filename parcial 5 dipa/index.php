<?php

require('config/aunt.php');          
require('config/conn.php');  

$conn -> set_charset('utf8');

$sqlInsert = "Insert Into Nota10(id, carnet, nombre, apellido, Nota) value('TR62534', '6156242018', 'Jociman', 'Gonzalez', '10')";



?>