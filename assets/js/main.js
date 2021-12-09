Vue.config.devtools = true;

const app = new Vue ({
    el: '#app',
    data: {
        albums: null
    },

    mounted(){
        axios
        .get('./api/albums.php')
        .then(response => {
            console.log(response);
            this.albums=response.data;
        })
    }
})