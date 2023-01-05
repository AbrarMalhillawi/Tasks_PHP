<?php
echo "<br>";
echo "/////////task1/////////";
echo "<br>";
// Write a PHP script to check if the inserted number is a prime number 

// Sample Input:  3
// Expected Output: 3 is a prime number 

function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(3);
$num=$a;
if ($a==0)
echo "3 is not a Prime Number....."."<br>";
else
echo "3 is a Prime Number.."."<br>";

?>

<?php

echo "<br>";
echo "/////////task2/////////";
echo "<br>";

// Write a PHP script to reverse a string 
// Sample Input:  remove
// Expected Output: evomer

$string ="remove";
$string =strrev($string);
echo "$string";

?>

<?php

echo "<br>";
echo "/////////task3/////////";
echo "<br>";

//  Write a PHP script to check if the all string characters are lower cases
//  Sample Input:  remove
//  Expected Output: Your String is Ok 
 
$name1=array('Abrar');
$name2="abrar";

foreach($name1 as $val)
{
    if(ctype_lower($val))
    {
        echo "yes it is lower case"."<br>";
    }
    else{
        echo "no isn't lower case"."<br>";
    }
}

?>
<?php
echo "<br>";
echo "/////////task4/////////";
echo "<br>";
// Write a PHP function to swap to variables?
// Sample Input:  x = 12     y= 10
// Expected Output: y=12   x=10 
echo "<pre>";
function swap($val1,$val2)
{
     $temp=0;
     $temp=$val1;
     $val1=$val2;
     $val2=$temp;
     echo "values after swap : "."<br>"."<br>";
     echo "value1=$val1      value2=$val2"; 
}

$value1=6;
$value2=5;
echo "values befor swap : "."<br>"."<br>";
echo "value1=$value1      value2=$value2"."<br>"."<br>"; 
swap($value1,$value2);

echo "</pre>";
?>

<?php

echo "<br>";
echo "<br>";
echo "/////////task5/////////";
echo "<br>";
echo "<br>";

// Write a PHP function to check if a number is an Armstrong number or not ?
// **Armstrong number is a number that is equal to the sum of cubes of its digits.
// Sample Input:  407
// Expected Output: 407 is Armstrong Number 

     
//       function armstrong ($num)
//       {
//         $string=(string)$num;
//         $str=strlen($string);
//         for($i=0;$i<$str;$i++)
//         {

//         }
               
//               }

//       function armstrong ($num1,$num2,$num3,$num)
// {
//          $num1= pow($num1,3);
//          $num2= pow($num2,3);
//          $num3= pow($num3,3);
//          if(($num1+$num2+$num3)==$num)
//          {
//               echo ("$num"."is Armstrong Number ");
//          }
//          else 
//          {
//             echo ("$num"."is not  Armstrong Number ");
//          }
//         }

//         $numbers=407;
//         armstrong($numbers);



?>


<?php

echo "<br>";
echo "<br>";
echo "/////////task6/////////";
echo "<br>";
echo "<br>";

// Write a PHP function that checks whether a passed string is a palindrome or not?
// Sample Input:  Eva, can I see bees in a cave?
// Expected Output: Yes it is a palindrome 


function check_palindrome($string) 
{
  if ($string == strrev($string))
      echo "yes it is palindrom";
  else
  echo "no it isn't palindrom";
}
check_palindrome('madam')."<br>";

?>


<?php
echo "<br>";
echo "<br>";
echo "/////////task7/////////";
echo "<br>";
echo "<br>";



// Write a PHP function to remove duplicates from an array ?
// Sample Input:  
// $array1=array(2,4,7,4,8,4);
// Expected Output:
// $array1=array(2,4,7,8);



$array1=array(2,4,7,4,8,4);
$array1=array_unique($array1);
print_r($array1);
?>
<!-- 
<?php
echo "<br>";
echo "<br>";
echo "/////////task8/////////";
echo "<br>";


?> -->



