<?php

class Langues {
	private $_langue = 'cn';
	
	private $_dirLangue = 'texts';
	
	private $_simpleXML = null;

	

	public function __construct($dirLangue, $fichier, $langue = false) {
		if(is_dir($dirLangue)) {
			$this->_dirLangue = $dirLangue;
		}
		else {
			$this->_dirLangue = 'langues';
		}
		
		if($langue) {
			$this->_langue = strtolower($langue);
		}
		else {
			if($lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2))) {
				$this->_langue = $lang;
			}
			else {
				$this->_langue = 'cn';
			}
		}
		
		if(file_exists($this->_dirLangue.'/'.$this->_langue.'/'.$fichier.'.xml')) {
			// Chargement du fichier langue
			$this->loadXmlFile($fichier);
		}
		else {
			die('Fichier XML ('.$this->_dirLangue.'/'.$this->_langue.'/'.$fichier.'.xml) file does not exit.');
		}
	}

	

	private function loadXmlFile($fichier) {
		$this->_simpleXML = simplexml_load_file($this->_dirLangue.'/'.$this->_langue.'/'.$fichier.'.xml');
	}



	public function show_text($texte) {
		$resultat = $this->_simpleXML->xpath($texte);
		
		foreach($resultat as $noeud) {
			return $noeud;
		}
	}

	public function getLang() {
		return $this->_langue;
	}
}

?>
