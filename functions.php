<?php

/**
 * Task A: Generate a random hand of 5 standard playing cards
 * 
 * @author Alex Yin <fudanyinxin83@gmail.com>
 */
function dealer()
{
    //Step1. Builds a deck of cards.
    $values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'j', 'q', 'k', 'a');
    $suits  = array('c', 'd', 's', 'h');

    $cards = array();
    foreach ($suits as $suit) {
        foreach ($values as $value) {
            $cards[] = $value . $suit;
        }
    }

    //Step2. Shuffle cards
    shuffle($cards);

    //Step3. Get the first 5 cards
    return array_slice($cards, 0, 5);
}


/**
 * Task B: Return a boolean result as to whether the hand of cards returned by the above function contains a ‘straight’ or ‘straight flush’
 * For this test we are looking for as few code characters as possible (Code elegance is not required).
 * @author Alex Yin <fudanyinxin83@gmail.com>
 */

// function j($d)
// {
//     $b = 0;
//     $m = ['a' => 1, 1 => 10, 'j' => 11, 'q' => 12, 'k' => 13];
//     foreach ($d as $a) {
//         $b |= 1 << ($m[$a[0]] ?? $a[0]);
//     }
//     $b = ($b << 3) | ($b >> 10);
//     foreach (range(0, 13) as $i) {
//         if ((($b >> $i) & 31) == 31) {
//             return true;
//         }
//     }
//     return false;
// }

function j($d){$b=0;$m=['a'=>1,1=>10,'j'=>11,'q'=>12,'k'=>13];foreach($d as$a){$b|=1<<($m[$a[0]]??$a[0]);}$b=($b<<3)|($b>>10);foreach(range(0,13)as$i){if(($b>>$i&31)==31){return 1;}}}