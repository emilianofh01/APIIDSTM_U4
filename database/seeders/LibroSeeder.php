<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libro1 = new Book();
        $libro1->name = "El Principito";
        $libro1-> author = "Antoine de Saint-Exupéry";
        $libro1-> year = 1943;
        $libro1->save();

        $libro2 = new Book();
        $libro2->name = "Diario de Ana Frank";
        $libro2-> author = "Ana Frank";
        $libro2-> year = 1947;
        $libro2->save();
    }
}
