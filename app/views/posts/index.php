<?php require APPROOT . '/views/partials/header.php'; ?>
<br>
<?php flash('post_message'); ?>
<div class="container">
    <div class="row">
      <div class="col">
        <h2 class="text-center mb-4">Recent Posts</h2>
        <div class="mb-4 text-center">
        <a class="btn btn-dark" href="<?php echo URLROOT; ?>/posts/add/"><i class="fa fa-pencil" aria-hidden="true"></i> Add A Post</a>
          </div>

  <?php foreach($data['posts'] as $post) : ?>
    <div class="card card-body">
      <h4 class="card-title"><?php echo $post->title; ?></h4>
      <div class="bg-light author">
        Written by <?php echo $post->name; ?> on <?php echo $post->created_at; ?>
      </div>
      <p class="card-text mt-3 mb-3"><?php echo substr ("$post->body;
",0, 999)  ?> ...</p>
      <a class="btn btn-dark" href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>">Read More</a>
    </div>
  <?php endforeach; ?>
</div>
</div>
</div>

<?php require APPROOT . '/views/partials/footer.php'; ?>
