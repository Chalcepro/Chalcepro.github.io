const apiKey = 'x658cbaea90msh32fb570ddcda52fp1d30e5jsn61721d133e7a';

fetch("https://deezerzakutynskyv1.p.rapidapi.com/addAlbumToFolder", {
  method: "POST",
  headers: {
    "x-rapidapi-key": apiKey,
    "x-rapidapi-host": "deezerzakutynskyv1.p.rapidapi.com"
  },
  body: new URLSearchParams({
    "album_id": "12345",  
    "folder_id": "67890" 
  })
})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));

// music api



// const data = new FormData();
// data.append('sender', 'MessageBird');
// data.append('body', 'This is a gsm 7-bit test message.');
// data.append('destination', '31600000001,31600000002');
// data.append('reference', '268431687');
// data.append('timestamp', '201308020025');
// data.append('replacechars', 'checked');
// data.append('type', 'normal');
// data.append('dlr_url', 'http://www.example.com/dlr-messagebird.php');

// const xhr = new XMLHttpRequest();
// xhr.withCredentials = true;

// xhr.addEventListener('readystatechange', function () {
// 	if (this.readyState === this.DONE) {
// 		console.log(this.responseText);
// 	}
// });

// xhr.open('POST', 'https://messagebird-sms-gateway.p.rapidapi.com/sms');
// xhr.setRequestHeader('x-rapidapi-key', '658cbaea90msh32fb570ddcda52fp1d30e5jsn61721d133e7a');
// xhr.setRequestHeader('x-rapidapi-host', 'messagebird-sms-gateway.p.rapidapi.com');

// xhr.send(data);

// // message api