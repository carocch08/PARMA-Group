<?php

$dir_subida = 'C:\wamp\www\PARMA-Group\Imagenes';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es v�lido y se subi� con �xito.\n";
} else {
    echo "�Posible ataque de subida de ficheros!\n";
}

echo 'M�s informaci�n de depuraci�n:';
print_r($_FILES);

print "</pre>";

?>