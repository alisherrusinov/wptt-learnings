<?php
$dbh = new \PDO('mysql:host=localhost;dbname=alisher_wptt_db;', 'root', '');
$dbh->exec('SET NAMES UTF8');
$stm = $dbh->prepare('SELECT * FROM `users`');
$stm->execute();
$allUsers = $stm->fetchAll();
?>
<table border="1">
    <tr><td>id</td><td>Имя</td><td>Email</td></tr>
    <?php foreach ($allUsers as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
<?php
$stm = $dbh->prepare('SELECT * FROM `users` WHERE name=:name');
$stm->bindValue('name', 'Иван');
$stm->execute();
$allUsers = $stm->fetchAll();?>

<table border="1">
    <tr><td>id</td><td>Имя</td><td>Email</td></tr>
    <?php foreach ($allUsers as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
