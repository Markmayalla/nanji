<div class="section padding-top-bottom over-hide">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
					<div class="subtitle with-line text-center mb-4">gallery</div>
					<h3 class="text-center padding-bottom-small">{{ $title }}</h3>
				</div>
				<div class="section clearfix"></div>
				@foreach($pictures as $pic)
				<div class="col-md-4">
					<a href={{ $pic }} data-fancybox="gallery">							 
						<div class="img-wrap gallery-small">
							<img src={{ $pic }} alt="">
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>