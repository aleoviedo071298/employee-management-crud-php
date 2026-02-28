<?php
//cabeceras
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Content-Type: application/json; charset=UTF-8');

//variables de conexion
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$baseDatos = "empleados";

//conexion
$conexion = new mysqli($servidor, $usuario, $contraseña, $baseDatos);

//consulta datos
if (isset($_GET['consultar'])) {
    $sqlEmpleados = mysqli_query($conexion, "SELECT * FROM empleados");
    if(mysqli_num_rows($sqlEmpleados) > 0){
        $empleados = mysqli_fetch_all($sqlEmpleados, MYSQLI_ASSOC);
        
        echo json_encode($empleados);
        exit();
    }else{
        echo json_encode([]);
        exit();
    }
}
//agregar datos
if(isset($_GET['agregar'])){
    $data = json_decode(file_get_contents("php://input"));
    $nombre = $data->nombre;
    $correo = $data->correo;
    if($correo!="" && $nombre!=""){
        $sqlAgregar = mysqli_query($conexion, "INSERT INTO empleados (nombre, correo) VALUES ('$nombre', '$correo')");
        echo json_encode(["message" => "Empleado agregado"]);
        exit();
    }else{
        echo json_encode(["message" => "Error al agregar el empleado"]);
        exit();
    }
}
//borrar datos
if(isset($_GET['borrar'])){
    $sqlBorrar = mysqli_query($conexion, "DELETE FROM empleados WHERE id = ".$_GET['id']);
    if($sqlBorrar){
        echo json_encode(["message" => "Empleado borrado"]);
        exit();
    }else{
        echo json_encode(["message" => "Error al borrar el empleado"]);
        exit();
    }
}
//actualizar datos
if(isset($_GET['actualizar'])){
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    $nombre = $data->nombre;
    $correo = $data->correo;
    $sqlActualizar = mysqli_query($conexion, "UPDATE empleados SET nombre = '$nombre', correo = '$correo' WHERE id = $id");
    if($sqlActualizar){
        echo json_encode(["message" => "Empleado actualizado"]);
        exit();
    }else{
        echo json_encode(["message" => "Error al actualizar el empleado"]);
        exit();
    }
}
//consultar un empleado
if(isset($_GET['consultarId'])){
    $sqlConsultarId = mysqli_query($conexion, "SELECT * FROM empleados WHERE id = ".$_GET['id']);
    if(mysqli_num_rows($sqlConsultarId) > 0){
        $empleado = mysqli_fetch_all($sqlConsultarId, MYSQLI_ASSOC);
        echo json_encode($empleado);
        exit();
    }else{
        echo json_encode(["message" => "Empleado no encontrado"]);
        exit();
    }
}