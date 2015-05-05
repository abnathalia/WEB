<?php
abstract class Conta {
	private $agencia;
	private $conta;
	protected $saldo;
	
	public function __construct ($agencia, $conta, $saldo) {
		$this->agencia = $agencia;
		$this->conta = $conta;
		$this->saldo = $saldo; 
	}
	public function depositar($quantia) {
		$this->saldo += $quantia;
	
	}
	public function sacar ($quantia) {
		if ($this->saldo >= quantia){
			$this->saldo -= quantia;		
		}
		else {
			echo "Saque maior que o saldo!";		
		}
	}
	public function getSaldo () {
		return $this->saldo;	
	}
}
?>
