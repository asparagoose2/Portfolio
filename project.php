<?php
    include "db.php";
    $query = "select * from portfolio_ofirduchovne where project_id=".$_GET["projectId"];
    $query = mysqli_real_escape_string($connection, $query);
    $result = mysqli_query($connection,$query);
    $project = mysqli_fetch_array($result,MYSQLI_BOTH);
    if (!$project) {
        die("DB query faild");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Ofir Duchovne</title>
</head>

<body class="bg-dark">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ofir Duchovne</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cv.html">Resume</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page">
        <div class="row ">
            <div class="text-white">
                <br>
                <h1 class="title">
                    <?php echo $project["name"]; ?>
                </h1>
                <br>
                <br>
                <?php echo '<img class="img-thumbnail projectImage" src="images/'.$project["thumbnail"].'" alt="">';?>
                <br>
                <br>
                <h3 class="title">
                    Description
                </h3>
                <br>
                <br>
                <p><?php echo $project["description"] ?></p>
                <br>
                <br>
                <h4>
                    <?php echo 'Written in: &nbsp; '.$project["language"] ?>
                </h4>
            </div>

        </div>
        <footer>
            <div class="row g-3 ">
                <div class="col-md-4 col-9">
                    <section id="contactInfo" class="text-white">
                        <a href="mailto:ofirduchovne@gmail.com">ofirduchovne@gmail.com</a>
                        <br>
                        <span>+972-54-6612046</span>
                        <br>
                    </section>
                </div>
                <div class="col-md-4 col-3 text-center">
                    <secton class="socialMediaLinks">
                        <a href="https://www.linkedin.com/in/ofir-duchovne/" class="fa fa-linkedin"
                            style="display: inline-block; text-align: center;"></a>
                        <a href="https://www.linkedin.com/in/ofir-duchovne/" class="fa fa-github"
                            style="display: inline-block; text-align: center;"></a>
                    </secton>
                </div>
                <div class="col-md-4 col-12 text-end">
                    <a href=" https://www.shenkar.ac.il/he/departments/engineering-software-department">תואר ראשון
                        בהנדסת
                        תוכנה
                        בשנקר</a>
                </div>
            </div>
        </footer>
</body>

</html>