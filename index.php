<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Templete1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- menu section start -->
    <section id="Menu">
        <nav class="navbar navbar-expand-lg bgnav fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="#">NAFISA NABA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-3">
                            <a class="nav-link active text-uppercase" aria-current="page" href="#Slider">Home</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-uppercase" href="#about">About</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-uppercase" href="#service">Services</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-uppercase" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-uppercase" href="#contact">Contract</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- menu section end -->

    <!-- slider section start -->
    <section id="Slider">
        <div class="">
            <div class="col-md-12">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/bg-1.jpg" class="img-fluid" alt="..." />
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="">programming languages</h5>
                                <p class="">A programming language is a system of notation for writing computer
                                    programs. Most programming languages are text-based formal languages, but they may
                                    also be graphical. They are a kind of computer language.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/bg-2.jpg" class="img-fluid" alt="..." />
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="">What is Web devlopment?</h5>
                                <p class="">Web development is the work involved in developing a website for the
                                    Internet or an intranet.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/bg-3.jpg" class="img-fluid" alt="..." />
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="">Third slide label</h5>
                                <p class="">Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- slider section end -->

    <!-- about section start -->
    <section class="about py-5 my-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold text-uppercase text-center mb-5">About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5">
                    <img src="images/about.jpg" alt="Img Not Found" class="img-fluid">
                </div>
                <div class="col-12 col-md-7 align-self-center mt-3 mt-md-0">
                    <h2 class="fw-bold">Hi! I'm Nafisa Naba</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Soluta quia perspiciatis
                        saepe at, eligendi praesentium explicabo facilis quae excepturi nihil temporibus earum ullam
                        dolores consequuntur. Rerum a odio quos, omnis quae, ea quam. Laborum, facilis, nemo ratione
                        rerum commodi cumque corrupti nesciunt sed unde placeat distinctio totam soluta neque similique.
                    </p>
                    <a href="" class="btn btn-info btn-lg">Hire Me!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- service-section-start -->
    <section class="service pb-5 mb-5" id="service">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold text-uppercase text-center">My Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="card">
                        <img src="images/service-1.jpg" alt="Img Not Found" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Web Design</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio
                                inventore tenetur adipisci odit itaque, nobis voluptates?</p>
                            <button href="#" class="btn btn-info text-white" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="card">
                        <img src="images/service-2.jpg" alt="Img Not Found" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio
                                inventore tenetur adipisci odit itaque, nobis voluptates?</p>
                            <button href="#" class="btn btn-info text-white" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="card">
                        <img src="images/service-3.jpg" alt="Img Not Found" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">SEO</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio
                                inventore tenetur adipisci odit itaque, nobis voluptates?</p>
                            <button href="#" class="btn btn-info text-white" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section-end -->

    <!-- skills-section-start -->
    <section class="pb-5 mb-5" id="skills">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-uppercase fw-bold">My skills</h2>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <div class="progress mt-3">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                            style="width:90%">HTML</div>
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width:85%">
                            CSS</div>
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                            style="width:70%">JS</div>
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                            style="width:80%">BOOTSTRAP</div>
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated"
                            style="width:36%">PHP</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="circle-progress">
                                <h2 class="text-uppercase fs-6">2 Years+</h2>
                            </div>
                            <h2 class="text-uppercase fs-5 mt-2 text-center circle-progress-title">Experience</h2>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="circle-progress circle-progress1">
                                <h2 class="text-uppercase fs-6">10+</h2>
                            </div>
                            <h2 class="text-uppercase fs-5 mt-2 text-center circle-progress1-title">Complete Project
                            </h2>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div>
                                <div class="circle-progress circle-progress2">
                                    <h2 class="text-uppercase fs-6">2+</h2>
                                </div>
                                <h2 class="text-uppercase fs-5 mt-2 text-center circle-progress2-title">Running Project
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skills-section-end -->

    <!-- contact-section-start -->
    <section class="contact mb-5 pb-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-uppercase fw-bold">Contact me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 mt-5 shadow2">
                    <form action="#" method="POST" class="shadow p-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 mt-4">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control shadow-none" placeholder="Your Name" id="name"
                                    name="name">
                            </div>
                            <div class="col-12 col-sm-6 mt-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none" placeholder="Email" id="email"
                                    name="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <label for="Subject" class="form-label">Subject</label>
                                <input type="text" class="form-control shadow-none" placeholder="Subject" id="Subject0"
                                    name="Subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" id="message" rows="5" class="form-control shadow-none"
                                    placeholder="Massage"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit"
                                    class="form-control text-uppercase btn mt-4 sand text-white">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4 align-self-center py-3">
                    <div class="card p-4 shadow2">
                        <h3 class="text-uppercase fs-4">Contact with me</h3>
                        <hr>
                        <h4 class="fs-5">Address:</h4>
                        <p>Dhaka, Bangladesh</p>
                        <h4 class="fs-5">Email:</h4>
                        <p>bintenafisa7@gmail.com</p>
                        <h4 class="fs-5">Phone Number:</h4>
                        <p>01711704102 or
                            01552307619
                        </p>
                        <div  class="d-flex grid gap-3">
                            <a href="https://www.facebook.com/profile.php?id=100089384891303" target="_blank"
                                rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook fbicon" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></a>

                            <a href="https://github.com/nafisa-naba" target="_blank" rel="noopener noreferrer"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-github github" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section-end -->

    <!-- service-modal-1 stert -->
    <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Web Design</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="images/service-1.jpg" alt="Img Not Found" class="card-img-top">
                        </div>
                        <div class="col-8">
                            <h2>Web Design</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A ut reprehenderit aliquam
                                voluptatem quo cupiditate exercitationem, tenetur illum, possimus quisquam eveniet,
                                magni eos ipsum alias neque similique, maxime natus fuga.</p>
                            <h4>FAQ</h4>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        What is HTML?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores doloribus
                                        placeat earum at, sunt quis!
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                        How cam we use HTML?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, nulla. Quos
                                        tempora veritatis neque reiciendis.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- service-modal-1 end -->

    <!-- service-modal-2 stert -->
    <div class="modal fade modal-lg" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Web Design</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="images/service-1.jpg" alt="Img Not Found" class="card-img-top">
                        </div>
                        <div class="col-8">
                            <h2>Web Development</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A ut reprehenderit aliquam
                                voluptatem quo cupiditate exercitationem, tenetur illum, possimus quisquam eveniet,
                                magni eos ipsum alias neque similique, maxime natus fuga.</p>
                            <h4>FAQ</h4>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        What is Web Development?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores doloribus
                                        placeat earum at, sunt quis!
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                        How can we use Web Development?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, nulla. Quos
                                        tempora veritatis neque reiciendis.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- service-modal-2 end -->

    <!-- service-modal-3 stert-->
    <div class="modal fade modal-lg" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Web Design</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="images/service-1.jpg" alt="Img Not Found" class="card-img-top">
                        </div>
                        <div class="col-8">
                            <h2>SEO</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A ut reprehenderit aliquam
                                voluptatem quo cupiditate exercitationem, tenetur illum, possimus quisquam eveniet,
                                magni eos ipsum alias neque similique, maxime natus fuga.</p>
                            <h4>FAQ</h4>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        What is SEO?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores doloribus
                                        placeat earum at, sunt quis!
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-header">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                        How can we use SEO?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, nulla. Quos
                                        tempora veritatis neque reiciendis.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- service-modal-3 end -->
    <h3 class="text-center py-4"><i>Thank You, For take time to read this page</i></h3>
    <!-- footer-start -->
    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="mb-0 text-center text-uppercase">© All Right Reserved. Devlope By Nafisa Naba</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->
 
    <!-- all script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script>
        AOS.init();
    </script>
    <script>
        $('#progress1').circleProgress({
            value: 1,
            startAngle: 1.5,
            size: 120,
            fill: {
                gradient: ["purple", "blue"]
            }
        });
    </script>
    <script>
        $('#progress2').circleProgress({
            value: 0.50,
            size: 120,
            startAngle: 1.5,
            fill: {
                gradient: ["blue", "purple"]
            }
        });
    </script>
    <script>
        $('#progress3').circleProgress({
            value: 0.30,
            size: 120,
            startAngle: 1.5,
            fill: {
                gradient: ["blue", "blue", "red"]
            }
        });
    </script>