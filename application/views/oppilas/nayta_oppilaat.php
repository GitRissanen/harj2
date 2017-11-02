<h1>Opiskelijat</h1>
<h1>Data tietokannasta:</h1>
<?php
foreach ($oppilaat as $data) {
  echo $data["etunimi"].' , '.$data["sukunimi"].'<br>';
}
 ?>
