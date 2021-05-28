<?php require 'views/partials/header.view.php' ?>

<div class="main">

<h1>Work Experience</h1>
<h2>This is an overview of my employment past and present</h2>

  <?php foreach ($vars['job'] as $jobs) : ?>

    <div class="row mb-3">

      <div class="col-2">
          <div><?= date("m/Y", strtotime($jobs['start_date'])) ?>
              <?php if ($jobs['end_date']){
                  echo ' – ', date("m/Y", strtotime($jobs['end_date']));
                  } 
              ?>
              <?php if (!$jobs['end_date'] && $jobs['id'] == 1){
                  echo ' – present';
                  }
              ?>
          </div>
      </div>

      <div class="col-10">
        <div class="mb-1"><?= $jobs['company_name'] . ', ' . $jobs['location'] . ', ' . $jobs['function_name'], ': ' ?></div>
        <div><?= $jobs['description'] ?></div>
      </div>

</div>

<?php endforeach ?>


    
</div>

<?php require 'views/partials/footer.view.php' ?>