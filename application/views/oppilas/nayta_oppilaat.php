<h1>Opiskelijat</h1>
<table class="table table-striped table-bordered">
  <tr>
    <th>Etunimi</th><th>Sukunimi</th><th>Syntymavuosi</th><th>Poista</th>
  </tr>
  <?php
  foreach ($oppilaat as $data) {
    echo '<tr><td>'.$data["etunimi"].'</td><td>'.$data["sukunimi"].'</td><td>'.$data["syntymavuosi"].'</td><td><button class="btn btn-danger"><a href="'.site_url('oppilas/poista_oppilas/').$data["idOpiskelija"].'">Click</a></button></td></tr>';
  }
   ?>

</table>
