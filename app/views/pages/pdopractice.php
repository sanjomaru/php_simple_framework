<?php require_once APPROOT.'/views/inc/header.php'; ?>

<h1>PDO PRACTICE</h1>
<br>
<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'psf';

//Create DSN connection
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

//Create PDO instance
$pdo = new PDO($dsn, $user, $password);

//Select
$sql = $pdo->prepare('SELECT * FROM users');
$sql->execute();
//FETCH OPTIONS
// PDO::FETCH_OBJ
// PDO::FETCH_ASSOC
$rows = $sql->fetchAll();

//Insert - Using named paramenters
$sname = 'JOSAN';
$email = 'josan@gmail.com';
$saddress = 'phs';
$birthday = '1990-05-15';
$sex = 'Male';
$age = '12';
$sql = $pdo->prepare("INSERT INTO users (name, email, address, birthday, sex, age) VALUES (:sname, :email, :saddress, :birthday, :sex, :age)");
$sql->execute(['sname' => $sname, 'email' => $email, 'saddress' => $saddress, 'birthday' => $birthday, 'sex' => $sex, 'age' => $age]);
echo 'POST INSERTED';

?>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Birthday</th>
            <th>Sex</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rows as $row): ?>
        <tr>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['address']; ?></td>
            <td><?php  echo $row['birthday']; ?></td>
            <td><?php  echo $row['sex']; ?></td>
            <td><?php  echo $row['age']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>



<?php require_once APPROOT.'/views/inc/footer.php'; ?>