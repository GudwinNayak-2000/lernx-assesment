const content = document.querySelector(".content"),
Playimage = content.querySelector(".music-image img"),
musicName = content.querySelector(".music-titles .name"),
musicArtist = content.querySelector(".music-titles .artist"),
Audio = document.querySelector(".main-song"),
playBtn = content.querySelector(".play-pause"),
playBtnIcon = content.querySelector(".play-pause span"),
prevBtn = content.querySelector("#prev"),
nextBtn = content.querySelector("#next"),
progressBar = content.querySelector(".progress-bar"),
progressDetails = content.querySelector(".progress-details"),
repeatBtn = content.querySelector("#repeat"),
Shuffle = content.querySelector("#shuffle"),
currentSongNameElement = document.querySelector('.playlist_music_current_playing_text'),
currentSongTimeElement = document.querySelector('.playlist_music_current_time'),
nextSongNameElement = document.querySelector('.playlist_music_next_text'),
nextSongTimeElement = document.querySelector('.playlist_music_next_time');
let index = 1;

window.addEventListener("load", ()=>{
  loadData(index);
});

function loadData(indexValue){
  musicName.innerHTML= songs[indexValue - 1].name;
  musicArtist.innerHTML = songs[indexValue - 1].artist;
  Playimage.src = "images/"+songs[indexValue - 1].img+".jpg";
  Audio.src = "music/"+songs[indexValue - 1].audio+".mp3";

   // Set currently playing song in the playlist
   currentSongNameElement.textContent = songs[indexValue - 1].name;
   currentSongTimeElement.textContent = "0:00";

}

playBtn.addEventListener("click", ()=>{
  const isMusicPaused = content.classList.contains("paused");
  if(isMusicPaused){
    pauseSong();
  }
  else{
    playSong();
  }
});

function playSong(){
  content.classList.add("paused");
  playBtnIcon.innerHTML = "pause";
  Audio.play();
}

function pauseSong(){
  content.classList.remove("paused");
  playBtnIcon.innerHTML = "play_arrow";
  Audio.pause();
}

nextBtn.addEventListener("click", ()=>{
  nextSong();
});

prevBtn.addEventListener("click", ()=>{
  prevSong();
});

function nextSong(){

  index++;
  if(index > songs.length){
    index = 1;
  }
  else{
    index = index;
  }
  loadData(index);
  playSong();

}

function prevSong(){
  index--;
  if(index <= 0){
    index = songs.length;
  }
  else{
    index = index;
  }
  loadData(index);
  playSong();
}

Audio.addEventListener("timeupdate", (e)=>{
  const initialTime = e.target.currentTime; // Get current music time
  const finalTime = e.target.duration; // Get music duration
  let BarWidth = (initialTime / finalTime) * 100;
  progressBar.style.width = BarWidth+"%";

  progressDetails.addEventListener("click", (e)=>{
    let progressValue = progressDetails.clientWidth; // Get width of Progress Bar
    let clickedOffsetX = e.offsetX; // get offset x value
    let MusicDuration = Audio.duration; // get total music duration

    Audio.currentTime = (clickedOffsetX / progressValue) * MusicDuration;
  });

  Audio.addEventListener("loadeddata", ()=>{
    let finalTimeData = document.querySelector(".final");

    //Update finalDuration
    let AudioDuration = Audio.duration;
    let finalMinutes = Math.floor(AudioDuration / 60);
    let finalSeconds = Math.floor(AudioDuration % 60);
    const formattedTotalDuration = `${finalMinutes}:${finalSeconds < 10 ? '0' : ''}${finalSeconds}`;
    finalTimeData.innerText = formattedTotalDuration;
  });

  Audio.addEventListener("loadeddata", () => {
    const totalDurationElement = document.querySelector('.playlist_music_current_playing_time');
    const totalDurationMinutes = Math.floor(Audio.duration / 60);
    const totalDurationSeconds = Math.floor(Audio.duration % 60);
    const formattedTotalDuration = `${totalDurationMinutes}:${totalDurationSeconds < 10 ? '0' : ''}${totalDurationSeconds}`;
    totalDurationElement.innerText = formattedTotalDuration;
  
  });
  

  //Update Current Duration
  let currentTimeData = content.querySelector(".current");
  let CurrentTime = Audio.currentTime;
  let currentMinutes = Math.floor(CurrentTime / 60);
  let currentSeconds = Math.floor(CurrentTime % 60);
  if(currentSeconds < 10){
    currentSeconds = "0"+currentSeconds;
  }
  currentTimeData.innerText = currentMinutes+":"+currentSeconds;

  //repeat button logic
  repeatBtn.addEventListener("click", ()=>{
    Audio.currentTime = 0;
  });
});

//Shuffle Logic
Shuffle.addEventListener("click", ()=>{
  var randIndex = Math.floor(Math.random() * songs.length) + 1; // Select random betwn 1 and song array length
  loadData(randIndex);
  playSong();
});

Audio.addEventListener("ended", ()=>{
  index++;
  if(index > songs.length){
    index = 1;
  }
  loadData(index);
  playSong();
});

