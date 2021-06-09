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

    <section id="contact" class="full-height">
        <div class="container">
            <h2 class="text-center title-2">NOUS CONTACTER</h2>
            <div class="row">
                <div class="col-md col-lg-6 mx-auto">
                    <p class="text-center">
                        Vous avez des préoccupations, voulez prendre attache avec l’un de nos services, ou tout
                        simplement
                        avoir une information. <br>
                        Prenez directement contact avec nous
                    </p>
                </div>
            </div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="formNom">Nom*</label>
                        <input type="text" class="form-control form-control-lg" id="formNom" placeholder="Nom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="formPrenoms">Prénoms*</label>
                        <input type="text" class="form-control form-control-lg" id="formPrenoms" placeholder="Prénoms">
                    </div>
                </div>
                <div class="form-group">
                    <label for="formEmail">Email*</label>
                    <input type="email" class="form-control form-control-lg" id="formEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="formSujet">Sujet</label>
                    <input type="text" class="form-control form-control-lg" id="formSujet" placeholder="Sujet">
                </div>
                <div class="form-group">
                    <label for="formMsg">Message*</label>
                    <textarea class="form-control form-control-lg" id="formMsg" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col col-md-6 col-lg-4 mx-auto">
                        <button id="btncontact" type="button" class="btn btn-block btn-outline-primary">Envoyer</button>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <?php include_once 'inc/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="/js/menu.js"></script>
    <script src="/js/myscript.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>