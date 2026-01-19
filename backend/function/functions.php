<?php
//require_once('../PHPMailer/class.phpmailer.php');
//require_once('../PHPMailer/class.smtp.php');
// require_once('../PHPMailer/mail_test.php');
// require '../mailchimp-api-master/src/MailChimp.php';

require '../vendor/PHPMailer/src/Exception.php';
require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';
require '../vendor/autoload.php';
require '../config/dbc.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Name Email Phone Message Form
function nameEmailPhoneMessageForm($payload, $con)
{
     $blockedNames = ["LouisWam", "Falana"];
    $blockedEmails = ["test@youpmail.om", "test@flana.com"];
    $blockedWords = ["www.tinyurl.com", "https://telegra.ph/"];
    // Get form values
    $formName = trim(mysqli_real_escape_string($con, $payload['name']));
    $formPage = trim($_POST['page']);
    $formDate = date("Y-m-d H:i:s");
    // Blocked name check
    if (in_array($formName, $blockedNames)) {
        die("<p class='error-message'>This name is not allowed.</p>");
    }
    // Blocked email check
    if (in_array($email, $blockedEmails)) {
        die("<p class='error-message'>This email is blocked.</p>");
    }
    // Blocked words in message check
    foreach ($blockedWords as $word) {
        if (strpos($message, $word) !== false) {
            die("<p class='error-message'>Your message contains blocked links.</p>");
        }
    }
    // Spam check: 1 submission per email per minute
    $checkEmail = mysqli_query($con, "SELECT * FROM leads WHERE email = '$formEmail' AND TIMESTAMPDIFF(MINUTE, created, NOW()) < 1");
    if (mysqli_num_rows($checkEmail) > 0) {
        die("<p class='error-message' id='spamError'>You are a spammer. Please wait before resubmitting the form.</p>");
    }
    
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");

            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';

            sendEmail($emailContent);

            // SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


function bpsPage($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");

            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));


            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';

            sendEmail($emailContent);

            // SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function bookps($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");

            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));


            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';

            sendEmail($emailContent);

            // SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


//Name Email Phone Message Form modal form
function modalForm($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");

            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';

            sendEmail($emailContent);

            // SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

//Name Email Phone Book Title Message Form modalpopup form
// function modalFormPopUp($payload, $con)
// {

//     if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
//         echo 'Empty Request';
//     } else {
//         try {
//             //DB FIRST
//             $page = $_POST['page'];
//             $date = date("Y-m-d H:i:s");

//             $name = mysqli_real_escape_string($con, $payload['name']);
//             $email = mysqli_real_escape_string($con, $payload['email']);
//             $phone = mysqli_real_escape_string($con, $payload['phone']);
//             $book_title = mysqli_real_escape_string($con, $payload['book_title']);
//             $message = mysqli_real_escape_string($con, clean($payload['message']));
//             mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$book_title','$message')") or die(mysqli_error($con));

//             //EMAIL NOTIFICATION
//             $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
//             $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
//             $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
//             $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
//             $emailContent .= '<p>Book Title : ' . $payload['book_title'] . '</p>';
//             $emailContent .= '<p>Message : ' . $message . '</p>';

//             sendEmail($emailContent);

//             // SLACK NOTIFICATION
//             $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Book Title : " . $payload['book_title'] . " \n Message : " . $message));
//             sendSlack($slackContent);
//         } catch (Exception $e) {
//             die($e->getMessage());
//         }
//     }
// }

function modalFormPopUp($payload, $con) {
    // ======================
    // SECURITY CONFIGURATION
    // ======================
    $blockedPatterns = [
        'urls' => ["tinyurl.com", "telegra.ph", "proffseoru", "http"],
        'keywords' => ["ГосЛото", "билет", "выигрыш", "тираж", "SEO Продвижение", "Сайтов"],
        'email_domains' => ["@mail.ru", "@yok", "@flana.com", "@mailinator.com", "@youpmail.om","@fmallard.com"],
        'names' => ["LouisWam", "Falana", "Buddybreaf"]
    ];

    // =================
    // INPUT PROCESSING
    // =================
    $formName = trim(mysqli_real_escape_string($con, $payload['name']));
    $formEmail = trim(mysqli_real_escape_string($con, $payload['email']));
    $formPhone = trim(mysqli_real_escape_string($con, $payload['phone']));
    $formBookTitle = trim(mysqli_real_escape_string($con, $payload['book_title']));
    $formMessage = trim(mysqli_real_escape_string($con, $payload['message']));
    // $formPage = trim($_POST['page']);
    $formPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct Traffic';
    $formDate = date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];

    // ================
    // SECURITY CHECKS
    // ================
    // Check all fields for blocked URLs
    foreach ($blockedPatterns['urls'] as $url) {
        $fieldsToCheck = [$formName, $formEmail, $formBookTitle, $formMessage];
        foreach ($fieldsToCheck as $field) {
            if (stripos($field, $url) !== false) {
                logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, $ip, "Blocked URL: $url");
                die("<p class='error-message'>Submission contains prohibited links.</p>");
            }
        }
    }

    // Check for spam keywords
    foreach ($blockedPatterns['keywords'] as $keyword) {
        $fieldsToCheck = [$formName, $formBookTitle, $formMessage];
        foreach ($fieldsToCheck as $field) {
            if (stripos($field, $keyword) !== false) {
                logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, $ip, "Blocked keyword: $keyword");
                die("<p class='error-message'>Submission contains prohibited content.</p>");
            }
        }
    }

    // Validate email domain
   // Validate email domain
    foreach ($blockedPatterns['email_domains'] as $domain) {
        if (preg_match('/' . preg_quote($domain, '/') . '$/i', $formEmail)) {
            logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, $ip, "Blocked domain: $domain");
            die("<p class='error-message'>Email domain not allowed.</p>");
        }
    }



    // Validate phone number format
    // if (!preg_match('/^\+?\d{7,15}$/', $formPhone)) {
    //     logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, $ip, "Invalid phone format");
    //     die("<p class='error-message'>Invalid phone number format.</p>");
    // }

    // ================
    // RATE LIMITING
    // ================
    // 3 submissions per IP per hour
    // $checkIP = mysqli_query($con, 
    //     "SELECT * FROM leads 
    //     WHERE email = '$formEmail' 
    //     AND TIMESTAMPDIFF(MINUTE, created, NOW()) < 1");
    // if (mysqli_num_rows($checkIP) >= 3) {
    //     logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, $ip, "Rate limit exceeded");
    //     die("<p class='error-message'>Too many submissions. Try again later.</p>");
    // }

    // ====================
    // DATABASE INSERTION
    // ====================
    try {
        mysqli_query($con, "INSERT INTO leads (page, date, name, email, phone, book_title, message) VALUES ('$formPage', '$formDate', '$formName', '$formEmail', '$formPhone', '$formBookTitle', '$formMessage')") or die(mysqli_error($con));

        // ==================
        // NOTIFICATIONS
        // ==================
        $emailContent = "New Lead Submission:\n\n"
            . "Page: $formPage\n"
            . "Name: $formName\n"
            . "Email: $formEmail\n"
            . "Phone: $formPhone\n"
            . "Book Title: $formBookTitle\n"
            . "Message: $formMessage\n"
            . "IP: $ip";

        sendEmail($emailContent); // Uncomment when ready

       // Prepare Slack content
            $slackContent = json_encode([
                "text" => "Hi Team, \n\t We have received a new lead. Please check the following details. \n\n" .
                          "Form_type : " . "Modal Form\n" .
                          "Page : " . $formPage . "\n" .
                          "Name : " . $formName . "\n" .
                          "Email : " . $formEmail . "\n" .
                          "Phone : " . $formPhone . "\n" .
                          "Book Title : " . $formBookTitle . "\n" .
                          "Message : " . $formMessage
            ]);

            // Send Slack notification
            sendSlack($slackContent);

    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}


