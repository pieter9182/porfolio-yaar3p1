<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formData = isset($_POST['contact']) ? $_POST['contact'] : false;
    
    if ($formData) {
        $email = htmlspecialchars($formData['email']);
        $phoneNumber = htmlspecialchars($formData['phone']);
        $subject = htmlspecialchars($formData['subject']);
        $text = htmlspecialchars($formData['text']);
        
        $headers = 'From: ' . $email . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();
        
        $mailSent = mail(
            'damianpietrzak1999@gmail.com',
            'Contact via portfolio: ' . $subject,
            'Email: ' . $email . "\n" .
            'Phone Number: ' . $phoneNumber . "\n" .
            'Message: ' . $text,
            $headers
        );
        
        if ($mailSent) {
            echo "Form submission successful.";
        } else {
            echo "Failed to send email. Please try again later.";
        }
    } else {
        echo "Form data is missing.";
    }
} else {
    echo "Invalid request method.";
}