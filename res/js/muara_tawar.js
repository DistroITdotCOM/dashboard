var chart;
$(document).ready(function() {
    var options = {
        chart: {
            renderTo: 'muara_tawar',
            type: 'spline',
            animation: Highcharts.svg,
            marginRight: 10,
            events: {
                load: function() {
                    var series = this.series[0];
                    var series1 = this.series[1];
                    setInterval(function() {
                        $.get(site + 'dom/muara_tawar', function(data) {
                            var x = (new Date()).getTime();
                            series.addPoint([x, data[0]['MW']], true, false);
                        });
                    }, 10000);
                    setInterval(function() {
                        $.get(site + 'dom/muara_tawar', function(data) {
                            var x = (new Date()).getTime();
                            series1.addPoint([x, data[1]['MW']], true, false);
                        });
                    }, 10000);
                }
            }
        },
        title: {
            text: ''
        },
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            min: 1,
            title: {
                text: 'Beban (MW)'
            },
            plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y, 2);
            }
        },
        legend: {
            align: 'bottom'
        },
        exporting: {
            enabled: false
        },
        plotOptions: {
            spline: {
                lineWidth: 2,
                states: {
                    hover: {
                        lineWidth: 2
                    }
                },
                marker: {
                    enabled: false
                }
            }
        },
        series: [{
                name: 'Unit 1',
                data: []
            }, {
                name: 'Unit 2',
                data: []
            }]
    }
    $.getJSON(site + "api/muara_tawar", function(data) {
        options.series[0].data = data[0][0];
        options.series[1].data = data[1][0];
        new Highcharts.Chart(options);
    });
});