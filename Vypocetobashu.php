<?php


/*
 * napsat volani funkce 3* a vypsat vysledek
 * echo addnumbers (a,b);
 */


function addNumbers(float $a, float $b): float
{
    return $a * $b;
}

echo addNumbers(5, 4);

/*
 * zmenit nazev funkce aby byl jiny a odpovidal tomu co fce dela
 */
function addNumbers(int $c)
{
    /*
     * napsat fci pro absolutní hodnotu
     */
    return $c;
}
/*
 * asi zbytecne?
 */
echo(abs(-6.7));