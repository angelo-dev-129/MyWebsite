<?php
$messages = [];
$messageSubmitted = false;
$submittedMessage = null;

// Load existing messages from file
if (file_exists('messages.json')) {
    $json = file_get_contents('messages.json');
    $messages = json_decode($json, true) ?? [];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['message'])) {
        $newMessage = [
            'message' => htmlspecialchars($_POST['message'] ?? ''),
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $messages[] = $newMessage;
        
        // Save messages to file
        file_put_contents('messages.json', json_encode($messages, JSON_PRETTY_PRINT));

        $messageSubmitted = true;
        $submittedMessage = $newMessage;
    }
}
?>
