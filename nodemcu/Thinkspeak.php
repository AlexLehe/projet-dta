<?php
class Fichier {
	private $_fichier;


	public function __construct($nom){
		$this->_fichier=$nom;
		fopen($nom, 'a+');
		fclose($nom);
	}

	public function ecrituretemp($value){
		$fp=fopen($this->_fichier, 'a+');
		fputs($fp,$value."\n");
		fclose($fp);
	}
	public function ecriturehumi($value){
		$fp=fopen($this->_fichier, 'a+');
		fputs($fp,$value."\n");
		fclose($fp);
	}
	public function lire(){

	}
	public function raz(){//remet le fichier a zéro
		file_put_contents($this->_fichier,'');
	}
}


?>
