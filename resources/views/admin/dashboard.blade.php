@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div>
                        <canvas id="myChart"></canvas>
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
                                'Sunday',
                                'Monday',
                                'Tuesday',
                                'Wednesday',
                                'Thursday',
                                'Friday',
                                'Saturday'
                            ],
                            datasets: [{
                                data: [
                                    15339,
                                    21345,
                                    18483,
                                    24003,
                                    23489,
                                    24092,
                                    12034
                                ],
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
                            }
                            }
                        })
                        
                      </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection