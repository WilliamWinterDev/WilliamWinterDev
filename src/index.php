<?
	$email_address = "contact@wwinter.co.uk";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BP9D3KD1BC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BP9D3KD1BC');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Personal website to show skills and experience for William Winter a Web Applicatons Developer from London, United Kingdom">
    <meta name="author" content="William Winter">
    <meta name="keywords" content="php,developer,hammersmith,london,automation,website,application">

    <title>William Winter - Personal Website - WWinter.co.uk</title>

    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-mfizz/2.4.1/font-mfizz.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">William Winter</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpeg"
               alt="Picture of William Winter">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" title="About" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" title="Experience" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" title="Education" href="#education">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" title="Skills" href="#skills">Skills</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
            <h1 class="mb-0">William
                <span class="text-primary">Winter</span>
            </h1>
            <div class="subheading mb-5">London, United Kingdom
                <a href="mailto:<?= $email_address; ?>?subject=Website Enquiry"
                   title="Send Email to <?= $email_address; ?>"
                   onclick="gtag('event', 'Clicked to email', {'event_category': 'email_contact'});"><?= $email_address; ?></a>
            </div>
            <p class="lead mb-5">I am a self-taught developer with over 10 years experience in development including 7
                years of commercial experience in web application development using a variety of programming
                languages.<br><a href='downloads/CV.pdf' target="_blank"
                                 onclick="gtag('event', 'Download CV', {'event_category': 'download_cv'});">Download
                    CV</a></p>

            <div class="social-icons">
                <a href="https://www.linkedin.com/in/william-winter" data-toggle="tooltip" data-placement="top"
                   title="View LinkedIn"
                   onclick="gtag('event', 'Clicked to view LinkedIn', {'event_category': 'social_link_click'});"
                   target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://github.com/WilliamWinterDev" data-toggle="tooltip" data-placement="top"
                   title="View GitHub"
                   onclick="gtag('event', 'Clicked to view Github', {'event_category': 'social_link_click'});"
                   target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
            <h2 class="mb-5">Experience</h2>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Site Reliability Engineer</h3>
                    <div class="subheading mb-3"><a href="https://www.sky.com/" title="View Sky"
                                                    onclick="gtag('event', 'Clicked to view Sky', {'event_category': 'work_experience_click'});"
                                                    target="_blank">Sky</a></div>
                    <p>Working as part of the Global Reliability Platform supporting multiple Sky & Comcast streaming
                        services such as NOW TV, Sky Go and Peacock my job at Sky is to ensure the platforms are running
                        smoothly and to investigate any platform errors which may occur.</p>
                    <p>The tech stack used at Sky was a mixture of Golang and Python with Golang being our primary
                        language of choice for our day to day microservices such as APIs and data ingestion. I helped to
                        create new Golang API standards when I joined the team as all the different services we
                        were supporting at the time had a different framework being used. This helped speed up
                        development and testing as everyone was able to pick up any of our services and get working
                        straight away instead of having to spend time getting familiar with it.</p>
                    <p>At Sky we used Jenkins and ArgoCD as our CI/CD tools and terraform to deploy our Kubernetes
                        infrastructure. As part of the SRE team, I was responsible for all of my deployments so
                        managed to get a good understanding of how these tools worked. Other technologies we used were
                        Google's BigQuery and Data Studio for our data store reporting, Kubernetes for our
                        infrastructure
                        and GitHub/ZenHub for our project management.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">August 2021 - Present</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">PHP Developer</h3>
                    <div class="subheading mb-3"><a href="http://www.immediate.co.uk/" title="View Immediate"
                                                    onclick="gtag('event', 'Clicked to view Immediate', {'event_category': 'work_experience_click'});"
                                                    target="_blank">Immediate Media Co</a></div>
                    <p>Working on brands such as <a href="https://www.bbcgoodfood.com/" target="_blank">BBCGoodFood</a>,
                        <a href="http://www.radiotimes.com" target="_blank">RadioTimes.com</a> and <a
                                href="https://www.gardenersworld.com/" target="_blank">Gardeners World</a> I was helping
                        to develop a new headless content delivery platform built on top of WordPress. While building
                        the new headless platform I was able to work with new technologies such as Symfony, Docker, AWS
                        (Lambda, CodePipeline & ECS) and ElasticSearch.</p>
                    <p>During my time at Immediate I have worked on a new ElasticSearch service using ElasticSearch 7
                        and also maintained our current ElasticSearch microservice. I also implemented a new related
                        content module into the brands which provided better recommendations for articles a user was
                        viewing based on our ElasticSearch weighting.</p>
                    <p>While working at Immediate we worked in an Agile environment and aimed for 100% unit test
                        coverage on all new work completed which would be automatically blocked by our Jenkins pipeline
                        tests and our AWS CodePipeline reports.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">November 2018 - August 2021</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Web Application Developer</h3>
                    <div class="subheading mb-3"><a href="http://opencrm.co.uk" title="View OpenCRM"
                                                    onclick="gtag('event', 'Clicked to view OpenCRM', {'event_category': 'work_experience_click'});"
                                                    target="_blank">OpenCRM</a></div>
                    <p>Working on a large scale web application, completing bespoke client work and developing a variety
                        of internal applications using languages including PHP, MySQL, C#, VB 6, JavaScript and jQuery
                        with small HTML & CSS elements. During my time here I have shown I can work well with others as
                        I was tasked with helping the apprentice developer to increase his knowledge and get a better
                        understanding of how we work.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">May 2015 - November 2018</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Apprentice Web Developer</h3>
                    <div class="subheading mb-3"><a href="https://gmp-crm.com/" title="View GMP"
                                                    onclick="gtag('event', 'Clicked to view GMP', {'event_category': 'work_experience_click'});"
                                                    target="_blank">Global Management Platform</a></div>
                    <p>As an apprentice website developer I gained invaluable knowledge regarding the process of
                        developing a web application. I undertook training courses to learn C#, VB, MS-SQL and how to
                        use UNIX systems. I also gained a Microsoft <strong>Programming in HTML5 with JavaScript and
                            CSS3</strong> (<a href='https://www.microsoft.com/en-gb/learning/course.aspx?cid=20480'
                                              target="_blank">Course: 20480B</a>) certification</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">May 2014 - May 2015</span>
                </div>
            </div>

        </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
            <h2 class="mb-5">Education</h2>

            <div class="resume-item d-flex flex-column flex-md-row">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Baltic Training Services</h3>
                    <div class="subheading mb-3">Level 3 Software Development Apprenticeship - <i>Distinction+
                            Achieved</i></div>
                    <p>After leaving school and sampling a college course I concluded an apprenticeship would prove a
                        more successful career path for me. My apprenticeship with Baltic Training Services taught me
                        invaluable skills in software development courses including C#, Visual Basic, MS-SQL, Unix,
                        Software Development Process & Testing and Customer Services. During my time at Baltic I gained
                        commercial experience which has since allowed me to advance my software development career.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">May 2014 - March 2015</span>
                </div>
            </div>

        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
            <h2 class="mb-5">Skills</h2>

            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
            <ul class="list-inline dev-icons">
				<?php
					$icons = [
						[
							"title" => "Golang",
							"class" => "fab fa-golang",
						],
						[
							"title" => "Python",
							"class" => "fab fa-python"
						],
						[
							"title" => "PHP",
							"class" => "icon-php-alt"
						],
						[
							"title" => "MySQL",
							"class" => "icon-mysql"
						],
						[
							"title" => "Symfony",
							"class" => "fab fa-symfony"
						],
						[
							"title" => "Jenkins",
							"class" => "fab fa-jenkins"
						],
						[
							"title" => "Docker",
							"class" => "fab fa-docker"
						],
						[
							"title" => "JavaScript",
							"class" => "fab fa-js"
						],
						[
							"title" => "SASS",
							"class" => "fab fa-sass"
						],
						[
							"title" => "WordPress",
							"class" => "fab fa-wordpress"
						],
						[
							"title" => "Git",
							"class" => "fab fa-git-square"
						],
						[
							"title" => "Google Cloud Platform",
							"class" => "icon-google-developers"
						],
						[
							"title" => "AWS",
							"class" => "fab fa-aws"
						],
						[
							"title" => "Linux",
							"class" => "fab fa-linux"
						],
						[
							"title" => "Bootstrap",
							"class" => "icon-bootstrap"
						]
					];

					foreach ($icons as $icon) {
						echo "<li class='list-inline-item dev-icon' data-toggle='tooltip' data-placement='top' title='{$icon['title']}'><i class='{$icon['class']}'></i></li>";
					}
				?>
            </ul>

            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Jenkins Build Pipeline
                </li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    AWS CodePipeline
                </li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Responsive Mobile Design
                </li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Cross Browser Testing &amp; Debugging
                </li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Agile Development &amp; Scrum
                </li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Test Driven Development
                </li>
            </ul>
        </div>
    </section>

</div>

<!-- Bootstrap core JavaScript -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/resume.min.js"></script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

</body>

</html>