<?php
App::import('Controller','_base/Items');
class ToursController extends ItemsController{
	var $name = 'Tours';
	var $uses = array('Tour');
}
?>