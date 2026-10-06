<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <a href="/admin/posts/create" class="btn btn-primary">Create New Post</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (($posts ?? []) as $post): ?>
                <tr>
                    <th scope="row"><?= $post->id ?></th>
                    <td><?= $post->title ?></td>
                    <td><?= $post->body ?></td>
                    <td><?= $post->author ?></td>
                    <td><?= $post->category ?></td>
                    <td><?= $post->created_at ?></td>
                    <td><?= $post->updated_at ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-info">View</a>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
        </tfoot>
    </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>