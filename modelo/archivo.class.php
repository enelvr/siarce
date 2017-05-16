<?php
require_once 'conexion.php';
class Archivo {
	private $id;
	private $n;
	private $fregistro;
	private $destino;
	private $remitente;
	private $dependencia;
	private $finforme;
	private $contenido;
	private $tipologia_id;
	private $tradiccion_id;
	private $danexo;
	private $piezas;
	private $observacion;
	private $ubicacion;
	private $usuario;
	private $hora;
	private $url;
	private $tipoubicacion_id;
	const TABLA ='archivo';
	public function getId() {
		return $this->id;
	}
	public function getN() {
		return $this->n;
	}
	public function getFregistro() {
		return $this->fregistro;
	}
	public function getDestino() {
		return $this->destino;
	}
	public function getRemitente() {
		return $this->remitente;
	}
	public function getDependencia() {
		return $this->dependencia;
	}
	public function getFinforme() {
		return $this->finforme;
	}
	public function getContenido() {
		return $this->contenido;
	}
	public function getTipologia_id() {
		return $this->tipologia_id;
	}
	public function getTradiccion_id() {
		return $this->tradiccion_id;
	}
	public function getDanexo() {
		return $this->danexo;
	}
	public function getPiezas() {
		return $this->piezas;
	}
	public function getObservacion() {
		return $this->observacion;
	}
	public function getUbicacion() {
		return $this->ubicacion;
	}
	public function getUsuario() {
		return $this->usuario;
	}
	public function getHora() {
		return $this->hora;
	}
	public function getUrl() {
		return $this->url;
	}
	public function getTipoubicacion_id() {
		return $this->tipoubicacion_id;
	}
	public function setN ($n) {
		$this->n = $n;
	}
public function setFregistro ($fregistro) {
		$this->fregistro = $fregistro;
	}
public function setDestino ($destino) {
		$this->destino = $destino;
	}
public function setRemitente ($remitente) {
		$this->remitente = $remitente;
	}
public function setDependencia ($dependencia) {
		$this->dependencia = $dependencia;
	}
public function setFinforme ($finforme) {
		$this->finforme = $finforme;
	}
public function setContenido ($contenido) {
		$this->contenido = $contenido;
	}
public function setTipologia_id ($tipologia_id) {
		$this->tipologia_id = $tipologia_id;
	}
public function setTradiccion_id ($tradiccion_id) {
		$this->tradiccion_id = $tradiccion_id;
	}
public function setDanexo ($danexo) {
		$this->danexo = $danexo;
	}
public function setPiezas ($piezas) {
		$this->piezas = $piezas;
	}
public function setObservacion ($observacion) {
		$this->observacion = $observacion;
	}
public function setUbicacion ($ubicacion) {
		$this->ubicacion = $ubicacion;
	}
public function setUsuario ($usuario) {
		$this->usuario = $usuario;
	}
public function setHora ($hora) {
		$this->hora = $hora;
	}
public function setUrl ($url) {
		$this->url = $url;
	}
public function setTipoubicacion_id ($tipoubicacion_id) {
		$this->tipoubicacion_id = $tipoubicacion_id;
	}
public function __construct ($n, $fregistro, $destino, $remitente, $dependencia, $finforme, $contenido, $tipologia_id, $tradiccion_id, $danexo, $piezas, $observacion, $ubicacion, $usuario, $hora, $url, $tipoubicacion_id, $id=null) {
		$this->n = $n;
		$this->fregistro = $fregistro;
		$this->destino = $destino;
		$this->remitente = $remitente;
		$this->dependencia = $dependencia;
		$this->finforme = $finforme;
		$this->contenido = $contenido;
		$this->tipologia_id = $tipologia_id;
		$this->tradiccion_id = $tradiccion_id;
		$this->danexo = $danexo;
		$this->piezas = $piezas;
		$this->observacion = $observacion;
		$this->ubicacion = $ubicacion;
		$this->usuario = $usuario;
		$this->hora = $hora;
		$this->url = $url;
		$this->tipoubicacion_id = $tipoubicacion_id;
		$this->id = $id;

	}
public function guardar() {
		$conexion = new Conexion();
		if($this->id) /*Modifica*/ {
          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' Set n = :n, fregistro = :fregistro, destino = :destino, remitente = :remitente, dependencia = :dependencia, finforme = :finforme, contenido = :contenido, tipologia_id = :tipologia_id, tradiccion_id = :tradiccion_id, danexo = :danexo, piezas = :piezas, observacion = :observacion, ubicacion = :ubicacion, usuario = :usuario, hora = :hora, url = :url, tipoubicacion_id = :tipoubicacion_id WHERE id = :id');
          $consulta->bindParam(':n', $this->n);
	$consulta->bindParam(':fregistro', $this->fregistro);
	$consulta->bindParam(':destino', $this->destino);
	$consulta->bindParam(':remitente', $this->remitente);
	$consulta->bindParam(':dependencia', $this->dependencia);
	$consulta->bindParam(':finforme', $this->finforme);
	$consulta->bindParam(':contenido', $this->contenido);
	$consulta->bindParam(':tipologia_id', $this->tipologia_id);
	$consulta->bindParam(':tradiccion_id', $this->tradiccion_id);
	$consulta->bindParam(':danexo', $this->danexo);
	$consulta->bindParam(':piezas', $this->piezas);
	$consulta->bindParam(':observacion', $this->observacion);
	$consulta->bindParam(':ubicacion', $this->ubicacion);
	$consulta->bindParam(':usuario', $this->usuario);
	$consulta->bindParam(':hora', $this->hora);
	$consulta->bindParam(':url', $this->url);
	$consulta->bindParam(':tipoubicacion_id', $this->tipoubicacion_id);
          $consulta->bindParam(':id', $this->id);
          $consulta->execute();
       }else /*Inserta*/ {
          $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (n, fregistro, destino, remitente, dependencia, finforme, contenido, tipologia_id, tradiccion_id, danexo, piezas, observacion, ubicacion, usuario, hora, url, tipoubicacion_id) VALUES(:n, :fregistro, :destino, :remitente, :dependencia, :finforme, :contenido, :tipologia_id, :tradiccion_id, :danexo, :piezas, :observacion, :ubicacion, :usuario, :hora, :url, :tipoubicacion_id)');
          $consulta->bindParam(':n', $this->n);
	$consulta->bindParam(':fregistro', $this->fregistro);
	$consulta->bindParam(':destino', $this->destino);
	$consulta->bindParam(':remitente', $this->remitente);
	$consulta->bindParam(':dependencia', $this->dependencia);
	$consulta->bindParam(':finforme', $this->finforme);
	$consulta->bindParam(':contenido', $this->contenido);
	$consulta->bindParam(':tipologia_id', $this->tipologia_id);
	$consulta->bindParam(':tradiccion_id', $this->tradiccion_id);
	$consulta->bindParam(':danexo', $this->danexo);
	$consulta->bindParam(':piezas', $this->piezas);
	$consulta->bindParam(':observacion', $this->observacion);
	$consulta->bindParam(':ubicacion', $this->ubicacion);
	$consulta->bindParam(':usuario', $this->usuario);
	$consulta->bindParam(':hora', $this->hora);
	$consulta->bindParam(':url', $this->url);
	$consulta->bindParam(':tipoubicacion_id', $this->tipoubicacion_id);
          $consulta->execute();
          $this->id = $conexion->lastInsertId();
       }
       $conexion = null;
    }
