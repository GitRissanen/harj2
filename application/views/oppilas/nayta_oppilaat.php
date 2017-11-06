<h1>Opiskelijat</h1>
<a href="<?php echo site_url('Oppilas/lisays_lomake/')?>"><button type ="button" class="btn btn-primary">Lisaa opiskelija</button></a>
<table class="table table-striped table-bordered">
  <tr>
    <th>Etunimi</th><th>Sukunimi</th><th>Syntymavuosi</th><th>Poista</th>
  </tr>
  <?php
  foreach ($oppilaat as $data) {
    echo '<tr><td>'.$data["etunimi"].'</td><td>'.$data["sukunimi"].'</td><td>'.$data["syntymavuosi"].'</td><td><a href="'.site_url('oppilas/poista_oppilas/').$data["idOpiskelija"].'"><button type="button" class="btn btn-danger">Click</button></a></td></tr>';
  }
   ?>

</table>
