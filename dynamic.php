<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynamic PHP | 220359334</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

            font-family: Arial, sans-serif;

            color: #74525b;

            background-color: #fff7f8;

            position: relative;

            overflow: hidden;
        }


        /* Faint technology background */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            opacity: 0.18;

            background-image:

                linear-gradient(
                    rgba(185,120,137,0.14) 1px,
                    transparent 1px
                ),

                linear-gradient(
                    90deg,
                    rgba(185,120,137,0.14) 1px,
                    transparent 1px
                ),

                radial-gradient(
                    circle at 15% 20%,
                    rgba(185,120,137,0.5) 0 4px,
                    transparent 5px
                ),

                radial-gradient(
                    circle at 80% 25%,
                    rgba(185,120,137,0.5) 0 4px,
                    transparent 5px
                ),

                radial-gradient(
                    circle at 25% 80%,
                    rgba(185,120,137,0.5) 0 4px,
                    transparent 5px
                ),

                radial-gradient(
                    circle at 85% 75%,
                    rgba(185,120,137,0.5) 0 4px,
                    transparent 5px
                );

            background-size:
                60px 60px,
                60px 60px,
                350px 350px,
                400px 400px,
                430px 430px,
                450px 450px;
        }


        .card {

            width: 90%;

            max-width: 650px;

            padding: 60px;

            text-align: center;

            border-radius: 30px;

            border: 2px solid #e5a9b8;

            background:
                rgba(255,250,251,0.95);

            box-shadow:
                0 20px 50px
                rgba(177,110,130,0.15);

            position: relative;

            z-index: 1;
        }

        .code {

            width: 75px;

            height: 75px;

            margin:
                0 auto 25px;

            display: flex;

            justify-content: center;

            align-items: center;

            border-radius: 50%;

            background: #efc1cc;

            font-family: monospace;

            font-size: 22px;

            color: white;
        }

        h1 {

            font-family: Georgia, serif;

            font-weight: normal;

            font-size: 42px;

            color: #b97889;

            margin-bottom: 15px;
        }

        h2 {

            font-family: Georgia, serif;

            font-weight: normal;

            color: #985e6d;

            margin: 25px 0;
        }

        p {

            margin-bottom: 20px;
        }

        a {

            display: inline-block;

            padding: 12px 28px;

            margin-top: 20px;

            border-radius: 30px;

            background: #d697a6;

            color: white;

            text-decoration: none;
        }

        a:hover {

            background: #c68092;
        }

    </style>

</head>


<body>

<div class="card">

    <div class="code">
        PHP
    </div>

    <h1>
        Dynamic PHP Page
    </h1>

    <p>
        This page is dynamically processed
        by the PHP interpreter on the Apache server.
    </p>


    <?php

    echo "<h2>The time is " . date('h:i:sa') . "</h2>";

    ?>


    <p>
        Refresh the page and you should notice
        that the displayed time changes.
    </p>


    <a href="220359334.html">
        Back to Portfolio
    </a>

</div>

</body>

</html>