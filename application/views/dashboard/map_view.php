<div id="content" class="col-xs-12 col-sm-10">
    <div class="row">
        <div id="breadcrumb" class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#">Map</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-map-marker"></i>
                        <span id="total"></span>
                    </div>
                    <div class="box-icons">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <div class="no-move"></div>
                </div>
                <div class="box-content">
                    <div id="map_canvas" style="min-height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAWJH6AmcOpVee_n_d1YBDMMFKVTIjlejQ&sensor=false"></script>
<script>
    $(function () {
        var j = 0;
        var map;
        var mw = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        var total = 0;
        var marker = [];
        var infowindow = [];
        var unit = [
            'Paiton',
            'Pacitan',
            'Tanjung Awar-awar',
            'Rembang',
            'Indramayu',
            'Muara Tawar',
            'Muara Karang',
            'Duri',
            'Amurang',
            'Asahan',
            'Bangka',
            'Kendari',
            'Tidore',
            'Bolok',
            'Ropa',
            'Aceh',
            'Bawean',
            'Belitung',
            'Banjarsari'
        ];

        function initialize() {
            var myOptions = {
                zoom: 5,
                scrollwheel: false,
                center: new google.maps.LatLng(-1.58183, 114.256836),
                mapTypeId: google.maps.MapTypeId.HYBRID
            };
            map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
            var lokasi = [[-7.711259, 113.571161, 'green', 0],
                [-8.258006, 111.374094, 'green', 1],
                [-6.810891, 111.996195, 'green', 2],
                [-6.636267, 111.474371, 'green', 3],
                [-6.275231, 107.970844, 'green', 4],
                [-6.086519, 106.998569, 'green', 5],
                [-6.110069, 106.787201, 'green', 6],
                [1.073858, 101.281220, 'green', 7],
                [1.182031, 124.480384, 'green', 8],
                [2.512160, 99.262535, 'green', 9],
                [-2.078979, 106.148785, 'green', 10],
                [-3.895211, 122.537416, 'green', 11],
                [0.738078, 127.388972, 'green', 12],
                [-10.239133, 123.490645, 'green', 13],
                [-8.509026, 121.701402, 'green', 14],
                [5.186197, 96.943393, 'green', 15],
                [-5.847869, 112.646331, 'green', 16],
                [-2.89557, 107.562773, 'green', 17],
                [-3.725619, 103.691471, 'green', 18]
            ];
            for (i = 0; i < lokasi.length; i++) {
                addMarker(lokasi[i]);
                infowindow[i] = new google.maps.InfoWindow();
            }

            function addMarker(m) {
                marker[m[3]] = new google.maps.Marker({
                    position: new google.maps.LatLng(m[0], m[1]),
                    map: map,
                    icon: 'http://labs.google.com/ridefinder/images/mm_20_' + m[2] + '.png',
                    draggable: false
                });
            }

            function addWindow(m, i) {
                var content = '';
                content += '<b>' + unit[i] + '</b><br>';
                for (var j = 0; j < m.length; j++) {
                    if (Math.round(m[j]['MW']) % 1 === 0) {
                        content += "Unit " + (j + 1) + " = " + m[j]['MW'] + " MW<br>";
                        if (i === 0)
                            mw[0] = parseFloat(m[0]['MW']);
                        if (i === 1) {
                            mw[1] = parseFloat(m[0]['MW']);
                            mw[2] = parseFloat(m[1]['MW']);
                        }
                        if (i === 2) {
                            mw[3] = parseFloat(m[0]['MW']);
                            mw[4] = parseFloat(m[1]['MW']);
                        }
                        if (i === 3) {
                            mw[5] = parseFloat(m[0]['MW']);
                            mw[6] = parseFloat(m[1]['MW']);
                        }
                        if (i === 4) {
                            mw[7] = parseFloat(m[0]['MW']);
                            mw[8] = parseFloat(m[1]['MW']);
                            mw[9] = parseFloat(m[2]['MW']);
                        }
                        if (i === 5) {
                            mw[10] = parseFloat(m[0]['MW']);
                            mw[11] = parseFloat(m[1]['MW']);
                        }
                        if (i === 6) {
                            mw[12] = parseFloat(m[0]['MW']);
                            mw[13] = parseFloat(m[1]['MW']);
                            mw[14] = parseFloat(m[2]['MW']);
                            mw[15] = parseFloat(m[3]['MW']);
                            mw[16] = parseFloat(m[4]['MW']);
                        }
                        if (i === 7) {
                            mw[17] = parseFloat(m[0]['MW']);
                        }
                        if (i === 8) {
                            mw[18] = parseFloat(m[0]['MW']);
                            mw[19] = parseFloat(m[1]['MW']);
                        }
                        if (i === 9) {
                            mw[20] = parseFloat(m[0]['MW']);
                            mw[21] = parseFloat(m[1]['MW']);
                        }
                        total = mw[0] + mw[1] + mw[2] + mw[3] + mw[4] + mw[5] + mw[6] + mw[7] + mw[8] + mw[9] + mw[10] + mw[11] + mw[12] + mw[13] + mw[14] + mw[15] + mw[16] + mw[17] + mw[18] + mw[19] + mw[20] + mw[21];
                        $('#total').html('Titik lokasi O&M PJBS => ' + total.toFixed(2) + ' MW');
                    }
                }
                infowindow[i].setContent(content);
            }

            function loop() {
                $.get(site + 'dom/paiton', function (data) {
                    addWindow(data, 0);
                });
                $.get(site + 'dom/pacitan', function (data) {
                    addWindow(data, 1);
                });
                $.get(site + 'dom/tanjung_awar_awar', function (data) {
                    addWindow(data, 2);
                });
                $.get(site + 'dom/rembang', function (data) {
                    addWindow(data, 3);
                });
                $.get(site + 'dom/indramayu', function (data) {
                    addWindow(data, 4);
                });
                $.get(site + 'dom/muara_tawar', function (data) {
                    addWindow(data, 5);
                });
                $.get(site + 'dom/muara_karang', function (data) {
                    addWindow(data, 6);
                });
                $.get(site + 'dom/duri', function (data) {
                    addWindow(data, 7);
                });
                $.get(site + 'dom/amurang', function (data) {
                    addWindow(data, 8);
                });
                $.get(site + 'dom/asahan', function (data) {
                    addWindow(data, 9);
                });
                j++;
                if (j === 10) {
                    infowindow[(j - 1)].close(map, marker[(j - 1)]);
                    j = 0;
                } else {
                    infowindow[j - 1].close(map, marker[j - 1]);
                }
                infowindow[j].open(map, marker[j]);
                setTimeout(loop, 15000);
            }
            loop();
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        WinMove();
    });
</script>