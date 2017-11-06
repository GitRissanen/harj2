<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CodeIgniter Esimerkki</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <ul>
      <li><a href=<?php echo site_url('');?>>Etusivu</a></li>
      <li><a href=<?php echo site_url('Test/kolmas');?>>Test/kolmas</a></li>
      <li><a href=<?php echo site_url('Test/neljas');?>>Test/neljas</a></li>
      <li><a href=<?php echo site_url('Oppilas/nayta_oppilaat');?>>NäytäOppilaat</a></li>
      <?php
      if(isset($_SESSION['kirjautunut']) && $_SESSION['kirjautunut'] == true){
        echo '<li><a href="'.site_url('Login/kirjaudu_ulos').'">Kirjaudu ulos</a></li>';
      }
      else{
        echo '<li><a href="'.site_url('Login/avaa_lomake').'">Kirjaudu</a></li>';
      }
      ?>
    </ul>
    <div class="content">
