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



    // $info = Teacher::get(['name', 'number']);
        //how do you properly pull the students and the ones related with their teachers



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

        $sort_order_downloads = array(143516, 396344, 396346);
      
        // $b = uksort($source_arr, function ($a, $b ) use($sod) {


        //     return ($a < $b ) ? -1 : 1;
        // });

        // usort($source_arr, function ($a, $b) use ($sort_order_downloads) {

        //     $a_order = array_search($a['download_id'], $sort_order_downloads);
        //     $b_order = array_search($b['download_id'], $sort_order_downloads);
        //     if ($a_order === $b_order) {
        //         return 0;
        //     }

        //     return ($a_order < $b_order) ? -1 : 1;
        // });

        $sort_order_downloads = array(143516, 396344, 396346);
        $output_arr = array();

        foreach ($sort_order_downloads as $download_id) {
            foreach ($source_arr as $key => $value) {
                if ($value['download_id'] == $download_id) {
                    // dump($value['download_id']);
                    $output_arr[$key] = $value;
                }
            }
        }

        // add the last item with key 51171#2
        $output_arr = array_merge($output_arr, $source_arr);
        $source_arr = array(
            '51171#2'  => array(
                'download_id'  => 51171,
                'variation_id' => 2,
            ),
            '143516#2' => array(
                'download_id'  => 143516,
                'variation_id' => 2,
            ),
            // ...
        );
        $sort_order_downloads = array(143516, 396344, 396346);

        // Measure the time it takes to sort the array using uarsort()
        $start_time = microtime(true);
        uasort($source_arr, function ($a, $b) use ($sort_order_downloads) {
            return array_search($a['download_id'], $sort_order_downloads) > array_search($b['download_id'], $sort_order_downloads);
        });
        $uarsort_time = microtime(true) - $start_time;

        // Measure the time it takes to sort the array using the code snippet from the previous answer
        $start_time = microtime(true);
        $output_arr = array();
        foreach ($sort_order_downloads as $download_id) {
            foreach ($source_arr as $key => $value) {
                if ($value['download_id'] == $download_id) {
                    $output_arr[$key] = $value;
                    unset($source_arr[$key]);
                }
            }
        }
        $output_arr = array_merge($output_arr, $source_arr);
        $custom_sort_time = microtime(true) - $start_time;

        // Compare the results
        echo "uarsort() took $uarsort_time seconds\n";
        echo "Custom sort took $custom_sort_time seconds\n";

        
        //How is this optimal, the traditional way of going about this will be using uasort() and a couple of array_search() to che functions. This will take time as  the array_search() will have to be called repeadtedly. Also, with my solution, you get the last it back, i.e the item with key =   51171#2 than having to unset and push it back towards the end of the array 

        uasort($source_arr, function ($a, $b) use ($sort_order_downloads) {

            $aDownloadId = $a['download_id'];
            $bDownloadId = $b['download_id'];

            $aIndex = array_search($aDownloadId, $sort_order_downloads);
            $bIndex = array_search($bDownloadId, $sort_order_downloads);

            if (in_array([$a, $b], $sort_order_downloads)) {
                return 0;
            }
            // using space operateor
            return $aIndex <=> $bIndex;
        });

        $source_arr['51171#2'] = array_shift($source_arr);
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