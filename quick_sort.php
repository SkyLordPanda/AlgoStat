<?php
$nb_comparaison = 0;
function swap($x,$y,&$list){
    $temp = $list[$x];
    $list[$x] = $list[$y];
    $list[$y] = $temp;
}
function partition(&$array,$low,$high){
    global $nb_comparaison;
    $pivot = $array[$high];
    $i = $low - 1;
    for($j=$low;$j<=($high-1);$j++){
        if($array[$j]<$pivot){
            $i++;
            swap($i,$j,$array);
        }
        $nb_comparaison++;
    }
    swap($i+1,$high,$array);
    return ($i+1);
}
function quicksort(&$array,$low,$high){
    if($low < $high){
        $pi = partition($array,$low,$high);
        quicksort($array,$low,$pi-1);
        quicksort($array,$pi+1,$high);
    }
}
$input = $argv[1]; 
$test_array = explode(';',$input);
echo "Série : ";
echo implode(';',$test_array), "\n";
echo "Résultat : ";
$time_start = microtime(true);
quicksort($test_array,0,count($test_array)-1);
$time_end = microtime(true);
echo implode(';',$test_array), "\n";
echo "Nb de comparaison : $nb_comparaison\n";
$total_time = $time_end - $time_start;
$total_time = sprintf("%.2f",$total_time);
echo "Temps (sec) : $total_time\n";
?>