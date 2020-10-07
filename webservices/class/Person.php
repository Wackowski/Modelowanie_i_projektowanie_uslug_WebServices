<?php
    class User{
        public $name,$surname,$colour;
        public function setName($value){
            $this->name = $value;
        }
        public function a($value2){
            $this->surname=$value2;
        }  
        public function getData(){
            $data = <<<DATA
            Dane:
            Imie: $this->name<br>;
            Nazwisko: $this->surname<br>;
DATA;
return $data;
        }

    
}
    $user1 = new User();
    $user1->setName("Anna");
    $user1->a("Kowalska");
    echo $user1->getData();
    //metoda dane w heredoc
    // nazwisko i kolor
    //metoda wszystkie dane
?>