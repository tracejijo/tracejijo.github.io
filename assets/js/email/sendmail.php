<?php
if(isset($_POST['contactName'])){

    $fn=$_POST['contactName'];
    $email=$_POST['contactEmail'];
    $pw=$_POST['contactSubject'];
    $mn=$_POST['contactMessage'];


    include "classes/class.phpmailer.php"; // include the class name
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "";
    $mail->Password = "";
    $mail->SetFrom("");
    $mail->Subject = "Enquiry from Personal site";
    // $mail->Body = "Dear Jijo,<br><p>We have got one new Enquiry through our jijoalexander.me, The details provided by visitor is as follows.</p>".
    //                 "<br>Full name : $fn<br> Email:$email<br>Subject:$pw<br>Message:$mn<br>"; // body of mail
    $mail->Body = "

    <div id='container'>

      <div id='maincol'>
        <div class='rule' >
          <h1 >Welcome to personal web mail</h1>
        </div>
        <p><strong>Dear Jijo,</strong> We have got one new Enquiry through our <a href='http://www.jijoalexander.me' target='_blank'>jijoalexander.me</a>, The details provided by visitor is as follows.</p>
        <h5>Name : $fn</h5>
        <h5>Email : $email</h5>
        <h5>Subje : $pw</h5>
        <h5>Mesg : $mn</h5>
        <div id='bttmbar' > <span id='copyright'> Copyright &copy; 2005. Your copyright protected.</span>
          <ul id='bttmnav'>
            <li><a href='http//www.jijoalexander.me' title='Link to site'>Jijo Alexander</a></li>

          </ul>
        </div>
      </div>
    "; // body of mail
    $mail->AddAddress("");

     if(!$mail->Send()){
        echo "0";//"Mailer Error: " . $mail->ErrorInfo;
    }
    else{
        echo 1;
    }



}
else
    die();

?>
