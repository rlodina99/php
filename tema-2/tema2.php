
<h1>Data de azi este:
<?php
  echo date("d-m-Y");
?>
 </h1>

 <h1>Adresa dvs IP este:</h1>
 <pre>
<?php
  echo var_dump($_SERVER); //['REMOTE_ADDR'];
  
?>
 </pre>

<p>
    Acesta este un paragraf
</p>