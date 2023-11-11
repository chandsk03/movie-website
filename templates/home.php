<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/static/css/style.css">
</head>
<body>
<div id="mySidenav" class="sidenav">
    <span class="closebtn" onclick="closeNav()">&times;</span>
    <a id="reload">Home</a>
    <a href="templates/request.php">Request</a>
    <a href="#">Telegram</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<div class="test">
    <h1>Welcome to the <a id="reload" href="#">Name</a> Website</h1>
    <p>Our site is updated daily with the movies. Enjoy an exclusive collection of movies
        Take your time to watch the best movies from our site</p>
</div>
<div class="items">
    <?php foreach ($videos as $video): ?>
        <div class="product-card">
            <a href="/templates/movie.php">
                <img src="<?php echo $video['thumbnailPath']; ?>" alt="video">
            </a>
        </div>
    <?php endforeach; ?>
</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    document.getElementById("reload").addEventListener("click", function (event) {
        event.preventDefault(); 
        location.reload(); 
    });
</script>
</body>
</html>