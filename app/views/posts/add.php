<?php require APPROOT . '/views/partials/header.php'; ?>
<div class="container mt-5">
      <div class="row">
        <div class="col">
<a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="mt-5">
        <h2>Add Post</h2>
        <p class="mt-4 mb-4">Create a post with this form</p>
        <form action="<?php echo URLROOT; ?>/posts/add" method="post">
          <div class="form-group">
            <label>Title:<sup>*</sup></label>
              <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>" placeholder="Add a title...">
              <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Body:<sup>*</sup></label>
              <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" placeholder="Add some text..."><?php echo $data['body']; ?></textarea>
              <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>
    </div>
    </div>
    </div>
<?php require APPROOT . '/views/partials/footer.php'; ?>
