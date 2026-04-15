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
            $studentModel = New Student();
            $students = $studentModel -> getStudents();

            $this->view('students.index', [
                'students' => $students
            ]);
        }

        public function create()
        {
            $this->view('students.create');
        }
        
        public function show(string $id)
        {
            $id = intval($id);

            $studentModel = new Student();
            $student = $studentModel->getStudent($id);

            $this->view('students.show', [
                'student' => $student
            ]);
        }

                public function edit(string $id)
        {
            $this->view('students.edit');
        }

    }