<?php
$teamMembers=[
	[
		'firstname'=>'Cheyenne',
		'lastname'=>'Korda',
        'dateofBirth'=>'2004-03-14',
		'role'=>'Cyber Security Analyst',
		'bio'=>'Hi, my name is Cheyenne Korda. I am a student at Northern Kentucky University in pursuit of my bachelors degree in 
		Cyber Security. I am minoring in Computer Forensics and am hoping to land a job within a three-letter agency such as the FBI or 
		CIA. I am working as a \"Peer Mentore\" this semester which is allowing me to explore my leadership skills and my ability to 
		teach.',
		'image'=>'assets/images/profileCK.jpg',
		'email'=> 'kordac1@nku.edu',
		'phone number'=> '6786739423',
		'linkedin'=>'https://www.linkedin.com/in/cheyennekorda',
		'github' => '',
		'webpage'=>'',
		'summary'=>'Highly motivated and detail-oriented NKU Computer Information Technology student with strong customer service
		experience and a solid understanding of HTML, Python, and Java. Seeking an internship in networking and systems
		administration to apply and enhance knowledge and skills in a real-world setting.',
		'workExperience'=>[
            [
                'experience name'=>'Security Architecture Intern',
		        'experience location'=> 'First Financial Bank ',
		        'year'=>'May 2023 - August 2023',
		        'description of the role'=> 'Looked into the company\'s ARD documents and contacted the correct personell in order to ensure
		that the data was up to date and correct according to the document. Learned how to analyze the data and interpret it, as well as
		formatting it in a way that a normal person would be able to comprehend. I also presented to a number of people for various topics 
		within the field.',
		    ],
    
        ],'achievements'=> ['>3.0 GPA','Dean\'s list','learned php'],
		'skills name'=> ['java','python', 'javascript','linux', 'html'],
		'others'=> ['unix', 'excel','powerpoint','word','wordpress'],
		'education'=>'Bachelor of science in Cyber Security',
		'school'=> 'Northern kentucky university',
		'year'=>'2022-2025',
		'languages'=>[
			[
				'name'=>'English',
				'proficiency'=>'Native'
			],
			[
				'name'=>'Choctaw',
				'proficiency'=>'Learning'
			]
		],
		'honors & awards' => [
			[
				'name' =>'Dean\'s List',
				'description'=>'Awarded to students with a 3.0 GPA and above',
			],
			[
				'name'=> 'Founder\'s Scholarship',
				'description'=>'This scholarship is for students who have earned an accumulative GPA of 3.0 or higher.',
			]
			],
		'interests'=>['coaching','gym','reading'],
		'projects' => [
			[
				'name'=> 'Game Design',
				'description'=> 'The task was to build a game using python that players would have some sort of simple, yet fun thing to do.',
				'link'=>'http://localhost/ase230/01/assets/other%20pages/projectFinal_KORDAC1-4.py',
				'picture'=>'assets/images/project1.jpg',
			],
		],
		
	],
	[
		'firstname'=>'Ramatoulaye',
		'lastname'=>'Signate',
        'dateofBirth'=>'',
		'role'=>'Software developer',
		'bio'=>'Hello, My name is Ramatoulaye signate. I am an international student from senegal. I came in the united states in 2019 
		to pursue my bachelor degree in computer information technology. I am majoring in CIT and minoring in information security at 
		NKU. I am a completed finisher someone who can be relied upon to get a job done on time and to a great standard. 
		I have experience working in teams and dealing with customer.',
		'email'=> 'signater1@nku.edu',
		'image'=>'assets/images/profile.jpg',
		'phone number'=> '3478053318',
		'linkedin'=>'https://www.linkedin.com/in/ramatoulayesignate',
		'github' => '',
		'webpage'=>'',
		'summary'=>'Highly motivated and detail-oriented NKU Computer Information Technology student with strong customer service
		experience and a solid understanding of HTML, Python, and Java. Seeking an internship in networking and systems
		administration to apply and enhance knowledge and skills in a real-world setting.',
		'workExperience'=>[
            [
                'experience name'=>'Cashier/Bookseller',
		        'experience location'=> 'Barners&Noble',
		        'year'=>'Jan 2020 - Nov 2020',
		        'description of the role'=> 'Assisted an average of 50 customers per day with product location, questions, and cash transactions.
		Resolved customer complaints with efficiency and professionalism, receiving recognition from senior management for maintaining customer satisfaction ratings above 95%.
		Maintained a well-organized sales floor for optimal customer shopping experience.',
            ],
        ],
		'achievements'=> ['conquered france','won purple heart medal','learned php'],
		'skills name'=> ['java','python', 'javascript','linux', 'html'],
		'others'=> ['unix', 'R','tableau','oracle', 'excel','powerpoint','word','wordpress'],
		'education'=>'Bachelor of science in CIT',
		'school'=> 'Northern kentucky university',
		'year'=>'2019-2024',
		'languages'=>[
			[
				'name'=>'English',
				'proficiency'=>'Fluent'
			],
			[
				'name'=>'French',
				'proficiency'=>'Native'
			]
		],
		'honors & awards' => [
			[
				'name' =>'Edge award',
				'description'=>'It is designated to recognize academically outstanding and creatively talented students.',
			],
			[
				'name'=> 'international merit scholarship',
				'description'=>'This scholarship is for international students who have earned an accumulative GPA of 3.0 or higher.',
			]
			],
		'interests'=>['swimming','gym','cooking'],


	],
	
	
];
$index=$_GET['index'];

