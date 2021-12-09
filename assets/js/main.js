Vue.config.devtools = true;

const app = new Vue ({
    el: '#app',
    data: {
        albums: null,
        artists: [],
        genres:  [],
        filterByAuthor: "",
        filterByGenre: "",
        // filteredByAuthor: [],
        // filteredByGenre: [],

    },




    //couldn't do bonus in time, i started the method to filter below:

    // methods: {
        // filterAlbums() {
        //     if (this.filterByAuthor == "" || this.filterByAuthor == "All") {
        //         return this.albums;
        //     } else if (this.filterByAuthor !== "") {
        //         return this.albums.filter(album => album.author == this.filterByAuthor)
        //     }
        // },

    mounted(){
        axios
        .get('./api/albums.php')
        .then(response => {
            console.log(response);
            this.albums=response.data;
            for (let i = 0; i < this.albums.length; i++) {
                const album = this.albums[i];
                // console.log(album);
                if (!this.artists.includes(album.author)){
                    this.artists.push(album.author);
                    console.log(this.artists);
                };

                if (!this.genres.includes(album.genre)) {
                    this.genres.push(album.genre);
                    console.log(this.genres);
                }
                }

        });

        

        
    }
})