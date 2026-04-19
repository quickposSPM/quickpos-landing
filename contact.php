<?php
// contact.php - QuickPOS Contact Form Handler
// [POS-9] PHP form validation and redirect

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}
exit;
?>
