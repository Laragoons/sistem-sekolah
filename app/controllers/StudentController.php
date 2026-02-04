<?php
    namespace App\Controllers;

    class Studentcontroller
    {

        public function index()
        {
            echo"<h1>Daftar Siswa</h1>";
            echo"<p>Menampilkan Daftar Siswa</p>";
        }

        public function create()
        {
            echo"<h1>Tambah Siswa</h1>";
            echo"<p>Menampilkan form tambah Siswa</p>";
        }

        public function show(string $id)
        {
            echo 'Detail Siswa';
            echo "<p>Menampilkan detail siswa ID: {$id}</p>";
        }

    }