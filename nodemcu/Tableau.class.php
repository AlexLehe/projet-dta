<?php
class Tableau {

	private $_fichiertab;


	public function __construct($nom){
		$this->_fichiertab=$nom;
	}

	public function tab ($nom,$value){
		$lignes[]=array($value);
		$fichier_csv = fopen($nom, 'a+');
		foreach($lignes as $ligne){
			// chaque ligne en cours de lecture est insérée dans le fichier
			// les valeurs présentes dans chaque ligne seront séparées par $delimiteur
			fputcsv($fichier_csv, $ligne, ',');
		}
		fclose($fichier_csv);
	}
}