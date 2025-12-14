<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="uikit.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Stack+Sans+Notch:wght@200..700&display=swap" rel="stylesheet">

    <style>

        body{
            font-family: 'Stack Sans Notch', sans-serif;
        }
        .project-item {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container-fluid section-light" style="padding:100px 60px; font-family:'Stack Sans Notch';">
        <div style="display: inline-flex; align-items: flex-start; position: relative;">
            <h1 style="font-size:48px; font-weight:300; margin:0;font-family: 'Stack Sans Notch';">FEATURED PROJECTS</h1>
            <img src="assets/images/spark-1.png"
                style="width:40px; height:auto; margin-left:8px; margin-top:-20px;"
                alt="Spark">
        </div>
        <p style="color:#ff6a2a; font-size:14px; margin-top:10px;">
            Projects I've built and contributed to throughout my developer journey ^_^
        </p>


        <div class="filter-badges mt-4">
            <button class="filter-badge active" data-filter="all">All</button>
            <button class="filter-badge" data-filter="web">Web</button>
            <button class="filter-badge" data-filter="mobile">Mobile</button>
            <button class="filter-badge" data-filter="fullstack">Full Stack</button>
            <button class="filter-badge" data-filter="frontend">Frontend</button>
            <button class="filter-badge" data-filter="desktop">Desktop</button>

        </div>

        <div class="row" style="margin-top:-50px;" id="projectsContainer">

            <div class="col-md-6 col-lg-4 project-item" data-category="mobile fullstack">
                <div class="project-card">
                    <img src="assets/images/projects/lifeline.png" class="project-img" />
                    <div class="project-body">
                        <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">Lifeline</h5>
                        <p style="font-size:14px; color:#666;">
                            A mental health platform with multiple apps (student, mentor, admin) that allows users to consult counselors based on personalized preferences and practice guided well-being exercises.
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">React native</span>
                            <span class="project-tag">Firebase</span>
                            <span class="project-tag">Typescript</span>
                            <span class="project-tag">Node.js</span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 project-item" data-category="mobile fullstack">

                <div class="project-card">
                    <a href="https://github.com/SinuraWahalathanthri/uni-link" target="_blank" class="project-image uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img src="assets/images/projects/unilink.jpeg" alt="Medicom E-Commerce Platform">

                        <div class="uk-transition-slide-bottom uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle">
                            <span style="color:#fff; font-weight:bold;">View Project</span>
                        </div>
                    </a>
                    <div class="project-body">
                        <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">Unilink</h5>
                        <p style="font-size:14px; color:#666;">
                            A university-focused communication platform that connects lecturers and students for events, consultations, announcements, and hackathons — all in one place.
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">React native</span>
                            <span class="project-tag">Firebase</span>
                            <span class="project-tag">Typescript</span>
                            <span class="project-tag">Node.js</span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 project-item" data-category="web frontend">
                <div class="project-card">
                    <img src="assets/images/projects/weatherly-1.png" class="project-img" />
                    <div class="project-body">
                      <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">Weatherly</h5>
                        <p style="font-size:14px; color:#666;">
                            A NASA data–powered weather application with analytics and visualizations, built using a custom machine learning model.
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">Typescript</span>
                            <span class="project-tag">Python</span>
                            <span class="project-tag">React.js</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 project-item" data-category="web fullstack">
                <div class="project-card">
                    <a href="https://github.com/VinudhiWahalathanthri/Medicom" target="_blank" class="project-image uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img src="assets/images/projects/medicon.png" alt="Medicom E-Commerce Platform">

                        <div class="uk-transition-slide-bottom uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle">
                            <span style="color:#fff; font-weight:bold;">View Project</span>
                        </div>
                    </a>
                    <div class="project-body">
                        <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">Medicom E-Commerce Platform</h5>
                        <p style="font-size:14px; color:#666;">
                            A fully functional e-commerce platform I built for a pharmacy as my viva project, covering product management, orders, and payments.
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">HTML/CSS/JS</span>
                            <span class="project-tag">MYSQL</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 project-item" data-category="desktop fullstack">
                <div class="project-card">
                    <img src="assets/images/projects/medicon-pos.png" class="project-img" />
                    <div class="project-body">
                       <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">Medicom POS Application</h5>
                        <p style="font-size:14px; color:#666;">
                            A desktop POS and inventory management system developed for my viva, designed to handle sales, stock, and daily operations for a pharmacy.
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">JAVA</span>
                            <span class="project-tag">NETBEANS</span>
                            <span class="project-tag">MYSQL</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 project-item" data-category="mobile fullstack">
                <div class="project-card">
                    <img src="assets/images/projects/mediplus.jpeg" class="project-img" />
                    <div class="project-body">
                        <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">MediPlus</h5>
                        <p style="font-size:14px; color:#666;">
                            Currently building an all-in-one e-channeling platform that lets people consult doctors online and book appointments for physical visits and home visits.
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">React native</span>
                            <span class="project-tag">Firebase</span>
                            <span class="project-tag">Typescript</span>
                            <span class="project-tag">Node.js</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <p style="color:#666; font-size:14px; margin-top: 100px;">
            Above are the projects that im most proud of. The rest are my university projects which are are not allowed to be published, so i won't be featurring them here 🥲.
        </p>

    </div>

    <script src="uikit.js"></script>
    <script src="uikit-min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const filterButtons = document.querySelectorAll(".filter-badge");
            const projects = document.querySelectorAll(".project-item");

            filterButtons.forEach(button => {
                button.addEventListener("click", () => {
                    filterButtons.forEach(btn => btn.classList.remove("active"));
                    button.classList.add("active");

                    const filter = button.dataset.filter;

                    projects.forEach(project => {
                        const categories = project.dataset.category;

                        if (filter === "all" || categories.includes(filter)) {
                            project.style.display = "block";
                        } else {
                            project.style.display = "none";
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>