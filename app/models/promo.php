<?php
class Promo extends AppModel {
	var $name = 'Promo';
	var $labels = array(
		'comment_count'=>'comentarios',
		'promoimg_count'=>'Imágenes'
	);
	var $hasMany = array(
		'Comment'=>array(
			'className'=>'Comment',
			'foreignKey'=>'parent_id',
			'conditions'=>array('parent'=>'Promo'),
			'dependent'=>true
		)/*,
		'Promoimg'=>array(
			'className'=>'Promoimg',
			'order'=>'Promoimg.orden asc',
			'dependent'=>true
		)*/
	);
	/*
	var $hasOne = array(
		'Promoportada'=>array(
			'className'=>'Promoimg',
			'foreignKey'=>'promo_id',
			'conditions'=>'Promoportada.portada = 1'
		)
	);
	*/
	var $validate = array();
}
?>