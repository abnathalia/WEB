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
		echo $this->nome." Cpf ".$this->cpf;
	}
	
	public function getConta () {
		echo " Saldo: ".$this->conta->getSaldo();	
	}
	
	public function sacar($quantia) {
		$this->conta->sacar($quantia);
	}
	
	public function depositar($quantia) {
		$this->conta->depositar($quantia);
	}
}
?>
