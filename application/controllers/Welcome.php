<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Base_Controller {

	protected $controller = __CLASS__;

	public function before()
	{
		$this->load->model('component/tovar/Api_tovar', 'tovar_api');
	}

	// главная страница
	public function action_index()
	{
		// $this->render('index');
		$this->render('index', array(
			// 'api_get_kat' => $this->tovar_api->get_all_kat(),
			'api_get_random_tovar1' => $this->tovar_api->get_random_tovar(),
			'api_get_random_tovar2' => $this->tovar_api->get_random_tovar(),
			'api_get_random_tovar3' => $this->tovar_api->get_random_tovar(),
			'api_get_random_tovar4' => $this->tovar_api->get_random_tovar(),
			'api_get_new_tovar' => $this->tovar_api->get_new_tovar(),
			));
	}


	public function action_aboutus()
	{
		$this->render('aboutus');
	}
	public function action_sertifikaty()
	{
		$this->render('sertifikaty');
	}
	public function action_experience()
	{
		$this->render('experience');
	}
	public function action_articles()
	{
		$this->render('articles');
	}
	public function action_viewcart()
	{
		$this->render('viewcart');
	}
	public function action_contactus()
	{
		$this->render('contactus');
	}

	//вывод каталога товаров
	public function action_items($sub_category_id)
	{
		// $this->render('items');
		$this->render('items', array(
			'api_get_kat' => $this->tovar_api->get_all_kat(),
			'api_get_tovar' => $this->tovar_api->get_tovar($sub_category_id),
			'api_get_new_tovar' => $this->tovar_api->get_new_tovar(),
			'api_get_popular_tovar' => $this->tovar_api->get_popular_tovar(),
			));
	}

	//вывод единичного товара
	public function action_sitem($tovar_id)
	{
		// $this->render('sitem');
		$this->render('sitem', array(
			'api_get_kat' => $this->tovar_api->get_all_kat(),
			'api_get_tovar_single' => $this->tovar_api->get_tovar_single($tovar_id),
			'api_get_new_tovar' => $this->tovar_api->get_new_tovar(),
			'api_get_popular_tovar' => $this->tovar_api->get_popular_tovar(),
			));
	}


	public function action_checkout()
	{
		$this->render('checkout');
	}

	//вывод каталога подкатегорий
	public function action_subkat($category_id)
	{
		// $this->render('subkat');
		$this->render('subkat', array(
			'api_get_kat' => $this->tovar_api->get_all_kat(),
			'api_get_sub_category' => $this->tovar_api->get_sub_category_tovar($category_id),
			'api_get_new_tovar' => $this->tovar_api->get_new_tovar(),
			'api_get_popular_tovar' => $this->tovar_api->get_popular_tovar(),
			));
	}

	//вывод каталога категорий 
	public function action_kat()
	{
		// $this->render('kat');
		$this->render('kat', array(
			'api_get_kat' => $this->tovar_api->get_all_kat(),
			'api_get_category' => $this->tovar_api->get_all_category_tovar(),
			'api_get_new_tovar' => $this->tovar_api->get_new_tovar(),
			'api_get_popular_tovar' => $this->tovar_api->get_popular_tovar(),
			));
	}

		public function action_pozdravl()
	{
		$this->render('pozdravl');
	}
		public function action_diagnost()
	{
		$this->render('diagnost');
	}
		public function action_deti()
	{
		$this->render('deti');
	}
}
