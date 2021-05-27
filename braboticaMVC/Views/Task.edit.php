<?php require_once ( 'partials/header.php' ); ?>

<h1><?php echo $title; ?></h1>

<form method="post" action="index.php?controller=Task&action=save">
  
  <?php if ( isset($id) ): ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
  <?php endif; ?>
  
  <div class="form-group">
    <label for="person">Persoon</label>
    <input type="text" name="person" id="person" class="form-control" value="<?php echo isset($person) ? $person : ""; ?>" >
  </div>

  <div class="form-group">
    <label for="title">Taak</label>
    <input type="text" name="title" class="form-control" id="title" value="<?php echo isset($taskTitle) ? $taskTitle : ""; ?>">
  </div>

  <div class="form-group">
    <label for="description">Taak beschrijving</label>
    <input type="text" name="description" class="form-control" id="description" value="<?php echo isset($description) ? $description : ""; ?>">
  </div>
  
  <button type="submit" name="submit_button" class="btn btn-primary">Submit</button>
</form>

<?php require_once ( 'partials/footer.php' ); ?>