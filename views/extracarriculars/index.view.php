<?php require 'views/partials/header.view.php' ?>

<div class="main">

<h1>Extracarricular activities</h1>
<h2>Always doing a little bit extra</h2>

  <?php foreach ($vars['extra'] as $extras) : ?>

    <div class="row mb-3">

      <div class="col-2">
          <div><?= date("m/Y", strtotime($extras['start_date'])) ?>
              <?php if ($extras['end_date']){
                  echo ' – ', date("m/Y", strtotime($extras['end_date']));
                  } 
              ?>
              <?php if (!$extras['end_date'] && $extras['id'] == 1){
                  echo ' – present';
                  }
              ?>
          </div>
      </div>

      <div class="col-10">
        <div class="mb-1"><?= $extras['organization_name'] . ', ' . $extras['location'] . ', ' . $extras['activity_name'], ': ' ?></div>
        <div><?= $extras['description'] ?></div>
      </div>

</div>

<?php endforeach ?>


    
</div>

<?php require 'views/partials/footer.view.php' ?>