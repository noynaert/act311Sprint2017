<?php
$classes['csc406'] = 'Pickett';
$classes['act211'] = 'Hecker';
$classes['act301'] = 'Noynaert';
$classes['csc245'] = 'Kendell-Morewick';


echo "\n";
ksort($classes);
foreach($classes as $class=>$instructor){
    echo "$class taught by $instructor\n";
}
?>
