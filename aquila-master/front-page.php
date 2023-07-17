<?php
/**
 * Front page template
 *
 * @package aquila
 */


get_header();
?>

<!-- service section ends   -->
<div class="container">
  <h2 class="text-center text-uppercase">Upcoming <span class="text-danger"> Events</span></h2>
  <p class="mt-5 text-center">Elevate your skills with our most in-demand training programmes</p>
  <div class="row mt-5">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">The roles of Project Management skills in 21st century economic growth.</h5>
          <p class="card-text">7th July 2023</p>
          <p class="card-text">2 Hours (5:00 PM - 7:00 PM)</p>
          <p class="card-text">Virtual</p>
          <p class="card-text">KES 1500 (Certificate to be provided)</p>
          <a href="https://consultancy.kiit.ac.ke/form/" class="btn btn-primary">Apply</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">The Roles of Monitoring Evaluation Accountability and Learning (MEAL) as a Strategy for project success.</h5>
          <p class="card-text">14th July 2023</p>
          <p class="card-text">2 Hours (5:00 PM - 7:00 PM)</p>
          <p class="card-text">Virtual</p>
          <p class="card-text">KES 1500 (Certificate to be provided)</p>
          <a href="https://consultancy.kiit.ac.ke/form/" class="btn btn-primary">Apply</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Human Resource Management strategic success in Medium-sized and big Projects</h5>
          <p class="card-text">11th August 2023</p>
          <p class="card-text">2 Hours (5:00 PM - 7:00 PM)</p>
          <p class="card-text">Virtual</p>
          <p class="card-text">KES 1500 (Certificate to be provided)</p>
          <a href="https://consultancy.kiit.ac.ke/form/" class="btn btn-primary">Apply</a>
        </div>
      </div>
    </div>
  </div>
</div>



	<div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<div class="home-page-wrap">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

					endwhile;
					?>

				<?php

				else :

					get_template_part( 'template-parts/content-none' );

				endif;
				get_template_part( 'template-parts/components/posts-carousel' );
				?>
			</div>
		</main>
	</div>

<?php
get_footer();

