<?php require APPROOT . '/views/partials/header.php'; ?>
<div class="page-header" style="background-image: url('../img/photo.png');">
  <div class="filter">
  </div>
    <div class="container">
      <div class="motto text-center">
        <h1><?php echo $data['title']; ?></h1>
        <h3 class="mb-4"><?php echo $data['intro']; ?>
</h3>

        <a href="<?php echo URLROOT; ?>/users/register">
        <button type="button" class="btn btn-success btn-round"><?php echo $data['signup']; ?></button>
      </a>

        </div>
      </div>
      </div>
<?php require APPROOT . '/views/partials/footer.php'; ?>
