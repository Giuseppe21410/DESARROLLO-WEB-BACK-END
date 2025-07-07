<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header_Director_A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="<?=base_url('favicon.png') ?>" sizes="96x96" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #F6F1EB;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dropdown-menu {
            background-color: #343a40;
        }
        .dropdown-item {
            color:white;
        }
        .nav-link:hover {
            color: white !important;
        }
        .nav-pills .nav-link.active,
         .nav-pills .show > .nav-link {
           color: white !important;          
           background-color: #7C6A9D!important; 
         }

         .nav-pills .nav-link.active:hover,
         .nav-pills .show:hover > .nav-link {
           color: #7C6A9D!important;          
           background-color: white !important; 
         }

        .bg-body-tertiary {
         background-color:#A293B0  !important;
}      

      .dropdown-menu:hover {
          background-color: #343a40 !important;
      }

       .dropdown-menu:hover .dropdown-item:hover,
       .dropdown-menu:hover .dropdown-item:focus {
           color: white !important;          /* Para que no cambie el color */
           background-color: transparent !important; /* Para que no tenga fondo */
       }
       .Nombre{
        margin-left: 5px;
       }

         
    </style>
</head>
<body>
    <header>
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary min-vh-100" style="width: 280px;">
            <div href="#" class="d-flex align-items-center">
             <img src="<?= base_url('assets/img/logo.png') ?>" width="40" height="43" alt="Logo"> 
             <span class="fs-4" style="margin-left:10px; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px;;">Esencias Cálidas</span>
            </div>
             <hr> 
             <ul class="nav nav-pills flex-column mb-auto"> 
                <li class="nav-item"> 
                    <a href="/home" class="nav-link active" aria-current="page"> 
                        <i class="bi bi-house me-2"  aria-hidden="true"></i> 
                        Inicio
                    </a>
                </li>  
                <li> 
                    <a href="#" class="nav-link link-body-emphasis"> 
                        <i class="bi bi-clipboard"></i>
                        Tareas
                    </a> 
                </li> 
            </ul> 
            <hr> 
            <div class="dropdown"> 
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 
                    <i class="bi bi-person" style="font-size: 25px;"></i>
                    <strong class="Nombre"><?=session()->get('nombre')?></strong> 
                </a> 
                <ul class="dropdown-menu text-small shadow"> 
                    <form action="/login/logout">
                          <li><button class="dropdown-item">Sign Out</button></li>
                    </form>
                </ul> 
            </div> 
        </div>
    </header>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>