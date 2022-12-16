<?php

function dd($data)
{
    highlight_string("<?php\n " . var_export($data, true) . "?>");
    echo '<script>document.getElementsByTagName("code")[0].getElementsByTagName("span")[1].remove() ;document.getElementsByTagName("code")[0].getElementsByTagName("span")[document.getElementsByTagName("code")[0].getElementsByTagName("span").length - 1].remove() ; </script>';
    die();
}


$source = array(1, 2, 3, 4, 5);
$target = array(2, 5, 7, 8, 9);
$common = array();
for ($i = 0; $i < count($source); $i++) {
    for ($j = 0; $j < count($target); $j++) {
        if ($source[$i] == $target[$j]) {
            array_push($common, $source[$i]);
        }
    }
}

$source = array(1, 2, 3, 4, 5);
$target = array(2, 5, 7, 8, 9);

// Use array_intersect() to get the common values
$common = array_intersect($source, $target);

// var_dump($common);

// dd($common);

// to get common elements from an array in my own opinion
$source = [1, 2, 3, 4, 5];
$target = [2, 5, 7, 8, 9];
$hold = [];

//loop through the $source array 
foreach ($source as $key => $value) {
    // use in_array() to check if there are any similar value with $target
    if (in_array($value, $target)) {
        // then push into hold array
        $hold[] = $value;
    }
}
// var_dump($hold);

// $target = array(1, rand(1, 5));
// for ($i = 0; $i < 10; $i++) {
//     $target = array_merge($target, array(rand($i, 5), rand(1, $i)));
// }

/** Instead of using array_merge(), I used [] to  eliminate the need for native method, array_merge() here we avoid repeatedly calling the array_merge function and repeadtedly merging arrays */
$target = [1, rand(1, 5)];
for ($i =  0; $i < 10; $i++) {
    $target[] = rand($i, 5);
    $target[] = rand(1, $i);
}

// We could have use mt_rand in place of rand() but according to php doc, mt_rand is an alias of rand() though it seems to be faster but ideally it isnt because rand calls mt_rand internaly

$my_list = array(
    array(
        'ID' => 1,
        'post_title' => 'Hello World',
    ),
    array(
        'ID' => 2,
        'post_title' => 'Sample Page',
    ),
);
// $pages = [];
// for ($i = 0; $i < count($my_list); $i++) {
//     array_push($pages, $my_list[$i]['post_title']);
// }
$newpages = array_map(function ($item) {

    return $item['post_title'];
}, $my_list);

$newpage = array_map(fn ($item) => $item['post_title'], $my_list);
$pagess = array_column($my_list, 'post_title');
// dd($pagess);

$source_arr = array(
    '51171#2'  => array(
        'download_id'  => 51171,
        'variation_id' => 2,
    ),
    '143516#2' => array(
        'download_id'  => 143516,
        'variation_id' => 2,
    ),
    '396346#2' => array(
        'download_id'  => 396346,
        'variation_id' => 2,
    ),
    '143516#1' => array(
        'download_id'  => 143516,
        'variation_id' => 1,
    ),
    '396344#2' => array(
        'download_id'  => 396344,
        'variation_id' => 2,
    ),
    '396346#1' => array(
        'download_id'  => 396346,
        'variation_id' => 1,
    ),
    '396344#1' => array(
        'download_id'  => 396344,
        'variation_id' => 1,
    ),
);

$sod = array(143516, 396344, 396346);

$b = sort($source_arr);
dd($b);
// $sort = usort($source_arr, function ($a, $b) use ($sod) {
// });























$output_arr = array(
    '143516#2' => array(
        'download_id'  => 143516,
        'variation_id' => 2,
    ),
    '143516#1' => array(
        'download_id'  => 143516,
        'variation_id' => 1,
    ),
    '396344#2' => array(
        'download_id'  => 396344,
        'variation_id' => 2,
    ),
    '396344#1' => array(
        'download_id'  => 396344,
        'variation_id' => 1,
    ),
    '396346#2' => array(
        'download_id'  => 396346,
        'variation_id' => 2,
    ),
    '396346#1' => array(
        'download_id'  => 396346,
        'variation_id' => 1,
    ),
    '51171#2'  => array(
        'download_id'  => 51171,
        'variation_id' => 2,
    ),
);





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- 
    Solution will be to make function A exportedable
    // ./fileA.js

    export function fA() {
    //do something
    }

    // in fileB.js

    import { fA } from "./fileA.js";
    fA(); -->
    <script type="text/javascript">
        let obj1 = {
            'key1': 1,
            'key2': 2,
            'key3': 3
        };
        let obj2 = Object.assign({}, obj1);
        // alternatively, we can use the spread operator to make obj2 not to reference obj1
        obj2.key1 = 'new1';
        console.log(obj1 === obj2)
    </script>
</body>

</html>