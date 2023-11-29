<?php require APPROOT . '/views/inc/header.php'; ?>
<main role="main" class="container">
    <div class="row">
        <?php require APPROOT . '/views/inc/aside.php'; ?>

        <div class="col-md-8 pages-main">
            <h1><?php echo $data['title']; ?></h1>
            <p><?php echo $data['description']; ?></p>
        </div>
    </div>

</main>


<?php require APPROOT . '/views/inc/footer.php'; ?>
