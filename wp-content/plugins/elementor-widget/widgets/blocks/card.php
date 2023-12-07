<?php
$card_title = $settings['card_title'];
$card_description = $settings['card_description'];
$card_image = $settings['card_image'];
?>

<div class="card">
    <?php
    if ($card_image['url']) {
        ?>
        <img src="<?= $card_image['url']; ?>" class="card-img-top" alt="...">
        <?php
    }
    ?>

    <div class="card-body">
        <h5 class="card-title"><?= $card_title;  ?></h5>
        <p class="card-text"><?= $card_description;  ?></p>
    </div>
</div>
