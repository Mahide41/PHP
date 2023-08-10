<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>

    <style>
        table {
            border: 1px solid #ddd;
        }

        table th,
        tr,
        td {
            border: 1px solid #ddd;
        }
    </style>
</head>
<?php

$employees = [
    'CEO' => [
        'name' => 'Rakib',
        'designation' => 'CEO',
        'information'   => [
            'email' => 'rakib@corewebbd.com',
            'phone' => '01712345678'
        ]
    ],
    'Manager' => [
        'name' => 'Saima',
        'designation' => 'Manager',
        'information'   => [
            'email' => '<EMAIL>',
            'phone' => '01712345678'
        ]
    ],
    'Tester' => [
        'name' => 'Hasib',
        'designation' => 'Tester',
        'information'   => [
            'email' => '<EMAIL>',
            'phone' => '01712345678'
        ]
    ],
    'Designer' => [
        'name' => 'Mahide',
        'designation' => 'Designer',
        'information'   => [
            'email' => '<EMAIL>',
            'phone' => '01712345678'
        ]
    ],
    'Project_Manager' => [
        'name' => 'Tangila',
        'designation' => 'Project Manager',
        'information'   => [
            'email' => '<EMAIL>',
            'phone' => '01712345678'
        ]
    ],
    'software_developer' => [
        'name' => 'Boltu',
        'designation' => 'Software Developer',
        'information'   => [
            'email' => '<EMAIL>',
            'phone' => '01712345678'
        ]
    ],
    'tea_boy' => [
        'name' => 'Mofiz Miaa',
        'designation' => 'Tea Boy',
        'information'   => [
            'email' => '<EMAIL>',
            'phone' => '01712345678'
        ]
    ],
];


?>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Designation</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($employees as $employee) {

        ?>
            <tr>
                <td scope="row"><?php echo $i++; ?></td>
                <td><?php echo $employee['name']; ?></td>
                <td><?php echo $employee['designation']; ?></td>
            </tr>
        <?php } ?>
    </tbody>

    <?php
    $number = 0;
    for ($number; $number < 5; $number++) {
        echo 'I love you ' . $number . '<br/>';
    }
    ?>

</table>
<!--  -->

<body>

</body>

</html>