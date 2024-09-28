<!DOCTYPE html>
<html data-wf-domain="teranium.co" data-wf-page="65f1a196aa21a4ebe7f0a400" data-wf-site="65f1a196aa21a4ebe7f0a3f1" lang="en">

<head>
	<meta charset="utf-8" />
	<title>Glint News</title>
	<meta content="Glint News is a clean &amp; simple news, writers, bloggers, tech news, magazines, and blog website!" name="description" />
	<meta content="Glint News" property="og:title" />
	<meta content="Glint News is a clean &amp; simple news, writers, bloggers, tech news, magazines, and blog website!" property="og:description" />
	<meta content="https://assets-global.website-files.com/65f1a196aa21a4ebe7f0a3f1/663da168d6cfff2b27b24b8e_og-image.jpg" property="og:image" />
	<meta content="Glint News" property="twitter:title" />
	<meta content="Glint News is a clean &amp; simple news, writers, bloggers, tech news, magazines, and blog website!" property="twitter:description" />
	<meta content="https://assets-global.website-files.com/65f1a196aa21a4ebe7f0a3f1/663da168d6cfff2b27b24b8e_og-image.jpg" property="twitter:image" />
	<meta property="og:type" content="website" />
	<meta content="summary_large_image" name="twitter:card" />
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="Glint_News24" name="generator" />
	<link href="{{ asset('css/app_web.css') }}" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/" rel="preconnect" />
	<link href="https://fonts.gstatic.com/" rel="preconnect"/>
	<script src="{{ url('assets/js/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
	WebFont.load({
		google: {
			families: ["Inter Tight:100,200,300,regular,500,600,700,800", "Inter:100,200,300,regular,500,600,700,800"]
		}
	});
	</script>
	<script type="text/javascript">
	! function(o, c) {
		var n = c.documentElement,
			t = " w-mod-";
		n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
	}(window, document);
	</script>
	<link href="assets/logo/logo.jpg" rel="shortcut icon" type="image/x-icon" />
	<link href="assets/logo/logo.jpg" rel="apple-touch-icon" />
	
</head>

