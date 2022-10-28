<?php
if (isset($_POST["send"])) {

$message = "This message was sent using the contact page on portfolio.fr.
Nom : " . $_POST["name"] ."
Email : " . $_POST["email"] ."
Message : " . $_POST["message"];
$retour = mail("carmenmiano@hotmail.fr", $_POST["subject"], $message, "From:contact@portfolio.fr\r\nReply-to:" . $_POST["email"]);

if ($retour){
    echo "<center>Votre message a bien été envoyé.</center>";

}else {
    echo "<center>Votre message n'a pas pu être envoyé.</center>";
}
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="main-content">
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/hero.png" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Hi ! I'm <span>Carmen.</span>
                    Aspiring video game producer.
                </h1>
                <p>
                    I'm a student in Marketing and Video Game Production at Gaming Campus Lyon.
                    Naturally curious and passioned, I want to become the key element to change a project's workflow! blblkblk
                </p>
                <div class="btn-con">
                    <a href="https://media-exp1.licdn.com/dms/document/C4E2DAQHV_CucfmG9Ag/profile-treasury-document-pdf-analyzed/0/1642790227234?e=1666828800&v=beta&t=HP9JC9mwyYJIMWgbABJd6TrtDRDPD6WYTwcmTGF3R6E" target="_blank" class="main-btn">
                        <span class="btn-text">Download my CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Information About me</h4>
                    <p>
                        I grew up in Lyon, a multicultural city, where I had the chance to
                          <br /> <br /> La musica
                        delectus dolore fugiat exercitationem a, 
                        ipsum quidem quo enim natus accusamus labore dolores nam. Unde.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Harum non necessitatibus deleniti eum soluta.
                    </p>
                    <div class="btn-con">
                        <a href="https://media-exp1.licdn.com/dms/document/C4E2DAQHV_CucfmG9Ag/profile-treasury-document-pdf-analyzed/0/1642790227234?e=1666828800&v=beta&t=HP9JC9mwyYJIMWgbABJd6TrtDRDPD6WYTwcmTGF3R6E" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">30+</p>
                            <p class="small-text">Projects <br /> Completed</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">2</p>
                            <p class="small-text">Years of <br /> experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">3</p>
                            <p class="small-text">Spoken <br /> languages</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">4</p>
                            <p class="small-text">Years of<br /> higher studies</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">photoshop</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="photoshop"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">illustrator</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="illustrator"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">canva</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="canva"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Marketing</p>
                        <div class="progress-con">
                            <p class="prog-text">65%</p>
                            <div class="progress">
                                <span class="marketing"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">50%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Artistic mind</p>
                        <div class="progress-con">
                            <p class="prog-text">100%</p>
                            <div class="progress">
                                <span class="mind"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">My Timeline</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - present</p>
                    <h5>Marketing & Game Production Degree<span> - Gaming Business School</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - present</p>
                    <h5>Event manager<span> - Gaming Campus student council</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - present</p>
                    <h5>Restaurant Hostess<span> - Big Mamma's Carmelo</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022</p>
                    <h5>Communications & Sales Assistant<span> - Les Belles Surprises</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2021 - 2022</p>
                    <h5>Communications Manager<span> - UDL Esports</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2018 - 2021</p>
                    <h5>Applied Korean & English Degree<span> - University Jean Moulin Lyon 3</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
            </div>
            <p class="port-text">
                Here is some of the work that I've done in various domains of expertise.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port1.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port4.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port5.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port7.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/port6.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                How video game communication has influenced all types of communications
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Learning Photoshop is veary easy, why not try?
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog2.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Esports is becoming the next entertainment phenomenon
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog3.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                How women in the video industry are killing it!
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/port1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Basic vocabulary of the video game industry and what you should know
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/port3.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                The evolution of UX and UI in games through time
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact me here</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            In, laborum numquam? Quam excepturi perspiciatis quas quasi.
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                    : Lyon, France
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: cmianowski@mail.com</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education</span>
                                </div>
                                <p>
                                    <span>: University Jean Moulin Lyon 3</span><br>
                                    <span>& Gaming Campus Lyon</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Mobile Number</span>
                                </div>
                                <p>
                                    <span>: 0769252854</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Languages</span>
                                </div>
                                <p>
                                    <span>: French, English, Korean</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="www.facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/ReveamTV" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://github.com/Reveam" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form action="" method="post" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" required placeholder="YOUR NAME" name=name>
                                <input type="email" required placeholder="YOUR EMAIL" name=email>
                            </div>
                            <div class="input-control">
                                <input type="text" required placeholder="ENTER SUBJECT" name=subject>
                            </div>
                            <div class="input-control">
                                <textarea id="" cols="15" rows="8" placeholder="Message Here..." name=message></textarea>
                            </div>
                            <div class="input-control">
                                <input type="submit" name="send" value="Send Message">
                            </div>
                            <div class="submit-btn">
                                <a href="https://media-exp1.licdn.com/dms/document/C4E2DAQHV_CucfmG9Ag/profile-treasury-document-pdf-analyzed/0/1642790227234?e=1666828800&v=beta&t=HP9JC9mwyYJIMWgbABJd6TrtDRDPD6WYTwcmTGF3R6E" class="main-btn">
                                    <span class="btn-text">Download CV</span>
                                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
</body>
</html>