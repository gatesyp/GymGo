<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GymGo</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.min.css') }}">

    <!-- Material Design Bootstrap -->
    <link href="css/style.min.css" rel="stylesheet">

    <style>
        img {
            width: 100%;
        }
        .dark-side-nav .logo-wrapper {
            background: url('http://thumb9.shutterstock.com/display_pic_with_logo/88755/111825812/stock-photo-diverse-equipment-and-machines-at-the-gym-room-111825812.jpg') center center no-repeat;
            background-size: cover;
        }
    </style>

</head>

<body>

<!--Modal: Contact form-->
<div class="modal fade" id="contact-form" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Write to us </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="col-md-12">
                        <p>We like to receive a messages</p>
                        <br>
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="contact-name" type="text" class="validate">
                            <label for="contact-name">Your name</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">mail</i>
                            <input id="contact-mail" type="tel" class="validate">
                            <label for="contact-mail">Your e-mail</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">label</i>
                            <input id="contact-subject" type="text" class="validate">
                            <label for="contact-subject">Subject</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="contact-text" class="materialize-textarea"></textarea>
                            <label for="contact-text">Message</label>
                        </div>
                    </form>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary waves-effect waves-light">Send</button>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div class="call">
                            <p>Or would you prefer to call? <span class="cf-phone"><i class="fa fa-phone"> +01 234 565
                                        280</i></span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
            </div>
        </div>
        <!--/. Modal content-->
    </div>
</div>
<!--/.Modal: Contact form-->

<!--Modal: Subscription form-->
<div class="modal fade" id="hp-newsletter" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h4,responsive">Subscription form</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="col-md-12">
                        <p>We'll write rarely, but only the best content.</p>
                        <br>
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Your name</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">mail</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Your e-mail</label>
                        </div>
                    </form>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary waves-effect waves-light">Sumbit</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
            </div>
        </div>
    </div>
</div>
<!--/.Modal: Subscription form-->

<!-- Modal: Cart -->
<div class="modal fade" id="cart-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content modal-cart">
            <div class="modal-header">
                <h4 class="modal-title">Cart</h4>
            </div>
            <div class="modal-body">

                <ul class="collection">

                    <li class="collection-item">
                        <div>
                            <p><span class="quantity"> 1x</span> Product 1 <span class="label green">$9.99</span><a
                                        href="#!" class="secondary-content"><i class="material-icons">close</i></a></p>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div>
                            <p><span class="quantity">2x</span> Product 2 <span class="label green">$19.99</span><a
                                        href="#!" class="secondary-content"><i class="material-icons">close</i></a></p>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div>
                            <p><span class="quantity">5x</span> Product 3 <span class="label green">$29.99</span><a
                                        href="#!" class="secondary-content"><i class="material-icons">close</i></a></p>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div>
                            <p><span class="quantity">3x</span> Product 4 <span class="label green">$59.99</span><a
                                        href="#!" class="secondary-content"><i class="material-icons">close</i></a></p>
                        </div>
                    </li>
                    <li class="collection-item">
                        <h5>Total <span class="label blue total">$119.96</span></h5>
                    </li>
                </ul>


                <button type="button" class="btn btn-primary waves-effect waves-light">Checkout</button>
                <div class="cartPageLink">
                    <a href="">
                        <p>Go to cart page</p>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--/.Modal: Cart -->


<!-- SideNav slide-out button -->
<a href="#" data-activates="slide-out" class="navbar-brand button-collapse"><i class="material-icons">menu</i></a>
<!--/. SideNav slide-out button -->

<!-- Sidebar navigation -->
<ul id="slide-out" class="side-nav fixed personal-side-nav dark-side-nav">
    <!-- Logo -->
    <div class="logo-wrapper">
        <a href="#" class="waves-effect waves-light">
            <div class="avatar-wrapper">
                <img src="http://0.gravatar.com/avatar/60efa32c26a19f3ed2e42798afb705ba?s=100&d=mm&r=g"
                     class="img-responsive img-circle">
            </div>
        </a>
    </div>
    <!--/. Logo -->

    <!--About-->
    <div class="about text-center">
        <p>View the notification queue for who needs assistance, live!</p>
    </div>
    <!--/.About-->

    <!--Social-->
    <ul class="social list-inline text-center">
        <li class="waves-effect waves-light"><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
        <li class="waves-effect waves-light"><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
        <li class="waves-effect waves-light"><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
        <li class="waves-effect waves-light"><a class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a></li>
        <li class="waves-effect waves-light"><a class="icons-sm li-ic"><i class="fa fa-instagram"> </i></a></li>
    </ul>
    <!--/.Social-->

    <!-- Side navigation links -->
    <ul class="collapsible collapsible-accordion">
        <li><a href="#" class="waves-effect waves-light">Queue</a>
        <li><a href="#" class="waves-effect waves-light">Reports</a>
        <li><a href="#" class="waves-effect waves-light">Settings</a>
    </ul>
    <!--/. Side navigation links -->
