<?php
// Define an array for member information
$teamMembers = [
    [
        "name" => "Cheyenne Korda",
        "role" => "Cyber Security Analyst",
        "link" => "detail.php?index=0",
        "image" => "assets/images/profileCK.jpg",
        "dateofBirth" =>"2004-03-14"
    ],
    [
        "name" => "Ramatoulaye signate",
        "role" => "software developer",
        "link" => "detail.php?index=1",
        "image" => "assets/images/profile.jpg",
        "dateofBirth" =>""
    ]
];


function memberAge($dateofBirth){
    $DOB = new DateTime($dateofBirth);
    $todayDate = new DateTime();
    $age = $todayDate->diff($DOB)->y;
    return $age;
}


function displayMember($member, $index){
    echo '<header class="resume-header mt-4 pt-4 pt-md-0">';
        echo '<div class="row">';
            echo '<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">';
                echo '<img class="picture" src="' . $member['image'] .'" alt="">';
            echo '</div><!--//col-->';
            echo '<div class="col">';
                echo '<div class="row p-4 justify-content-center justify-content-md-between">';
                    echo '<div class="primary-info col-auto">';
                        echo '<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">' . $member['name'] . '</h1>';
                        echo '<h2>Age - ' . memberAge($member['dateofBirth']) . '</h2>';
                        echo '<div class="title mb-3">' . $member['role'] .'</div>';
                        echo '<a href="' . $member['link'] .'" class="btn btn-secondary">See full profile</a>';
                    echo '</div><!--//primary-info-->';
                    echo '<div class="secondary-info col-auto mt-2">';
                    echo '</div><!--//secondary-info-->';
                echo '</div><!--//row-->';

            echo '</div><!--//col-->';
        echo '</div><!--//row-->';
    echo '</header>';
    function memberInfo($teamMembers, $memberNumber){
        $name = $teamMembers['name'];
        $role = $teamMembers['role'];
        $link = $teamMembers['link'];
        $image = $teamMembers['image'];
        echo '<div class="member-card">';
        echo '<img src="' . $image . '" alt="' . $name . '">';
        echo '<h2>' . $name . '</h2>';
        echo '<p>Role: ' . $role . '</p>';
        echo '<p>Link: ' . $link . '</p>';
        echo '</div>';
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our amazing team</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">
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
        <h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
        <?php foreach($teamMembers as $index => $member){
            displayMember($member, $index);
            memberInfo($member, $index);
        }
        ?>

    </div>
</article>

<footer class="footer text-center pt-2 pb-5">
    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
    <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by cheyenne and Ramatoulaye</small>
</footer>





    

</body>
</html> 

