<?php
$nb_iteration = 0;
$nb_comparaison = 0;
function swap($x,$y,&$list){
    $temp = $list[$x];
    $list[$x] = $list[$y];
    $list[$y] = $temp;
}
function comb_sort($array){
    global $nb_iteration;
    global $nb_comparaison;
    $gap = count($array);
    $shrink = 1.3;
    $sorted = false;
    while($sorted == false){
        $gap = floor($gap/$shrink);
        if($gap <= 1){
            $gap = 1;
            $sorted = true;
        }
        $i = 0;
        $size = count($array);
        while(($i + $gap) < $size){
            if($array[$i] > $array[$i+$gap]){
                swap($i,$i + $gap,$array);
                $sorted = false;
            }
            $nb_comparaison++;
            $nb_iteration++;
            $i++;
        }
        $nb_iteration++;
    }
    return $array;
}
$input = $argv[1]; 
$test_array = explode(';',$input);
echo "Série : ";
echo implode(';',$test_array), "\n";
echo "Résultat : ";
$time_start = microtime(true);
echo implode(';',comb_sort($test_array)), "\n";
$time_end = microtime(true);
echo "Nb de comparaison : $nb_comparaison\n";
echo "Nb d'itération : $nb_iteration\n";
$total_time = $time_end - $time_start;
$total_time = sprintf("%.2f",$total_time);
echo "Temps (sec) : $total_time\n";
?>