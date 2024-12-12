<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Client Management</title>
</head>
<body>
<div class="container">
    <h1 class="mt-4">Client List</h1>
    <a href="/dashboard" class="btn btn-primary mb-3">Dashboard</a>
    <a href="/clients/create" class="btn btn-primary mb-3">Add Client</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Segment</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>

        <?php if (!empty($clients) && is_array($clients)): ?>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?php echo $client['id']; ?></td>
                    <td><?php echo $client['name']; ?></td>
                    <td><?php echo $client['email']; ?></td>
                    <td><?php echo $client['phone']; ?></td>
                    <td><?php echo $client['segment']; ?></td>
                    <td>
                        <a href="/clients/edit/<?php echo $client['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/clients/delete/<?php echo $client['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">No clients found.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>