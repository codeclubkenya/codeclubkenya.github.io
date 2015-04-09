<?php
    if (isset($_POST['submitQuiz'])) {
        if(isset($_POST['quest1'])&&isset($_POST['quest2'])&&isset($_POST['quest3']))
        {
            if(($_POST['guestName']!="")&&($_POST['guestEmail']!="")){

                $to      = 'a######@yahoo.com';
                $subject = 'Quiz Answer Submission';
                $message = "Submited by: ".$_POST['guestName']." From email: ".$_POST['guestEmail']." Answers are: ".$_POST['quest1'].", ".$_POST['quest2'].", ".$_POST['quest3'];

                $headers = 'From: j#####@live.in' . "\r\n" .
                    'Reply-To: '.$_POST["guestEmail"] . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);
                echo "Thanks for your submission. We successfully received your answers. Stay tuned.";
                //header("Location: index.html#quiz-questions?status=Success");
            }
            else{
                    echo "Please go back and answer all quiz questions";
            }
        }
        else{
                echo "Please fill all the fields and answer to all questions";
                //header("Location: index.html#quiz-questions?status=Error");
        }
    }
?>

---------------------------
<?php
if(isset($_POST['submit'])) {

$to = "dope@dope.com";
$subject = "Form Tutorial";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
$option = $_POST['radio'];
$dropdown = $_POST['drop_down'];

foreach($_POST['check'] as $value) {
$check_msg .= "Checked: $value\n";
}

$body = "From: $name_field\n E-Mail: $email_field\n $check_msg Option: $option\n Drop-Down: $dropdown\n Message:\n $message\n";

echo "Data has been submitted to $to!";
mail($to, $subject, $body);

} else {
echo "blarg!";
}
?> 