//Name Email Phone Message Book Title Form
// function nameEmailPhoneBookMessageForm($payload, $con)
// {
//     $blockedNames = ["LouisWam", "Falana","www.tinyurl.com"];
//     $blockedEmails = ["test@youpmail.om", "test@flana.com"];
//     $blockedWords = ["www.tinyurl.com", "https://telegra.ph/"];
//     // Get form values
//     $formName = trim(mysqli_real_escape_string($con, $payload['name']));
//     $formPage = trim($_POST['page']);
//     $formDate = date("Y-m-d H:i:s");
//     // Blocked name check
//     if (in_array($name, $blockedNames)) {
//         die("<p class='error-message'>This name is not allowed.</p>");
//     }
//     // Blocked email check
//     if (in_array($email, $blockedEmails)) {
//         die("<p class='error-message'>This email is blocked.</p>");
//     }
//     // Blocked words in message check
//     foreach ($blockedWords as $word) {
//         if (strpos($message, $word) !== false) {
//             die("<p class='error-message'>Your message contains blocked links.</p>");
//         }
//     }
    

//     // Spam check: 1 submission per email per minute
//     $checkEmail = mysqli_query($con, "SELECT * FROM leads WHERE email = '$formEmail' AND TIMESTAMPDIFF(MINUTE, created, NOW()) < 1");
//     if (mysqli_num_rows($checkEmail) > 0) {
//         die("<p class='error-message' id='spamError'>You are a spammer. Please wait before resubmitting the form.</p>");
//     }

//     if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
//         echo 'Empty Request';
//     } else {
//         try {
//             //DB FIRST
//             $page = $_POST['page'];
//             $date = date("Y-m-d H:i:s");

//             $name = mysqli_real_escape_string($con, $payload['name']);
//             $email = mysqli_real_escape_string($con, $payload['email']);
//             $phone = mysqli_real_escape_string($con, $payload['phone']);
//             $book_title = mysqli_real_escape_string($con, $payload['book_title']);
//             $message = mysqli_real_escape_string($con, $payload['message']);
//             mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,book_title,message) VALUES('$page','$date','$name','$email','$phone','$book_title','$message')") or die(mysqli_error($con));

//             //EMAIL NOTIFICATION
//             $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
//             $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
//             $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
//             $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
//             $emailContent .= '<p>Book Title : ' . $payload['book_title'] . '</p>';
//             $emailContent .= '<p>Message : ' . $message . '</p>';

//             // sendEmail($emailContent);

//             // SLACK NOTIFICATION
//             $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Book Title : " . $payload['book_title'] . " \n Message : " . $message));
//             // sendSlack($slackContent);
//         } catch (Exception $e) {
//             die($e->getMessage());
//         }
//     }
// }

// function nameEmailPhoneBookMessageForm($payload, $con) {
//     // Blocked names, emails, and keywords
//     $blockedNames = ["LouisWam", "Falana", "www.tinyurl.com"];
//     $blockedEmails = ["test@youpmail.om", "test@flana.com", "@malintor", "@yok"];
//     $blockedWords = ["www.tinyurl.com", "https://telegra.ph/"];

//     // Get form values
//     $formName = trim(mysqli_real_escape_string($con, $payload['name']));
//     $formEmail = trim(mysqli_real_escape_string($con, $payload['email']));
//     $formPhone = trim(mysqli_real_escape_string($con, $payload['phone']));
//     $formBookTitle = trim(mysqli_real_escape_string($con, $payload['book_title']));
//     $formMessage = trim(mysqli_real_escape_string($con, $payload['message']));
//     $formPage = trim($_POST['page']);
//     $formDate = date("Y-m-d H:i:s");

//     // Blocked name check
//     foreach ($blockedNames as $name) {
//         if (stripos($formName, $name) !== false) {
//             logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, "Blocked name: $name");
//             die("<p class='error-message'>This name is not allowed.</p>");
//         }
//     }

//     // Blocked email check
//     foreach ($blockedEmails as $email) {
//         if (stripos($formEmail, $email) !== false) {
//             logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, "Blocked email: $email");
//             die("<p class='error-message'>This email is blocked.</p>");
//         }
//     }

