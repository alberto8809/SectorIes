<?php

require_once 'conexion.php';
class Sector {
  private $id_cat_sector;
  private $nombre_sector;
  private $inf_descripcion;

  const TABLA = 'cat_sector';

  public function __construct($id_cat_sector,$nombre_sector,$inf_descripcion) {
   $this->id_cat_sector = $id_cat_sector;
   $this->nombre_sector = $nombre_sector;
   $this->inf_descripcion = $inf_descripcion;
   
 }

  public function getID() {
  return $this->id_cat_sector;
}
 public function getNombre() {
  return $this->nombre_sector;
}
 public function getDescripcion() {
  return $this->inf_descripcion;
}

public static function buscarPorId($id){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT nombre_sector,inf_descripcion,id_cat_sector FROM ' . self::TABLA . ' WHERE id_cat_sector = :id');
       $consulta->bindParam(':id', $id);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self($registro['id_cat_sector'],$registro['nombre_sector'],$registro['inf_descripcion'], $id);
       }else{
          return false;
       }
    }


public static function Recupera(){
 $conexion = new Conexion();
 $consulta = $conexion->prepare('SELECT distinct nombre_sector FROM ' . self::TABLA . ' ORDER BY nombre_sector ASC');
 $consulta->execute();
 $registros = $consulta->fetchAll();
 return $registros;
}


}
?>