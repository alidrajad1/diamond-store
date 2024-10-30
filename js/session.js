const sessionDuration = parseInt(document.getElementById('session-duration').value) * 1000;


function sessionTimeout() {
    alert('The session has ended, you will be redirected to the login page.');
    window.location.href = '../index.php';
}


setTimeout(sessionTimeout, sessionDuration);
