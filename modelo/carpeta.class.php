<?php
require_once 'conexion.php';
class Carpeta {
	private $id;
	private $notaremision_id;
	private $codigo;
	private $carpeta;
	private $contenido;
	const TABLA ='carpeta';
	public function getId() {
		return $this->id;
	}
	public function getNotaremision_id() {
		return $this->notaremision_id;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	public function getCarpeta() {
		return $this->carpeta;
	}
	public function getContenido() {
		return $this->contenido;
	}
	
	public function setId ($id) {
		$this->id = $id;
	}
	public function setNotaremision_id ($notaremision_id) {
		$this->notaremision_id = $notaremision_id;
	}
	public function setCodigo ($codigo) {
		$this->codigo = $codigo;
	}
public function setCarpeta ($carpeta) {
		$this->carpeta = $carpeta;
	}
public function setContenido ($contenido) {
		$this->contenido = $contenido;
	}
	public function __construct ($notaremision_id, $codigo, $carpeta, $contenido, $id) {
		$this->notaremision_id = $notaremision_id;
		$this->codigo = $codigo;
		$this->carpeta = $carpeta;
		$this->contenido = $contenido;
		$this->id = $id;
	}
	public function actualiza() {
		$conexion = new Conexion();
          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' Set notaremision_id = :notaremision_id, codigo = :codigo, carpeta = :carpeta, contenido = :contenido WHERE id = :id');
          $consulta->bindParam(':notaremision_id', $this->notaremision_id);
	  $consulta->bindParam(':codigo', $this->codigo);
$consulta->bindParam(':carpeta', $this->carpeta);
$consulta->bindParam(':contenido', $this->contenido);
          $consulta->bindParam(':id', $this->id);
          $consulta->execute();
       }

 public function guardar() {
$conexion = new Conexion();
          $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (notaremision_id, codigo, carpeta, contenido) VALUES(:notaremision_id, :codigo, :carpeta, :contenido)');
          $consulta->bindParam(':notaremision_id', $this->notaremision_id);
	  $consulta->bindParam(':codigo', $this->codigo);
$consulta->bindParam(':carpeta', $this->carpeta);
$consulta->bindParam(':contenido', $this->contenido);
          $consulta->execute();
          $this->id = $conexion->lastInsertId();
       
       $conexion = null;
    }
 
public static function buscarPorId($id){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where id=:id');
	$consulta->bindParam(':id', $id);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
	public static function buscarPorIdN($notaremision_id){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where notaremision_id=:notaremision_id');
	$consulta->bindParam(':notaremision_id', $notaremision_id);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
	public static function buscarPorI($id) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT notaremision_id, codigo, carpeta, contenido FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['notaremision_id'], $registro['codigo'], $registro['carpeta'], $registro['contenido'], $id);
        } else {
            return false;
        }
    }
public static function buscarPorC($codigo){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where codigo=:codigo');
	$consulta->bindParam(':codigo', $codigo);
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
       $consulta = $conexion->prepare('SELECT id, notaremision_id, codigo, carpeta, contenido FROM ' . self::TABLA . ' ORDER BY id');
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }


}
?>
