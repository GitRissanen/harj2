<h1>Opiskelijat</h1>
<table border ="1">
  <tr>
    <th>Etunimi</th><th>Sukunimi</th><th>Syntymavuosi</th><th>Poista</th>
  </tr>
  <?php
  foreach ($oppilaat as $data) {
    echo '<tr><td>'.$data["etunimi"].'</td><td>'.$data["sukunimi"].'</td><td>'.$data["syntymavuosi"].'</td><td><a href="'.site_url('oppilas/poista_oppilas/').$data["idOpiskelija"].'">Click</a></td></tr>';
  }
   ?>

</table>
