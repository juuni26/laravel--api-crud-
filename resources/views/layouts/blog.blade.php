<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to Omah Baca">
    <meta name="author" content="jun cuk">
    <title>Omah Baca Homepage</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Styles -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</style>
</head>

<body>
    <header class="header-global" >
        <nav id="navbar-main" class="navbar d-flex flex-row align-items-center navbar-main navbar-expand-lg navbar-dark justify-content-between">
            <ul class="navbar-nav navbar-nav-hover flex-row align-items-center">
                <li class="nav-item">
                    <a href="/" class="nav-link" role="button">
                        <span class="nav-link-inner-text">📺 Back to Omah</span>
                    </a>
                </li>
                
                <!-- <li class="nav-item">
                    <a href="docs/introduction.html" class="nav-link" role="button">
                        <span class="nav-link-inner-text">📕 Documentation</span>
                    </a>
                </li> -->
            </ul>
         

        </nav>
    </header>
    <main>
      

        <section class="section-sm">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                    
                        <h6 class="text-gray my-5">Pilih Genre Cerita</h6>
                        <button class="btn mr-2 mb-2 btn-primary" type="button">
                            <span class="btn-text">Curhat</span>
                        </button>
                        <button class="btn mr-2 mb-2 btn-secondary" type="button">
                            <span class="btn-text">Drama</span>
                        </button>
                        <button class="btn mr-2 mb-2 btn-danger" type="button">
                            <span class="btn-text">Horor</span>
                        </button>
                        <button class="btn mr-2 mb-2 btn-info" type="button">
                            <span class="btn-text">Keseharian</span>
                        </button>
                        <button class="btn mr-2 mb-2 btn-success" type="button">
                            <span class="btn-text">Motivasi (anjay)</span>
                        </button>
                        <button class="btn mr-2 mb-2 btn-warning" type="button">
                            <span class="btn-text">Komedi</span>
                        </button>
                        <button class="btn mr-2 mb-2 btn-dark" type="button">
                            <span class="btn-text">Butuh Pertolongan</span>
                        </button>

                        <h6 class="text-purple my-5">Top 5 Thread </h6>
                        <button class="btn mr-1 mb-2 btn-danger" type="button">
                            <span class="btn-text">Mandi Dinyanyiin Kunti A thread by joshua kim</span>
                        </button>
                        <button class="btn mr-1 mb-2 btn-success" type="button">
                            <span class="btn-text">Cerita Aku Jadi Milliuner By Mario Bros</span>
                        </button>
                        <button class="btn mr-1 mb-2 btn-secondary" type="button">
                            <span class="btn-text">Anakku ternyata bukan anakku By termehek2x</span>
                        </button>
                        <button class="btn mr-1 mb-2 btn-dark" type="button">
                            <span class="btn-text">Butuh Donasi buat aku makan :( kangCilok</span>
                        </button>
                        <button class="btn mr-1 mb-2 btn-info" type="button">
                            <span class="btn-text">Biar Kece ketemu pacar </span>
                        </button>

                       
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="section-sm">

            <div class="container">

                <div class="row  p-2">
                    <div class="col-lg-12">
                        <div class="mt-5 mb-5 mt-md-0 text-center">
                            <h4>List Cerita</h4>
                        </div>

                        <article>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, enim? Placeat maxime natus suscipit alias corporis voluptatum mollitia consequuntur velit excepturi vero, architecto neque vel aspernatur non ea voluptate iste.</p>
                        </article>

                        <article>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, enim? Placeat maxime natus suscipit alias corporis voluptatum mollitia consequuntur velit excepturi vero, architecto neque vel aspernatur non ea voluptate iste.</p>
                        </article>




                     </div>

                     </div>
        </section>
        
        
    </main>
    <footer>
        <nav id="navbar-footer"
            class="navbar navbar-main navbar-expand-lg navbar-dark justify-content-between navbar-footer">
            <ul class="navbar-nav navbar-nav-hover flex-row align-items-center">
                <li class="nav-item ">
                    <a href="https://kitabisa.com/explore/all" class="nav-link" role="button">
                        <span class="nav-link-inner-text">📺 Donasi</span>
                    </a>
                </li>
                
                
            </ul>
            <div class="time text-center border-0">
                <span class="time text-uppercase">1:47 PM</span>
            </div>
        </nav>
    </footer>

    <!-- Core -->
    <script src=" {{ asset('js/jquery.min.js') }} "></script>
    <script src=" {{ asset('js/bootstrap.min.js') }} "></script>

    <!-- pixel JS -->
    <script src="{{ asset('js/pixel.js') }}"></script>

</body>

</html>