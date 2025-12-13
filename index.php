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
html, body {
  margin: 0;
  height: 100%;
  background: #050510;
  color: white;
  font-family: 'Manrope', sans-serif;
  overflow-x: hidden;
  scroll-behavior: smooth;
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
    linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
  background-size: 120px 120px;
  z-index: 1;
}

</style>
</head>

<body>

<canvas id="bg"></canvas>
<div class="grid"></div>

<div class="social-icons">
  <a href="#" aria-label="GitHub"><i class="bi bi-github"></i></a>
  <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
  <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
</div>

<div class="container-fluid">
  <div style="padding:80px 60px;">
   <h1 style="font-size:160px; font-weight:300; letter-spacing:2px; font-family:'Stack Sans Notch';">A SOFTWARE<br>ENGINEER</h1>
    <p style="font-size:12px;opacity:0.7;max-width:520px;">
      WITH OVER 4 YEARS OF EXPERIENCE AND INVOLVEMENT IN VARIOUS PROJECTS
    </p>
  </div>
</div>

<!-- About Me Section -->
<div class="container-fluid section-dark" style="padding:80px 60px;">
  <div class="row">
    <div class="col-lg-10 offset-lg-1">
      <div class="profile-wrapper">
        <div class="image-wrapper">
          <div class="profile" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; font-size: 48px; font-weight: bold; color: white;">VW</div>
        </div>
        <div>
          <h1 class="fw-bold mb-1" style="font-family:'Stack Sans Notch';">Vinudhi Wahalathanthri</h1>
          <h4 style="color:#ff6a2a;">Frontend Developer</h4>
        </div>
      </div>

      <p style="font-size:16px; line-height:1.8; max-width:800px; opacity:0.9;">
        I'm a passionate software engineer with over 4 years of experience crafting elegant solutions to complex problems. 
        My journey in tech has been driven by curiosity and a commitment to continuous learning. I specialize in full-stack 
        development with expertise in modern frameworks like React, Next.js, and Laravel. I thrive in collaborative environments 
        where innovation meets practical application, and I'm always excited to take on new challenges that push the boundaries 
        of what's possible with code.
      </p>
    </div>
  </div>
</div>

<!-- Journey Section -->
<div class="container-fluid section-dark" style="padding:80px 60px;">
  <h1 style="font-size:48px; font-weight:300; letter-spacing:2px; font-family:'Stack Sans Notch';">
    MY JOURNEY SO FAR
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
              <div class="company-logo" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px; color: #ff6a2a;">TECXA</div>
              <div>
                <h5 class="mb-0">Tecxa, London</h5>
                <p style="color:#ff6a2a; margin:0; font-size:14px;">Associate Software Engineer</p>
              </div>
            </div>
            <p style="color:#aaa;font-size:14px; margin-left:75px;">
              Developing and maintaining scalable applications using Laravel, Java,
              Node.js, React and Next.js. Leading frontend architecture decisions and 
              mentoring junior developers in best practices.
            </p>
          </div>
          <p style="color:#777;font-size:13px; white-space: nowrap;">2024 Apr – Present</p>
        </div>
      </div>

      <div>
        <div class="d-flex justify-content-between align-items-start">
          <div style="max-width:70%;">
            <div class="d-flex align-items-center gap-3 mb-2">
              <div class="company-logo" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px; color: #667eea;">TECXA</div>
              <div>
                <h5 class="mb-0">Tecxa (Pvt) Ltd</h5>
                <p style="color:#ff6a2a; margin:0; font-size:14px;">R&D Intern</p>
              </div>
            </div>
            <p style="color:#aaa;font-size:14px; margin-left:75px;">
              Full-stack development experience contributing to real-world systems
              in collaborative environments. Gained hands-on experience with modern 
              tech stacks and agile methodologies.
            </p>
          </div>
          <p style="color:#777;font-size:13px; white-space: nowrap;">2023 Nov – 2024 Apr</p>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Featured Projects Section -->
