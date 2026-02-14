function acceptValentine() {
    const acceptMessage = document.getElementById('acceptMessage');
    acceptMessage.style.display = 'block';
    
    // Save the answer to the server
    fetch('index.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'accept=yes'
    });
}

function handleNoClick(event) {
    event.preventDefault();
    const noBtn = document.getElementById('noBtn');
    
    // Move the button away from the cursor
    const randomX = (Math.random() - 0.5) * 200;
    const randomY = (Math.random() - 0.5) * 200;
    
    noBtn.style.transform = `translate(${randomX}px, ${randomY}px)`;
    
    // Show a playful message
    if (!document.getElementById('playfulMessage')) {
        const message = document.createElement('div');
        message.id = 'playfulMessage';
        message.style.marginTop = '15px';
        message.style.color = '#e63946';
        message.style.fontSize = '1.1em';
        message.style.fontWeight = 'bold';
        message.textContent = '😊 You can\'t say no! Try the Yes button! 💕';
        noBtn.parentElement.parentElement.appendChild(message);
    }
}
