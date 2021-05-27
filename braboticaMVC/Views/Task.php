<?php require_once ( 'partials/header.php' ); ?>

<h1><?php echo $title; ?></h1>

<table>
    <thead>
        <tr>
            <th>Persoon</th>
            <th>Taak</th>
            <th>Taak beschrijving</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach($tasks as $task) : ?>
        <tr>
            <td><?php echo $task->get('person'); ?></td>
            <td><?php echo $task->get('title'); ?></td>
            <td><?php echo $task->get('description'); ?></td>
            <td><a href="index.php?controller=Task&action=edit&id=<?php echo $task->get('id'); ?>">Taak bewerken</a></td>
            <td><a href="index.php?controller=Task&action=delete&id=<?php echo $task->get('id'); ?>">Taak verwijderen</a></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
    </table>

<nav>
    <a href="index.php?controller=Task&action=add">Taak toevoegen</a>
</nav>
<?php require_once ( 'partials/footer.php' ); ?>