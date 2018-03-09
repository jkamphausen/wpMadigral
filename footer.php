						<div id="fuss">
                <div id="fussinnen">
                	<div id="social-media-bar">	
                		<?php if(get_option('twitter')!=='' && get_option('twitter')!==NULL) echo '<a target="_blank" href="http://'. get_option('twitter') . '" alt="Twitter Link" title="Twitter Link"><i class="fa fa-twitter-square"></i></a>'; ?>
                		<?php if(get_option('facebook')!=='' && get_option('facebook')!==NULL) echo '<a target="_blank" href="http://'. get_option('facebook') . '" alt="Facebook Link" title="Facebook Link"><i class="fa fa-facebook-official"></i></a>'; ?>
                		<?php if(get_option('instagram')!=='' && get_option('instagram')!==NULL) echo '<a target="_blank" href="http://'. get_option('instagram') . '" alt="Instagram Link" title="Instagram Link"><i class="fa fa-instagram"></i></a>'; ?>
                	</div>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?> 
    </body>
</html>