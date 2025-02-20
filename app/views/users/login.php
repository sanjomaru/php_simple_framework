<?php require_once APPROOT.'/views/inc/header.php'; ?>

<?php
$title = $data['title'];
?>

<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container text-center">
        <h1 class='display-5 fw-bold'><?php echo $title; ?></h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" name="email" id="" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="text" name="password" id="" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>

            <div class="row">
                <div class="col">
                    <input type="submit" value="Login" class='btn btn-success btn-block'>
                </div>
                <div class="col">
                    <a href="<?php echo URLROOT.'/users/register'; ?>" class='btn btn-light btn-block'>No account? Login</a>
                </div>
            </div>
        </form>
    </div>
</div>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>