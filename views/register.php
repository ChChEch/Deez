<?php include('partials/header.php'); ?>
    <form class="register" action="/register" method="POST">






        <div class="field">
            <label class="label">First Name</label>
            <div class="control">
                <input class="input" type="text" name="fname" required>
            </div>
        </div>
        <div class="field">
            <label class="label">First Name</label>
            <div class="control">
                <input class="input" type="text" name="lname" required>
            </div>
        </div>
        <div class="field">
            <label class="label">First Name</label>
            <div class="control">
                <input class="input" type="email" name="email" required>
            </div>
        </div>
        <div class="field">
            <label class="label">First Name</label>
            <div class="control">
                <input class="input" type="password" name="password" required>
            </div>
        </div>
        <div class="field">
            <label class="label">First Name</label>
            <div class="control">
                <input class="input" type="password" name="confirm_password" required>
            </div>
        </div>
        <input class="button is-primary" type="submit" value="Register">


    </form>
<?php include('partials/footer.php'); ?>