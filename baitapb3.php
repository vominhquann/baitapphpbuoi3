<?php
//5
echo "bai5 <br>";
$array = array(4, 12, 5, 8, 2, 10, 3);

$min = min($array);
$max = max($array);

echo "Giá trị nhỏ nhất trong mảng là: $min<br>";
echo "Giá trị lớn nhất trong mảng là: $max";
//6
echo "<br><br> bai6 <br>";
sort($array);

echo "Mảng sắp xếp tăng dần:<br>";
foreach ($array as $value) {
    echo "$value ";
}
//7
echo "<br><br> bai7 <br>";
$number = 10;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Giai thừa của số $number là: $factorial";
//8
echo "<br><br>bai8 <br>";
function checkPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function findPrimes($start, $end) {
    $primes = [];

    for ($number = $start; $number <= $end; $number++) {
        if (checkPrime($number)) {
            $primes[] = $number;
        }
    }

    return $primes;
}

$start = 1;
$end = 50;

$primes = findPrimes($start, $end);

echo "Các số nguyên tố từ $start đến $end là: ";
foreach ($primes as $prime) {
    echo $prime . " ";
}
//9
echo "<br><br>bai9<br>";
$array = [4, 12, 5, 8, 2, 10, 3];
$sum = array_sum($array);
echo "Tổng của các số trong mảng là: " . $sum;
//10
echo "<br><br> bai10 <br>";
$start = 0;
$end = 20;

$a = 0;
$b = 1;

echo "Các số Fibonacci từ $start đến $end là: ";

while ($a <= $end) {
    if ($a >= $start) {
        echo $a . " ";
    }
    $t = $a + $b;
    $a = $b;
    $b = $t;
}
//11
echo "<br><br>bai11<br>";
function ArmstrongNumber($number)
{
    $sum = 0;
    $temp = $number;
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += $digit ** strlen((string)$number);
        $temp = (int)($temp / 10);
    }
    
    return $number == $sum;
}

$number = 114716; // so kiem tra

if (ArmstrongNumber($number)) {
    echo $number . " là số Armstrong.";
} else {
    echo $number . " không là số Armstrong.";
}
//12
echo "<br><br>bai12<br>";
function insertElement($array, $element, $position)
{
    array_splice($array, $position, 0, $element);
    return $array;
}

$myArray = [4, 12, 5, 8, 2, 10, 3]; 
$originalString = implode(",",$myArray );
$newElement = 3 ; 
$insertPosition = 2; 
echo "Mảng ban đầu: " . implode(", ", $myArray) . "<br>";
echo "số được chèn là:$newElement <br> ";
echo "vị trí chèn là:$insertPosition <br> ";

$resultArray = insertElement($myArray, $newElement, $insertPosition);
echo "kết quả [" . implode(", ", $resultArray) . "]";
//13
echo "<br><br>bai13<br>";
$myArray = [1, 2, 2, 3, 4, 4, 5, 6, 6];
$uniqueArray = array_unique($myArray);
$originalString = implode(", ", $myArray);
echo "mảng gốc: $originalString <br>kết quả: ";
foreach ($uniqueArray as $element) {
    echo $element ;
}
//14
echo "<br><br>bai14<br>";
function findElementIndex($array, $element)
{
    return array_search($element, $array);
}

$myArray = [4, 12, 5, 8, 2, 10, 3]; 
$searchElement = 6; 

$elementIndex = findElementIndex($myArray, $searchElement);
echo "Mảng: " . implode(", ", $myArray) . "<br>";
// condition ? value1 : value2
echo $elementIndex !== false ? "Vị trí của phần tử $searchElement là $elementIndex trong mảng." : "Phần tử $searchElement không được tìm thấy trong mảng.";
//15
echo "<br><br>bai15<br>";
function reverseString($string)
{
    return strrev($string);
}

$myString = "vo minh quan dep trai vc"; 

$reversedString = reverseString($myString);
echo "chuỗi ban đầu: $myString<br>";
echo "đảo ngược: $reversedString";
//16
echo "<br><br>bai16<br>";
function countElements($array)
{
    return count($array);
}

$myArray = [4, 12, 5, 8, 2, 10, 3]; 

$elementCount = countElements($myArray);
echo "cho mảng: " . implode(", ", $myArray) . "<br>";
echo "Số lượng phần tử trong mảng là: " . $elementCount;
//17
echo "<br><br>bai17<br>";
function isPalindrome($string)
{
    $string = strtolower( $string);
    return $string === strrev($string);
}

$myString = "Madam"; 

echo isPalindrome($myString) ? "Chuỗi \"$myString\" là chuỗi Palindrome." : "Chuỗi \"$myString\" không là chuỗi Palindrome.";
//18 
echo "<br><br>bai18<br>";
function countOccurrences($array, $element)
{
    return array_count_values($array)[$element] ?? 0;
}

