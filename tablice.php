<?php

$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

function odczytaj_komorke($tablica, $numer_komorki) {
    if(isset($tablica[$numer_komorki])) {
        return $tablica[$numer_komorki];
    } else {
        return "Błąd: komórka o indeksie $numer_komorki nie istnieje.";
    }
}

echo "Zawartość 5. komórki: " . odczytaj_komorke($tab1, 4) . "<br>";

echo "<br>";

function zmien_komorke($tablica, $numer_komorki, $nowa_wartosc) {
    if(isset($tablica[$numer_komorki])) {
        $tablica[$numer_komorki] = $nowa_wartosc;
    }
    return $tablica;
}

$tab1 = zmien_komorke($tab1, 6, 12);

echo "Tablica po zmianie 7. komórki:<br>";
print_r($tab1);
echo "<br><br>";

function skopiuj_tablice($zrodlo) {
    $kopia = array();
    foreach($zrodlo as $element) {
        $kopia[] = $element;
    }
    return $kopia;
}

$tab2 = skopiuj_tablice($tab1);

echo "Tablica kopia (tab2):<br>";
print_r($tab2);
echo "<br><br>";

function sumuj_indeksy($tablica_a, $tablica_b) {
    $tablica_sum = array();
    $dlugosc = count($tablica_a);

    for($i = 0; $i < $dlugosc; $i++) {
        $tablica_sum[$i] = $tablica_a[$i] + $tablica_b[$i];
    }
    return $tablica_sum;
}

$tab3 = sumuj_indeksy($tab1, $tab2);

echo "Tablica sum (tab3):<br>";
print_r($tab3);
echo "<br><br>";

function odwroc_kolejnosc_i_przepisz($zrodlo) {
    $odwrocona = array();
    $dlugosc = count($zrodlo);

    for($i = $dlugosc - 1; $i >= 0; $i--) {
        $odwrocona[] = $zrodlo[$i];
    }
    return $odwrocona;
}

$tab2 = odwroc_kolejnosc_i_przepisz($tab1);

echo "Tablica tab2 po odwróceniu kolejności tab1:<br>";
print_r($tab2);
echo "<br><br>";

function oblicz_srednia($tablica) {
    $suma = array_sum($tablica);
    $ilosc = count($tablica);
    return $suma / $ilosc;
}

$srednia = oblicz_srednia($tab1);
echo "Średnia wartości w tablicy tab1 (po modyfikacji): $srednia<br><br>";

function znajdz_maksimum($tablica) {
    return max($tablica);
}

$maksimum = znajdz_maksimum($tab3);
echo "Największa wartość w tablicy tab3: $maksimum<br>";

?>
