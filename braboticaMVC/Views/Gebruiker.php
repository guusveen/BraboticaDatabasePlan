<?php require_once ( 'partials/header.php' ); 

if (isset($_SESSION['rol']) == 'Beheer')              
             { 
?>
<div class="headerbeheer">
    <div class="transparentLayer">
        <h1><?php echo $title; ?></h1>
        <p></p>
    </div>
</div>
<div class="Submenu">
    <button style="margin-right:20px;" onclick="window.location.href='index.php?controller=Gebruiker&action=add'">Gebruiker toevoegen</button>
    <button style="margin-right:20px;" onclick="window.location.href='index.php?controller=Producten&action=productBeheerPagina'">Producten beheer</button>
    <button style="margin-right:20px;" onclick="window.location.href='index.php?controller=ZoektermBeheer'">Zoektermen beheer</button>
</div>

<div class="BeheerContainer">
    <table border="0">
        <thead>
            <tr>
                <th class="" width="30" align="right">ID</th>
                <th width="200" align="right">Voornaam</th>
                <th width="200" align="right">Achternaam</th>
                <th width="200" align="right">Adres</th>
                <th width="200" align="right">Huisnummer</th>
                <th width="200" align="right">Postcode</th>
                <th width="200" align="right">Woonplaats</th>
                <th width="200" align="right">Land</th>
                <th width="200" align="right">Telefoonnummer</th>
                <th width="200" align="right">Email</th>
                <th width="100" align="right">Rol</th>
                <th width="200" align="right">Wachtwoord</th>
                <th width="120" align="right">VoorkeurTaal</th>
                <th width="120"></th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($gebruiker as $task) : ?>
            <tr>
                <td align="right"><?php echo $task->get('GebruikerId'); ?></td>
                <td align="right"><?php echo $task->get('Voornaam'); ?></td>
                <td align="right"><?php echo $task->get('Achternaam'); ?></td>
                <td align="right"><?php echo $task->get('Adres'); ?></td>
                <td align="right"><?php echo $task->get('Huisnummer'); ?></td>
                <td align="right"><?php echo $task->get('Woonplaats'); ?></td>
                <td align="right"><?php echo $task->get('Postcode'); ?></td>
                <td align="right"><?php echo $task->get('Land'); ?></td>
                <td align="right"><?php echo $task->get('Telefoonnummer'); ?></td>
                <td align="right"><?php echo $task->get('Email'); ?></td>
                <td align="right"><?php echo $task->get('Rol'); ?></td>
                <td align="right"><?php echo $task->get('Wachtwoord'); ?></td>
                <td align="right"><?php echo $task->get('VoorkeurTaal'); ?></td>
                <td></td>
                <td><a href="index.php?controller=Gebruiker&action=edit&GebruikerId=<?php echo $task->get('GebruikerId'); ?>">
                    <button>Bewerken</button>
                </a></td>
                <td><a href="index.php?controller=Gebruiker&action=delete&GebruikerId=<?php echo $task->get('GebruikerId'); ?>">
                    <button>Verwijderen</button>
                </a></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
<?php

} else {

    header("location:index.php"); 
}
?>

<?php require_once ( 'partials/footer.php' ); ?>