## Assumption
***1.Create a function that will return a boolean result as to whether the hand of cards returned by the above function contains a ‘straight’ or ‘straight flush’.***

We can only return **a** boolean result, and **straight flush** always belongs to **straight**, thus we just need to write a function checking if it's a 'straight'.

***2.Aces are high AND low.***

Because of this^^, we can assume **Q K A 2 3** and **A 2 3 4 5** are also straight

## How to check me
functions.php includes 2 functions:

* `dealer()` (Task A)
* `j()` (Task B, 183 chars)

## PHP CLI script
Note if your php is not installed under `/usr/bin/php` , then you need to update the first line in `dealer.php` 
```
chmod +x dealer.php
./dealer.php
```



## UnitTest
This project use phpunit, please run 
```
./vendor/bin/phpunit tests/FunctionTest.php
```


