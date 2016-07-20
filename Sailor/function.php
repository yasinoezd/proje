
<?php
require_once 'config.php';

function üssü($sayi1,$sayi2){

	$sonuc= pow($sayi1,$sayi2);

	return $sonuc;


}

function getHead($title)
{
	$string="
    <meta charset=\"utf-8\">
<title>{$title}</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<meta name=\"description\" content=\"Bootstrap 3 template for corporate business\" />
<meta name=\"author\" content=\"http://iweb-studio.com\" />
<!-- css -->
<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" />
<link href=\"plugins/flexslider/flexslider.css\" rel=\"stylesheet\" media=\"screen\" />	
<link href=\"css/cubeportfolio.min.css\" rel=\"stylesheet\" />
<link href=\"css/style.css\" rel=\"stylesheet\" />

<!-- Theme skin -->
<link id=\"t-colors\" href=\"skins/default.css\" rel=\"stylesheet\" />

	<!-- boxed bg -->
	<link id=\"bodybg\" href=\"bodybg/bg1.css\" rel=\"stylesheet\" type=\"text/css\" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    ";
	return $string;
}

function getHeader()
{

	$header="
    <div id=\"wrapper\">
	<!-- start header -->
	<header>

			
        <div class=\"navbar navbar-default navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.php\"><img src=\"img/logo.png\" alt=\"\" width=\"199\" height=\"52\" /></a>
                </div>
                <div class=\"navbar-collapse collapse \">
                    <ul class=\"nav navbar-nav\">
                        <li>
							<a href=\"index.php\"  >ANASAYFA</a>
						</li>
						<li>
							<a href=\"login.php\"  >GİRİŞ</a>
						</li>
						<li>
							<a href=\"register.php\"  >KAYDOL</a>
						</li>
						<li>
							<a href=\"#\"  >SAYFA</a>
						</li>


                    </ul>
                </div>
            </div>
        </div>
	</header>    
	
	
   ";
	return $header;
}
function getFooter()
{
	$footer="
    
	<footer>
	<div class=\"container\">
		<div class=\"row\">
			<div class=\"col-sm-3 col-lg-3\">
				<div class=\"widget\">
					<h4>Get in touch with us</h4>
					<address>
					<strong>Sailor company Inc</strong><br>
					 Sailor suite room V124, DB 91<br>
					 Someplace 71745 Earth </address>
					<p>
						<i class=\"icon-phone\"></i> (123) 456-7890 - (123) 555-7891 <br>
						<i class=\"icon-envelope-alt\"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class=\"col-sm-3 col-lg-3\">
				<div class=\"widget\">
					<h4>Information</h4>
					<ul class=\"link-list\">
						<li><a href=\"#\">Press release</a></li>
						<li><a href=\"#\">Terms and conditions</a></li>
						<li><a href=\"#\">Privacy policy</a></li>
						<li><a href=\"#\">Career center</a></li>
						<li><a href=\"#\">Contact us</a></li>
					</ul>
				</div>
				
			</div>
			<div class=\"col-sm-3 col-lg-3\">
				<div class=\"widget\">
					<h4>Pages</h4>
					<ul class=\"link-list\">
						<li><a href=\"#\">Press release</a></li>
						<li><a href=\"#\">Terms and conditions</a></li>
						<li><a href=\"#\">Privacy policy</a></li>
						<li><a href=\"#\">Career center</a></li>
						<li><a href=\"#\">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class=\"col-sm-3 col-lg-3\">
				<div class=\"widget\">
					<h4>Newsletter</h4>
					<p>Fill your email and sign up for monthly newsletter to keep updated</p>
                    <div class=\"form-group multiple-form-group input-group\">
                        <input type=\"email\" name=\"email\" class=\"form-control\">
                        <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-theme btn-add\">Subscribe</button>
                        </span>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div id=\"sub-footer\">
		<div class=\"container\">
			<div class=\"row\">
				<div class=\"col-lg-6\">
					<div class=\"copyright\">
						<p>
							<span>&copy; Sailor 2015 All right reserved. | <a href=\"http://bootstraptaste.com/\">Bootstrap Themes</a> by BootstrapTaste
                             <!-- 
                                All links in the footer should remain intact. 
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Sailor
                            -->
						
						</p>
					</div>
				</div>
				<div class=\"col-lg-6\">
					<ul class=\"social-network\">
						<li><a href=\"#\" data-placement=\"top\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
						<li><a href=\"#\" data-placement=\"top\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
						<li><a href=\"#\" data-placement=\"top\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
						<li><a href=\"#\" data-placement=\"top\" title=\"Pinterest\"><i class=\"fa fa-pinterest\"></i></a></li>
						<li><a href=\"#\" data-placement=\"top\" title=\"Google plus\"><i class=\"fa fa-google-plus\"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up active\"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src=\"js/jquery.min.js\"></script>
<script src=\"js/modernizr.custom.js\"></script>
<script src=\"js/jquery.easing.1.3.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"plugins/flexslider/jquery.flexslider-min.js\"></script> 
<script src=\"plugins/flexslider/flexslider.config.js\"></script>
<script src=\"js/jquery.appear.js\"></script>
<script src=\"js/stellar.js\"></script>
<script src=\"js/classie.js\"></script>
<script src=\"js/uisearch.js\"></script>
<script src=\"js/jquery.cubeportfolio.min.js\"></script>
<script src=\"js/google-code-prettify/prettify.js\"></script>
<script src=\"js/animate.js\"></script>
<script src=\"js/custom.js\"></script>

    
    
    ";
	return $footer;




}

?>
