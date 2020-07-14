<div class="col-lg-4 col-md-4 col-12 service-card" style="height: 300px">
	<div class="d-flex justify-content-between t-2 flex-column text-white h-100 p-5 service-front" style="z-index: 1; user-select: none;">
		<div>
			<i class="fas fa-{{$icon}} fa-3x"></i>
		</div>
		<div>
			<h4 class="m-0">{{$title}}</h4>
		</div>
	</div>

	<div class="position-absolute h-100 t-2 w-100 service-back p-5 text-white" style="top: 0; left: 0; opacity: 0; z-index: 0; user-select: none;">
		<div class="d-flex flex-column justify-content-center h-100">
				<h4>{{$title}}</h4>
				<p>{{$description ?? 'There anyone who loves or pursues nor desires to obtain pain of itself, bet it is pain, but because.'}}</p>
		</div>
	</div>
</div>