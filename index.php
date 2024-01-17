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
    require('ReportEntry.php');


    $user1 = new Student([
        'first' => 'Herman',
        'last' => 'Munster',
        'major' => 'Social Services',
        'email' => 'frankenstein@example.edu',
        'id' => '123456'
    ]);

    $user2 = new Staff([
        'first' => 'Fred',
        'last' => 'Flintstone',
        'manager' => 'Mr. Slate',
        'email' => 'fredf@example.edu',
        'id' => '653321'
    ]);

    $user3 = new Admin([
        'first' => 'Evil',
        'last' => 'Operator',
        'department' => 'Information Prevention',
        'email' => 'secure@example.edu',
        'id' => '666666'
    ]);

    $reportEntry = new ReportEntry($user1);
?>

<h2> <?= $user1?></h2>
<?php foreach($user1->getFullInfo() as $key => $value): ?>
    <?= $key ?>: <?= $value ?> <br/>
<?php endforeach; ?>
Professor: <?= $user1->getProfessor() ?>
<hr/> 

<h2> <?= $user2 ?></h2>
<?php foreach($user2->getFullInfo() as $key => $value): ?>
    <?= $key ?>: <?= $value ?> <br/>
<?php endforeach; ?>
<hr/> 

<h2> <?= $user3 ?></h2>
<?php foreach($user3->getFullInfo() as $key => $value): ?>
    <?= $key ?>: <?= $value ?> <br/>
<?php endforeach; ?>
Manager: <?= $user3->manager ?>
<hr/> 
<h2>Summary Info</h2>
Majors: <?= $user1->getMajor() ?><br/>
Managers: <?= $user2->getManager() ?><br/>
Departments: <?= $user3->getDepartment() ?><br/>
<hr/>
<h2>Report Entry: <?= $reportEntry->getFullName() ?></h2>
<?php foreach($reportEntry->getRecord() as $key => $value): ?>
    <?= $key ?>: <?= $value ?> <br/>
<?php endforeach; ?>
<hr/>
<h2>Traits of Student:</h2>
Trait Full Name: <?= $user1->traitFullName()  ?><br/>
Trait Last Name: <?= $user1->getMajor() ?><br/>
Student Full Name: <?= $user1->studentFullName() ?><br/>
Student Major: <?= $user1->getMajor() ?><br/>

</body>
</html>