$myArray = [4, 12, 5, 8, 2, 10, 3]; 
$searchElement = 2; 

$occurrences = countOccurrences($myArray, $searchElement);
echo "cho mảng: " . implode(", ", $myArray) . "<br>";
echo "Số lần xuất hiện của phần tử $searchElement trong mảng là: " . $occurrences;
//19
echo "<br><br>bai19<br>";
function sortDescending($array)
{
    rsort($array);
    return $array;
}

$myArray = [4, 12, 5, 8, 2, 10, 3];
echo "cho mảng: " . implode(", ", $myArray) . "<br>";
$sortedArray = sortDescending($myArray);
echo "sắp xếp theo thứ tự giảm dần " . implode(", ", $sortedArray) . "";
//20
echo "<br><br>bai20<br>";
$myArray = [4, 12, 5, 8, 2, 10, 3]; 
$newElement = 0; 
echo "cho mảng: " . implode(", ", $myArray) . "<br>";
echo "ký tự thêm vào mảng: $newElement <br> ";
array_unshift($myArray, $newElement); 
echo "thêm vào đầu: " . implode(", ", $myArray) . "";
//21
echo "<br><br>bai21<br>";
$myArray = [4, 12, 5, 8, 2, 10, 3]; 
echo "cho mảng: " . implode(", ", $myArray) . "<br>";
rsort($myArray);
$secondLargest = $myArray[1]; 
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
//22
echo "<br><br>bai22<br>";
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findLCM($a, $b) {
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}

$number1 = 12;
$number2 = 18;

$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);

echo "Ước số chung lớn nhất của $number1 và $number2 là: $gcd<br>";
echo "Bội số chung nhỏ nhất của $number1 và $number2 là: $lcm";
//23
echo "<br><br>bai23<br>";
function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}

$number = 28;

if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không là số hoàn hảo.";
}
//24
// cau nay e ko biet lam e di cop, thay dung hoi e
echo "<br><br>bai24<br>";
function findLargestOddNumber($arr) {
    $largestOdd = null;
    foreach ($arr as $num) {
        if ($num % 2 != 0 && ($largestOdd === null || $num > $largestOdd)) {
            $largestOdd = $num;
        }
    }
    return $largestOdd;
}

$numbers = [4, 12, 5, 8, 2, 10, 3];
echo "cho mảng: " . implode(", ", $numbers) . "<br>";


$largestOddNumber = findLargestOddNumber($numbers);

if ($largestOddNumber !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $largestOddNumber";
} else {
    echo "Không có số lẻ trong mảng.";
}
//25
echo "<br><br>bai25<br>";
function isPrimeNumber($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 17;

if (isPrimeNumber($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không là số nguyên tố.";
}
//26
//cau nay cung tuong tu cau 24
echo "<br><br>bai26<br>";
function findLargestPositiveNumber($arr) {
    $largestPositive = null;
    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositive === null || $num > $largestPositive)) {
            $largestPositive = $num;
        }
    }
    return $largestPositive;
}

$numbers = [-3, 5, 9, -1, 7, 0, 8];
echo "cho mảng: " . implode(", ", $numbers) . "<br>";

$largestPositiveNumber = findLargestPositiveNumber($numbers);

if ($largestPositiveNumber !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositiveNumber";
} else {
    echo "Không có số dương trong mảng.";
}
//27
echo "<br><br>bai27<br>";
function findLargestNegativeNumber($arr) {
    $largestNegative = null;
    foreach ($arr as $num) {
        if ($num < 0 && ($largestNegative === null || $num > $largestNegative)) {
            $largestNegative = $num;
        }
    }
    return $largestNegative;
}

$numbers = [-3, 5, -9, -1, 7, 0, -8];
echo "cho mảng: " . implode(", ", $numbers) . "<br>";

$largestNegativeNumber = findLargestNegativeNumber($numbers);

if ($largestNegativeNumber !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegativeNumber";
} else {
    echo "Không có số âm trong mảng.";
}
//28
echo "<br><br>bai28<br>";
function sumOfOddNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}

$n = 10;
$sumOfOdd = sumOfOddNumbers($n);

echo "Tổng các số lẻ từ 1 đến $n là: $sumOfOdd";
//29
echo "<br><br>bai29<br>";
function findPerfectSquares($start, $end) {
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int) sqrt($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}

$start = 1;
$end = 20;

$perfectSquares = findPerfectSquares($start, $end);

echo "Các số chính phương từ $start đến $end là: ";
echo implode(", ", $perfectSquares);

//30
echo "<br><br>bai30<br>";
function isSubstring($string, $substring) {
    return strpos($string, $substring) !== false;
}

$string = "vo minh quan dep trai vo dich thien ha";
$substring = "quan";

if (isSubstring($string, $substring)) {
    echo "$substring là chuỗi con của $string.";
} else {
    echo "$substring không là chuỗi con của $string.";
}
?>
