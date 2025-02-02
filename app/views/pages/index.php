<?php require_once APPROOT.'/views/inc/header.php'; ?>

<h1>Homepage</h1>

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
    <?php foreach($data['posts'] as $row): ?>
        <tr>
            <td><?php  echo $row->name; ?></td>
            <td><?php  echo $row->email; ?></td>
            <td><?php  echo $row->address; ?></td>
            <td><?php  echo $row->birthday; ?></td>
            <td><?php  echo $row->sex; ?></td>
            <td><?php  echo $row->age; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>