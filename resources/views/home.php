\<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/9dc97e7feb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="\css\style.css">
    <title>MyPorto</title>

</head>
<body>
    <!-- Navbar -->
    <section class="header">
        <div id="header">
            <div class="container">
                <p class="logo">MyPortofolio</p>
                    <nav>
                        <ul class="navbar" id="sidemenu">
                            <li>
                                <a href="#header">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#about">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#portofolio">
                                    Experience
                                </a>
                            </li>
                            <li>
                                <a href="#contact">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="auth\login.blade.php">
                                    Akun
                                </a>
                            </li>
                            <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                        </ul>
                        <i class="fa-solid fa-bars" onclick="openmenu()"></i>
                    </nav>
                <div class="header-text">
                    <p>Youtuber</p>
                    <h1>Hi, I'm <span>Fauzi</span><br />From Indonesia</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Header -->
    <section class="about">
        <div id="about">
            <div class="container">
                <div class="row">
                    <div class="about-col-1">
                        <img src="img\Profile.jpg" />
                    </div>
                    <div class ="about-col-2">
                        <h1 class="sub-tittle">About Me</h1>
                        <p>
                            My name is Mohammad Fauzi Aziz, i'm Student from Bina Nusantara University in Malang, East Java, Indonesia. I have acquired the skills neccessary to build great and premium websites.
                        </p>

                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">
                                Skills
                            </p>
                            <p class="tab-links" onclick="opentab('experience')">
                                Experience
                            </p>
                        </div>

                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <li>
                                    <span>Youtuber</span><br />Content creator
                                </li>
                                <li>
                                    <span>Web Development</span><br />Designing App Interface
                                </li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li>
                                <span>2022 - Current</span><br />Programing
                                </li>
                                <li>
                                <span>2019 - 2022</span><br />Vidio Editor
                                </li>
                                <li>
                                <span>2017 - 2019</span><br />Animator 2D
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section class="portofolio">
        <div id="portofolio">
            <div class="container">
                <h1 class="sub-tittle">
                    My Experience
                </h1>
                <div class="experience-list">
                    <div>
                        <i class='bx bxl-wordpress'></i>
                        <h2>WordPress</h2>
                        <p>
                            I have experience using WordPress by managing campus organization websites on my campus
                        </p>
                        <a href="#">Learn more</a>
                    </div>
                    <div>
                        <i class='bx bxl-unity' ></i>
                        <h2>Unity 3D</h2>
                        <p>
                            I have worked on 2 Unity projects from my college assignments
                        </p>
                        <a href="#">Learn more</a>
                    </div>
                    <div>
                        <i class='bx bxl-figma' ></i>
                        <h2>Figma</h2>
                        <p>
                            I have experience creating UI/UX design in 2 of my college assignments
                        </p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact">
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="sub-tittle">Contact</h1>
                        <p><i class="fa-solid fa-paper-plane"></i>hinawari123@gmail.com</p>
                        <p><i class="fa-sharp fa-solid fa-phone"></i>082132378518</p>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/fauzi_aziz24/">
                                <i class='bx bxl-instagram-alt'></i>
                            </a>
                            <a href="https://www.linkedin.com/in/fauzi-aziz-257691268/">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCxz8QpJwatODlgVHjuUm1xQ">
                                <i class='bx bxl-youtube'></i>
                            </a>
                            <a href="https://github.com/FauziA24">
                                <i class='bx bxl-github'></i>
                            </a>
                        </div>
                        <a href="" download class="btn btn2">Download CV</a>
                    </div>
                    <div class="contact-right">
                        <form action="" method="post" class="php-email-form">
                            <input class="form-control" id="nam" name="name" type="text" required placeholder="your name">
                            <input class="form-control" id="Email" name="Email" type="email" required placeholder="email">
                            <div class="form-group mt-3">
                                <input class="form-control" id="subject" name="subject" type="text" required placeholder="subject">
                            </div>
                            <textarea class="form-control" id="message" name="message" type="text" required placeholder="message"></textarea>
                            <button type="submit" class="btn btn2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>
                    Copyright @ Kevin. Made With <i class="fa-solid fa-heart"></i> by Fauzi
                </p>
            </div>
        </div>
    </section>

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }

            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>

    <script>
        var sidemeu = document.getElementById("sidemenu");

        function openmenu() {
            sidemenu.style.right = "0";
        }

        function closemenu() {
            sidemenu.style.right = "-200px";
        }
    </script>
</body>
</html>
