$( document ).ready(function() {
    // Write your custom Javascript codes here...
    Highcharts.chart('container', {
                                            chart: {
                                                type: 'gauge'
//        plotBackgroundColor: null,
//        plotBackgroundImage: null,
//        plotBorderWidth: 0,
//        plotShadow: false
                                            },
                                            title: {
                                                text: ''
                                            },
                                            credits: {
                                                enabled: false
                                            },
                                            exporting: {
                                                enabled: false
                                            },
                                            pane: {
                                                startAngle: -150,
                                                endAngle: 150,
                                                background: [{
                                                        backgroundColor: {
//                                                            linearGradient: {x1: 0, y1: 0, x2: 0, y2: 1},
                                                            stops: [
                                                                [0, '#FFF'],
                                                                [1, '#333']
                                                            ]
                                                        },
                                                        borderWidth: 0,
                                                        outerRadius: '109%'
                                                    }, {
                                                        backgroundColor: {
//                                                            linearGradient: {x1: 0, y1: 0, x2: 0, y2: 1},
                                                            stops: [
                                                                [0, '#333'],
                                                                [1, '#FFF']
                                                            ]
                                                        },
                                                        borderWidth: 1,
                                                        outerRadius: '107%'
                                                    }, {
// default background
                                                    }, {
                                                        backgroundColor: '#DDD',
                                                        borderWidth: 0,
                                                        outerRadius: '105%',
                                                        innerRadius: '103%'
                                                    }]
                                            },

// the value axis
                                            yAxis: {
                                                min: 0,
                                                max: 3,

                                                minorTickInterval: 'auto',
                                                minorTickWidth: 1,
                                                minorTickLength: 10,
                                                minorTickPosition: 'inside',
                                                minorTickColor: '#666',

                                                tickPixelInterval: 30,
                                                tickWidth: 2,
                                                tickPosition: 'inside',
                                                tickLength: 10,
                                                tickColor: '#666',

//                                                type:'category',
//                                                     categories:['Low','Medium','High'],

                                                labels: {
                                                    step: 2,
                                                    rotation: 'auto'
                                                },
//                                                title: {
//                                                    text: 'level'
//                                                },
                                                plotBands: [{
                                                        from: 0,
                                                        to: 1,
                                                        color: '#55BF3B' // green
                                                    }, {
                                                        from: 1,
                                                        to: 2,
                                                        color: '#DDDF0D' // yellow
                                                    }, {
                                                        from: 2,
                                                        to: 3,
                                                        color: '#DF5353' // red
                                                    }]
                                            },

                                            series: [{
                                                    name: 'Risk Level',
                                                    data: [2.3],
                                                    tooltip: {
                                                        valueSuffix: ' level'
                                                    }
                                                }]

                                        },
// Add some life
                                                function (chart) {
                                                    if (!chart.renderer.forExport) {
                                                        setInterval(function () {
                                                            var point = chart.series[0].points[0],
                                                                    newVal,
//                                                                    inc = Math.round((Math.random() - 0.5) * 20);

                                                                    newVal = point.y + inc;
                                                            if (newVal < 0 || newVal > 3) {
                                                                newVal = point.y - inc;
                                                            }

                                                            point.update(newVal);

                                                        }, 3);
                                                    }
                                                }
                                        );
    
});
