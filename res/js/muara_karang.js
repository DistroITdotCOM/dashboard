var chart;
$(document).ready(function() {
    var options = {
        chart: {
            renderTo: 'muara_karang',
            type: 'spline',
            animation: Highcharts.svg,
            marginRight: 10,
            events: {
                load: function() {
                    var series = this.series[0];
                    var series1 = this.series[1];
                    var series2 = this.series[2];
                    var series3 = this.series[3];
                    var series4 = this.series[4];
                    setInterval(function() {
                        $.get(site + 'dom/muara_karang', function(data) {
                            var x = (new Date()).getTime();
                            series.addPoint([x, data[0]['MW']], true, false);
                        });
                    }, 10000);
                    setInterval(function() {
                        $.get(site + 'dom/muara_karang', function(data) {
                            var x = (new Date()).getTime();
                            series1.addPoint([x, data[1]['MW']], true, false);
                        });
                    }, 10000);
                    setInterval(function() {
                        $.get(site + 'dom/muara_karang', function(data) {
                            var x = (new Date()).getTime();
                            series2.addPoint([x, data[2]['MW']], true, false);
                        });
                    }, 10000);
                    setInterval(function() {
                        $.get(site + 'dom/muara_karang', function(data) {
                            var x = (new Date()).getTime();
                            series3.addPoint([x, data[3]['MW']], true, false);
                        });
                    }, 10000);
                    setInterval(function() {
                        $.get(site + 'dom/muara_karang', function(data) {
                            var x = (new Date()).getTime();
                            series4.addPoint([x, data[4]['MW']], true, false);
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
            }, {
                name: 'Unit 3',
                data: []
            }, {
                name: 'Unit 4',
                data: []
            }, {
                name: 'Unit 5',
                data: []
            }]
    }
    $.getJSON(site + "api/muara_karang", function(data) {
        options.series[0].data = data[0][0];
        options.series[1].data = data[1][0];
        options.series[2].data = data[2][0];
        options.series[3].data = data[3][0];
        options.series[4].data = data[4][0];
        new Highcharts.Chart(options);
    });
});