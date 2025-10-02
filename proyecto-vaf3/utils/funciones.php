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
    $resultado = [];

    // consultas personajes
    $sqlPersonajes = "SELECT id_personaje as id, nombre, descripcion, imagen, 'personajes' as tabla FROM personajes WHERE LOWER(nombre) LIKE '%$termino_busqueda%'";
    $resultPersonajes = $conn->query($sqlPersonajes);
    if ($resultPersonajes) {
        $resultado = array_merge($resultado, $resultPersonajes->fetch_all(MYSQLI_ASSOC));
    }

    // consultas vehiculos
    $sqlVehiculos = "SELECT id_vehiculo as id, nombre, descripcion, imagen, 'vehiculos' as tabla FROM vehiculos WHERE LOWER(nombre) LIKE '%$termino_busqueda%'";
    $resultVehiculos = $conn->query($sqlVehiculos);
    if ($resultVehiculos) {
        $resultado = array_merge($resultado, $resultVehiculos->fetch_all(MYSQLI_ASSOC));
    }

    // consultas peliculas
    $sqlPeliculas = "SELECT id_pelicula as id, titulo as nombre, resumen as descripcion, imagen, 'peliculas' as tabla FROM peliculas WHERE LOWER(titulo) LIKE '%$termino_busqueda%'";
    $resultPeliculas = $conn->query($sqlPeliculas);
    if ($resultPeliculas) {
        $resultado = array_merge($resultado, $resultPeliculas->fetch_all(MYSQLI_ASSOC));
    }

    // consultas linea_tiempo
    $sqlLineaTiempo = "SELECT id_evento as id, año as nombre, historia as descripcion, imagen, 'linea_tiempo' as tabla FROM linea_tiempo WHERE LOWER(historia) LIKE '%$termino_busqueda%'";
    $resultLineaTiempo = $conn->query($sqlLineaTiempo);
    if ($resultLineaTiempo) {
        $resultado = array_merge($resultado, $resultLineaTiempo->fetch_all(MYSQLI_ASSOC));
    }

    return $resultado;
}




function categoria_particular($conn, $tabla, $id)
{
    // Determinar el campo ID según la tabla
    $campo_id = '';
    switch($tabla) {
        case 'personajes':
            $campo_id = 'id_personaje';
            break;
        case 'peliculas':
            $campo_id = 'id_pelicula';
            break;
        case 'vehiculos':
            $campo_id = 'id_vehiculo';
            break;
        case 'linea_tiempo':
            $campo_id = 'id_evento';
            break;
        default:
            $campo_id = 'id';
    }
    
    $sqlquery = "SELECT * FROM " . $tabla . " WHERE " . $campo_id . "=" . $id . ";";
    $result = $conn->query($sqlquery);
    return $result->fetch_all(MYSQLI_ASSOC);
}
