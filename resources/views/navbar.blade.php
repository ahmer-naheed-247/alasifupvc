 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="#" class="navbar-brand d-flex align-items-center py-5  px-4 px-lg-5">
        <h2 class="m-0 text-primary"><img src="{{ asset('img\logo.PNG')}}" height="80" width="120" alt="logo"></h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('home')}}#" class="nav-item nav-link active">Home</a>
            <a href="{{route('home')}}#about_us" class="nav-item nav-link">About</a>
            <a href="{{route('home')}}#our_services" class="nav-item nav-link">Service</a>
            <a href="{{route('home')}}#our_projects" class="nav-item nav-link">Project</a>
            <a href="{{route('home')}}#contact_us" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->