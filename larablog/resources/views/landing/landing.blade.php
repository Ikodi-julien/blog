@extends('layout.app')
@section('content')
<main>
	<section class="hero">
		<div class="px-4 py-5 my-5 text-center">
			{{-- <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
			<h1 class="display-5 fw-bold">Blog Ikodi</h1>
			<div class="col-lg-6 mx-auto">
				<p class="lead mb-4">"Débuter par définir pour ne pas finir par buter"</p>
									<p class="lead mb-4">Le blog d'un développeur qui progresse</p>
				<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
					<button type="button" class="btn btn-primary btn-lg px-4 gap-3">Articles</button>
					<button type="button" class="btn btn-outline-secondary btn-lg px-4">Portfolio</button>
				</div>
			</div>
		</div>
	</section>
				<!-- ------------------------------------>
	<section class="section_container">
		<h2>Articles récents</h2>

		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
				<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
				<div class="d-flex gap-2 w-100 justify-content-between">
					<div>
						<h6 class="mb-0">Le titre d'un post un peu long pour être sur deux lignes</h6>
						<p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
					</div>
					<small class="opacity-50 text-nowrap">25 février 2022</small>
				</div>
			</a>
			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
				<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
				<div class="d-flex gap-2 w-100 justify-content-between">
					<div>
						<h6 class="mb-0">Le titre d'un post un peu long pour être sur deux lignes</h6>
						<p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
					</div>
					<small class="opacity-50 text-nowrap">25 février 2022</small>
				</div>
			</a>
			<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
				<img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
				<div class="d-flex gap-2 w-100 justify-content-between">
					<div>
						<h6 class="mb-0">Le titre d'un post un peu long pour être sur deux lignes</h6>
						<p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
					</div>
					<small class="opacity-50 text-nowrap">25 février 2022</small>
				</div>
			</a>
		</div>
	</section>
				<!-- ------------------------------------>

	<section>
		<h2>Catégories</h2>
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					Toutes les catégories
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="#">Javascript</a></li>
				<li><a class="dropdown-item" href="#">PHP</a></li>
				<li><a class="dropdown-item" href="#">Méthodo projet</a></li>
				<li><a class="dropdown-item" href="#">Devops</a></li>
			</ul>
		</div>
	</section>
</main>
@endsection
