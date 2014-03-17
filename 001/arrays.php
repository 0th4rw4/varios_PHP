<?php
ini_set( 'display_errors', 0 );
$carpeta = 'includes/';
/**************************************************************/
$menu = array();
$menu[]= array(
				'id' => 'inicio',
				'mostrar' => 'Inicio',
				'archivo' => 'bienvenido'
			);
$menu[]= array(
				'id' => 'cv',
				'mostrar' => 'Curriculum',
				'archivo' => 'curriculum'
			);
$menu[]= array(
				'id' => 'porfolio',
				'mostrar' => 'Porfolio',
				'archivo' => 'porfolio'
			);
$menu[]= array(
				'id' => 'contacto',
				'mostrar' => 'Contacto',
				'archivo' => 'formulario'
			);
/**************************************************************/
$social = array();
$social[]=array(
				'url'=>'http://www.facebook.com',
				'img'=>'FaceBook_32x32.png',
				'alt'=>'Seguinos en Facebook'
			);
$social[]=array(
				'url'=>'http://www.twitter.com',
				'img'=>'Twitter_32x32',
				'alt'=>'Seguinos en Twitter'
			);
/**************************************************************/
$materias = array();
$materias[] = array(
					'id'=>'d_graf',
					'nombre'=>'Diseño Grafico'
				);
$materias[] = array(
					'id'=>'sw',
					'nombre'=>'Sitios Web'
				);
$materias[] = array(
					'id'=>'dm',
					'nombre'=>'Diseño de Marca'
				);
/**************************************************************/
$trabajos = array();
$trabajos[] = array(
					'categMateria'=>'d_graf',
					'archivo'=>'MobileMarketing-515x343.png',
					'alt'=>'ABC001',
					'descripcion'=>'Categoria DiseñoGrafico - Muestra ABC001'
				);
$trabajos[] = array(
					'categMateria'=>'d_graf',
					'archivo'=>'ricardoiii.jpg',
					'alt'=>'ABC002',
					'descripcion'=>'Categoria DiseñoGrafico - Muestra ABC002'
				);
$trabajos[] = array(
					'categMateria'=>'d_graf',
					'archivo'=>'explosion_mardel.jpg',
					'alt'=>'ABC003',
					'descripcion'=>'Categoria DiseñoGrafico - Muestra ABC003'
				);	
$trabajos[] = array(
					'categMateria'=>'sw',
					'archivo'=>'screenshot.png',
					'alt'=>'ABC003',
					'descripcion'=>'Categoria SitioWeb - Muestra ABC004'
				);
$trabajos[] = array(
					'categMateria'=>'sw',
					'archivo'=>'screenshot2.png',
					'alt'=>'ABC004',
					'descripcion'=>'Categoria SitioWeb - Muestra ABC004'
				);
$trabajos[] = array(
					'categMateria'=>'sw',
					'archivo'=>'tomascribb-650x450.jpg',
					'alt'=>'ABC005',
					'descripcion'=>'Categoria SitioWeb - Muestra ABC005'
				);
$trabajos[] = array(
					'categMateria'=>'dm',
					'archivo'=>'luis-brandoni.jpg',
					'alt'=>'ABC006',
					'descripcion'=>'Categoria DiseñoDeMarca - Muestra ABC006'
				);
$trabajos[] = array(
					'categMateria'=>'dm',
					'archivo'=>'timeberners-lee.jpg',
					'alt'=>'ABC007',
					'descripcion'=>'Categoria DiseñoDeMarca - Muestra ABC007'
				);
$trabajos[] = array(
					'categMateria'=>'dm',
					'archivo'=>'explosion_mardel.jpg',
					'alt'=>'ABC008',
					'descripcion'=>'Categoria DiseñoDeMarca - Muestra ABC008'
				);
$trabajos[] = array(
					'categMateria'=>'dm',
					'archivo'=>'MobileMarketing-515x343.png',
					'alt'=>'ABC009',
					'descripcion'=>'Categoria DiseñoDeMarca - Muestra ABC009'
				);
/**************************************************************/
$listaArrays = array(
				$menu,
				$social,
				$materias,
				$trabajos
			);

?>
