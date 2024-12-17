function playSong() {
    const audio = document.getElementById("music");
    audio.play();
    // Save the playing state to the server
    saveAudioState(audio.currentTime, true);
}

function stopsong() {
    const audio = document.getElementById("music");
    audio.pause();
    // Save the paused state and position to the server
    saveAudioState(audio.currentTime, false);
}

function saveAudioState(position, isPlaying) {
    // Send the audio position and state to the server using PHP
    fetch('audio_state.php', {
        method: 'POST',
        body: new URLSearchParams({
            audioPosition: position,
            musicPlaying: isPlaying
        })
    });
}

window.onload = function() {
    // Get the audio position and state from the server when the page loads
    fetch('audio_state.php')
        .then(response => response.json())
        .then(data => {
            const audio = document.getElementById("music");
            if (data.musicPlaying) {
                audio.currentTime = data.audioPosition; // Set the saved position
                audio.play();
            }
        });
};
