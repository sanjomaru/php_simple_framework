<?php require_once APPROOT.'/views/inc/header.php'; ?>

<?php
$title = $data['title'];
$description = $data['description'];
?>

<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container text-center">
        <h1 class='display-5 fw-bold'><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
        <p>Please Fill Up this form to register with us</p>
    </div>
</div>



<?php require_once APPROOT.'/views/inc/footer.php'; ?>