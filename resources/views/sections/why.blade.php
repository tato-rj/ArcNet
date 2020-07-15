<section id="why-us" class="mb-7">
	<div class="container-fluid p-0">
		<div class="row no-gutters bg-primary">
			<div class="col-lg-6 col-12">
				<img src="{{asset('images/office.jpg')}}" class="w-100">
				<div class="row text-white align-items-center py-5 no-gutters">
					<div class="col-2 text-right">
						<i class="fas fa-clipboard-check fa-4x"></i>
					</div>
					<div class="col-10">
						<h4 class="highlight-bold mb-0 mx-4">Construction recruiters that understand your needs, your industry, and your language</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12 py-6 bg-light">
				<div class="row no-gutters">
					<div class="col-10 mx-auto">
						<div class="mb-5">
							@include('components.section-title', [
								'section' => 'WHY CHOOSE US', 
								'title' => 'Solutions that Grow Your Business'])
						</div>
						@include('components.accordion')
					</div>
				</div>
			</div>
		</div>
	</div>
</section>