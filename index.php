<?php
  include('Abstracts/Visa.php');
  include('classes/BuyProducs.php');


  //$visa = new Visa();
  $getPayment = new BuyProducs();
    echo   $getPayment-> getPayment();
    $getMethods = new BuyProducs();
    echo $getMethods ->MessageShow();

 ?>
