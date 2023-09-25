<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <form action="/Login" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="Email" name="email" id="email">
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">Password</label>
            <div class="control">
                <input class="input" type="password" name="password"  id="password">
            </div>
        </div>
       
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="Login">
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>