function fetchArtists() {
    $.ajax({
        url: "http://localhost/Plyer_Music/API/all_artist.php",
        method: "GET",
        dataType: "json",
        success: function (data) {
            console.log(data);
            var clutter = "";
            data.data.forEach(function (val, index) {
                clutter += '<img src="./project-img/nitesh-profile.jpg" alt="">';
            });
            artistList.innerHTML = clutter;
            console.log(data.data);
        }
    });
}
function fetchSong() {
    $.ajax({
        url: "http://localhost/Plyer_Music/API/fetch_all_song.php",
        method: "GET",
        dataType: "json",
        success: function (song) {
            console.log(song);
            var clutter = "<div class='release-box'><span class='heading'>New Release</span><span class='normal'>See all</span></div>";
            song.data.forEach(function (val, index) {
                clutter += `<div class="item"><img src="./project-img/nitesh-profile.jpg" alt=""><div class="song-details"><span class="song">This is Song Name</span><span class="artist">Nitesh Nagar</span></div><div class="blank"></div><div <div class="blank"></div><div class="blank"></div><div class="blank"></div><div <div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div><span class="time">3:00</span><i class="ri-play-fill"></i></div>`;
            });
            songList.innerHTML = clutter;
            var week = '';
            song.data.forEach(function (val) {
                week += `<div class="week0-box"><img src="./project-img/nitesh-profile.jpg" alt=""><h3>This is Song</h3><h5>Nitesh Nagar</h5></div>`;
            });

            WeekendList.innerHTML = week;
        }
    });
}