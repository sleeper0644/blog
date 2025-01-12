<?php require VIEWS . '/incs/header.php' ?>
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3><?= h($post['title']) ?></h3>
                    <p><?= $post['content'] ?></p>
                </div>
            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>