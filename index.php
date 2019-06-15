<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="manifest" href="manifest.json">
<!--     <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps."> -->
    <title>RED Movie</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="favicon.ico">

    <link rel="icon" sizes="192x192" href="images/192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="RED Movie">
    <link rel="apple-touch-icon-precomposed" href="images/152.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-orange.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


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
  		request.open('GET', 'https://api.themoviedb.org/3/movie/now_playing?api_key=3a04a6aae4cf952296b13fd4c5368983&language=en-US&page=1', true)
  		request.onload = function() {
  		  var data = JSON.parse(this.response)

  			if (request.status >= 200 && request.status < 400) {
  		  		var moviee="";
  		  		var i=0;
  		    	data.results.forEach(nowplaying => {
  		    		var poster = "url('https://image.tmdb.org/t/p/w500/"+nowplaying.poster_path+"');";
              var urllink = "'https://proyekmobweb.github.io/details.php?tipe=1&id="+i+"'";
  		    		if(i<10){
  		    			if(i==0){
  		    				moviee+='<div class="mdl-card coffee-pic mdl-cell mdl-cell--3-col mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--3-col-phone" id="hp" onclick="location.href='+urllink+';" style="cursor: pointer;">'+
  								            '<div class="mdl-card__media mdl-color-text--grey-50" style="background-size:cover; background-image: '+poster+'">'+
  								            '</div>'+
  								            '<div class="mdl-card__supporting-text meta mdl-color-text--grey-600 center-items"  style="justify-content:center;">'+
  								              '<div>'+
  								                '<strong>'+nowplaying.title+'</strong>'+
  								                '<strong>'+nowplaying.release_date+'</strong>'+
  								              '</div>'+
  								            '</div>'+
  								          '</div>';
  							i++;
  		    			} else {
  		    				moviee+='<div class="mdl-card coffee-pic card-content mdl-cell mdl-cell--3-col mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--3-col-phone" style="min-width: 250px;" onclick="location.href='+urllink+';" style="cursor: pointer;">'+
  								            '<div class="mdl-card__media mdl-color-text--grey-50" style="background-size:cover; background-image: '+poster+'">'+
  								            '</div>'+
  								            '<div class="mdl-card__supporting-text meta mdl-color-text--grey-600 center-items"  style="justify-content:center;">'+
  								              '<div>'+
  								                '<strong>'+nowplaying.title+'</strong>'+
  								                '<strong>'+nowplaying.release_date+'</strong>'+
  								              '</div>'+
  								            '</div>'+
  								          '</div>';
  							i++;
  		    			}
  			      		$(".reeee").html(moviee);
  		    		}
  		    	})
  		  	} else {
  		    	console.log('error')
  		  	}
  		}

  		request.send()

  		var request1 = new XMLHttpRequest()
  		request1.open('GET', 'https://api.themoviedb.org/3/movie/popular?api_key=3a04a6aae4cf952296b13fd4c5368983&language=en-US', true)
  		request1.onload = function() {
  		  // Begin accessing JSON data here
  		  var data = JSON.parse(this.response)

  			if (request1.status >= 200 && request1.status < 400) {
  		  		var moviee="";
            var i=0;
  		    	data.results.forEach(movie => {
  		    		var poster = "url('https://image.tmdb.org/t/p/w500/"+movie.poster_path+"');";
              var urllink = "'https://proyekmobweb.github.io/details.php?tipe=2&id="+i+"'";

  		      		moviee+='<div class="mdl-card coffee-pic mdl-cell mdl-cell--4-col mdl-cell--4-col-desktop mdl-cell--3-col-tablet mdl-cell--2-col-phone" onclick="location.href='+urllink+';" style="cursor: pointer;">'+
  							            '<div class="mdl-card__media mdl-color-text--grey-50" style="background-size:cover;background-color:black;background-repeat:no-repeat; background-image: '+poster+'">'+
  							            '</div>'+
  							            '<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">'+
  							              '<div>'+
  							                '<strong>'+movie.title+'</strong>'+
  							                '<span>'+movie.release_date+'</span>'+
  							              '</div>'+
  							            '</div>'+
  							          '</div>';
  		      		$(".songs").html(moviee);
                i++;
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
          <div class="mdl-layout__header-row" style="background-color:#1fa4b5">
            <span class="android-title mdl-layout-title" style="color:white; font-weight: bold;">
              <img class="android-logo-image" src="images/logo.png" width="30"> <span style="color:red">RED</span> Movie
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
              </nav>
            </div>
          </div>
        </div>
        <div class="android-drawer mdl-layout__drawer">
       <span class="mdl-layout-title">
         <img class="android-logo-image" src="images/logo.png">
       </span>
     </div>

      <main>
      	<h1 class="mdc-typography--headline1" style="font-weight: bold; letter-spacing: 10px; text-align: center;color:white"><span style="color:red">RED</span> MOVIE</h1>
      	<h4 style="font-weight: bold; letter-spacing: 10px; text-align: center;color:white">LATEST MOVIES</h4>
      	<div class="demo-blog__posts center-items reeee" style="overflow-x: auto; display: flex; justify-content: center; align-content: center;">
		</div><br>
      	<h4 style="font-weight: bold; letter-spacing: 10px; text-align: center;color:white ">MOST POPULAR MOVIES</h4>

        <div class="demo-blog__posts center-items songs mdl-grid">

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
    <!-- <script src="src/js/app.js"></script> -->

</body>
</html>
