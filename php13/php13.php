<?php
class zmogus {
    public $vardas;
    public $pavarde;

    public function duomenys(){
        return 'Mano vardas ' . $this -> vardas . ', o pavarde ' . $this -> pavarde . '<br>';
    }
}

$zmogus1 = new zmogus();
$zmogus2 = new zmogus();

$zmogus1 -> vardas = "Petras";
$zmogus1 -> pavarde = "Petraitis";

$zmogus2 -> vardas = "Antanas";
$zmogus2 -> pavarde = "Antanaitis";

echo $zmogus1 -> duomenys();
echo $zmogus2 -> duomenys();

?>
