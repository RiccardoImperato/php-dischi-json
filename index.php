<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!-- Style -->
    <link rel="stylesheet" href="./css/style.css">
    <!--/ Style -->
</head>

<body>
    <h1>Albums</h1>
    <div id="app">
        <ul>
            <li v-for="album in albums">
                <img :src="album.image" :alt="album.title">
                <h3>{{ album.title }}</h3>
                <div>{{ album.artist }}</div>
                <div>{{ album.year }}</div>
            </li>
        </ul>
    </div>
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