@extends('frontend.layouts.main')

@section('main-container')

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <!-- <img src="assets/images/home1.jpg"> -->
    <img src="{{url('frontend/images/home.jpg')}}">
      <!-- <video autoplay muted loop id="bg-video">
          <source src="assets/images/Web 1920 – 1.jpg" type="video/mp4"/>
      </video> -->

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Everyone</h6>
              <h2>Welcome to <span style="color: rgb(1, 8, 49); ">DG Informatic</span></h2>
              <p>This is an DG Informatic we are providing IT Services & IT Courses  dginformatic.com In this Website provide all content about DG Informatics services and courses </p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">More Information.....</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="{{url('frontend/images/service-icon-01.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Best Services </h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="{{url('frontend/images/service-icon-02.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Best Developers</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="{{url('frontend/images/service-icon-03.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Best Trainers</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="{{url('frontend/images/service-icon-02.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Online Clasess</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="{{url('frontend/images/service-icon-03.png')}}" alt="">
              </div>
              <div class="down-content">
                <h4>Best Employee</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Services</h2>
          </div>
        </div>
        <div class="col-lg-4">    
        <form action="home_form_service" method="POST">  
          @csrf    
          <div class="services-form">
            <h4>Enquiry for Services </h4>
            <div class="forum">
              
                <input class="field"name="name" type="text" id="name" placeholder="Name" required="">
             
            </div>
            <div class="forum">
              
              <input class="field"name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
       
            </div>
            <div class="forum">
              <fieldset>
                <input class="field"name="phone_no" type="number" id="subject" placeholder="Phone No." required="">
             
            </div>
            <div class="forum">
          
                <input class="field"name="service" type="text" id="service" placeholder="Service" required="">
             
            </div>
            
            <div class="main-button-yellow"id="btn">
              <button type="submit">Submit</button>
            </div>
            </div>      
            </form>       
      </div>      
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                 
                  <a href="meeting-details.html"><img src="{{url('frontend/images/graphics.jpg')}}" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                 
                  <a href="meeting-details.html"><h4>Graphics Designing </h4></a>
                  <p>Adobe Xd UI/UX Design <br>Logo Design<br>Brochure Design</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  
                  <a href="meeting-details.html"><img src="{{url('frontend/images/webdesign.jpg')}}" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                
                  <a href="meeting-details.html"><h4>Web Designing & Development</h4></a>
                  <p>Website Maintenance<br>Responsive Web Design<br>Front-end Development<br>Back-end Development</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  
                  <a href="meeting-details.html"><img src="{{url('frontend/images/seo.jpg')}}" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                
                  <a href="meeting-details.html"><h4>Digital Marketing </h4></a>
                  <p>SEO/SMO<br>Content Marketing<br>Posting<br>Social Media Marketing<br>Email Marketing </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">

                  <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-04.jpg')}}" alt="Student Training"></a>
                </div>
                <div class="down-content">
                 
                  <a href="meeting-details.html"><h4>Student Training/Internship </h4></a>
                  <p>Online/Offline training <br>3 Month | 6 Month Internship</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR Training </h3>
                <p> You are eligible for Traning yes or not decided after Apply for this form <br>Trainig is online and offline clasess laptop are mandatory all cadidates</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR Internship</h3>
                <p> You are eligible for Internship yes or not decided after your interview performance <br>Internship is 3 month & 6 month with letter laptop are mandatory all cadidates.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>About DG Informatics</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Web Services, head office situated in Rohini, Delhi, is a well-reputed IT Company who is expertise in the field of creative Website Designing, Web Development, graphic design, apps development, e-commerce website, internet marketing services, Search Engine Optimization (SEO), etc. We are young and energetic technical IT professional savvies and in hungry of latest innovation technologies on web, graphic and apps development.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Services & Quality </span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                        Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Our Satisfied clients </span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                        Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                    </div>
                </div>
            </article>
            <article class="accordion last-accordion">
                <div class="accordion-head">
                    <span>Share Expirence with us </span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                        Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                    </div>
                </div>
            </article>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Popular Courses</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="{{url('frontend/images/course-01.jpg')}}" alt="Course One">
              <div class="down-content">
                <h4>HTML<br>(Hypertext-markup) </h4>
               
                <div class="info">
                  <div class="row">
                    <a href="https://www.javatpoint.com/python-tutorial" class="btn btn-primary">See Course</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{url('frontend/images/course-01.jpg')}}" alt="Course Two">
              <div class="down-content">
                <h4>CSS<br>(cascading stylesheet)</h4>
                <div class="info">
                  <div class="row">
                    <a href="https://www.javatpoint.com/python-tutorial" class="btn btn-primary">See Course</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{url('frontend/images/course-03.jpg')}}" alt="">
              <div class="down-content">
                <h4>Java Script<br>(Scripting Language)</h4>
                <div class="info">
                  <div class="row">
                    <a href="https://www.javatpoint.com/python-tutorial" class="btn btn-primary">See Course</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{url('frontend/images/course-04.jpg')}}" alt="">
              <div class="down-content">
                <h4>Core Java<br>(Java Language)</h4>
                <div class="info">
                  <div class="row">
                    <a href="https://www.javatpoint.com/python-tutorial" class="btn btn-primary">See Course</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{url('frontend/images/course-01.jpg')}}" alt="">
              <div class="down-content">
                <h4>Python<br>(Python language)</h4>
                <div class="info">
                  <div class="row">
                    <a href="https://www.javatpoint.com/python-tutorial" class="btn btn-primary">See Course</a>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{url('frontend/images/course-02.jpg')}}" alt="">
              <div class="down-content">
                <h4>Wordpress<br>(Wordpress Designing)</h4>
                <div class="info">
                  <div class="row">
                    <a href="https://www.javatpoint.com/python-tutorial" class="btn btn-primary">See Course</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="{{url('frontend/images/course-03.jpg')}}" alt="">
              <div class="down-content">
                <h4>BootStrap<br>(Bootstrap Framwork)</h4>
                <div class="info">
                  <div class="row">
                    <a href="https://www.javatpoint.com/python-tutorial" class="btn btn-primary">See Course</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our Clients/Students</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Satisfied Clients</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">126</div>
                    <div class="count-title">Current Trainers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">Total Students</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          
          <div class="video">
            <a href="https://youtu.be/rQ5NJfZ8lDs" target="_blank"><img src="{{url('frontend/images/play-icon.png')}}" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="home_form_course" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="phone_no" type="number" id="subject" placeholder="Phone No." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="qualification" type="text" id="qualification" placeholder="Qualification" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="course" type="text" id="course" placeholder="Course" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>9084547006,7409415430</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>dginformation2021@gmail<br>.com</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Shop no.2 sd complex Above SBI bank ,bodla agra</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.dginformatic.com</span>
              </li>
            </ul>
          </div> 
        </div>
      </div>
    </div>
    @endsection