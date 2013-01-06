<?php
App::import('Controller','_base/Items');
class PromosController extends ItemsController{
	var $name = 'Promos';
	var $uses = array('Promo','Promoimg');
		
	function admin_export(){ $this->_export(array('nombre','descripcion','comment_count')); }
}
?>