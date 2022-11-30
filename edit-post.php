<?php $pageName = 'Edit Post' ?>
<?php $headerIcon = '<svg class="icon icon-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg>' ?>
<?php include "includes/header.inc.php" ?>
<?php

if (isset($_GET['return'])) {
    $return = $_GET['return'];
    if ($return === "success") {
        $value = "banner-success";
    } else {
        $value = "banner-danger";
    }
    echo '<div class="banner '.$value.'">Posted Successfully</div>';
}

?>

<div class="mb-4"></div>
<form action="includes/create-post.inc.php" method="POST">
    <div class="row">
        <div class="col-xl-8">
            <div class="card shadow mb-4">
                <header class="card-header">
                    <p class="card-heading">Post Title</p>
                </header>
                <section class="card-content">
                    <input type="text" name="title" class="input input-stretch post-input" placeholder="Enter your post title..." required>
                </section>
            </div>
            <div class="card shadow mb-4">
                <header class="card-header">
                    <p class="card-heading">Post Preview</p>
                </header>
                <section class="card-content">
                    <textarea class="input input-stretch post-input" name="post-preview" id="post-preview" cols="30" rows="6" placeholder="Enter your post preview text here..." required></textarea>
                </section>
            </div>
            <div class="card shadow mb-4">
                <header class="card-header">
                    <p class="card-heading">Post Content</p>
                </header>
                <section class="card-content">
                <textarea class="input input-stretch post-input" name="post-content" id="post-content" cols="30" rows="12" placeholder="Enter your post content here..." required></textarea>
                </section>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card shadow mb-4">
                <header class="card-header">
                    <p class="card-heading">Publish</p>
                </header>
                <section class="card-content">
                    <button class="btn btn-transparent-primary btn-stretch mb-3" type="button">Save to Draft</button>
                    <button class="btn btn-primary btn-stretch" type="submit" name="submit">Save Changes</button>
                </section>
            </div>
        </div>
    </div>
</form>


<?php include "includes/footer.inc.php" ?>