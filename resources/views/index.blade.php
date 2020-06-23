<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124565442-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124565442-1');
</script>
<script type="application/ld+json">
	{ 
	"@context" : "http://schema.org",
	"@type" : "Organization",
	"name" : "Docttocare",
	"alternateName":"Doctto",
	"url":"https://docttocare.com/",
	"aggregateRating":{
	"@type":"AggregateRating",
	"ratingValue":"4.7",
	"reviewCount":"50"}
   } 
	"address": 
   {
	"@type": "PostalAddress",
	"streetAddress": " 3rd Floor, Padmavati Complex, Nanjappa Reddy Layout, Koramangala 8th Block, Koramangala,",
	"addressLocality": "Bengaluru",
	"addressRegion": "karnataka",
	"postalCode": "560095",
	"addressCountry": "India",
	"email":"support@docttocare.com"
   }
   
   {
	 "@context": "http://schema.org",
	 "@type": "Organization",
	 "url": "https://www.docttocare.com/",
	 "contactPoint": [
	   { "@type": "ContactPoint",
		 "telephone": "+91 98216 88088",
		 "contactType": "customer service"
	   }
	 ]
   }
   
   </script>
   
   <script type="application/ld+json">
   {
	 "@context": "https://www.docttocare.com/",
	 "@type": "Person",
	 "name": "Doctto",
	 "url": "https://www.docttocare.com/",
	 "sameAs": [
	   "https://www.facebook.com/",
	   "https://twitter.com/",
	   "https://www.instagram.com/",
	   "https://www.linkedin.com/",
	   "https://plus.google.com"
	 ]
   }
   </script>
   
   <script type="application/ld+json">
   {
	 "@context": "http://schema.org",
	 "@type": "WebSite",
	 "url": "https://www.docttocare.com/",
	 "potentialAction": [{
	   "@type": "SearchAction",
	   "target": "https://www.docttocare.com/search?q={search_term_string}",
	   "query-input": "required name=search_term_string"
	 },{
	   "@type": "SearchAction",
	   "target": "android-app://com.example/https/query.example.com/search/?q={search_term_string}",
	   "query-input": "required name=search_term_string"
	 }]
   }
   </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Title -->
    <title>Book Doctors Appointment, Bangalore-Delhi | Docttocare</title>
    <meta name="keywords" content="Book Doctors Appointment, Book Doctors Appointment Online, Online Doctor Appointment, Doctor Appointment, Online Doctor Appointment scheduling, online doctor consultation, doctor app, docttocare, book doctor appointment,">
    <!-- Meta Description Tag -->
    <meta name="Description" content="Book Doctor Appointment Online instant booking of doctors on docttocare. Find the best doctors nearby you for any kind of health checkup">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="img/core-img/fav.png" />
    <!-- Material Design Lite Stylesheet CSS -->
    <link rel="stylesheet" href="ui/assets/plugin/material/material.min.css" />
    <!-- Material Design Select Field Stylesheet CSS -->
    <link rel="stylesheet" href="ui/assets/plugin/material/mdl-selectfield.min.css">
    <!-- Animteheading Stylesheet CSS -->
    <link rel="stylesheet" href="ui/assets/plugin/animateheading/animateheading.min.css" />
    <!-- Owl Carousel Stylesheet CSS -->
    <link rel="stylesheet" href="ui/assets/plugin/owl_carousel/owl.carousel.min.css" />
    <!-- Animate Stylesheet CSS -->
    <link rel="stylesheet" href="ui/assets/plugin/animate/animate.min.css" />
    <!-- Magnific Popup Stylesheet CSS -->
    <link rel="stylesheet" href="ui/assets/plugin/magnific_popup/magnific-popup.min.css" />
    <!-- Flex Slider Stylesheet CSS -->
    <link rel="stylesheet" href="ui/assets/plugin/flexslider/flexslider.min.css" />
    <!-- Custom Main Stylesheet CSS -->
    <link rel="stylesheet" href="ui/dist/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
    <body ng-app="searchApp" ng-controller="searchCtrl">

    <div class="wrapper">
        <!-- Start Header Section -->
        <header id="header" class="header-dark">
            <div class="layer-stretch hdr">
                <div class="tbl animated fadeInDown">
                    <div class="tbl-row">
                        <div class="tbl-cell hdr-logo">
                            <a href="#"><img src="ui/images/13.png" alt="docttocare logo"></a>
                        </div>
                        <div class="tbl-cell hdr-menu">
                            <ul class="menu">
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" ng-click="bookOnCallModal();">Book Appointment on Call</a>
                                    
                                </li>
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="/blogListing">Health Tips </a>
                                    
                                </li>
                                <li class="menu-megamenu-li">
                                    <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect" href="/contact">Customer Care </a>
                                   
                                </li>
                                @if(Auth::user())
                                            <li class="menu-megamenu-li">
                                                <a href="/dashboard" class="btn-hover color-2" style="color:white;">My Account</a>
                                            </li>
                                            @endif
                                            @if(Auth::guest())
                                            <li class="menu-megamenu-li">
                                                <a href="/login" class="btn-hover color-2" style="color:white;">Login</a>
                                            </li>
                                            <li class="menu-megamenu-li">
                                                    <a href="/register" class="btn-hover color-3" style="color:white;">Register</a>
                                            </li>
                                            @endif
                                <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                            </ul>
                            <div id="menu-bar"><a><i class="fa fa-bars"></i></a></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div id="navbar">
                    <div class="layer-stretch hdr">
                            <div class="tbl animated fadeInDown">
                                <div class="tbl-row">
                                    <div class="tbl-cell hdr-logo">
                                        <a href="#"><img src="assets/img/logo.png" alt="docttocare logo"></a>
                                    </div>
                                    <div class="tbl-cell hdr-menu">
                                        <ul class="menu">
                                            <li class="menu-megamenu-li">
                                                <a class="mdl-button mdl-js-button mdl-js-ripple-effect" ng-click="bookOnCallModal();">Book Appointment on Call</a>
                                                
                                            </li>
                                            <li class="menu-megamenu-li">
                                                <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="/blogListing">Health Tips </a>
                                                
                                            </li>
                                            <li class="menu-megamenu-li">
                                                <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect" href="/contact">Customer Care </a>
                                               
                                            </li>
                                            @if(Auth::user())
                                            <li class="menu-megamenu-li">
                                                <a href="/dashboard" class="btn-hover color-2" style="color:white;">My Account</a>
                                            </li>
                                            @endif
                                            @if(Auth::guest())
                                            <li class="menu-megamenu-li">
                                                <a href="/login" class="btn-hover color-2" style="color:white;">Login</a>
                                            </li>
                                            <li class="menu-megamenu-li">
                                                    <a href="/register" class="btn-hover color-3" style="color:white;">Register</a>
                                            </li>
                                            @endif
                                            <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                                        </ul>
                                        <div id="menu-bar"><a><i class="fa fa-bars"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                  </div>
        </header>
        <!-- Start Slider Section -->
        <div id="slider" class="slider-dark slider-gradient">
            <div class="flexslider slider-wrapper">
                <ul class="slides">     
                    <li>
                        <div class="slider-backgroung-image">
                            <div class="layer-stretch">
                                <div class="slider-search">
                                    <h1>Find Nearby Doctors</h1>
									<p>Your Complete solution for better health.</p>
									
									<div class="slider-search-wrapper">
                                        <div class="row">
											
                                            <div class="col-lg-6 col-lg-offset-2 main-input" id="searchAppo">
                                                <input type="text" ng-model="searchData" id="searchData" placeholder="What are you looking for?" class="" ng-keyup="getSuggestions();">
                                                <button class="btn btn-info btn-sm detectBtn pull-right" id="cancelSug" style="display:none;" ng-click="closeSug();">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                                <br>
                                                
                                                <div id="suggestions" class="suggestionBox" style="display:none;">
                                                    <div ng-repeat="r in response | unique :'key_values'" ng-click="setValue(r.key_values, r.category)">
                                                        
                                                        @{{r.key_values}}
                                                        <br>
                                                    <small style="color: #FF9800;"> <i>@{{r.category}}</i></small>
                                                    <hr class="hrSug">
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <div id="noResult" style="display:none" class="alert alert-warning suggestionBox">
                                                    No Result Found for : "@{{searchData}}"
                                                </div>
											</div>
											<div class="col-lg-6 col-lg-offset-2 main-input" id="searchTest" style="display:none;">
													<input type="text" ng-model="searchDataTest" id="searchDataTest" placeholder="What test are you looking for?" class="" ng-keyup="getSuggestionsTests();">
													<button class="btn btn-info btn-sm detectBtn pull-right" id="cancelSugTest" style="display:none;" ng-click="closeSugTest();">
														<i class="fa fa-times" aria-hidden="true"></i>
													</button>
													<br>
													
													<div id="suggestionsTest" class="suggestionBox" style="display:none;">
														<div ng-repeat="r in responseTest" ng-click="setValueTest(r.testName)">
															
															@{{r.testName}}
														<hr class="hrSug">
														</div>
														
														
													</div>
													<div id="noResultTest" style="display:none" class="alert alert-warning suggestionBox">
														No Result Found for : "@{{searchDataTest}}"
													</div>
												</div>
											
                                            
                                            <div class="col-lg-4 main-input pull-right">
                                                <input type="text" ng-model="location" id="autocomplete" placeholder="Location or Area" ng-keyup="getLoc();" style="border-left: 1px solid #e9e9e9;padding-left: 10px;">
                                           <input type="hidden" name="lat" id="lat" ng-model="lat">
                                           <input type="hidden" name="lng" id="lng" ng-model="lng">
                                                    <button id="detectMe" class="btn btn-default btn-sm detectBtn pull-right" onclick="getLocation()">
                                                        Detect Me
                                                    </button>
                                                      <div class="spinner1" style="display:none;" id="spinner1"></div>
                                               
                                                <br>
                                                <div id="locSuggestions" class="suggestionBox" style="display:none;">
                                                    <div ng-repeat="l in resultLoc" ng-click="setValueLoc(l.city)">
                                                        <hr class="hrSug">
                                                        @{{l.city}}
                                                    </div>
                                                    
                                                </div>
                                                <div id="locNoResult" style="display:none" class="alert alert-warning suggestionBox">
                                                    No Result Found for : "@{{location}}"
                                                </div>
                                              </div>
                                            <div class="col-lg-2 text-center hidden-searchBtn">
                                                <button class="btn btn-primary btn-pill submit">Search</button>
                                            </div> 
                                            
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <a ng-click="showBookAppo();" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect button button-primary button-pill" data-upgraded=",MaterialButton,MaterialRipple">Book Appointments<span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 355.747px; height: 355.747px; transform: translate(-50%, -50%) translate(119px, 33px);"></span></span></a>
									<span>&nbsp &nbsp </span>
									<a ng-click="showBookTest();" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect button button-primary button-pill" data-upgraded=",MaterialButton,MaterialRipple">Book Test<span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 355.747px; height: 355.747px; transform: translate(-50%, -50%) translate(119px, 33px);"></span></span></a>
									
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- End Slider Section -->
        
        {{-- <div class="feature">
                <div class="row m-0">
                    <div class="col-sm-6 col-md-2 feature-block">
                        <div class="block">
                            <img src="ui/images/icons/dentist1.ico"/>
                            <span>Dentist</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 feature-block">
                        <div class="block">
                            <img src="ui/images/icons/Gynecologist.png"/>
                            <span>Gynecologist</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 feature-block">
                        <div class="block">
                            <img src="ui/images/icons/Dermatologist1.png"/>
                            <span>Dermatologist</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 feature-block">
                        <div class="block">
                            <img src="ui/images/icons/ent.png"/>
                            <span>ENT</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 feature-block" style="background-color: #3fafa3;">
                            <div class="block">
                                    <img src="ui/images/icons/ayurved1.png"/>
                                <span>Ayurvedic</span>
                            </div>
                    </div>
                    <div class="col-sm-6 col-md-2 feature-block" style="background-color: #3fafa3d6;">
                                <div class="block">
                                    <img src="ui/images/icons/Homeopath1.png"/>
                                    <span>Homeopathy</span>
                                </div>
                            </div>
                </div>
            </div> --}}
       
        <div class="layer-stretch lap-icon">
            
                <div class="layer-ttl"><h2>Browse <span class="text-primary">Categories</span></h2></div>
                <div class="layer-wrapper">
                    <div class="row pt-3">
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <a href="search?result_type=Dentist/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                <img src="ui/images/icons/dentist1.ico" alt="dentist"/>
                                <p class="title">Dentist</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <a href="search?result_type=Gynecologist/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                <img src="ui/images/icons/Gynecologist.png" alt="gynecologist"/>
                                <p class="title">Gynecologist</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <a href="search?result_type=Dermatologist/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                <img src="ui/images/icons/Dermatologist1.png" alt="dermatologist"/>
                                <p class="title">Dermatologist</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <a href="search?result_type=ENT/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                    <img src="ui/images/icons/ent.png" alt="ENT"/>
                                <p class="title">ENT</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <a href="search?result_type=Ayurvedic/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                    <img src="ui/images/icons/ayurved1.png" alt="ayurveda"/>
                                <p class="title">Ayurvedic</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <a href="search?result_type=Homeopathy/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                    <img src="ui/images/icons/Homeopath1.png" alt="Homeopathy"/>
                                <p class="title">Homeopathy</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-light mob-icon">
                    <div class="layer-stretch">
                        <div class="layer-wrapper">
                                <div class="layer-ttl"><h2>Browse <span class="text-primary">Categories</span></h2></div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                    <div class="col-md-10 related-product">
                                        <div class="owl-carousel owl-theme multi-item-slider">
                                            <div class="theme-owlslider-container owl-offer">
                                                    <a href="search?result_type=Dentist/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                                            <img src="ui/images/icons/dentist1.ico" alt="dentist"/>
                                                            <p class="title">Dentist</p>
                                                        </a>
                                            </div>
                                            <div class="theme-owlslider-container owl-offer">
                                                    <a href="search?result_type=Gynecologist/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                                            <img src="ui/images/icons/Gynecologist.png" alt="gynecologist"/>
                                                            <p class="title">Gynecologist</p>
                                                        </a>
                                            </div>
                                            <div class="theme-owlslider-container owl-offer">
                                                    <a href="search?result_type=Dermatologist/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                                            <img src="ui/images/icons/Dermatologist1.png" alt="dermatologist"/>
                                                            <p class="title">Dermatologist</p>
                                                        </a>
                                            </div>
                                            <div class="theme-owlslider-container owl-offer">
                                                    <a href="search?result_type=ENT/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                                            <img src="ui/images/icons/ent.png" alt="ent"/>
                                                        <p class="title">ENT</p>
                                                    </a>
                                            </div>
                                            <div class="theme-owlslider-container owl-offer">
                                                    <a href="search?result_type=Ayurvedic/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                                            <img src="ui/images/icons/ayurved1.png" alt="ayurveda"/>
                                                        <p class="title">Ayurvedic</p>
                                                    </a>
                                            </div>
                                            <div class="theme-owlslider-container owl-offer">
                                                    <a href="search?result_type=Homeopathy/Bangalore/12.959534300000001/77.6435029" class="category-grid">
                                                            <img src="ui/images/icons/Homeopath1.png" alt="homeopathy"/>
                                                        <p class="title">Homeopathy</p>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
            </div><!-- End Service Section -->
        <div class="bg-light">
                <div class="layer-stretch">
                    <div class="layer-wrapper">
                        <div class="layer-ttl"><h2>Top <span class="text-primary">Offers</span></h2></div>
                        <div class="row">
                            <div class="col-md-1"></div>
                                <div class="col-md-10 related-product">
                                    <div class="owl-carousel owl-theme multi-item-slider">
                                        <div class="theme-owlslider-container owl-offer">
                                            <a href="#"><img class="img-responsive" src="ui/images/discount/coming_soon/1.png" alt="free second consultation"></a>
                                        </div>
                                        <div class="theme-owlslider-container owl-offer">
                                            <img class="img-responsive" src="ui/images/discount/coming_soon/2.png" alt="20% discount on consultation">
                                        </div>
                                        <div class="theme-owlslider-container owl-offer">
                                            <img class="img-responsive" src="ui/images/discount/coming_soon/3.png" alt="top medical facilities">
                                        </div>
                                        <div class="theme-owlslider-container owl-offer">
                                            <img class="img-responsive" src="ui/images/discount/coming_soon/4.png" alt="50% on medical tests">
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
        </div><!-- End Service Section -->
        <div class="app-feature">
            <div class="layer-stretch">
                    <div class="flexslider theme-flexslider">
                            <div class="layer-ttl"><h2>Our <span class="text-primary">Features</span></h2></div>
                            <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides text-center" style="width: 800%; transition-duration: 0s; transform: translate3d(-522px, 0px, 0px);">
                                <li class="clone" aria-hidden="true" style="width: 522px; margin-right: 0px; float: left; display: block;">
                                        <div class="theme-flexslider-container">
                                                <div class="row pt-4">
                                                    <div class="col-md-1"></div>
                                                        <div class="col-md-4">
                                                            <img class="img-fluid" src="ui/images/forPatient.jpg" alt="for patient">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="">
                                                                <p class="font-24 font-500" style="color: #FF9800;">For Patient</p>
                                                                
                                                                    <h4>Your healthcare expert.</h4>
                                                                    {{-- <footer class="blockquote-footer">Jack Welch <cite title="Source Title">Chemical engineer</cite></footer> --}}
                                                                <hr>
                                                                {{-- <p class="text-dark pt-3"><span class="dropcap">A</span> We are a multi-focused designer working on interfaces and branding for digital products. Award winning interdisciplinary Designer &amp; Art director. a team who specialise in coding websites and themes of style and function for a wide range of interactive.</p> --}}
                                                                <div class="row">
                                                                        <div class="col-md-2"></div>
                                                                        <div class="col-sm-10">
                                                                                <ul class="list-icon" style="text-align:left;">
                                                                                        <li><i class="fa fa-hand-o-right"></i> Book appointment and medical tests.</li>
                                                                                        <li><i class="fa fa-hand-o-right"></i> Free re-scheduling and cancellations.</li>
                                                                                        <li><i class="fa fa-hand-o-right"></i> Manage appointments and reports online</li>
                                                                                        <li><i class="fa fa-hand-o-right"></i> Read health tips</li>
                                                                                        <li><i class="fa fa-hand-o-right"></i> Skip the waiting room </li>
                                                                                        <li><i class="fa fa-hand-o-right"></i> Affordable full body health checkup</li>
                                                                                        <li><i class="fa fa-hand-o-right"></i> 100% Private and confidential</li>
                                                                                    </ul>
                                                                        </div>
                                                                    
                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                    </li>
                                    <li style="width: 522px; margin-right: 0px; float: left; display: block;" class="flex-active-slide" data-thumb-alt="">
                                        <div class="theme-flexslider-container">
                                                <div class="row pt-4">
                                                    <div class="col-md-1"></div>
                                                        <div class="col-md-4">
                                                                <img class="img-fluid" src="ui/images/forDoctor.png" alt="for doctor">
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        <div class="col-md-5">
                                                            <div class="">
                                                                <p class="font-24 font-500" style="color: #FF9800;">For Doctor</p>
                                                                
                                                                    <h4>A powerful app that lets you manage and grow your practice.</h4>
                                                                    {{-- <footer class="blockquote-footer">Jack Welch <cite title="Source Title">Chemical engineer</cite></footer> --}}
                                                                <hr>
                                                                {{-- <p class="text-dark pt-3"><span class="dropcap">A</span> We are a multi-focused designer working on interfaces and branding for digital products. Award winning interdisciplinary Designer &amp; Art director. a team who specialise in coding websites and themes of style and function for a wide range of interactive.</p> --}}
                                                                <div class="row">
                                                                    <div class="col-md-1"></div>
                                                                    <div class="col-sm-11">
                                                                            <ul class="list-icon" style="text-align:left;">
                                                                                    <li><i class="fa fa-hand-o-right"></i> Grow your practice.</li>
                                                                                    <li><i class="fa fa-hand-o-right"></i> Multi-level security checks</li>
                                                                                    <li><i class="fa fa-hand-o-right"></i> Seamless integration with online payment.</li>
                                                                                    <li><i class="fa fa-hand-o-right"></i> Make you practice visible to users.</li>
                                                                                    <li><i class="fa fa-hand-o-right"></i> See patient records from anywhere</li>
                                                                                    <li><i class="fa fa-hand-o-right"></i> Easy reminder for your appointment</li>
                                                                                    <li><i class="fa fa-hand-o-right"></i> Manage your clinic with Docttocare dashboard</li>
                                                                                </ul>
                                                                    </div>
                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                        </div>
                                    </li>
                                    
                                </ul></div><ol class="flex-control-nav flex-control-paging"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>       
            </div>
                 
        </div>
        <div class="action" style="background-color: #00968617;">
                <div class="layer-stretch">
                    <div class="layer-wrapper text-center">
                        <div class="layer-ttl"><h2>Why <span class="text-primary">Docttocare ? </span></h2></div>
                        <div class="action-content">
                                Docttocare is one of the leading healthcare solutions provider that enables users to schedule appointment with doctors, clinics, hospitals in a easy and hassle free manner.We empower Doctors with patient information anytime, anywhere so that they can make better decisions for patients. We pride ourselves for being super focused on the basics - Ease of use, honest pricing, great service, and respect for trust that Doctors place in us.</div>
                        <a href="/about" class="btn btn-outline btn-primary btn-sm btn-pill btn-outline-2x btn-lg mt-3">Know more</a>
                    </div>
                </div>
            </div>
        <!-- Start Blog Section -->
        <div class="blog">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-3">
                    <div class="layer-ttl"><h2>Health <span class="text-primary">Tips</span></h2></div>
                    <div class="layer-sub-ttl" style="color: #FF9800;">Health tips from health experts.</div>
                    <div class="row pt-3">
                        <div class="col-md-6 col-lg-3">
                            <div class="blog-card">
                                <img src="https://s3.ap-south-1.amazonaws.com/docttocare-website-documents/clinic_upload/blog/1527160478_skin-glow-tips-Docttocare.png" alt="skin glow tips docttocare">
                                <div>
                                    <h4><a href="/readBlog/19">Home Remedies for Glowing Skin</a></h4>
                                    {{-- <div class="blog-meta">
                                        <p><i class="icon-user"></i><span>Admin</span></p>
                                        <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                        <p><i class="icon-bubble"></i><span>29</span></p>
                                    </div> --}}
                                    <p>Irrespective of your complexion, it's the glow that adds beauty to your skin.</p>
                                    <a href="/readBlog/19"><span>Read More</span><i class="fa fa-external-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="blog-card">
                                <img src="https://s3.ap-south-1.amazonaws.com/docttocare-website-documents/clinic_upload/blog/1527326408_stress_management_docttocare.png" alt="stress management docttocare">
                                <div>
                                    <h4><a href="/readBlog/26">Simple tips manage and reduce your stress levels.</a></h4>
                                    {{-- <div class="blog-meta">
                                        <p><i class="icon-user"></i><span>Admin</span></p>
                                        <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                        <p><i class="icon-bubble"></i><span>29</span></p>
                                    </div>--}}
                                    <p>Avoid, or a minimum of scale back, your consumption of nicotine and any drinks...</p>
                                    <a href="/readBlog/26"><span>Read More</span><i class="fa fa-external-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="blog-card">
                                <img src="https://s3.ap-south-1.amazonaws.com/docttocare-website-documents/clinic_upload/blog/1527570804_9-months-pregnancy-care-docttocare.png" alt="9 months pregnancy care docttocare">
                                <div>
                                    <h4><a href="/readBlog/28">9 Month Pregnancy Care - Do's and Diet </a></h4>
                                    {{-- <div class="blog-meta">
                                        <p><i class="icon-user"></i><span>Admin</span></p>
                                        <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                        <p><i class="icon-bubble"></i><span>29</span></p>
                                    </div>--}}
                                    <p>Swimming is a nice exercise, particularly throughout summers.</p>
                                    <a href="/readBlog/28"><span>Read More</span><i class="fa fa-external-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                                <div class="blog-card">
                                    <img src="https://s3.ap-south-1.amazonaws.com/docttocare-website-documents/clinic_upload/blog/1527485076_child_diet_docttocare.png" alt=" child diet docttocare">
                                    <div>
                                        <h4><a href="/readBlog/27">Nutrition for Kids: Tips for a Healthy Diet</a></h4>
                                        {{-- <div class="blog-meta">
                                            <p><i class="icon-user"></i><span>Admin</span></p>
                                            <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                            <p><i class="icon-bubble"></i><span>29</span></p>
                                        </div>--}}
                                        <p>Nutrition for kids relies on an equivalent principle as nutrition for adults. </p>
                                        <a href="/readBlog/27"><span>Read More</span><i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="layer-sub-ttl"> <a href=/blogListing class="btn btn-outline btn-sm btn-primary btn-pill btn-outline-2x btn-lg mt-3">Read More</a></div>
                </div>
               
            </div>
        </div><!-- End Blog Section -->
        <!-- Start FUnFacts Section -->
       <div class="action">
            <div class="layer-stretch">
                    <div class="layer-ttl"><h2>Virtual <span class="text-primary">Tour</span></h2></div>
                    <div class="layer-sub-ttl" style="color: #FF9800;">Virtual experience of clinics</div>
                    <div class="row">
                            <div class="col-md-4">
                                <div class="card border-primary mb-3">
                                    <div class="card-body text-primary" id="panaroma" style="height: 200px;">
                                    </div>
                                    <div class="layer-sub-ttl"><a href="/clinic/Institute%20of%20Clinically%20Applied%20Hijama-Cupping%20Therapy%20(ICAHT)/44" class="btn btn-sm btn-outline btn-primary btn-pill btn-outline-2x mt-3">Book Now</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-secondary mb-3">
                                    <div class="card-body text-secondary" id="panaroma2" style="height: 200px;">
                                           
                                    </div>
                                    <div class="layer-sub-ttl" style="color: #FF9800;"><a href="/clinic/Ebisu%20Eye%20Care%20and%20Diagnostic%20Center/43" class="btn btn-sm btn-outline btn-primary btn-pill btn-outline-2x mt-3">Book Now</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-success mb-3">
                                    <div class="card-body text-success" id="panaroma3" style="height: 200px;">
                                    </div>
                                    <div class="layer-sub-ttl" style="color: #FF9800;"><a href="clinic/Vitals%20Skin%20and%20Hair%20Klinic/45" class="btn btn-sm btn-outline btn-primary btn-pill btn-outline-2x mt-3">Book Now</a></div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        <div class="funfacts" style="background-color:white;">
            <div class="layer-stretch text-center">
                <div class="layer-wrapper pb-3">
                    <div class="layer-ttl"><h2>Fun <span class="text-primary">Facts About</span> Us</h2></div>
                    {{-- <div class="layer-sub-ttl">Separated they live in Bookmarksgrove right at the coast of the Semantics</div> --}}
                    <div class="row align-items-center pt-3">
                        <div class="col-md-7">
                            <div class="counter-block">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                <h4><span class="counter">500</span>+</h4>
                                <span>Clinics</span>
                            </div>
                            <div class="counter-block">
                                    <i class="fa fa-user-md" aria-hidden="true"></i>
                                <h4><span class="counter">2000</span>+</h4>
                                <span>Doctors</span>
                            </div>
                            <div class="counter-block">
                                    <i class="fa fa-medkit" aria-hidden="true"></i>
                                <h4><span class="counter">4000</span>+</h4>
                                <span>Medical Tests</span>
                            </div>
                            <div class="counter-block">
                                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                <h4><span class="counter">100</span>+</h4>
                                <span>Hospitals</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="testimonial">
                                <div class="testimonial-container owl-carousel owl-theme theme-owl-dot">
                                    <div class="testimonial-block">
                                        <div class="testimonial-detail">
                                            <i class="fa fa-quote-right"></i>
                                            <p>"Docttocare site is so much faster and easier to handle patients, the charges are very nominal for doctors to save commissions and time.."</p>
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="ui/images/dr.prasad.png" alt="Dr. Prasad">
                                            <span>Dr. Prasad</span>
                                            <p>Dental Health Clinic</p>
                                        </div>
                                    </div>
                                    {{-- <div class="testimonial-block">
                                        <div class="testimonial-detail">
                                            <i class="fa fa-quote-right"></i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem laborum error culpa, et corporis eaque reiciendis autem.</p>
                                        </div>
                                        <div class="testimonial-img">
                                            <img src="uploads/team-1.jpg" alt="">
                                            <span>Daniel Barnes</span>
                                            <p>CEO At Devstab</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End FUnFacts Section -->
        <div class="download-app">
            <div class="layer-stretch">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-2 text-center">
                        <p> <img src="assets/img/cityLogo/indiaGate.png" alt="Delhi Docttocare" style="width: 20%;"> 
                           <span style="color: #005d53;">Delhi / NCR</span> 
                        </p>
                    </div>
                    <div class="col-md-2 text-center">
                        <p> <img src="assets/img/cityLogo/vidhanSudha.png" alt="Bangalore Docttocare" style="width: 20%;"> 
                           <span style="color: #005d53;">Bangalore</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Section -->
        <footer id="footer">
            <div class="layer-stretch">
                <!-- Start main Footer Section -->
                <div class="row layer-wrapper">
                    <div class="col-md-4 footer-block">
                        <div class="footer-ttl"><p>Basic Info</p></div>
                        <div class="footer-container footer-a">
                            <div class="tbl">
                                <div class="tbl-row">
                                    <div class="tbl-cell"><i class="fa fa-map-marker"></i></div>
                                    <div class="tbl-cell">
                                        <p class="paragraph-medium paragraph-white">
                                            Padmavathi Complex, 91 Springboard, 3rd Floor,<br />
                                            80 Feet Rd, Koramangala 8th Block,<br>
                                            Bengaluru, Karnataka<br />
                                            India - 560095
                                        </p>
                                    </div>
                                </div>
                                <div class="tbl-row">
                                    <div class="tbl-cell"><i class="fa fa-phone"></i></div>
                                    <div class="tbl-cell">
                                        <p class="paragraph-medium paragraph-white">9821-688-088</p>
                                    </div>
                                </div>
                                <div class="tbl-row">
                                    <div class="tbl-cell"><i class="fa fa-envelope"></i></div>
                                    <div class="tbl-cell">
                                        <p class="paragraph-medium paragraph-white">support@docttocare.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-block">
                        <div class="footer-ttl"><p>Quick Links</p></div>
                        <div class="footer-container footer-b">
                            <div class="tbl">
                                <div class="tbl-row">
                                        <ul class="tbl-cell">
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/about">About</a></li>
                                                <li><a href="/career">Career</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                                <li><a href="/faq">Faq</a></li>
                                                
                                            </ul>
                                            <ul class="tbl-cell">
                                                <li><a href="/login">Sign In</a></li>
                                                <li><a href="/register">Sign Up</a></li>
                                                <li><a href="/blogListing">Health Tips</a></li>
                                                <li><a href="/privacy_policy">Privacy Policy</a></li>
                                                <li><a href="/terms">Terms & Conditions</a></li>
                                            </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-block">
                        <div class="footer-ttl"><p>Quick Enquiry</p></div>
                        <div class="footer-container footer-c">
                            <div class="footer-subscribe">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                    <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="subscribe-email">
                                    <label class="mdl-textfield__label" for="subscribe-email">Your Email</label>
                                    <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                                </div>
                                <p class="text-success" id="successMsg" style="display:none;">Your enquiry is sent successfully</p>
                                <p class="text-danger" id="errorQuick" style="display:none;"></p>
                                <div class="footer-subscribe-button">
                                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary" type="button" ng-click="quickEquiry();">Submit</button>
                                </div>
                            </div>
                            <ul class="social-list social-list-colored footer-social">
                                        <li>
                                            <a href="https://www.facebook.com/docttocare/" target="_blank" id="footer-facebook" class="fab fa-facebook"></a>
                                            <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-facebook">Facebook</span>
                                        </li>
                                        {{-- <li>
                                            <a href="#" target="_blank" id="footer-twitter" class="fab fa-twitter"></a>
                                            <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-twitter">Twitter</span>
                                        </li> --}}
                                        <li>
                                            <a href="https://www.google.co.in/maps/place/DOCTTOCARE/@12.913642,77.6009963,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae1509161ff96f:0x8c6363bc29dbedb2!8m2!3d12.913642!4d77.603185" target="_blank" id="footer-google" class="fab fa-google"></a>
                                            <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-google">Google</span>
                                        </li>
                                        {{-- <li>
                                            <a href="#" target="_blank" id="footer-instagram" class="fab fa-instagram"></a>
                                            <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-instagram">Instagram</span>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" id="footer-youtube" class="fab fa-youtube"></a>
                                            <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-youtube">Youtube</span>
                                        </li> --}}
                                        <li>
                                            <a href="https://www.linkedin.com/in/doctto-care-68879a134/" target="_blank" id="footer-linkedin" class="fab fa-linkedin"></a>
                                            <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-linkedin">Linkedin</span>
                                        </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- End main Footer Section -->
            <!-- Start Copyright Section -->
            <div id="copyright">
                <div class="layer-stretch">
                    <div class="paragraph-medium paragraph-white">2016 - 18 © Doctto Online Healthcare Innovation Pvt Ltd ALL RIGHTS RESERVED.</div>
                </div>
            </div><!-- End of Copyright Section -->
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </footer><!-- End of Footer Section -->
    </div>
    
    <!-- **********Included Scripts*********** -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB8Tb605AsOoVjS--AFz2SfKf9hqcNjAQk"></script> 
    <!-- Latest compiled JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="ui/dist/js/homeScript.js"></script>

    <!--Custom JavaScript-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.8/angular-filter.min.js"></script>
    <script src="assets/js/angular/search.js"></script>
    <script src="ui/assets/plugin/popper/popper.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="ui/assets/plugin/bootstrap/bootstrap.min.js"></script>
    <!-- Modernizr Core JavaScript-->
    <script src="ui/assets/plugin/modernizer/modernizr.js"></script>
    <!-- Animaateheading JavaScript-->
    <script src="ui/assets/plugin/animateheading/animateheading.js"></script>
    <!-- Material Design Lite JavaScript-->
    <script src="ui/assets/plugin/material/material.min.js"></script>
    <!-- Material Select Field Script -->
    <script src="ui/assets/plugin/material/mdl-selectfield.min.js"></script>
    <!-- Flexslider Plugin JavaScript-->
    <script src="ui/assets/plugin/flexslider/jquery.flexslider.min.js"></script>
    <!-- Owl Carousel Plugin JavaScript-->
    <script src="ui/assets/plugin/owl_carousel/owl.carousel.min.js"></script>
    <!-- Scrolltofixed Plugin JavaScript-->
    <script src="ui/assets/plugin/scrolltofixed/jquery-scrolltofixed.min.js"></script>
    <!-- Magnific Popup Plugin JavaScript-->
    <script src="ui/assets/plugin/magnific_popup/jquery.magnific-popup.min.js"></script>
    
    <!-- CounterUp Plugin JavaScript-->
    <script src="ui/assets/plugin/counterup/jquery.counterup.js"></script>
    <!-- masonry Plugin JavaScript-->
    <script src="ui/assets/plugin/masonry_pkgd/masonry.pkgd.min.js"></script>
    <!-- SmoothScroll Plugin JavaScript-->
    <script src="ui/assets/plugin/smoothscroll/smoothscroll.min.js"></script>
    
    
    <script src="ui/dist/js/custom.js"></script>
    <!-- Popper JavaScript-->

    <!--Book On Call Modal -->

    <div class="modal fade" id="bookOnCall" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                        <h4 class="modal-title">Book On Call</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    
                </div>
                <div class="modal-body">
                        <p>To book an appointment, kindly call on : 9821-688-088</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>