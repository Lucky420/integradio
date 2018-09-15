<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inteGraadio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<header>
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="logo">
                        inteGradio
                    </h1>
                </div>
                <div class="col-md-2">
                    <div class="languages">
                        EST | RUS
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<body>
<div class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-left">
                    <h1 class="hero-title">
                        Start your podcast journey!
                    </h1>
                    <p>
                        Have you ever wondered about the outsider’s perspective of Estonia?
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="player search-box">
                    <div class="player-top">
                        <div class="large-search-front">
                            <div class="fas fa-search">
                            </div>
                            <div class="search-sample">
                                lifestyle, culture, ecology, cars
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="recent">
    <div class="container">
        <div class="row">
            <h2>Trending Podcasts</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="Podcast.png" alt="">
            </div>
            <div class="col-md-6">
                <img src="Podcast.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="table">
                <h2>Podcast statistics</h2>
                <table>
                    <thead>
                    <th>
                        Name
                    </th>
                    <th>
                        Followers
                    </th>
                    <th>
                        Listening Stats
                    </th>
                    </thead>
                    <tbody>
                    <?php for($i = 0; $i<10; $i++){ ?>
                        <tr>
                            <td>Amphibian (Kahepaikne)</td><td>891</td><td>14000</td>
                        </tr>
                    <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>
</html>