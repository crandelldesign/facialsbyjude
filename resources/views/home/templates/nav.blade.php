<header class="header">
    <a href="{{url('/')}}"><img srcset="{{url('/')}}/img/facials-by-jude-logo.svg 2x" src="{{url('/')}}/img/facials-by-jude-logo.png" alt="Facials by Jude" class="logo"></a>
</header>
<nav class="navbar" role="navigation" id="topNav">
	<div class="container-fluid">
      	<!-- Brand and toggle get grouped for better mobile display -->
      	<div class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topNav-collapse">
              	<span class="sr-only">Toggle navigation</span>
              	<span class="icon-bar"></span>
              	<span class="icon-bar"></span>
              	<span class="icon-bar"></span>
        	</button>
      	</div>

      	<!-- Collect the nav links, forms, and other content for toggling -->
      	<div class="collapse navbar-collapse" id="topNav-collapse">
    		<ul class="nav navbar-nav">
		   		<li class="{{(!isset($active_page)) || ($active_page == 'services')?'active':''}} dropdown">
                    <a data-toggle="dropdown">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu full-width">
                        <div>
                            <div class="col-sm-3">
                                <a class="title-link" href="#">
                                    Facials &amp; Waxing<br>
                                    <img src="{{url('/')}}/img/nav-facials.jpg" class="img-responsive hidden-xs" alt="Facials &amp; Waxing">
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a class="title-link" href="#"
                                    >Galvanic Treatment<br>
                                    <img src="{{url('/')}}/img/nav-galvanic.jpg" class="img-responsive hidden-xs" alt="Galvanic Treatment">
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a class="title-link" href="#">
                                    Facial Peel<br>
                                    <img src="{{url('/')}}/img/nav-peel.jpg" class="img-responsive hidden-xs" alt="Facial Peel">
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="{{url('/')}}/footbath" class="title-link">
                                    Detoxifying Footbath<br>
                                    <img src="{{url('/')}}/img/nav-footbath.jpg" class="img-responsive hidden-xs" alt="Detoxifying Footbath">
                                </a>
                                <ul>
                                    <li><a href="{{url('/')}}/footbath">Look and Feel Great!</a></li>
                                    <li><a href="#">Why a Detox Footbath?</a></li>
                                    <li><a href="#">Symptoms</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </ul>
                </li>
                <li><a href="#">NeriumAD</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">In the Media</a></li>
    		</ul>
      	</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>