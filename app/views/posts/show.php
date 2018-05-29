<?php require APPROOT . '/views/partials/header.php'; ?>
<div class="container mt-5">
      <div class="row">
        <div class="col">
  <a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i>Back</a>
  <br>
  <div class="card card-body mt-5">
  <h4 class="mb-3"><?php echo $data['post']->title; ?></h4>
  <div class="bg-secondary text-white author">
    Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
  </div>
  <p class="card-text mt-3"><?php echo $data['post']->body; ?></p>
  <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
  </div>
    <hr>
    <a class="btn btn-dark" href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>">Edit</a>

    <form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
      <input type="submit" class="btn btn-danger" value="Delete">
    </form>
  <?php endif; ?>

  </div>
</div>
</div>
<?php require APPROOT . '/views/partials/footer.php'; ?>
