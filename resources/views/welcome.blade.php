@extends('master')

@section('content')
    <?php $images = ['http://image.shutterstock.com/display_pic_with_logo/90390/270379067/stock-photo-young-people-training-in-the-gym-270379067.jpg',
            'http://thumb1.shutterstock.com/display_pic_with_logo/304216/304216,1326758103,10/stock-photo-group-with-dumbbell-weight-training-equipment-on-sport-gym-92905789.jpg',
            'http://thumb1.shutterstock.com/display_pic_with_logo/84610/123602794/stock-photo-young-people-group-of-women-and-men-doing-sport-biking-in-the-gym-for-fitness-123602794.jpg',
            'http://thumb1.shutterstock.com/display_pic_with_logo/540181/167065400/stock-photo-pretty-girl-working-out-in-a-treadmill-at-the-gym-and-smiling-167065400.jpg',];

    $names = ['Steven', 'Frank', 'Aron', 'Peter']
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
                        <img src="{{ $images[$i] }}" class="img-responsive" alt="">
                        <div class="mask waves-effect activator"></div>
                    </div>

                    <!--Content-->
                    <div class="card-content">
                        <h4>{{ $names[$i] }}</h4>
                        <dl class="dl-horizontal">
                            <p>Currently doing <b>leg press</b> exercises.</p>
                            <br>
                            <dt>Weight</dt>
                            <dd>150 lb</dd>
                            <dt>Height</dt>
                            <dd>5'9"</dd>
                            <dt>BMI</dt>
                            <dd>23</dd>
                            <dt>Personal Trainer</dt>
                            <dd>0:{{ sprintf("%02d", rand(0, 59)) }}:{{ sprintf("%02d", rand(0, 59)) }} left</dd>
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
                            <a class="btn-floating btn-large success-color waves-effect waves-light"><i
                                        class="fa fa-check"> </i></a> Coming
                            <a class="btn-floating btn-large tw-bg waves-effect waves-light"><i
                                        class="fa fa-arrow-right"> </i></a> Reroute
                            <a class="btn-floating btn-large gplus-bg waves-effect waves-light"><i
                                        class="fa fa-ban"> </i></a>
                            Ban
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