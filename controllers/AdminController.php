<?php
class AdminController extends Pails\Controller
{
	use PailsAuthentication;

	public $before_actions = array('require_login');

	function index()
	{
		$this->model = Menu::construct(ADMIN_MENU_SLUG);
	}
}