//     // Blocked words in message check
//     foreach ($blockedWords as $word) {
//         if (stripos($formMessage, $word) !== false) {
//             logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, "Blocked word: $word");
//             die("<p class='error-message'>Your message contains blocked links.</p>");
//         }
//     }

//     // Spam check: 1 submission per email per minute
//     $checkEmail = mysqli_query($con, "SELECT * FROM leads WHERE email = '$formEmail' AND TIMESTAMPDIFF(MINUTE, created, NOW()) < 1");
//     if (mysqli_num_rows($checkEmail) > 0) {
//         logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, "Spam detected: Too many submissions.");
//         die("<p class='error-message' id='spamError'>You are a spammer. Please wait before resubmitting the form.</p>");
//     }

//     // If all checks pass, proceed with database insertion and notifications
//     if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
//         echo 'Empty Request';
//     } else {
//         try {
//             // Insert into database
//             mysqli_query($con, "INSERT INTO leads (page, date, name, email, phone, book_title, message) VALUES ('$formPage', '$formDate', '$formName', '$formEmail', '$formPhone', '$formBookTitle', '$formMessage')") or die(mysqli_error($con));

//             // Prepare email content
//             $emailContent = '<p>Page : ' . $formPage . '</p>';
//             $emailContent .= '<p>Name : ' . $formName . '</p>';
//             $emailContent .= '<p>Email : ' . $formEmail . '</p>';
//             $emailContent .= '<p>Phone : ' . $formPhone . '</p>';
//             $emailContent .= '<p>Book Title : ' . $formBookTitle . '</p>';
//             $emailContent .= '<p>Message : ' . $formMessage . '</p>';

//             // Send email notification
//             // sendEmail($emailContent);

//             // Prepare Slack content
//             $slackContent = json_encode([
//                 "text" => "Hi Team, \n\t We have received a new lead. Please check the following details. \n\n" .
//                           "Page : " . $formPage . "\n" .
//                           "Name : " . $formName . "\n" .
//                           "Email : " . $formEmail . "\n" .
//                           "Phone : " . $formPhone . "\n" .
//                           "Book Title : " . $formBookTitle . "\n" .
//                           "Message : " . $formMessage
//             ]);

//             // Send Slack notification
//             sendSlack($slackContent);

//         } catch (Exception $e) {
//             die($e->getMessage());
//         }
//     }
// }




// function nameEmailPhoneBookMessageForm($payload, $con) {
//     // ======================
//     // SECURITY CONFIGURATION
//     // ======================
//     $blockedPatterns = [
//         'urls' => ["tinyurl.com", "telegra.ph", "proffseoru", "http"],
//         'keywords' => ["ГосЛото", "билет", "выигрыш", "тираж", "SEO Продвижение", "Сайтов"],
//         'email_domains' => ["@mail.ru", "@yok", "@flana.com", "@mailinator.com", "@youpmail.om","@fmallard.com","@mac.com"],
//         'names' => ["LouisWam", "Falana", "Buddybreaf"]
//     ];

//     // =================
//     // INPUT PROCESSING
//     // =================
//     $formName = trim(mysqli_real_escape_string($con, $payload['name']));
//     $formEmail = trim(mysqli_real_escape_string($con, $payload['email']));
//     $formPhone = trim(mysqli_real_escape_string($con, $payload['phone']));
//     $formBookTitle = trim(mysqli_real_escape_string($con, $payload['book_title']));
//     $formMessage = trim(mysqli_real_escape_string($con, $payload['message']));
//     // $formPage = trim($_POST['page']);
//     $formPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct Traffic';
//     $formDate = date("Y-m-d H:i:s");
//     $ip = $_SERVER['REMOTE_ADDR'];

//     // ================
//     // SECURITY CHECKS
//     // ================
//     // Check all fields for blocked URLs
//     foreach ($blockedPatterns['urls'] as $url) {
//         $fieldsToCheck = [$formName, $formEmail, $formBookTitle, $formMessage];
//         foreach ($fieldsToCheck as $field) {
//             if (stripos($field, $url) !== false) {
//                 logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, $ip, "Blocked URL: $url");
//                 die("<p class='error-message'>Submission contains prohibited links.</p>");
//             }
//         }
//     }

//     // Check for spam keywords
//     foreach ($blockedPatterns['keywords'] as $keyword) {
//         $fieldsToCheck = [$formName, $formBookTitle, $formMessage];
//         foreach ($fieldsToCheck as $field) {
//             if (stripos($field, $keyword) !== false) {
//                 logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, $ip, "Blocked keyword: $keyword");
//                 die("<p class='error-message'>Submission contains prohibited content.</p>");
//             }
//         }
//     }

//     // Validate email domain
//   // Validate email domain
//     foreach ($blockedPatterns['email_domains'] as $domain) {
//         if (preg_match('/' . preg_quote($domain, '/') . '$/i', $formEmail)) {
//             logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formMessage, $formPage, $ip, "Blocked domain: $domain");
//             die("<p class='error-message'>Email domain not allowed.</p>");
//         }
//     }


//     // ====================
//     // DATABASE INSERTION
//     // ====================
//     try {
//         mysqli_query($con, "INSERT INTO leads (page, date, name, email, phone, book_title, message) VALUES ('$formPage', '$formDate', '$formName', '$formEmail', '$formPhone', '$formBookTitle', '$formMessage')") or die(mysqli_error($con));

//         // ==================
//         // NOTIFICATIONS
//         // ==================
//         $emailContent = "New Lead Submission:\n\n"
//             . "Page: $formPage\n"
//             . "Name: $formName\n"
//             . "Email: $formEmail\n"
//             . "Phone: $formPhone\n"
//             . "Book Title: $formBookTitle\n"
//             . "Message: $formMessage\n"
//             . "IP: $ip";

//         sendEmail($emailContent); // Uncomment when ready

//       // Prepare Slack content
//             $slackContent = json_encode([
//                 "text" => "Hi Team, \n\t We have received a new lead. Please check the following details. \n\n" .
//                           "Form Type : " . "Main Form\n" .
//                           "Page : " . $formPage . "\n" .
//                           "Name : " . $formName . "\n" .
//                           "Email : " . $formEmail . "\n" .
//                           "Phone : " . $formPhone . "\n" .
//                           "Book Title : " . $formBookTitle . "\n" .
//                           "Message : " . $formMessage
//             ]);

