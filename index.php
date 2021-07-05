<?php
    include "db.php";

    $query = "select * from portfolio_ofirduchovne";
    $query = mysqli_real_escape_string($connection, $query);    
    $result = mysqli_query($connection,$query);

    if(!mysqli_num_rows($result) > 0) {
        die("DB query faild");
    }
    
    // $query = "select * from portfolio_ofirduchovne";
    // $result = mysqli_query($connection,$query);
    // $projects = mysqli_fetch_all($result,MYSQLI_BOTH);
    // if (!$projects) {
    //     die("DB query faild");
    // }
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
                            <a class="nav-link active" aria-current="page" href="index.php">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
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
            <div class=" col-xs-12 col-sm-12 ">
                <div id="col_inner_877489360620b3037fc9b064f63a7372" class="fw-col-inner"
                    data-paddings="15px 0px 15px 0px">

                    <div>
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-md-5 col-lg-5">
                                <div class="photo">
                                    <div class="profilePic"></div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-7 col-lg-7 ">
                                <h4 class="text-white-50">Software Engineer Student</h4>
                                <h1 class="text-white">Ofir Duchovne</h1>
                                <p class="text-white-50">Hello, my name is Ofir, 25 years old software engineer student
                                    at Shenkar College of Engineering and Design. I am starting my 3<sup>rd</sup> year
                                    and will graduate at 2023.
                                </p>
                                <div class="home-buttons">
                                    <a href="Ofir Duchovne CV.pdf" class="btn btn-primary">Download CV</a>
                                    <a href="#contactInfo" class="btn btn-secondary">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-white">
                <br>
                <h3 class="title">
                    My Skills
                </h3>
                <br>
                <br>
                <div>
                    <div class="row g-4" style="margin:auto">
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-lg-1 col-2" id="skill1">

                                </div>
                                <div class="col skillDesc">
                                    <h5>Teamwork</h5>
                                    <p>Co-operating with others and <br>understanding how i can contribute to my team
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-lg-1 col-2" id="skill2">

                                </div>
                                <div class="col skillDesc">
                                    <h5>Problem-solving</h5>
                                    <p>Understanding what's causing issues in a given situation, <br> them develop a
                                        solution</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-lg-1 col-2" id="skill3">

                                </div>
                                <div class="col skillDesc">
                                    <h5>Initiative</h5>
                                    <p>Taking responsability for my work <br> and don't wait ti be told what to do</br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-lg-1 col-2" id="skill4">

                                </div>
                                <div class="col skillDesc">
                                    <h5>Communication</h5>
                                    <p>Good at listening or presenting to others</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h3 class="title">
                    Projects
                </h3>
                <section id="projects">
                <?php
                    while($project = mysqli_fetch_assoc($result))
                    {
                        echo '<a href="project.php?projectId='.$project["project_id"].'"><section class="project"><img src="images/'.$project["thumbnail"].'" alt=""><h4>'.
                        $project["name"].'</h4><h6>'.$project["language"].'</h6></section>';
                    }
                    // foreach($projects as &$project) {
                    //     echo '<a href="project.php?projectId='.$project["project_id"].'"><section class="project"><img src="images/'.$project["thumbnail"].'" alt=""><h4>'.
                    //     $project["name"].'</h4><h6>'.$project["language"].'</h6></section>';
                    // }
                ?>
                    <div class="clear"></div>
                </section>
                <br>
                <br>
                <h3 class="title">
                    Technologies
                </h3>
                <br>
                <br>
                <div class="container">
                    <div class="techIconContainer">
                        <img src="images/C_Programming_Language.svg.png" class="techIcon">
                        <img src="images/JavaScript.png" class="techIcon">
                        <img src="images/HTML5_cropped.png" class="techIcon">
                        <img src="images/CSS3_cropped.png" class="techIcon">
                        <img src="images/PHP-logo.svg.png" class="techIcon">
                        <img src="images/c.svg" class="techIcon">
                        <img src="images/MySQL-Logo.wine.png" class="techIcon">
                    </div>
                </div>
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
                        <a href="https://github.com/asparagoose2" class="fa fa-github"
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