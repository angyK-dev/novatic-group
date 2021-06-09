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
    <?php include_once 'inc/menu.php'; ?>

    <div class="section" id="evenementiel">
        <div class="container">
            <div class="row">
                <div class="col full-height nova-title">
                    <div class="main-title">
                        <h1 class="nova-anime-1">
                            VIVEZ VOS EMOTIONS AUTREMENT...
                        </h1>
                        <h3 class="text-muted mb-5"></h3>
                        <a class="btn btn-lg btn-outline-info" href="#services" role="button">Découvrir</a>

                        <!-- Night mode switcher -->
                        <div class="section mt-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="switch">
                                            <div id="circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End night mode -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="services" class="full-height">
        <h1 class="text-center">NOS PRESTATIONS <i class="bi bi-award"></i> </h1>
        <div id="agencecom">
            <div class="container">
                <h2 class="text-center title-2">Agence de Communication</h2>
                <h3>Marketing :</h3>
                <p>
                    Pour marquer la différence entre vous et vos concurrents, faites nous confiance. Une équipe
                    qualifiée saura satisfaire vos attentes et bien au-delà. A Novatic, on :
                <div class="nova-list-1">
                    <div class="row">
                        <div class="col-1">
                            <i class="bi bi-check-circle-fill ml-sm-2 ml-lg-5"></i>
                        </div>
                        <div class="col">
                            <p>Identifie et analyses vos besoins</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="bi bi-check-circle-fill ml-sm-2 ml-lg-5"></i></div>
                        <div class="col">
                            <p>Mets en place les moyens d’actions pouvant influencer les comportements</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="bi bi-check-circle-fill ml-sm-2 ml-lg-5"></i></div>
                        <div class="col">
                            <p>Elabore le calendrier d’action et assiste pour le suivi en cas de nécessité</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="bi bi-check-circle-fill ml-sm-2 ml-lg-5"></i></div>
                        <div class="col">
                            <p>Coach vos équipe afin de les rendre plus performant</p>
                        </div>
                    </div>
                </div>
                </p>
                <h3>Communication : </h3>
                <p>
                    Lancez-vous dans une communication importante grâce à nos services et notre stratégie d’impact
                </p>
                <div class="row my-5">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center mb-3">
                            <img class="rounded-circle" src="/assets/img/graphic-design.png" height="180" alt="Identité visuelle" srcset="">
                        </div>
                        <h3 class="text-center">Création graphique</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center mb-3">
                            <img class="rounded-circle" src="/assets/img/branding.png" height="180" alt="Identité visuelle" srcset="">
                        </div>
                        <h3 class="text-center">Identité Visuelle</h3>
                    </div>
                </div>
                <h3>Stratégie et Conseil : </h3>
                <p>
                    Construire son monde autour d’un schéma et au côté des plus grands. Notre mission sera de
                    redynamiser votre secteur avec des approches personnalisées répondant à vos attentes
                </p>

                <div class="row my-5">
                    <div class="col col-md-6 col-lg-3 mx-auto">
                        <button type="button" class="btn btn-outline-info btn-lg btn-block" data-toggle="modal" data-target="#agencecommodal">Contacter ce service</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="agencecommodal" tabindex="-1" role="dialog" aria-labelledby="agencecommodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agencecommodalLabel">Agence de Communication</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-info">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>

        <hr id="agenceevenementielle" class="section-divider">

        <div id="agenceevent">
            <div class="container">
                <h2 class="text-center title-2">Agence Evènementielle</h2>
                <p>
                    Faites nous confiance pour la mise en place de vos événements.
                </p>
                <div class="row my-5">
                    <div class="col-md-4 col-lg-3">
                        <div class="d-flex justify-content-center mb-3">
                            <img class="rounded-circle" src="/assets/img/concert02.png" height="180" alt="Identité visuelle" srcset="">
                        </div>
                        <h3 class="text-center mb-5">Concert</h3>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="d-flex justify-content-center mb-3">
                            <img class="rounded-circle" src="/assets/img/festival02.png" height="180" alt="Identité visuelle" srcset="">
                        </div>
                        <h3 class="text-center mb-5">Festival</h3>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="d-flex justify-content-center mb-3">
                            <img class="rounded-circle" src="/assets/img/birthday02.png" height="180" alt="Identité visuelle" srcset="">
                        </div>
                        <h3 class="text-center mb-5">Anniversaire</h3>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="d-flex justify-content-center mb-3">
                            <img class="rounded-circle" src="/assets/img/wedding02.png" height="180" alt="Identité visuelle" srcset="">
                        </div>
                        <h3 class="text-center mb-5">Marriage</h3>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="d-flex justify-content-center mb-3">
                            <img class="rounded-circle" src="/assets/img/baptism02.png" height="180" alt="Identité visuelle" srcset="">
                        </div>
                        <h3 class="text-center mb-5">Baptême</h3>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="d-flex justify-content-center mb-3">
                            <img class="rounded-circle" src="/assets/img/conference02.png" height="180" alt="Identité visuelle" srcset="">
                        </div>
                        <h3 class="text-center mb-5">Conférence</h3>
                    </div>
                    <div class="col-md-4 col-lg-3 mx-md-auto ml-lg-0">
                        <div class="d-flex justify-content-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="180" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                            </svg>
                        </div>
                        <h3 class="text-center mb-5">Et bien d'autres...</h3>
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col col-md-6 col-lg-3 mx-auto">
                        <button type="button" class="btn btn-outline-info btn-lg btn-block" data-toggle="modal" data-target="#agenceeventmodal">Contacter ce service</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="agenceeventmodal" tabindex="-1" role="dialog" aria-labelledby="agenceeventmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agenceeventmodalLabel">Agence Evènementielle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-info">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>

        <hr id="agencetraiteur" class="section-divider">

        <div id="traiteur">
            <div class="container">
                <h2 class="text-center title-2">Le Traiteur Evènementiel</h2>
                <p>
                    Vous recherchez un traiteur pour l’organisation de vos événements ? <br>
                    Nous vous proposons un service traiteur avec des réceptions clés en mains : <span class="text-nova-1 font-italic">petit déjeuner, cocktail
                        dinatoire, apéritif dinatoire, repas assis, journée presse, salon, séminaire, lancement de produits,
                        inauguration, vernissage...</span>
                    <br>
                    Notre job, mettre en œuvre et en scène vos réceptions. <br>
                    <span class="text-nova-1 font-weight-bold">Gastronomie originale, buffet traiteur, art de la table design, Animations Evénementielles, repas à
                        domicile </span>font partie de notre savoir-faire. <br>
                    Plus qu’un organisateur de réception, nous ferons de vos événements des moments d’exception.
                </p>
                <div class="row my-5">
                    <div class="col col-md-6 col-lg-3 mx-auto">
                        <button type="button" class="btn btn-outline-info btn-lg btn-block" data-toggle="modal" data-target="#agencetraiteurmodal">Contacter ce service</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="agencetraiteurmodal" tabindex="-1" role="dialog" aria-labelledby="agencetraiteurmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agencetraiteurmodalLabel">Le Traiteur Evènementiel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-info">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>

        <hr class="section-divider">
    </section>

    <?php include_once 'inc/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script src="js/menu.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

        // Wrap every letter in a span
        var heroTitle = document.querySelector('.nova-anime-1');
        heroTitle.innerHTML = heroTitle.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        // const spanWrapper = (elt) => elt.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        anime.timeline({
                loop: false
            })
            .add({
                targets: '.nova-anime-1 .letter',
                opacity: [0, 1],
                easing: "easeInOutQuad",
                duration: 2250,
                delay: (el, i) => 150 * (i + 1)
            });

        /*var navbarBrand = document.querySelector('.nova-brand');
        // console.log(navbarBrand);
        navbarBrand.innerHTML = navbarBrand.textContent.replace(/\S/g, "<span class='nova-letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.navbarBrand .nova-letter',
                opacity: [0, 1],
                easing: "easeInOutQuad",
                duration: 1500,
                delay: (el, i) => 150 * (i + 1)
            }).add({
                targets: '.navbarBrand',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });*/
    </script>
</body>

</html>