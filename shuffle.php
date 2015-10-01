<?php

/**
* Shuffles an associative array recursive
* @author Mogria <m0gr14@gmail.com>
* @param array $array
* @return array
*
*/

function rec_assoc_shuffle($array)
{
  $ary_keys = array_keys($array);
  $ary_values = array_values($array);
  shuffle($ary_values);
  foreach($ary_keys as $key => $value) {
    if (is_array($ary_values[$key]) AND $ary_values[$key] != NULL) {
      $ary_values[$key] = rec_assoc_shuffle($ary_values[$key]);
    }
    $new[$value] = $ary_values[$key];
  }
  return $new;
}

?>

Example of use:
<?php
$array =
    Array(
        1,
        Array(
            1,
            2,
            3,
            4,
            Array(
                1,
                2,
                3,
                4,
                5
            )
        ),
        2,
        3,
        Array(
            0,
            1,
                Array(
                    1,
                    2,
                    3,
                    4,
                        Array(
                            1,
                            6,
                            5,
                            2,
                            1,
                            3
                        )
                )
        ),
        4,
        5,
        6,
        7
    );
$array = rec_assoc_shuffle($array);
echo '<pre>';
print_r($array);
echo '</pre>';