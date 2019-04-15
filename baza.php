<?php

$connect=new mysqli("localhost", "root", "", "uzytkownicy") or die("Blad");

$wynik=$connect->query("SELECT * FROM dane");
echo "Ostatnio dodani użytkownicy: </br>";
if($wynik->num_rows >0)
{
    while($wiersz=$wynik->fetch_assoc()){
        
        echo " ".$wiersz["name"]." ";
        echo " ".$wiersz["email"]."  ";
        echo " ".$wiersz["message"]."</br>";

    }
}else{
    echo "Baza danych jest pusta";
}

$connect->close();
