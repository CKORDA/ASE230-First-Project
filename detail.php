<?php
$teamMembers=[
	[
		'firstname'=>'Cheyenne',
		'lastname'=>'Korda',
		'role'=>'Cyber Security Analyst',
		'email'=>'cheyennekorda2384@gmail.com',
		'summary'=>'I went to highschool at a STEM academy known as iLEAD Academy where I kick-started my passion for computers and cyber security. I start off in the Engineering program then transistioned to the Computer Science area my sophomore year. As soon as my junior year started, I was in dual credit classes for computer science at Jefferson Community & Technical College. I finished my Associates Degree when I graduated highschool. After that I started my Bachelors degree at Northern Kentucky University for Cyber Security. Ive had numerous jobs throughout my education as well, but I will get into those down below.',
		'bio'=>'Hello, my name is Cheyenne Korda. I am a second year student at NKU majoring in Cybersecurity with a minor in Computer Forensics. I am currently looking for a part-time job or internship.',
		'experience'=>[
			'experiencetitle'=>'Security Architecture',
			'emperiencecompany'=>'First Financial Bank',
			'experiencedate'=>'May 2023 - August 2023',
			'whatwasdone'=>'During this internship, I worked on the data to/from vendors of the company. My partner and I contacted the Vendor Managers to determine what data was being transferred and in what format the transfer was taking place. We put this data into spreadsheets and organized it accordingly in order to convey the information properly.'		
		]
		'achievements'=>[
			'ach1'=>'While working at this company, I was taught a lot about team work, spreadsheet building,communication, and data analysis.',
			'ach2'=>'Learned how to effectively analyze whether a vednor is a critical, high, or moderate risk for the company.',
			'ach3'=>'Worked with a partner throughout the entire internship, and together we accomplished the goal our supervisor gave.',
			'ach4'=>'We created a series of spreadsheets in order to show our work to our supervisors and others throughout the company.',
			'ach5'=>'Ensured that someone who didnt have access to the data would be able to easily understand what was being conveyed within the spreadsheets.'
		]
		'techUsed'=>[
			'tech1'=>'Powerpoint',
			'tech2'=>'Excel',
			'tech3'=>'ARDs',
			'tech4'=>'GLBA'
		]
		//technologyused
	],
	[
		'firstname'=>'Ramatoulaye',
		'lastname'=>'Signate',
		'role'=>'Software developer',
		'bio'=>'Hello, My name is Ramatoulaye signate. I am an international student from senegal. I came in the united states in 2019 
		to pursue my bachelor degree in computer information technology. I am majoring in CIT and minoring in information security at 
		NKU. I am a completed finisher someone who can be relied upon to get a job done on time and to a great standard. 
		I have experience working in teams and dealing with customer.'
	],
	[
		'firstname'=>'Nicholas',
		'lastname'=>'Caporusso',
		'role'=>'dog sitter'

	]
	
];
$index=$_GET['index'];
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title> <?= $teamMembers[$index]['firstname'].' '.$teamMembers[$index]['lastname'] ?>'s Resume </title>
   

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ramatoulaye's resume">
    <meta name="author" content="Ramatoulaye">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		<header class="resume-header pt-4 pt-md-0">
		
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="" width="150" height= "220">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $teamMembers[$index]['firstname'].' '.$teamMembers[$index]['lastname'] ?></h1>
							  <div class="title mb-3"><?= $teamMembers[$index]['role'] ?></div>
							    <ul class="list-unstyled">
								  <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?='signater1@nku.edu'?></a></li>
								    <li><a class="text-link" href="3478053318"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?='3478053318'?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="https://www.linkedin.com/in/ramatoulayesignate"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?='www.linkedin.com/in/ramatoulayesignate'?></a></li>
					                <li class="mb-3"><a class="text-link" href="https://github.com/Rsignate"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?='www.github.com'?></a></li>
					                <li><a class="text-link" href="https://github.com/Rsignate/Mywebpage"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?='www.website.com'?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
			
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?= $teamMembers[$index]['summary']?>
                    </p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"></h3>
										        <div class="resume-company-name ms-auto"><?= $teamMembers[$index]['experience']['experiencetitle']?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?= $teamMembers[$index]['experience']['experiencedate']?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?= $teamMembers[$index]['experience']['whatwasdone']?>
                                            <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p>
                                                
                                                
                                                </p>
										    <ul>
											    <li> <?='Consistently Supported High Customer Volume: Successfully assisted an average of 50 customers daily with product inquiries, locating items, and processing cash transactions, showcasing exceptional multitasking skills and dedication to providing quality service.
												'?></li>
                                                <li><?=
				                                'Exemplary Customer Satisfaction: Demonstrated efficiency and professionalism in addressing customer complaints, leading to a consistent customer satisfaction rating above 95%. Recognized by senior management for your exceptional conflict resolution abilities.
											    '?></li>
                                                <li> <?=
												'Outstanding Customer Relationship Management: Built and maintained strong rapport with customers through attentive service, resulting in repeat business and positive word-of-mouth referrals.
												'?></li>
											    <li> <?=
												'Operational Excellence: Played a pivotal role in maintaining a meticulously organized sales floor, enhancing the overall shopping experience for customers and contributing to increased sales revenue.
												'?></li>
											    <li><?=
												'Team Collaboration: Collaborated effectively with fellow team members to ensure a seamless customer service experience, contributing to a harmonious work environment and streamlined operations. </li>
										    	'?><li> <?=
												'Continuous Improvement: Proactively identified areas for process enhancement and proposed solutions, leading to the implementation of more efficient workflows and improved customer service protocols.
												'?></li>
												<li><?=
												'Time Management Excellence: Effectively managed high customer flow while balancing various tasks, optimizing time allocation to ensure both customer needs and operational responsibilities were met consistently.
												'?></li>
											</ul>
										    
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
						
								    
								   
								    
								    
									</div><!--//resume-timeline-->
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?='Java'?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?='Python'?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?='JavaScript'?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?='linux'?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?='HTML/CSS'?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?='unix'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?='R'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?='Oracle'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?='Tableau'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?='excel'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?='powerpoint'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?='word'?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?='WordPress'?></span></li>
			
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?='Bachelor of science in CIT'?> </div>
								        <div class="resume-degree-org"><?'Northern Kentucky University'?></div>
								        <div class="resume-degree-time"><?='2019 - 2024'?></div>
								    </li>
								   
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Honors & Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?='Edge Award'?></div>
								        <div class="resume-award-desc">
                                          <?= 'It is designated to recognize academically outstanding and creatively talented students.'?>
                                        </div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?='International Merit scholarship'?></div>
								        <div class="resume-award-desc"><?='This scholarship is for international students who have earned an accumulative GPA of 3.0 or higher.'?> </div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?='Wolof'?></span> <small class="text-muted font-weight-normal"><?='(Native)'?></small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold"><?'French'?></span> <small class="text-muted font-weight-normal"><?='(Professional)'?></small></li>
								    <li><span class="resume-lang-name font-weight-bold"><?'English'?></span> <small class="text-muted font-weight-normal"><?='(Full Professional proficiency)'?></small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?='Swimming'?></li>
								    <li class="mb-1"><?='Gym'?></li>
								    <li class="mb-1"><?='Cooking'?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?='Created a dashboard'?></h5>
									<p class="card-text"><?='Collaborated with a team of three students to create visually appealing dashboards using tableau and various datasets.'?></p>
									<a href="btn btn-outline-primary" href="https://github.com">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?='Created a dynamic API-driven eCommerce website'?></h5>
									<p class="card-text"><?='Developed an eCommerce website from scratch utilizing HTML,CSS and Javascript to enhance online presence and blster sales performance.'?></p>
									<a href="btn btn-outline-primary" href="https://github.com/Rsignate/dynamic-API-driven-eCommerce-website.git">Go to link</a>

								</div>
							</div>
						</div>
						
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
		<a href="phttp://localhost/nku/ase230/group%20project1/ <?= $i ?>">Go back to the list of the members of the band </a>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> <?='by Ramatoulaye'?></small>
    </footer>

    

</body>
</html>
