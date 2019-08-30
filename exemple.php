<?php


unset($choice[array_search($complementaire, $choice)]);

echo 'la combinaison gagnante est : '; 
foreach($choice as $num){ echo $number[$num] . ' - ';}
foreach($complementaire as $comp => $num){
echo '[' . $number[$num] . '] <br>';
}

echo "hello";