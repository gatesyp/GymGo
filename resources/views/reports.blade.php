@extends('master')

@section('content')

    <?php
        $k = json_decode(file_get_contents('http://api.reimaginebanking.com/accounts/56c66be6a73e492741507c8f/transfers?key=fab8d98dc85bc29afbe6b9915f27a0e7'));

    ?>

    <div class="row">
        <div class="col-md-6">
            <h2>Revenue for Trainers</h2>
            <canvas id="lineChart"></canvas>
        </div>
        <div class="col-md-6">
            <h2>Client Activity</h2>
            <canvas id="barChart"></canvas>
        </div>
    </div>
    <h2 class="text-center">Exercises with most issues</h2>
    <canvas id="radChart"></canvas>

@endsection

@section('customjs')
    <script>

        var option = {
            responsive: true,
        };

        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        // Get the context of the canvas element we want to select
        var ctx = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctx).Line(data, option); //'Line' defines type of the chart.

        var ctx = document.getElementById("barChart").getContext('2d');
        var myBarChart = new Chart(ctx).Bar(data, option);

        var data = {
            labels: ["Leg Press", "Chest Press", "Lateral Pulldown", "Pullup", "Bicep Curl", "Dumbbell Fly", "Shrug"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        var ctx = document.getElementById("radChart").getContext('2d');
        var myRadarChart = new Chart(ctx).Radar(data, option);

    </script>
@endsection