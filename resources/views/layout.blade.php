<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Patolopedia - Human Diseases Encyclopedia</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
   <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
       <div class="container">
           <a href="{{ route('disease')}}" class="navbar-brand d-flex align-items-center">
               <span class="display-6 text-dark fw-bold me-1">Patolo</span>
               <span class="display-6 text-primary fw-bold">pedia</span>
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto fs-5">
                   <li class="nav-item"><a class="nav-link" href="{{ route('disease')}}"><i class="fas fa-home"></i> Home</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{ route('disease.category') }}"><i class="fas fa-list"></i> Categories</a></li>
                   @auth
                   <li>
                    <a class="nav-link text-danger" href="{{ route('logout') }}" title="Logout">
                        <i class="fas fa-sign-out-alt"></i> Logout <!-- Font Awesome Logout Icon -->
                    </a>
                    
                    </li>
                    <li><a class="nav-link" href="{{ route('disease-form') }}" title="Add New Item">
                        <i class="fas fa-plus-circle"></i> Add New Item<!-- Font Awesome Add Icon -->
                    </a>
                    </li>
                    @endauth
               </ul>
           </div>
           
       </div>
   </nav>

   <main class="py-4">
       @yield('content')
   </main>

   <footer class="text-center py-3 bg-white shadow-sm mt-auto">
       <div class="container">
           <span class="text-muted">&copy; 2024 Patolopedia. All rights reserved.</span>
       </div>
   </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
