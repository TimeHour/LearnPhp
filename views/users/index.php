<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <table class="table is-striped">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach ($user as $user) : ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->email ?></td>
                    <td>
                        <div class="buttons has-addons">
                            <a class="button is-info" href="/admin/users/view?id=<?=$user->id?>">View</a>
                            <a class="button is-danger" href="/admin/users/delete?id=<?=$user->id?>">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>




</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>