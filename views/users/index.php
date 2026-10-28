<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <a href="/admin/users" class="btn btn-primary">Users</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (($users ?? []) as $user): ?>
                <tr>
                    <th scope="row"><?= $user->id ?></th>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->created_at ?></td>
                    <td><?= $user->updated_at ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="/admin/users/view?id=<?= $user->id ?>" class="btn btn-info">View</a>
                            <a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-warning">Edit</a>
                            <a href="/admin/users/delete?id=<?= $user->id ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
        </tfoot>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>