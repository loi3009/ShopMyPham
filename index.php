<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div id="column-left" class="col-sm-4 col-md-4 col-lg-3">
				<div id="category-menu" class="navbar collapse mb_40 hidden-sm-down in">
					<div class="nav-responsive">
						<ul class="nav main-navigation collapse in">
							<?php $args = array( 
                                'hide_empty' => 0,
                                'taxonomy' => 'product_cat',
                                ); 
                                $cates = get_categories( $args ); 
                                foreach ( $cates as $cate ) {  ?>
                                    <li>
                                        <a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name ?></a>
                                    </li>
                            <?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="column-right" class="col-sm-8 col-md-8 col-lg-9 mt_30">
				<div class="banner">
					<div class="main-banner owl-carousel">
						<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=-1&post_type=slider'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        	<div class="item"><?php echo get_the_post_thumbnail( $post_id, 'full', array('class' => 'img-responsive') ); ?></div>
                        <?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="row">
                        <div class="col-sm-12 col-md-4 mt_20">
                            <div id="subbanner1" class="sub-hover"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sub1.jpg" alt="Sub Banner1" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 mt_20">
                            <div id="subbanner2" class="sub-hover"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sub2.jpg" alt="Sub Banner2" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 mt_20">
                            <div id="subbanner2" class="sub-hover"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sub3.jpg" alt="Sub Banner2" class="img-responsive"></a>
                            </div>
                        </div>
                </div>
			</div>
		</div>

		<div class="thuong-hieu owl-carousel">
			<div class="item"><a href="#"><img src="https://www.vettimes.co.uk/app/uploads/2017/05/Nexgard-Spectra-Logo.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="http://gosu.com.vn/wp-content/uploads/2014/12/Rongbay-com.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="http://hiokivietnam.com/wp-content/uploads/2016/02/Hioki_Corporation.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="https://www.liaison.com/wp-content/uploads/2017/03/logo-Gartner.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="https://advizex.com/wp-content/uploads/2016/05/trend-micro-logo-200x100.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="http://inoffsetnhatrang.com/wp-content/uploads/2016/11/logo-asia.jpg" alt="Main Banner" class="img-responsive" /></a></div>
		</div>

		<div class="row">
			<div id="column-left" class="col-sm-4 col-md-4 col-lg-3">
				<?php get_sidebar(); ?>
			</div>
			<div id="column-right" class="col-sm-8 col-md-8 col-lg-9 mtb_30"></div>
		</div>

	</div>

<?php get_footer(); ?>