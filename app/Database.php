<?php

/**
 * Class Database
 */
include_once("MySQLDataSource.php");
class DataBase
{
	private $datasource;
	private $db;
	public function __construct($datasource)
	{
		$this->datasource = $datasource;
	}
	//Connexion Function
	public function Open()
	{
		try {
			$this->db = new PDO(
				"mysql:host=" . $this->datasource->__getServername() . ";dbname=" . $this->datasource->__getDbname() . ";charset=utf8",
				"" . $this->datasource->__getUser() . "",
				"" . $this->datasource->__getPassword() . "",
				[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
			);
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
	}
	//getter for the attribute db
	public function getDb()
	{
		return $this->db;
	}
	public function execc($Query)
	{
		$Statement = $this->db->prepare($Query);
		$Statement->execute();
		return $Statement->fetchAll();
	}
	public function select($Query)
	{
		$Statement = $this->db->prepare($Query);
		$Statement->execute();
		return $Statement->fetchAll();
	}
}
