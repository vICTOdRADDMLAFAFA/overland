<?php
include 'website.config.php'; // Website Settings
include 'style.config.php'; // Design settings

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gaming server <?php echo' '.$conf['server_name'].' '; ?>">
	<script src='https://seegaming.com/web/api-<?php echo $conf['server_id']; ?>.js'></script>

  <?php echo' <title>'.$conf['server_name'].'</title> '; ?>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/seegaming.css" rel="stylesheet">
	<!-- Theme CSS -->
    <link href="css/animate.seegaming.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
	
	<style>
	#serverload 
	{
		margin: 30px;
		width: 330px;
		height: 136px;
	}
	</style>

</head>

<body id="page-top" class="index" style="background-color:<?php echo $style['background_color']; ?>;color:<?php echo $style['text_color']; ?>">
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   
<?php if(isset($_GET['news'])){?>
 <!-- Navigation -->
    <nav id="hed" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Hide navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/"><?php echo $conf['server_name']; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="/#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/#servers">Monitoring</a>
                    </li>
					 <li class="page-scroll">
                        <a href="/#about">About server</a>
                    </li>
					<?php if($conf['statistic_history'] == "1") echo '<li class="page-scroll"><a href="/#statistic">Statistic</a></li>'; ?>
					 <li class="page-scroll">
                        <a href="/?news">News</a>
                    </li>
					<li class="page-scroll">
                        <a href="<?php echo $conf['addon_url']; ?>"><?php echo $conf['addon_url_text']; ?></a>
                    </li>
					<li class="page-scroll">
                        <a href="<?php echo $conf['addon2_url']; ?>"><?php echo $conf['addon2_url_text']; ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header style ="background-image: url(<?php echo $conf['bg_url']; ?>);background-repeat: no-repeat;background-size: 100%;">
        <div class="container" style="padding-top: 100px; padding-bottom: 20px;">
            <div class="row">
                <div class="col-lg-12">
        
                    <div class="intro-text">
                      <span class="name" style="text-shadow: 1px 1px 5px #000;"><?php echo $conf['server_name']; ?></span>
                 
                        <span class="skills" style="text-shadow:0px 0px 2px #545355;">News - <?php echo $conf['server_slogan']; ?></span>
				
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

			<hr />
            <div class="col-md-9">

			<a class="twitter-timeline" href="https://twitter.com/<?php echo $conf['twitterpage']; ?>">Tweets by <?php echo $conf['twitterpage']; ?></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			
            

            </div>
			
			<div class="col-md-3">
              <center>  <p class="lead">Server info</p></center>
                    <iframe src="https://seegaming.com/web/block2/<?php echo $conf['server_id']; ?>/?style=0" frameborder="0" width="280" height="155" scrolling="no" style="background-color:#fff"></iframe>
            
			
            </div>

        </div>

    </div>
	<hr >
    <!-- /.container -->

<?php } else{ ?>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Close nav</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><?php echo $conf['server_name']; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#servers">Monitoring</a>
                    </li>
					 <li class="page-scroll">
                        <a href="#about">About server</a>
                    </li>
					<?php if($conf['statistic_history'] == "1") echo '<li class="page-scroll"><a href="#statistic">Statistic</a></li>'; ?>
					 <li class="page-scroll">
                        <a href="/?news">News</a>
                    </li>
					<li class="page-scroll">
                        <a href="<?php echo $conf['addon_url']; ?>"><?php echo $conf['addon_url_text']; ?></a>
                    </li>
					<li class="page-scroll">
                        <a href="<?php echo $conf['addon2_url']; ?>"><?php echo $conf['addon2_url_text']; ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header style ="background-image: url(<?php echo $conf['bg_url']; ?>);background-repeat: no-repeat;background-size: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
        
                    <div class="intro-text">
                      <center>  <span class="name" style="text-shadow: 1px 1px 5px #000;"><?php echo $conf['server_name']; ?></span>
                 
                        <span class="skills" style="text-shadow:0px 0px 2px #545355;"><?php echo $conf['server_slogan']; ?></span>
						<div class="page-scroll">
						<a class="btn btn-lg btn-warning wow zoomIn" style="border-radius:25px;border:2px solid <?php echo $style['text_color']; ?>;" href="#servers">Our server</a></center>
					</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="servers"  >
        <div class="container " >
           

            <div class="row">
				<center>
				<?php if($conf['chart_type'] == '1') echo ' <div id="serverload"> </div> '; ?>
				<h1>Now playing <font style='color: orange;'><script type='text/javascript'>document.write(api.players);</script></font> / <font style='color: orange;'><script type='text/javascript'>document.write(api.maxplayers);</script></font> players</h1>
				<h2> <script type='text/javascript'>document.write(api.ip + ':' + api.port);</script></h2>
				<?php if($conf['extended_server_info'] == '1') echo "<h4>Map: <script type='text/javascript'>document.write(api.mapname);</script> | Version: <script type='text/javascript'>document.write(api.version);</script></h4>"; ?>
				
				<h4><script type='text/javascript'>
				if ( api.status == 1 ) 
				{
					document.write("<font style='color: green;'>Server online</font><br /><a data-toggle='modal' data-target='#connectServer' class='btn btn-large btn-outline' style='border-color:<?php echo $style['text_color']; ?>;'>Connect to server</a>");
				} 
				else 
				{
					document.write("<font style='color: red;'>Server offline</font><br />");
				}
				</script>
				</h4>
				<div class="modal fade" id="connectServer" tabindex="-1" role="dialog" aria-labelledby="connectServerLabel">
  <div class="modal-dialog" style="color:#000" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Connect to server</h3>
      </div>
      <div class="modal-body">
	  <h4>Server IP: <script type='text/javascript'>document.write(api.ip + ':' + api.port);</script></h4>
      <br />
	  <a href="https://seegaming.com/go.php?serverid=<?php echo $conf['server_id']; ?>" class='btn btn-large btn-outline' style='background-color:black;border-color:<?php echo $style['text_color']; ?>;'>Connect to server</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
				</center>
	
            </div>
        </div>
    </section>
	
	
	
	
	

    <section class="success  wow fadeInDown" id="about" style="background-color:<?php echo $style['background_description']; ?>;color:<?php echo $style['color_description']; ?>;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About server</h2>
                </div>
            </div>
            <div class="row">
				<br />
                <p><?php echo $conf['server_name']; ?> - <?php echo $conf['server_description']; ?> </p>
                
            </div>
        </div>
    </section>
	
	
	
	<?php if($conf['statistic_history'] == "1")
	{ ?>
    <section class="wow fadeInDown" id="statistic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Last 24 hours online</h2>
                </div>
            </div>
            <div class="row">
			<br />
				<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.min.js"></script>
				<script  src='https://seegaming.com/web/historyapi/<?php echo $conf['server_id']; ?>/'></script>
		
			<center> <canvas id="onlineChart" width="200" height="100"></canvas> </center>
<script>
	var ctx = document.getElementById("onlineChart");
	var onlineChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: times,
			datasets: [{
				label: ['Players online'],
				data: players,
				fill: true,
				backgroundColor: "rgba(255,99,132,0.2)",
				borderColor: "rgba(255,99,132,1)",
				pointBackgroundColor: "rgba(255,99,132,1)",
				pointBorderColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointHoverBorderColor: "rgba(255,99,132,1)",
				pointRadius: 1,
				pointHitRadius: 10,
			}]
		},
		
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
            </div>
        </div>
    </section>
	<?php } ?>

