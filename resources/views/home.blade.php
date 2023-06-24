@extends('layouts.navbar2')

@section('content')

<title>Home Page</title>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center  ">
    <div class="container mt-5 mb-2 ">
        <h1>Welcome to R-MEDICARE</h1>
        <h2>
            Your one-stop solution for hassle-free medical appointments! <br>
            We understand that your time is precious. That's why we've created a <br>
            fast, easy, and secure way to book your medical appointments online. <br>
            With just a few clicks, you can schedule your visit to the doctor <br>
            without the need to wait in long queues.
        </h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="/create_appointment" class="btn-get-started scrollto">Make an Appointment</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="why-us">
        <div class="container mt-5 ">

            <div class="section-title">
                <h2>About us</h2>

            </div>

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Why Choose <br> R-MEDICARE?</h3>
                        <p>
                            Our platform allows you to view the available slots with your preferred doctors,
                            and you can select the time that suits you best. You can make your payments online,
                            and you will receive a confirmation of your appointment via email and SMS.
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Wide network of doctors</h4>
                                    <p>
                                        We have a wide network of doctors and clinics across the country,
                                        so you can choose the location that's most convenient for you.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Best possible experience</h4>
                                    <p>
                                        Our team is dedicated to providing you with the best possible experience,
                                        and we strive to make your medical appointment process as smooth as possible.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>E-channeling</h4>
                                    <p>
                                        At E-channeling, we understand that your time is precious.
                                        That's why we've created a fast, easy, and secure way to book your
                                        medical appointments online.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->




    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container mt-5">

            <div class="section-title">
                <h2>Doctors</h2>
                <p>Our team of doctors are among the best in the field, with a wealth of experience and expertise that spans a range of specialties. We take pride in delivering high-quality care that meets the unique needs of each patient, and our team of doctors are committed to providing compassionate, patient-centered care.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset('images/doc1.png') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Medical Officer</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>

                            
                            <a href="/create_appointment" class="btn btn-primary"> Make an Appointment </a>
                            
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset('images/doc2.png') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Anesthesiologist</span>
                            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <a href="/create_appointment" class="btn btn-primary"> Make an Appointment </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset('images/doc3.png') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Cardiology</span>
                            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            <a href="/create_appointment" class="btn btn-primary"> Make an Appointment </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset('images/doc4.png') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Neurosurgeon</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            <a href="/create_appointment" class="btn btn-primary"> Make an Appointment </a>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Doctors Section -->






    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container mt-5">

            <div class="section-title">
                <h2>Services</h2>
                <p>
                    Our service is designed to help you achieve your goals quickly and easily.
                    With years of experience and a team of skilled professionals, we offer a
                    range of services that can be tailored to meet your specific needs. Whether
                    you need help with project management, business development, or technical
                    support, our team is dedicated to providing high-quality service that exceeds your expectations.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4><a href="">Appointment Booking</a></h4>
                        <p>

                            E-channeling can offer a simple and user-friendly platform to book medical appointments
                            online. This service allows patients to easily search and find available slots with their
                            preferred doctors, select a time that suits them, and pay for their appointments online.


                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4><a href="">Doctor Directory</a></h4>
                        <p>
                            E-channeling can also provide a comprehensive directory of doctors and medical professionals
                            in various specialties. This service can allow patients to view the qualifications and
                            credentials of each doctor, read patient reviews, and select the best doctor for their
                            medical needs.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-hospital-user"></i></div>
                        <h4><a href="">Health Records Management</a></h4>
                        <p>
                            E-channeling can offer a secure platform for patients to store their medical records online.
                            This service can allow patients to easily access their medical history, test results, and
                            other important information from any device, anytime, anywhere.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container mt-5">

            <div class="section-title">
                <h2>Make an Appointment</h2>
                <p>
                    To schedule an appointment, simply visit our website and select the "Make an Appointment" option from the menu. You will be directed to a user-friendly interface where you can choose the department you wish to see, select a healthcare professional, and choose a date and time that works best for you.
                    We invite you to experience our exceptional care for yourself by using our online booking system to schedule your next appointment.
                
                </p>
            </div>

            
                <div class="mb-3">
                    
                </div>
                <div class="text-center">
                    <a href="/create_appointment" class="btn btn-primary"> ->>  Make an Appointment  <<-- </a>
           

        </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container mt-5">

            <div class="section-title">
                <h2>Departments</h2>
                <p>
                    Our team of highly skilled and experienced healthcare professionals are dedicated to staying up-to-date with the latest research and techniques in their respective fields to provide the most effective treatments for our patients. We offer a wide range of diagnostic, treatment, and rehabilitation services to help manage and improve health outcomes for our patients.
                </p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Cardiology</h3>
                                    <p class="fst-italic">
                                        
                                    </p>
                                    <p>
                                        We offer a range of diagnostic services to help identify and evaluate heart conditions, including echocardiography, stress testing, and cardiac catheterization. Our treatment options include medication management, lifestyle modification, and advanced interventions such as catheter-based procedures and open-heart surgery.
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Neurology</h3>
                                    <p class="fst-italic">
                                        
                                    </p>
                                    <p>
                                        We offer a range of diagnostic services to help identify and evaluate neurological conditions, including electroencephalography (EEG), electromyography (EMG), and brain imaging such as MRI and CT scans. Our treatment options include medication management, lifestyle modification, and advanced interventions such as deep brain stimulation and botulinum toxin injections.
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Hepatology</h3>
                                    <p class="fst-italic">
                                        
                                    </p>
                                    <p>
                                        We offer a range of diagnostic services to help identify and evaluate liver conditions, including blood tests, liver imaging such as MRI and CT scans, and liver biopsy. Our treatment options include medication management, lifestyle modification, and advanced interventions such as liver transplantation.
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Pediatrics</h3>
                                    <p class="fst-italic">
                                        
                                    </p>
                                    <p>
                                        We offer a range of diagnostic services to help identify and evaluate pediatric conditions, including developmental screenings, hearing and vision tests, and laboratory testing. Our treatment options include medication management, lifestyle modification, and referrals to pediatric specialists when necessary.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Eye Care</h3>
                                    <p class="fst-italic">
                                        
                                    </p>
                                    <p>
                                        We offer a range of diagnostic services to help identify and evaluate eye conditions, including vision testing, optical coherence tomography (OCT), and fluorescein angiography. Our treatment options include medication management, corrective lenses, and advanced surgical interventions such as LASIK, cataract surgery, and corneal transplantation.
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Departments Section -->

    

   



 

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container mt-5">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
        </div>

        
        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center mb-5"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->













@endsection
