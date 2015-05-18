<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>EveningMC - Gaming, Coding & More...</title>
        
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="./css/font-awesome.min.css" rel="stylesheet">
        <link href="./css/styles.css" rel="stylesheet">
	</head>
    
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
 		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
    </script>
	
	<body class="fade-in">
		<div class="navbar navbar-inverse navbar-fixed-top faded" id="top">
        	<div class="container">
            	<a class="navbar-brand bold" href="./">EveningMC Gaming</a>
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                </button>
                
                <div class="collapse navbar-collapse navHeaderCollapse text-capitalize">
                	<ul class="nav navbar-nav navbar-right">
                    	<li class="active"><a class="bold" href="./">Home</a></li>
                        
                    	<li id="dropdown">
                        	<a href="#socialmedia" class="list-group-item bold" data-toggle="collapse" data-parent="#dropdown">Social Media <span class="menu-ico-collapse"><i class="caret"></i></span></a>
                            <div class="collapse" id="socialmedia">
                            	<a href="#tweets" data-toggle="modal" data-target="#tweets" class="list-group-item sub-item">Twitter</a>
                            </div>
                        </li>
                        
                    	<li><a class="bold staff" href="#">Creators</a></li>
                    	<li><a class="bold" href="./blog">Blog</a></li>
                    	<li><a class="bold" href="#contact" data-toggle="modal">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">
        	<div class="jumbotron text-center">
            	<h1 style="font-size: 50px">Official EveningMC Gaming website.</h1>
                <br>
                <p>Here you can find out about my Hardware, Software, Minecraft server and Myself, hope you all enjoy!</p>
            </div>
        </div>
        
        <div class="container">
        	<div class="row text-black">
            	<div class="col-md-3">
                	<h3><a href="#">Hardware</a></h3>
                    <p>Find all about the hardware I use for gaming, making videos, and just messing around.</p>
                    <div class="text-center"><a href="./hardware" class="btn btn-danger">Read More</a></div>
                </div>
                
            	<div class="col-md-3">
                	<h3><a href="#">Software</a></h3>
                    <p>Find all about the software I use for recording, editing, and uploading videos.</p>
                    <div class="text-center"><a href="./softwrae" class="btn btn-danger">Read More</a></div>
                </div>
                
            	<div class="col-md-3">
                	<h3><a href="#">Minecraft Server</a></h3>
                    <p>Find all about the Minecraft server I run/own and the specs of the dedicated server that I use.</p>
                    <div class="text-center"><a href="./mcserver" class="btn btn-danger">Read More</a></div>
                </div>
            </div>
        </div>
        
       	<hr align="center" width="78%" />
        
        <div class="navbar navbar-inverse navbar-fixed-bottom">
        	<div class="container">
                <div class="navbar-text pull-right">
                	<a href="https://www.youtube.com/user/EveningMC"><i class="fa fa-lg fa-youtube-play fa-2x fa-space fade-out-hover"></i></a>
                	<a href="https://www.twitter.com/EveningMC"><i class="fa fa-lg fa-twitter fa-2x fa-space"></i></a>
                	<a href="https://www.facebook.com/EveningMC"><i class="fa fa-lg fa-facebook fa-2x fa-space"></i></a>
                	<a href="https://www.twitch.tv/Eveninglight"><i class="fa fa-lg fa-twitch fa-2x fa-space"></i></a>
                </div>
            </div>
        </div>
        
        <div class="modal fade fade-in" id="contact" role="dialog">
        	<div class="modal-dialog">
            	<div class="modal-content">
                	<div class="modal-header">
                    	<h4>Contact EveningMC</h4>
                    </div>
                    
                    <div class="modal-body">
                    	<p>Test</p>
                    </div>
                    
                    <div class="modal-footer">
                    	<a class="bold btn btn-danger" data-dismiss="modal">Cancel</a>
                    	<a class="bold btn btn-success">Submit</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="tweets" role="dialog">
        	<div class="modal-dialog">
            	<div class="modal-content">
                	<div class="modal-header">
                    	<h4>Latest Tweets</h4>
                    </div>
                    
                    <div class="modal-body" align="center">
                    	<a class="twitter-timeline" href="https://twitter.com/EveningMC" data-widget-id="475832576376991744">Tweets by @EveningMC</a>
                    </div>
                    
                    <div class="modal-footer">
                    	<a class="bold btn btn-danger" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="facebook" role="dialog">
        	<div class="modal-dialog">
            	<div class="modal-content">
                	<div class="modal-header">
                    	<h4>Latest Tweets</h4>
                    </div>
                    
                    <div class="modal-body" align="center">
                    	<div class="fb-like-box" data-href="https://www.facebook.com/EveningMC" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
                    </div>
                    
                    <div class="modal-footer">
                    	<a class="bold btn btn-danger" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/custom.js"></script>
                        
		<script>
			!function(d,s,id) {
				var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
				if(!d.getElementById(id)) {
				js=d.createElement(s);
				js.id=id;
					js.src=p+"://platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js,fjs);
				}
			}
			(document,"script","twitter-wjs");
		</script>
        
        <a href="#top" class="scrollup"></a>
    </body>
</html>