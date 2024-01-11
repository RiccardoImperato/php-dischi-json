const { createApp } = Vue;

createApp({
    data() {
        return {
            albums: []
        };
    },
    methods: {
        getAlbums() {
            axios.get('server.php').then((response) => {
                console.log({ response });
                this.albums = response.data;
            })
        }
    },
    created() {
        this.getAlbums();
    },
}).mount('#app');