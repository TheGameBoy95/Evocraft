<?php
/* Set e-mail recipient */
$myemail  = "x-evocraft@gmail.com";

/* Check all form inputs using check_input function */
if (isset($_GET["submit"])) {
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
}
else {
  echo $myError;
}
$subject = "Report From X-EvoCraft website";

/* If input is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("L'indirizzo mail non e valido.");
}
If (preg_match( '/[a-zA-Z]/', $cords )) {
    show_error("Coordinates not valid.");
    }
/* Let's prepare the message for the e-mail */
$message = "Salve, questo mail e stato generato automaticamente dal sito x-evocraft.eu. Il contenuto del messaggio e il seguente...

Name: $name
E-mail: $email

In-Game Coordinates: $cords
Message: $message

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
echo "<script>
window.location.href='index.html';
alert('Thanks, your report has been submitted.');
</script>";
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>
