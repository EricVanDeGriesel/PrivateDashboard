<!doctype html>
<html lang="de">
    <head>
        <?php include './src/views/head.php' ?>

        <!-- Dashboard Styles -->
        <link rel="stylesheet" href="./src/css/prop.css">

        <!-- Widget Daily -->
        <link rel="stylesheet" href="./widget/daily/src/css/app.css">

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
                    <?php include './widget/daily/src/app.php' ?>
    
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
    
            <?php include './src/views/modal.php' ?>
            
            <?php include './src/views/footer.php' ?>
        </div>

        <?php include './src/views/scripts.php' ?>

        <!-- Dashboard Scripts -->
        <script src="./src/js/prop.js"></script>
        <script>
            //prop.rain();
            prop.mousemove();
        </script>

        <!-- Widget Daily -->
        <script src="./widget/daily/src/js/app.js"></script>

        <!-- Widget Weather -->
    </body>
</html>