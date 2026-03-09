<?php

//--------Warunek IF---------

// if (warunek) 
// {
//   instrukcje
// }



$a = 7; 
if ($a%2 > 0) 
{
  echo "Liczba nieparzysta";
}
if ($a%2 == 0) 
{
  echo "Liczba parzysta";
}

$a = 7; 
if ($a%2 > 0) 
  echo "Liczba nieparzysta";
if ($a%2 == 0) 
  echo "Liczba parzysta";

  $a = 7; 
if ($a > 0 && $a < 10) 
  echo "Liczba między 0 a 10";

if ($a < 0 || $a > 10) 
  echo "Liczba mniejsza od 0 lub większa niż 10";

//-------Warunek IF ELSE--------

$a = 7; 
if ($a%2 > 0) 
{
  echo "Liczba nieparzysta";
}
else 
{
  echo "Liczba parzysta";
}

//---------Alternatywa ELSE IF-----------

$a = 34; 

if ($a%8 == 0) 
  echo "Liczba podzielna przez osiem";

elseif ($a%4 == 0) 
  echo "Liczba podzielna przez 4, ale nie przez 8";

elseif ($a%2 == 0) 
  echo "Liczba podzielna przez 2, ale nie przez 4";

else 
  echo "Liczba nieparzysta";

//----------Instrukcja SWITCH-----------

$a = 72; 

switch ($a) 
{
case 1:
  echo "Wartość zmiennej a to 1";
  break;

case 2:
  echo "Wartość zmiennej a to 2";
  break;

case 3:
  echo "Wartość zmiennej a to 3";
  break;

case 72:
  echo "Wartość zmiennej a to 72";
  break;

default:
  echo "Żadna z powyższych";
  break;
}

//-----------Pętla While-----------

if($zmienna < 101)
{
  echo $zmienna;
  $zmienna++;
}
if($zmienna < 101)
{
  echo $zmienna;
  $zmienna++;
}
.
.
.
if($zmienna < 101)
{
  echo $zmienna;
  $zmienna++;
} 


while($zmienna < 101) 
 {
    echo $zmienna;
    $zmienna++;

 }

 while($zmienna < 101) 
{
  echo $zmienna;
  $zmienna += 10; 
} 

while($zmienna < 101 && $inna > 100) 
{
  echo $zmienna;
  echo $inna;
  $zmienna += 10; 
  $inna -= 5; 
} 

//-------Pętla DO WHILE-------


$zmienna = 200;
do 
{
  echo $zmienna;
  $zmienna++;
} 
while($zmienna < 101) 


$zmienna = -10;
do 
{
  echo $zmienna;
  $zmienna--;
} 
while($zmienna > 0) 

//---------Pętla FOR----------

for($i=0; $i < 100; $i++)
{
  // instrukcje do wykonania
  // z każdą iteracją  
}

for($i = 0; $i < 100; $i += 2)
{
  // instrukcje do wykonania zwiększając $i o 2
  // z każdą iteracją
}

for($i = 100; $i > 0 ; $i -= 2)
{
  // instrukcje do wykonania zmniejszając $i o 2
  // z każdą iteracją
}

// użycie pętli for
for($i=0;$i<10;$i++)
{
  // instrukcje
}

// ten sam efekt z użyciem funkcji while
$i=0
while($i < 10)
{
  // instrukcje
  $i++;
}

//---------Operator Warunkowy----------

$a = 5; 
$odpowiedz = ($a>5) ? 'Większa od 5' : 'Mniejsza, bądź równa 5';

echo $odpowiedz;

$a = 5; 
echo ($a>5) ? 'Większa od 5' : 'Mniejsza, bądź równa 5';


//----------Podsumowane rozdziału 2-----------


$ilosc = X; 


$kontynuacja = ($ilosc == 0) ? 0 : 1;

if($kontynuacja == 1)
{
    if($ilosc > 0) 
        while($ilosc > 0) 
        {
            for($i=0;$i<21;$i++)
                echo $i;
            $ilosc--; 
            echo "<br/>"; 
        }
    else 
        while($ilosc < 0) 
        {
            for($i=20;$i>=0;$i--) 
                echo $i;
            $ilosc++; 
            echo "<br/>"; 
        }               
}
else
  echo "Brak ciągów liczb";

//---------Zadania Dodatkowe--------

//1
for ($i = 1; $i <= 10; $i++) { 
    for ($j = 1; $j <= 10; $j++) { 
        $wynik = $i * $j;
        echo "$i x $j = $wynik<br>";
    }
    echo "<br>"; 
}

//2
for ($i = 1; $i <= 10; $i++) { 
    for ($j = 1; $j <= 10; $j++) { 
        $wynik = $i * $j;
        
        
        if ($wynik % 2 == 0) {
            $kolor = "blue"; 
        } else {
            $kolor = "green";
        }
        
        echo "<span style='color:$kolor;'>$i x $j = $wynik</span><br>";
    }
    echo "<br>";
}

//3
$potega = 3; 

echo "Ciąg liczb od 1 do 10 podniesionych do potęgi $potega:<br>";


for ($i = 1; $i <= 10; $i++) {
    switch ($potega) {
        case 2:
            $wynik = $i * $i; 
            break;
        case 3:
            $wynik = $i * $i * $i; 
            break;
        case 4:
            $wynik = $i * $i * $i * $i; 
            break;
        default:
            $wynik = $i;
    }
    echo "$wynik<br>";
}




?>















?>