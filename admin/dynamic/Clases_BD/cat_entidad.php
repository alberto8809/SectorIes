<?php

require_once 'conexion.php';
class Entidad {
  private $id_cat_entidad;
  private $nombre_entidad;
  private $region;

  const TABLA = 'cat_entidad';
  /*constructor de la clase Entregionad*/
  public function __construct($id_cat_entidad,$nombre_entidad,$region,$latitud, $longitud,$matricula,$alrededor,$alrededor2) {
   $this->id_cat_entidad = $id_cat_entidad;
   $this->nombre_entidad = $nombre_entidad;
   $this->region = $region;
   
 }

public static function Recupera(){
 $conexion = new Conexion();
 $consulta = $conexion->prepare('SELECT distinct region FROM ' . self::TABLA . ' ORDER BY region ASC');
 $consulta->execute();
 $registros = $consulta->fetchAll();
 return $registros;
}

public static function Prueba($value)
{
  $conexion = new Conexion();
  $consulta = $conexion->prepare("SELECT  distinct region FROM cat_entidad join direccion_escuela using (id_cat_entidad) join cat_escuela using (id_cat_escuela) join rel_escuela_carrera using (id_cat_escuela) join cat_carrera using(id_cat_carrera) where nombre_carrera like '%$value%' && latitud>0");
  $consulta->execute();
  $registros = $consulta->fetchAll();
  return $registros;
}

public static function Prueba2($value,$value2)
{
  $conexion = new Conexion();
  $consulta = $conexion->prepare("SELECT  region,nombre_entidad,nombre_carrera,latitud, longitud,nombre_escuela,matricula_t FROM cat_entidad join direccion_escuela using (id_cat_entidad) join cat_escuela using (id_cat_escuela) join rel_escuela_carrera using (id_cat_escuela) join cat_carrera using(id_cat_carrera) where nombre_carrera like '%$value%$value2%'");
  $consulta->execute();
  $registros = $consulta->fetchAll();
  return $registros;
}

public static function Prueba4($value,$value2)
{
  $conexion = new Conexion();
  $consulta = $conexion->prepare("SELECT  region,nombre_entidad,nombre_carrera,latitud, longitud,nombre_escuela,matricula_t FROM cat_entidad join direccion_escuela using (id_cat_entidad) join cat_escuela using (id_cat_escuela) join rel_escuela_carrera using (id_cat_escuela) join cat_carrera using(id_cat_carrera) where nombre_carrera like '%$value%$value2%'");
  $consulta->execute();
  $registros = $consulta->fetchAll();
  return $registros;
}

public static function Prueba3($value)
{
  $conexion = new Conexion();
  $consulta = $conexion->prepare("SELECT  region,nombre_entidad,nombre_carrera,latitud, longitud,nombre_escuela,matricula_t FROM cat_entidad join direccion_escuela using (id_cat_entidad) join cat_escuela using (id_cat_escuela) join rel_escuela_carrera using (id_cat_escuela) join cat_carrera using(id_cat_carrera) where nombre_carrera like '%$value%' && latitud>0");
  $consulta->execute();
  $registros = $consulta->fetchAll();
  return $registros;
}


public static function EntidadesUnicas($value)
{
  $conexion = new Conexion();
  $consulta = $conexion->prepare("SELECT distinct region FROM cat_entidad join direccion_escuela using (id_cat_entidad) join cat_escuela using (id_cat_escuela) join rel_escuela_carrera using (id_cat_escuela) join cat_carrera using(id_cat_carrera) where nombre_carrera like '%$value%' && latitud>0");
  $consulta->execute();
  $registros = $consulta->fetchAll();
  return $registros;
}



}
?>