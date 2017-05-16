<?php
require_once 'conexion.php';
class Notaremision {
	private $id;
	private $codigo;
	private $fregistro;
	private $destinatario;
	private $aread;
	private $pisod;
	private $remitente;
	private $arear;
	private $pisor;
	private $observacion;
	private $tipoubicacion_id;
	const TABLA ='notaremision';
	public function getId() {
		return $this->id;
	}
	public function getCodigo() {
		return $this->codigo;
	}
	public function getFregistro() {
		return $this->fregistro;
	}
	public function getDestinatario() {
		return $this->destinatario;
	}
	public function getAread() {
		return $this->aread;
	}
	public function getPisod() {
		return $this->pisod;
	}
	public function getRemitente() {
		return $this->remitente;
	}
	public function getArear() {
		return $this->arear;
	}
	public function getPisor() {
		return $this->pisor;
	}
	
	public function getObservacion() {
		return $this->observacion;
	}
	public function getTipoubicacion_id() {
		return $this->tipoubicacion_id;
	}
	public function setCodigo ($codigo) {
		$this->codigo = $codigo;
	}
public function setFregistro ($fregistro) {
		$this->fregistro = $fregistro;
	}
public function setDestinatario ($destinatario) {
		$this->destinatario = $destinatario;
	}
public function setAread ($aread) {
		$this->aread = $aread;
	}
public function setPisod ($pisod) {
		$this->pisod = $pisod;
	}
public function setRemitente ($remitente) {
		$this->remitente = $remitente;
	}
public function setArear ($arear) {
		$this->arear = $arear;
	}
public function setPisor ($pisor) {
		$this->pisor = $pisor;
	}
public function setObservacion ($observacion) {
		$this->observacion = $observacion;
	}
public function setTipoubicacion_id ($tipoubicacion_id) {
		$this->tipoubicacion_id = $tipoubicacion_id;
	}
public function __construct ($codigo, $fregistro, $destinatario, $aread, $pisod, $remitente, $arear, $pisor, $observacion, $tipoubicacion_id, $id=null) {
		$this->codigo = $codigo;
		$this->fregistro = $fregistro;
		$this->destinatario = $destinatario;
		$this->aread = $aread;
		$this->pisod = $pisod;
		$this->remitente = $remitente;
		$this->arear = $arear;
		$this->pisor = $pisor;
		$this->observacion = $observacion;
		$this->tipoubicacion_id = $tipoubicacion_id;
		$this->id = $id;

	}
public function guardar() {
		$conexion = new Conexion();
		if($this->id) /*Modifica*/ {
          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' Set codigo = :codigo, fregistro = :fregistro, destinatario = :destinatario, aread = :aread, pisod = :pisod, remitente = :remitente, arear = :arear, pisor = :pisor, observacion = :observacion, tipoubicacion_id = :tipoubicacion_id WHERE id = :id');
          $consulta->bindParam(':codigo', $this->codigo);
	$consulta->bindParam(':fregistro', $this->fregistro);
	$consulta->bindParam(':destinatario', $this->destinatario);
	$consulta->bindParam(':aread', $this->aread);
	$consulta->bindParam(':pisod', $this->pisod);
	$consulta->bindParam(':remitente', $this->remitente);
	$consulta->bindParam(':arear', $this->arear);
	$consulta->bindParam(':pisor', $this->pisor);
	$consulta->bindParam(':observacion', $this->observacion);
	$consulta->bindParam(':tipoubicacion_id', $this->tipoubicacion_id);
          $consulta->bindParam(':id', $this->id);
          $consulta->execute();
       }else /*Inserta*/ {
          $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (codigo, fregistro, destinatario, aread, pisod, remitente, arear, pisor, observacion, tipoubicacion_id) VALUES(:codigo, :fregistro, :destinatario, :aread, :pisod, :remitente, :arear, :pisor, :observacion, :tipoubicacion_id)');
          $consulta->bindParam(':codigo', $this->codigo);
	$consulta->bindParam(':fregistro', $this->fregistro);
	$consulta->bindParam(':destinatario', $this->destinatario);
	$consulta->bindParam(':aread', $this->aread);
	$consulta->bindParam(':pisod', $this->pisod);
	$consulta->bindParam(':remitente', $this->remitente);
	$consulta->bindParam(':arear', $this->arear);
	$consulta->bindParam(':pisor', $this->pisor);
	$consulta->bindParam(':observacion', $this->observacion);
	$consulta->bindParam(':tipoubicacion_id', $this->tipoubicacion_id);
          $consulta->execute();
          $this->id = $conexion->lastInsertId();
       }
       $conexion = null;
    }
public static function buscarPorId($codigo){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT codigo FROM ' . self::TABLA . ' WHERE codigo = :codigo');
       $consulta->bindParam(':codigo', $codigo);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self($registro['codigo'], $codigo);
       }else{
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
 public function recuperarTodos(){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY id');
       $consulta->execute();
       $registros = $consulta->fetchAll();
	return $registros;
}
public static function recuperarTodosArea($tipoubicacion_id){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where tipoubicacion_id=:tipoubicacion_id');
	$consulta->bindParam(':tipoubicacion_id', $tipoubicacion_id);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
public static function buscarPorCA($codigo, $tipoubicacion_id){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where codigo=:codigo AND tipoubicacion_id=:tipoubicacion_id');
	$consulta->bindParam(':codigo', $codigo);
	$consulta->bindParam(':tipoubicacion_id', $tipoubicacion_id);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
public static function buscarPorIc($codigo){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT id, codigo, fregistro, destinatario, aread, pisod, remitente, arear, pisor, observacion, tipoubicacion_id ' . self::TABLA . ' WHERE codigo = :codigo');
       $consulta->bindParam(':codigo', $codigo);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self($registro['codigo'], $registro['fregistro'], $registro['destinatario'],$registro['aread'],$registro['pisod'],$registro['remitente'],$registro['aread'],$registro['pisor'],$registro['observacion'],$registro['tipoubicacion_id'], $codigo);
       }else{
          return false;
       }
    }
public static function buscarPorI($codigo){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT id, codigo, fregistro, destinatario, aread, pisod, remitente, arear, pisor, observacion, tipoubicacion_id FROM ' . self::TABLA . ' WHERE codigo = :codigo');
       $consulta->bindParam(':codigo', $codigo);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self($registro['codigo'], $registro['fregistro'], $registro['destinatario'], $registro['aread'], $registro['pisod'], $registro['remitente'], $registro['arear'], $registro['pisor'], $registro['observacion'], $registro['tipoubicacion_id'], $registro['id'], $codigo);
       }else{
          return false;
       }
    }
	
}

?>
