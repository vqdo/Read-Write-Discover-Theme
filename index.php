<?php 
		get_header();

		// Get required text for homepage 
		$about_text 				= get_custom_text('homepage_about'); 
		$announcements 				= get_announcements();
		$max_announcements_words 	= 80;

?>
			<div id="content">
				<div class="intro-panel wrap">
					<div class="main-image center">
					</div>
				</div>
				<div id="news-content">
					<div class="wrap">
						<div class="info c6">
							<div class="info-image">
								<div class="feature-box">
									<div class="feature-icon">
										<div class="feature-icon-border">

										</div>
									</div>
									<div class="feature-text">
										<h2>Targeted to the greatest need</h2>
										<p>We serve areas that have a need for our program and target students who are recommended by their teachers</p>
									</div>
								</div>
								<div class="feature-box">
									<div class="feature-icon">
										<div class="feature-icon-border">

										</div>
									</div>
									<div class="feature-text">									
									<h2>Volunteer-run</h2>
									<p>Our organization is entirely volunteer run, from the high school students who serve as tutors and site coordinators </p>
									</div>
								</div>
								<div class="feature-box">
									<div class="feature-icon">
										<div class="feature-icon-border">

										</div>
									</div>
									<h2>Community-driven</h2>
									<p>We partner with libraries, schools, literacy organizations, and city governments. We believe in the important of </p>
								</div>																
							</div>
						</div>				

						<div id="main-news">
							<h2>News &amp; Updates</h2>
							<div class="inner">
								<?php 
									if ($announcements->have_posts()) : 
										while ($announcements->have_posts()) : $announcements->the_post(); ?>

									<!-- Announcement HTML -->	
									<h3>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<p class="byline entry-meta vcard">
                   	<?php 
                      printf( __( '%1$s ', 'bonestheme' ),
         								
         								/* the time the post was published */
         								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'

      							); ?>
									</p>

									<p>
										<?php echo wp_trim_words(get_the_content(), $max_announcements_words, ' <a href="' . get_the_permalink() . '">...</a>'); ?>
									</p>
								
								<?php endwhile; 
									    else : ?>

									  <!-- No announcements -->
									  There are no announcements right now.
								
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<div id="main-cta">			
					<div class="wrap">
						<div class="inner">
							<div class="portal">
								<h2>Parents</h2>
								<p>Our organization is entirely volunteer run, from the high school students who serve as tutors and site coordinators to the blah blah blah</p>
								<div class="cta">
									<a href="/somewhere">Learn More</a>
								</div>
							</div>
							<div class="portal">
								<h2>Volunteers</h2>
								<p>Our organization is entirely volunteer run, from the high school students who serve as tutors and site coordinators to the blah blah blah</p>
								<div class="cta">
									<a href="/somewhere">Learn More</a>
								</div>								
							</div>	
							<div class="portal">
								<h2>Partners</h2>
								<p>Our organization is entirely volunteer run, from the high school students who serve as tutors and site coordinators to the blah blah blah</p>
								<div class="cta">
									<a href="/somewhere">Learn More</a>
								</div>								
							</div>			
						</div>									
					</div>
				</div>
<!-- 				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                                        				<?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?> -->

				</div>

			</div>


<?php get_footer(); ?>
