<?php
$nb_iteration = 0;
$nb_comparaison = 0;
function swap($x,$y,&$list){
    $temp = $list[$x];
    $list[$x] = $list[$y];
    $list[$y] = $temp;
}
function bubble_sort($my_array){
    $array_length = count($my_array);
    global $nb_iteration;
    global $nb_comparaison;
    do {
        $nb_iteration++;
        $swapped = 0;
        for($i=1;$i<$array_length;$i++){
            $nb_iteration++;
            if($my_array[$i-1] > $my_array[$i]){
                swap($i,$i-1,$my_array);
                $swapped = 1;
            }
            $nb_comparaison++;
        }
    } while($swapped == 1);
    return $my_array;
}
$input = $argv[1]; 
$test_array = explode(';',$input);
echo "Série : ";
echo implode(';',$test_array), "\n";
echo "Résultat : ";
$time_start = microtime(true);
echo implode(';',bubble_sort($test_array)), "\n";
$time_end = microtime(true);
echo "Nb de comparaison : $nb_comparaison\n";
echo "Nb d'itération : $nb_iteration\n";
$total_time = $time_end - $time_start;
$total_time = sprintf("%.2f",$total_time);
echo "Temps (sec) : $total_time\n";
?>