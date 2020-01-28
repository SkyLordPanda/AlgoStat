<?php
$nb_iteration = 0;
$nb_comparaison = 0;
function shell_sort($my_array)
{
    $lenght_array = count($my_array); 
    global $nb_iteration;
    global $nb_comparaison;
    $step = floor($lenght_array/2);
    while($step > 0){
        $nb_iteration++;
        for($i=$step;$i<$lenght_array;$i++){
            $temp = $my_array[$i];
            $nb_iteration++;
            for($j=$i;$j>=$step && $my_array[$j-$step]>$temp;$j-=$step){
                $my_array[$j]=$my_array[$j-$step];
                $nb_iteration++;
                $nb_comparaison++;
            }
            $my_array[$j]=$temp;
            if($my_array[$j-$step]<=$temp){
                $nb_comparaison++;
            }
        }
        $step = floor($step/2);
    }
return $my_array;
}
$input = $argv[1]; 
$test_array = explode(';',$input);
echo "Série : ";
echo implode(';',$test_array), "\n";
echo "Résultat : ";
$time_start = microtime(true);
echo implode(';',shell_sort($test_array)), "\n";
$time_end = microtime(true);
echo "Nb de comparaison : $nb_comparaison\n";
echo "Nb d'itération : $nb_iteration\n";
$total_time = $time_end - $time_start;
$total_time = sprintf("%.2f",$total_time);
echo "Temps (sec) : $total_time\n";
?>