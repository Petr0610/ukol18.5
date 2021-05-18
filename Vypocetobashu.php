<?php


/*
 * napsat volani funkce 3* a vypsat vysledek
 * echo addnumbers (a,b);
 */


function VypocetObsahu(float $a, float $b): float
{
    return $a * $b;
}
echo "5 * 10 = " . VypocetObsahu(5, 10) . PHP_EOL;
echo "7 * 13 = " . VypocetObsahu(7, 13) . PHP_EOL;
echo "2 * 4 = " . VypocetObsahu(2, 4);

function AbsolutniHodnota(int $c)
{
    return abs($c);
}
echo "Absolutní hodnota čísla 6 je" . AbsolutniHodnota(6). PHP_EOL;
echo "Absolutní hodnota čísla 356 je" . AbsolutniHodnota(356). PHP_EOL;
echo "Absolutní hodnota čísla -1623 je" . AbsolutniHodnota(-1623). PHP_EOL;