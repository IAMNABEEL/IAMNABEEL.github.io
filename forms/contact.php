  <?php 
  if (isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    if ($name == '' || $email == '' || $subject == '' || $message == '' )
    {
        echo "All fields are required";
    }
    else
    {

        $to = "nrana4677@gmail.com";
        $subject = "Contcat Us.";
        $message = "<html><body>";
        $message .= "<p>Name: " . $_POST["name"] . "</p>";
        $message .= "<p>Email: " . $_POST["email"] . "</p>";
        $message .= "<p>Subject: " . $_POST["subject"] . "</p>";
        $message .= "<p>Message: " . $_POST["message"] . "</p>";
        $message .= "</body></html>";
        $headers = "From: ".$email;

        if(mail($to, $subject, $message, $headers))
        {
           echo "Sent Successfully";
        }
        else
        {
          echo "Not sent";
        }
    } 
}
?>

