<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Sanders Lee
 */
class Student {
    
    /*
     * names the variables held by the Student class, has surname, first name,
     * emails, and grades
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /*
     * function for adding an email, takes an email type (as the reference key
     * within the array) and the actual email
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /*
     * function for adding a grade
     */    
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /*
     * takes previously stored grades and returns an average from them
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)   // goes through grades using foreach
            $total += $value;
        return $total / count($this->grades);
    }
    
    /*
     * returns a simply formatted string describing a student's details
     * including first name, surname, average grade, and emails.
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname; // full name
        $result .= ' ('.$this->average().")\n"; // grade average
        foreach($this->emails as $which=>$what) // emails sorted by email-type
            $result .= $which . ': '. $what. "\n";  // in descending order
        $result .= "\n";    // always attach a newline character at the end
        return '<pre>'.$result.'</pre>';    // returns string enclosed by tags
    }
}
