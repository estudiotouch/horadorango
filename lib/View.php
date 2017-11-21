<?php
namespace HoraDoRango;

class View
{
	protected $view_dir = 'views/';

	protected $title;
	protected $view;

	public function __construct() {}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getView()
	{
		return $this->view;
	}
	
	public function setTitle($title)
	{
		$this->title = $title;
	}
	
	public function setView($view)
	{
		$this->view = $view;
	}
	
	public function printView()
	{
		echo file_get_contents($this->view_dir . $this->view . '.php');
	}
}
