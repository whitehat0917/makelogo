<div class="site-branding no-wc-branding">
	<?php
	the_custom_logo();
	?>
	<ul>
		<li>
			<fa class="fa fa-facebook" onclick = "window.open('https://www.facebook.com/All2Impress')"></fa>
			<a href="https://www.facebook.com/All2Impress" target="_blank">Find us on Facebook</a>
		</li>
		<li>
			<fa class="fa fa-phone"></fa>
			(786) 288-7927
		</li>
		<li>
			<fa class="fa fa-envelope" onclick = "window.open('mailto:support@all2impress.com')"></fa>
			<a href="mailto:support@all2impress.com" target="_blank">support@all2impress.com</a>
		</li>
	</ul>
	<?php
	$newstore_description = get_bloginfo( 'description', 'display' );
	if ( $newstore_description || is_customize_preview() ) :
		?>
		<p class="site-description"><?php echo $newstore_description; /* WPCS: xss ok. */ ?></p>
	<?php endif; ?>
</div><!-- .site-branding -->