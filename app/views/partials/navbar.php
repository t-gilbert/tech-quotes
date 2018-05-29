<nav class="navbar navbar-expand-md bg-success"><div class="container">
  <button class="navbar-toggler navbar-toggler-right burger-menu" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar"></span>
       <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
				</button>

  <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
   <div class="collapse navbar-collapse" id="navbar-primary">
      <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/posts">Dashbord</a>
            </li>

        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-single-02" aria-hidden="true"></i> Welcome <?php echo $_SESSION['user_name']; ?>
          </a>
          <ul class="dropdown-menu dropdown-info" aria-labelledby="dropdownMenuButton">
          <div class="dropdown-divider"></div>
              <div class="dropdown-divider">
                  </div>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
              </li>
                </ul>
                  </div>
        <?php else : ?>

          <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
                </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
              </li>

              <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Sign Up</a>
                </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Sign In</a>
              </li>
                <?php endif; ?>
                  </ul>
                </div>
              </div>
        </nav>