<div class="container-fluid section-light" style="padding:80px 60px; font-family:'Stack Sans Notch';">
  <h1 style="font-size:48px; font-weight:300;">FEATURED PROJECTS</h1>
  <p style="color:#ff6a2a; font-size:14px;">
    A curated collection showcasing my projects
  </p>

  <div class="filter-badges mt-4">
    <button class="filter-badge active" data-filter="all">All</button>
    <button class="filter-badge" data-filter="web">Web</button>
    <button class="filter-badge" data-filter="mobile">Mobile</button>
    <button class="filter-badge" data-filter="fullstack">Full Stack</button>
    <button class="filter-badge" data-filter="frontend">Frontend</button>
  </div>

  <div class="row mt-4" id="projectsContainer">
    <div class="col-md-6 col-lg-4 project-item" data-category="web fullstack">
      <div class="project-card">
        <div class="project-img"></div>
        <div class="project-body">
          <h5 class="fw-bold">E-Commerce Platform</h5>
          <p style="font-size:14px; color:#666;">A fully functional e-commerce solution with real-time inventory management, payment integration, and admin dashboard.</p>
          <div class="project-tags">
            <span class="project-tag">React</span>
            <span class="project-tag">Node.js</span>
            <span class="project-tag">MongoDB</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 project-item" data-category="mobile">
      <div class="project-card">
        <div class="project-img" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
        <div class="project-body">
          <h5 class="fw-bold">Fitness Tracker App</h5>
          <p style="font-size:14px; color:#666;">Cross-platform mobile application for tracking workouts, nutrition, and health metrics with social features.</p>
          <div class="project-tags">
            <span class="project-tag">React Native</span>
            <span class="project-tag">Firebase</span>
            <span class="project-tag">Redux</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 project-item" data-category="web frontend">
      <div class="project-card">
        <div class="project-img" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);"></div>
        <div class="project-body">
          <h5 class="fw-bold">Portfolio Dashboard</h5>
          <p style="font-size:14px; color:#666;">Modern analytics dashboard with interactive charts, real-time data visualization, and responsive design.</p>
          <div class="project-tags">
            <span class="project-tag">Next.js</span>
            <span class="project-tag">TypeScript</span>
            <span class="project-tag">Chart.js</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 project-item" data-category="fullstack web">
      <div class="project-card">
        <div class="project-img" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);"></div>
        <div class="project-body">
          <h5 class="fw-bold">Task Management System</h5>
          <p style="font-size:14px; color:#666;">Collaborative project management tool with real-time updates, team collaboration, and advanced filtering.</p>
          <div class="project-tags">
            <span class="project-tag">Laravel</span>
            <span class="project-tag">Vue.js</span>
            <span class="project-tag">MySQL</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 project-item" data-category="mobile">
      <div class="project-card">
        <div class="project-img" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);"></div>
        <div class="project-body">
          <h5 class="fw-bold">Recipe Sharing App</h5>
          <p style="font-size:14px; color:#666;">Social platform for sharing and discovering recipes with AI-powered recommendations and meal planning.</p>
          <div class="project-tags">
            <span class="project-tag">Flutter</span>
            <span class="project-tag">Dart</span>
            <span class="project-tag">API</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 project-item" data-category="web frontend">
      <div class="project-card">
        <div class="project-img" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);"></div>
        <div class="project-body">
          <h5 class="fw-bold">Weather Forecast Widget</h5>
          <p style="font-size:14px; color:#666;">Beautiful weather application with 7-day forecasts, location-based predictions, and animated backgrounds.</p>
          <div class="project-tags">
            <span class="project-tag">React</span>
            <span class="project-tag">API Integration</span>
            <span class="project-tag">CSS3</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Achievements Section -->
<div class="container-fluid section-light" style="padding:80px 60px; font-family:'Stack Sans Notch';">
  <h1 style="font-size:48px; font-weight:300;">ACHIEVEMENTS SO FAR</h1>
  <p style="color:#ff6a2a; font-size:14px;">
    My achievements in my software engineering journey
  </p>

  <div class="row mt-5">
    <div class="col-md-6 col-lg-4">
      <div class="achievement-card">
        <div class="achievement-img"></div>
        <div class="achievement-body">
          <h5 class="fw-bold">Best Innovation Award 2024</h5>
          <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">National Tech Summit</p>
          <p style="font-size:14px; color:#666;">Received recognition for developing an AI-powered solution that optimized supply chain operations, reducing costs by 30%.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="achievement-card">
        <div class="achievement-img" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
        <div class="achievement-body">
          <h5 class="fw-bold">Hackathon Winner 2023</h5>
          <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">Global Code Challenge</p>
          <p style="font-size:14px; color:#666;">First place winner among 500+ participants for creating an innovative healthcare management platform in 48 hours.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="achievement-card">
        <div class="achievement-img" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
        <div class="achievement-body">
          <h5 class="fw-bold">Outstanding Performance Award</h5>
          <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">Tecxa Annual Awards</p>
          <p style="font-size:14px; color:#666;">Recognized for exceptional contribution to key projects and consistent delivery of high-quality solutions.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="achievement-card">
        <div class="achievement-img" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);"></div>
        <div class="achievement-body">
          <h5 class="fw-bold">Open Source Contributor Badge</h5>
          <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">GitHub Recognition</p>
          <p style="font-size:14px; color:#666;">Active contributor to major open-source projects with 100+ merged pull requests and community engagement.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="achievement-card">
        <div class="achievement-img" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);"></div>
        <div class="achievement-body">
          <h5 class="fw-bold">Excellence in Web Development</h5>
          <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">Developer Awards 2023</p>
          <p style="font-size:14px; color:#666;">Awarded for creating an exceptional user experience in a complex enterprise application.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="achievement-card">
        <div class="achievement-img" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);"></div>
        <div class="achievement-body">
          <h5 class="fw-bold">Certified Cloud Architect</h5>
          <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">AWS Certification</p>
          <p style="font-size:14px; color:#666;">Achieved professional certification demonstrating expertise in cloud infrastructure and architecture design.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Hobbies Section -->
