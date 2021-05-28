<?php require 'views/partials/header.view.php' ?>

<div class="main">

<h1>About</h1>
<h2>Allow me to introduce myself...</h2>

  <div>Name: <?= $vars['bio']['first_name'] . ' ' . $vars['bio']['last_name'] ?></div>
  <div>Date of birth: <?= date("d/m/Y", strtotime($vars['bio']['dob'])) ?></div>
  <div>Nationality: <?= $vars['bio']['nationality'] ?></div>
  <div>Address: <?= $vars['bio']['address']?></div>
  <div>Email: <?= $vars['bio']['email']?></div>
  <img src="<?= $vars['bio']['picture']?>" alt= "profile picture">
  

    
</div>

<?php require 'views/partials/footer.view.php' ?>