<?php
//check if the sbmit button is clicked
    if(isset($_POST['submit'])){
        //collect the inputed variable from the form and use the trim() to remove whitespaces before or after th inputed value
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);
        //declare wher you want the mail to be sent to i.e the sender's email address
        $myMail = "maduagwufrancis@yahoo.com";
        //declare the header of the email
        $header = "From: " . $email;
        if(mail($myMail, $subject, $message, $header)){
            header("location: index.php?emailsentsuccessfully");
        }else{
            print "email sending failed!";
        }
    }else{
        print "Please click the the submit button";
    }
?>