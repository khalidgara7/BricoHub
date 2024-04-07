

<!-- Navbar Start -->
<div class="container-fluid bg-dark">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
            <a href="{{url('/')}}" class="navbar-brand">
                <h1 class="text-primary mb-0 display-5">Pest<span class="text-white">Kit</span><i class="fa fa-spider text-primary ms-2"></i></h1>
            </a>
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-dark"></span>
            </button>
            <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                    <a href="{{ route('profile.index') }}" class="nav-item nav-link">EmployeeProfile</a>
                    <a href="{{url('/services')}}" class="nav-item nav-link">Services</a>
                    <a href="{{url('/project')}}" class="nav-item nav-link">Projects</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0 bg-primary">
                            <a href="blog.html" class="dropdown-item">Blog Post</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
