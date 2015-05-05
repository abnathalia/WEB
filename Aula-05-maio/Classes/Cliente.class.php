<?php
class Cliente {
	private $nome;
	private $cpf;
	private $conta;
	
	public function __construct ($nome, $cpf, $agencia, $conta, $saldo, $tipoConta) {
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->conta = new $tipoConta($agencia, $conta, $saldo);
	}
	
	public function getDados () {
		echo $this->nome."cpf".$this->cpf."br";	
	}
	
	public function getConta () {
		echo "Saldo: ".$this->conta->getSaldo();	
	}
}
?>
