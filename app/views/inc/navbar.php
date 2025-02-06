<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
      <div class="container">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 ms-auto me-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about/">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact/">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="<?php echo URLROOT; ?>/users/register/">Register</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/login/">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>