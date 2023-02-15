<?php

  class Buyproducs extends Visa{
    public function getPayment(){
      return $this->VisaPayment();
    }
    public function MessageShow(){
      echo "Tthis A Simple Abstracts Classes and Methods Example in PHP enjoy this Tutorial";
    }
  }

 ?>
