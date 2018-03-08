						<div id="fuss">
                <div id="fussinnen">
                	<?php if(get_option('twitter')!=='' && get_option('twitter')!==NULL) echo '<a href="'. get_option('twitter') . '">Twitter</a>'; ?>
                	<?php if(get_option('facebook')!=='' && get_option('facebook')!==NULL) echo '<a href="'. get_option('facebook') . '">Facebook</a>'; ?>
                	<?php if(get_option('instagram')!=='' && get_option('instagram')!==NULL) echo '<a href="'. get_option('instagram') . '">Instagram</a>'; ?>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?> 
    </body>
</html>