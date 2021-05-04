<?php

defined('_EXEC') or die;

class Index_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		define('_title', Configuration::$web_page . ' | {$lang.home}');

		$template = $this->view->render($this, 'index');

		echo $template;
	}

	public function shop()
	{
		define('_title', Configuration::$web_page . ' | {$lang.shop}');

		$template = $this->view->render($this, 'shop');

		echo $template;
	}

	public function care()
	{
		define('_title', Configuration::$web_page . ' | {$lang.care}');

		$template = $this->view->render($this, 'care');

		echo $template;
	}

	public function stay()
	{
		define('_title', Configuration::$web_page . ' | {$lang.stay}');

		$template = $this->view->render($this, 'stay');

		echo $template;
	}

	public function entrertain()
	{
		define('_title', Configuration::$web_page . ' | {$lang.entrertain}');

		$template = $this->view->render($this, 'entrertain');

		echo $template;
	}

	public function taste()
	{
		define('_title', Configuration::$web_page . ' | {$lang.taste}');

		$template = $this->view->render($this, 'taste');

		echo $template;
	}

	public function work()
	{
		define('_title', Configuration::$web_page . ' | {$lang.work}');

		$template = $this->view->render($this, 'work');

		echo $template;
	}

	public function events()
	{
		define('_title', Configuration::$web_page . ' | {$lang.events}');

		$template = $this->view->render($this, 'events');

		echo $template;
	}

	public function contact()
	{
		if (Format::exist_ajax_request() == true)
		{
			$errors = [];

			if (empty($_POST['name']))
				array_push($errors, ['{$lang.name}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['email']))
				array_push($errors, ['{$lang.email}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['phone']))
				array_push($errors, ['{$lang.phone}: {$lang.dont_leave_this_field_empty}']);

			if (empty($_POST['message']))
				array_push($errors, ['{$lang.message}: {$lang.dont_leave_this_field_empty}']);

			if (empty($errors))
			{
				$mail = new Mailer(true);

				try
				{
					$mail->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
					$mail->addAddress(Configuration::$vars['contact']['email'], Configuration::$web_page);
					$mail->Subject = 'Nuevo contacto';
					$mail->Body = 'Nombre: ' . $_POST['name'] . '<br>Correo electrónico: ' . $_POST['email'] . '<br>Teléfono: ' . $_POST['phone'] . '<br>Mensaje: ' . $_POST['message'];
					$mail->send();
				}
				catch (Exception $e) {}

				echo json_encode([
					'status' => 'success',
					'message' => '{$lang.thanks_for_contact_us}'
				]);
			}
			else
			{
				echo json_encode([
					'status' => 'error',
					'errors' => $errors
				]);
			}
		}
		else
		{
			define('_title', Configuration::$web_page . ' | {$lang.contact}');

			$template = $this->view->render($this, 'contact');

			echo $template;
		}
	}

	public function map()
	{
		define('_title', Configuration::$web_page . ' | {$lang.map}');

		$template = $this->view->render($this, 'map');

		echo $template;
	}

	public function privacy_notice()
	{
		define('_title', Configuration::$web_page . ' | {$lang.privacy_notice}');

		$template = $this->view->render($this, 'privacy_notice');

		echo $template;
	}
}
