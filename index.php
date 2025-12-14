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
      margin: 0;
      background: #050510;
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
    }
  </style>
</head>

<body>

  <canvas id="bg"></canvas>
  <div class="grid"></div>

  <?php include 'hero.php'; ?>

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

      <p class="fs-4" style="color:#000;">
        <b>I’m a 16 y/o full-stack developer and from Sri Lanka</b>,
        I started coding at the age of 12 during the pandemic and enrolled in university the same year.
        I’m currently a second-year BSc (Hons) Software Engineering undergraduate at Birmingham City University
        while also studying in Grade 10th at school.
        I love turning ideas into real-world products.
        With experience contributing to award-winning projects and working as an intern and associate software engineer,
        I’ve built solutions across healthcare, e-commerce, and education.
        <span class="text-decoration-underline">I'm always learning, building, and pushing boundaries.</span>
      </p>

      <p class="fs-4" style="color:#000;">On the fun side — I'm an extrovert, a huge Marvel fan, a movie lover, gamer, musician and someone who enjoys connecting with people, whether it's through tech, music, or casual conversation.</p>


      <div class="row mt-4 g-4">
        <div class="col-md-6 col-lg-3">
          <div class="stat-card">
            <div class="stat-icon">
              <i class="bi bi-code-square"></i>
            </div>
            <h3 class="stat-number">15+</h3>
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
            <p class="stat-description">Coding since the pandemic. From hackathons to production apps, I've been around.</p>
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
  <div class="container-fluid section-dark" style="padding:100px 60px;">
    <h1 style="font-size:48px; font-weight:300; letter-spacing:2px; font-family:'Stack Sans Notch'; margin-top:-20px">
      MY EXPEREINCE SO FAR
    </h1>
    <p style="color:#ff6a2a; font-size:14px;">
      My professional milestones and growth
    </p>

    <div class="row mt-5">
      <div class="col-lg-8 offset-lg-4">


        <div class="mb-5">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div style="max-width:70%;">
              <div class="d-flex align-items-center gap-3 mb-2">
                <div>
                  <h5 class="mb-0">Hack Club, Sri Lanka</h5>
                  <p style="color:#ff6a2a; margin:0; font-size:14px;">Club Lead</p>
                </div>
              </div>
              <p style="color:#aaa; font-size:14px;">
                Running Sri Lanka’s first Hack Club, mentoring students nationwide, organizing workshops, hackathons, and collaborative coding projects to foster tech learning and innovation.
              </p>
            </div>
            <p style="color:#777; font-size:13px; white-space:nowrap;">Aug 2025 – Present</p>
          </div>
        </div>

        <div class="mb-5">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div style="max-width:70%;">
              <div class="d-flex align-items-center gap-3 mb-2">
                <div>
                  <h5 class="mb-0">"Ceylon Xzora" Dev Team</h5>
                  <p style="color:#ff6a2a; margin:0; font-size:14px;">Senior Developer and UI/UX designer</p>
                </div>
              </div>
              <p style="color:#aaa; font-size:14px;">
                Leading a team of developers from my university to take part in hackathons and develop digital solutions for clients and internal projects
              </p>
            </div>
            <p style="color:#777; font-size:13px; white-space:nowrap;">September 2023 – Present</p>
          </div>
        </div>


        <div class="mb-5">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div style="max-width:70%;">
              <div class="d-flex align-items-center gap-3 mb-2">

                <div>
                  <h5 class="mb-0">TECXA, London</h5>
                  <p style="color:#ff6a2a; margin:0; font-size:14px;">Associate Software Developer</p>
                </div>
              </div>
              <p style="color:#aaa; font-size:14px;">
                Developing and maintaining scalable applications using React, React Native, Node.js, Firebase, and MongoDB, while collaborating with teams through Jira, Bitbucket, and Confluence.
              </p>
            </div>
            <p style="color:#777; font-size:13px; white-space:nowrap;">Dec 2024 – Mar 2025</p>
          </div>
        </div>

        <div class="mb-5">
          <div class="d-flex justify-content-between align-items-start">
            <div style="max-width:70%;">
              <div class="d-flex align-items-center gap-3 mb-2">

                <div>
                  <h5 class="mb-0">TECXA, London</h5>
                  <p style="color:#ff6a2a; margin:0; font-size:14px;">Software Developer Intern</p>
                </div>
              </div>
              <p style="color:#aaa; font-size:14px; ">
                I began my software engineering journey at TECXA at the age of 14 as an intern. I served as a core developer for the “Lifeline” mobile application, which received a Merit Award at the NBQSA 2024 Competition. During my time at TECXA, I actively contributed to coding, debugging, testing, and documentation, while gaining hands-on experience with React.js, React Native, Node.js, Firebase, MongoDB, Bitbucket, Jira, and Confluence.
              </p>
            </div>
            <p style="color:#777; font-size:13px; white-space:nowrap;">Nov 2023 – Dec 2024</p>
          </div>
        </div>

      </div>
    </div>
  </div>


  <?php include 'featured-projects.php'; ?>

  <?php include 'achievements.php'; ?>


  <div class="container-fluid section-dark" style="padding:60px 60px 40px; border-top:1px solid rgba(255,255,255,0.1);">
    <div class="row">
      <div class="col-md-6">
        <h4 style="font-family:'Stack Sans Notch'; font-weight:300;">Let's Connect</h4>
        <p style="opacity:0.7; font-size:14px;">Feel free to reach out for collaborations or just a friendly chat.</p>
        <div style="display:flex; gap:15px; margin-top:20px;">
          <a href="#" style="color:#ff6a2a; font-size:1.5rem;"><i class="bi bi-github"></i></a>
          <a href="#" style="color:#ff6a2a; font-size:1.5rem;"><i class="bi bi-linkedin"></i></a>
          <a href="#" style="color:#ff6a2a; font-size:1.5rem;"><i class="bi bi-twitter-x"></i></a>
          <a href="#" style="color:#ff6a2a; font-size:1.5rem;"><i class="bi bi-envelope"></i></a>
        </div>
      </div>
      <div class="col-md-6 text-md-end mt-4 mt-md-0">
        <p style="opacity:0.5; font-size:13px;">© 2025 Vinudhi Wahalathanthri. All rights reserved.</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.min.js"></script>
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