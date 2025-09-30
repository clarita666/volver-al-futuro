<?php

function listar_todo($conn, $tabla)
{
    //1- realizar la consulta  o query
    $sqlquery = "SELECT * FROM " . $tabla . ";";


    //2- ejecutar la consulta 
    $result = $conn->query($sqlquery);

    // 3- retornar y convertir la consulta en un array asociativo 

    return $result->fetch_all(MYSQLI_ASSOC);
}

//funcion antihackers xd 
function buscar($conn, $termino_busqueda)
{
    //escapar el termino(termino_busqueda) para evitar injection sql
    $termino_busqueda = $conn->real_escape_string($termino_busqueda);

// consultas personajes
$sql/* tabla */ = "SELECT /* tabla */ as /* tabla */FROM /* tabla */ WHERE LOWER(nombre) LIKE '%$termino_busqueda%'" ;

 // consultas naves
$sql/* tabla */ = "SELECT /* tabla */ as /* tabla */ FROM /* tabla */ WHERE LOWER(NOMBRE) LIKE '%$termino_busqueda%'" ;


 // consultas sables
$sql/* tabla */ = "SELECT /* tabla */as /* tabla */ FROM sables WHERE LOWER(nombre) LIKE '%$termino_busqueda%'" ;

 // consultas peliculas
$sql/* tabla */ = "SELECT /* tabla */ as /* tabla */ FROM /* tabla */ WHERE LOWER(nombre) LIKE '%$termino_busqueda%'" ;


//- ejecutar las consultas y conviertinedo en array association
$result/* tabla */ = $conn->query($sql/* tabla */)->fetch_all(MYSQLI_ASSOC);
$result/* tabla */ = $conn->query($sql/* tabla */)->fetch_all(MYSQLI_ASSOC);
$result/* tabla */ = $conn->query($sql/* tabla */)->fetch_all(MYSQLI_ASSOC);
$result/* tabla */ = $conn->query($sql/* tabla */)->fetch_all(MYSQLI_ASSOC);

// combinar las 4 tablas

$resultado = array_merge($result/* tabla */,$result/* tabla */,$result/* tabla */,$result/* tabla */);

return $resultado;

}




function categoria_particular($conn, $tabla, $id)
{
    //1- realizar la consulta  o query
    $sqlquery = "SELECT * FROM " . $tabla . " WHERE id=" . $id . ";";


    //2- ejecutar la consulta 
    $result = $conn->query($sqlquery);

    // 3- retornar y convertir la consulta en un array asociativo 

    return $result->fetch_all(MYSQLI_ASSOC);
}
