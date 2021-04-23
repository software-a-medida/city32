<?php
defined('_EXEC') or die;

class Pages_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function shop()
	{
		define('_title', '{$vkye_webpage}');
		$template = $this->view->render($this, 'shop');

		echo $template;
	}

	public function entertain()
	{
		define('_title', '{$vkye_webpage}');
		$template = $this->view->render($this, 'entertain');

		echo $template;
	}

	public function taste()
	{
		define('_title', '{$vkye_webpage}');
		$template = $this->view->render($this, 'taste');

		echo $template;
	}

	public function work()
	{
		define('_title', '{$vkye_webpage}');
		$template = $this->view->render($this, 'work');

		echo $template;
	}

}
