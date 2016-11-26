<?php

require_once 'conexion.php';

class Rama {
  private $id_cat_rama;
  private $id_cat_subsector;
  private $id_cat_sector;
  private $nombre_rama;
  private $inf_descripcion;

  const TABLA = 'cat_rama';
  
  public function __construct($id_cat_rama,$id_cat_subsector,$id_cat_sector,$nombre_rama,$inf_descripcion) 
  {   
   $this->id_cat_rama = $id_cat_rama;
   $this->id_cat_subsector = $id_cat_subsector;
   $this->id_cat_sector = $id_cat_sector;
   $this->nombre_rama = $nombre_rama;
   $this->inf_descripcion = $inf_descripcion;
   
 }

public static function Recupera()
{
  $conexion = new Conexion();
  $consulta = $conexion->prepare('SELECT distinct inf_descripcion FROM ' . self::TABLA );
  $consulta->execute();
  $registros = $consulta->fetchAll();
  return $registros;
}

}
?>
