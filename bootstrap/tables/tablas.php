CREATE TABLE `T00_bitacorausuario` (
`idUsuario` int(100) NOT NULL,
`usuario` varchar(100) CHARACTER SET latin1 NOT NULL,
`division` int(50) NOT NULL,
`sede` int(50) NOT NULL,
`fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T00_bitacorausuario`
--

INSERT INTO `T00_bitacorausuario` (`idUsuario`, `usuario`, `division`, `sede`, `fecha`) VALUES
(1, 'sistema1', 11, 4, '2025-01-30 09:36:01'),
(2, 'balopez', 11, 1, '2025-01-30 10:54:16'),
(3, 'balopez', 11, 1, '2025-01-30 11:54:22'),
(4, 'balopez', 11, 1, '2025-01-31 10:40:08'),
(5, 'balopez', 11, 1, '2025-01-31 11:11:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_acceso_menu`
--

CREATE TABLE `T01_acceso_menu` (
`id` int(4) NOT NULL,
`id_menu` int(11) NOT NULL,
`id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T01_acceso_menu`
--

INSERT INTO `T01_acceso_menu` (`id`, `id_menu`, `id_grupo`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 4),
(4, 2, 4),
(5, 2, 3),
(6, 3, 1),
(7, 3, 3),
(8, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_admin`
--

CREATE TABLE `T01_admin` (
`id` int(10) NOT NULL,
`AdminDNI` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
`AdminNombre` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
`AdminApellido` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
`AdminTelefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
`AdminDireccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
`CuentaCodigo` varchar(70) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `T01_admin`
--

INSERT INTO `T01_admin` (`id`, `AdminDNI`, `AdminNombre`, `AdminApellido`, `AdminTelefono`, `AdminDireccion`,
`CuentaCodigo`) VALUES
('', '2891832940101', 'Abimael', 'LÃ³pez', '32887777', 'Ciudad', 'AC2241616-16'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_bitacora`
--

CREATE TABLE `T01_bitacora` (
`id` int(10) NOT NULL,
`BitacoraCodigo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
`BitacoraFecha` date NOT NULL,
`BitacoraHoraInicio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
`BitacoraHoraFinal` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
`BitacoraTipo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
`BitacoraYear` int(4) NOT NULL,
`CuentaCodigo` varchar(70) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `T01_bitacora`
--

INSERT INTO `T01_bitacora` (`id`, `BitacoraCodigo`, `BitacoraFecha`, `BitacoraHoraInicio`, `BitacoraHoraFinal`,
`BitacoraTipo`, `BitacoraYear`, `CuentaCodigo`) VALUES
(1, 'CB7321891-1', '2025-01-30', '11:19:10 am', 'Sin Registro', 'Administrador', 2025, 'AC2241616-16'),
(2, 'CB3020338-2', '2025-02-10', '10:37:57 am', 'Sin Registro', 'Administrador', 2025, 'AC7456929-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_cuenta`
--

CREATE TABLE `T01_cuenta` (
`id` int(10) NOT NULL,
`CuentaCodigo` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
`CuentaPrivilegio` int(1) NOT NULL,
`CuentaUsuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
`CuentaClave` varchar(535) COLLATE utf8_spanish2_ci NOT NULL,
`CuentaEmail` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
`CuentaEstado` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
`CuentaTipo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
`CuentaGenero` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
`CuentaFoto` varchar(535) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `T01_cuenta`
--

INSERT INTO `T01_cuenta` (`id`, `CuentaCodigo`, `CuentaPrivilegio`, `CuentaUsuario`, `CuentaClave`, `CuentaEmail`,
`CuentaEstado`, `CuentaTipo`, `CuentaGenero`, `CuentaFoto`) VALUES
('', 'AC4855552-13', 1, 'rescobar2010', 'WC9MZFh3SDdQTlhpamdGb1JCRHREZz09', '', 'Activo', 'Administrador', 'Masculino',
'Male1Avatar.png'),
('', 'AC2241616-16', 1, 'balopez', 'aUdHdzVEdGJzNjFUeVE5M2JYV3RkZz09', 'balopez@tablas.gob.gt', 'Activo',
'Administrador', 'Masculino', 'Male1Avatar.png'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_depto`
--

CREATE TABLE `T01_depto` (
`id_depto` int(2) NOT NULL,
`id_division` int(2) NOT NULL,
`depto` varchar(250) NOT NULL,
`correo_depto` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T01_depto`
--

INSERT INTO `T01_depto` (`id_depto`, `id_division`, `depto`, `correo_depto`) VALUES
(1, 3, 'Departamento de Obtención de Información', ''),
(2, 3, 'Departamento de Procesamiento de la Información', ''),
(10, 7, 'Departamento de Contabilidad', ''),
(11, 7, 'Departamento de Presupuesto', ''),
(12, 8, 'Departamento de Compras', ''),
(15, 8, 'Departamento de Inventarios', ''),
(18, 9, 'Departamento de Reclutamientoy Selección de Personal', ''),
(19, 9, 'Departamento de Formación y Capacitación', ''),
(26, 12, 'Departamento de Asesoría Legal', ''),
(30, 1, 'Gerencia General', ''),
(38, 9, 'División de Administración de Personal', ''),
(40, 11, 'División de Informática', ''),
(42, 13, 'Unidad de Auditoría Interna', ''),
(48, 9, 'Poligrafía', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_division`
--

CREATE TABLE `T01_division` (
`id_division` int(3) NOT NULL,
`division` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
`correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T01_division`
--

INSERT INTO `T01_division` (`id_division`, `division`, `correo`) VALUES
(1, 'Gerencia General', ''),
(9, 'Administración de Personal', ''),
(11, 'Informática', 'balopez@tablas.gob.gt'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_estado`
--

CREATE TABLE `T01_estado` (
`IdEstado` int(11) NOT NULL,
`EstadoNombre` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T01_estado`
--

INSERT INTO `T01_estado` (`IdEstado`, `EstadoNombre`) VALUES
(1, 'Activo'),
(2, 'Baja'),
(3, 'vacaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_grupo`
--

CREATE TABLE `T01_grupo` (
`id_grupo` int(2) NOT NULL,
`grupo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T01_grupo`
--

INSERT INTO `T01_grupo` (`id_grupo`, `grupo`) VALUES
(1, 'Desarrollo'),
(2, 'Personal'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_institucion`
--

CREATE TABLE `T01_institucion` (
`id_inst` int(11) NOT NULL,
`institucion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T01_institucion`
--

INSERT INTO `T01_institucion` (`id_inst`, `institucion`) VALUES
(1, 'One'),
(2, 'Two'),
(3, 'Three');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_menu`
--

CREATE TABLE `T01_menu` (
`id_menu` int(2) NOT NULL,
`pagina` varchar(20) NOT NULL,
`icono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T01_menu`
--

INSERT INTO `T01_menu` (`id_menu`, `pagina`, `icono`) VALUES
(1, 'Administrador', 'build'),
(2, 'Gerencia', 'search'),
(3, 'Personal', 'search');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_pagina`
--

CREATE TABLE `T01_pagina` (
`id_pagina` int(11) NOT NULL,
`pagina` varchar(30) NOT NULL,
`url` varchar(250) NOT NULL,
`icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T01_pagina`
--

INSERT INTO `T01_pagina` (`id_pagina`, `pagina`, `url`, `icon`) VALUES
(1, 'Gestion de usuarios', '../usuarios/index.php', ''),
(2, 'Desarrollador', '#', ''),
(3, 'Gestión Menu 1er.nivel', '../developer/index.php', ''),
(4, 'Gestión Menu 2do.nivel', '../developer/submenu.php', ''),
(5, 'Gestión Menu 3er.nivel', '../developer/subsubmenu.php', ''),
(6, 'Nueva pagina', '../developer/nueva_pagina.php', ''),
(8, 'Nuevo Menu', '../developer/nuevo_menu.php', ''),
(9, 'Control Armas', '../views/agregarArma.php', ''),
(10, 'Control Personal', '../views/personalView.php', ''),
(66, 'Subir Excel', '../logistica/vistaSubirExcel.php', ''),
(125, 'Inventario Informática', '../views/inventarioview.php', ''),
(127, 'Validacion de Bienes', '../views/validacionBienes.php', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_personal`
--

CREATE TABLE `T01_personal` (
`id` int(5) NOT NULL,
`dpi` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
`nick` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
`primerNombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
`segundoNombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
`tercerNombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
`primerApellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
`segundoApellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
`id_division` int(2) NOT NULL,
`id_sede` int(2) NOT NULL,
`estado` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
`fotoPersonal` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`actualizado` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_reseteoPass`
--

CREATE TABLE `T01_reseteoPass` (
`id` int(100) NOT NULL,
`user` varchar(100) NOT NULL,
`correo` varchar(100) NOT NULL,
`codigo` varchar(100) NOT NULL,
`estado` int(5) NOT NULL,
`ip` varchar(100) NOT NULL,
`fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T01_reseteoPass`
--

INSERT INTO `T01_reseteoPass` (`id`, `user`, `correo`, `codigo`, `estado`, `ip`, `fecha`) VALUES
(1, 'balopez', '', 'RE52625-5', 0, '192.168.0.93', '2025-03-20 13:06:11'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_sede`
--

CREATE TABLE `T01_sede` (
`id_sede` int(2) NOT NULL,
`sede` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T01_sede`
--

INSERT INTO `T01_sede` (`id_sede`, `sede`) VALUES
(1, 'Norte'),
(2, 'Occidente'),
(3, 'Oriente'),
(4, 'Sur'),
(5, 'Central'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_submenu`
--

CREATE TABLE `T01_submenu` (
`id_submenu` int(3) NOT NULL,
`id_menu` int(2) NOT NULL,
`id_grupo` int(2) NOT NULL,
`id_pagina` int(11) NOT NULL,
`icono` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T01_submenu`
--

INSERT INTO `T01_submenu` (`id_submenu`, `id_menu`, `id_grupo`, `id_pagina`, `icono`) VALUES
(1, 1, 1, 1, 0),
(2, 1, 4, 1, 0),
(3, 2, 1, 9, 0),
(4, 3, 1, 10, 0),
(5, 3, 4, 10, 0),
(6, 3, 3, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_sub_submenu`
--

CREATE TABLE `T01_sub_submenu` (
`id_sub_submenu` int(3) NOT NULL,
`id_submenu` int(3) NOT NULL,
`id_grupo` int(2) NOT NULL,
`pagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T01_usuario`
--

CREATE TABLE `T01_usuario` (
`id_usuario` int(2) NOT NULL,
`nick` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
`nom_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
`estado` int(1) NOT NULL,
`cargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
`correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
`id_grupo` int(3) NOT NULL,
`id_sede` int(2) NOT NULL,
`id_division` int(2) DEFAULT NULL,
`foto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
`clave` varchar(700) COLLATE utf8_spanish_ci NOT NULL,
`fechaCreado` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T01_usuario`
--

INSERT INTO `T01_usuario` (`id_usuario`, `nick`, `nom_user`, `estado`, `cargo`, `correo`, `id_grupo`, `id_sede`,
`id_division`, `foto`, `clave`, `fechaCreado`) VALUES
(1, 'sistema1', 'Jefe Desarrollo 2', 1, 'Administrador', '', 4, 1, 8, 'foto_perfil/perfil.jpg',
'$2y$12$r9ImRTsI0sD4ZOZGlx1qKeHrmJMLqQpzVPqdLb/mL9ylBDn2WUmFe', '0000-00-00 00:00:00.000000'),
(2, 'balopez', 'Benedicto Abimael L&oacute;pez Cano', 1, 'Administrador', '', 1, 1, 11, 'foto_perfil/balopez.jpg',
'$2y$12$thJBqeYhXNbQNBY92lIdyuRFGeHpIhVyybSzns/HOns82.XCVzQmq', '2025-03-20 11:38:39.000000'),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T02_calibre`
--

CREATE TABLE `T02_calibre` (
`idCalibre` int(5) NOT NULL,
`tipoCalibre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T02_calibre`
--

INSERT INTO `T02_calibre` (`idCalibre`, `tipoCalibre`) VALUES
(1, '40 S&W'),
(2, '5.56 x 45'),
(3, '5.7 x 28'),
(4, '7.62 x 39'),
(5, '9 x 19'),
(6, '9 x 19 mm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T02_canon`
--

CREATE TABLE `T02_canon` (
`idCanon` int(3) NOT NULL,
`largo` varchar(8) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T02_canon`
--

INSERT INTO `T02_canon` (`idCanon`, `largo`) VALUES
(1, '93 mm'),
(2, '99 mm'),
(3, '116 mm'),
(4, '123 mm'),
(5, '170 mm'),
(6, '196 mm'),
(7, '197 mm'),
(8, '215 mm'),
(9, '220 mm'),
(10, '360 mm'),
(11, '390 mm'),
(12, '410 mm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T02_marcaArmas`
--

CREATE TABLE `T02_marcaArmas` (
`idMarca` int(5) NOT NULL,
`marcaArma` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T02_marcaArmas`
--

INSERT INTO `T02_marcaArmas` (`idMarca`, `marcaArma`) VALUES
(1, 'CZ'),
(2, 'Bersa'),
(3, 'Bul'),
(4, 'Fabrique Nat. Herstal Belgiq.'),
(5, 'FEG'),
(6, 'Glock'),
(7, 'I.W.I.'),
(8, 'Jericho'),
(9, 'Pietro Beretta'),
(10, 'Ruger'),
(11, 'Sarsilmaz'),
(12, 'Scorpion'),
(13, 'Smith & Wesson'),
(14, 'Tanfoglio'),
(15, 'Tisas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T02_modeloArmas`
--

CREATE TABLE `T02_modeloArmas` (
`idModelo` int(5) NOT NULL,
`modelo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
`idMarca` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T02_modeloArmas`
--

INSERT INTO `T02_modeloArmas` (`idModelo`, `modelo`, `idMarca`) VALUES
(1, '75B', 1),
(2, '805 Bren', 1),
(3, 'Scorpion EVO 3 A1', 1),
(4, 'VZ58', 1),
(5, 'Thunder9 Ultra Compact Pro', 2),
(6, 'G-Cherokee', 3),
(7, 'F2000', 4),
(8, 'Five Seven Tactical', 4),
(9, 'GP MK3', 4),
(10, 'P9M', 5),
(11, '17', 6),
(12, '48', 6),
(13, '17 Gen. 4', 6),
(14, '17 Gen. 5', 6),
(15, '19 Gen. 5', 6),
(16, '19X', 6),
(17, 'Galil ACE 21', 7),
(18, 'Mini', 7),
(19, 'Uzi Pro', 7),
(20, '941 F', 8),
(21, '941FS', 8),
(22, '941PSL', 8),
(23, '92FS', 9),
(24, 'P89', 10),
(25, 'Kama Sport', 11),
(26, 'M&P 9', 13),
(27, 'M&P9 M2.0', 13),
(28, 'Force Pólice Pro', 14),
(29, 'Zigana PX9', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T02_tipoArmas`
--

CREATE TABLE `T02_tipoArmas` (
`idTipo` int(5) NOT NULL,
`tipoArma` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `T02_tipoArmas`
--

INSERT INTO `T02_tipoArmas` (`idTipo`, `tipoArma`) VALUES
(1, 'Ametralladora'),
(2, 'Carabina Automática'),
(3, 'Fusil'),
(4, 'Pistola'),
(5, 'Rifle de Asalto'),
(6, 'Sub Ametralladora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T03_armamento`
--

CREATE TABLE `T03_armamento` (
`id_arma` int(30) NOT NULL,
`nombre_arma` varchar(100) DEFAULT NULL,
`municiones` int(6) DEFAULT NULL,
`cargadores` int(6) DEFAULT NULL,
`marca` varchar(100) DEFAULT NULL,
`numero_registro` varchar(100) DEFAULT NULL,
`calibre_arma` varchar(100) DEFAULT NULL,
`estado_arma` int(6) DEFAULT NULL,
`sede_arma` int(10) DEFAULT NULL,
`cantidad_arma` int(10) DEFAULT NULL,
`entidad_pertenece` varchar(100) DEFAULT NULL,
`descripcion_arma` varchar(500) DEFAULT NULL,
`fecha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T03_armamento`
--

INSERT INTO `T03_armamento` (`id_arma`, `nombre_arma`, `municiones`, `cargadores`, `marca`, `numero_registro`,
`calibre_arma`, `estado_arma`, `sede_arma`, `cantidad_arma`, `entidad_pertenece`, `descripcion_arma`, `fecha_creacion`)
VALUES
(1, 'dsfasdfsad', 34, 43, 'afadf', '34333', 'dasfads', 1, 1, 333, 'PNC',
'ASDFASDFADSFSADFASDFDSAFASDFDASFASDFASDFASDFASDFASDF', '2025-01-20'),
(2, 'SQUINA', 45, 3, 'Pietro Beretta', 'A014772Z', '9mm', 1, 1, 100, 'PNC', 'Arma asignada a David QuinÃ¡ PNC',
'2025-01-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `T03_asignaciones`
--

CREATE TABLE `T03_asignaciones` (
`id_asignacion` int(50) NOT NULL,
`id_agente` int(50) NOT NULL,
`id_equipo` varchar(100) NOT NULL,
`id_arma` varchar(100) NOT NULL,
`fecha_creacion` date NOT NULL,
`fecha_modificacion` date DEFAULT NULL,
`estado` int(30) DEFAULT NULL,
`descripcion_asignacion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `T03_asignaciones`
--

INSERT INTO `T03_asignaciones` (`id_asignacion`, `id_agente`, `id_equipo`, `id_arma`, `fecha_creacion`,
`fecha_modificacion`, `estado`, `descripcion_asignacion`) VALUES
(1, 24, '', '1,<br />\r\n<b>Notice</b>: Undefined offset: 2 in
<b>C:\\tablas\\htdocs\\tablas\\vistas\\contenidos\\asign', '2025-01-20', '2025-01-20', 1, '3 cargadores');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T04_agente`
    --

    CREATE TABLE `T04_agente` (
    `IdAgente` int(3) NOT NULL,
    `AgenteDpi` varchar(30) CHARACTER SET latin1 NOT NULL,
    `AgenteNombre` varchar(45) CHARACTER SET latin1 NOT NULL,
    `AgenteApellido` varchar(45) CHARACTER SET latin1 NOT NULL,
    `AgenteNacimiento` date DEFAULT NULL,
    `AgenteGrupo` varchar(1) CHARACTER SET latin1 NOT NULL,
    `AgenteFoto` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
    `AgenteGradoAcademico` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
    `AgenteSede` int(1) DEFAULT NULL,
    `estadocivil` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
    `AgenteEstado` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
    `AgenteDireccion` varchar(500) CHARACTER SET latin1 NOT NULL,
    `departamento` varchar(11) CHARACTER SET latin1 NOT NULL,
    `municipio` varchar(11) CHARACTER SET latin1 NOT NULL,
    `AgenteDpiImagen` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
    `AgenteLicenciaImagen` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
    `fotomoto` varchar(250) CHARACTER SET latin1 NOT NULL,
    `TipoLicencia` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
    `Vencimiento` date DEFAULT NULL,
    `tipolicenciamoto` varchar(250) CHARACTER SET latin1 NOT NULL,
    `vencimientolicenciamoto` date NOT NULL,
    `AgenteContantoEmergencia` int(8) NOT NULL,
    `AgenteContantoPersonal` int(8) NOT NULL,
    `AgenteCV` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
    `AgenteTatuaje` varchar(50) CHARACTER SET latin1 NOT NULL,
    `sangre` varchar(6) CHARACTER SET latin1 NOT NULL,
    `IdPuesto` int(11) NOT NULL,
    `actualizacion` datetime NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla que tiene los agentes de seguridad';

    --
    -- Volcado de datos para la tabla `T04_agente`
    --

    INSERT INTO `T04_agente` (`IdAgente`, `AgenteDpi`, `AgenteNombre`, `AgenteApellido`, `AgenteNacimiento`,
    `AgenteGrupo`, `AgenteFoto`, `AgenteGradoAcademico`, `AgenteSede`, `estadocivil`, `AgenteEstado`, `AgenteDireccion`,
    `departamento`, `municipio`, `AgenteDpiImagen`, `AgenteLicenciaImagen`, `fotomoto`, `TipoLicencia`, `Vencimiento`,
    `tipolicenciamoto`, `vencimientolicenciamoto`, `AgenteContantoEmergencia`, `AgenteContantoPersonal`, `AgenteCV`,
    `AgenteTatuaje`, `sangre`, `IdPuesto`, `actualizacion`) VALUES
    (3, '1655656241008', 'Francisco Gabino', 'Cum Garc&iacute;a', '1988-11-29', 'A',
    'adjuntos/fotoAgentes/AG5033706-3.JPG', 'Diversificado', 1, 'CASADO', '1', 'Cant&oacute;n Santo Domingo, Samayac,
    Suchitep&eacute;quez.', '10', '143', 'adjuntos/dpiAgentes/AG6529893865-3.pdf',
    'adjuntos/licenciaAgentes/AG6529893865-3.pdf', 'adjuntos/licenciamoto/AG6529893865-3.pdf', '2', '2022-11-29', 'M',
    '2022-11-29', 53238702, 53328702, 'adjuntos/vitaeAgentes/AG6529893865-3.pdf', 'NO', '1', 2, '2022-12-02 14:39:55');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T04_antecedentesMedicos`
    --

    CREATE TABLE `T04_antecedentesMedicos` (
    `id` int(11) NOT NULL,
    `idAgente` int(3) NOT NULL,
    `AntecedentesPeso` decimal(10,2) NOT NULL,
    `AntecedentesEstatura` decimal(10,2) NOT NULL,
    `AntecedentesPesoIdeal` decimal(10,2) NOT NULL,
    `AntecedentesProblemasMedicos` varchar(300) CHARACTER SET latin1 NOT NULL,
    `AntecedentesAlergias` varchar(200) CHARACTER SET latin1 NOT NULL,
    `AntecedentesFichaMedica` varchar(500) CHARACTER SET latin1 NOT NULL,
    `ingresotablas` date NOT NULL,
    `ingresoseguridad` date NOT NULL,
    `renglon` varchar(11) CHARACTER SET latin1 NOT NULL,
    `rango` varchar(11) CHARACTER SET latin1 NOT NULL,
    `hijos` varchar(11) CHARACTER SET latin1 NOT NULL,
    `pantalon` varchar(20) CHARACTER SET latin1 NOT NULL,
    `camisa` varchar(20) CHARACTER SET latin1 NOT NULL,
    `saco` varchar(20) CHARACTER SET latin1 NOT NULL,
    `zapatos` varchar(20) CHARACTER SET latin1 NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T04_antecedentesMedicos`
    --

    INSERT INTO `T04_antecedentesMedicos` (`id`, `idAgente`, `AntecedentesPeso`, `AntecedentesEstatura`,
    `AntecedentesPesoIdeal`, `AntecedentesProblemasMedicos`, `AntecedentesAlergias`, `AntecedentesFichaMedica`,
    `ingresotablas`, `ingresoseguridad`, `renglon`, `rango`, `hijos`, `pantalon`, `camisa`, `saco`, `zapatos`) VALUES
    (2, 2, '4.00', '4.00', '4.00', '', '', 'adjuntos/fichaMedicaAgentes/', '0000-00-00', '0000-00-00', '', '', '', '',
    '', '', '');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T04_estado`
    --

    CREATE TABLE `T04_estado` (
    `IdEstado` int(11) NOT NULL,
    `EstadoNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T04_estado`
    --

    INSERT INTO `T04_estado` (`IdEstado`, `EstadoNombre`) VALUES
    (1, 'Activo'),
    (2, 'Baja'),
    (3, 'Suspendido');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T04_puesto`
    --

    CREATE TABLE `T04_puesto` (
    `IdPuesto` int(11) NOT NULL,
    `PuestoNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
    `PuestoFunciones` varchar(200) COLLATE utf8_spanish_ci NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T04_puesto`
    --

    INSERT INTO `T04_puesto` (`IdPuesto`, `PuestoNombre`, `PuestoFunciones`) VALUES
    (3, 'ADMINISTRATIVO', 'Desarrollo y administracion de las actividades de la division'),
    (4, 'OTROS', ' '),
    (5, 'COORDINADOR', 'Gestionar al personal asignado al grupo de '),
    (6, 'JEFE ', 'Gestionar al personal asignado a comitiva de '),
    (7, 'ASISTENTE', 'Gestionar datos de la '),
    (8, 'TECNICO', 'Gestionar que los agentes cuenten con los implementos necesarios para sus funciones'),
    (9, 'JEFE DEPARTAMENTO', 'Gestionar al personal asignado al departamento'),
    (10, 'Sub Gerente', 'Gestionar al personal asignado a la '),
    (11, 'Gerente', 'Gestionar al personal asignado a la ');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T04_tipoSangre`
    --

    CREATE TABLE `T04_tipoSangre` (
    `IdTipoSangre` int(2) NOT NULL,
    `TipoSangreNombre` varchar(8) COLLATE utf8_spanish_ci NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T04_tipoSangre`
    --

    INSERT INTO `T04_tipoSangre` (`IdTipoSangre`, `TipoSangreNombre`) VALUES
    (1, '0+'),
    (2, '0-'),
    (3, 'A+'),
    (4, 'A-'),
    (5, 'B+'),
    (6, 'B-'),
    (7, 'AB+'),
    (8, 'AB-');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T05_inventarioEquipo2`
    --

    CREATE TABLE `T05_inventarioEquipo2` (
    `id_equipo` int(50) NOT NULL,
    `nombre_equipo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
    `numero_inventario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
    `marca_equipo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
    `estado_equipo` int(50) DEFAULT NULL,
    `sede_equipo` int(50) DEFAULT NULL,
    `fecha_creacion` date DEFAULT NULL,
    `cantidad_equipo` int(50) DEFAULT NULL,
    `descripcion_equipo` varchar(500) CHARACTER SET latin1 DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T05_inventarioEquipo2`
    --

    INSERT INTO `T05_inventarioEquipo2` (`id_equipo`, `nombre_equipo`, `numero_inventario`, `marca_equipo`,
    `estado_equipo`, `sede_equipo`, `fecha_creacion`, `cantidad_equipo`, `descripcion_equipo`) VALUES
    (1, 'Test2', 'Test 3', 'Test4', 1, 0, '2025-02-07', 1, 'TEst5');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T06_bitacoraArmas`
    --

    CREATE TABLE `T06_bitacoraArmas` (
    `id` int(11) NOT NULL,
    `idArma` int(11) NOT NULL,
    `accion` enum('CREACION','ASIGNACION','BAJA') COLLATE utf8_spanish_ci NOT NULL,
    `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
    `observacion` text COLLATE utf8_spanish_ci,
    `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T06_bitacoraArmas`
    --

    INSERT INTO `T06_bitacoraArmas` (`id`, `idArma`, `accion`, `usuario`, `observacion`, `fecha`) VALUES
    (4, 1, 'BAJA', 'balopez', 'El arma fue dada de baja.', '2025-05-05 15:31:48'),
    (16, 23, 'CREACION', 'balopez', 'Registro creado desde el sistema', '2025-05-05 20:48:08'),
    (17, 22, 'BAJA', 'balopez', 'El arma fue dada de baja.', '2025-05-06 17:13:51'),
    (18, 21, 'BAJA', 'balopez', 'El arma fue dada de baja.', '2025-06-09 21:14:14');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T06_bitacoraControl`
    --

    CREATE TABLE `T06_bitacoraControl` (
    `id` int(11) NOT NULL,
    `nick` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'Usuario que crea el registro y asigna el bien \r\n',
    `usuario` varchar(250) CHARACTER SET latin1 NOT NULL,
    `fecha_asignacion` date NOT NULL,
    `codigo_inventario` varchar(250) CHARACTER SET latin1 NOT NULL,
    `descripcion` varchar(15000) CHARACTER SET latin1 NOT NULL,
    `comprobante` varchar(250) CHARACTER SET latin1 NOT NULL,
    `ubicacion` varchar(250) CHARACTER SET latin1 NOT NULL,
    `id_sede` varchar(11) CHARACTER SET latin1 NOT NULL,
    `actualizado` datetime NOT NULL,
    `estado_asignado` int(11) NOT NULL COMMENT '0->para creado\r\n1->validado por el jefe\r\n2->asignado ',
    `id_division` int(11) NOT NULL,
    `precio` decimal(65,2) NOT NULL,
    `jefe` varchar(250) CHARACTER SET latin1 NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T06_bitacoraControl`
    --

    INSERT INTO `T06_bitacoraControl` (`id`, `nick`, `usuario`, `fecha_asignacion`, `codigo_inventario`, `descripcion`,
    `comprobante`, `ubicacion`, `id_sede`, `actualizado`, `estado_asignado`, `id_division`, `precio`, `jefe`) VALUES
    (23, 'sistema1', 'sistemab', '2024-09-23', '003D7649', 'TECLADO',
    'adjuntos/comprobantesInventario/free-ultrasound-dsk_3.jpg', 'Esta es una prueba', '6', '2024-09-23 08:40:02', 4,
    11, '1000.00', 'sistema1');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T06_controlArmas`
    --

    CREATE TABLE `T06_controlArmas` (
    `id` int(11) NOT NULL,
    `nick` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'Usuario que crea el registro',
    `usuario` varchar(250) CHARACTER SET latin1 NOT NULL COMMENT 'Colaborador a quien se le asigna ',
    `fecha_asignacion` date NOT NULL,
    `codigo_inventario` varchar(250) CHARACTER SET latin1 NOT NULL,
    `descripcion` varchar(15000) CHARACTER SET latin1 NOT NULL,
    `comprobante` varchar(250) CHARACTER SET latin1 NOT NULL,
    `ubicacion` varchar(250) CHARACTER SET latin1 NOT NULL,
    `id_sede` varchar(11) CHARACTER SET latin1 NOT NULL,
    `actualizado` datetime NOT NULL,
    `estado` int(11) NOT NULL COMMENT '0=>No Asignado registro1=Asignado Registro 2= Baja de Inventario',
    `id_division` int(11) NOT NULL,
    `precio` decimal(65,2) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T06_controlArmas`
    --

    INSERT INTO `T06_controlArmas` (`id`, `nick`, `usuario`, `fecha_asignacion`, `codigo_inventario`, `descripcion`,
    `comprobante`, `ubicacion`, `id_sede`, `actualizado`, `estado`, `id_division`, `precio`) VALUES
    (1, 'sistema1', 'sistema1', '2024-07-16', '003D7649', 'TECLADO', 'adjuntos/comprobantesInventario/- -.pdf', 'Esta es
    una prueba', '6', '2024-07-16 08:31:20', 2, 10, '1000.00');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T06_inventarioArmas`
    --

    CREATE TABLE `T06_inventarioArmas` (
    `id` int(11) NOT NULL,
    `codigoInventario` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
    `tipoArmas` int(5) NOT NULL,
    `marca` int(5) NOT NULL,
    `modelo` int(5) NOT NULL,
    `tenencia` int(11) DEFAULT NULL,
    `marcaje` int(11) DEFAULT NULL,
    `huella` int(11) DEFAULT NULL,
    `calibre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
    `canon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
    `institucion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
    `accesorios` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
    `id_sedes` int(11) NOT NULL,
    `ubicacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
    `estado` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
    `costo` decimal(10,2) NOT NULL,
    `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
    `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `fechaBaja` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T06_inventarioArmas`
    --

    INSERT INTO `T06_inventarioArmas` (`id`, `codigoInventario`, `tipoArmas`, `marca`, `modelo`, `tenencia`, `marcaje`,
    `huella`, `calibre`, `canon`, `institucion`, `accesorios`, `id_sedes`, `ubicacion`, `estado`, `costo`, `foto`,
    `fechaRegistro`, `fechaBaja`) VALUES
    (1, 'dfgdfg745', 1, 10, 24, 4654565, 545645, 56465454, '5', '10', '1', 'dsdkhlknsd', 10, 'fgdgd', 'Baja',
    '74687.00', 'arma_67aa2394e7c8b.jpg', '2025-05-05 15:31:48', '2025-05-05 15:31:46');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T06_inventarioEquipo`
    --

    CREATE TABLE `T06_inventarioEquipo` (
    `id_equipo` int(50) NOT NULL,
    `nombre_equipo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
    `numero_inventario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
    `marca_equipo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
    `estado_equipo` int(50) DEFAULT NULL,
    `sede_equipo` int(50) DEFAULT NULL,
    `fecha_creacion` date DEFAULT NULL,
    `cantidad_equipo` int(50) DEFAULT NULL,
    `descripcion_equipo` varchar(500) CHARACTER SET latin1 DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T06_inventarioEquipo`
    --

    INSERT INTO `T06_inventarioEquipo` (`id_equipo`, `nombre_equipo`, `numero_inventario`, `marca_equipo`,
    `estado_equipo`, `sede_equipo`, `fecha_creacion`, `cantidad_equipo`, `descripcion_equipo`) VALUES
    (1, 'Test2', 'Test 3', 'Test4', 1, 0, '2025-02-07', 1, 'TEst5');

    -- --------------------------------------------------------

    --
    -- Estructura de tabla para la tabla `T10_movimientosArmas`
    --

    CREATE TABLE `T10_movimientosArmas` (
    `id` int(11) NOT NULL,
    `id_registro` int(250) NOT NULL,
    `estado` int(11) NOT NULL,
    `asuntos` varchar(250) CHARACTER SET latin1 NOT NULL,
    `seguridad` varchar(250) CHARACTER SET latin1 NOT NULL,
    `informatica` varchar(250) CHARACTER SET latin1 NOT NULL,
    `hora` time NOT NULL,
    `usuariosalida` varchar(250) CHARACTER SET latin1 NOT NULL,
    `observacionsalida` varchar(2000) CHARACTER SET latin1 NOT NULL,
    `fechasalida` datetime NOT NULL,
    `sede_salida` varchar(11) CHARACTER SET latin1 NOT NULL,
    `observacioningreso` varchar(2000) CHARACTER SET latin1 NOT NULL,
    `hora_ingreso` time NOT NULL,
    `fechaingreso` datetime NOT NULL,
    `usuarioingreso` varchar(50) CHARACTER SET latin1 NOT NULL,
    `asuntos2` varchar(11) CHARACTER SET latin1 NOT NULL,
    `informatica2` varchar(11) CHARACTER SET latin1 NOT NULL,
    `seguridad2` varchar(11) CHARACTER SET latin1 NOT NULL,
    `sede_ingreso` varchar(11) CHARACTER SET latin1 NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

    --
    -- Volcado de datos para la tabla `T10_movimientosArmas`
    --

    INSERT INTO `T10_movimientosArmas` (`id`, `id_registro`, `estado`, `asuntos`, `seguridad`, `informatica`, `hora`,
    `usuariosalida`, `observacionsalida`, `fechasalida`, `sede_salida`, `observacioningreso`, `hora_ingreso`,
    `fechaingreso`, `usuarioingreso`, `asuntos2`, `informatica2`, `seguridad2`, `sede_ingreso`) VALUES
    (1, 8, 2, '545', '168', ' ', '04:07:00', 'coordinadoroccidente', '', '2024-02-16 08:32:47', '6', '', '14:35:00',
    '2024-02-16 14:46:43', 'nperuch', '232', '', '169', '');

    --
    -- Índices para tablas volcadas
    --