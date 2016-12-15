<?php
class Bank {
	protected $_cptp;
	protected $_tarif;
	protected $_Infoid;
	
	
	public function __construct($_cptp; $_tarif;$_Infoid)
		this-> $_cptp = cptp
		this-> $_tarif = tarif
		this-> $_Infoid = infoid

	private function getCptp()
		return this -> cptp
	
	private function getTarif()
		return this -> tarif
	
	private function getInfoid()
		return this -> infoid

	


	
	public function __construct($file){
		$this->_cptp= $file;
	
	}	
	public function lire_(){
		$file = fopen($this->cptp,"r");
		$contenu = "$_cptp";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}
	
	public function ecrire($contenu){
		$file = fopen($this->cptp,"w");
		fputs($file,$contenu);
		fclose($file);
	}
	public function __construct($file){
		$this->_tarif= $file;
	}
	public function lire_(){
		$file = fopen($this->tarif,"r");
		$contenu = "$tarif";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}
	
	public function ecrire($contenu){
		$file = fopen($this->tarif,"w");
		fputs($file,$contenu);
		fclose($file);
	}
	public function __construct($file){
		$this->_Infoid= $file;
		
	public function lire_(){
		$file = fopen($this->infoid,"r");
		$contenu = "$_Infoid";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}
	
	public function ecrire($contenu){
		$file = fopen($this->infoid,"w");
		fputs($file,$contenu);
		fclose($file);
	}





	}
