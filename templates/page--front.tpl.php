<div id="page-wrapper">
  <div id="page">
	  <!-- header -->
	  <header class="sticky">
	    <div class="container">
	      <div class="header__logo">
	        <?php if ($logo): ?>
	          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
	            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	          </a>
	        <?php endif; ?>
	      </div><!-- / .logo -->
	      <div class="header__navigation">
	        <?php print render($page['main_menu']); ?>
           <div class="clearfix"></div>
	      </div><!-- / .navigation -->
				 <div class="clearfix"></div>
	    </div><!-- / .container -->

	    <div class="clearfix"></div>
	  </header>
	  <!-- banner -->
	  <section id="banner">
			<div class="bg">
	    <div class="container">
	      <?php print render($page['banner']); ?>
	      <div class="intro">
	      <?php print render($page['intro']); ?>
	      </div>
	    </div><!-- / .container -->
		</div><!-- / .bg -->
	  </section><!-- / #banner -->

	  <!-- event -->
    <?php if($page['event']) { ?>
	  <section id="events">
	    <div class="container">
          <?php print render($page['event']); ?>
        <div class="clearfix"></div>

	    </div>
	  </section><!-- #events -->
    <?php } ?>

		<!-- involve -->
		<section id="involve" class="involve">
		  <div class="container">
		  <?php print render($page['involve']); ?>
		  </div>
		  <div class="clearfix"></div>
		</section><!-- / #involve -->

		<!-- mission -->
		<section class="mission" id="mission">
		  <div class="container">
		    <?php print render($page['mission']); ?>
		    <div class="clearfix"></div>
		    <?php print render($page['our_members']); ?>
		    <div class="clearfix"></div>
		  </div><!-- / .container -->
		</section><!-- / #mission -->

		<!-- blog carousel -->
		<section class="blog clearfix">
		  <div class="container" style="position:relative;">
		  <?php print render($page['blog_carousel']); ?>
		</div><!-- / .container -->
		</section><!-- end .blog -->

	</div><!-- end #page -->

	<!-- footer -->
	<footer>
	<div class="footer__element">
	  <div class="container">
	    <?php print render($page['footer']); ?>
	  </div><!-- end .container -->
	</div><!-- / .footer__element -->
	</footer>

</div><!-- / #page-wrapper -->
