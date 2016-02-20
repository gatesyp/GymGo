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

    <div class="divider-new">Active Queue</div>
    @for ($z = 0; $z < 3; $z++)

            <!--Main row-->
    <div class="row">

        @for ($i = 0; $i < 4; $i++)

            <div class="col-lg-3 col-md-6">
                <!--Stylish Card Light-->
                <div class="card stylish-card hoverable wow fadeInUp" data-wow-delay="0.4s">
                    <div class="view overlay hm-white-slight z-depth-1">
                        <img src="{{ $images[array_rand($images, 1)] }}" class="img-responsive" alt="">
                        <div class="mask waves-effect activator"></div>
                    </div>

                    <!--Content-->
                    <div class="card-content">
                        <h4>{{ $names[array_rand($names, 1)] }}</h4>
                        <dl class="dl-horizontal">
                            <p>Currently doing <b>leg press</b> exercises.</p>
                            <br>
                            <dt>Weight</dt>
                            <dd>{{ rand(120, 210) }} lb</dd>
                            <dt>Height</dt>
                            <dd>{{ rand(5, 6) }}'{{ rand(1, 11) }}"</dd>
                            <dt>BMI</dt>
                            <dd>{{ rand(11, 30) }}</dd>
                            <dt>Personal Trainer</dt>
                            <dd>
                                @if(rand(0, 1) == 1)
                                    0:{{ sprintf("%02d", rand(0, 59)) }}:{{ sprintf("%02d", rand(0, 59)) }} left
                                @else
                                    Not purchased!
                                @endif
                            </dd>
                        </dl>
                        <div class="card-footer text-right">
                                    <span class="card-title activator grey-text text-darken-4">Take action <i
                                                class="fa fa-chevron-right"></i></span>
                        </div>
                    </div>

                    <!--Social Shares-->
                    <div class="card-reveal social-reveal">
                        <span class="card-title grey-text text-darken-4">Actions<i
                                    class="material-icons right">close</i></span>
                        <hr>
                        <div class="text-center">
                            <a class="btn-floating btn-large tw-bg waves-effect waves-light"><i
                                        class="fa fa-arrow-right"> </i></a> Respond
                            <a class="btn-floating btn-large success-color waves-effect waves-light"><i
                                        class="fa fa-check"> </i></a> Finished
                        </div>
                    </div>

                </div>
                <!--/.Stylish Card Light-->
            </div>

        @endfor

    </div>
    <!--/.Main row-->

    @endfor

@endsection