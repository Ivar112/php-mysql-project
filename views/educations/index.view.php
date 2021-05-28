<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <h1>Education</h1>

    <?php foreach ($vars['edu'] as $education) : ?>

        <div class="row">
            <div class="col-4">
                <div><?= date("Y", strtotime($education['start_date'])) . ' – ' . date("Y", strtotime($education['end_date'])) ?></div>
            </div>
            <div class="col-8">
                <div><?= $education['name'] . ', ' . $education['school_name'] ?></div>
            </div>

        </div>

    <?php endforeach ?>
    
</div>

<?php require 'views/partials/footer.view.php' ?>