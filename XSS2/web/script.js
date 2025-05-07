function postMessage() {
    const message = document.getElementById('message').value;

    fetch('post.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ message: message }).toString()
    }).then(response => {
        if (response.ok) {
            const informationBox = document.getElementById('info');
            informationBox.style.display = 'block';
        }
    })
}

window.addEventListener('DOMContentLoaded', function() {
    document.getElementById('submit').addEventListener('click', postMessage);    
});