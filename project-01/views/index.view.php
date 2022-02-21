<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
            margin: auto;
            width: 50%;
        }
        td, th {
            padding: 10px;
        }
        tr:nth-child(2n+1){
            background-color: #acacacac;
        }
    </style>
</head>
<body>
    <table border="1">
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
</body>
</html>