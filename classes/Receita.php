<?php
class Receita{

    private $nome;
    private $qtdPorcaoPessoa;
    private $codCategoria;
    private $tempoPreparo;
    private $codTipoPreparo;
	private $txtDescricaoReceita;
	private $idUsuarioCriador;
	private $nomeUsuarioCriador;


    public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getQtdPorcaoPessoa(){
		return $this->qtdPorcaoPessoa;
	}

	public function setQtdPorcaoPessoa($qtdPorcaoPessoa){
		$this->qtdPorcaoPessoa = $qtdPorcaoPessoa;
	}

	public function getCodCategoria(){
		return $this->codCategoria;
	}

	public function setCodCategoria($codCategoria){
		$this->codCategoria = $codCategoria;
	}

	public function getTempoPreparo(){
		return $this->tempoPreparo;
	}

	public function setTempoPreparo($tempoPreparo){
		$this->tempoPreparo = $tempoPreparo;
	}

	public function getTxtDescricaoReceita(){
		return $this->txtDescricaoReceita;
	}

	public function setTxtDescricaoReceita($txtDescricaoReceita){
		$this->txtDescricaoReceita = $txtDescricaoReceita;
    }
    public function getCodTipoPreparo(){
		return $this->codTipoPreparo;
	}

	public function setCodTipoPreparo($codTipoPreparo){
		$this->codTipoPreparo = $codTipoPreparo;
	}

	public function getIdUsuarioCriador(){
		return $this->idUsuarioCriador;
	}

	public function setIdUsuarioCriador($idUsuarioCriador){
		$this->idUsuarioCriador = $idUsuarioCriador;
	}

	
	public function getNomeUsuarioCriador(){
		return $this->nomeUsuarioCriador;
	}

	public function setNomeUsuarioCriador($nomeUsuarioCriador){
		$this->nomeUsuarioCriador = $nomeUsuarioCriador;
	}




    function __construct($nome,$qtdPorcaoPessoa,$codCategoria,$tempoPreparo,$codTipoPreparo,$txtDescricaoReceita,$nomeUsuarioCriador,$idUsuarioCriador) {
        $this->nome = $nome;
        $this->qtdPorcaoPessoa = $qtdPorcaoPessoa;
        $this->codCategoria= $codCategoria;
        $this->tempoPreparo= $tempoPreparo;
        $this->codTipoPreparo=$codTipoPreparo;
        $this->txtDescricaoReceita= $txtDescricaoReceita;
    }
}
?>