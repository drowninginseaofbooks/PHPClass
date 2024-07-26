<?php
    //arrary init methods

    //methodOne(IndexedArray)
    echo "<br><br>Indexed Array:<br>";
    $array1 = array("1", "2", "3", 4);
    var_dump($array1);

    //methodTwo(Assosiative Array)
    echo "<br><br>Assosiative Array:<br>";
    $array2 = array("Name"=>"Terminator", "Type"=>"Sentient");
    var_dump($array2);

    //methodThree(MultiDimentional Array)
    echo "<br><br>MultiDimentional Array:<br>";
    $array3 = array(array(1, 2, 3, 4), array(5, 6, 7, 8));
    var_dump($array3);

    //methodFour(Assosiative with Multiple Values on a Column)
    echo "<br><br>Assosiative with Multiple Values on a Column:<br>";
    $student = array(array("Name"=>array("Rohan Sunuwar", "Sugam Prasai"), "Department"=>array("BIT", "BIT"), "Student_ID"=>array("6085", "6105")));
    var_dump($student);
?>