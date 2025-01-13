<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        HumaStay
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        .header {
            position: relative;
            text-align: center;
            color: white;
        }

        .header img {
            width: 100%;
            height: auto;
        }

        .header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.7);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .header .overlay h1 {
            color: #005580;
            font-size: 3em;
            margin: 0;
        }

        .header .overlay p {
            color: #333;
            font-size: 1.2em;
            margin: 20px 0 0 0;
            max-width: 600px;
            text-align: center;
        }

        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
        }

        .navbar a {
            color: #005580;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1em;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo span {
            color: #005580;
            font-size: 1.5em;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .header .overlay h1 {
                font-size: 2em;
            }

            .header .overlay p {
                font-size: 1em;
                padding: 0 20px;
            }

            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .navbar a {
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <img alt="A scenic view of a resort with wooden walkways over water and traditional-style buildings"
            src="https://placehold.co/1280x720" />
        <div class="overlay">
            <div class="logo">
                <img alt="HumaStay logo" src="https://placehold.co/50x50?text=Logo" />
                <span>
                    HumaStay
                </span>
            </div>
            <div class="navbar">
                <a href="#">
                    Home
                </a>
                <a href="#">
                    About
                </a>
                <a href="#">
                    Room
                </a>
                <a href="#">
                    Facility
                </a>
                <a href="#">
                    Contact
                </a>
            </div>
            <h1>
                Find your perfect place to stay
            </h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque
                volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam.
            </p>
        </div>
    </div>
</body>

</html>