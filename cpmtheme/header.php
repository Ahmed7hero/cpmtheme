<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    wp_head();
    ?>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm mt-4" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary_menu',
                        'theme_location' => 'primary_menu', //selected in wp admin
                        'menu_class' => 'navbar-nav ms-auto me-4 my-3 my-lg-0',
                        'container' => '',
                        // 'items_wrap' => '
                        //                 <ul class="list-unstyled navbar-nav ms-auto me-4 my-3 my-lg-0">
                        //                     %3$s
                        //                 </ul>', //giving styling
                        'li_class' => 'nav-item',
                        'a_class' => 'nav-link me-lg-3'
                    )
                );
                ?>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
                    data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Send Feedback</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>




<!-- Navigation-->
<!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Send Feedback</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav> -->