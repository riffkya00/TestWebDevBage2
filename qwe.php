<?php
class Bage{ // membuat class dengan nama Perulangan

function ulangan(){ // membuat method
    for( $i = 1; $i<= 3; $i++ ) { // Soal A
            // echo $i;
  			echo 'Bage '.$i."<br/>";
  		}

    for( $i = 1; $i<=5; $i++ ) { // Soal B
            echo 'Concat '.$i."<br/>";
        }

    $cafe = ["Bage", "Concat"]; // Soal C

    foreach ($cafe as $value) {
        echo $value;
        echo "<br>";
    }

    $cafe = ["Bage Concat"]; // Soal D

    foreach ($cafe as $value) {

        echo $value;
        echo "<br>";
    }
    
    for( $i = 1; $i<= 5; $i++ ) { // Soal E

          echo 'Bage Concat '.$i."<br/>";

      }
  	}

  }
$ulang = new Bage();  //instansiasi class Perulangan (object)
$ulang->ulangan(); // memanggil method Bage dari class ulangan