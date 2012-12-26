<?php
class Magazine extends AppModel {
	var $name = 'Magazine';
	var $labels = array('magazineimg_count'=>'Páginas','src'=>'Poster');
	var $actsAs = array('File' => array('portada'=>false));
	var $hasMany = array(
		'Magazineimg'=>array(
			'className'=>'Magazineimg',
			'order'=>'Magazineimg.orden asc',
			'dependent'=>true
		)
	);

	var $validate = array();
}
?>