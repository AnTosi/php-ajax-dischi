<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Milestone2</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="mx-3">
                <img src="../assets/img/spot_logo.png" alt="">
            </div>
        </header>
        <main>
            <div class="selector mx-3">
                <div class="my-3">
                    <label for="filter-author" class="px-2">Filter albums by author:</label><select name="filter-author" id="filter-author" v-model="filterByAuthor">
                        <option value="all">All</option>
                        <option v-for="artist in artists" :value="artist">
                            {{artist}}
                        </option>
                    </select>
                </div>

                <div>
                    <label for="filter-genre" class="px-2">Filter albums by genre:</label><select name="filter-genre" id="filter-genre" v-model="filterByGenre">
                        <option value="all">All</option>
                        <option v-for="genre in genres" :value="genre">
                            {{genre}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row p-5 justify-content-center">
                <div class="col-2" v-for="album in albums">
                    <div class="card p-3">
                        <img :src="album.poster" :alt="album.title">
                        <h4>{{album.title}}</h4>
                        <h5>{{album.author}}</h5>
                    </div>
                </div>
            </div>

        </main>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>