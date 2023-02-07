<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week7 Day1 Exercise XP</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
        class MyClass {
        public function  __construct() 
        {
        echo 'MyClass class has initialized !'."\n";
        }
        }
        $userclass = new MyClass;
    ?>
    <hr>
    <h1>Exercise 2</h1>
    <?php
        class factorial_of_a_number
        {
        public $_n;
        public function  __construct($n)
        {
            if (!is_int($n))
            {
                throw new InvalidArgumentException('Not a number or missing argument');
            }
            $this->_n = $n;
            }
        public function result()
            {
            $factorial = 1;
            for ($i = 1; $i <= $this->_n; $i++)
            {
                $factorial *= $i;
            }
            return $factorial;
            }
        }

        $newfactorial = New factorial_of_a_number(5);
        echo $newfactorial->result();
        ?>
            <hr>
    <h1>Exercise 3</h1>
    <?php
        class array_sort
        {
            public $_asort;
            
            public function __construct(array $asort)
            {
                $this->_asort = $asort;
            }
            public function alhsort()
            {
                $sorted = $this->_asort;
                sort($sorted);
                return $sorted;
            }
        }
        $sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
        print_r($sortarray->alhsort())."\n";
    ?>
    <hr>
    <h1>Exercise 4</h1>
    <?php
        // Creates DateTime objects
        $datetime1 = date_create('2016-06-01');
        $datetime2 = date_create('2018-09-21');
        
        // Calculates the difference between DateTime objects
        $interval = date_diff($datetime1, $datetime2);
        
        // Printing result in years & months format
        echo $interval->format('%R%y years %m months');
    ?>
    <hr>
</body>
</html>
