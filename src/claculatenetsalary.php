<?php

namespace Acme;
// demonstarting an interface
interface CalculateNetSalary
{
    public function calcPayee();

    public function calcNhifDeductions();

    public function calcNssfDeductions();

    public function calcNetPay();
}