<body>
	<div class="header">
		<div data-w-id="5bd2c55f-efa1-df98-6531-6bc9587f414d" data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
			<div class="w-layout-blockcontainer container w-container">
				<div class="navbar-wrap">
					<div class="nav-left">
						<a href="index.html" aria-current="page" class="brand w-inline-block w--current"><img src="assets/logo/logo.png" loading="lazy" alt="Glint" width="120"/></a>
						<div class="nav-menu-wrap">
							<nav role="navigation" class="nav-menu w-nav-menu">
								<div class="w-dyn-list">
									<div role="list" class="nav-menu mobile w-dyn-items">
										<div role="listitem" class="nav-item w-dyn-item"><a href="news-categories/world-news.html" class="nav-link">World News</a></div>
										<div role="listitem" class="nav-item w-dyn-item"><a href="news-categories/politics.html" class="nav-link">Politics</a></div>
										<div role="listitem" class="nav-item w-dyn-item"><a href="news-categories/health.html" class="nav-link">Health</a></div>
										<div role="listitem" class="nav-item w-dyn-item"><a href="news-categories/sports.html" class="nav-link">Sports</a></div>
										<div role="listitem" class="nav-item w-dyn-item"><a href="news-categories/technology.html" class="nav-link">Technology</a></div>
										<div role="listitem" class="nav-item w-dyn-item"><a href="news-categories/business.html" class="nav-link">Business</a></div>
									</div>
								</div>
								<form action="https://morning-template.webflow.io/search" class="search mobile w-form">
									<input class="search-input w-input" maxlength="256" name="query" placeholder="Search your mind..." type="search" id="search" required="" />
									<input type="submit" class="d-none w-button" value="Search" />
								</form>
									<a href="subscription.html" class="nav-button mobile w-inline-block">
										<div>Live Tv<span class="nav__link__tv__dot"></span></div>
						  
									</a>
							</nav>
						</div>
					</div>
					<div class="nav-right">
						<form action="https://morning-template.webflow.io/search" class="search w-form">
							<input class="search-input w-input" maxlength="256" name="query" placeholder="Search your mind..." type="search" id="search" required="" />
							<input type="submit" class="d-none w-button" value="Search" />
						</form>
						<div class="nav-line"></div>
						<a href="subscription.html" aria-current="page" class="nav-button desktop w-inline-block w--current">
							<div>Live Tv<span class="nav__link__tv__dot"></span></div>
				
						</a>
						
						
						<div class="menu-button w-nav-button">
							<div class="top-line"></div>
							<div class="center-line"></div>
							<div class="bottom-line"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    @yield('content')


    <section class="footer">
		<div class="w-layout-blockcontainer container w-container">
			<div class="footer-wrap">
				<div class="ft-left">
					<div>
						<a href="index.html" aria-current="page" class="brand w-inline-block w--current"><img src="{{ url('assets/logo/logo.png') }}" loading="lazy" alt="Morning" width="120"/></a>
						<div class="ft-text">Inspiring Minds, Igniting Change.</div>
					</div>
					<div>
						<h6 class="ft-title">Subscribe to our newsletter.</h6>
						<div class="contact-form w-form">
							<form id="wf-form-Newsletter-Form" name="wf-form-Newsletter-Form" data-name="Newsletter Form" method="get" class="ft-form" data-wf-page-id="65f1a196aa21a4ebe7f0a400" data-wf-element-id="77340cb3-ea2a-da98-8a7c-175c27bfc5d7">
								<input class="ft-input w-input" maxlength="256" name="Email" data-name="Email" placeholder="Enter your email..." type="email" id="email" required="" />
								<input type="submit" data-wait="" class="ft-btn w-button" value="" />
							</form>
							<div class="success-message w-form-done">
								<div>Thank you! Your submission has been received!</div>
							</div>
							<div class="error-message w-form-fail">
								<div>Oops! Something went wrong while submitting the form.</div>
							</div>
						</div>
						<p class="ft-info">From breaking news to thought-provoking opinion pieces, our newsletter keeps you informed &amp; engaged.</p>
					</div>
				</div>
				<div class="ft-right">
					<div class="ft-data">
						<div>
							<div class="ft-sub-title">Pages</div>
							<div class="ft-menu"><a href="about-us.html" class="ft-link">About us</a><a href="news.html" class="ft-link">News</a><a href="our-authors.html" class="ft-link">Authors</a><a href="subscription.html" class="ft-link">Subscription</a><a href="contact-us.html" class="ft-link">Contact us</a></div>
						</div>
						<div>
							<div class="ft-sub-title">Categories</div>
							<div class="ft-menu">
								<div class="w-dyn-list">
									<div role="list" class="ft-menu w-dyn-items">
										<div role="listitem" class="category-item w-dyn-item"><a href="news-categories/world-news.html" class="ft-link">World News</a></div>
										<div role="listitem" class="category-item w-dyn-item"><a href="news-categories/politics.html" class="ft-link">Politics</a></div>
										<div role="listitem" class="category-item w-dyn-item"><a href="news-categories/health.html" class="ft-link">Health</a></div>
										<div role="listitem" class="category-item w-dyn-item"><a href="news-categories/sports.html" class="ft-link">Sports</a></div>
										<div role="listitem" class="category-item w-dyn-item"><a href="news-categories/technology.html" class="ft-link">Technology</a></div>
										<div role="listitem" class="category-item w-dyn-item"><a href="news-categories/business.html" class="ft-link">Business</a></div>
									</div>
								</div>
							</div>
						</div>
						<div id="w-node-_77340cb3-ea2a-da98-8a7c-175c27bfc601-27bfc5ca">
							<div class="ft-sub-title">Resources</div>
							<div class="ft-menu"><a href="privacy-policy.html" class="ft-link">Privacy Policy</a><a href="advertise.html" class="ft-link">Advertise</a><a href="terms-conditions.html" class="ft-link">Terms &amp; Conditions</a><a href="template-info/licensing.html" class="ft-link">License</a></div>
						</div>
					</div>
					<div class="ft-social">
						<a href="https://twitter.com/" target="_blank" class="social-link w-inline-block"><img src="{{ url('assets/images/assets-global.website-files.com/65f1a196aa21a4ebe7f0a3f1/663dc1cf22bfaebb45c03807_ic-twitter.svg') }}" loading="lazy" alt="Social Icon" /></a>
						<a href="https://www.facebook.com/" target="_blank" class="social-link w-inline-block"><img src="{{ url('assets/images/assets-global.website-files.com/65f1a196aa21a4ebe7f0a3f1/663dc1cf1fe839efca0e7d33_ic-facebook.svg') }}" loading="lazy" alt="Social Icon" /></a>
						<a href="https://www.youtube.com/" target="_blank" class="social-link w-inline-block"><img src="{{ url('assets/images/assets-global.website-files.com/65f1a196aa21a4ebe7f0a3f1/663dc1cf1e68f6472de507d3_ic-youtube.svg') }}" loading="lazy" alt="Social Icon" /></a>
						<a href="https://www.instagram.com/" target="_blank" class="social-link w-inline-block"><img src="{{ url('assets/images/assets-global.website-files.com/65f1a196aa21a4ebe7f0a3f1/663dc1cfdca09943048aca42_ic-insta.svg') }}" loading="lazy" alt="Social Icon" /></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div>Copyright © 2024 Glint News24.</div>
				<div>Designed and Managed by <a href="https://teranium.co" target="_blank" class="ft-bottom-link">Teranium Co</a></div>
			</div>
		</div>
	</section>
	<script src="{{ url('assets/js/d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8f19c.js?site=65f1a196aa21a4ebe7f0a3f1') }}" type="text/javascript"></script>
	<script src="{{ url('assets/js/assets-global.website-files.com/65f1a196aa21a4ebe7f0a3f1/js/webflow.15a5645b6.js') }}" type="text/javascript"></script>
</body>

</html>