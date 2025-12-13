<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vynu Portfolio</title>

    <style>
        body {
            font-family: 'Urbanist', sans-serif;
            background-color: #FFF5EB;
            overflow-x: hidden;
        }

        /* Navigation Bar */
        .navbar-custom {
            background-color: #2B2B2B;
            border-radius: 50px;
            padding: 8px 20px;
            margin: 20px auto;
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
            background-color: #FF8C42;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
        }

        .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 8px 20px !important;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: rgba(255, 140, 66, 0.2);
        }

        .nav-link.active {
            background-color: #FF8C42 !important;
            color: white !important;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span class="brand-icon">JC</span>
                JCREA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="background-color: #FF8C42;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>