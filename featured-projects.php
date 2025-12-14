<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid section-light" style="padding:100px 60px; font-family:'Stack Sans Notch';">
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

</body>

</html>