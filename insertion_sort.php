<?php
$nb_iteration = 0;
$nb_comparaison = 0;
function insertion_sort($my_array)
{
    $lenght_array = count($my_array); 
    global $nb_iteration;
    global $nb_comparaison;
    for($i=1 ; $i < $lenght_array ; $i++){
        $nb_iteration++;
        $val = $my_array[$i];
        $j = $i-1;
        while($j>=0 && $my_array[$j] > $val){
            $my_array[$j+1] = $my_array[$j];
            $j--;
            $nb_iteration++;
            $nb_comparaison++;
        }
        if($j!=-1){
            $nb_comparaison++;
        }
        $my_array[$j+1] = $val;
    }
return $my_array;
}
$input = $argv[1]; 
$test_array = explode(';',$input);
echo "Série : ";
echo implode(';',$test_array), "\n";
echo "Résultat : ";
$time_start = microtime(true);
echo implode(';',insertion_Sort($test_array)), "\n";
$time_end = microtime(true);
echo "Nb de comparaison : $nb_comparaison\n";
echo "Nb d'itération : $nb_iteration\n";
$total_time = $time_end - $time_start;
$total_time = sprintf("%.2f",$total_time);
echo "Temps (sec) : $total_time\n";
?>