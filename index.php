<html>
<head>
<title>Lab 1</title>
</head>
<body>
<h1>Create a class</h1>
<?php 
    require('User.php');

    $user1 = new User;
    $user1->set([
        'first' => 'Herman',
        'last' => 'Munster',
        'major' => 'Social Services',
        'email' => 'frankenstein@example.edu',
        'id' => '123456'
    ]);

    $user2 = new User;
    $user2->set([
        'first' => 'Fred',
        'last' => 'Flintstone',
        'major' => 'Landscaping',
        'email' => 'fredf@example.edu',
        'id' => '653321'
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

<a href="../lab2/">2 - Super Class</a>

</body>
</html>
