<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Client</title>
</head>
<body>
<div class="container">
    <h1 class="mt-4">Edit Client</h1>
    <?php if (isset($validation)): ?>
        <div class="alert alert-danger">
            <?php echo $validation->listErrors(); ?>
        </div>
    <?php endif; ?>
    <form action="/clients/update/<?php echo $client['id']; ?>" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo set_value('name', $client['name']); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo set_value('email', $client['email']); ?>">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone', $client['phone']); ?>">
        </div>
        <div class="form-group">
            <label for="segment">Segment</label>
            <input type="text" name="segment" class="form-control" value="<?php echo set_value('segment', $client['segment']); ?>">
        </div>
        <a href="/clients" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
