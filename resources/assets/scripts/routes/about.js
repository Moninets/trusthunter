import Chart from 'chart.js';

export default {
    init() {
        // JavaScript to be fired on the about us page
        function initChart() {
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ["2010", "2012", "2014", "2016", "2018"],
                    datasets: [{
                        data: [1, 2, 10, 5, 20, 25, 40],
                        borderColor: ['#ffc65b'],
                        backgroundColor: '#fbfbfb',
                        pointBorderRadius: '0',
                    }],
                },

                // Configuration options go here
                options: {
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                                drawBorder: false,
                            },
                        }],

                        yAxes: [{
                            gridLines: {
                                display: false,
                                drawBorder: false,

                            },
                        }],
                    },

                    // showScale: false,
                    legend: {
                        display: false,

                    },
                    elements: {
                        line: {
                            tension: 0.000001,
                        },
                    },
                },
            });
            console.log(chart);
        }


        initChart();
    },
};

