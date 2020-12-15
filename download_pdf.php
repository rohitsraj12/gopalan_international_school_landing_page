<?php

    if(isset($_POST['submit_download'])){
        $parent_name = $_POST['p_name'];
        $student_name = $_POST['s_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // $to = "webdesigner@gopalancoworks.com";
        $to = "digitalmarketing@gopalanenterprises.com"; 
        $subject = "Download Brochure Form | GIS Landing Page";
        $message = "<p>Download pdf form</p></br>";
        $message .= "<p> parent name: <strong>". $parent_name ."</strong></p></br>";
        $message .= "<p> student name: <strong>". $student_name ."</strong></p></br>";
        $message .= "<p> email: <strong>". $email ."</strong></p></br>";
        $message .= "<p> phone number: <strong>". $phone ."</strong></p></br>";
        $message .= "<p>Thank you,</p>";
        $message .= "<p>". $parent_name ."</p>";
        $message .= "<p>" . $email . " | " . $phone . "</p>";
        
        $headers = "From:" . $parent_name . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        // redirect to thanks page
        header("location:https://www.gopalanschool.com/international/pdf/brochure.pdf");
    }