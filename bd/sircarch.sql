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
CREATE TABLE `carpeta` (
  `id` int(11) NOT NULL auto_increment,
  `notaremision_id` int(11) NOT NULL, 
  `codigo` varchar(45) NOT NULL,
   `carpeta` varchar(145) NOT NULL,
   `contenido` varchar(145) NOT NULL,
 PRIMARY KEY  (`id`),
 KEY `notaremision_id` (`notaremision_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



CREATE TABLE `notaremision` (
  `id` int(11) NOT NULL auto_increment,
  `codigo` varchar(45) NOT NULL,
  `fregistro` date NOT NULL,
   `destinatario` varchar(105) NOT NULL,
  `aread` varchar(45) NOT NULL,
  `pisod` varchar(5) NOT NULL,
  `remitente` varchar(105) NOT NULL,
  `arear` varchar(45) NOT NULL,
  `pisor` varchar(5) NOT NULL,
  `o0` varchar(11) NULL,
  `o1` varchar(11) NULL,
  `o2` varchar(11) NULL,
  `o3` varchar(11) NULL,
  `o4` varchar(11) NULL,
  `o5` varchar(11) NULL,
  `o6` varchar(11) NULL,
  `o7` varchar(11) NULL,
  `o8` varchar(11) NULL,
  `o9` varchar(11) NULL, 
   `observacion` varchar(200) NOT NULL, 
     `tipoubicacion_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
 KEY `tipoubicacion_id` (`tipoubicacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE `area` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `piso` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `tipoubicacion` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



CREATE TABLE `archivo` (
  `id` int(11) NOT NULL auto_increment,
  `n` varchar(45) NOT NULL,
  `fregistro` date NOT NULL,
   `destino` varchar(105) NOT NULL,
  `remitente` varchar(145) NOT NULL,
  `dependencia` varchar(120) NOT NULL,
    `finforme` date NOT NULL,
  `contenido` varchar(200) NOT NULL,
  `tipologia_id` int(11) NOT NULL,
  `tradiccion_id` int(11) NOT NULL, 
  `danexo` varchar(200) NOT NULL,
  `piezas` int(4) NOT NULL,
  `observacion` varchar(200) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `usuario` varchar(20) NOT NULL,
   `hora` time NOT NULL,
    `url` varchar(200) NOT NULL, 
   `tipoubicacion_id` int(11) NOT NULL, 
  PRIMARY KEY  (`id`),
  KEY `tipologia_id` (`tipologia_id`),
  KEY `tradiccion_id` (`tradiccion_id`),
  KEY `tipoubicacion_id` (`tipoubicacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE `tipologia` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `tradiccion` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(100) NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE `usuario` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
   `cedula` varchar(15) NOT NULL,
  `indicador` varchar(45) NOT NULL,
  `telefono` varchar(20) NOT NULL,
    `correo` varchar(145) NOT NULL,
  `area` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `estudio` varchar(45) NOT NULL, 
  `tipo_usuario_id` int(11) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `tipo_usuario_id` (`tipo_usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
