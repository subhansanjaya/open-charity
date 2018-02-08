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
	      </div><!-- end #logo -->
	      <div class="header__navigation">
	        <?php print render($page['main_menu']); ?>
	      </div><!-- / #navigation -->
				 <div class="clearfix"></div>
	    </div><!-- / .container -->
	    <div class="clearfix"></div>
	  </header>
		<!-- mission -->
		<section class="page-content" id="content">
		  <div class="container">

      <div class="page-content__contents">
      <?php print render($page['content']); ?>
    </div><!-- / .page-content__contents -->
      <?php if ($page['sidebar_first']&&!$node): ?>
        <div id="sidebar-first" style="width: 30%; float:left;" class="column page-content__sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>
		   <div class="clearfix"></div>
		  </div><!-- / .container -->
		</section><!-- / #mission -->
	</div><!-- end #page -->
	<!-- start footer -->
	<footer>
	<div class="footer__element">
	  <div class="container">
	    <?php print render($page['footer']); ?>
	  </div><!-- end .container -->
	</div><!-- / .footer__element -->
	</footer>

</div><!-- / #page-wrapper -->
