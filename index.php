<html>
<head>
<title>Lab 1</title>
</head>
<body>
<h1>Create a class</h1>
<?php 
    require('Student.php');
    require('Staff.php');
    require('Admin.php');


    $user1 = new Student;
    $user1->set([
        'first' => 'Herman',
        'last' => 'Munster',
        'major' => 'Social Services',
        'email' => 'frankenstein@example.edu',
        'id' => '123456'
    ]);

    $user2 = new Staff;
    $user2->set([
        'first' => 'Fred',
        'last' => 'Flintstone',
        'manager' => 'Mr. Slate',
        'email' => 'fredf@example.edu',
        'id' => '653321'
    ]);

    $user3 = new Admin;
    $user3->set([
        'first' => 'Evil',
        'last' => 'Operator',
        'department' => 'Information Prevention',
        'email' => 'secure@example.edu',
        'id' => '666666'
    ]);
?>

<h2> <?= $user1->getFullName() ?></h2>
<?php foreach($user1->getFullInfo() as $key => $value): ?>
    <?= $key ?>: <?= $value ?> <br/>
<?php endforeach; ?>
<hr/> 

<h2> <?= $user2->getFullName() ?></h2>
<?php foreach($user2->getFullInfo() as $key => $value): ?>
    <?= $key ?>: <?= $value ?> <br/>
<?php endforeach; ?>
<hr/> 

<h2> <?= $user3->getFullName() ?></h2>
<?php foreach($user3->getFullInfo() as $key => $value): ?>
    <?= $key ?>: <?= $value ?> <br/>
<?php endforeach; ?>
<hr/> 
<h2>Summary Info</h2>
Majors: <?= $user1->getMajor() ?><br/>
Managers: <?= $user2->getManager() ?><br/>
Departments: <?= $user3->getDepartment() ?><br/>
</body>
</html>