//             // Send Slack notification
//             sendSlack($slackContent);

//     } catch (Exception $e) {
//         die("Error: " . $e->getMessage());
//     }
// }

function nameEmailPhoneBookMessageForm($payload, $con) {
    // ======================
    // SECURITY CONFIGURATION
    // ======================
    $blockedPatterns = [
        'urls' => ["tinyurl.com", "telegra.ph", "proffseoru", "http"],
        'keywords' => ["ГосЛото", "билет", "выигрыш", "тираж", "SEO Продвижение", "Сайтов"],
        'email_domains' => ["@mail.ru", "@yok", "@flana.com", "@mailinator.com", "@youpmail.om", "@fmallard.com", "@mac.com","@ter54-gevision.store"],
        'names' => ["LouisWam", "Falana", "Buddybreaf"]
    ];

    // =================
    // INPUT PROCESSING
    // =================
    // (We are not using mysqli_real_escape_string here because prepared statements are used for DB insertion)
    $formName      = trim($payload['name']);
    $formEmail     = trim($payload['email']);
    $formPhone     = trim($payload['phone']);
    $formServiceCategory = trim($payload['services_category']);
    $formBookTitle = trim($payload['book_title']);
    $formMessage   = trim($payload['message']);

    // Determine where the lead is coming from.
    // Use HTTP_REFERER if available; otherwise, mark as "Direct Traffic".
    $formPage = (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
                ? $_SERVER['HTTP_REFERER']
                : 'Direct Traffic';

    $formDate = date("Y-m-d H:i:s");
    $ip       = $_SERVER['REMOTE_ADDR'];

    // ================  
    // SECURITY CHECKS  
    // ================
    foreach ($blockedPatterns['urls'] as $url) {
        if (stripos($formName, $url) !== false || stripos($formEmail, $url) !== false || stripos($formBookTitle, $url) !== false || stripos($formMessage, $url) !== false) {
            logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formServiceCategory, $formMessage, $formPage, $ip, "Blocked URL: $url");
            return;
        }
    }

    foreach ($blockedPatterns['keywords'] as $keyword) {
        if (stripos($formName, $keyword) !== false || stripos($formBookTitle, $keyword) !== false || stripos($formMessage, $keyword) !== false) {
            logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formServiceCategory, $formMessage, $formPage, $ip, "Blocked keyword: $keyword");
            return;
        }
    }

    foreach ($blockedPatterns['email_domains'] as $domain) {
        if (preg_match('/' . preg_quote($domain, '/') . '$/i', $formEmail)) {
            logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle,$formServiceCategory, $formMessage, $formPage, $ip, "Blocked domain: $domain");
            return;
        }
    }
    
     // ====================
    // DIRECT TRAFFIC LOGGING
    // ====================
    if ($formPage === 'Direct Traffic') {
        logSuspiciousSubmission($formName, $formEmail, $formPhone, $formBookTitle, $formServiceCategory, $formMessage, $formPage, $ip, "Direct Traffic lead");
        return; // Stop further processing
    }

    // ====================
    // DATABASE INSERTION
    // ====================
    try {
        // Use a prepared statement for secure database insertion
        $stmt = $con->prepare("INSERT INTO leads (page, date, name, email, phone, services_category, book_title, message) VALUES (?, ?, ?,?, ?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception("Prepare statement failed: " . $con->error);
        }
        $stmt->bind_param("ssssssss", $formPage, $formDate, $formName, $formEmail, $formPhone, $formServiceCategory, $formBookTitle, $formMessage);
        $stmt->execute();
        if ($stmt->error) {
            throw new Exception("Execute failed: " . $stmt->error);
        }
        $stmt->close();

        // ==================
        // NOTIFICATIONS
        // ==================
        $emailContent = "New Lead Submission:\n\n"
            . "Page: $formPage\n"
            . "Name: $formName\n"
            . "Email: $formEmail\n"
            . "Phone: $formPhone\n"
            . "Book Title: $formBookTitle\n"
            . "Message: $formMessage\n"
            . "IP: $ip";

        sendEmail($emailContent); // Uncomment when ready

        // Prepare Slack content
        $slackContent = json_encode([
            "text" => "Hi Team,\n\tWe have received a new lead. Please check the following details:\n\n" .
                      "Form Type : Main Form\n" .
                      "Page : $formPage\n" .
                      "Name : $formName\n" .
                      "Email : $formEmail\n" .
                      "Phone : $formPhone\n" .
                      "Service Category : $formServiceCategory\n" .
                      "Book Title : $formBookTitle\n" .
                      "Message : $formMessage"
        ]);

        // Send Slack notification
        sendSlack($slackContent);

    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}



/**
 * Log suspicious submissions to a file.
 */
function logSuspiciousSubmission($name, $email, $phone, $bookTitle, $message, $page, $ip, $reason) {
    $logEntry = date("Y-m-d H:i:s") . " | Suspicious Submission Blocked\n" .
                "Reason: " . $reason . "\n" .
                "Name: " . $name . "\n" .
                "Email: " . $email . "\n" .
                "Phone: " . $phone . "\n" .
                "Book Title: " . $bookTitle . "\n" .
                "Message: " . $message . "\n" .
                "Page: " . $page . "\n" .
                "IP: " . $ip . "\n" .
                "-------------------------\n";
                
    // Log to a file (e.g., suspicious_submissions.log)
    file_put_contents("suspicious_submissions.log", $logEntry, FILE_APPEND);
}


function packageForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");

            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));

            // Check if package_type and price are empty and set default value
            $defaultText = "Popup Form Submission";
            $package_type = !empty($payload['package_type']) && $payload['package_type'] !== 'none' ? $payload['package_type'] : $defaultText;
            $price = !empty($payload['price']) && $payload['price'] !== 'none' ? $payload['price'] : $defaultText;

            $package_type = mysqli_real_escape_string($con, $package_type);
            $price = mysqli_real_escape_string($con, $price);

            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message,package_type,price) VALUES('$page','$date','$name','$email','$phone','$message','$package_type','$price')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            $emailContent .= '<p>Package-type : ' . $package_type . '</p>';
            $emailContent .= '<p>Package-price : ' . $price . '</p>';
            sendEmail($emailContent);

            // SLACK NOTIFICATION
            $slackContent = json_encode(array(
                "text" => "Hi Team , \n\t We have received a new lead. Please check the following details. \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message . " \n Package-type : " . $package_type . " \n Package-price : " . $price
            ));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

//Name Email Phone
function nameEmailPhoneForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone) VALUES('$page','$date','$name','$email','$phone')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
           // Prepare Slack content
            $slackContent = json_encode([
                "text" => "Hi Team,\n\tWe have received a new lead. Please check the following details:\n\n" .
                          "Page : $page\n" .
                          "Name : $name\n" .
                          "Email : $email\n" .
                          "Phone : $phone\n"
            ]);

        // Send Slack notification
        sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

//Name Email
function nameEmailForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email) VALUES('$page','$date','$name','$email')") or die(mysqli_error($con));


            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email']));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

