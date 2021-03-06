<?php get_header(); ?>

<section id="blog">
	<div class="container">
		<div class="row">
			<div id="entry-box" class="<?php echo GRID; ?>">
				<div class="blog-head">
					<h1>Designing the Editorial Experience</h1>
					<h3>News &amp; Insights on Editorial Design Across Media</h3>
					<div class="divider"></div>
				</div>
				<?php loop(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
