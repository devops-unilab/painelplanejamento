
<?php
            
/**
 * Classe feita para manipulação do objeto Setor
 * feita automaticamente com programa gerador de software inventado por
 * @author Jefferson Uchôa Ponte <j.pontee@gmail.com>
 */



class Setor {
	private $id;
	private $nome;
    public function __construct(){

    }
	public function setId($id) {
		$this->id = $id;
	}
		    
	public function getId() {
		return $this->id;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
		    
	public function getNome() {
		return $this->nome;
	}
	public function __toString(){
	    return $this->id.' - '.$this->nome;
	}
                

}
?>