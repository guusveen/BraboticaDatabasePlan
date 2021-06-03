<?php require_once ( 'partials/header.php' ); ?>

<div class="headerbeheer">
    <div class="transparentLayer">
        <h1><?php echo $title; ?></h1>
        <p></p>
    </div>
</div>

<div class="beheerContainer">
    <table border="0">
        <thead>
            <tr>
                <th width="120" align="right">Gebruiker ID</th>
                <th width="120" align="right">Voornaam</th>
                <th width="200" align="right">Achternaam</th>
                <th width="200" align="right">Telefoonnummer</th>
                <th width="200" align="right">Email</th>
                <th width="120" align="right">Rol</th>
                <th width="200" align="right">Wachtwoord</th>
                <th width="120" align="right">VoorkeurTaal</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($pagina as $task) : ?>
            <tr>
                <td align="right"><?php echo $task->get('GebruikerId'); ?></td>
                <td align="right"><?php echo $task->get('Voornaam'); ?></td>
                <td align="right"><?php echo $task->get('Achternaam'); ?></td>
                <td align="right"><?php echo $task->get('Telefoonnummer'); ?></td>
                <td align="right"><?php echo $task->get('Email'); ?></td>
                <td align="right"><?php echo $task->get('Rol'); ?></td>
                <td align="right"><?php echo $task->get('Wachtwoord'); ?></td>
                <td align="right"><?php echo $task->get('VoorkeurTaal'); ?></td>
                <td><a href="index.php?controller=Beheer&action=edit&GebruikerId=<?php echo $task->get('GebruikerId'); ?>">
                    <button>Gebruiker bewerken</button>
                </a></td>
                <td><a href="index.php?controller=Beheer&action=delete&GebruikerId=<?php echo $task->get('GebruikerId'); ?>">
                    <button>Gebruiker verwijderen</button>
                </a></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
<nav>
    <a href="index.php?controller=Beheer&action=add">Gebruiker toevoegen</a>
</nav>
<?php require_once ( 'partials/footer.php' ); ?>