<?php include 'header.php'; ?>

<div class="slider_section position-relative">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="detail-box">
                <h1>Welcome To <br><span>Content Writing Services</span></h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking.</p>
                <div class="btn-box">
                  <a href="" class="btn-1">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="detail-box">
                <h1>Welcome To <br><span>Content Writing Services</span></h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking.</p>
                <div class="btn-box">
                  <a href="" class="btn-1">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="custom_carousel-control">
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<!-- About Section -->
<section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>About Us</h2>
          </div>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page...</p>
          <a href="">Get Started</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service Section -->
<section class="service_section">
  <div class="container">
    <div class="heading_container">
      <h2>At Your Service</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="box">
          <div class="img-box">
            <img src="images/s-1.png" alt="">
          </div>
          <h4>Written with Love</h4>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page...</p>
          <a href="">Read More</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box">
          <div class="img-box">
            <img src="images/s-2.png" alt="">
          </div>
          <h4>Fast Turnaround</h4>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page...</p>
          <a href="">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Quote Section -->
<section class="quote_section layout_padding">
  <div class="container">
    <div class="box">
      <div class="detail-box">
        <h3>Get Your Quote Today!</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
      </div>
      <div class="btn-box">
        <a href="">Get A Quote</a>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="contact_section">
  <div class="container">
    <div class="heading_container">
      <h2>Let's Get In Touch!</h2>
    </div>
  </div>
  <div class="container contact_bg layout_padding2-top">
    <div class="row">
      <div class="col-md-6">
        <div class="contact_form">
          <form action="">
            <input type="text" placeholder="Name ">
            <input type="email" placeholder="Email">
            <input type="text" placeholder="Message" class="message_input">
            <button>Send</button>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/contact-img.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Client Section -->
<section class="client_section layout_padding-top">
  <div class="d-flex justify-content-center">
    <div class="heading_container">
      <h2>Testimonial</h2>
    </div>
  </div>
  <div class="container layout_padding2">
    <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
        <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="client_container">
            <div class="client-id">
              <div class="img-box">
                <img src="images/client.jpg" alt="">
              </div>
              <div class="client_name">
                <div>
                  <h3>Johndue</h3>
                  <p>Farm & CO</p>
                </div>
              </div>
            </div>
            <div class="client_detail">
              <div class="client_text">
                <blockquote>
                  <p>ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <!-- Add more testimonials here -->
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>