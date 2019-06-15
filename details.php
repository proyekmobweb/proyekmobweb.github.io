<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='//fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-orange.min.css">
    <link rel="stylesheet" href="styles.css">
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
    <script type="text/javascript">
      function getUrlVars()
      {
          var vars = [], hash;
          var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
          for(var i = 0; i < hashes.length; i++)
          {
              hash = hashes[i].split('=');
              vars.push(hash[0]);
              vars[hash[0]] = hash[1];
          }
          return vars;
      }
      var id = getUrlVars()["id"];
      var tipe = getUrlVars()["tipe"];

      var request = new XMLHttpRequest()
      if (tipe==1){
        request.open('GET', 'https://api.themoviedb.org/3/movie/now_playing?api_key=3a04a6aae4cf952296b13fd4c5368983&language=en-US&page=1', true)
      }else{
        request.open('GET', 'https://api.themoviedb.org/3/movie/popular?api_key=3a04a6aae4cf952296b13fd4c5368983&language=en-US', true)
      }
      request.onload = function() {
        var data = JSON.parse(this.response)

        if (request.status >= 200 && request.status < 400) {
            var hasil = data.results[id];
            var backdrop_image = "url('https://image.tmdb.org/t/p/w500/"+hasil.backdrop_path+"');";
  
            var moviee='<div class="mdl-card__media mdl-color-text--grey-50" style="background-size:contain; background-repeat:no-repeat; background-color:black;background-image: '+backdrop_image+'">'+
              '<h3>'+hasil.title+'</h3>'+
            '</div>'+
            '<div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">'+
              // '<div class="minilogo"></div>'+
              '<div>'+
                '<h5>'+hasil.original_title+'<br><span style="font-size:70%">Release Date: '+hasil.release_date+'</span></h5>'+
              '</div>'+
              '<div class="section-spacer"></div>'+
              '<div class="meta__favorites">'+
                +Math.floor(hasil.popularity)+' <i class="material-icons" role="presentation">favorite</i>'+
                '<span class="visuallyhidden">favorites</span>'+
              '</div>'+
              '<div>'+
                '<i class="material-icons" role="presentation">bookmark</i>'+
                '<span class="visuallyhidden">bookmark</span>'+
              '</div>'+
              '<div>'+
                '<i class="material-icons" role="presentation">share</i>'+
                '<span class="visuallyhidden">share</span>'+
              '</div>'+
            '</div>'+
            '<div class="mdl-color-text--grey-700 mdl-card__supporting-text">'+
              '<h3>Overview</h3>'+
              '<p>'+
                hasil.overview+
              '</p>'+
            '</div>'+
            '<div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">'+
              '<form>'+
                '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">'+
                  '<textarea rows=1 class="mdl-textfield__input" id="comment"></textarea>'+
                  '<label for="comment" class="mdl-textfield__label">Join the discussion</label>'+
                '</div>'+
                '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">'+
                  '<i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>'+
                '</button>'+
              '</form>'+
              '<div class="comment mdl-color-text--grey-700">'+
                '<header class="comment__header">'+
                  '<img src="images/co1.jpg" class="comment__avatar">'+
                  '<div class="comment__author">'+
                    '<strong>James Splayd</strong>'+
                    '<span>2 days ago</span>'+
                  '</div>'+
                '</header>'+
                '<div class="comment__text">'+
                  'Amazing Movie! I love the story!'+
                '</div>'+
                '<nav class="comment__actions">'+
                  '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">'+
                    '<i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>'+
                  '</button>'+
                  '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">'+
                    '<i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>'+
                  '</button>'+
                  '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">'+
                    '<i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>'+
                  '</button>'+
                '</nav>'+
                '<div class="comment__answers">'+
                  '<div class="comment">'+
                    '<header class="comment__header">'+
                      '<img src="images/co2.jpg" class="comment__avatar">'+
                      '<div class="comment__author">'+
                        '<strong>John Dufry</strong>'+
                        '<span>2 days ago</span>'+
                      '</div>'+
                    '</header>'+
                    '<div class="comment__text">'+
                      'Yep, agree!'+
                    '</div>'+
                    '<nav class="comment__actions">'+
                      '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">'+
                        '<i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>'+
                      '</button>'+
                      '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">'+
                        '<i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>'+
                      '</button>'+
                      '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">'+
                        '<i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>'+
                      '</button>'+
                   '</nav>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>'
          ;
            
          $(".reeee").html(moviee); 

          var prevnext="";
          if (id==0){
            prevnext='<div class="section-spacer"></div>';
            if(tipe==1){
              prevnext+='<a href="details.html?tipe=1&id='+(parseInt(id)+1)+'" class="demo-nav__button">';
            }else{
              prevnext+='<a href="details.html?tipe=2&id='+(parseInt(id)+1)+'" class="demo-nav__button">';
            }
              prevnext+='Next'+
                          '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">'+
                            '<i class="material-icons">arrow_forward</i>'+
                          '</button>'+
                        '</a>';
          }else{
            if(tipe==1){
              prevnext='<a href="details.html?tipe=1&id='+(parseInt(id)-1)+'" class="demo-nav__button">';
            }else{
              prevnext='<a href="details.html?tipe=2&id='+(parseInt(id)-1)+'" class="demo-nav__button">';
            }
            prevnext+='<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">'+
                           '<i class="material-icons">arrow_back</i>'+
                          '</button>'+
                          'Prev'+
                        '</a>'+
                        '<div class="section-spacer"></div>';
            if(tipe==1){
              prevnext+='<a href="details.html?tipe=1&id='+(parseInt(id)+1)+'" class="demo-nav__button">';
            }else{
              prevnext+='<a href="details.html?tipe=2&id='+(parseInt(id)+1)+'" class="demo-nav__button">';
            }
                prevnext+='Next'+
                '<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">'+
                  '<i class="material-icons">arrow_forward</i>'+
                '</button>'+
              '</a>';
          }
          
          $(".prevnext").html(prevnext); 

        } else {
          console.log('error')
        }
      }

      request.send()

    </script>
  </head>
  <body>
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main style="margin-top:8%">
        <div class="demo-back">
          <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" title="go back" role="button">
            <i class="material-icons" role="presentation">arrow_back</i>
          </a>
        </div>
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col reeee">
            </div>
            <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col prevnext">
            
          </nav>
        </div>
        <footer class="mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
              <span class="visuallyhidden">Twitter</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
              <span class="visuallyhidden">Facebook</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
              <span class="visuallyhidden">Google Plus</span>
            </button>
          </div>
          <div class="mdl-mini-footer--right-section">
            <button class="mdl-mini-footer--social-btn social-btn__share">
              <i class="material-icons" role="presentation">share</i>
              <span class="visuallyhidden">share</span>
            </button>
          </div>
        </footer>
      </main>
      <div class="mdl-layout__obfuscator"></div>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
