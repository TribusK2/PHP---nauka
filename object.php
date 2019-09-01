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
        class Book {
            var $name;
            var $seccondName;
            var $points;
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

        $book1 = new Book("Krzysztof ", "Rytlewski ", 30);
        
        print_r($book1);
        echo "<br/>";
        echo $book1->pass();
    ?>
</body>
</html>