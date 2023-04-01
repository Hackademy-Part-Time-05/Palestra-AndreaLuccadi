

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Palestra Inizio da Gennaio</title>     
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0"> 
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><i class="fa-solid fa-dumbbell"></i> Palestra Luccadi</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">Homepage</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('struttura')}}">La Struttura</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('dovesiamo')}}">Dove Siamo</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('corsi')}}">Corsi Disponibili</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contatti')}}">Contatti</a></li>
                       
                        </ul>
                    </div>
                </div>
            </nav> 

          {{$slot}}
           
        </main>
        
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
                    
                </div>
            </div>
        </footer>
         
    </body>
</html>
