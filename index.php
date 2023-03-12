<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buddy</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="main text-capitalize text-light">

        <?php include('nav.php'); ?>


        <section class="hero px-5 mb-5 text-light">
            <div class="container-fluid">
                <div class="col-lg-6 col-md-6 col-12 float-right text-right container-fluid p-5 my-5">
                    <h2 class="head_up font-weight-bold">Connect with</h2>
                    <h1 class="head font-weight-bold text-lowercase">.buddy</h1>
                    <p class="text-capitalize py-5"> a platform to connect with fellow hostel students and
                        professionals </p>

                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="Backsvg2.svg" class="img image-fluid" alt="Cinque Terre">
                </div>

            </div>
        </section>


        <section class="about_sec my-5 text-light">
            <div class=" px-5 ">
                <div class="py-5">
                    <h2 class="about_head text-center font-weight-bold text-capitalize pt-5 "> why to join us</h2>
                </div>
                <div class="container-fluid">
                    <div class="row p-5">
                        <div class="col-lg-6 col-md-6 col-12 pb-5">
                            <div class="about_sec3 font-weight-light jumbotron">
                                <ul class="my-4">
                                    <p>

                                        Share information about events happening in and around the hostel

                                    </p>
                                    <p>

                                        Get tips and advice from other
                                        students

                                    </p>
                                    <p>

                                        Find study partners and form study
                                        groups

                                    </p>
                                    <p>

                                        User-friendly interface for easy
                                        navigation

                                    </p>
                                    <p>

                                        Never feel alone in the hostel
                                        again

                                    </p>
                                </ul>
                                <a href="about.php" class="btn btn-success">Know More</a>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <img src="About.svg" class="img1 image-fluid" alt="Cinque Terre">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="B.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Meet </h1>
                        <p>...</p>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="B1.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="B2.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> -->




        <section class=" my-5 p-5 font-weight-light">
            <div class="">
                <!-- <div class="py-5">
                    <h2 class="services_head text-center font-weight-bold ">Services</h2>
                </div>  -->
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card p-4">
                                <img class="card-img-top" src="S.svg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Improved collaboration</h4>
                                    <p class="card-text">work together on group projects and assignments</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card p-4">
                                <img class="card-img-top" src="S1.svg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Better communication</h4>
                                    <p class="card-text">communicate at any time and from any location</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card p-4">
                                <img class="card-img-top" src="S2.svg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Instant messaging</h4>
                                    <p class="card-text">share information and updates without delay</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        <section class="contact_sec my-5">
            <div class="contact_sec2 p-5 ">
                <div class="py-5  text-center">
                    <h2 class="contact_head font-weight-bold">Connect with us</h2>
                </div>

                <div class="contact w-50 m-auto bg-dark p-5 rounded">
                    <form action="userinfo.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile No.</label>
                            <input type="text" name="mobile" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Comments</label>
                            <textarea class="form-control" name="comment"></textarea>
                        </div>
                        <button type="submit" name="submit" class=" btn btn-success m-auto">Submit</button>
                    </form>

                </div>
            </div>
        </section>


        <footer>
            <p class=" p-3 text-white text-center text-lowercase">©️buddy</p>
        </footer>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>