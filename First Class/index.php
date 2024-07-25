<?php
    $sub1 = rand(0, 100);
    $sub2 = rand(0, 100);
    $sub3 = rand(0, 100);

    $percent = (($sub1 + $sub2 + $sub3)/300)*100;
    // $formatted_number = round_to_2dp($percent);
    

    echo "Subject 1: " . $sub1 . "<br>Subject 2: " . $sub2 . "<br>Subject 3: " . $sub3 . "\n";
    echo "<br>";

    if($sub1<40 || $sub2<40 || $sub3<40){
        echo "<br><h3 style='color: red'>Congo You Failed!</h3>";
    } else{
        echo "<br><h3 style='color: green'>Congo You Passed!</h3>";
        echo "<br>Precentage: " . number_format((float)$percent, 2) . "%";
    }
?>