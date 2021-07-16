@extends('layouts.app')

@push('header')
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
<style type="text/css">
	*:focus {
		outline: none;
	}
	
.link-none {
	color: inherit;
}

.link-none:hover {
	text-decoration: none;
	color: inherit;
}

.mb-6 {
	margin-bottom: 5rem !important;
}

.mb-7 {
	margin-bottom: 8rem !important;
}

.p-6 {
	padding: 5rem !important;
}

.py-6 {
	padding-top: 5rem !important;
	padding-bottom: 5rem !important;
}

#home {
	background-image: url({{asset('images/manhattan.jpg')}});
	background-size: cover;
	background-position: center;
	height: 100vh;
	position: relative;
}

#home .overlay {
	background-color: rgba(42,22,157,0.82);
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 0;
}

#home .content {
	z-index: 1;
	height: 100%;
	width: 100%;
}

.highlight-thin {
	font-family: 'Quicksand', sans-serif;
	letter-spacing: 6px;
	font-weight: 400;
}

.highlight-bold {
	font-family: 'Quicksand', sans-serif;
	font-weight: 600;
}

.card button.collapsed, .btn-white {
	background-color: white;
	color: rgb(42,22,157);
	border-radius: 0;
	border: 0;
}

.card button {
	background-color: rgb(42,22,157);
	color: white;
	border-radius: 0;
	border: 0;
}

.bg-primary {
	background-color: rgb(42,22,157) !important;
}

.bg-secondary, #top a:hover {
	background-color: #f71634 !important;
}

.border-secondary {
	border-color: #f71634 !important;
}

.text-primary {
	color: rgb(42,22,157) !important;
}

.text-secondary {
	color: #f71634 !important;
}

.link-none {
	text-decoration: none !important;
	color: inherit;
}

button:focus {
    outline: none !important;
}

.nav-item .nav-link {
	color: white !important;
}

.nav-item:hover .nav-link, .nav-item.active .nav-link {
	color: #f71634 !important;
}

.section-header:before {
    content: "";
    width: 28px;
    height: 1px;
    display: inline-block;
    background-color: #f71634;
    margin: 0 10px 5px 0;
}

.section-title {
	font-size: 260%;
	color: rgb(42,22,157);
}

.t-2 {
	transition: .2s;
}

.service-card:hover .service-back {
	opacity: 1!important;
	z-index: 2;
}

.service-card:hover .service-front {
	opacity: 0!important;
	z-index: 1;
}

.service-card:nth-child(odd) {
	background-color: rgb(42,22,157);
}

.service-card:nth-child(even) {
	background-color: #f71634;
}

#testimonials-nav button {
	border: 0;
	width: 12px;
	height: 12px;
	margin: .5em;
	background-color: #d4d5d5;
}

#testimonials-nav button:hover, #testimonials-nav button.selected {
	background-color: #f71634;
}
</style>
@endpush

@section('content')
    @include('sections._lead')
    @include('sections.service')
    @include('sections.why')
    @include('sections.testimonials')
    @include('sections.contact')

	@include('components.button-up')	
@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
	$('#why-accordion button').click(function() {
		$('#why-accordion button i').removeClass('fa-minus').addClass('fa-plus-square');

		if ($(this).hasClass('collapsed')) {
			$(this).find('i').addClass('fa-minus').removeClass('fa-plus-square');
		} else {
			$(this).find('i').removeClass('fa-minus').addClass('fa-plus-square');
		}
	});

	let $testimonial, $dot;
	let data = [
		{
			avatar: 'laura.jpg',
			name: 'Laura Madsen',
			location: 'Brooklyn, NY',
			comment: 'They helped me find my current job, with a company I admire. I couldn\'t be happier in this new position and I have to thank them for seeing the value in me.'
		},
		{
			avatar: 'david.jpg',
			name: 'David Chu',
			location: 'New York, NY',
			comment: 'They knew exactly what I was looking for in a site super. When they introduce me to the first candidate, I knew he was the right person for the job.'
		}
	];

	for (var i=0; i < data.length; i++) {
		$testimonial = $('#testimonials-container > div').first().clone().hide();
		$testimonial.find('img').attr('src', '{{config('app.url')}}/images/'+data[i].avatar);
		$testimonial.find('h5').text(data[i].name);
		$testimonial.find('.location').text(data[i].location);
		$testimonial.find('.comment').text(data[i].comment);
		$testimonial.appendTo($('#testimonials-container'));

		$dot = $('#testimonials-nav > button').first().clone().removeClass('selected');

		$dot.appendTo($('#testimonials-nav'));
	}

	let interval = setInterval(toggleTestimonial, 4000);

	$('#testimonials-nav').on('click', 'button', function() {
		toggleTestimonial($(this).index());
		clearInterval(interval);
	});

	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 800, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	  });
	
});

$(window).scroll(function() {
	let scroll = $(document).scrollTop();

	if (scroll > 500) {
		$('#top').fadeIn();
	} else {
		$('#top').fadeOut('fast');
	}
});

function toggleTestimonial(selected = null) {
	let $container = $('#testimonials-container');
	let $testimonials = $container.find('.testimonial');
	let $buttons = $('#testimonials-nav button');

	if (selected == null) {
		let index = $container.find('.testimonial:visible').index();
		selected = index == $testimonials.length - 1 ? 0 : index + 1;
	}
	
	$testimonials.hide();
	$testimonials.eq(selected).fadeIn();

	$buttons.removeClass('selected');
	$buttons.eq(selected).addClass('selected');
}
</script>
@endpush