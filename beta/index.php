<?php 
    $page = isset($_GET['page']) ? $_GET['page'] : 'public/accueil';

    /*if (isset($_GET['page'])) {
        if ($page != "#") {
            $page = 'inc/coming-soon';
        } else {
            $page = $_GET['page'];
        }
    } else {
        $page = 'public/accueil';
    }*/
    
    $page .= '.html';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mybootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <title>NOVATIC GROUP - Bienvenue dans un monde d'innovation perpétuelle</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include_once 'inc/menu.html'; ?>

    <?php include_once $page ?>

    <?php include_once 'inc/footer.html'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script src="js/menu.js"></script>
    <script src="js/myscript.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

        // Wraps every letter in a span...
        // var heroTitle = document.querySelector('.nova-anime-1');
        heroTitle.innerHTML = heroTitle.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        // Animation itself...
        anime.timeline({
                loop: false
            })
            .add({
                targets: '.nova-anime-1 .letter',
                opacity: [0, 1],
                easing: "easeInOutQuad",
                duration: 1250,
                delay: (el, i) => 150 * (i + 1)
            });

        /*var heroSTitle = document.querySelector('.nova-anime-2');
        heroSTitle.innerHTML = heroSTitle.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        anime.timeline({
                loop: false
            })
            .add({
                targets: '.nova-anime-2 .letter',
                translateY: ["1.1em", 0],
                translateZ: 0,
                duration: 750,
                delay: (el, i) => 50 * i
            })*/
    </script>
</body>

</html>