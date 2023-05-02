@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    @if (Auth::user()->apartments->count()>0)
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Visualizzazioni mensili') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Visualizzazioni giornaliere') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div>
                        <canvas id="myDoughnutChart"></canvas>
                    </div>
                </div>
            </div>
            @else
            <div class="no-statistics">

                <h3>Le tue statistiche appariranno qui</h3>
        
            </div>
            @endif
        </div>
    </div>
    <script>
        // const ctx = document.getElementById('myChart');
        // new Chart(ctx, {
        //   type: 'bar',
        //   data: {
        //     labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        //     datasets: [{
        //       label: '# of Votes',
        //       data: [1, 19, 3, 5, 2, 3],
        //       borderWidth: 1
        //     }]
        //   },
        //   options: {
        //     scales: {
        //       y: {
        //         beginAtZero: true
        //       }
        //     }
        //   }
        // });
        const ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
            labels: [
                'Gennaio',
                'Febbraio',
                'Marzo',
                'Aprile',
                'Maggio',
                'Giugno',
                'Luglio',
                'Agosto',
                'Settembre',
                'Ottobre',
                'Novembre',
                'Dicembre'
            ],
            datasets: [{
                data: [
                    15339,
                    21345,
                    18483,
                    24003,
                    23489,
                    24092,
                    12034,
                    13056,
                    20560,
                    22465,
                    20320,
                    25025
                ],
                label:'Andamento annuale',
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
            },
            options: {
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: false
                }
                }]
            },
            legend: {
                display: false
            },
            }
        })

        const dnc = document.getElementById('myDoughnutChart')
        // eslint-disable-next-line no-unused-vars
        const myDoughnutChart = new Chart(dnc, {
            type: 'doughnut',
            data: {
            labels: [
                'Lunedì',
                'Martedì',
                'Mercoledì',
                'Giovedì',
                'Venerdì',
                'Sabato',
                'Domenica'
            ],
            datasets: [{
                data: [
                    300,
                    50,
                    100,
                    200,
                    40,
                    150,
                    120
                ],
                backgroundColor: [
                    'rgb(255, 99, 132)', //rosso
                    'rgb(54, 162, 235)', //blu
                    'rgb(255, 205, 86)', //giallo
                    'rgb(52, 228, 75)', //verde
                    'rgb(238, 131, 44)', //arancione
                    'rgb(128, 44, 238)', //viola
                    'rgb(44, 215, 238)' //azzurro
                    ],
                    hoverOffset: 4
                }]
            }
        });
    </script>
</div>
@endsection