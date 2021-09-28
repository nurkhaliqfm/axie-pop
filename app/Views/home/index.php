<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<a class="wafixed" href="https://wa.me/082291938794" target="_blank"><span class="fa-stack fa-lg">
    <img src="assets/img/toplogo.png" style="width:80%;height: 80%" alt="">
  </span></a>

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
    <h1 style="font-family: 'Edo', Boycott;font-size:80px;margin-bottom: 40px">AXIE POP</h1><br>
    <div class="d-flex">
      <a href="#about" class="btn-get-started scrollto">Play Axie Pop</a> &nbsp;
      <a href="#donate" class="btn-get-started btn-primary">Donate Us Anet</a>
    </div>
  </div>
</section>

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-end">
        <div class="col-lg-11">
          <div class="row justify-content-end">

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-simple-smile"></i>
                <span data-toggle="counter-up">100650</span>
                <p>Happy Gamer</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-document-folder"></i>
                <span data-toggle="counter-up">100985</span>
                <p>Downloads</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-award"></i>
                <span data-toggle="counter-up">80515</span>
                <p>Subscribes</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-money"></i>
                <span data-toggle="counter-up">325015</span>
                <p>SLP Donation Amount</p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">
      <div class="owl-carousel testimonials-carousel">

        <div class="testimonial-item">
          <h3></h3><br>
          <h1>
            This game system uses SLP tokens wherein SLP will be burned from a large percentage
          </h1>
        </div>

        <div class="testimonial-item">
          <h3></h3><br>
          <h1>
            By donating, there is already an SLP that will be burned, as a reward for you, our donors will provide a special NFT. or TOP SLP Burner Eldiablo
          </h1>
        </div>

        <div class="testimonial-item">
          <h3></h3><br>
          <h1>
            By becoming our donor, you are supporting us to boost the Axie economy.
          </h1>
        </div>

        <div class="testimonial-item">
          <h3></h3>
          <h1>
            Our 0.1 version is bolted to support us so that we can upgrade to version 0.2 so that Minigames SLP is getting higher and better
          </h1>
        </div>

      </div>
    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="ourhero" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <a href="#" class="btn btn-primary">
            <h1>CHOOSE YOUR HERO ?</h1>
          </a>
        </div>
      </div>

      <br><br>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php foreach ($heroes as $h) : ?>
          <div class="col-lg-3 col-md-6 col-xs-6 portfolio-item filter-web">
            <img src="assets/img/axie/<?= $h['cover']; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $h['heroes_name']; ?></h4>
              <p><?= $h['speciality']; ?></p>
              <a href="assets/img/axie/<?= $h['cover']; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">
      <div class="row">
        <h3>The hero used is a hero that comes from the private NFT of the East Axie Infinity community, does not contain any copyright elements.</h3>
      </div>
    </div>
  </section><!-- End Clients Section -->

  <section id="getslp">
    <div class="getslp-container" data-aos="fade-up" data-aos-delay="150">
      <p style="font-size:30px;font-weight:bold;color:white">Minigames with the aim of making SLP burning happen.</p>
      <p style="font-family: 'Share', comic-sans;
    font-size:60px;
    width:100%;
    font-weight: bold;
    text-shadow: 5px 5px 0px #f0e8db, 8px 8px 0px #6c5257;
    color: #e42aef;
    line-height: .9em;
text-shadow: 0 10px 20px rgba(29,53,117,.6),0 10px 20px rgba(29,53,117,.6);">Improve the economy of SLP</p>

    </div>
  </section><!-- End Hero -->

  <section id="clientstopaz" class="clientstopaz">
    <div class="container" data-aos="zoom-in">

      <div class="row" style="text-align:center">

        <span data-aos="fade-up" style="font-family: 'Share', cursive;
          font-size: 80px;
          font-weight: bold;
          color:#30e06f;
          text-shadow: 5px 5px 0px #b9ffd2, 8px 8px 0px #0af55e;
    color: #30e06f;
    line-height: .9em;
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
          ">
          <center>CHARGE YOUR TOPAZ</center>
        </span>

        <span style="font-size: 36px">Topaz is a token that is useful when your energy has run out, refill it with filling from your SLP</span>

      </div>

    </div>
  </section><!-- End Clients Section -->

  <br>

  <section id="donate">
    <div class="container" data-aos="fade-up">
      <div class="col-lg-12 mt-4 mt-lg-0 text-center">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <h1 class='blink'>DONATE US</h1>
          <h6>If u Want Support Us, you can Donate in This<br>Eth Ronin :</h6>

          <div class="text-center">
            ronin:5d4537460f8baa690322e02e5fe8b
          </div>
        </form>
      </div>


    </div>
  </section>
  <br>


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up"">

    <div class=" section-title">
      <h2>Contact</h2>
      <p>Send Us Message</p>
    </div>

    <div class="row">
      <div class="col-lg-12 mt-4 mt-lg-0">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
        </form>
      </div>

    </div>

    </div>
  </section>
  <!-- ======= Contact Section ======= -->

</main><!-- End #main -->
<?= $this->endSection(); ?>