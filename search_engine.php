<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coreweb</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="keywords" placeholder="Enter anything to search" />
        <input type="submit" value="Search" />
    </form>


    <?php
    // arrays

    // 1 = Indexed Array
    // 2 = Associative Array
    // 3 = Multidimensional Arrays

    // index array
    // $students = ["Rakib", 'Saima', 'Monika', 'Hasib', 'Mahide'];
    // $students = array("Rakib", 'Saima', 'Monika', 'Hasib', 'Mahide');
    // print_r($students);
    // echo '<br/>';
    // echo $students[0];

    // // associative array
    // $employees = [
    //     '01' => [
    //         'name' => 'Rakib',
    //         'designation' => 'CEO',
    //         'information'   => [
    //             'email' => 'rakib@corewebbd.com',
    //             'phone' => '01712345678'
    //         ]
    //     ],
    //     'Manager' => [
    //         'name' => 'Saima',
    //         'designation' => 'Manager',
    //         'information'   => [
    //             'email' => '<EMAIL>',
    //             'phone' => '01712345678'
    //         ]
    //     ],
    //     'Developer' => [
    //         'name' => 'Monika',
    //         'designation' => 'Developer',
    //         'information'   => [
    //             'email' => '<EMAIL>',
    //             'phone' => '01712345678'
    //         ]
    //     ],
    //     'Tester' => [
    //         'name' => 'Hasib',
    //         'designation' => 'Tester',
    //         'information'   => [
    //             'email' => '<EMAIL>',
    //             'phone' => '01712345678'
    //         ]
    //     ],
    //     'Designer' => [
    //         'name' => 'Mahide',
    //         'designation' => 'Designer',
    //         'information'   => [
    //             'email' => '<EMAIL>',
    //             'phone' => '01712345678'
    //         ]
    //     ]
    // ];

    // echo "<pre>";
    // print_r($employees);
    // echo '<pre/>';
    // // echo "Designation: " . $employees['Monika'];

    // // echo $employees[$_GET['keywords']];


    // for search 
    // if (isset($_GET['keywords'])) {
    //     $keywords = $_GET['keywords'];

    //     if (array_key_exists($keywords, $employees)) {
    //         echo "<pre>";
    //         print_r($employees[$keywords]);
    //         echo "</pre>";
    //     } else {
    //         echo "No Record Found";
    //     }
    // }

    ?>

    <!-- Assignment -->
    ১। একটা স্টুনেন্ট সার্চ তৈরি করবেন।
    ২। সেখানে অনেকগুলো স্টুডেন ্ট এর তথ্য থাকবে : যেমনঃ নাম, রোল, বয়স, [ঠিকানাঃ] বাসা নং, জেলা।
    ৩। যখন স্টুডেন্ট এর রোল নাম্বার দিয়ে সার্চ করা হবে তখন ঐ স্টুডেন্ট এর তথ্য চলে আসবে।

</body>

</html>