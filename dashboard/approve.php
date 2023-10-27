<?php
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
$mailer = new PHPMailer(true);

// Set the mailer to use SMTP
$mailer->isSMTP();

// Configure SMTP settings
$mailer->Host = 'smtp.gmail.com';
$mailer->SMTPAuth = true;
$mailer->Username = 'hopewanjeri0@gmail.com';
$mailer->Password = 'hhlytdljqphgfbhg';
$mailer->SMTPSecure = 'tls'; // or 'ssl' if required
$mailer->Port = 587; // or the appropriate SMTP port

// date_default_timezone_set("Africa/Nairobi");
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'fund');


//================ EMAIL CONTENT============================-
$approvalMsg = "Dear Applicant, 
You have been awarded bursary.Kindly visit Othaya Constituency office to pick awarded bursary cheque.  Congratulations !";
$rejectionMsg = "Dear Applicant,
Sorry to inform you that you have not been awarded bursary. ";
$subject = " Bursary Application Update";
$headers = "From: hopewanjeri0@gmail.com";
//-----------------------------------------------------------


//====== Approve Funds ============//
if (isset($_POST['approved-btn'])) {
    $id = mysqli_real_escape_string($db, $_POST['apid']);
    $tot2 = mysqli_real_escape_string($db, $_POST['tot2']);
    $to_email = mysqli_real_escape_string($db, $_POST['mail']);

    $q1 = "UPDATE applicationform SET disbandedamount='$tot2', status='Approved' WHERE id='$id'";

    //-------------- update balance after approval---------------//
    // fetch current balance  in DB.
    $data_fetch_query = "SELECT * FROM cdfofficial where Username= 'admin' ";
    $data_result = mysqli_query($db, $data_fetch_query);
    if ($data_result->num_rows > 0) {
        while ($row = $data_result->fetch_assoc()) {
            $Username = $row["Username"];
            $MoneyAllocated = $row["MoneyAllocated"];
            $disbanded = $row["disbanded"];
            $balance = $row["balance"];
        }
    }

    // calculate for new balance after approval
    $new_bal = $balance - $tot2;
    $new_disb = $disbanded + $tot2;

    if (mysqli_query($db, $q1)) {

        // update balance
        $qu = "UPDATE cdfofficial SET disbanded='$new_disb', balance='$new_bal' WHERE Username='admin' ";
        mysqli_query($db, $qu);

        // send mail
        if (mail($to_email, $subject, $approvalMsg, $headers)) {
            echo "Email successfully sent to $to_email ...";
        } else {
            echo "Email sending failed...";
        }
        //header('location: login1.php');
    }
}

//====== Disaprove Approve Funds ============//
if (isset($_POST['disapproved-btn'])) {
    $id = mysqli_real_escape_string($db, $_POST['apid']);
    $to_email = mysqli_real_escape_string($db, $_POST['mail']);

    $q1 = "UPDATE applicationform SET disbandedamount='0.0', status='Disaproved' WHERE id='$id'";

    if (mysqli_query($db, $q1)) {

        // send mail
        if (mail($to_email, $subject, $rejectionMsg, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
        // header('location: login1.php');
    }
}
?>
