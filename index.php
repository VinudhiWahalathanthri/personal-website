<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | Vinudhi Wahalathanthri</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Stack+Sans+Notch:wght@200..700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="newstyles.css" />
  <style>
    html,
    body {
      color: white;
      font-family: 'Manrope', sans-serif;
    }

    #bg {
      position: fixed;
      inset: 0;
      z-index: 0;
    }

    .grid {
      position: fixed;
      inset: 0;
      background-image:
        linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
      background-size: 120px 120px;
      z-index: 1;
    }

    .bg-image {
      background-image: url("assets/images/bg.png");
      background-repeat: no-repeat;
      background-size: cover;
    }



    .navbar-custom {
      padding: 8px 20px;

      max-width: 95%;
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      gap: 8px;
      color: white !important;
      font-weight: 700;
      font-size: 1.2rem;
    }

    .brand-icon {

      width: 35px;
      height: 35px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 700;
    }
  </style>
</head>

<body>


  <div class="col-12">
    <div class=" bg-image">

      <div>

        <nav class="navbar navbar-expand-lg navbar-custom">
          <div class="container-fluid mt-3">

            <a class="navbar-brand" href="#">
              <span class="brand-icon">VW</span>
            </a>

            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto align-items-center">


                <div class="d-flex ms-4 gap-3 mt-3 mt-lg-0">
                  <a href="#" class="text-white" aria-label="GitHub"><i class="bi bi-github"></i></a>
                  <a href="https://www.linkedin.com/in/vinudhi-wahalathanthri/" class="text-white" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                  <a href="vinudhiwahaalathanthri@gmail.com" class="text-white" aria-label="Twitter"><i class="bi bi-envelope"></i></a>
                </div>
            </div>
          </div>
        </nav>

        <div style="padding:100px 60px;">

          <h1 class="uk-heading-line uk-scrollspy"
            uk-scrollspy="cls: uk-animation-slide-top; delay: 300; repeat: false"
            style="font-size:160px; font-weight:300; letter-spacing:2px; font-family:'Stack Sans Notch';color: white;">
            A SOFTWARE<br>ENGINEER
          </h1>

          <p class="uk-scrollspy" uk-scrollspy="cls: uk-animation-slide-bottom; delay: 600; repeat: false"
            style="font-size:12px;opacity:0.7;max-width:520px;">
            WITH OVER 4 YEARS OF EXPERIENCE AND INVOLVEMENT IN VARIOUS PROJECTS
          </p>
        </div>
      </div>
    </div>

    <canvas id="bg"></canvas>
    <div class="grid"></div>


    <div class="container-fluid bg-white " style="padding:100px 60px;">
      <div class="row">
        <div class="col-md-9">
          <div class="d-flex align-items-center mb-3">
            <img
              src="assets/images/semi-circle.png"
              class="me-3"
              width="100"
              height="100" />

            <img
              src="assets/images/me.png"
              class="rounded-circle me-3"
              width="100"
              height="100" />

            <div>
              <h5 class="mb-0 text-dark">Vinudhi Wahalathanthri</h5>
              <small class="fw-medium" style="color: #dd3e05;">
                Full Stack Software Engineer
              </small>
            </div>
          </div>


        </div>

        <p class="fs-4 mt-3 uk-scrollspy"
          uk-scrollspy="cls: uk-animation-slide-bottom; delay: 300; repeat: false" style="color:#000;font-family: Manrope;">
          <b>I’m a 16 y/o full-stack developer and from Sri Lanka</b>,
          I started coding at the age of 12 during the pandemic and enrolled in university the same year.
          I’m currently a second-year BSc (Hons) Software Engineering undergraduate at Birmingham City University
          while also studying in Grade 10th at school.
          I love turning ideas into real-world products.
          With experience contributing to award-winning projects and working as an intern and associate software engineer,
          I’ve built solutions across healthcare, e-commerce, and education.
          <span class="text-decoration-underline">I'm always learning, building, breaking and experimenting by abilities.</span>
        </p>

        <p class="fs-4 uk-heading-line uk-scrollspy"
          uk-scrollspy="cls: uk-animation-slide-bottom; delay: 300; repeat: false" style="color:#000;font-family: Manrope;">On the fun side, Well I'm an ultimate extrovert, a huge Marvel fan, a movie lover, gamer, musician and someone who enjoys connecting with people, whether it's through tech, music, or anything else. I'd love to chat!! 💖</p>

        <div class="row mt-4 g-4" uk-scrollspy="cls: uk-animation-fade; delay: 200">
          <div class="col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-icon">
                <i class="bi bi-code-square"></i>
              </div>
              <h3 class="stat-number">10+</h3>
              <h6 class="stat-label">Projects</h6>
              <p class="stat-description">A variety of full-stack, mobile, and experimental projects. All powered by caffeine and curiosity.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-icon">
                <i class="bi bi-lightning-charge"></i>
              </div>
              <h3 class="stat-number">4+</h3>
              <h6 class="stat-label">Years of Experience</h6>
              <p class="stat-description">Coding since the pandemic. Building , Breaking,and again Building projects since 2021</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-icon">
                <i class="bi bi-clock-history"></i>
              </div>
              <h3 class="stat-number">1000+</h3>
              <h6 class="stat-label">Hours of Coding</h6>
              <p class="stat-description">The secret sauce to my skills. Countless hours spent debugging, learning, and creating.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="stat-icon">
                <i class="bi bi-cup-hot"></i>
              </div>
              <h3 class="stat-number">100+</h3>
              <h6 class="stat-label">Cups of Nescafe</h6>
              <p class="stat-description">The real backend of every project. Highly reliable, consistently dark, and mostly Colombian.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  </div>


  <?php include 'experience.php'; ?>
  <?php include 'featured-projects.php'; ?>
  <?php include 'achievements.php'; ?>


  <div class="container-fluid section-dark" style="padding:60px 60px 40px; border-top:1px solid rgba(255,255,255,0.1);">
    <div class="row">
      <div class="col-md-6">
        <h4 style="font-family:'Stack Sans Notch'; font-weight:300; color: white;">Let's Connect</h4>
        <p style="opacity:0.7; font-size:14px;">Feel free to reach out for collaborations or just a friendly chat.</p>
        <div style="display:flex; gap:15px; margin-top:20px;">
          <a href="https://www.linkedin.com/in/vinudhi-wahalathanthri/" style="color:#ff6a2a; font-size:1.5rem;"><i class="bi bi-linkedin"></i></a>
          <a href="https://www.instagram.com/vinuu.vw_forever/" style="color:#ff6a2a; font-size:1.5rem;"><i class="bi bi-instagram"></i></a>
          <a href="vinudhiwahalathanthri@gmail.com" style="color:#ff6a2a; font-size:1.5rem;"><i class="bi bi-envelope"></i></a>
        </div>
      </div>
      <div class="col-md-6 text-md-end mt-4 mt-md-0">
        <p style="opacity:0.5; font-size:13px;">© 2025 Vinudhi Wahalathanthri. All rights reserved.</p>
      </div>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.min.js"></script>
  <script src="uikit.js"></script>
  <script src="uikit-min.js"></script>

  <script>
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({
      canvas: document.getElementById('bg'),
      alpha: true
    });

    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(window.innerWidth, window.innerHeight);
    camera.position.setZ(30);

    const geometry = new THREE.TorusGeometry(10, 3, 16, 100);
    const material = new THREE.MeshStandardMaterial({
      color: 0xff6a2a,
      wireframe: true
    });
    const torus = new THREE.Mesh(geometry, material);
    scene.add(torus);

    const pointLight = new THREE.PointLight(0xffffff);
    pointLight.position.set(20, 20, 20);
    const ambientLight = new THREE.Amb