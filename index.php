<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>RED Song.FM</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="RED Song.FM">
    <link rel="apple-touch-icon-precomposed" href="images/152.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="stylesheet" href="/src/css/style.css">
    <link rel="manifest" crossorigin="use-credentials" href="manifest.json">
      <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="/src/js/app.js"></script>

    <!-- <link rel="icon" type="image/x-icon" href="/favicon.ico"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="images/favicon.ico">
    <link rel="shortcut icon" sizes="152x152" href="/images/152.png">
    <link rel="shortcut icon" sizes="196x196" href="/images/196.png"> -->
    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-orange.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


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
	    .mdl-grid.center-items {
		  justify-content: center;
		}
	/*	.horizontal-scroll-wrapper {
		  height: 800px;
		  overflow-x: hidden;
		  overflow-y: auto;
		  transform: rotate(-90deg) translateY(-100px);
	  	  transform:rotate(90deg) ;
	  	  display: flex; 
	  	  align-items: center;
		}*/
		/*.horizontal-scroll-wrapper {
		  width: 50px;
		  height: 800px;
		  overflow-x: hidden;
		  overflow-y: auto;
		  transform: rotate(-90deg) translateY(-100px);
		  transform-origin: center top;
	  	  transform:rotate(90deg) ;
	  	  display: flex; 
	  	  align-items: center;
		}
		.horizontal-scroll-wrapper > div {
	  	  transform:rotate(90deg) ;
		  transform-origin: right top;
		}*/
		@media screen and (max-width: 400px) {
		  #hp {
		    margin-left: 640%;
		    min-width: 200px;
		    min-height: 300px;
		  }
		}
		@media screen and (min-width: 401px) and (max-width: 500px) {
		  #hp {
		    margin-left: 550%;
		    min-width: 200px;
		    min-height: 300px;
		  }
		}
		@media screen and (min-width: 501px) and (max-width: 700px) {
		  #hp {
		    margin-left: 300%;
		    min-width: 250px;
		  }
		}
		@media screen and (min-width: 701px) and (max-width: 800px) {
		  #hp {
		    margin-left: 250%;
		    min-width: 250px;
		  }
		}
		@media screen and (min-width: 801px) {
		  #hp {
		    margin-left: 200%;
		    min-width: 250px;
		  }
		}
		.reeee::-webkit-scrollbar {
		 	display: none;
		}
		.reeee{
			-webkit-overflow-scrolling: touch;
		}
    </style>
    <script type="text/javascript">
    	var request = new XMLHttpRequest()
		request.open('GET', 'http://ws.audioscrobbler.com/2.0/?method=chart.gettopartists&api_key=d65dcb037c7dc07cc77471001b319bd5&format=json', true)
		request.onload = function() {
		  // Begin accessing JSON data here
		  var data = JSON.parse(this.response)

			if (request.status >= 200 && request.status < 400) {
		  		var isi_top_track="";
		  		var i=0;
		    	data.artists.artist.forEach(artis => {
		    		if(i<10){
		    			if(i==0){
		    				isi_top_track+='<div class="mdl-card coffee-pic mdl-cell mdl-cell--3-col mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--3-col-phone" id="hp">'+
								            '<div class="mdl-card__media mdl-color-text--grey-50">'+
								              '<h3><a href="entry.html">'+artis.name+'</a></h3>'+
								            '</div>'+
								            '<div class="mdl-card__supporting-text meta mdl-color-text--grey-600 center-items"  style="justify-content:center;">'+
								            //   '<div class="minilogo"></div>'+
								              '<div>'+
								                '<strong><img src="images/play.png" width="20"> Playcount : '+artis.playcount+'</strong>'+
								                '<strong><img src="images/listener.png" width="20"> Listener : '+artis.listeners+'</strong>'+
								              '</div>'+
								            '</div>'+
								          '</div>';
							i++;
		    			} else {
		    				isi_top_track+='<div class="mdl-card coffee-pic card-content mdl-cell mdl-cell--3-col mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--3-col-phone" style="min-width: 250px;">'+
								            '<div class="mdl-card__media mdl-color-text--grey-50">'+
								              '<h3><a href="entry.html">'+artis.name+'</a></h3>'+
								            '</div>'+
								            '<div class="mdl-card__supporting-text meta mdl-color-text--grey-600 center-items"  style="justify-content:center;">'+
								            //   '<div class="minilogo"></div>'+
								              '<div>'+
								                '<strong><img src="images/play.png" width="20"> Playcount : '+artis.playcount+'</strong>'+
								                '<strong><img src="images/listener.png" width="20"> Listener : '+artis.listeners+'</strong>'+
								              '</div>'+
								            '</div>'+
								          '</div>';
							i++;
		    			}
			      		$(".reeee").html(isi_top_track);	
		    		}
		    	})
		  	} else {
		    	console.log('error')
		  	}
		}

		request.send()

		var request1 = new XMLHttpRequest()
		request1.open('GET', 'http://ws.audioscrobbler.com/2.0/?method=chart.gettoptracks&api_key=d65dcb037c7dc07cc77471001b319bd5&format=json', true)
		request1.onload = function() {
		  // Begin accessing JSON data here
		  var data = JSON.parse(this.response)

			if (request1.status >= 200 && request1.status < 400) {
		  		var isi_top_track="";
		    	data.tracks.track.forEach(song => {
		      		isi_top_track+='<div class="mdl-card coffee-pic mdl-cell mdl-cell--3-col mdl-cell--3-col-desktop">'+
							            '<div class="mdl-card__media mdl-color-text--grey-50">'+
							              '<h3><a href="entry.html">'+song.name+'</a></h3>'+
							            '</div>'+
							            '<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">'+
							              '<div class="minilogo"></div>'+
							              '<div>'+
							                '<strong>'+song.artist.name+'</strong>'+
							                '<span>2 days ago</span>'+
							              '</div>'+
							            '</div>'+
							          '</div>';
		      		$(".songs").html(isi_top_track);
		    	})
		  	} else {
		    	console.log('error')
		  	}
		}

		request1.send()
    </script>
  </head>
  <body>
    <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
          <div class="mdl-layout__header-row" style="background-color:#ffe28a">
            <span class="android-title mdl-layout-title">
              <img class="android-logo-image" src="images/headphone.gif" width="50">
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
                <!-- <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Sign Up</a> -->
                <!-- <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Log In</a> -->
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
        <div class="android-drawer mdl-layout__drawer">
       <span class="mdl-layout-title">
         <img class="android-logo-image" src="images/totoro.png">
       </span>
       <nav class="mdl-navigation">
         <a class="mdl-navigation__link" href="">Phones</a>
         <a class="mdl-navigation__link" href="">Tablets</a>
         <a class="mdl-navigation__link" href="">Wear</a>
         <a class="mdl-navigation__link" href="">TV</a>
         <a class="mdl-navigation__link" href="">Auto</a>
         <a class="mdl-navigation__link" href="">One</a>
         <a class="mdl-navigation__link" href="">Play</a>
         <div class="android-drawer-separator"></div>
         <span class="mdl-navigation__link" href="">Versions</span>
         <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
         <a class="mdl-navigation__link" href="">KitKat 4.4</a>
         <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
         <a class="mdl-navigation__link" href="">Android history</a>
         <div class="android-drawer-separator"></div>
         <span class="mdl-navigation__link" href="">Resources</span>
         <a class="mdl-navigation__link" href="">Official blog</a>
         <a class="mdl-navigation__link" href="">Android on Google+</a>
         <a class="mdl-navigation__link" href="">Android on Twitter</a>
         <div class="android-drawer-separator"></div>
         <span class="mdl-navigation__link" href="">For developers</span>
         <a class="mdl-navigation__link" href="">App developer resources</a>
         <a class="mdl-navigation__link" href="">Android Open Source Project</a>
         <a class="mdl-navigation__link" href="">Android SDK</a>
       </nav>
     </div>

      <main>
      	<h1 class="mdc-typography--headline1" style="font-weight: bold; letter-spacing: 10px; text-align: center;color:black">R<span style="color:red">E</span>D S<span style="color:red">ON</span>G.FM</h1>
      	<h3 style="font-weight: bold; letter-spacing: 10px; text-align: center;color:black">10 TOP ARTIST</h3>
      	<div class="demo-blog__posts center-items reeee" style="overflow-x: auto; display: flex; justify-content: center; align-content: center;">
		</div>
      	<h3 style="font-weight: bold; letter-spacing: 10px; text-align: center;color:black ">MOST POPULAR SONGS</h3>

        <div class="demo-blog__posts center-items songs mdl-grid">

        	<!-- <div id="isi_top_track"> -->
        <!-- 		<div class="mdl-card coffee-pic mdl-cell mdl-cell--6-col mdl-cell--4-col-desktop">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><a href="entry.html">Coffee Pic</a></h3>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div>
          <div class="mdl-card coffee-pic mdl-cell mdl-cell--6-col mdl-cell--4-col-desktop">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><a href="entry.html">Coffee Pic</a></h3>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div> -->
        	<!-- </div> -->

         <!--  <div class="mdl-card coffee-pic mdl-cell mdl-cell--8-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><a href="entry.html">Coffee Pic</a></h3>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div>
          <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
            <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent">
              <i class="material-icons mdl-color-text--white" role="presentation">add</i>
              <span class="visuallyhidden">add</span>
            </button>
            <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
              <img src="images/logo.png">
              +1,337
            </div>
            <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
              <div>
                <strong>The Newist</strong>
              </div>
              <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="menubtn">
                <li class="mdl-menu__item">About</li>
                <li class="mdl-menu__item">Message</li>
                <li class="mdl-menu__item">Favorite</li>
                <li class="mdl-menu__item">Search</li>
              </ul>
              <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">more_vert</i>
                <span class="visuallyhidden">show menu</span>
              </button>
            </div>
          </div>
          <div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><a href="entry.html">On the road again</a></h3>
            </div>
            <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div>
          <div class="mdl-card amazing mdl-cell mdl-cell--12-col">
            <div class="mdl-card__title mdl-color-text--grey-50">
              <h3 class="quote"><a href="entry.html">I couldn’t take any pictures but this was an amazing thing…</a></h3>
            </div>
            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div> -->
         <!--  <div class="mdl-card shopping mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><a href="entry.html">Shopping</a></h3>
            </div>
            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div> -->
          <!-- <nav class="demo-nav mdl-cell mdl-cell--12-col">
            <div class="section-spacer"></div>
            <a href="entry.html" class="demo-nav__button" title="show more">
              More
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">arrow_forward</i>
              </button>
            </a>
          </nav> -->
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
   <!--  <a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/blog/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--white">View Source</a> -->
  
</body>
</html>