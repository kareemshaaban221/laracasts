

<!-- content -->
<table border="1" class="table table-dark center m-auto w-75">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Vip</th>
    </tr>

    <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->fname ?></td>
            <td><?= $user->lname ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->vip ? 'Yes' : 'No' ?></td>
        </tr>
    <?php endforeach; ?>
</table>