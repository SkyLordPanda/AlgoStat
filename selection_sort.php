<?php
$nb_iteration = 0;
$nb_comparaison = 0;
function swap($x,$y,&$list){
    $temp = $list[$x];
    $list[$x] = $list[$y];
    $list[$y] = $temp;
}
function select_sort($my_array){
    $array_length = count($my_array);
    $ind_min = 0;
    global $nb_iteration;
    global $nb_comparaison;
    for($i=0; $i < $array_length; $i++){
        $nb_iteration++;
        $ind_min = $i;
        for($j=$i+1; $j < $array_length; $j++){
            $nb_iteration++;
            if ($my_array[$j] < $my_array[$ind_min]){
                $ind_min = $j;
            }
            $nb_comparaison++;
        }
        if($i!=$ind_min){
            swap($i,$ind_min,$my_array);
        }
    }
    return $my_array;
}
$input = $argv[1]; 
$test_array = explode(';',$input);
echo "Série : ";
echo implode(';',$test_array), "\n";
echo "Résultat : ";
$time_start = microtime(true);
echo implode(';',select_sort($test_array)), "\n";
$time_end = microtime(true);
echo "Nb de comparaison : $nb_comparaison\n";
echo "Nb d'itération : $nb_iteration\n";
$total_time = $time_end - $time_start;
$total_time = sprintf("%.2f",$total_time);
echo "Temps (sec) : $total_time\n";
?>