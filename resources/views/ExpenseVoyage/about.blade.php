@extends('layouts.website_main')
@section('main_section')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                        <img src="{{ asset('template/img/about-img.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7"
                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                    <h5 class="section-about-title pe-3">About Us</h5>
                    {{-- <h1 class="mb-4">Welcome to <span class="text-info">Travela</span></h1> --}}
                    <h3>Our Vision</h3>
                    <p class="mb-4">
                        At ExpenseVoyage, we believe that travel should be enjoyable and stress-free, not bogged down by the
                        complexities of managing expenses. Our vision is to simplify the way travelers handle their
                        finances, allowing them to focus on creating unforgettable experiences.</p>
                    <h3>Our Story</h3>
                    <p class="mb-4">
                        Traveling for business or leisure is exhilarating, but it often comes with the challenge of keeping
                        track of multiple expenses. Whether it's dining out, hotel stays, or transportation costs, expenses
                        can accumulate quickly, making it essential to maintain organized records. Unfortunately, many
                        travelers find traditional methods, like spreadsheets or physical receipts, cumbersome and
                        error-prone.

                        Recognizing this growing need for a more streamlined solution, we set out to develop ExpenseVoyage—a
                        web application designed to revolutionize travel expense management. With the rise of digital tools
                        and the accessibility of smartphones, we knew it was time to create a user-friendly platform that
                        simplifies this process.
                    </p>
                    <h3>Our Solution</h3>
                       <p class="mb-4">
                        ExpenseVoyage empowers users to easily register and track their travel expenses in a hassle-free manner. Whether you’re an individual traveler or part of a group, our application offers seamless and collaborative expense tracking, ensuring everyone stays informed and on budget. Our intuitive interface allows for efficient data entry, receipt management, and real-time expense monitoring, all at your fingertips.

                       </p>



                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Travel Guide Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Travel Guide</h5>
                <h1 class="mb-0">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('template/img/guide-1.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('template/img/guide-2.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('template/img/guide-3.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('template/img/guide-4.jpg') }}" class="img-fluid w-100 rounded-top"
                                    alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-info rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->

    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h1 class="text-white mb-4">Our Newsletter</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam,
                    architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat
                    corrupti eum cum repellat a laborum quasi.
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control border-info rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-info rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->
@endsection
