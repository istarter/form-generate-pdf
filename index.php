<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
    <title>Logo CheckList</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="js/jquery.js"></script>
    <script src="./js/jQuery-Text-Counter-master/textcounter.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
</head>

<body id="top">

    <!-- start preloader -->
    <div class="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- end preloader -->

    <!-- start header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <p><i class="fa fa-envelope"></i><span> Email</span>contact@viralwebbs.com</p>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <p><i class="fa fa-globe"></i><span>Website</span><a href="#">www.viralwebbs.com</a></p>
                </div>
                <div class="col-md-5 col-sm-4 col-xs-12">
                    <ul class="social-icon">
                        <li><span>Meet us on</span></li>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-apple"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- start navigation -->
    <nav class="navbar navbar-default templatemo-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img class="img-responsive" src="images/viralwebbs-logo.png"></a>
            </div>
            <!--<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#team">TEAM</a></li>
						<li><a href="#service">SERVICE</a></li>
						<li><a href="#portfolio">PORTFOLIO</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div>-->
        </div>
    </nav>
    <!-- end navigation -->

    <!-- start home -->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">Viral Webbs<span>Creative Logo
                            Design Brief <br>version 1.0</span></h1>
                    <div class="element">
                        <div class="sub-element">Step 1: Fill Up Checklist</div>
                        <div class="sub-element">Step 2: Hit Download</div>
                        <div class="sub-element">Step 3: Wait For Team</div>
                    </div>
                    <!--<a data-scroll href="#about" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">GET STARTED</a>-->

                    <!--        <div class="col-sm-12">
          <!--form start-->


                    <!--========================================================-->
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- start employee -->
    <section id="employee">
        <div class="termination_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <form action="process.php" method="POST">
                            <h2 style="" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Client
                                <span>Information</span></h2>
                            <input type="hidden" value="Client Information" name="client-info">
                    </div>
                    <div class=" col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">

                        <div class="form-group">
                            <label class="label-form" for="name">Name:</label>
                            <input type="name" name="name" quired maxlength="50" class="form-control" id="name" placeholder="Enter Name" name="name">
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="email">Email:</label>
                            <input type="email" name="email" quired maxlength="50" class="form-control" id="email" placeholder="abc@abc.com" name="email">
                        </div>
                        <div class="form-group">
                            <label class="label-form" for="pwd">Mobile:</label>
                            <input type="mobile" name="mobile" quired maxlength="20" class="form-control" id="pwd" placeholder="Enter mobile no" name="mobile">
                        </div>
                        <div class="col-md-12">
                            <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Logo
                                <span>Design</span></h2>
                            <input type="hidden" value="Logo Design" name="logo-design">
                        </div>
                        <br>


                        <div class="form-group" style="margin-left: 10px;">
                            <!--company-name-->
                            <label class="label-form" for="logo">Company Name:</label>
                            <input type="hidden" value="Company Name" name="comp-name">
                            <input type="logo" name="logo" class="form-control ct-limit" id="logo " placeholder="Enter logo name" name="logo">
                            <p class="tag-line">The way you want it on your logo</p><br>
                        </div>
                        <!--company-name-end-->

                        <!--tag-line-->

                        <div class="form-group">
                            <label class="label-form" for="tagLine">Tag Line:</label>
                            <input type="hidden" value="Tag Line:" name="tag-line">
                            <input type="text" name="tagline" class="form-control ct-limit" id="tagLine " placeholder="Enter Tag Line" name="tagLine">
                            <p class="tag-line">Enter tag line if you want select the choice</p>
                            <label class="radio-inline">
                        </div>
                        <!--tag-line-end-->

                        <!--descriptin-area-->
                        <div class="form-group" style="">
                            <label class="label-form" for="Discription">Discription</label>
                            <input type="hidden" value="Discription" name="descript">
                            <textarea class="form-control name=" discription" desc-limit" rows="10" id="Discription"></textarea>
                        </div>
                        <p class="tag-line">What types of products or services your company supplies, etc.?</p>
                        <!--descriptin-area-end-->


                        <!--description-effects-end -->

                        <!--description-symbol-->


                        <!--description-symbol-end-->
                        <!--font-detail-end-->



                        <!--form-end-->
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end employee -->
    <section id="chek" style="float:left;width:100%">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label style="font-size: 18px" class="label-form" for="check">How would you describe the effect
                            you are looking for in your logo?</label>
                        <input type="hidden" value="How would you describe the effect
                            you are looking for in your logo?" name="all-check"><br>
                        <p class="tag-line">Choose from this list of words and/or add your own.</p>
                        <div class="row">
                            <!--col1-->
                            <div class="col-md-4 col-xs-6 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
                                <label class="checkbox">
                                    <input name="unique" type="checkbox" value="">Unique/Creative
                                </label>
                                <label class="checkbox">
                                    <input name="clean" type="checkbox" value="">Clean/Simple
                                </label>
                                <label class="checkbox">
                                    <input name="classy" type="checkbox" value="">Classy
                                </label>

                                <label class="checkbox">
                                    <input name="professional" type="checkbox" value="">Professional
                                </label>
                                <label class="checkbox">
                                    <input name="medical" type="checkbox" value="">Medical
                                </label>
                                <label class="checkbox">
                                    <input name="luxurious" type="checkbox" value="">Luxurious
                                </label>

                                <label class="checkbox">
                                    <input name="industry" type="checkbox" value="">Industry Oriented
                                </label>
                                <label class="checkbox">
                                    <input name="corporate" type="checkbox" value="">Corporate
                                </label>
                                <label class="checkbox">
                                    <input name="modern" type="checkbox" value="">Modern
                                </label>
                                <label class="checkbox">
                                    <input name="childlike" type="checkbox" value="">Childlike
                                </label>
                            </div>
                            <!--col2-->
                            <div class="col-xs-4 hidden-xs"></div>
                            <div class="col-md-4 col-xs-12">
                                <label class="checkbox">
                                    <input name="outdoors" type="checkbox" value="">Outdoors/Natural
                                </label>
                                <label class="checkbox">
                                    <input name="tech" type="checkbox" value="">High Tech
                                </label>
                                <label class="checkbox">
                                    <input name="retro" type="checkbox" value="">Retro
                                </label>
                                <label class="checkbox">
                                    <input name="fun" type="checkbox" value="">Fun
                                </label>
                                <label class="checkbox">
                                    <input name="serious" type="checkbox" value="">Serious
                                </label>
                                <label class="checkbox">
                                    <input name="illustrative" type="checkbox" value="">Illustrative
                                </label>
                                <label class="checkbox">
                                    <input name="silly" type="checkbox" value="">Silly/Cartoon
                                </label>
                                <label class="checkbox">
                                    <input name="masculine" type="checkbox" value="">Masculine
                                </label>
                                <label class="checkbox">
                                    <input name="feminine" type="checkbox" value="">Feminine
                                </label>

                            </div>
                        </div>

                        <br>
                    </div>

                    <!--description-effects-end -
    
    <!--description-symbol-->

                    <div class="form-group">
                        <label style="font-size:25px;" class="label-form" for="check">Would you like a symbol or a
                            logotype?</label>
                        <input type="hidden" value="Would you like a symbol or a
                            logotype?" name="logo-type">
                        <br>
                        <p class="tag-line">Choose from this list of words and/or add your own.</p>

                        <label class="checkbox">
                            <input type="checkbox" name="symbol" value="">Symbol with font style.
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="nosymbol" value="">No Symbol Please. Just a Professional Font
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="nausal" value="">Not Sure. Leave it to NAUSAL
                        </label>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--chekedlist-->
    <section id="for_m" style="width:100%;float:left">
        <div class="termination_form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!--graphic-detail-->
                        <div class="form-group" style="">
                            <label style="font-size: 26px; margin-top: 44px" class="label-form" for="Discription">Which
                                graphic elements or images would you want the designer to use/emphasize or AVOID using
                                in your logo?</label>
                            <input type="hidden" value="Which
                                graphic elements or images would you want the designer to use/emphasize or AVOID using
                                in your logo?" name="graphic-element-q">
                            <textarea name="graphic-element" class="form-control gralimit" rows="10" id="Discription" placeholder="Please explain what to avoid and what to use"></textarea>
                        </div>
                        <!--graphic-detail-end-->

                        <!--color-scheme-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="label-form" for="like">Like:</label>
                                    <input type="hidden" value="Which color you like" name="like-color">
                                    <input type="name" name="like" class="form-control ct-limit" id="name" placeholder="Which color you like" name="name">
                                </div>
                                <div class="col-sm-6">
                                    <label class="label-form" for="like">DisLike:</label>
                                    <input type="hidden" value="Which color you Dislike" name="dislike-color">
                                    <input type="name" name="dislike" class="form-control ct-limit" id="name" placeholder="Which color you Dislike" name="name">
                                </div>
                            </div>
                        </div>
                        <!--color-scheme-end-->

                        <!--Attachment-files-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="label-form" for="Discription">Please provide 3 reference logos that
                                        you dislike along with reasons why you dislike them</label>
                                    <input type="hidden" value="Dislike Logoes" name="dislike-logoes">
                                    <input type="hidden" value="Please provide 3 reference logos that you dislike along with reasons why you dislike them" name="logo-dislike-q">
                                    <textarea name="logo-dislike" class="form-control reflimit" rows="10" id="Discription"></textarea><br>
                                    <input type="file" name="logo-dislike" value="" class="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="label-form" for="Discription">Please provide 3 reference logos that
                                        you admire along with reasons why you admire them</label>
                                    <input type="hidden" value="Liked Logoes" name="liked-logoes">
                                    <textarea name="logo-like" class="form-control reflimit" rows="10" id="Discription"></textarea><br>
                                    <!-- <button type="button" class="btn btn-primary">Attachement</button> -->
                                    <input type="file" name="logo-like" value="" class="">
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <!--description-symbol-end--->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--chekedlist--end--><br><br>
    <section>
        <div style="float: left;width: 100%;background: #202020;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-md-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">

                            <!--font-detail-->
                            <div class="form-group">
                                <label style="font-size: 25px;" class="label-form" for="check">Would you like a
                                    symbol or a logotype?</label>
                                <input type="hidden" value="Would you like a
                                        symbol or a logotype?" name="logotype"><br>
                                <p style="font-size: 20px;" class="tag-line">Choose from this list of words and/or
                                    add your own.</p>

                                <label class="checkbox">
                                    <input type="checkbox" name="corporate" value="">Corporate
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="script" value="">Script
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bold" value="">Bold
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="light" value="">Light
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="fancy" value="">Fancy
                                </label>
                            </div>
                            <!--font-detail-end-->

                            <br><br>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <br><br><span><button type="submit" class="btn btn-primary btn-lg">submit</button> </span><span><button type="button" class="btn btn-primary btn-lg">Download</button> </span>
            </div><br><br>
            </form>
        </div>
    </section>





    <br><br><br>
    <div class="hello" <!-- checklist -->
        <!--<section id="checklist">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                     <div class="col-md-12">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">TERMINATION <span>REASON</span></h2>
                    </div>
                    <div class=" col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
                                <div class="form-group">

                            <div class="col-md-offset-1 col-sm-6 col-xs-12">
                                <label style="font-size: 20px;" class="label-form" for="days-payed">Nature of <span style="color:#28a7e9">Violation</span></label>
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox" value="">Poor Performance
                                </label>
                                
                                <label class="checkbox">
                                    <input type="checkbox" value="">Falsification of Documents/Records
                                </label>
                                
                                <label class="checkbox">
                                    <input type="checkbox" value="">Absence/Tardiness
                                </label>
                                
                                
                                <label class="checkbox">
                                    <input type="checkbox" value="">Violation of Company Policy
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="">Insubordination
                                </label>
                                
                                
                                <label class="checkbox">
                                    <input type="checkbox" value="">Harassment
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="">Other
                                </label>
                            </div>
                            <div class="col-xs-3  hidden-xs"></div>
                            <div class="col-md-offset-1  col-md-3  col-xs-12">
                                
                                <label style="font-size: 20px;" class="label-form" for="days-payed">Action <span style="color:#28a7e9">Taken</span></label>
                                <label class="checkbox">
                                    <input type="checkbox" value="">Verbal Warning
                                </label>
                                
                                <label class="checkbox">
                                    <input type="checkbox" value="">Suspension
                                </label>
                                
                                <label class="checkbox">
                                    <input type="checkbox" value="">Final Warning
                                </label>
                                
                                <label class="checkbox">
                                    <input type="checkbox" value="">Written Warning
                                </label>
                                
                                <label class="checkbox">
                                    <input type="checkbox" value="">Termination
                                </label>
                                
                                
                                <label class="checkbox">
                                    <input type="checkbox" value="">Other
                                </label>
                                
                            </div>
                    </div>
                    </div>
                    <div class="col-md-12">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>OTHER</span></h2>
                    </div>-->
        <!--descriptin-area
                    <div class="form-group" style=" width: 100%;background-color: transparent!important;">
                        <textarea style=" width: 100%;background-color: transparent!important;border: 1px solid #28a7e9!important;color:white !important;font-size: 17px" class="form-control" rows="10" id="Discription" placeholder="What types of products or services your company supplies, etc.?"></textarea>
                    </div>
                    descriptin-area-end-->
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- checklist end -->
    <!-- position -->
    <!--  <section id="pos_ition">
             <div class="termination_form">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">TERMINATING <span>POSITION</span></h2>
                    </div>
                    <div class="col-xs-12">
                        <div class=" col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
                        <form>
                        <!--paragr
                        <div>
                            <p>This termination letter follows the record of your last two weeks performance. This is in regard to your low performance issue. <br>
                                You have been assigned a target which you were unable to achieve so considering that Company has decided to terminate you on the basis of low performance.<br>
                                
                            </p>
                            <!--descriptin-area
                            <div>
                                <label class="label-form" for="pos">You are hereby terminated from your position of</label>
                                <input type="text" class="form-control" id="pos" placeholder="position" name="position">
                            </div>
                            <p class=""> And your financials will be cleared as per Company policy.</p>
                            <!--descriptin-area-end
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="label-form" for="date_s">Date</label>
                                        <input type="text" class="form-control" id="date_s" placeholder="Date" name="date_s">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="label-form" for="manager_Hr">Manager HR</label>
                                        <input type="text" class="form-control" id="manager_Hr" placeholder="Manager HR" name="manager_Hr">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--paragraph-end
                        <br>
                        <div class="text-center">
                            <br><br><span><button type="button" class="btn btn-primary btn-lg">submit</button> </span><span><button type="button" class="btn btn-primary btn-lg">Download</button> </span><br><br>
                        </div>

                        <!-- prepared by-Checked by-Approved by-end--
            
                        </form>
                        </div>
                    </div>
                </div>   
             </div>   
             </div>
         </section>
         <!-- pos_end -->

    <!--================== form end ====================-->



    <!--================== start team ====================
    	<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>AWESOME</span> TEAM</h2>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="images/team-img1.jpg" class="img-responsive" alt="team img 1">
    							<div class="team-des">
    								<h4>TRACY</h4>
    								<span>Designer</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="images/team-img2.jpg" class="img-responsive" alt="team img 2">
    							<div class="team-des">
    								<h4>MARY</h4>
    								<span>Developer</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="images/team-img3.jpg" class="img-responsive" alt="team img 3">
    							<div class="team-des">
    								<h4>JULIA</h4>
    								<span>Director</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="images/team-img4.jpg" class="img-responsive" alt="team img 4">
    							<div class="team-des">
    								<h4>LINDA</h4>
    								<span>Manager</span>
    								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molest.</p>
    							</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	end team -->

    <!-- start service 
    	<section id="service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">OUR <span>AWESOME</span> THINGS</h2>
    				</div>
    				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-laptop"></i>
    					<h4>Web Design</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    				<div class="col-md-4 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
    					<i class="fa fa-cloud"></i>
    					<h4>Cloud Computing</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-cog"></i>
    					<h4>UX Design</h4>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
    				</div>
    			</div>
    		</div>
    	</section>
    	 end servie -->

    <!-- start portfolio
    	<section id="portfolio">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>AWESOME</span> PORTFOLIO</h2>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
    					   <img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <h4>Project One</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Two</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Three</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Four</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Five</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Six</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <h4>Project Seven</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Eight</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
    			</div>
    		</div>
    	</section>
    	 end portfolio -->

    <!-- start contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>US.</span></h2>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
                    <div class=" col-xs-12">
                        <h2 style="text-align: left !important; font-size:26px!important;    padding-bottom: 4px; " class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">About<span>US.</span></h2>
                        <p>
                            Viral Webbs is a leading innovative company with a tremendous dedication to creating
                            prevalent designs and illustrations.
                            We look and explore web development, custom intranet and e-business software applications
                            from all aspects that make us different from other companies.
                            We provide services to all sizes of businesses located all over the world. This includes
                            small businesses as well as individual clients.
                            Viral Webbs works in a friendly and growth-oriented environment. We have a highly qualified
                            team who are resilient, proactive and, most importantly, always available to our clients.


                            We provide our clients with unique and creative designs and solutions to enhance each one’s
                            individual business and we are always enthusiastic about the work we carry out. We consider
                            that it is also our own achievement when we see that a client succeeds due to our expertise.
                            As the whole world is aware of the current economic recession, it is a priority for
                            business, in general, to economize on costs. Because we understand this particular need, we
                            continue to offer the most competitive prices in the market, whilst continuing to raise our
                            standards and grow.
                            Clients are assured of our utmost confidentiality; data protection and copyright are always
                            maintained and information concerning their interests is protected.
                        </p>
                    </div>

                    <div class="text-center" style="margin-top:10px; float:left">
                        <br>
                        <img class="img-responsive" src="images/viralwebbs-logo.png">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                    <address>
                        <p class="address-title">OUR ADDRESS</p>
                        <span> 21 E 3rd Floor, Huma Plaza, Fazal e Haq Road، China Chowk Underpass, G 6/2 Blue Area, Islamabad, Islamabad Capital Territory 46000</span>
                        <p><i class="fa fa-phone"></i>+92 0300 293 7444</p>
                        <p><i class="fa fa-envelope-o"></i>contact@viralwebbs.com</p>
                        <p><i class="fa fa-map-marker"></i> 21 E 3rd Floor, Huma Plaza, Fazal e Haq Road، China Chowk
                            Underpass, G 6/2 Blue Area, Islamabad, Islamabad Capital Territory 46000</p>

                    </address>
                    <ul class="social-icon">
                        <li>
                            <h4>WE ARE SOCIAL</h4>
                        </li>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->

    <!-- start copyright -->
    <footer id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        Copyright © 2010-2020 Viral Webbs All Rights Reserved. Privacy Policy </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end copyright -->


    <script>
        $('.ct-limit').textcounter({
            type: "word",
            max: 50,
            stopInputAtMaximum: true

        });
        $('.desc-limit').textcounter({
            type: "word",
            max: 150,
            stopInputAtMaximum: true

        });
        $('.gralimit').textcounter({
            type: "word",
            max: 500,
            stopInputAtMaximum: true

        });
        $('.reflimit').textcounter({
            type: "word",
            max: 500,
            stopInputAtMaximum: true

        });
    </script>
</body>

</html>