<?php } ?>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above"  style="background-color:<?php echo $style['background_footer']; ?>;color:<?php echo $style['color_footer']; ?>;">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="200ms">
                        <h3>Check out facebook</h3>
                       <center>
					 
<div class="fb-page" data-href="https://www.facebook.com/<?php echo $conf['fbpage']; ?>" data-tabs="timeline" data-width="280" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/<?php echo $conf['fbpage']; ?>" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/<?php echo $conf['fbpage']; ?>">Facebook</a></blockquote></div>
					    </center>
                    </div>
                    <div class="footer-col col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                    <br /> <br /><h3>Vote our server</h3>
					<ul class="list-inline">
					   <li>
						 <a style="color: #ebd900;" class="btn btn-large btn-outline" href="https://seegaming.com/server-<?php echo $conf['server_id']; ?>" alt="Vote our server" title="Vote our server"><i class="fa fa-star-half-o" aria-hidden="true"></i> <script type='text/javascript'>document.write(api.rating);</script> votes</a>
						</li>
					</ul>
                    </div>
                    <div class="footer-col col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
                        <h3>Server info</h3>
							<iframe src="https://seegaming.com/web/block/<?php echo $conf['server_id']; ?>/" frameborder="0" width="280" height="200" scrolling="no" style="background-color:#fff"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <?php echo $conf['server_name']; ?> 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
 

    <!-- jQuery -->
    <script  src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>


    <!-- Theme JavaScript -->
    <script src="js/seegaming.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script type="text/javascript">
var bar = new ProgressBar.SemiCircle(serverload, {
  strokeWidth: 15,
  color: '#1fc9fb',
  trailColor: '#1fc9fb',
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 7000,
  svgStyle: null,
  text: {
    value: '',
    alignToBottom: false
  },
  from: {color: '#1fc9fb'},
  to: {color: '#ff6600'},
  // Set default step function for all animate calls
  step: (state, bar) => {
    bar.path.setAttribute('stroke', state.color);
    var value = Math.round(bar.value() * 100);
    if (value === 0) {
      bar.setText('');
    } else {
      bar.setText('<small>Loaded on</small><b> '+value+'%</b>');
    }

    bar.text.style.color = state.color;
  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '2.1rem';
var players = api.players;
var maxplayers = api.maxplayers;
var percent = Number(players) / Number(maxplayers);
	bar.animate(percent);  // Number from 0.0 to 1.0
</script>

</body>

</html>
