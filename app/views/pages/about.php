<?php require APPROOT . '/views/partials/header.php'; ?>
    <div class="container mt-5">
      <div class="motto text-center">
        <h2 class="mt-5"><?php echo $data['abtitle']; ?></h2>

        <h3 class="mb-4"><?php echo $data['subtext']; ?></h3>

        <p class="about-info mb-5"><?php echo $data['description']; ?></p>

        <a href="<?php echo URLROOT; ?>/users/register">
        <button type="button" class="btn btn-success btn-round"><?php echo $data['signup']; ?></button>
      </a>
        </div>
      </div>
<?php require APPROOT . '/views/partials/footer.php'; ?>
