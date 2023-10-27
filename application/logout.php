
<!DOCTYPE html>
<html>
<head>
<title>Log out</title>
</head>
<body>
<style>
h1 {
text-align: center;
}
</style>
<h1><?php echo "PHP Test" ?></h1>

<?php
// PHP program to pop an alert
// message box on the screen

// Function definition
function function_alert($message) {

// Display the alert box
echo "<script>alert('$message');</script>";
}


// Function call
function_alert("If you have been awarded bursary, kindly visit Othaya Constituency Office immediately and collect your bursary cheque within the next seven days.");

?>
<h1><?php echo "<script type = \"text/javascript\">
        window.location = (\"/fund/dashboard/index.php\")
        </script>";
        ?>

<p style="font-weight: bold; text-align: center;"></p>

</body>
</html>