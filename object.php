<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        class Student {
            // var $name;
            public $name; //public = var
            // var $seccondName;
            public $seccondName; //public = var
            // var $points;
            public $points; //public = var
            function __construct($n, $s, $p){
                $this->name = $n;
                $this->seccondName = $s;
                $this->points = $p;
            }
            function pass(){
                if($this->points >= 20){
                    return "true";
                }
                return "false";
            }
        };

        $student1 = new Student("Krzysztof ", "Rytlewski ", 30);
        
        print_r($student1);
        echo "<br/>";
        echo $student1->pass();
    ?>
</body>
</html>