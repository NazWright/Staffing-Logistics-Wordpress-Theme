<?php
/**
* Template Name: Filter Applications
*
*/

?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ATS</title>
    <link rel="stylesheet" href="/wordpress/wp-content/themes/peoplecount/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/peoplecount/assets/css/Filter.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/peoplecount/assets/css/My-Skills.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/peoplecount/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/peoplecount/assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/peoplecount/assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/peoplecount/assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="box-shadow: 0px 0px 6px;width: 100%;">
        <div class="container"><img src="/wordpress/wp-content/themes/peoplecount/assets/img/staffing-logistics.png" style="width: 150px;"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Job Seekers</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Employers</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </li>
                </ul><span class="navbar-text actions"> <a class="login" href="#">Log In</a><a class="btn btn-light action-button" role="button" href="#" style="border-radius: 11px;background: var(--bs-blue);">Sign Up</a></span>
            </div>
        </div>
    </nav>
    <section class="main-content">
        <div class="row" style="padding: 30px;display: flex;flex-direction: row;">
            <div class="col mb-5 col-3" style="/*display: flex;*//*justify-content: s;*/padding: 0px;">
                  <div class="mb-4">
                    <h1 style="font-size: 20px;">Filter Applicants</h1>

                    <?php 
                    echo do_shortcode('[searchandfilter id="215"]'); 
                   // $args = array('post_type' => 'application');
                   // $args['search_filter_id'] = 123;
                   // $query = new WP_Query($args);
                    //var_dump($query);
                    //echo $query;

                    ?>
                </div>
               
            </div>
            <div class="col">
                <div style="display: flex;/*justify-content: space-around;*/"><span class="badge bg-primary" style="margin-right: 5px;">25 mi radius<span style="margin-left: 10px;">X</span></span><span class="badge bg-primary" style="margin-right: 5px;">25 mi radius<span style="margin-left: 10px;">X</span></span><span class="badge bg-primary" style="margin-right: 5px;">25 mi radius<span style="margin-left: 10px;">X</span></span><span class="badge bg-primary" style="margin-right: 5px;">25 mi radius<span style="margin-left: 10px;">X</span></span></div>
                <div>
                    <h1>Applicants</h1>
                </div>
                <div class="list-group" id="main" style="height: 70%;overflow: hidden;overflow-y: scroll;">
                    <?php //echo do_shortcode('[searchandfilter id="215" show="results" ]'); ?>



                    <?php

                    $args = array('post_type' => 'application',
                        'post_name' => $_GET['application']
                    );
                    $args['search_filter_id'] = 215;
                    $query = new WP_Query($args);

                    var_dump($query);


    ?>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>