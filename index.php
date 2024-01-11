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
                    <li v-for="album in albums">
                        <img :src="album.image" :alt="album.title">
                        <div class="info">
                            <h3>{{ album.title }}</h3>
                            <div>{{ album.artist }}</div>
                            <div>{{ album.year }}</div>
                        </div>
                    </li>
                </ul>
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