<div class="container-fluid section-dark" style="padding:80px 60px; font-family:'Stack Sans Notch';">
  <h1 style="font-size:48px; font-weight:300;">OTHER HOBBIES</h1>
  <p style="color:#ff6a2a; font-size:14px;">
    My hobbies and interests in life beyond coding and development
  </p>

  <div class="row mt-5">
    <div class="col-md-6 col-lg-3">
      <div class="hobby-card">
        <div class="hobby-icon"><i class="bi bi-camera"></i></div>
        <h5 class="fw-bold">Photography</h5>
        <p style="font-size:14px; opacity:0.8;">Capturing moments and exploring visual storytelling through the lens.</p>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="hobby-card">
        <div class="hobby-icon"><i class="bi bi-book"></i></div>
        <h5 class="fw-bold">Reading</h5>
        <p style="font-size:14px; opacity:0.8;">Diving into tech books, sci-fi novels, and philosophy.</p>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="hobby-card">
        <div class="hobby-icon"><i class="bi bi-music-note-beamed"></i></div>
        <h5 class="fw-bold">Music Production</h5>
        <p style="font-size:14px; opacity:0.8;">Creating electronic music and experimenting with sound design.</p>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="hobby-card">
        <div class="hobby-icon"><i class="bi bi-bicycle"></i></div>
        <h5 class="fw-bold">Cycling</h5>
        <p style="font-size:14px; opacity:0.8;">Exploring new trails and staying active with long rides.</p>
      </div>
    </div>
  </div>
</div>

<!-- Blog Section -->
<div class="container-fluid section-dark" style="padding:80px 60px; font-family:'Stack Sans Notch';">
  <h1 style="font-size:48px; font-weight:300;">BLOG</h1>
  <p style="color:#ff6a2a; font-size:14px;">
    Thoughts, tutorials, and insights from my journey
  </p>

  <div class="row mt-5">
    <div class="col-md-6 col-lg-4">
      <div class="blog-card">
        <div class="blog-img"></div>
        <div class="blog-body">
          <p class="blog-date">December 10, 2025</p>
          <h5 class="fw-bold">Building Scalable React Applications</h5>
          <p style="font-size:14px; opacity:0.8;">Best practices and architectural patterns for creating maintainable React applications at scale...</p>
          <a href="#" style="color:#ff6a2a; text-decoration:none; font-weight:600; font-size:14px;">Read More →</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="blog-card">
        <div class="blog-img" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
        <div class="blog-body">
          <p class="blog-date">November 28, 2025</p>
          <h5 class="fw-bold">My Journey into Full Stack Development</h5>
          <p style="font-size:14px; opacity:0.8;">A personal story about transitioning from frontend to full stack development and lessons learned...</p>
          <a href="#" style="color:#ff6a2a; text-decoration:none; font-weight:600; font-size:14px;">Read More →</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="blog-card">
        <div class="blog-img" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);"></div>
        <div class="blog-body">
          <p class="blog-date">November 15, 2025</p>
          <h5 class="fw-bold">Understanding Modern JavaScript</h5>
          <p style="font-size:14px; opacity:0.8;">A deep dive into ES6+ features and how they're transforming the way we write JavaScript code...</p>
          <a href="#" style="color:#ff6a2a; text-decoration:none; font-weight:600; font-size:14px;">Read More →</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
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
// Three.js Background
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('bg'), alpha: true });

renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize(window.innerWidth, window.innerHeight);
camera.position.setZ(30);

const geometry = new THREE.TorusGeometry(10, 3, 16, 100);
const material = new THREE.MeshStandardMaterial({ color: 0xff6a2a, wireframe: true });
const torus = new THREE.Mesh(geometry, material);
scene.add(torus);

const pointLight = new THREE.PointLight(0xffffff);
pointLight.position.set(20, 20, 20);
const ambientLight = new THREE.Amb