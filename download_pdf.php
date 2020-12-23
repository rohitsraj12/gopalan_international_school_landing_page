<?php

    if(isset($_POST['submit_download'])){
        $parent_name = $_POST['p_name'];
        $student_name = $_POST['s_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $syllabus = $_POST['syllabus'];

        // $to = "webdesigner@gopalancoworks.com";
        $to = "digitalmarketing@gopalanenterprises.com";
        $subject = "Download Brochure Form | GIS Landing Page";
        $message = "<p>Download pdf form</p></br>";
        $message .= "<p> Parent name: <strong>". $parent_name ."</strong></p></br>";
        $message .= "<p> Student name: <strong>". $student_name ."</strong></p></br>";
        $message .= "<p> Email: <strong>". $email ."</strong></p></br>";
        $message .= "<p> Phone number: <strong>". $phone ."</strong></p></br>";
        $message .= "<p> Selected syllabus: <strong>". $syllabus ."</strong></p></br>";
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