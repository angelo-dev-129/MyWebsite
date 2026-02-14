<?php
require 'handler.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Day</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="floating-hearts">
        <div class="heart">❤️</div>
        <div class="heart">💕</div>
        <div class="heart">❤️</div>
        <div class="heart">💕</div>
        <div class="heart">❤️</div>
        <div class="heart">💕</div>
        <div class="heart">❤️</div>
        <div class="heart">💕</div>
        <div class="heart">❤️</div>
    </div>

    <div class="container">
        <div class="heart-animation">💕</div>
        <h1>Happy Valentine's Day</h1>
        <p class="subtitle">Express your feelings in words 💌</p>

        <!-- Proposal Section -->
        <div class="proposal-section">
            <h2 style="color: #e63946; font-size: 2em; margin: 20px 0;">Will you be my Valentine? 💕</h2>
            <div class="button-group">
                <button class="yes-btn" onclick="acceptValentine()">Yes! 💕</button>
                <button class="no-btn" id="noBtn" onclick="handleNoClick(event)">No</button>
            </div>
            <div id="acceptMessage" class="acceptance-message" style="display: none;">
                <h3>🎉 You just made me the happiest person! 🎉</h3>
                <p>I can't wait to celebrate Valentine's Day with you! 💌</p>
            </div>
        </div>

        <form method="POST" id="valentineForm" style="margin-top: 40px; padding-top: 30px; border-top: 2px solid #e63946;">
            <div class="form-group">
                <label for="message">Share Your Sweet Message:</label>
                <textarea id="message" name="message" placeholder="Write something sweet..." required></textarea>
            </div>

            <button type="submit">Send Love 💌</button>
        </form>

        <?php if ($messageSubmitted && $submittedMessage): ?>
            <div class="message-display show">
                <h3>💌 Message Sent!</h3>
                <p style="margin-top: 15px; font-style: italic;">"<?php echo nl2br($submittedMessage['message']); ?>"</p>
            </div>
        <?php endif; ?>

        <!-- Display all messages -->
        <?php if (!empty($messages)): ?>
            <div class="couples">
                <h3>❤️ Messages of Love ❤️</h3>
                <?php foreach (array_reverse($messages, true) as $msg): ?>
                    <div class="couple-item">
                        <p><?php echo $msg['message']; ?></p>
                        <small style="color: #999;"><?php echo $msg['timestamp']; ?></small>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="script.js"></script>
</body>
</html>
