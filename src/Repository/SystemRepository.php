<?php

namespace App\Repository;

use App\Service\Database;

class SystemRepository
{
	private $database;
	
	public function __construct()
	{
		$this->database = Database::getInstance();
	}
	
	public function listAllSystems()
	{
		$query = $this->database->query('select * from systems');
		$list = $query->fetchAll();
		return $list;
	}
}