Vue.config.devtools = true;

const app = new Vue ({
    el: '#app',
    mounted(){
        axios
        .get('.../api.albums.php')
        .then(response => {
            console.log(response);
        })
    }
})