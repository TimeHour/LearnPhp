<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">

    <div class="buttons has-addons">
        <a class="button is-info" href="/admin/users">Back</a>
    </div>
    <table class="table is-striped is-fullwidth">
        <tbody>
            <tr>
                <th>Id</th>
                <td><?= $user->id ?></td>
            </tr>

            <tr>
                <th>Title</th>
                <td><?= $user->email ?></td>
            </tr>

            <tr>
                <th>Content</th>
                <td><?= $user->password ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>