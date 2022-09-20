<?php include(__DIR__ .'partials/header.php'); ?>
        <form action="/add" method="POST" enctype="multipart/form-data">
            <input class="input" type="file" name="image" required>
            <textarea class="textarea" name="body"></textarea>
            <input class="button is-primary" type="submit" value="Add">
        </form>
<?php include(__DIR__ .'partials/footer.php'); ?>
