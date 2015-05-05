<?php
class ContaPoupanca extends Conta {
	
	public function __construct ($agencia, $conta, $saldo) {
		parent::__construct($agencia, $conta, $saldo)
	}
	
	public function sacar($quantia) {
		parent::sacar($quantia);	
	}
}
?>
