<?php
class Person {
    private $name;
    
    function set_name($new_name) {
        $this->name = $new_name;
    }
    
    function get_name() {
        return $this->name;
    }
}
?>

<?php
$person1 = new Person();
// Menetapkan nama menggunakan method set_name()
$person1->set_name('Lukman Hakim');

// Mengambil nama menggunakan method get_name()
echo "Hai " . $person1->get_name();
?>