function displayWork($teamMembers, $index) {
    $teamMember = $teamMembers[$index];
        echo '<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>';
        echo '<div class="resume-section-content">';
        echo '<div class="resume-timeline position-relative">';

        foreach ($teamMember['workExperience'] as $index => $workExperience) {
            echo '<article class="resume-timeline-item position-relative pb-5">';
            echo '<div class="resume-timeline-item-header mb-2">';
            echo '<div class="d-flex flex-column flex-md-row">';
            echo '<h3 class="resume-position-title font-weight-bold mb-1">' . $workExperience['experience name'] . '</h3>';
            echo '<div class="resume-company-name ms-auto">' . $workExperience['experience location'] . '</div>';
            echo '</div><!--//row-->';
            echo '<div class="resume-position-time">' . $workExperience['year'] . '</div>';
            echo '</div><!--//resume-timeline-item-header-->';
            echo '<div class="resume-timeline-item-desc">' . $workExperience['description of the role'] . '</div>';
            echo '</article>';
        }

        echo '</div><!--//resume-timeline-->';
        echo '</div><!--//resume-section-content-->';
    
}

function memberAge($dateofBirth){
    $DOB = new DateTime($dateofBirth);
    $todayDate = new DateTime();
    $age = $todayDate->diff($DOB)->y;
    return $age;
}

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
				        <img class="picture" src="<?= $teamMembers[$index]['image'] ?>" alt="" width="150" height= "220">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $teamMembers[$index]['firstname'].' '.$teamMembers[$index]['lastname'] ?></h1>
                                <h2>Age - <?= memberAge($teamMembers[$index]['dateofBirth']) ?> </h2>

							  <div class="title mb-3"><?= $teamMembers[$index]['role'] ?></div>
							    <ul class="list-unstyled">
								  <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?=$teamMembers[$index]['email']?></a></li>
								    <li><a class="text-link" href="3478053318"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?=$teamMembers[$index]['phone number']?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href=<?= $teamMembers[$index]['linkedin']?>><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $teamMembers[$index]['linkedin']?></a></li>
					                <li class="mb-3"><a class="text-link" href<?= $teamMembers[$index]['github']?>=span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?='www.github.com'?></a></li>
					                <li><a class="text-link" href=<?= $teamMembers[$index]['webpage']?>><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?='www.website.com'?></a></li>
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
				<?php displayWork($teamMembers, $index);?>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p>
                                                
                                                
                                                </p>
										    <ul>
											 <?php
											 foreach($teamMembers[$index]['achievements'] as $item){ ?>
											    <li> <?= $item?></li>
												<?php }?>
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
										<?php
											 foreach($teamMembers[$index]['others'] as $item){ ?>
											    
							            <li class="list-inline-item"><span class="badge badge-light"><?= $item?></span></li>
										<?php }?>
							       
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?= $teamMembers[$index]['education']?> </div>
								        <div class="resume-degree-org"><?= $teamMembers[$index]['school']?></div>
								        <div class="resume-degree-time"><?= $teamMembers[$index]['year']?></div>
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
										<?php foreach ($teamMembers[$index]['honors & awards'] as $item){ ?>
								        <div class="resume-award-name"><?= $item['name']?></div>
								        <div class="resume-award-desc"><?=$item['description']?></div>
										<?php } ?>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
									<?php foreach($teamMembers[$index]['languages'] as $item){ ?>
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?=$item['name']?></span> <small class="text-muted font-weight-normal"><?=$item['proficiency'] ?></small></li>
								    <?php } ?>  
								</ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php foreach($teamMembers[$index]['languages'] as $item){ ?>
								    <li class="mb-1"><?=$item['name']?></li>
									<?php } ?>  
								
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
									<?php foreach($teamMembers[$index]['projects'] as $item){ ?>
									<h5 class="card-title"><?=$item['name']?></h5>
									<p class="card-text"><?=$item['description']?></p>
									<a href="btn btn-outline-primary" href="<?=$item['link']?>">Go to link</a>
									<?php } ?>
									
									
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
		<a href='index.php'>Go back to the list of the members of the band </a>

    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> <?='by Ramatoulaye'?></small>
    </footer>

    

</body>

</html> 

