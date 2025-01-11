<?php require VIEWS . '/incs/header.php' ?>
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Create new post</h1>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="title" class="form-label">Post title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Post title">
                            <?php if (isset($errors['title'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $errors['title'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Excerpt</label>
                            <textarea name="excerpt" type="text" class="form-control" id="excerpt" placeholder="Excerpt" rows="2"></textarea>

                            <?php if (isset($errors['excerpt'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $errors['excerpt'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" type="text" class="form-control" id="content" placeholder="Content" rows="5"></textarea>

                            <?php if (isset($errors['content'])): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $errors['content'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                           <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>