<?php
/***
** Aden Kejawen Network
** Tutorial Passing By Value dan Passing By Reference
** http://blog.khodam.org/php/perbedaan-value-by-passing-dan-value-by-reference-pada-php.php
**
** Dilarang merubah code tanpa sepengetahuan author
***/
$a = 5;
$b = 7;
$c =& $b;//$c reference ke $b artinya nilai $c & $b akan selalu sama
 
function n(&$n){//fungsi n passing by reference terhadap variable yang dijadikan parameternya
    return ++$n;
}
 
function x($x){//fungsi n passing by value terhadap variable yang dijadikan parameternya
    return ++$x;
}
 
//Testing
echo n($b).'<br/>';//PBR
echo $b.'</br>';
echo '=========================</br>';
echo x($a).'<br/>';//PBV
echo $a.'<br/>';
echo '=========================</br>';
 
++$b;
 
echo x($b).'<br/>';//PBV
echo $c;
/**
Output
 
8
8
=========================
6
5
=========================
10
9
**/
- See more at: http://blog.khodam.org/php/perbedaan-passing-by-value-dan-passing-by-reference-pada-php.php#sthash.VqGSq4lv.dpuf