"use strict";
$(document).ready(function() {
    console.log($('.box-content').width());
    $('.show-sidebar').on('click', function() {
        $('div#main').toggleClass('sidebar-show',function (){
            console.log($('.box-content').width());
        });
//        if ($('div#main').hasClass('sidebar-show')) {
//            
//        } else {
//            console.log($('.box-content').width());
//        }

//        $('#container').highcharts().setSize($('.box-content').width(), $('.box-content').height(), true);
    });
});
function WinMove() {
    $("div.box").not('.no-drop')
            .draggable({
                revert: true,
                zIndex: 2000,
                cursor: "crosshair",
                handle: '.box-name',
                opacity: 0.8
            })
            .droppable({
                tolerance: 'pointer',
                drop: function(event, ui) {
                    var draggable = ui.draggable;
                    var droppable = $(this);
                    var dragPos = draggable.position();
                    var dropPos = droppable.position();
                    draggable.swap(droppable);
                    setTimeout(function() {
                        var dropmap = droppable.find('[id^=map-]');
                        var dragmap = draggable.find('[id^=map-]');
                        if (dragmap.length > 0 || dropmap.length > 0) {
                            dragmap.resize();
                            dropmap.resize();
                        }
                        else {
                            draggable.resize();
                            droppable.resize();
                        }
                    }, 50);
                    setTimeout(function() {
                        draggable.find('[id^=map-]').resize();
                        droppable.find('[id^=map-]').resize();
                    }, 250);
                }
            });
}