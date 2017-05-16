<?php
require_once 'conexion.php';
class Historial_archivos {
	private $id;
	private $archivo_id;
	private $n_old;
	private $fregistro_old;
	private $destino_old;
	private $remitente_old;
	private $dependencia_old;
	private $finforme_old;
	private $contenido_old;
	private $tipologia_id_old;
	private $tradiccion_id_old;
	private $danexo_old;
	private $piezas_old;
	private $observacion_old;
	private $ubicacion_old;
	private $usuario_old;
	private $hora_old;
	private $url_old;
	private $tipoubicacion_id_old;
	private $factual;
	private $uactual;
	const TABLA ='historial_archivos';
	public function getId() {
		return $this->id;
	}
	public function getArchivo_id() {
		return $this->archivo_id;
	}
	public function getN_old() {
		return $this->n_old;
	}
	public function getFregistro_old() {
		return $this->fregistro_old;
	}
	public function getDestino_old() {
		return $this->destino_old;
	}
	public function getRemitente_old() {
		return $this->remitente_old;
	}
	public function getDependencia_old() {
		return $this->dependencia_old;
	}
	public function getFinforme_old() {
		return $this->finforme_old;
	}
	public function getContenido_old() {
		return $this->contenido_old;
	}
	public function getTipologia_id_old() {
		return $this->tipologia_id_old;
	}
	public function getTradiccion_id_old() {
		return $this->tradiccion_id_old;
	}
	public function getDanexo_old() {
		return $this->danexo_old;
	}
	public function getPiezas_old() {
		return $this->piezas_old;
	}
	public function getObservacion_old() {
		return $this->observacion_old;
	}
	public function getUbicacion_old() {
		return $this->ubicacion_old;
	}
	public function getUsuario_old() {
		return $this->usuario_old;
	}
	public function getHora_old() {
		return $this->hora_old;
	}
	public function getUrl_old() {
		return $this->url_old;
	}
	public function getTipoubicacion_id_old() {
		return $this->tipoubicacion_id_old;
	}
	public function getFactual() {
		return $this->factual;
	}
	public function getUactual() {
		return $this->uactual;
	}
	public function setArchivo_id ($archivo_id) {
		$this->archivo_id = $archivo_id;
	}
public function setN_old ($n_old) {
		$this->n_old = $n_old;
	}
public function setFregistro_old ($fregistro_old) {
		$this->fregistro_old = $fregistro_old;
	}
public function setDestino_old ($destino_old) {
		$this->destino_old = $destino_old;
	}
public function setRemitente_old ($remitente_old) {
		$this->remitente_old = $remitente_old;
	}
public function setDependencia_old ($dependencia_old) {
		$this->dependencia_old = $dependencia_old;
	}
public function setFinforme_old ($finforme_old) {
		$this->finforme_old = $finforme_old;
	}
public function setContenido_old ($contenido_old) {
		$this->contenido_old = $contenido_old;
	}
public function setTipologia_id_old ($tipologia_id_old) {
		$this->tipologia_id_old = $tipologia_id_old;
	}
public function setTradiccion_id_old ($tradiccion_id_old) {
		$this->tradiccion_id_old = $tradiccion_id_old;
	}
public function setDanexo_old ($danexo_old) {
		$this->danexo_old = $danexo_old;
	}
public function setPiezas_old ($piezas_old) {
		$this->piezas_old = $piezas_old;
	}
public function setObservacion_old ($observacion_old) {
		$this->observacion_old = $observacion_old;
	}
public function setUbicacion_old ($ubicacion_old) {
		$this->ubicacion_old = $ubicacion_old;
	}
public function setUsuario_old ($usuario_old) {
		$this->usuario_old = $usuario_old;
	}
public function setHora_old ($hora_old) {
		$this->hora_old = $hora_old;
	}
public function setUrl_old ($url_old) {
		$this->url_old = $url_old;
	}
public function setTipoubicacion_id_old ($tipoubicacion_id_old) {
		$this->tipoubicacion_id_old = $tipoubicacion_id_old;
	}
public function setFactual ($factual) {
		$this->factual = $factual;
	}
public function setUactual ($uactual) {
		$this->uactual = $uactual;
	}
public function __construct ($archivo_id, $n_old, $fregistro_old, $destino_old, $remitente_old, $dependencia_old, $finforme_old, $contenido_old, $tipologia_id_old, $tradiccion_id_old, $danexo_old, $piezas_old, $observacion_old, $ubicacion_old, $usuario_old, $hora_old, $url_old, $tipoubicacion_id_old, $factual, $uactual, $id=null) {
		$this->archivo_id = $archivo_id;
		$this->n_old = $n_old;
		$this->fregistro_old = $fregistro_old;
		$this->destino_old = $destino_old;
		$this->remitente_old = $remitente_old;
		$this->dependencia_old = $dependencia_old;
		$this->finforme_old = $finforme_old;
		$this->contenido_old = $contenido_old;
		$this->tipologia_id_old = $tipologia_id_old;
		$this->tradiccion_id_old = $tradiccion_id_old;
		$this->danexo_old = $danexo_old;
		$this->piezas_old = $piezas_old;
		$this->observacion_old = $observacion_old;
		$this->ubicacion_old = $ubicacion_old;
		$this->usuario_old = $usuario_old;
		$this->hora_old = $hora_old;
		$this->url_old = $url_old;
		$this->tipoubicacion_id_old = $tipoubicacion_id_old;
		$this->factual = $factual;
		$this->uactual = $uactual;
		$this->id = $id;

	}
public function guardar() {
		$conexion = new Conexion();
		if($this->id) /*Modifica*/ {
          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' Set archivo_id = :archivo_id, n_old = :n_old, fregistro_old = :fregistro_old, destino_old = :destino_old, remitente_old = :remitente_old, dependencia_old = :dependencia_old, finforme_old = :finforme_old, contenido_old = :contenido_old, tipologia_id_old = :tipologia_id_old, tradiccion_id_old = :tradiccion_id_old, danexo_old = :danexo_old, piezas_old = :piezas_old, observacion_old = :observacion_old, ubicacion_old = :ubicacion_old, usuario_old = :usuario_old, hora_old = :hora_old, url_old = :url_old, tipoubicacion_id_old = :tipoubicacion_id_old, factual = :factual, uactual = :uactual WHERE id = :id');
          $consulta->bindParam(':archivo_id', $this->archivo_id);
	$consulta->bindParam(':n_old', $this->n_old);
	$consulta->bindParam(':fregistro_old', $this->fregistro_old);
	$consulta->bindParam(':destino_old', $this->destino_old);
	$consulta->bindParam(':remitente_old', $this->remitente_old);
	$consulta->bindParam(':dependencia_old', $this->dependencia_old);
	$consulta->bindParam(':finforme_old', $this->finforme_old);
	$consulta->bindParam(':contenido_old', $this->contenido_old);
	$consulta->bindParam(':tipologia_id_old', $this->tipologia_id_old);
	$consulta->bindParam(':tradiccion_id_old', $this->tradiccion_id_old);
	$consulta->bindParam(':danexo_old', $this->danexo_old);
	$consulta->bindParam(':piezas_old', $this->piezas_old);
	$consulta->bindParam(':observacion_old', $this->observacion_old);
	$consulta->bindParam(':ubicacion_old', $this->ubicacion_old);
	$consulta->bindParam(':usuario_old', $this->usuario_old);
	$consulta->bindParam(':hora_old', $this->hora_old);
	$consulta->bindParam(':url_old', $this->url_old);
	$consulta->bindParam(':tipoubicacion_id_old', $this->tipoubicacion_id_old);
	$consulta->bindParam(':factual', $this->factual);
	$consulta->bindParam(':uactual', $this->uactual);
          $consulta->bindParam(':id', $this->id);
          $consulta->execute();
       }else /*Inserta*/ {
          $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (archivo_id, n_old, fregistro_old, destino_old, remitente_old, dependencia_old, finforme_old, contenido_old, tipologia_id_old, tradiccion_id_old, danexo_old, piezas_old, observacion_old, ubicacion_old, usuario_old, hora_old, url_old, tipoubicacion_id_old, factual, uactual) VALUES(:archivo_id, :n_old, :fregistro_old, :destino_old, :remitente_old, :dependencia_old, :finforme_old, :contenido_old, :tipologia_id_old, :tradiccion_id_old, :danexo_old, :piezas_old, :observacion_old, :ubicacion_old, :usuario_old, :hora_old, :url_old, :tipoubicacion_id_old, :factual, :uactual)');
          $consulta->bindParam(':archivo_id', $this->archivo_id);
	$consulta->bindParam(':n_old', $this->n_old);
	$consulta->bindParam(':fregistro_old', $this->fregistro_old);
	$consulta->bindParam(':destino_old', $this->destino_old);
	$consulta->bindParam(':remitente_old', $this->remitente_old);
	$consulta->bindParam(':dependencia_old', $this->dependencia_old);
	$consulta->bindParam(':finforme_old', $this->finforme_old);
	$consulta->bindParam(':contenido_old', $this->contenido_old);
	$consulta->bindParam(':tipologia_id_old', $this->tipologia_id_old);
	$consulta->bindParam(':tradiccion_id_old', $this->tradiccion_id_old);
	$consulta->bindParam(':danexo_old', $this->danexo_old);
	$consulta->bindParam(':piezas_old', $this->piezas_old);
	$consulta->bindParam(':observacion_old', $this->observacion_old);
	$consulta->bindParam(':ubicacion_old', $this->ubicacion_old);
	$consulta->bindParam(':usuario_old', $this->usuario_old);
	$consulta->bindParam(':hora_old', $this->hora_old);
	$consulta->bindParam(':url_old', $this->url_old);
	$consulta->bindParam(':tipoubicacion_id_old', $this->tipoubicacion_id_old);
	$consulta->bindParam(':factual', $this->factual);
	$consulta->bindParam(':uactual', $this->uactual);
          $consulta->execute();
          $this->id = $conexion->lastInsertId();
       }
       $conexion = null;
    }


public static function buscarPorUA($usuario_old){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' where usuario_old=:usuario_old');
	$consulta->bindParam(':usuario_old', $usuario_old);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
	
}

?>
