<?php
$albums = [
    [
    'poster' =>	"https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
    'title'	=> "New Jersey",
    'author' =>	"Bon Jovi",
    'genre' => "Rock",
    'year' =>	"1988",
    ],

    [   
    'poster' =>	"https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
    'title'	=> "Live at Wembley 86",
    'author' =>	"Queen",
    'genre' => "Pop",
    'year' =>	"1992",
    ],
    
    [
    'poster' =>	"https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
    'title'	=> "Ten's Summoner's Tales",
    'author' =>	"Sting",
    'genre' => "Pop",
    'year' =>	"1993",
    ],
    
    [
    'poster' =>	"https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
    'title'	=> "Steve Gadd Band",
    'author' =>	"Steve Gadd Band",
    'genre' => "Jazz",
    'year' =>	"2018",
    ],
    
    [
    'poster' =>	"https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
    'title'	=> "Brave new World",
    'author' =>	"Iron Maiden",
    'genre' => "Metal",
    'year' =>	"2000",
    ],
    
    [
    'poster' =>	"https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
    'title'	=> "One more car, one more raider",
    'author' =>	"Eric Clapton",
    'genre' => "Rock",
    'year' =>	"2002",
    ],
    
    [
    'poster' =>	"https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
    'title'	=> "Made in Japan",
    'author' =>	"Deep Purple",
    'genre' => "Rock",
    'year' =>	"1972",
    ],
    
    [
    'poster' =>	"https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
    'title'	=> "And Justice for All",
    'author' =>	"Metallica",
    'genre' => "Metal",
    'year' =>	"1988",
    ],
    
    [
    'poster' =>	"https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
    'title'	=> "Hard Wired",
    'author' =>	"Dave Weckl",
    'genre' => "Jazz",
    'year' =>	"1994",
    ],
    
    [
    'poster' =>	"https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
    'title'	=> "Bad",
    'author' =>	"Michael Jacjson",
    'genre' => "Pop",
    'year' =>	"1987",
    ],
]
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Milestone1</title>
  </head>
  <body>
    <header>
        <div class="mx-3">
            <img src="../assets/img/spot_logo.png" alt="">
        </div>
    </header>
    
    <main>
        <div class="row p-5 justify-content-center">
            <?php
                foreach ($albums as $album) { ?>
                    <div class="col-2">
                        <div class="card p-3">
                            <img src="<?php echo $album['poster'] ?>" alt="">
                            <h4>
                                <?php echo $album['title'] ?>
                            </h4>
                            <h5>
                                <?php echo $album['author'] ?>
                            </h5>
                        </div>
                    </div>
              <?php  } ?>
        </div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>