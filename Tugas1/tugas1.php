<?php

class Animal {
    // Property animals (array)
    public $animals;

    // Constructor untuk mengisi data awal hewan
    public function __construct() {
        $this->animals = ['Burung','Ayam','Kucing'];
    }

    // Method untuk menampilkan seluruh data hewan
    public function index() {
        foreach ($this->animals as $index => $animals) {
        }
    }

    // Method untuk menambahkan hewan baru
    public function store($animal) {
        if (is_string($animal)) {
            array_push($this->animals, $animal);
        }
    }

    // Method untuk memperbarui data hewan
    public function update($index, $newAnimal) {
        if (isset($this->animals[$index])) {
            $oldAnimal = $this->animals[$index];
            $this->animals[$index] = $newAnimal;
        }
    }

    // Method untuk menghapus data hewan
    public function destroy($index) {
        if (isset($this->animals[$index])) {
            $deletedAnimal = $this->animals[$index];
            array_splice($this->animals, $index, 1);
            $this->animals = array_values($this->animals);
        }
    }
}

$animal = new Animal();

// Menampilkan seluruh data animals
echo '<br> Menampilkan seluruh data hewan ';
$animal->index();

print_r($animal->animals);
echo PHP_EOL;

// Menambahkan hewan baru
echo '<br> Menambahkan data hewan baru ';
$animal->store('Zebra');
$animal->index();

print_r($animal->animals);
echo PHP_EOL;

// Memperbarui data hewan
echo '<br> Mengupdate data hewan ';
$animal->update(0, 'Hamster');
$animal->index();

print_r($animal->animals);
echo PHP_EOL;


// Menghapus data hewan
echo '<br> Menghapus data hewan ';
$animal->destroy(1);
$animal->index();

print_r($animal->animals);
echo PHP_EOL;