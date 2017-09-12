$(function () {
    $.get(site + 'dom/paiton', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/paiton', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
    $.get(site + 'dom/pacitan', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/pacitan', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
    $.get(site + 'dom/tanjung_awar_awar', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/tanjung_awar_awar', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
    $.get(site + 'dom/rembang', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/rembang', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
    $.get(site + 'dom/indramayu', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/indramayu', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
    $.get(site + 'dom/muara_tawar', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/muara_tawar', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
    $.get(site + 'dom/muara_karang', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/muara_karang', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
    $.get(site + 'dom/duri', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/duri', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
    $.get(site + 'dom/amurang', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/amurang', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
    $.get(site + 'dom/asahan', function (data) {
        var sample = new Array();
        $.each(data, function (key, value) {
            var waktu = (new Date());
            var year = waktu.getFullYear();
            var month = waktu.getMonth() + 1;
            var date = waktu.getDate();
            var hour = waktu.getHours();
            var min = waktu.getMinutes();
            var sec = waktu.getSeconds();
            var gabung = year + '-' + month + '-' + date + ' ' + hour + ':' + min + ':' + sec;
            sample.push(new Object({unit: 1 + key, MW: value['MW'], MVAR: value['MVAR'], waktu: gabung}));
        });
        $.post(site + 'record/asahan', {input: JSON.stringify(sample)}, function (msg) {
            console.log(msg);
        }, "json");
    });
});