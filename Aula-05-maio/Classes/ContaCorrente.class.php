<?php
class ContaCorrente extends Conta {
	
	public function __construct ($agencia, $conta, $saldo) {
		parent::__construct($agencia, $conta, $saldo)
	}
	
	public function sacar($quantia) {
		$cpmf = 0.05;
		parent::sacar($quantia + ($quantia * $cpmf));	
	}
}
?>
