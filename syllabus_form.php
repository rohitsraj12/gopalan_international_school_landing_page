<?php

    if(isset($_POST['submit_syllabus'])){
        $parent_name = $_POST['p_name'];
        $student_name = $_POST['s_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $syllabus = $_POST['syllabus'];

        // $to = "webdesigner@gopalancoworks.com";
        $to = "digitalmarketing@gopalanenterprises.com"; 
        $subject = "Enquiry for " . $syllabus . " syllabus  | GIS Landing Page";
        $message = "<p>" . $syllabus . "</p></br>";
        $message .= "<p> parent name: <strong>". $parent_name ."</strong></p></br>";
        $message .= "<p> student name: <strong>". $student_name ."</strong></p></br>";
        $message .= "<p> email: <strong>". $email ."</strong></p></br>";
        $message .= "<p> phone number: <strong>". $phone ."</strong></p></br>";
        $message .= "<p> Selected syllabus: <strong>". $syllabus ."</strong></p></br>";
        $message .= "<p>Thank you,</p>";
        $message .= "<p>". $parent_name ."</p>";
        $message .= "<p>" . $email . " | " . $phone . "</p>";
        
        $headers = "From:" . $parent_name . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        // redirect to thanks page
        header("location:thank-you.html");
    }