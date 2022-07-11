<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title><?php echo CONFIG["APP_NAME"]?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/img/logo/logo128x128.ico" type="image/x-icon">
</head>
<body>
   
<div class="d-flex ">
    <div class="p-2 ">
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
            <img src="/img/btn/menu128x128.svg">
        </button>  
    </div>
    <div class=" p-2 flex-grow-1 d-flex justify-content-between">

        <!-- Logo AppName -->
        <div>
            <a href="/">
                <img width="22%" src="/img/logo/logo128x128.png" alt="">
                FreeTube
            </a>
        </div>

        <!-- Vide Interfaz -->
        <div> 
            <div class="d-flex justify-content-center">
                <input type="search" class="form-control" placeholder="Buscar ...">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    <img src="/img/btn/lupa128x128.svg">
                </button>
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    <img src="/img/btn/mic128x128.svg">
                </button>
            </div>
        </div>
        <!-- User Interface -->
        <div>
            <button type="button" class="btn btn-outline-dark">
                <img src="/img/btn/crear128x128.svg">
            </button>  
            <button type="button" class="btn btn-outline-dark">
                <img src="/img/btn/apps128x128.svg">
            </button>  
            <button type="button" class="btn btn-outline-dark">
                <img src="/img/btn/notif128x128.svg">
            </button>      
            <a href="/">
                <img width="15%" src="/img/preload/preload-user128x128.png" alt="">
            </a>
        </div>
    </div>
</div>



<div class="d-flex">
    <div class="p-2">
        <div class="collapse collapse-horizontal" id="collapseWidthExample">
            <div style="width: 300px;">

            <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>
                
            
            </div>
        </div>
    </div>

    <div class="p-2 flex-grow-1">
        <div class="d-flex justify-content-center">
            This Category :)
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            This Video :)
        </div>
    </div>
</div>

</body>





<!-- <p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
    Toggle width collapse
  </button>
</p>
<div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div> -->