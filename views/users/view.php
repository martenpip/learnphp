<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <table class="table is-striped is-fullwidth">     
        <tbody>
            <tr>
                <th>ID</th>
                <td><?= $user->id ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $user->email ?></td>
            </tr>
            <tr>
                <th>View Password</th>
                <td><?=$user->password?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>
