<?php 

$formData = isset($_POST['contact']) ? $_POST['contact'] : false; // shorthand code for if ? else : statement
if($formData) {
    $email = htmlspecialchars($formData['email']);
    $phoneNumber = htmlspecialchars($formData['phone']);
    $subject = htmlspecialchars($formData['subject']);
    $text = htmlspecialchars($formData['text']);

    $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail(
        'damianpietrzak1999@gmail.com',
        'Contact via portfolio: '.$subject,
        'Email: '.$email.', Telefoonnummer: '.$phoneNumber.', Tekst:'.$text
    );
}
?>
