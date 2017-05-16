<?php
require_once 'conexion.php';
class Usuario {
	
	const TABLA ='usuario';
	public function getId() {
		return $this->id;
	}
	public function getNombre() {
		return $this->nombre;
	}
	
	public function getApellido() {
		return $this->apellido;
	}
	public function getCedula() {
		return $this->cedula;
	}
	public function getIndicador() {
		return $this->indicador;
	}
	public function getTelefono() {
		return $this->telefono;
	}
	public function getCorreo() {
		return $this->correo;
	}
	public function getArea() {
		return $this->area;
	}
	public function getCargo() {
		return $this->cargo;
	}
	public function getEstudio() {
		return $this->estudio;
	}
	public function getTipo_usuario_id() {
		return $this->tipo_usuario_id;
	}
	public function getNombre_usuario() {
		return $this->nombre_usuario;
	}
	public function getClave() {
		return $this->clave;
	}
	public function setId ($id) {
		$this->id = $id;
	}
	public function setNombre ($nombre) {
		$this->nombre = $nombre;
	}
	public function setApellido ($apellido) {
		$this->apellido = $apellido;
	}
public function setCedula ($cedula) {
		$this->cedula = $cedula;
	}
public function setIndicador ($indicador) {
		$this->indicador = $indicador;
	}
public function setTelefono ($telefono) {
		$this->telefono = $telefono;
	}
public function setCorreo ($correo) {
		$this->correo = $correo;
	}
public function setArea ($area) {
		$this->area = $area;
	}
public function setCargo ($cargo) {
		$this->cargo = $cargo;
	}
public function setEstudio ($estudio) {
		$this->estudio = $estudio;
	}
public function setTipo_usuario_id ($tipo_usuario_id) {
		$this->tipo_usuario_id = $tipo_usuario_id;
	}
	public function setNombre_usuario ($nombre_usuario) {
		$this->nombre_usuario = $nombre_usuario;
	}
	public function setClave ($clave) {
		$this->clave = $clave;
	}
	public function __construct ($nombre, $apellido, $cedula, $indicador, $telefono, $correo, $area, $cargo, $estudio, $tipo_usuario_id, $nombre_usuario, $clave, $id) {
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->cedula = $cedula;
		$this->indicador = $indicador;
		$this->telefono = $telefono;
		$this->correo = $correo;
		$this->area = $area;
		$this->cargo = $cargo;
		$this->estudio = $estudio;
		$this->tipo_usuario_id = $tipo_usuario_id;
		$this->nombre_usuario = $nombre_usuario;
		$this->clave= $clave;
		$this->id = $id;
	}
	public function actualiza() {
		$conexion = new Conexion();
          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' Set nombre = :nombre, apellido = :apellido, cedula = :cedula, indicador = :indicador, telefono = :telefono, correo = :correo, area = :area, cargo = :cargo, estudio = :estudio, tipo_usuario_id = :tipo_usuario_id, nombre_usuario = :nombre_usuario, clave = :clave WHERE id = :id');
          $consulta->bindParam(':nombre', $this->nombre);
	  $consulta->bindParam(':apellido', $this->apellido);
$consulta->bindParam(':cedula', $this->cedula);
$consulta->bindParam(':indicador', $this->indicador);
$consulta->bindParam(':telefono', $this->telefono);
$consulta->bindParam(':correo', $this->correo);
$consulta->bindParam(':area', $this->area);
$consulta->bindParam(':cargo', $this->cargo);
$consulta->bindParam(':estudio', $this->estudio);
$consulta->bindParam(':tipo_usuario_id', $this->tipo_usuario_id);
$consulta->bindParam(':nombre_usuario', $this->nombre_usuario);
$consulta->bindParam(':clave', $this->clave);
          $consulta->bindParam(':id', $this->id);
          $consulta->execute();
       }

 public function guardar() {
$conexion = new Conexion();
          $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre, apellido, cedula, indicador, telefono, correo, area, cargo, estudio, tipo_usuario_id, nombre_usuario, clave) VALUES(:nombre, :apellido, :cedula, :indicador, :telefono, :correo, :area, :cargo, :estudio, :tipo_usuario_id, :nombre_usuario, :clave)');
          $consulta->bindParam(':nombre', $this->nombre);
	  $consulta->bindParam(':apellido', $this->apellido);
$consulta->bindParam(':cedula', $this->cedula);
$consulta->bindParam(':indicador', $this->indicador);
$consulta->bindParam(':telefono', $this->telefono);
$consulta->bindParam(':correo', $this->correo);
$consulta->bindParam(':area', $this->area);
$consulta->bindParam(':cargo', $this->cargo);
$consulta->bindParam(':estudio', $this->estudio);
$consulta->bindParam(':tipo_usuario_id', $this->tipo_usuario_id);
$consulta->bindParam(':nombre_usuario', $this->nombre_usuario);
$consulta->bindParam(':clave', $this->clave);
          $consulta->execute();
          $this->id = $conexion->lastInsertId();
       
       $conexion = null;
    }
 
public static function buscarPorPerfil($nombre_usuario){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where nombre_usuario=:nombre_usuario');
	$consulta->bindParam(':nombre_usuario', $nombre_usuario);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
public static function buscarPorId($id){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where id=:id');
	$consulta->bindParam(':id', $id);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
	
	public static function buscarPorI($id) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT nombre, apellido, cedula, indicador, telefono, correo, area, cargo, estudio, tipo_usuario_id, nombre_usuario, clave FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['nombre'], $registro['apellido'], $registro['cedula'], $registro['indicador'], $registro['telefono'], $registro['correo'], $registro['area'], $registro['cargo'], $registro['estudio'], $registro['tipo_usuario_id'], $registro['nombre_usuario'], $registro['clave'], $id);
        } else {
            return false;
        }
    }
public static function buscarPorC($cedula){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where cedula=:cedula');
	$consulta->bindParam(':cedula', $cedula);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }

public static function buscarPorN($nombre){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where nombre=:nombre');
	$consulta->bindParam(':nombre', $nombre);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
	 public function eliminar(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $this->id);
        $consulta->execute();
    }

 public static function BuscarPorTodos(){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT id, nombre, apellido, cedula, indicador, telefono, correo, area, cargo, estudio, tipo_usuario_id, nombre_usuario, clave FROM ' . self::TABLA . ' ORDER BY id');
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }


}
?>
