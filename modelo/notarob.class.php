<?php
require_once 'conexion.php';
class Notarob {
	private $id;
	private $notaremision_id;
	private $ob_id;
	const TABLA ='notarob';
	public function getId() {
		return $this->id;
	}
	public function getNotaremision_id() {
		return $this->notaremision_id;
	}
	
	public function getOb_id() {
		return $this->ob_id;
	}
	
	public function setId ($id) {
		$this->id = $id;
	}
	public function setNotaremision_id ($notaremision_id) {
		$this->notaremision_id = $notaremision_id;
	}
	public function setOb_id ($ob_id) {
		$this->ob_id = $ob_id;
	}

	public function __construct ($notaremision_id, $ob_id, $id) {
		$this->notaremision_id = $notaremision_id;
		$this->ob_id = $ob_id;
		$this->id = $id;
	}
	public function actualiza() {
		$conexion = new Conexion();
          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' Set notaremision_id = :notaremision_id, ob_id = :ob_id WHERE id = :id');
          $consulta->bindParam(':notaremision_id', $this->notaremision_id);
	  $consulta->bindParam(':ob_id', $this->ob_id);
          $consulta->bindParam(':id', $this->id);
          $consulta->execute();
       }

 public function guardar() {
$conexion = new Conexion();
          $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (notaremision_id, ob_id) VALUES(:notaremision_id, :ob_id)');
          $consulta->bindParam(':notaremision_id', $this->notaremision_id);
	  $consulta->bindParam(':ob_id', $this->ob_id);
          $consulta->execute();
          $this->id = $conexion->lastInsertId();
       
       $conexion = null;
    }
public static function buscarPorInota($notaremision_id) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT notaremision_id, ob_id FROM ' . self::TABLA . ' WHERE notaremision_id = :notaremision_id');
        $consulta->bindParam(':notaremision_id', $notaremision_id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['notaremision_id'], $registro['ob_id'], $notaremision_id);
        } else {
            return false;
        }
    }
 public function eliminar(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE notaremision_id = :notaremision_id');
        $consulta->bindParam(':notaremision_id', $this->notaremision_id);
        $consulta->execute();
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
        $consulta = $conexion->prepare('SELECT notaremision_id, ob_id FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self($registro['notaremision_id'], $registro['ob_id'], $id);
        } else {
            return false;
        }
    }
public static function buscarPorC($ob_id){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where ob_id=:ob_id');
	$consulta->bindParam(':ob_id', $ob_id);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }


 public static function BuscarPorTodos(){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT id, notaremision_id, ob_id FROM ' . self::TABLA . ' ORDER BY id');
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }


}
?>
