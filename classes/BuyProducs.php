<?php

  class Buyproducs extends Visa{
    public function getPayment(){
      return $this->VisaPayment();
    }
  }

 ?>
