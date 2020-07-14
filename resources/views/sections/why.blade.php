<section id="why-us" class="mb-7">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-lg-6 col-12">
				<img src="{{asset('images/office.jpg')}}" class="w-100">
				<div class="row bg-primary text-white align-items-center py-5 no-gutters">
					<div class="col-2 text-right">
						<i class="fas fa-clipboard-check fa-4x"></i>
					</div>
					<div class="col-10">
						<h4 class="highlight-bold mb-0 mx-4">It is a long established fact that a reader will be tracted by the readable content</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12 p-6 bg-light">
				<div class="mb-5">
					@include('components.section-title', ['section' => 'WHY CHOOSE US', 'title' => 'HR Solutions that Grow with Your Business'])
				</div>
				@include('components.accordion')
			</div>
		</div>
	</div>
</section>