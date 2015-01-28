<?php
echo "Hello World!</br>";
class Foo
{
    function fo($name="world!")
    {
    echo "Hello $name!<br/>";
    }
}
class Rechner
{
    function quadrat($zahl)
    {
        for($i=0;$i<=$zahl;$i++)
        {
            echo "Die Quadratzahl von $i ist ".($i*$i)."</br>";
        }
    }
    function printfakultaet($zahl)
    {
        $returnstr="";
        for ($i = 0; $i <= $zahl; $i++) {
            $returnstr .= "Die Fakultaet von $i ist " . $this->fakultaet($i) . "</br>";
        }return $returnstr;
    }
    function fakultaet($zahl)
    {
        if($zahl > 1)
            return $zahl * $this->fakultaet($zahl-1);
        else
            return 1;
    }
}


$foo = new Foo();
$rechne = new Rechner();
$foo->fo("Bob");
echo "<hr/>";
echo $rechne->quadrat(5);
echo "<hr/>";
echo $rechne->printfakultaet(5);