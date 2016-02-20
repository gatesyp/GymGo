@extends('master')

@section('content')
    <?php $images = [
            'http://image.shutterstock.com/display_pic_with_logo/90390/270379067/stock-photo-young-people-training-in-the-gym-270379067.jpg',
            'http://thumb1.shutterstock.com/display_pic_with_logo/304216/304216,1326758103,10/stock-photo-group-with-dumbbell-weight-training-equipment-on-sport-gym-92905789.jpg',
            'http://thumb1.shutterstock.com/display_pic_with_logo/84610/123602794/stock-photo-young-people-group-of-women-and-men-doing-sport-biking-in-the-gym-for-fitness-123602794.jpg',
            'http://thumb1.shutterstock.com/display_pic_with_logo/540181/167065400/stock-photo-pretty-girl-working-out-in-a-treadmill-at-the-gym-and-smiling-167065400.jpg',
            'http://thumb9.shutterstock.com/display_pic_with_logo/76219/298454666/stock-photo-front-view-of-a-muscular-couple-doing-planking-exercises-298454666.jpg',
            'http://thumb7.shutterstock.com/display_pic_with_logo/163108/314302445/stock-photo-young-woman-runner-resting-after-workout-session-on-sunny-morning-female-fitness-model-sitting-on-314302445.jpg',
            'http://thumb101.shutterstock.com/display_pic_with_logo/345733/337042967/stock-photo-male-runner-doing-stretching-exercise-preparing-for-morning-workout-in-the-park-337042967.jpg',
            'http://thumb1.shutterstock.com/display_pic_with_logo/1032538/306238778/stock-photo-sportsman-doing-crunches-in-the-gym-306238778.jpg',
            'http://thumb7.shutterstock.com/display_pic_with_logo/113008/169282331/stock-photo-personal-trainer-helping-woman-working-with-heavy-dumbbells-169282331.jpg',
            'http://thumb101.shutterstock.com/display_pic_with_logo/950635/269886053/stock-photo-sportsmen-fit-male-trainer-man-and-woman-doing-clapping-push-ups-explosive-strength-training-269886053.jpg',
            'http://thumb1.shutterstock.com/display_pic_with_logo/64260/337161530/stock-photo-sport-bodybuilding-lifestyle-and-people-concept-young-man-and-woman-with-barbell-flexing-337161530.jpg',
    ];

    $names = ['Reid',
            'Bernardina',
            'Lin',
            'Eloy',
            'Loren',
            'Collin',
            'Cathleen',
            'Reba',
            'Elke',
            'Lucile',
            'Mariko',
            'Kimberlie',
            'Erich',
            'Elois',
            'Gregorio',
            'Natosha',
            'Denese',
            'Annett',
            'Tania',
            'Evelyn',
            'Latrice',
            'Renate',
            'Rosalina',
            'Lesley',
            'Claudia',
            'Imelda',
            'Sherrell',
            'Kareem',
            'Obdulia',
            'Bronwyn',
            'Berneice',
            'Aleisha',
            'Allyn',
            'Cedrick',
            'Aletha',
            'Ben',
            'Rowena',
            'Tonia',
            'Hope',
            'Rosemary',
            'Mariano',
            'Malvina',
            'Kenya',
            'Minh',
            'Kelsi',
            'Latoyia',
            'Coralie',
            'Nigel',
            'Charity',
            'Dolly',];
    ?>

    <div class="divider-new">Clients Requesting Assistance</div>

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
    <script>
        String.prototype.capitalize = function() {
            return this.charAt(0).toUpperCase() + this.slice(1);
        }
        $(document).ready(function () {
            $.get("/issues/", function (data) {
                $.each(data, function (k, v) {
                    $('.client-cards').append('        <div class="col-lg-3 col-md-6">\
                            <!--Stylish Card Light-->\
                    <div class="card stylish-card hoverable wow fadeInUp" data-wow-delay="0.4s">\
                            <div class="view overlay hm-white-slight z-depth-1">\
                            <img src="{{ $images[array_rand($images, 1)] }}" class="img-responsive" alt="">\
                            <div class="mask waves-effect activator"></div>\
                            </div>\
\
                            <!--Content-->\
                            <div class="card-content">\
                            <h4 class="name">' + v.user_name.capitalize() + '</h4>\
                            <dl class="dl-horizontal">\
                            <p class="status">Currently doing <b>' + v.exercise_name + '</b> exercises.</p>\
                    <br>\
                    <dt>Weight</dt>\
                    <dd>{{ rand(120, 210) }} lb</dd>\
                    <dt>Height</dt>\
                    <dd>{{ rand(5, 6) }}\'{{ rand(1, 11) }}"</dd>\
                    <dt>BMI</dt>\
                    <dd>{{ rand(11, 30) }}</dd>\
                    <dt>Personal Trainer</dt>\
                    <dd>\
                    @if(rand(0, 1) == 1)
                                    0:{{ sprintf("%02d", rand(0, 59)) }}:{{ sprintf("%02d", rand(0, 59)) }} left\
                    @else
                                    Not purchased!\
                            @endif
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
    </style>
@endsection