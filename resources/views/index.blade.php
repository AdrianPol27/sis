@extends('layouts.app')

@section('content')
    <section class="site-hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('./images/site-images/hero-1.jpg')}}" class="w-100" alt="Hero 1">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('./images/site-images/hero-2.jpg')}}" class="w-100" alt="Hero 2">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('./images/site-images/hero-3.jpg')}}" class="w-100" alt="Hero 3">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('./images/site-images/hero-4.jpg')}}" class="w-100" alt="Hero 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Main Content -->
    <section class="site-main-content my-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="card p-3">
              <!-- Enrollment -->
              <div class="enrollment">
                <p class="text-uppercase m-0">Enrollment</p>
              </div>
       
              <img src="{{ asset('./images/site-images/stripe.png') }}" alt="Stipe" class="enrollment-stripe">
            
              <canvas id="myChart" class="w-100 p-2"></canvas>  
              
              <h5 class="text-center">School Year 2022 - 2023</h5>
              
            </div>
            <div class="card mt-3 p-3">
              <!-- Enrollment -->
              <div class="personnel-organization-chart ">
                <p class="text-uppercase m-0">Personnel Organizational Chart</p>
              </div>
      
              <div id="chart-container" class="mt-3"></div>
              
            </div>

          </div>

         
            
        
          
          <div class="col-lg-4 align-items-stretch">
           <div class="card p-2">
              <div class="card p-2">
                <img src="./images/stripe.png">
                <p class="text-uppercase">Announcements</p>
                <div class="card p-2 bg-darkblue text-white ">
                  <p class="text-center py-5">See Announcements!</p>
                  <a href="announcements.html" class="text-muted text-decoration-none">More Info >></a>
                </div>
              </div>
              <div class="card p-2 mt-2">
                <img src="./images/stripe.png">
                <p class="text-uppercase">The College</p>
                <div class="card p-2 bg-darkblue text-white ">
                  <img src="./images/itss-logo.png" class="itss-logo-announcements">
                  <p class="text-center">  College of Information Sciences and Computing (CISC) VISSION / MISSION</p>
                  <a href="college.html" class="text-muted text-decoration-none">More Info >></a>
                </div>
              </div>
              <div class="card p-2 mt-2">
                <img src="./images/stripe.png">
                <p class="text-uppercase">Faculty / Staff</p>
                <div class="card p-2 bg-darkblue text-white ">
                  <p class="text-center py-5">Meet The Faculty Members of CISC!</p>
                  <a href="faculty.html" class="text-muted text-decoration-none">More Info >></a>
                </div>
              </div>
              <div class="card p-2 mt-2">
                <img src="./images/stripe.png">
                <p class="text-uppercase">ITSS / Student Organization</p>
                <div class="card p-2 bg-darkblue text-white ">
                  <img src="./images/itss.png">
                  <a href="itss.html" class="text-muted text-decoration-none">More Info >></a>
                </div>
              </div>
              <div class="card p-2 mt-2">
                <img src="./images/stripe.png">
                <p class="text-uppercase">Courses</p>
                <div class="card p-2 bg-darkblue text-white ">
                  <div class="py-5 px-4 text-left">
                    <a href="im.html" class="text-decoration-none text-white"> -> Information Management</a><br>
                    <a href="wma.html" class="text-decoration-none text-white"> -> Web and Mobile Applications</a><br>
                    <a href="dn.html" class="text-decoration-none text-white"> -> Data Networking</a>
                  </div>
                  <a href="courses.html" class="text-muted text-decoration-none">More Info >></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection