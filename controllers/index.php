<?php
require_once("model/index.php");
class modeloController
{
    private $model;
    function __construct()
    {
        $this->model = new Modelo();
    }
    // MOSTRAR
    static function index()
    {
        $producto     =    new Modelo();
        $dato = $producto->mostrar("productos","1");
        require_once("views/index.php");
    }

    // INSERTAR
    static function nuevo()
    {
        require_once("views/nuevo.php");
    }
    static function guardar()
    {
        $nombre     =    $_REQUEST['nombre'];
        $precio     =    $_REQUEST['precio'];
        $data       =   "'" . $nombre . "','" . $precio . "'";
        $producto     =    new Modelo();
        $dato         =    $producto->insertar("productos", $data);
        
        header("location:" . urlsite);
    }


    // ACTUALIZAR

    static function editar()
    {
        $id = $_REQUEST['id'];
        $producto     =    new Modelo();
        $dato = $producto->mostrar("productos", "id=" . $id);
        require_once("views/editar.php");
    }
    static function update()
    {
        $id         =     $_REQUEST['id'];
        $nombre     =    $_REQUEST['nombre'];
        $precio     =    $_REQUEST['precio'];
        $data       =   "nombre='" . $nombre . "', precio=" . $precio;
        $condicion  =   "id=" . $id;
        $producto     =    new Modelo();
        $dato         =    $producto->actualizar("productos", $data, $condicion);
        header("location:" . urlsite);
    }

    // ELIMINAR

    static function eliminar()
    {
        $id         =     $_REQUEST['id'];
        $condicion  =   "id=" . $id;
        $producto     =    new Modelo();
        $dato         =    $producto->eliminar("productos", $condicion);
        header("location:" . urlsite);
    }
}
