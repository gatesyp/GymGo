@extends('master')

@section('content')
    <div class="divider-new">GymGo Clients</div>

    <button class="waves-effect waves-light btn btn-default filter" data-filter="all">All</button>
    <button class="waves-effect waves-light btn btn-default filter" data-filter=".category-1">Requesting help</button>

    <!--Main row-->
    <div class="row client-cards">


    </div>
    <!--/.Main row-->


    <button type="button" class="waves-effect waves-light btn btn-default modal-trigger hidden" href="#modal1">Click
        me
    </button>

    <!-- Modal Structure -->
    <div id="modal1" class="modal bottom-sheet">

        <div class="modal-content">
            <h4 class="text-center">Select a Trainer</h4>
            <div class="container-fluid">
                <div class="row">
                    <form class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <select>
                                    <option value="" disabled selected>Select a trainer</option>
                                    <option value="1">Matt</option>
                                    <option value="2">Frank</option>
                                    <option value="3">Steve</option>
                                </select>
                            </div>
                        </div>

                        <button type="button" class="btn btn-block btn-success waves-effect waves-light modal-close">
                            Go!
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" data-dismiss="modal1" class="btn btn-danger modal-action modal-close">Close</a>
        </div>
    </div>

@endsection

@section('customjs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script>
        function getRandomArbitrary(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        String.prototype.capitalize = function () {
            return this.charAt(0).toUpperCase() + this.slice(1);
        }

        $(document).ready(function () {
            $.get("/users/", function (data) {

                var supports = 0;
                $.each(data, function (k, v) {
                    var randSupport = false;
                    if (getRandomArbitrary(0, 1) == 1 && supports < 3) {
                        supports++;
                        randSupport = true;
                    }
                    $('.client-cards').append('<div class="col-lg-3 col-md-6 mix ' + (randSupport ? 'category-1' : '') + '" data-my-order="' + (k + 1) + '">\
                            <!--Stylish Card Light-->\
                    <div class="card stylish-card hoverable wow fadeInUp" data-wow-delay="0.4s">\
                            <div class="view overlay hm-white-slight z-depth-1">\
                            <img src="http://api.randomuser.me/portraits/' + (getRandomArbitrary(0, 1) == 0 ? 'women' : 'men') + '/' + k + '.jpg" class="img-responsive" alt="">\
                            <div class="mask waves-effect activator"></div>\
                            </div>\
\
                            <!--Content-->\
                            <div class="card-content">\
                            <h4 class="name">' + v.user.capitalize() + '</h4>\
                            <dl class="dl-horizontal">\
                            <p class="status">Currently doing <b>' + v.exercise_name + '</b> exercises.</p>\
                    <br>\
                    <dt>Weight</dt>\
                    <dd>' + getRandomArbitrary(120, 210) + ' lb</dd>\
                    <dt>Height</dt>\
                    <dd>' + getRandomArbitrary(5, 6) + "'" + getRandomArbitrary(1, 11) + '</dd>\
                    <dt>BMI</dt>\
                    <dd>' + getRandomArbitrary(11, 30) + '</dd>\
                    <dt>Personal Trainer</dt>\
                    <dd>\
                    ' + ((getRandomArbitrary(0, 1) == 1) ? ('0:' + getRandomArbitrary(1, 59) + ':' + getRandomArbitrary(1, 59) + ' left') : 'No purchased membership') + '\
                                    </dd>\
                                    </dl>\
                                    <div class="card-footer text-right">\
                                        <span class="card-title activator grey-text text-darken-4">Take action <i\
                                                class="fa fa-chevron-right"></i></span>\
                                            </div>\
                                            </div>\
                                                    \
                                            <!--Social Shares-->\
                                            <div class="card-reveal social-reveal">\
                                            <span class="card-title grey-text text-darken-4">Actions<i\
                                            class="material-icons right close-me">close</i></span>\
                                            <hr>\
                                            <div class="text-center">\
                                            <a class="btn-floating btn-large tw-bg respond waves-effect waves-light"><i\
                                            class="fa fa-arrow-right"> </i></a> Respond\
                                            <a class="btn-floating btn-large success-color finished waves-effect waves-light"><i\
                                            class="fa fa-check"> </i></a> Finished\
                                            </div>\
                                            </div>\
                                                    \
                                            </div>\
                                            <!--/.Stylish Card Light-->\
                                            </div>');
                });

                $('.client-cards').mixItUp();

                $('.respond').on('click', function () {
                    $('button[href="#modal1"]').click();

                    var that = $(this);
                    $('#modal1 .modal-close.btn-success').on('click', function () {
                        if (!that) return;
                        $(that).closest('.stylish-card').find('.alert').remove();
                        $(that).closest('.stylish-card').first().css('border', '#2D94FF 2px dashed');
                        $(that).closest('.card-reveal').first().find('.close-me').click();
                        $(that).closest('.stylish-card').first().find('.name').after('<div class="alert alert-info">Trainer assisting client...</div>').hide().slideDown('slow');
                        that = null;
                    })
                });

                $('.finished').on('click', function () {
                    $(this).closest('.stylish-card').find('.alert').remove();
                    $(this).closest('.stylish-card').css('border', '2px solid rgb(91, 171, 93)');
                    $(this).closest('.card-reveal').find('.close-me').click();
                    $(this).closest('.stylish-card').find('.name').after('<div class="alert alert-success">Assistance complete!</div>').hide().slideDown('slow');
                    $(this).closest('.stylish-card').find('.card-footer').hide();
                });
            });
        });
    </script>
@endsection

@section('customcss')
    <style>
        .client-cards .mix {
            display: none;
        }
    </style>
@endsection