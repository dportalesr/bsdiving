<?php
App::import('Controller','_base/Imgs');
class PromoimgsController extends ImgsController{
	var $name = 'Promoimgs';
	var $uses = array('Promoimg','Promo');
}
?>