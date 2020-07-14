<section id="service" class="mb-7">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-5">
				@include('components.section-title', ['section' => 'SERVICE WE PROVIDE', 'title' => 'We Deliver HR Outsourcing Service'])
			</div>
			@include('components.card', ['title' => 'Project-Based Hiring', 'icon' => 'id-card-alt'])
			@include('components.card', ['title' => 'RPO Services', 'icon' => 'search'])
			@include('components.card', ['title' => 'CV Formatting', 'icon' => 'file-signature'])
		</div>
	</div>
</section>