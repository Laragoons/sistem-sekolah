<?php
    namespace App\Controllers;
    require_once '../app/core/Controller.php';
    require_once '../app/models/Student.php';

    use App\core\Controller;
    use App\Models\Student;
    class Studentcontroller extends Controller
    {

        public function index()
        {
            $this->view('students.index');
        }

        public function create()
        {
            $this->view('students.create');
        }
        
        public function show(string $id)
        {
            $this->view('students.show');
        }

                public function edit(string $id)
        {
            $this->view('students.edit');
        }

    }