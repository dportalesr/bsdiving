<?php
App::import('Controller','_base/Items');
class HotelsController extends ItemsController{
	var $name = 'Hotels';
	var $uses = array('Hotel');
}
?>