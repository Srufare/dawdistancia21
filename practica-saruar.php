<?php

/**
 * Script que contiene las funciones para validar una fecha y un tramo indicado por el usuario en un formulario.
 * @author Sara Rufete <sara_rufete@live.com>
 * @version 1.0
 * {@internal Los desarrolladores deben saber que este script es un fragmento de un script mayor que contiene más funciones de validación.
 * Para tener acceso al proyecto completo pónganse en contacto con el autor.}
 */

/**
 * Método validarFecha
 * 
 * Método que recibe un parámetro que representa a una fecha y comprueba que dicha fecha
 * sea válida y que no sea del futuro. Si la fecha es correcta, devuelve true. Si no es correcta, 
 * devuelve false.
 * @param type $fecha
 * @return boolean
 */
function validarFecha($fecha) {
	$ok = false;
	$year = date('Y', strtotime($fecha));
	$month = date('m', strtotime($month));
	$day = date('d', strtotime($day));
	if(checkdate($month, $day, $year) && time() > mktime(0, 0, 0, $month, $day, $year)) {
		$ok = true;
	}
	return $ok;
}

/**
 * Método validarTramo
 * 
 * Método que recibe como parámetro una cadena que representa a un tramo y comprueba que dicho tramo
 * sea uno de los tramos válidos contenidos en array_tramo. Si el tramo es correcto devuelve true;
 * si no es correcto devuelve false.
 * @param type $tramo
 * @return boolean
 */
function validarTramo($tramo) {
	$ok = false;
	$array_tramo = ['tramo1', 'tramo2', 'tramo3', 'tramo4'];
	if(in_array($tramo, $array_tramo)){
		$ok = true;
	}
	return $ok;
}


echo 'El script se está ejecutando';
