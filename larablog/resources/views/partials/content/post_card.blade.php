<div class="card" style="width: 18rem;">
	<div class="card-body">
		<h5 class="card-title">{{$post->title}}</h5>
		<h6 class="card-subtitle mb-2 text-muted">
			Auteur: {{ $post->author }} - Date: {{ $post->created_at }} - Catégories: JS/PHP/Docker - Durée lecture: {{ $post->read_duration }}mn</h6>
		<p class="card-text">{{$post->short}}</p>
		<a href="/article/{{$post->content_path}}" class="card-link">Continuer la lecture ></a>
	</div>
</div>
