<section id="service" class="mb-7">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-5">
				@include('components.section-title', [
					'section' => 'SERVICE WE PROVIDE', 
					'title' => 'We provide access to reliable, trade-skilled professionals in the construction industry.'])
			</div>
			@include('components.card', [
				'title' => 'Project-Based Hiring',
				'icon' => 'id-card-alt',
				'description' => 'We can assist you with projects of any length or scale. Whether you are looking to fill a project-based or full-time position.'])
			@include('components.card', [
				'title' => 'RPO Services',
				'icon' => 'search',
				'description' => 'ArcNet quality recruitment outsourcing method blends dedicated recruiters, experience, and best practice hiring to transform your organization\'s talent acquisition process.'])
			@include('components.card', [
				'title' => 'Resume Formatting',
				'icon' => 'file-signature',
				'description' => 'We tailor resumes to focus on the work and extracurricular experiences that are most relevant to the job or industry you are targeting, keeping it concise and to the point.'])
		</div>
	</div>
</section>