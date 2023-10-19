<?php
class cuentabancaria
{
    private $saldo;private $numerodecuenta;

    public function __construct($saldo, $numerodecuenta)
    {
        $this->saldo = $saldo;
        $this->numerodecuenta = $numerodecuenta;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getNumerodecuenta()
    {
        return $this->numerodecuenta;
    }

    public function setSaldo()
    {
        $this->saldo;
    }

    public function setNumerodecuenta()
    {
        $this->numerodecuenta;
    }

    // ----------------------------------------------------------------
// mettodo para depositar dinero
public function DepositarDinero($monto){
 return $this->saldo+=$monto;
}
public function RetirarDinero($monto){
 return $this->saldo-=$monto;
}
// 4.	Utilizar setters y getters para acceder a las propiedades "saldo" y "numeroCuenta" de forma segura.

}
$cuenta1= new  cuentabancaria(100,1234);

echo "El saldo de la cuenta bancaria Nº". $cuenta1->getNumerodecuenta() ." es  de $" .$cuenta1->getSaldo()."<br/><br/>";
$monto=1000;
echo "el dinero depositado ".$monto."<br/><br/>";
$cuenta1->DepositarDinero($monto);

echo "El saldo de la cuenta bancaria Nº". $cuenta1->getNumerodecuenta() ." es  de $" .$cuenta1->getSaldo()."<br/><br/>";
$monto1=10;
echo "el dinero retirado ".$monto1."<br/><br/>";
$cuenta1->RetirarDinero(50);
echo "El saldo de la cuenta bancaria Nº". $cuenta1->getNumerodecuenta() ." es  de $" .$cuenta1->getSaldo()."<br/><br/>";


?>