			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/rwd-logo178x100.png" alt="Read Write Discover">
		        <div class="blockquote">
        			<blockquote cite="http://www.ed.gov/blog/2014/06/lessons-learned-the-importance-of-summer-experiential-learning">
                     "Studies demonstrate that there is a notable trend of learning loss when young people do not engage in educational opportunities during summer months." 
                     <span class="citation">&#8212; <a href="http://www.ed.gov/blog/2014/06/lessons-learned-the-importance-of-summer-experiential-learning">U.S. Department of Education</a></span>
                     </blockquote>
                </div>
					
                    <div class="address">
                        <h1>Contact Us</h1>
                        <address>
                        <?php 
                            $address = get_custom_text('rwd_address')->the_post();
                            the_content();                          
                        ?>
                        </address>
                    </div>
				</div>
<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
