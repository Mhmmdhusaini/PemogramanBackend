<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Properti untuk menyimpan daftar hewan
    // Property animals (array)
    public $animals;
    public $name;

    // Constructor untuk mengisi data awal animals
    public function __construct()
    {
        $this->animals = ['kambing', 'kucing', 'kerbau'];
    }

    // Method untuk menampilkan seluruh data animals
    public function index()
    {
        echo "Menampilkan semua data hewan ";
        foreach ($this->animals as $index => $animals) {
            echo $index + 1 . ". " . $animals ;
        }
    }

    // Method untuk menambahkan hewan baru
    public function store(Request $request)
    {
        
        echo "Menambahkan hewan baru: " . $request->name ;
        // Mendapatkan nama hewan dari request
        $animalName = $request->input('name');

        // Validasi apakah input berupa string
        if (is_string($animalName)) {
            array_push($this->animals, $animalName); // Tambahkan hewan baru ke array
        }


        // Setelah menambahkan hewan, panggil fungsi index() untuk menampilkan data terbaru
        $this->index();
    }

    // Method untuk memperbarui data hewan
    public function update(Request $request, $id)
{
    // Pastikan id berada dalam rentang index array
    if (isset($this->animals[$id])) {
        // Memperbarui data hewan dengan yang baru
        echo "Memperbarui hewan dengan id ke-$id menjadi: " . $request->name ;
        $this->animals[$id] = $request->input('name'); // Ganti dengan inputan baru
        
        // Tampilkan daftar hewan yang sudah diperbarui
        $this->index();
    }
}

    // Method untuk menghapus data hewan
    public function destroy($id)
    {
        if (isset($this->animals[$id])) {
            echo "Menghapus data hewan dengan id ke-$id, yaitu:" . $this->animals[$id] ;
            array_splice($this->animals, $id, 1);
        }

        $this->index();
    }
}