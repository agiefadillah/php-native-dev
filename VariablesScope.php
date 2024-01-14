<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 5; // global scope

    function myTest()
    {
        $x = 5;
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";

    // ------------------

    $x = 5;
    $y = 10;

    function myTest2()
    {
        global $x, $y;
        $y = $x + $y;
    }

    myTest2();
    echo $y;


    //------------------

    $x = 5;
    $y = 10;

    function myTest3()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest3();
    echo $y;

    //------------------

    function myTest4()
    {
        static $x = 0;
        echo $x;
        $x++;
    }

    myTest4();
    myTest4();
    myTest4();

    //------------------

    $x = "Hello world!";
    $y = 'Hello world!';

    var_dump($x);
    echo "<br>";
    var_dump($y);

    ?>


</body>

</html>