<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGH</title>
    <!-- <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon"> -->
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fonts/icon-font/css/style.css">
    <link rel="stylesheet" href="fonts/typography-font/typo.css">
    <link rel="stylesheet" href="fonts/fontawesome-5/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="plugins/aos/aos.min.css">
    <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="plugins/nice-select/nice-select.min.css">
    <link rel="stylesheet" href="plugins/slick/slick.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Custom stylesheet -->
</head>


<?php
define('baseUrl', 'http://localhost/tourandTravel/');

$conn = new mysqli("localhost","root","","tour");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  //exit();
}
?>