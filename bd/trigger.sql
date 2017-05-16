CREATE TABLE IF NOT EXISTS `historial_archivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `archivo_id` int(11) NOT NULL,
  `n_old` varchar(45) NOT NULL,
`fregistro_old` date NOT NULL,
`destino_old` varchar(105) NOT NULL,
`remitente_old` varchar(145) NOT NULL,
`dependencia_old` varchar(145) NOT NULL,
`finforme_old` date NOT NULL,
 `contenido_old` varchar(200) NOT NULL,
`tipologia_id_old` int(11) NOT NULL,
`tradiccion_id_old` int(11) NOT NULL,
 `danexo_old` varchar(200) NOT NULL,
`piezas_old` int(4) NOT NULL,
`observacion_old` varchar(200) NOT NULL,
`ubicacion_old` varchar(200) NOT NULL,
`usuario_old` varchar(20) NOT NULL,
`hora_old` time NOT NULL,
`url_old` varchar(200) NOT NULL,
`tipoubicacion_id_old` int(11) NOT NULL,
`factual` date NOT NULL,
`uactual` varchar(20) NOT NULL,

  PRIMARY KEY (`id`));




---------------------------------------------------------------
- historial director
---------------------------------------------------------------
DROP TRIGGER IF EXISTS tg_historial_archivos;
DELIMITER $$

CREATE TRIGGER tg_historial_archivos 
AFTER UPDATE ON archivo
FOR EACH ROW
BEGIN
	INSERT INTO historial_archivos
(archivo_id, n_old, fregistro_old, destino_old, remitente_old, dependencia_old, finforme_old, contenido_old, tipologia_id_old, tradiccion_id_old, danexo_old, piezas_old, observacion_old, ubicacion_old, usuario_old, hora_old, url_old, tipoubicacion_id_old, factual, uactual) VALUES (OLD.id, OLD.n, OLD.fregistro, OLD.destino, OLD.remitente, OLD.dependencia, OLD.finforme, OLD.contenido, OLD.tipologia_id, OLD.tradiccion_id, OLD.danexo, OLD.piezas, OLD.observacion, OLD.ubicacion, NEW.usuario, OLD.hora, OLD.url, OLD.tipoubicacion_id, NOW(), CURRENT_USER());
END;
$$
DELIMITER ;
