let countdownTimer;
let isPaused = true;
let totalSeconds;

function getInputSeconds() {
    let hours = parseInt(document.getElementById("hours").value) || 0;
    let minutes = parseInt(document.getElementById("minutes").value) || 0;
    let seconds = parseInt(document.getElementById("seconds").value) || 0;
    return hours * 3600 + minutes * 60 + seconds;
}

document.getElementById("startPauseBtn").addEventListener("click", function() {
    if (isPaused) {
        // Check if we are resuming or starting fresh
        if (!countdownTimer) {
            totalSeconds = getInputSeconds();
            if (totalSeconds <= 0) {
                alert("Please enter a valid time greater than 0.");
                return;
            }
        }
        updateDisplay(totalSeconds);
        countdownTimer = setInterval(startCountdown, 1000);
        this.innerText = "Pause";
        isPaused = false;
    } else {
        clearInterval(countdownTimer);
        this.innerText = "Resume";
        isPaused = true;
    }
});
document.getElementById("stopBtn").addEventListener("click", function() {
    stopAndResetTimer();
});

function startCountdown() {
    if (totalSeconds <= 0) {
        clearInterval(countdownTimer);
        alert("Time's up!");
        stopAndResetTimer();
        return;
    }
    totalSeconds--;
    updateDisplay(totalSeconds);
}

function updateDisplay(totalSeconds) {
    let hours = Math.floor(totalSeconds / 3600);
    let minutes = Math.floor((totalSeconds % 3600) / 60);
    let seconds = totalSeconds % 60;

    document.getElementById("hours").value = hours;
    document.getElementById("minutes").value = minutes;
    document.getElementById("seconds").value = seconds;

    hours = (hours < 10) ? "0" + hours : hours;
    minutes = (minutes < 10) ? "0" + minutes : minutes;
    seconds = (seconds < 10) ? "0" + seconds : seconds;

    document.getElementById("timerDisplay").innerText = `${hours}:${minutes}:${seconds}`;
}

function stopAndResetTimer() {
    clearInterval(countdownTimer);
    countdownTimer = null;
    document.getElementById("timerDisplay").innerText = "00:00:00";
    document.getElementById("startPauseBtn").innerText = "Start";
    alert("Timer stopped.");
    resetInputs();
    isPaused = true;
}

function resetInputs() {
    document.getElementById("hours").value = "00";
    document.getElementById("minutes").value = "00";
    document.getElementById("seconds").value = "00";
}
