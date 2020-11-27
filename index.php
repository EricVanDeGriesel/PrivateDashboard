<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <link rel="icon" type="image/png" href="/assets/img/icon.svg">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="assets/css/prop.css">

        <!-- Widget Daily -->
        <link rel="stylesheet" href="./widget/daily/app.css">

        <!-- Widget Weather -->

        <!-- Widget Spotify -->
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <div class="sights p-5 bg-highline rounded-30 shadow text-center text-dark">
                                <h1>Private Dashboard</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    
            <div class="container py-3">
                <div class="row">
                    <?php require 'widget/daily/app.html'; ?>
    
                    <div class="col-md-6 my-3">
                        <div class="sights h-100 p-4 bg-dark rounded-30 shadow d-flex justify-content-center align-items-start">
                            <div class="text-left">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus sapiente laudantium et. Quasi quam voluptate nam fugiat aliquam nostrum, earum suscipit tenetur nulla, vel dolores aliquid porro. A, delectus.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 my-3">
                        <div class="sights h-100 p-4 bg-dark rounded-30 shadow d-flex justify-content-center align-items-start">    
                            <div class="text-left">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus sapiente laudantium et. Quasi quam voluptate nam fugiat aliquam nostrum, earum suscipit tenetur nulla, vel dolores aliquid porro. A, delectus.</p>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus sapiente laudantium et. Quasi quam voluptate nam fugiat aliquam nostrum, earum suscipit tenetur nulla, vel dolores aliquid porro. A, delectus.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-12 my-3">
                        <div class="sights h-100 p-4 bg-dark rounded-30 shadow d-flex justify-content-center align-items-start">    
                            <div class="text-left">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus sapiente laudantium et. Quasi quam voluptate nam fugiat aliquam nostrum, earum suscipit tenetur nulla, vel dolores aliquid porro. A, delectus.</p>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus sapiente laudantium et. Quasi quam voluptate nam fugiat aliquam nostrum, earum suscipit tenetur nulla, vel dolores aliquid porro. A, delectus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-3">
                        <div class="sights h-100 p-4 bg-dark rounded-30 shadow d-flex justify-content-center align-items-start">    
                            <div class="text-left">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus sapiente laudantium et. Quasi quam voluptate nam fugiat aliquam nostrum, earum suscipit tenetur nulla, vel dolores aliquid porro. A, delectus.</p>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus sapiente laudantium et. Quasi quam voluptate nam fugiat aliquam nostrum, earum suscipit tenetur nulla, vel dolores aliquid porro. A, delectus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <footer>
                <div class="container pb-3">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="float-right">
                                <div class="sights settings p-3 bg-highline rounded-pill shadow text-center">
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="assets/js/prop.js"></script>

        <!-- Widget Daily -->
        <script src="./widget/daily/app.js"></script>

        <!-- Widget Weather -->
    </body>
</html>