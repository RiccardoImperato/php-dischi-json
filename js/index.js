const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            albums: [],
            currentAlbum: null,
        };
    },
    methods: {
        getAlbums() {
            axios.get(this.apiUrl).then((response) => {
                this.albums = response.data;
            })
        },
        viewAlbum(index) {
            axios.get(this.apiUrl, { params: { index } }).then((response) => {
                this.currentAlbum = response.data[index];
            })
        },
        closeAlbum() {
            if (this.currentAlbum) {
                this.currentAlbum = null;
            }
        }
    },
    created() {
        this.getAlbums();
    },
}).mount('#app');