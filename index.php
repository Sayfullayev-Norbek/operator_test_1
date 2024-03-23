<?php
    //Operatorlar bo'yicha vazifalar 1-to'plam.

    // Takrorlamaslik uchun
    $qator = "<br>";
    $javob = "-masala Javob: ";

    // 1-masala.
    $son = 100;
    echo "1$javob " . $son . $qator;

    // 2-masala.
    $x = 10;
    $y = 15;
    echo "2$javob " . "x=$x" . "  y=$y" . $qator;

    // 3-masala.
    $x = 10;
    $y = 15;
    $z = $x + $y;
    echo "3$javob " . $z . $qator;

    // 4-masala.
    $a = 10;
    $b = 15;
    // Matematik amallar.
    $z = $a+$b;
    $x = $a-$b;
    $y = $a*$b;
    $c = $a/$b;
    echo "4$javob " . "Yigindisi=" . $z . ", Ayirmasi=" . $x . ", Ko`paytmasi=" . $y . ", Bo`linmasi=" . $c . $qator;

    // 5-masala.
    $a = 10;
    $b = 15;
    $c = 20;
    // Matematik amallar.
    $z = $a+$b+$c;
    $x = $a-$b-$c;
    $y = $a*$b*$c;
    echo "5$javob " . "Yigindisi=" . $z . ", Ayirmasi=" . $x . ", Ko`paytmasi=" . $y . $qator;

    // 6-masala.
    // a = 1-son, b = 2-son, c = natija.
    $a = 656544;
    $b = 25;
    $c = $a%$b;
    echo "6$javob " . $c . $qator;

    // 7-masala.
    // a = 1-son, b = 2-son, c = qoldiq, d = natija.
    $a = 545984;
    $b = 118;
    $c = $a%$b; // c = 116
    $d = $a+$c;
    echo "7$javob " . $d;
?>
