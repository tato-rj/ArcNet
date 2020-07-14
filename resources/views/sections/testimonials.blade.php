<section id="testimonials" class="mb-7">
	<div class="container" style="margin-bottom: -80px">
		<div class="row">
			<div class="col-8 mx-auto shadow bg-white p-0">
				<div>
					@include('components.icon-square', ['icon' => 'quote-left', 'size' => 'lg'])
				</div>
				<div id="testimonials-container" class="mb-3">
					@include('components.testimonial')
				</div>
				<div id="testimonials-nav" class="d-flex justify-content-center mb-4">
					<button class="selected"></button>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center bg-primary py-6">
		<div class="mt-5">
			@include('components.cta')
		</div>
	</div>
</section>