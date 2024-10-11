let timeout;
let countdown;
const sessionDuration = 600000;
let remainingTime = sessionDuration;

function startCountdown() {
    countdown = setInterval(() => {
        remainingTime -= 1000;
        updateCountdownDisplay();

        if (remainingTime <= 0) {
            clearInterval(countdown);
            window.location.reload();
        }
    }, 1000);
}

function updateCountdownDisplay() {
    const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
    document.getElementById("countdown").innerText = "Timeout Countdown: " + `${minutes}m ${seconds}s remaining`;
}

function resetTimer() {
    clearTimeout(timeout);
    clearInterval(countdown);
    remainingTime = sessionDuration;
    updateCountdownDisplay();
    startCountdown(); //

    timeout = setTimeout(() => {
        clearInterval(countdown);
        window.location.reload();
    }, sessionDuration);
}

window.onload = resetTimer;
window.onmousemove = resetTimer;
window.onkeydown = resetTimer;
window.onclick = resetTimer;

updateCountdownDisplay();
