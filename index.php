<!doctype html>
<html lang="de">
    <head>
        <?php include './src/views/head.php' ?>

        <!-- Dashboard Styles -->
        <link rel="stylesheet" href="./src/css/prop.css">

        <!-- Widget Daily -->
        <link rel="stylesheet" href="./widget/daily/src/css/app.css">
        
        <!-- Widget Weather -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="./widget/weather/src/css/main.css">
        <!-- Widget Spotify -->
    </head>
    <body onload="getResults()">
        <div class="wrapper">
        <!--    
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
            </header>  -->
    
            <div class="container py-3">
                <div class="row">
                    <?php include './widget/daily/src/app.php' ?>
                    <?php include './widget/weather/src/weather.php' ?>
    
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

       

        <!-- Dashboard Scripts -->
        <script src="./src/js/prop.js"></script>

        <!-- Widget Daily -->
        <script src="./widget/daily/src/js/app.js"></script>

        <!-- Widget Weather -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
         integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> 
        <script src="./widget/weather/src/js/weather.js"></script>
    </body>
</html>