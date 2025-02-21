<?php require_once APPROOT.'/views/inc/header.php'; ?>

<?php
$title = $data['title'];
$description = $data['description'];
?>
<div class="container">
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container text-center">
        <h1 class='display-5 fw-bold'><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
        <p>Please Fill Up this form to register with us</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
            </div>
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
            <div class="form-group">
                <label for="confirm_password">Confirm Password: </label>
                <input type="text" name="confirm_password" id="" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
            </div>

            <div class="row">
                <div class="col">
                    <input type="submit" value="Register" class='btn btn-success btn-block'>
                </div>
                <div class="col">
                    <a href="<?php echo URLROOT.'/users/login'; ?>" class='btn btn-light btn-block'>Have an account? Login</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>