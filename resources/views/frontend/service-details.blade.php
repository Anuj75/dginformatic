@extends('frontend.layouts.main')

@section('main-container')
  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Get Service Price</h6>
          <h2>Best Packages For You!</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  
                  
                  <a href="meeting-details.html"><img src="{{url('frontend/images/single-meeting.jpg')}}" alt=""></a>
                </div>
                <div class="down-content">
                  <h3><span style="font-weight: 700; "> Graphics Designing Package Plan</span> </h3>
                  <br>
                  <p>Recreio dos Bandeirantes, Rio de Janeiro - RJ, 22795-008, Brazil</p>
                  
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="hours">
                        <h5>Brochure </h5>
                        <p>20 Pages : 2000 INR<br>10 Pages : 1200 INR</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="location">
                        <h5>Logo Design</h5>
                        <p>Simple Logo : 399 INR 
                        <br>professional Logo : 599 INR</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="book now">
                        <h5>Social media posts</h5>
                        <p>5 Posts : 199 INR<br>10 Posts : 399 INR</p>
                      </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
              
                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="hours">
                        <h5>UI Design </h5>
                        <p>Single page web UI : 899 INR<br>Multiple pages UI : 2500 INR</p>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="meetings.html">Back To All services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection