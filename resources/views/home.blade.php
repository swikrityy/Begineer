<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Modern Home Page</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, sans-serif;
    }

    body{
      background:#f5f7fa;
      color:#333;
      line-height:1.6;
    }

    a{
      text-decoration:none;
      color:inherit;
    }

    /* Navbar */
    .navbar{
      width:100%;
      background:#0f172a;
      color:white;
      padding:20px 8%;
      display:flex;
      justify-content:space-between;
      align-items:center;
      position:sticky;
      top:0;
      z-index:1000;
    }

    .logo{
      font-size:28px;
      font-weight:bold;
      color:#38bdf8;
    }

    .nav-links{
      display:flex;
      gap:25px;
    }

    .nav-links a{
      color:white;
      transition:0.3s;
    }

    .nav-links a:hover{
      color:#38bdf8;
    }

    .btn{
      background:#38bdf8;
      color:white;
      padding:12px 24px;
      border-radius:8px;
      display:inline-block;
      transition:0.3s;
    }

    .btn:hover{
      background:#0284c7;
    }

    /* Hero Section */
    .hero{
      height:90vh;
      background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
      url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1600&auto=format&fit=crop');
      background-size:cover;
      background-position:center;
      display:flex;
      justify-content:center;
      align-items:center;
      text-align:center;
      color:white;
      padding:20px;
    }

    .hero-content{
      max-width:700px;
    }

    .hero h1{
      font-size:60px;
      margin-bottom:20px;
    }

    .hero p{
      font-size:20px;
      margin-bottom:30px;
    }

    /* Features */
    .features{
      padding:80px 8%;
      background:white;
    }

    .section-title{
      text-align:center;
      margin-bottom:50px;
    }

    .section-title h2{
      font-size:40px;
      color:#0f172a;
    }

    .feature-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
      gap:30px;
    }

    .feature-card{
      background:#f8fafc;
      padding:30px;
      border-radius:15px;
      text-align:center;
      transition:0.3s;
    }

    .feature-card:hover{
      transform:translateY(-10px);
      box-shadow:0 10px 20px rgba(0,0,0,0.1);
    }

    .feature-card h3{
      margin:20px 0 10px;
      color:#0f172a;
    }

    /* About */
    .about{
      padding:80px 8%;
      display:flex;
      flex-wrap:wrap;
      align-items:center;
      gap:50px;
      background:#e2e8f0;
    }

    .about img{
      width:100%;
      max-width:500px;
      border-radius:15px;
    }

    .about-text{
      flex:1;
    }

    .about-text h2{
      font-size:40px;
      margin-bottom:20px;
      color:#0f172a;
    }

    /* Services */
    .services{
      padding:80px 8%;
      background:white;
    }

    .service-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
      gap:25px;
    }

    .service{
      background:#f1f5f9;
      padding:25px;
      border-radius:12px;
      border-left:5px solid #38bdf8;
    }

    /* Testimonials */
    .testimonials{
      padding:80px 8%;
      background:#0f172a;
      color:white;
    }

    .testimonial-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
      gap:30px;
    }

    .testimonial{
      background:#1e293b;
      padding:25px;
      border-radius:12px;
    }

    /* Contact */
    .contact{
      padding:80px 8%;
      background:white;
    }

    .contact form{
      max-width:600px;
      margin:auto;
      display:flex;
      flex-direction:column;
      gap:20px;
    }

    .contact input,
    .contact textarea{
      padding:15px;
      border:1px solid #ccc;
      border-radius:8px;
      font-size:16px;
    }

    .contact textarea{
      resize:none;
      height:150px;
    }

    /* Footer */
    footer{
      background:#0f172a;
      color:white;
      text-align:center;
      padding:20px;
    }

    /* Responsive */
    @media(max-width:768px){
      .hero h1{
        font-size:40px;
      }

      .navbar{
        flex-direction:column;
        gap:15px;
      }

      .nav-links{
        flex-wrap:wrap;
        justify-content:center;
      }

      .about{
        flex-direction:column;
      }
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">MyBrand</div>

    <div class="nav-links">
      <a href="#">Home</a>
      <a href="#">Features</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </div>
  </nav>

  <!-- Hero -->
 
<section class="hero">
  <div class="hero-content">

    <h1>{{ $homepage->hero_title }}</h1>

    <p>
      {{ $homepage->hero_description }}
    </p>

    <a href="#" class="btn">Get Started</a>
  </div>
</section>

  <!-- Features -->
  <section class="features">
    <div class="section-title">
      <h2>Our Features</h2>
    </div>

    <div class="feature-grid">

      <div class="feature-card">
        <h3>Responsive Design</h3>
        <p>
          Fully responsive layout that works perfectly on all devices.
        </p>
      </div>

      <div class="feature-card">
        <h3>Fast Performance</h3>
        <p>
          Optimized code for faster loading and smooth browsing experience.
        </p>
      </div>

      <div class="feature-card">
        <h3>Modern UI</h3>
        <p>
          Clean and elegant user interface with modern styling.
        </p>
      </div>

    </div>
  </section>

  <!-- About -->
  <!-- About -->
<section class="about">

  <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop" alt="About Image">

  <div class="about-text">

    <h2>{{ $homepage->about_title }}</h2>

    <p>
      {{ $homepage->about_description }}
    </p>

    <br>

    <a href="#" class="btn">Learn More</a>

  </div>

</section>
<!-- Services -->
<section class="services">

    <div class="section-title">
        <h2>Services</h2>
    </div>

    <div class="service-grid">

        @foreach($services as $service)

        <div class="service">
            <h3>{{ $service->title }}</h3>

            <h5>{{ $service->sub_title }}</h5>

            <p>
                {{ $service->paragraph }}
            </p>
        </div>

        @endforeach

    </div>

</section>

  <!-- Testimonials -->
  <section class="testimonials">

    <div class="section-title">
      <h2>What Clients Say</h2>
    </div>

    <div class="testimonial-grid">

      <div class="testimonial">
        <p>
          "Amazing service and beautiful design. Highly recommended!"
        </p>
        <br>
        <strong>- John Doe</strong>
      </div>

      <div class="testimonial">
        <p>
          "Professional team with excellent communication and support."
        </p>
        <br>
        <strong>- Sarah Smith</strong>
      </div>

      <div class="testimonial">
        <p>
          "Our business website looks modern and performs perfectly."
        </p>
        <br>
        <strong>- Michael Lee</strong>
      </div>

    </div>

  </section>

  <!-- Contact -->
  <section class="contact">

    <div class="section-title">
      <h2>Contact Us</h2>
    </div>

    <form>
      <input type="text" placeholder="Your Name" required>

      <input type="email" placeholder="Your Email" required>

      <textarea placeholder="Your Message"></textarea>

      <button class="btn" type="submit">Send Message</button>
    </form>

  </section>

  <!-- Footer -->
  <footer>
    <p>© 2026 MyBrand. All Rights Reserved.</p>
  </footer>

</body>
</html>