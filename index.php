<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio Damian Pietrzak</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b50a0ed724.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/main.js" defer></script>    
</head>


<body>
    <header class="header">
        <a href="" class="Logo">Damian</a>  

        <i class="fa-solid fa-bars menu-icon"></i>

        <nav class="navBar">
            <a href="#home">Home</a>
            <a href="#skills">Skills</a>
            <a href="#education">Education</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    
    <section class="home" id="home">
        <div class="home-img">
            <img src="img/foto.jpg" alt="">
        </div>
        <div class="home-content">
            <h1>Hello, I am <Span>Damian Pietrzak</Span></h1>
            <h3 class="typing-text">I'm a <span id="dynamic-text"></span></h3>
            <p>And I am still a beginner in this field.
                I am very eager to learn more from more experienced developers and my pears and I just want to get better.        
            </p>
            <div class="social-icon">
                <a href="https://www.linkedin.com/in/damian-pietrzak-4949a42b3/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/pieter9182" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="mailto:damianpietrzak1999@gmail.com"><i class="fa-regular fa-envelope"></i></a>
            </div>

            <a href="#contact" class="btn">Message me</a>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="heading">Skills</h2>
        <div class="container">
            <div class="row" id="skillsContainer">
                <div class="bar">
                    <div class="info">
                        <img src="img/html.png"/>
                        <span>HTML</span>
                    </div>
                </div>
                <div class="bar">
                    <div class="info">
                        <img src="img/css.svg"/>
                        <span>CSS</span>
                    </div>
                </div>
                <div class="bar">
                    <div class="info">
                        <img src="img/github.svg"/>
                        <span>Github</span>
                    </div>
                </div>
                <div class="bar">
                    <div class="info">
                        <img src="img/javascript.png"/>
                        <span>Javascript</span>
                    </div>
                </div>
                <div class="bar">
                    <div class="info">
                        <img src="img/react.png"/>
                        <span>React</span>
                    </div>
                </div>
                <div class="bar">
                    <div class="info">
                        <img src="img/sass.png"/>
                        <span>Sass</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="education" id="education">
        <h2 class="heading">My <span>Education</span></h2>
        <div class="timeline">
            <div class="container right">
                <div class="content">
                    <div class="tag">
                        <h2>Media college Amsterdam year 1</h2>
                    </div>
                    <div class="decs">
                        <p>I started learning HTML, CSS, Python, and GitHub.</p>
                    </div>
                </div>
            </div>
            <div class="container left">
                <div class="content">
                    <div class="tag">
                        <h2>Media college Amsterdam year 2</h2>
                    </div>
                    <div class="decs">
                        <p>I learned more advanced HTML, CSS, and started with JavaScript.</p>
                    </div>
                </div>
            </div>
            <div class="container right">
                <div class="content">
                    <div class="tag">
                        <h2>Media college Amsterdam year 3</h2>
                    </div>
                    <div class="decs">
                        <p>I started learning React and WordPress.</p>
                    </div>
                </div>
            </div>
            <div class="container left">
                <div class="content">
                    <div class="tag">
                        <h2>First internship</h2>
                    </div>
                    <div class="decs">
                        <p>-</p>
                    </div>
                </div>
            </div>
            <div class="container right">
                <div class="content">
                    <div class="tag">
                        <h2>Second internship</h2>
                    </div>
                    <div class="decs">
                        <p>-</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="heading">My projects</h2>
        <div class="projects-container">
            <div class="projects-box">
                <div class="projects-info">
                    <a class="project weather app" href="https://weatherapp.damianpietrzak.nl">
                        <img src="img/weatherapp.png" alt="weather app in react">
                    </a> 
                    <h4>React weather app year - 3</h4>
                </div>
            </div>
            <div class="projects-box">
                <div class="projects-info">
                    <a class="project to do list" href="https://todolist.damianpietrzak.nl">
                        <img src="img/to-do-list.png" alt="to do list in react">
                    </a> 
                    <h4>React to do list year - 3</h4>
                </div>
            </div>
            <div class="projects-box">
                <div class="projects-info">
                    <a class="project tic-tac-toe" href="https://tictactoe.damianpietrzak.nl">
                        <img src="img/tic-tac-toe.png" alt="tic-tac-toe in react">
                    </a> 
                    <h4>React tic-tac-toe year - 3</h4>
                </div>
            </div> 
            <div class="projects-box">
                <div class="projects-info">
                    <a class="project ColorPicker" href="https://colorpicker.damianpietrzak.nl">
                        <img src="img/color picker.png" alt="colorpicker project">
                    </a>
                    <h4>Colorpicker year - 2</h4>
                </div>
            </div>
            <div class="projects-box">
                <div class="projects-info">
                    <a class="project banky" href="https://bankie.damianpietrzak.nl">
                        <img src="img/bankie.png" alt="banky project">
                    </a>
                    <h4>Bankie year - 2</h4>
                </div>
            </div>
            <div class="projects-box">
                <div class="projects-info">
                    <a class="project game blog" href="http://gameblog.damianpietrzak.nl">
                        <img src="img/game blog.png" alt="game blog project">
                    </a> 
                    <h4>Blog games year - 1</h4>
                </div>
            </div>
              
        </div>
    </section>
    
<?php 

    $formData = isset($_POST['contact']) ? $_POST['contact'] : false; // shorthand code for if ? else : statement
    if($formData) {
        $email = htmlspecialchars($formData['email']);
        $phoneNumber = htmlspecialchars($formData['phone']);
        $subject = htmlspecialchars($formData['subject']);
        $text = htmlspecialchars($formData['text']);

        $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        if(mail(
            'damianpietrzak1999@gmail.com',
            'Contact via portfolio: '.$subject,
            'Email: '.$email.', Telefoonnummer: '.$phoneNumber.', Tekst:'.$text,
            $headers
        )){
            echo '<script>alert("Email sent successfully");</script>';
        }

    }
?>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        <form name="contact" action="index.php" method="post">
            <div class="input-box">
                <input type="text" name="contact[name]" placeholder="Name" required>
                <input type="email" name="contact[email]" placeholder="Email" required>
                <input type="Number" name="contact[phone]" placeholder="Phone Number" required>
                <input type="text" name="contact[subject]" placeholder="Subject" required>
            </div>
            <textarea name="contact[text]" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input target="_blank" type="submit" value="Send Message" class="btn"> 
            
        </form>
    </section>

    <footer class="footer">
        <div class="social">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>  
            <a href="#"><i class="fa-brands fa-github"></i></a> 
        </div>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Privacy Policies</a></li>
        </ul>
        <p class="copyright">
            Made by Damian Pietrzak
        </p>
    </footer>

</body>
</html>