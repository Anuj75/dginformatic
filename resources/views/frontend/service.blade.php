@extends('frontend.layouts.main')

@section('main-container')
<section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Here are our services </h6>
          <h2>We provide all services</h2>
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
              <div class="filters">
                <ul>
                  <li data-filter="*"  class="active">All services</li>
                  <li data-filter=".soon">Web Development </li>
                  <li data-filter=".imp">Digital marketing</li>
                  <li data-filter=".att">Graphics designing </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon " >
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-01.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4>Web Designing</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-02.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4>Search Engine Optimization</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-03.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4>E-Commerce Designing </h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-04.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4>Brochure Design </h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      >
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-02.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4>Logo Design</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-03.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4>Social Media Marketing</h4></a>
                      <p>TemplateMo is the best website<br>when it comes to Free CSS.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-01.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                    
                      <a href="meeting-details.html"><h4>Email Marketing </h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon soon">
                  <div class="meeting-item">
                    <div class="thumb">
                    
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-02.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                    
                      <a href="meeting-details.html"><h4>Web Portals</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-03.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4>Website Maintenance</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-03.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4>UI/UX Design </h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-03.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4> Content Marketing </h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-03.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4> Android Development  </h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="meeting-details.html"><img src="{{url('frontend/images/meeting-03.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                     
                      <a href="meeting-details.html"><h4>Online Advertisting</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
   @endsection
