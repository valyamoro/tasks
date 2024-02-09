<?php
declare(strict_types=1);
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

if (\bcmod((string)$number, '2') == 0) {
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
//    echo $str[\strlen($str) - 2];
}

#1.2
if (4 % 2 === 0) {
//    echo 'Первое число без остатка делится на второе';
}

#------------------------------------------
#1.4
#1.1
foreach (range(1, 100) as $value) {
//    echo $value;
}
#1.2
foreach (range(-100, 0) as $value) {
//    echo $value;
}
#1.3
foreach (range(100, 1) as $value) {
//    echo $value;
}
#1.4
foreach (range(1, 100) as $value) {
    if ($value % 2 === 0) {
//        echo $value . "\n";
    }
}
#1.5
foreach (range(1, 100) as $value) {
    if ($value % 3 === 0) {
//        echo $value . "\n";
    }
}
#--------------------------------------
#1.5
#1.1
$acc = 0;
foreach (range(1, 100) as $value) {
    $acc += $value;
}
#1.2
$acc = 0;
foreach (range(1, 100) as $value) {
    if ($value % 2 === 0) {
        $acc += $value;
    }
}
#1.3
$acc = 0;
foreach (range(1, 100) as $value) {
    if ($value % 2 !== 0) {
        $acc += $value;
    }
}
#1.4
//---
#1.5
//echo strrev('hello');
$str = 'hello';
for ($i = strlen($str); $i >= 0; $i--) {
    $char = substr($str, $i, 1);
//    echo $char;
}
#--------------------------
#1.6
#1.1
$double = function($a) {
    return $a * $a;
};

$result = \array_map($double, [1, 2, 3, 4]);
$acc = 0;
foreach ($result as $value) {
    $acc += $value;
}
//echo $acc;
#1.2
$sqrt = function($a) {
    return \sqrt($a);
};

$result = \array_map('sqrt', [1, 2, 3, 4]);
$acc = 0;
//foreach ($result as $value) {
//    $acc += $value;
//}
//foreach ([1, 2, 3, 4] as $value) {
//    $acc += \sqrt($value);
//}
//echo $acc;

#1.3
$arr = [1, 2, -3, 4, -10];
$acc = 0;
foreach ($arr as $value) {
    if ($value < 0) {
        continue;
    }

    $acc += $value;
}

//echo $acc;


#1.4
$arr = [1, -3, 4, 11];
$acc = 0;
foreach ($arr as $value) {
    if ($value > 0 && $value < 10) {
        $acc += $value;
    }
}
//echo $acc;

#----------------------------------
#1.7
#1
$arr = \str_split('abcde');
#2
$ints = 12345;
//var_dump(array_map('intval', str_split($ints))[0]);
#3
//echo (\strrev((string)12345));
#4
$str = (string)12345;
$acc = 0;
for ($i = 0; $i < strlen($str); $i++) {
    $acc += $str[$i];
}

//echo $acc;
#----------------------
#1.8
#1
$arr = range(1, 10);
#2
$arr = [];
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        $arr[] = $i;
    }
}
#3
$arr = [];
foreach ([1.456, 2.125, 3.32, 4.1, 5.34] as $value) {
    $arr[] = round($value, 1);
}
#---------------------------
#1.9
#1
$arr = ['helo', 'http://hello'];
foreach ($arr as $key => $value) {
    if (!\str_starts_with($value, 'http://')) {
        unset($arr[$key]);
    }
}
#2
$arr = ['helo', 'http://hello', 'hello.html'];
foreach ($arr as $key => $value) {
    if (!\str_ends_with($value, '.html')) {
        unset($arr[$key]);
    }
}
#3
$arr = [3, 2, 1];
foreach ($arr as &$value) {
//    $value += $value * .1;
//    $value *= 1.1;
}
//print_r($arr);
#-------------------------------------
#1.10
#1
$randomNumbers = \array_map(function() {
    return \rand(1, 100);
}, array_fill(0, 100, null));
//print_r($randomNumbers);
#2
$str = 12345;
settype($str, 'string');
for ($i = strlen($str); $i >= 0; $i--) {
//    echo \substr($str, $i, 1);
}
#3
$arr = [1, 2, 3, 4, 5, 6];
for ($i = 0; $i < count($arr); $i += 2) {
    $subArray[] = \array_slice($arr, $i, 2);
}
#4
for ($i = 0; $i < count($subArray); $i++) {
    foreach ($subArray[$i] as $value) {
        $newArr[] = $value;
    }
}

