<?php 

abstract class Beer {
	private string $id;
	private string $name;
	private string $secName;
	private int $alcDegree;
	private string $desc;
	private int $ibu;
	private string $temp;

	function __construct(string $id, string $name, string $secName, int $alcDegree, string $desc, int $ibu, string $temp) {
		$this->id = $id;
		$this->name = $name;
		$this->secName = $secName;
		$this->alcDegree = $alcDegree;
		$this->desc = $desc;
		$this->ibu = $ibu;
		$this->temp = $temp;
	}
}