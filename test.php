<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/main.css" />


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
</head>

<body class="bg">
    <div class="navbar-fixed">
        <nav class="transparent">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#" class="brand-logo">My Portfolio</a>
                    <a href="#" class="button-collapse" data-activates="mobile-nav"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#home" class="hover-button">Home</a></li>
                        <li><a href="#about" class="hover-button">About</a></li>
                        <li><a href="#projects" class="hover-button">Projects</a></li>
                        <li><a href="#skills" class="hover-button">Skills</a></li>
                        <li><a href="#contact" class="hover-button">Contact</a></li>

                    </ul>

                </div>
            </div>
        </nav>

    </div>
    <div class="row scrollspy" id="home">
        <div class="col s12 m10 l10 offset-m1 offset-l1">
            <div class="container">
                <br><br><br>
                <h3 class=" white-text">Hi, my name is</h3>
                <h1 class="white-text">Roly Gatus</h1>
                <h4 class="white-text">and I'm a <span class="red-text" id="text"></span><span class="blinking">I</span></h4>


            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="row scrollspy" id="about">
        <div class="col s12 m112">
            <div class="card horizontal black-trans">
                <img class="card-image circle" src="img/people.jpg" alt="">
                <div class="card-stacked">
                    <div class="card-content">
                        <h3 class="white-text center card-title">About Me</h3>
                        <span>
                            <br><br>
                            <h4 class="white-text">Hi, I'm Roly.</h4>
                            <p class="white-text">I'm a Website Designer and 2D Game Developer based in the Bahay Toro of Quezon City.</p>
                            <p class="white-text">I'm 20 years old and I'm a Highschool Graduate of San Francisco Highschool with a strand of TVL-ICT(Computer Program and Animation). And I've coded for four years and have learned a lot of things along the way.</p>
                            <p class="white-text">I've study Web Designer at TESDA(TWSP) and self-study using Unity 2D Platformer Games.</p>
                            <p class="white-text">I am in love with programming as Web Designer, and Game Developer is a way for me to express myself, my talents, and my skills by creating Design and Game Development that many people benefit from my work and enjoy my games.</p>


                        </span>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <div class="row scrollspy" id="projects">
        <div class="col s12 m12 ">
            <div class="card black-trans">

                <div class="card-content">
                    <h3 class="white-text card-title">Projects</h3>
                    <br><br>
                    <h4 class="white-text">Web Design</h4>
                    <table class="bordered  responsive-table">
                        <thead>
                            <tr>
                                <th class="white-text">Project Name</th>
                                <th class="white-text">Release Date</th>
                                <th class="white-text">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="white-text">San Francsico High School</th>
                                <th class="white-text">August 13, 2019</th>
                                <th class="white-text"><a href="https://sfhs.netlify.app/index.html" class="btn waves-effect black waves-light">Go To Website</a></th>
                            </tr>
                        </tbody>
                    </table>
                    <br><br>
                    <h4 class="white-text">Game Projects</h4>
                    <table class="bordered responsive-table">
                        <thead>
                            <tr>
                                <th class="white-text">Project Name</th>
                                <th class="white-text">Release Date</th>
                                <th class="white-text">Genre</th>
                                <th class="white-text">Trailer Link</th>
                                <th class="white-text">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="white-text">Coming Soon</th>
                                <th class="white-text">N/A</th>
                                <th class="white-text">2D Platformer/Horror</th>
                                <th><a href="#" class="white-text black btn waves-effect waves-light disabled">Trailer</a></th>
                                <th><a href="#" class="white-text black btn waves-effect waves-light disabled">Link</a></th>
                            </tr>
                        </tbody>
                    </table>




                </div>
            </div>

        </div>
    </div>
    <div class="row scrollspy" id="skills">
        <div class="col s12 m12">
            <div class="card  black-trans">
                <div class="card-content"><span class="card-title white-text">My Skills</span></div>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card large black-trans">
                            <div class="card-content">
                                <span class="card-title white-text">Language</span>
                                <table class="bordered ">
                                    <tbody>
                                        <tr>
                                            <th class="white-text">HTML</th>
                                        </tr>
                                        <tr>
                                            <th class="white-text">CSS</th>
                                        </tr>
                                        <tr>
                                            <th class="white-text">Javascript</th>
                                        </tr>
                                        <tr>
                                            <th class="white-text">JQuery</th>
                                        </tr>
                                        <tr>
                                            <th class="white-text">C#</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card large black-trans">
                            <div class="card-content">
                                <span class="card-title white-text">Tools</span>
                                <table class=" bordered">
                                    <tbody>
                                        <tr>
                                            <th class="white-text">Visual Studio Code</th>
                                        </tr>
                                        <tr>
                                            <th class="white-text">Unity</th>
                                        </tr>
                                        <tr>
                                            <th class="white-text">Adobe Photoshop</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row scrollspy" id="contact">
        <div class="col s12 m6 offset-m3">
            <div class="card black">
                <div class="card-content">
                    <span class="card-title white-text center">Contact</span>

                    <form action="">
                        <div class="input-field">
                            <input class="white-text" type="text" name="First_Name" id="first_name" placeholder="First Name" required>
                            <label for="first_name" class="white-text">First Name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="Last_Name" id="last_name" placeholder="Last Name" class="white-text" required>
                            <label for="last_name" class="white-text">Last Name</label></div>
                        <div class="input-field">
                            <input type="email" placeholder="Email" class="white-text validate" id="email" required>
                            <label for="email" data-error="Invalid" data-success="Valid" class="white-text">Email</label></div>
                        <div class="input-field">
                            <input type="tel" name="phone_number" id="phone_number" class="white-text" placeholder="Phone Number" required>
                            <label for="phone_number" class="white-text">Phone Number</label>
                        </div>

                        <div class="input-field">
                            <select name="project_type" id="project_type" class="white-text black">
                                <option value="#" class="white-text"disabled selected>Types of Project</option>
                                <option value="Web Design" class="white-text">Web Design</option>
                                <option value="Game Development" class="white-text">Game Development</option>
                            </select>
                            <label for="project_type" class="white-text">Types of Project</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="subject" placeholder="Subject" id="subject" class="white-text">
                            <label for="subject" class="white-text">Subject</label>
                        </div>
                        <div class="input-field">
                            <textarea name="Message" placeholder="Message" id="message" class="materialize-textarea white-text"></textarea>
                            <label for="message" class="white-text">Message</label>
                        </div>
                        <input type="submit" value="Submit" name="send" class="btn white black-text waves-effect waves-dark waves-ripple ">
                    </form>


                </div>
            </div>
        </div>
    </div>


</body>
<ul class="side-nav black" id="mobile-nav">
    <br><br><br>
    <li><a href="#home" class="white-text">Home</a></li>
    <li><a href="#about" class="white-text">About</a></li>
    <li><a href="projects" class="white-text">Projects</a></li>
    <li><a href="#skills" class="white-text">Skills</a></li>
    <li><a href="#contact" class="white-text">Contact</a></li>
</ul>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="style.js"></script>

<script>
    $(window).scroll(function() {
        if ($(window).scrollTop() > 2) {
            $('nav').addClass('black').removeClass('transparent');
        } else {
            $('nav').addClass('transparent').removeClass('black');
        }
    })
    $('.card').hide();
    setTimeout(() => {

        $(document).ready(function() {
            $('.card').fadeIn();
            $('.fadeout').fadeOut();
            // Init Sidenav
            $('.count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
            $('select').material_select();


            $('.button-collapse').sideNav();
            $('.dropdown-button').dropdown({
                constrainWidth: false,
                hover: true,
                belowOrigin: true,
                alignment: 'left'
            });
            $('.scrollspy').scrollSpy();
        });
    }, 3000);
</script>
</body>

</html>