<?php
$data="<![CDATA[
<UT>         DUPLICADO</UT>
     B A N E S C O J-07013380-5
               COMPRA
PAYMENT GATEWAY
CHAGUARAMOS
RIF:J00408552965 AFIL:860084789 
TER:9898016 LOTE:4 REF:24
NRO.CTA:522037******2279 'M'
FECHA:08/05/2020 16:49:20 APROB:6016
SECUENCIA:11 CAJA:BIOPG01
MONTO BS.  :80.000,00

FIRMA  :__________________
C.I.   :__________________

]]>";

echo formatear($data);


function formatear($data){
    
return "<div style='width:300px; margin:0 auto;'>".nl2br($data)."</div>";

}

?>