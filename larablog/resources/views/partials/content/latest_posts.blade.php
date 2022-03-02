<section class="section_container">
	<h2>Articles récents</h2>
	<div class="list-group">

		@foreach ($postWithCat as $post)

		<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
			<div class="flex-column">
				@foreach ($post['categories'] as $category)
					@include('partials.icons.' . $category->name)
				@endforeach
			</div>
			<div class="d-flex gap-2 w-100 justify-content-between">
					<div>
							<h6 class="mb-0">{{$post['post']->title}}</h6>
							<p class="mb-0 opacity-75">{{$post['post']->short}}</p>
					</div>
					<small class="opacity-50 text-nowrap">{{ $post['date']}}</small>
			</div>
		</a>
		@endforeach

	</div>
</section>
