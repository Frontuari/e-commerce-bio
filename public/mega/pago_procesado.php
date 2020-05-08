<?php
    include_once './Clases/Login.php';
    $control = new Login();
    echo $control->loginHTTPS('https://paytest.megasoft.com.ve:8443/payment/action/paymentgatewayuniveral-querystatus?control=1588963980911134684','biomer01','Biopg02*');
      
?>
