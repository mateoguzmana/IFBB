<link rel="StyleSheet" href="dtree.css" type="text/css" />
<script type="text/javascript" src="dtree.js"></script>


<script type="text/javascript">

<!--

d = new dTree('d');

d.add(0,-1,		'MENU PRINCIPAL');

d.add(12,0,		'Generales',					'');
d.add(15,12,	'Animacion',					'banner.php',							'', _target='contenido');
d.add(17,12,	'Redes Sociales',				'redes.php',							'', _target='contenido');
d.add(18,12,	'Footer',						'footer.php',							'', _target='contenido');
d.add(19,12,	'Cabecera',						'espacios.php',							'', _target='contenido');

d.add(1,0,		'Nosotros',						'');
d.add(2,1,		'Control de Contenido',			'empresa.php',							'', _target='contenido');



d.add(40,0,		'Eventos',						'');
d.add(41,40,	'Calendario',					'calendario.php',						'', _target='contenido');
d.add(42,40,	'Resultados',					'resultados.php',						'', _target='contenido');
d.add(43,40,	'Invitaciones',					'invitaciones.php',						'', _target='contenido');


d.add(20,0,		'Noticias',						'');
d.add(21,20,	'Control de Contenido',			'noticias.php',							'', _target='contenido');


d.add(190,0,	'Reglamento',					'');
d.add(197,190,	'Categorias',					'categoriasr.php',						'', _target='contenido');
d.add(193,190,	'Reglamentos',					'reglamentos.php',						'', _target='contenido');
d.add(195,190,	'Formatos',						'formatos.php',							'', _target='contenido');
d.add(196,190,	'Infogafria',					'infografia.php',						'', _target='contenido');

d.add(79,0,		'Patrocinadores',				'');
d.add(80,79,	'Control de Contenido',			'patrocinadores.php',					'', _target='contenido');




/*
d.add(201,0,	'Federaciones',					'');
d.add(202,201,	'Control de Contenido',			'federaciones.php',						'', _target='contenido');


d.add(203,0,	'Publicaciones',				'');
d.add(204,203,	'Control de Contenido',			'publicaciones.php',					'', _target='contenido');*/

d.add(205,0,	'Multimedia',					'');
d.add(206,205,	'Categorias',					'cats.php',								'', _target='contenido');
d.add(207,205,	'Imagenes',						'imagenes.php',							'', _target='contenido');
d.add(208,205,	'Videos',						'videos.php',							'', _target='contenido');

d.add(76,0,		'Contactenos',					'');
d.add(78,76,	'Contacto',						'contacto.php',							'', _target='contenido');

//d.add(99,0,		'Fotos Internas',				'fotosinternas.php',					'', _target='contenido');

d.add(61,0,		'Cambiar clave',				'administrar.php',						'', _target='contenido');


document.write(d);


//-->

</script>