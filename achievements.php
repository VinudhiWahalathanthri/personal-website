<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Stack+Sans+Notch:wght@200..700&display=swap" rel="stylesheet">
  <style>
.grid-bg {
    position: relative;
    background-color: #fff;
    background-image:
        linear-gradient(rgba(0,0,0,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0,0,0,0.05) 1px, transparent 1px);
    background-size: 40px 40px; 
}
</style>

</head>

<body>
    <div class="container-fluid section-light grid-bg" style="padding:100px 60px; font-family:'Stack Sans Notch'; margin-top:-100px; background-color:#fff;">
        <div style="display: inline-flex; align-items: flex-start; position: relative;">
            <h1 style="font-size:48px; font-weight:300; margin:0; font-family: 'Stack Sans Notch';">ACHIEVEMENTS SO FAR</h1>
            <img src="assets/images/spark-1.png"
                style="width:40px; height:auto; margin-left:8px; margin-top:-20px;"
                alt="Spark">
        </div>
        <p style="color:#ff6a2a; font-size:14px;">
            My achievements in my software engineering journey
        </p>

        <div class="row mt-5">
            <div class="col-md-6 col-lg-3">
                <div class="achievement-card">
                    <img src="assets/images/awards/nasa 3.png" class="achievement-img" />
                    <div class="achievement-body">
                        <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">Nasa Space Apps Challenge - Global Finalist</h5>
                        <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">Associated with "Ceylon Xzora"</p>
                        <p style="font-size:14px; color:#666;">Recognized as part of the first Sri Lankan team to reach the global finalists stage of the NASA Space Apps Challenge.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="achievement-card">
                    <img src="assets/images/awards/nasa 1.jpg" class="achievement-img" />
                    <div class="achievement-body">
                     <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">Nasa Space Apps Challenge - Global Nomineee</h5>
                        <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">Associated with "Ceylon Xzora"</p>
                        <p style="font-size:14px; color:#666;">
                            Developed “Weatherly,” a NASA data–powered weather application using a custom-built machine learning model.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="achievement-card">
                    <img src="assets/images/awards/hacktivate.jpg" class="achievement-img" />
                    <div class="achievement-body">
                       <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">Hactivate Champions, by NSBM</h5>
                        <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">Associated with Java Institute</p>
                        <p style="font-size:14px; color:#666;">
                            Designed and developed a platform to improve communication and collaboration between students and lecturers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="achievement-card">
                    <img src="assets/images/awards/nbqsa.jpg" class="achievement-img" />
                    <div class="achievement-body">
                       <h5 class="fw-bold" style="font-family: 'Stack Sans Notch';">Health and Well being sector Merit award Winners @NBQSA</h5>
                        <p style="color:#ff6a2a; font-size:13px; margin-bottom:10px;">Asscoaited with Tecxa</p>
                        <p style="font-size:14px; color:#666;">
                            Built a mental health and well-being platform enabling users to consult counselors based on personalized preferences.
                        </p>

                    </div>
                </div>
            </div>


        </div>
    </div>
</body>

</html>