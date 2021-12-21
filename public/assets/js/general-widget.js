"use strict";
var general_widget = {
    init: function() {
        $('#owl-carousel-testimonial').owlCarousel({
            loop:true,
            //margin:10,
            items:1,
            nav:false,
            dots:false
        });


        const months = ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"]
        const now = new Date()
        $('#monthDay').append(`${months[now.getMonth()]} ${now.getDate()}`);
        $('#year').append(`${now.getFullYear()}`);
        $(function() {
            setInterval( function() {
                var seconds = new Date().getSeconds();
                var sdegree = seconds * 6;
                var srotate = "rotate(" + sdegree + "deg)";
                $("#sec").css({ "transform": srotate });
            }, 1000 );
            setInterval( function() {
                var hours = new Date().getHours();
                var mins = new Date().getMinutes();
                var hdegree = hours * 30 + (mins / 2);
                var hrotate = "rotate(" + hdegree + "deg)";
                $("#hour").css({ "transform": hrotate});
            }, 1000 );
            setInterval( function() {
                var mins = new Date().getMinutes();
                var mdegree = mins * 6;
                var mrotate = "rotate(" + mdegree + "deg)";
                $("#min").css({ "transform" : mrotate });

            }, 1000 );
        }); 
    }
};

var echart_dashboard = {
    init: function() {
        var myChart = echarts.init(document.getElementById('echart_dashboard'));
        var option;

        option = {
        tooltip: {
            trigger: 'item'
        },
        series: [
            {
                name: 'Sessions',
                type: 'pie',
                radius: ['60%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: '20',
                        fontWeight: 'bold'
                    }
                },
                labelLine: {
                    show: false
                },
                data: [
                    { value: 80, name: 'Completed', itemStyle: {color: '#24695C'},},
                    { value: 20, name: 'Pending', itemStyle: {color: '#202938'}, }
                ]
            }
        ]
        };

        myChart.setOption(option);
    }
};
(function($) {
    "use strict";
    general_widget.init();
    echart_dashboard.init();
})(jQuery);
