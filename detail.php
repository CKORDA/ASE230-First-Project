<?php
$teamMembers=[
	[
		'firstname'=>'cheyenne',
		'lastname'=>'Korda',
		'bio'=>'Hello, my name is Cheyenne Korda. I am a second year student at NKU majoring in Cybersecurity with a minor in Computer 
		Forensics. I am currently looking for a part-time job or internship.'
	],
	[
		'firstname'=>'Ramatoulaye',
		'lastname'=>'Signate',
		'bio'=>'Hello, My name is Ramatoulaye signate. I am an international student from senegal. I came in the united states in 2019 
		to pursue my bachelor degree in computer information technology. I am majoring in CIT and minoring in information security at 
		NKU. I am a completed finisher someone who can be relied upon to get a job done on time and to a great standard. 
		I have experience working in teams and dealing with customer.'
	],
	
];
$index=$_GET['index'];
?>
<h1><?= $teamMembers[$index]['firstname'].' '.$teamMembers[$index]['lastname'] ?></h1>
<p><?= $teamMembers[$index]['bio'] ?></p>
<a href="C:\xampp\htdocs\nku\ase230\group project1\index.php<?= $i ?>">Go back to the list of the members of the band </a>