public static function buscarPorId($n){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT n FROM ' . self::TABLA . ' WHERE n = :n');
       $consulta->bindParam(':n', $n);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self($registro['n'], $n);
       }else{
          return false;
       }
    }
 public function recuperarTodos(){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY id');
       $consulta->execute();
       $registros = $consulta->fetchAll();
	return $registros;
}
public static function buscarPorC($n){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where n=:n');
	$consulta->bindParam(':n', $n);
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
public static function buscarPorU($usuario){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where usuario=:usuario');
	$consulta->bindParam(':usuario', $usuario);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
public static function buscarPorF($fregistro,$dfecha){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where fregistro BETWEEN :fregistro and :dfecha');
	$consulta->bindParam(':fregistro', $fregistro);
	$consulta->bindParam(':dfecha', $dfecha);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
public static function buscarPorCA($n, $tipoubicacion_id){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where n=:n AND tipoubicacion_id=:tipoubicacion_id');
	$consulta->bindParam(':n', $n);
	$consulta->bindParam(':tipoubicacion_id', $tipoubicacion_id);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
public static function buscarPorI($n){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT id, n, fregistro, destino, remitente, dependencia, finforme, contenido, tipologia_id, tradiccion_id, danexo, piezas, observacion, ubicacion, usuario, hora, url, tipoubicacion_id FROM ' . self::TABLA . ' WHERE n = :n');
       $consulta->bindParam(':n', $n);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self($registro['n'], $registro['fregistro'], $registro['destino'], $registro['remitente'], $registro['dependencia'], $registro['finforme'], $registro['contenido'], $registro['tipologia_id'], $registro['tradiccion_id'], $registro['danexo'], $registro['piezas'], $registro['observacion'], $registro['ubicacion'], $registro['usuario'], $registro['hora'], $registro['url'], $registro['tipoubicacion_id'], $registro['id'], $n);
       }else{
          return false;
       }
    }
	
}

?>