</ul>
<!--/. Sidebar navigation -->

<header>

    <!-- Navbar -->
    <!--Navbar-->
    <nav class="double-navbar navbar navbar-fixed-top z-depth-1" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header pull-left">
                <!-- SideNav slide-out button -->
                <a href="#" data-activates="slide-out" class="button-collapse hidden-lg hidden-md"><i
                            class="fa fa-bars"></i></a>
                <!--/. SideNav slide-out button -->
                <div class="breadcrumbs hidden-xs hidden-sm">
                    <h6>GymGo Trainer</h6>
                </div>
            </div>

            <!-- Navbar Icons -->
            <ul class="list-inline pull-right text-center">
                <li><a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#contact-form"><i
                                class="fa fa-envelope"></i><br><span>Contact</span></a></li>
                <li><a href="#" class="waves-effect waves-light dropdown-button" data-activates="account"><i
                                class="fa fa-user"></i><br><span>Account</span></a>
                    <!-- Account Dropdown -->
                    <ul id='account' class='dropdown-content'>
                        <li><a href="#!">Login</a></li>
                        <li><a href="#!">Logout</a></li>
                        <li><a href="#!">Settings</a></li>
                    </ul>
                    <!-- /.Account Dropdown -->
                </li>
                <!--/.Main acocunt with dropdown-->

            </ul>
            <!--/. Navbar Icons -->
        </div>
    </nav>
    <!--/.Navbar-->
    <!--/. Navbar -->

</header>

<main>

    <!--Main wrapper-->
    <div class="main-wrapper">
        <!--Main container-->
        <div class="container-fluid">

            @yield('content')

        </div>
        <!--/.Main container-->
    </div>
    <!--./Main wrapper-->

</main>

<!--Footer section-->
<footer class="page-footer center-on-small-only">
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 col-xs-offset-1">
                <p class="column-title white-text">Text widget</p>
                <div class="column-content">
                    <p class="thin-100 white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos
                        odio, minima. Veritatis exercitationem voluptates, fugit beatae, magni sed officia corporis
                        consequatur cum ut.</p>
                </div>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-md-offset-1">
                <p class="column-title white-text">Featured posts</p>

                <ul>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                </ul>

            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-2">
                <p class="column-title white-text">Latest reviews</p>

                <ul>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-2">
                <p class="column-title white-text">Lorem ipsum</p>

                <ul>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Lorem ipsum</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->


        </div>
    </div>
    <div class="call-to-action inline-block">
        <ul class="list-inline">
            <li>
                <h5 class="white-text">Subscribe to our newsletter</h5></li>
            <li><a class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#hp-newsletter">Subscribe</a>
            </li>
        </ul>
    </div>

    <div class="social-section text-center">
        <a class="btn-floating btn-large fb-bg waves-effect waves-light"><i class="fa fa-facebook"> </i></a>
        <a class="btn-floating btn-large tw-bg waves-effect waves-light"><i class="fa fa-twitter"> </i></a>
        <a class="btn-floating btn-large gplus-bg waves-effect waves-light"><i class="fa fa-google-plus"> </i></a>
        <a class="btn-floating btn-large li-bg waves-effect waves-light"><i class="fa fa-linkedin"> </i></a>
        <a class="btn-floating btn-large ins-bg waves-effect waves-light"><i class="fa fa-instagram"> </i></a>
        <a class="btn-floating btn-large pin-bg waves-effect waves-light"><i class="fa fa-pinterest"> </i></a>
        <a class="btn-floating btn-large yt-bg waves-effect waves-light"><i class="fa fa-youtube"> </i></a>
        <a class="btn-floating btn-large git-bg waves-effect waves-light"><i class="fa fa-github"> </i></a>
        <a class="btn-floating btn-large email-bg waves-effect waves-light"><i class="fa fa-envelope-o"> </i></a>
    </div>


    <div class="footer-copyright text-center rgba-black-light">
        <div class="container-fluid">
            © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>
        </div>
    </div>

</footer>
<!--/.Footer section-->


<!-- SCRIPTS -->
<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/mdb.min.js')}}"></script>

<script>
    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    $('.collapsible').collapsible();
</script>

<script>
    new WOW().init();
</script>


</body>

</html>
