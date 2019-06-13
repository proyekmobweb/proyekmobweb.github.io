<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Totoro-Image</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">

    <!-- FIREBASE -->
    <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>

    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"  style="color:blue !important">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/totoro.png" width="50">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Home</a>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/totoro.png" width="50">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">5.0 Lollipop</li>
            <li class="mdl-menu__item">4.4 KitKat</li>
            <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
            <li class="mdl-menu__item">Android History</li>
          </ul>
        </div>
      </div>

      <div class="android-content mdl-layout__content">
        <!-- <div class="android-section-title mdl-typography--display-1-color-contrast">Sign Up</div> -->
        <div class="android-card-container mdl-grid">
        	          <div class="mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--4-col-phone"></div>

          <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
            <!-- <div class="mdl-card__media">
              <img src="images/more-from-1.png">
            </div> -->
            <div class="mdl-card__title">
               <h4 class="mdl-card__title-text">Sign In</h4>
            </div>
            <div class="mdl-card__supporting-text">
              <div class="row">
                <!-- Simple Textfield -->
                <form action="#" style="text-align: center;">
                  <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="uname">
                    <label class="mdl-textfield__label" for="uname">Username</label>
                  </div><br>
                  <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="password" id="pass">
                    <label class="mdl-textfield__label" for="pass">Password</label>
                  </div><br>
                  <button class="mdl-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                    Button
                  </button>
                </form>

                </div>
            </div>
          </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn">R</button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn">E</button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn">D</button>
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Satellite imagery: © 2019 RED, TotoroGlobe</p>
          </div>
        </footer>
      </div>
    </div>
    <!-- <a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/android-dot-com/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a> -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
