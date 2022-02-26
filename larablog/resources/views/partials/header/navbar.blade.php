<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">

		<a class="navbar-brand" href="https://ikodi.eu">
            <div class="logoIkodi"></div>
        </a>
        <span id="navTitle">Blog - Ikodi</span>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @include('partials.header.navbar-item', ['link' => '/', 'text' => 'Accueil'])
                    @include('partials.header.navbar-item', ['link' => 'all-categories', 'text' => 'Articles'])

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Plus
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="https://ikodi.eu">Ikodi.eu</a></li>
						<li><a class="dropdown-item" href="https://portfolio.ikodi.eu">Portfolio</a></li>
						<li><a class="dropdown-item" href="https://feedback.ikodi.eu">Feedback</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="mailto:julien.pellin@ikodi.eu">Contact</a></li>
					</ul>
				</li>

				<li class="nav-item">
                    {{-- Activé avec un compte admin ? --}}
					<a class="nav-link disabled">Admin</a>
				</li>
			</ul>
			<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		</div>
	</div>
</nav>
