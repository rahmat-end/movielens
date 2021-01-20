$(function() {
	altair_gantt.init();
});

altair_gantt = {
    init: function() {
        var $gantt_chart = $('#gantt_chart');
        if($gantt_chart.length) {
            $gantt_chart.ganttView({
                data: ganttData, // gantt data
                endDate: '12/31/2015',
                // showToday: true, // highlight today
                // startToday: true, // scroll to today
                behavior: {
                    onClick: function (data) {
                        console.log("You clicked on an event: "+"\n", data);
                    },
                    onResize: function (data) {
                        console.log('You resized an event: '+"\n", data);
                    },
                    onDrag: function (data) {
                        console.log("You dragged an event: "+"\n", data);
                    }
                }
            });

            $gantt_chart.find('[title]').each(function() {
                $(this).attr('data-uk-tooltip',"{offset:4}");
            })

        }
    }
};