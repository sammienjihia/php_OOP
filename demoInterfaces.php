<?php

// demonstarting an interface
interface CalculateNetSalary
{
    public function calcPayee();

    public function calcNhifDeductions();

    public function calcNssfDeductions();

    public function calcNetPay();
}

class EmployeeSalary implements CalculateNetSalary{
    var $grosspay;

    var $nhif_deductable;

    var $nssfDeductable;

    function __construct($gpay, $nhifAmount, $nssfAmount){

        $this->grosspay = $gpay;
        $this->nhif_deductable = $nhifAmount;
        $this->$nssf_deductable = $nssfAmount;


    }

    function calcPayee(){
        $payee = $this->grosspay * 0.33;
        return $payee;

    }

    function calcNhifDeductions(){
        $nhifDeduction = $this->nhif_deductable;
        return $nhifDeduction;
    }

    function calcNssfDeductions(){
        $nssfDeduction = $this->nssf_deductable;
        return $nssfDeduction;
    }

    function calcNetPay(){
        $netpay = $this->grosspay - $this->calcNssfDeductions() - $this->calcPayee() - $this->calcNhifDeductions();
        echo "Net pay is ".$netpay;
    } 


}

$pay = new EmployeeSalary(200000, 1200, 2500);

$pay->calcNetPay();

?>