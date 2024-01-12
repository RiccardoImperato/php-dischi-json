<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!-- Font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!--/ Font Montserrat -->
    <!-- Style -->
    <link rel="stylesheet" href="./css/style.css">
    <!--/ Style -->
</head>

<body>
    <header>
        <div class="container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/1982px-Spotify_icon.svg.png" alt="Spotify">
        </div>
    </header>
    <main>
        <div id="app">
            <div class="container">
                <ul>
                    <li v-for="(album, index) in albums" class="card">
                        <img :src="album.image" :alt="album.title">
                        <h3 id="title">{{ album.title }}</h3>
                        <button @click="viewAlbum(index)">Details</button>
                    </li>
                </ul>
                <div v-if="currentAlbum" class="modal">
                    <div class="modal-card">
                        <img :src="currentAlbum.image" :alt="currentAlbum.title">
                        <div class="info">
                            <h3>{{ currentAlbum.title }}</h3>
                            <div>{{ currentAlbum.artist }}</div>
                            <div>{{ currentAlbum.year }}</div>
                            <button @click="closeAlbum">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--/ Vue js -->
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--/ Axios -->
    <!-- My script -->
    <script src="./js/index.js"></script>
    <!--/ My script -->
</body>

</html>