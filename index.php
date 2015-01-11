<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php'); // grabbing the Student class file,
                                // first letter is capitalized like the file
                                // in case system is case-sensitive

        $students = array();    // create an array of students
        
        /* 
         * creates and adds first student into $students array
         */
        $first = new Student(); // creates first student
        $first->surname = "Doe";    // assign surname and first name
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');   // add emails and e-mail types,
        $first->add_email('work','jdoe@mcdonalds.com'); // notice e-mail types are
                                                        // user-determined
        $first->add_grade(65);  // add grades for getting average grade
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first; // add first student into current array with
                                    // a user-determined key for referencing
                                    // and sorting
        
        /* 
         * adds second student into array, see comments in the creation
         * of the first student for details.
         */
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        /* 
         * adds third student into array, see comments in the creation
         * of the first student for details. This one is using the coder's 
         * own name and emails.
         */
        $third = new Student();
        $third->surname = "Lee";
        $third->first_name = "Sanders";
        $third->add_email('home','slee_colonel@hotmail.com');
        $third->add_email('school','a00888502@bcit.ca');
        $third->add_grade(66); // these grades are made-up, by the way
        $third->add_grade(73);
        $third->add_grade(89);
        $students['s789'] = $third;
        
        ksort($students);   // sort students by their keys
        
        foreach($students as $student)
            echo $student->toString();  // print out each student's details
                                        // onto browser

        ?>
    </body>
</html>
