<?php
    require_once './class/Person.php';
    $person = new User();
    $person->setName('Jan');
    echo $person->name;
    /*dodaj metodę, która umożliwia ustawienie wszystkich składowych np nazwisko, dodaj do klasy możliwosć wieku i wzrostu (możliwość dodanie ich), metoda która zwróci wszystkie dane w formacie:
        Dane:
        Imie: 
        nazwisko:
        Wiek ... LAT
        Wzrost cm
        */
        
?>
