const sessionDuration = parseInt(document.getElementById('session-duration').value) * 1000;


function sessionTimeout() {
    alert('Sesi telah berakhir, Anda akan diarahkan ke halaman login.');
    window.location.href = '../index.php';
}


setTimeout(sessionTimeout, sessionDuration);