// Email
function emailForm($payload, $con)
{
    if (empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $email = mysqli_real_escape_string($con, $payload['email']);
            mysqli_query($con, "INSERT INTO leads(page,date,email) VALUES('$page','$date','$email')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Email : " . $payload['email']));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

//ServicesCategory Email Form
function servicesEmailForm($payload, $con)
{
    if (empty($payload['services_category']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $services_category = mysqli_real_escape_string($con, $payload['services_category']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            mysqli_query($con, "INSERT INTO leads(page,date,services_category,email) VALUES('$page','$date','$services_category','$email')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent = '<p>services-category : ' . $payload['services_category'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n services-category : " . $payload['services_category'] . " \n Email : " . $payload['email']));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


//Blog Footer Form
function blogFooterForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['lastname']) || empty($payload['phone']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $lastname = mysqli_real_escape_string($con, $payload['lastname']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,lastname,email,phone) VALUES('$page','$date','$name','$lastname','$email','$phone')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>LastName : ' . $payload['lastname'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n LastName : " . $payload['lastname'] . " \n Phone : " . $payload['phone'] . " \n Email : " . $payload['email']));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


//Book-writing Form 
function bookWritingServicesForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['email']) || empty($payload['phone'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $bookWriting = mysqli_real_escape_string($con, $payload['book_writing']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,book_writing,message) VALUES('$page','$date','$name','$email','$phone','$bookWriting','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Book-writing : ' . $payload['book_writing'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Book-writing : " . $payload['book_writing'] . " \n Message : " . $message));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function questionnaireForm($payload, $con)
{
    if (empty($payload['booktitlesubtitle'])) {
        echo 'Empty Request';
    } else {
        try {
            // DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $jobNature = $_POST['jobNature'];
            $jobNatures = implode(",", $jobNature);
            $bookType = $_POST['bookType'];
            $bookTypes = implode(",", $bookType);
            $targetAudience = $_POST['targetAudience'];
            $targetAudiences = implode(",", $targetAudience);
            $bookTone = $_POST['bookTone'];
            $bookTones = implode(",", $bookTone);
            $bookNarative = $_POST['bookNarative'];
            $bookNaratives = implode(",", $bookNarative);
            $writingStyle = $_POST['writingStyle'];
            $writingStyles = implode(",", $writingStyle);
            $booktitlesubtitle = mysqli_real_escape_string($con, $payload['booktitlesubtitle']);
            $projectabout = mysqli_real_escape_string($con, $payload['projectabout']);
            $writingreason = mysqli_real_escape_string($con, $payload['writingreason']);
            $instructions = mysqli_real_escape_string($con, $payload['instructions']);
            $howstart = mysqli_real_escape_string($con, $payload['howstart']);
            $researchSources = mysqli_real_escape_string($con, $payload['researchSources']);
            $deadline = mysqli_real_escape_string($con, $payload['deadline']);
            $booksize = mysqli_real_escape_string($con, $payload['booksize']);
            mysqli_query($con, "INSERT INTO questionnaire(page,date,jobNature,bookType,targetAudience,bookTone,bookNarative,writingStyle,booktitlesubtitle,projectabout,writingreason,instructions,howstart,researchSources,deadline,booksize) VALUES('$page','$date','$jobNatures','$bookTypes','$bookTones','$writingStyles','$bookNaratives','$targetAudiences','$booktitlesubtitle','$projectabout','$writingreason','$instructions','$howstart','$researchSources','$deadline','$booksize')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>What is the nature of this job? : ' . $jobNatures . '</p>';
            $emailContent .= '<p>Type of Your Book / Genre* : ' . $bookTypes . '</p>';
            $emailContent .= '<p>Who is your target audience? : ' . $targetAudiences . '</p>';
            $emailContent .= '<p>What sort of tone do you want your book to be in? : ' . $bookTones . '</p>';
            $emailContent .= '<p>Please specify the narrative you would prefer the book to be written in. : ' . $bookNaratives . '</p>';
            $emailContent .= '<p>Writing Style : ' . $writingStyles . '</p>';
            $emailContent .= '<p>Title of your book and subtitle, if any : ' . $booktitlesubtitle . '</p>';
            $emailContent .= '<p>Briefly describe your project. What is it about? : ' . $projectabout . '</p>';
            $emailContent .= '<p>Why are you writing this book? : ' . $writingreason . '</p>';
            $emailContent .= '<p>Do you have any specific instructions for the writer that you would like to convey? : ' . $instructions . '</p>';
            $emailContent .= '<p>If you would be writing this book, how you would start? : ' . $howstart . '</p>';
            $emailContent .= '<p>Are there any particular books, research sources, memoirs, and scripts that you want the writer to consider while developing your book? : ' . $researchSources . '</p>';
            $emailContent .= '<p>Deadline: : ' . $deadline . '</p>';
            $emailContent .= '<p>Book Size : ' . $booksize . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $page . " \n What is the nature of this job? : " . $jobNatures . " \n Type of Your Book / Genre* : " . $bookTypes . " \n Who is your target audience? : " . $targetAudiences . " \n What sort of tone do you want your book to be in? : " . $bookTones . " \n Please specify the narrative you would prefer the book to be written in. : " . $bookNaratives . " \n Writing Style : " . $writingStyles . " \n Title of your book and subtitle, if any : " . $booktitlesubtitle . " \n Briefly describe your project. What is it about? : " . $projectabout . " \n Why are you writing this book? : " . $writingreason . " \n Do you have any specific instructions for the writer that you would like to convey? : " . $instructions . " \n If you would be writing this book, how you would start? : " . $howstart . " \n Are there any particular books, research sources, memoirs, and scripts that you want the writer to consider while developing your book? : " . $researchSources . " \n Deadline: : " . $deadline . " \n Book Size : " . $booksize));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function questionnaireFormTwo($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';

            // sendEmail($emailContent);

            // SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
            // sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function questionnaireFormThree($payload, $con)
{
    if (empty($payload['name']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email) VALUES('$page','$date','$name','$email')") or die(mysqli_error($con));


            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email']));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

// Illustration Form
function illustrativeForm($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            // SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

// BOOK WRITING FORM
function bookWriting($payload, $con)
{
    if (empty($payload['name']) || empty($payload['email']) || empty($payload['phone'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $servicesCategory = mysqli_real_escape_string($con, $payload['services_category']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,services_category,message) VALUES('$page','$date','$name','$email','$phone','$servicesCategory','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Services : ' . $payload['services_category'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Services : " . $payload['services_category'] . " \n Message : " . $message));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}



function publishingJourney($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = $_POST['page'];
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $manuscript_ready = mysqli_real_escape_string($con, $payload['manuscript-ready']);
            $published_before = mysqli_real_escape_string($con, $payload['published-before']);
            $plan_on_publishing = mysqli_real_escape_string($con, $payload['plan-on-publishing']);
            $services_checkbox = mysqli_real_escape_string($con, implode(",", $payload['services']));

            $cc = mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,manuscript_ready,published_before,plan_on_publishing,services_checkbox) VALUES('$page','$date','$name','$email','$phone','$manuscript_ready','$published_before','$plan_on_publishing','$services_checkbox')") or die(mysqli_error($con));

            // //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            $emailContent .= '<p>Date : ' . $date . '</p>';
            $emailContent .= '<p>Do you have a manuscript ready? : ' . $manuscript_ready . '</p>';
            $emailContent .= '<p>Have you published before? : ' . $published_before . '</p>';
            $emailContent .= '<p>What type of book do you plan on publishing? : ' . $plan_on_publishing . '</p>';
            $emailContent .= '<p>What services are you looking for? : ' . $services_checkbox . '</p>';
            $emailContent .= '<p>Name : ' . $name . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            $emailContent .= '<p>Phone : ' . $phone . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            $slackContent = json_encode(array("text" => "Hi Team , \n We have received a new lead . Please check the following details.  \n \n Page : " . $page . " \n Do you have a manuscript ready? : " . $manuscript_ready . " \n Have you published before? : " . $published_before . " \n What type of book do you plan on publishing? : " . $plan_on_publishing . " \n What services are you looking for? : " . $services_checkbox . " \n Name : " . $name . " \n Email : " . $email . " \n Phone : " . $phone));
            sendSlack($slackContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

// Function to handle form submission and save data
function halloweenForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            // Escape input to prevent SQL injection
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $uniqueFileName = 'not available'; // Initialize variable for unique file name

            // Check if file was uploaded and is accessible
            if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
                $originalFileName = $_FILES['file']['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
                $uniqueFileName = uniqid('file_', true) . '.' . $fileExtension; // Create unique file name

                // Optional: Save file to server if needed
                // move_uploaded_file($_FILES['file']['tmp_name'], "uploads/$uniqueFileName");
            }

            // Insert into leads table with unique file name
            $query = "INSERT INTO leads (name, email, phone, documents) VALUES ('$name', '$email', '$phone', '$uniqueFileName')";
            mysqli_query($con, $query) or die(mysqli_error($con));

            // Slack Notification
            $slackContent = json_encode([
                "text" => "Hi Team, \n\t We have received a new lead. Please check the following details. \n \n Page: " . $payload['page'] . " \n Name: $name \n Email: $email \n Phone: $phone \n Document: $uniqueFileName"
            ]);
            sendSlack($slackContent);

            // Email Notification with Attachment
            $boundary = md5(time()); // Create a boundary for separating parts
            $subject = "New Lead Received";
            $from = "Hancock Publishers <no-reply@hancockpublishers.com>";
            $headers = "From: $from\r\n";
            $headers .= "Reply-To: no-reply@hancockpublishers.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

            $emailContent = "--$boundary\r\n";
            $emailContent .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
            $emailContent .= "<p>Name: $name</p>";
            $emailContent .= "<p>Email: $email</p>";
            $emailContent .= "<p>Phone: $phone</p>\r\n";

            // Attach file to email if it was uploaded
            if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
                $fileContent = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
                $emailContent .= "--$boundary\r\n";
                $emailContent .= "Content-Type: application/octet-stream; name=\"$uniqueFileName\"\r\n";
                $emailContent .= "Content-Transfer-Encoding: base64\r\n";
                $emailContent .= "Content-Disposition: attachment; filename=\"$uniqueFileName\"\r\n\r\n";
                $emailContent .= "$fileContent\r\n";
                $emailContent .= "--$boundary--";
            }

            // Send the email
            mail('no-reply@hancockpublishers.com', $subject, $emailContent, $headers);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


// Function to upload file with unique name
// function upload_file()
// {
//     if (isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
//         $name = $_FILES['file']['name'];
//         $tmp_name = $_FILES['file']['tmp_name'];
//         $extension = pathinfo($name, PATHINFO_EXTENSION);

//         // Generate a unique name
//         $uniqueName = uniqid() . "_" . time() . "." . $extension;
//         $location = '../../uploads/';
//         $filePath = $location . $uniqueName;

//         // Move uploaded file
//         if (move_uploaded_file($tmp_name, $filePath)) {
//             return $uniqueName; // Return only the unique file name for the database
//         } else {
//             echo 'Error occurred while uploading file.';
//         }
//     } else {
//         echo 'Choose a file.';
//     }
//     return null; // Return null if no file was uploaded
// }

function onlyEmail($payload, $con)
{
    if (empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            // Escape input to prevent SQL injection
            $email = mysqli_real_escape_string($con, $payload['email']);

            // Insert into leads table with unique file name
            $query = "INSERT INTO leads (email) VALUES ('$email')";
            mysqli_query($con, $query) or die(mysqli_error($con));

            // Slack Notification
            $slackContent = json_encode([
                "text" => "Hi Team, \n\t We have received a new lead for joining our Community. Please check the following details. \n \n Page: " . $payload['page'] . " \n  Email: $email"
            ]);
            sendSlack($slackContent);

            // Email Notification with Attachment
            $boundary = md5(time()); // Create a boundary for separating parts
            $subject = "New Lead Received";
            $from = "Hancock Publishers <no-reply@hancockpublishers.com>";
            $headers = "From: $from\r\n";
            $headers .= "Reply-To: no-reply@hancockpublishers.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

            $emailContent = "--$boundary\r\n";
            $emailContent .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
            $emailContent .= "<p>We have received a new lead for joining our Community</p>";
            $emailContent .= "<p>Email: $email</p>";

            // Send the email
            mail('no-reply@hancockpublishers.com', $subject, $emailContent, $headers);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

// Function to send email with attachment
// function sendEmailWithAttachment($message, $filePath = null, $subject = 'Lead from hancockpublishers.com', $to = 'no-reply@hancockpublishers.com', $fromName = 'Hancock Publishers')
// {
//     $mail = new PHPMailer(true);

//     try {
//         // Server settings
//         $mail->isSMTP();
//         $mail->Host = 'smtpout.secureserver.net';
//         $mail->SMTPAuth = true;
//         $mail->Username = 'no-reply@hancockpublishers.com';
//         $mail->Password = '@Cybertron@2024';
//         $mail->SMTPSecure = 'ssl';
//         $mail->Port = 465;

//         // Debugging (optional)
//         $mail->SMTPDebug = 2;
//         $mail->Debugoutput = 'html';

//         // Recipients
//         $mail->setFrom('no-reply@hancockpublishers.com', $fromName);
//         $mail->addAddress($to);

//         // Attach file if exists
//         if ($filePath) {
//             $mail->addAttachment($filePath);
//         }

//         // Content
//         $mail->isHTML(true);
//         $mail->CharSet = "UTF-8";
//         $mail->Subject = $subject;
//         $mail->Body    = $message;

//         // Send email
//         $mail->send();
//         echo 'Message has been sent';
//     } catch (Exception $e) {
//         echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
//     }
// }


function sendEmail($message, $subject = 'Lead from no-reply@hancockpublishers.com', $to = 'info@hancockpublishers.com', $fromName = 'Hancock Publishers')
{
    // Set up additional headers
    $headers = "From: {$fromName} <no-reply@hancockpublishers.com>\r\n";
    $headers .= "Reply-To: no-reply@hancockpublishers.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    try {
        // Attempt to send the main email
        if (mail($to, $subject, $message, $headers)) {
            // Send auto-reply email
            $autoReplySubject = 'Hancockpublishers has Received Your Message!';
            $autoReplyMessage = "
                <p>Dear <b>{$_POST['name']},</b></p>
                <p>Thank you for reaching out to Hancockpublishers! Our Hancockpublishers have received your query and are working on it as of now. Expect to hear back from us within 24 hours. For quick answers, you might find our <a href='https://hancockpublishers.com/faq'>FAQ</a> page helpful.</p>
                <p>Thanks for your patience and interest in our work!</p>
                <br><br>
                <p><b>Warm regards,</b></p>
                <p>The Hancockpublishers Team.</p>
                <br>
                <img src='https://hancockpublishers.com/assets/img/logo.png' alt='Hancockpublishers' style='max-width: 200px;'>
                <p>Email: <a href='mailto:info@hancockpublishers.com'>info@hancockpublishers.com</a>
                <br>Phone number: <a href='tel:(415) 520-1098'>(415) 520-1098</a>
                <br>Address: 895 Dove Street. Newport Beach, CA 92660 United States</p>
            ";

            // Send auto-reply email
            if (mail($_POST["email"], $autoReplySubject, $autoReplyMessage, $headers)) {
                echo 'Email sent successfully!';
            } else {
                echo 'Failed to send auto-reply email.';
            }
        } else {
            echo 'Failed to send email.';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Error: {$e->getMessage()}";
    }
}


// function sendEmailWithAttachment($message, $subject = 'Lead from no-reply@hancockpublishers.com', $to = 'no-reply@hancockpublishers.com', $fromName = 'Hancock Publishers', $attachmentPath = null)
// {
//     // Read the file content
//     $fileContent = file_get_contents($attachmentPath);
//     $fileContent = chunk_split(base64_encode($fileContent)); // Encode the file content

//     // Prepare a boundary string
//     $boundary = md5(time());

//     // Set up headers
//     $headers = "From: {$fromName} <no-reply@hancockpublishers.com>\r\n";
//     $headers .= "Reply-To: no-reply@hancockpublishers.com\r\n";
//     $headers .= "MIME-Version: 1.0\r\n";
//     $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";

//     // Prepare the email body
//     $body = "--{$boundary}\r\n";
//     $body .= "Content-Type: text/html; charset=iso-8859-1\r\n";
//     $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
//     $body .= $message . "\r\n"; // Add the HTML message
//     $body .= "--{$boundary}\r\n";

//     // Add attachment
//     $body .= "Content-Type: application/octet-stream; name=\"" . basename($attachmentPath) . "\"\r\n";
//     $body .= "Content-Transfer-Encoding: base64\r\n";
//     $body .= "Content-Disposition: attachment; filename=\"" . basename($attachmentPath) . "\"\r\n\r\n";
//     $body .= $fileContent . "\r\n"; // Add the file content
//     $body .= "--{$boundary}--"; // End boundary

//     // Attempt to send the email
//     if (mail($to, $subject, $body, $headers)) {
//         return true; // Return true on success
//     } else {
//         return false; // Return false on failure
//     }
// }


// function sendEmailWithAttachment($message, $subject = 'Lead from hancockpublishers.com', $to = ' info@hancockpublishers.com', $fromName = 'Hancock Publishers')
// {
//     $mail = new PHPMailer;
//     $mail->IsSMTP();
//     $mail->Host = 'smtpout.secureserver.net';
//     $mail->Port = 465;
//     $mail->SMTPAuth = true;
//     $mail->Username = 'no-reply@hancockpublishers.com';
//     $mail->Password = '@Cybertron2024';
//     $mail->isHTML(true);
//     $mail->From = 'noreply@hancockpublishers.com';
//     $mail->FromName = $fromName;
//     $mail->AddAddress($to);
//     $mail->Subject = $subject;
//     $mail->Body    = $message;
//     if (!$mail->send()) {
//         // echo 'Message could not be sent.';
//         // echo 'Mailer Error: ' . $mail->ErrorInfo;
//         // exit;
//     }
// }


//------------  --------------------------HELPERS------------------------------------------
//SEND Email For Godaddy to Gmail
// function sendEmail($message, $subject = 'Lead from noreply@hancockpublishers.com', $to = 'leads@hancockpublishers.com', $fromName = 'Hancock Publishers')
// {
//     $mail = new PHPMailer(true);
//     try {
//         // Server settings
//         $mail->SMTPDebug = SMTP::DEBUG_SERVER;
//         $mail->isSMTP();
//         $mail->Host = 'hancockpublishers.com';
//         $mail->SMTPAuth = true;
//         $mail->Username = 'noreply@hancockpublishers.com';
//         $mail->Password = 'mPio+n)45OTs';
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//         $mail->Port = 465;

//         // Recipients for the main email
//         $mail->setFrom('noreply@hancockpublishers.com');
//         $mail->addAddress($to);

//         // Content for the main email
//         $mail->isHTML(true);
//         $mail->Subject = $subject;
//         $mail->Body = $message;
//         $mail->send();

//         // Auto-reply email
//         // $autoReplySubject = 'Thank you for contacting Hancockpublishers';
//         // $autoReplyMessage = "Thank you for getting in touch with Hancockpublishers! Your message has been received, and we appreciate your interest. Our team is currently reviewing your inquiry and will get back to you as soon as possible.";

//         $autoReplySubject = 'Hancockpublishers has Received Your Message!';
//         $autoReplyMessage = "
//             <p><b>Dear {$_POST['name']},</b></p>
//             <p>Thank you for reaching out to Hancockpublishers! Our Hancockpublishers have received your query and are working on it as of now. Expect to hear back from us within 24 hours. For quick answers, you might find our <a href='#0'>FAQ</a> page helpful.</p>
//             <p>Thanks for your patience and interest in our work!</p>
//             <p><b>Warm regards,</b></p>
//             <p>The Hancockpublishers Team.</p>
//             <br>
//             <img src='https://hancockpublishers.com/assets/img/logo.png' alt='Hancockpublishers' style='max-width: 200px;'>
//             <p>Email: <a href='mailto:info@hancockpublishers.com'>info@hancockpublishers.com</a>
//             <br>Phone number: <a href='tel:(415) 520-1098'>(415) 520-1098</a>
//             <br>Address: 895 Dove Street. Newport Beach, CA 92660 United States</p>
//         ";

//         $autoReply = new PHPMailer(true);
//         $autoReply->isSMTP();
//         $autoReply->Host = 'hancockpublishers.com';
//         $autoReply->SMTPAuth = true;
//         $autoReply->Username = 'noreply@hancockpublishers.com';
//         $autoReply->Password = 'mPio+n)45OTs';
//         $autoReply->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//         $autoReply->Port = 587;

//         $autoReply->setFrom('noreply@hancockpublishers.com');
//         $autoReply->addAddress($_POST["email"]);  // Send auto-reply to the same person who submitted the form

//         $autoReply->isHTML(true);
//         $autoReply->Subject = $autoReplySubject;
//         $autoReply->Body = $autoReplyMessage;
//         $autoReply->send();


//         // echo 'Message has been sent';
//     } catch (Exception $e) {
//         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//     }
// }


//SEND EMAIL
/*function sendEmail($message,$subject='Lead from hancockpublishers.com',$to=' info@hancockpublishers.com', $fromName = 'Hancock Writers') {
    $mail = new PHPMailer;                                  
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';            
    $mail->Port = 587;                                   
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@hancockpublishers.com'; 
    $mail->Password = 'utmzsadrtrllnkfd';                  
    $mail->isHTML(true);
    $mail->From = 'noreply@hancockpublishers.com';
    $mail->FromName = $fromName;          
    $mail->AddAddress($to);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    if(!$mail->send()) {
        // echo 'Message could not be sent.';
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
        // exit;
    }
}*/

function sendEmailWithAttachment($message, $subject = 'Lead from Hancock Publishers', $to = 'no-reply@hancockpublishers.com')
{
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtpout.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@hancockpublishers.com';
        $mail->Password = '@Cybertron2024';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 587;

        // Recipients for the main email
        $mail->setFrom('no-reply@hancockpublishers.com');
        $mail->addAddress($to);

        // Content for the main email
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();

        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


// SEND SLACK
function sendSlack($data)
{
    // $connection2 = new mysqli("localhost", "root", "", "animation");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://hooks.slack.com/services/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');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ['payload' => $data]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    // mysqli_query($connection2, "INSERT INTO slack(error,slack_payload) VALUES('$server_output','$data')") or die(mysqli_error($connection2));
    return ($server_output);
}

// CLEAN FUNCTION
function clean($string)
{
    $string = str_replace(' ', '-', $string);

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

//GET CURRENT REQUEST
function current_url()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
}
