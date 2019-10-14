<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Michael &amp; Co</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <img id="logo" class="center-block" src="images/logo-black.png" width="80%" height="80%" />
            </div>
            <div class="row padded-top">
                <?php
                    function clean_string($string) {
                        $bad = array("content-type","bcc:","to:","cc:","href");
                        return str_ireplace($bad,"",$string);
                    }

                    // Sanitise the input to prevent email injection
                    $name = clean_string($_POST["name"]);
                    $addr1 = clean_string($_POST["addr1"]);
                    $addr2 = clean_string($_POST["addr2"]);
                    $city = clean_string($_POST["city"]);
                    $county = clean_string($_POST["county"]);
                    $postcode = clean_string($_POST["postcode"]);

                    // Build email message
                    $email_from = "Michael Avedissian <michael@michaeland.co.uk>";
                    $email_to = "michael@michaeland.co.uk";
                    $email_subject = "Signed Terms and Conditions - " . $name;

                    // Open the terms and conditions file and encode it as ASCII (ISO-8859-1)
                    $termsfile = fopen("terms.htm", "r");
                    $terms = fread($termsfile,filesize("terms.htm"));
                    fclose($termsfile);

                    $email_message = "<h2>Terms and Conditions</h2>" . $terms;
                    $email_message .= "<p>Signed by:<br>" . $name . "</p>";
                    $email_message .= "<p>Address:<br>" . $addr1;
                    if (isset($_POST["addr2"])) {
                        $email_message .= "<br>" . $addr2;
                    }
                    $email_message .= "<br>" . $city;
                    $email_message .= "<br>" . $county;
                    $email_message .= "<br>" . $postcode;
                    $email_message .= "</p>";

                    $headers = "Content-Type: text/html; charset=UTF-8\r\n";
                    $headers .= 'From: ' . $email_from . "\r\n";
                    $headers .= 'Reply-To: ' . $email_from . "\r\n";
                    $headers .= 'X-Mailer: PHP/' . phpversion();
                    mail($email_to, $email_subject, $email_message, $headers);
                ?>
                <h2>Form submitted successfully!</h2>
                <p>Thanks <?php echo $_POST["name"]; ?>, you may now close the tab.</p>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    </body>
</html>