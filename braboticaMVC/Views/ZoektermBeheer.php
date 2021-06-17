<?php require_once ( 'partials/header.php' ); ?>

<!-- Header -->
<div class="headerProducten">
    <div class="transparentLayer">
        <h1><?php echo $title ?></h1>
    </div>
</div>

<table>
    <?php foreach($zoektermen as $zoekterm) : ?>
    <tr>
        <td><?php echo $zoekterm->get('id') ?></td>
        <td><?php echo $zoekterm->get('zoekterm') ?></td>
        <td><?php echo $zoekterm->get('zoekdatum') ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<?php require_once ( 'partials/footer.php' ); ?>