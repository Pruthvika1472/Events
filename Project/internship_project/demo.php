

<?php
$date=getdate();
echo "Today is ".$date['mday']."/".$date['mon']."/".$date['year'];
"<br>";
echo date("d/m/y \a\\t g.i:a",time());
"(<br>)";

function add($n1,$n2){
    $sum=$n1+$n2;
    echo "The sum of $n1 and $n2 is $sum";

}

add(10,20);

?>
