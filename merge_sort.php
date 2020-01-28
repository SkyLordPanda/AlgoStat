<?php
$nb_comparaison = 0;
function merge($left, $right){
    global $nb_comparaison;
    $result;
    $i=0;
    $j=0;
    while($i<count($left) && $j<count($right)){
        if ($left[$i]<=$right[$j]){
            $result[]=$left[$i];
            $i++;
        }
        else{
            $result[]=$right[$j];
            $j++;
        }
        $nb_comparaison++;
    }
    while($i<count($left)){
        $result[]=$left[$i];
        $i++;
    }
    while($j<count($right)){
        $result[]=$right[$j];
        $j++;
    }
    return $result;
}
function mergesort($array){
    $lenght_array = count($array);
    if($lenght_array<2){
        return $array;
    }
    $mid = floor($lenght_array/2);
    $left = mergesort(array_slice($array,0,$mid));
    $right = mergesort(array_slice($array,$mid));
    return merge($left,$right);
}
$input = $argv[1]; 
$test_array = explode(';',$input);
echo "Série : ";
echo implode(';',$test_array), "\n";
echo "Résultat : ";
$time_start = microtime(true);
echo implode(';',mergesort($test_array)), "\n";
$time_end = microtime(true);
echo "Nb de comparaison : $nb_comparaison\n";
$total_time = $time_end - $time_start;
$total_time = sprintf("%.2f",$total_time);
echo "Temps (sec) : $total_time\n";
?>