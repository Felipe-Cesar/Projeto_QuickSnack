<?php


class Cargo extends DataBase {



	private $tabela = "Cargo";
	private $conn;


	public function __construct(){


		$this->conn = $this->connect();


	}

	public function consultarALLCargo(){

		return $this->conn->get($this->tabela);

	}













}