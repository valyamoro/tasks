<?php
// https://code.mu/ru/php/tasker/stager/
#1.1
#1.1
$a = -4;
if ($a < 0) {
//    echo 'Число отрицательное';
}

#1.2
//echo(\mb_strlen('hello', 'utf8'));
$str = 'hello';
$arr = \mb_str_split($str);
$count = 0;
foreach ($arr as $value) {
    $count += 1;
}
//echo $count;

#1.3
//echo \substr('hello', -1);
$a = 'hello';
//echo ($a[\strlen($a) - 1]);

#1.4
$number = 10;
if ($number & 1) {
//    echo 'число нечетное';
}

if (\bcmod($number, '2') == 0) {
//    echo 'число четное';
}

if ($number % 2 === 0) {
//    echo 'число четное';
}

#1.5
if ('hello'[0] === 'hello'[0]) {
//    echo 'буква ' . 'hello'[0] . ' есть в начале двух слов' ;
}

#1.6
$a = 'букварь';
$lastLetter = \mb_substr($a, -1, 1, 'utf8');
if ($lastLetter === 'ь') {
    $penultimateLetter = $a[mb_strlen($a, 'utf8') - 2];
}

#-----------------------
#1.2
#1.1
$number = 31234565555;

$firstDigit = \floor($number / \pow(10, \floor(\log10($number))));

#1.2
$lastDigit = $number % 10;

#1.3
$sum = $firstDigit + $lastDigit;

#1.4
$countDigits = \strlen((string)$number);
$countDigits = \floor(\log10($number) + 1);

#1.5

$numberOne = 123;
$numberTwo = 143;
$firstDigitOne = \floor($numberOne / \pow(10, \floor(\log10($numberOne))));
$firstDigitTwo = \floor($numberTwo / \pow(10, \floor(\log10($numberTwo))));

if ($firstDigitOne === $firstDigitTwo) {
//    echo 'первые цифры совпадают';
}

#-----------------------------------
#1.3
#1.1

if (\strlen($str) > 1) {
    echo \substr($str, -2);
}







