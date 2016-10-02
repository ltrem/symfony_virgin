$(function () {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    $('#calendar-holder').fullCalendar({
        lang: 'fr',
        header: {
            left: 'prev, next',
            center: 'title',
            right: 'month, agendaWeek, agendaDay,'
        },
        slotMinutes: 15,
        minTime: '06:00:00', // a start time (10am in this example)
        maxTime: '19:00:00', // an end time (6pm in this example)
        // days of week. an array of zero-based day of week integers (0=Sunday)
        // (Monday-Thursday in this example)
        lazyFetching: true,
        defaultView: 'agendaWeek',
        timeFormat: {
            // for agendaWeek and agendaDay
            agenda: 'h:mmt',    // 5:00 - 6:30

            // for all other views
            '': 'h:mmt'         // 7p
        },
        eventSources: [
            {
                url: Routing.generate('fullcalendar_loader'),
                cache: false,
                startParam: moment().format(),
                endParam: moment().format(),
                type: 'POST',
                // A way to add custom filters to your event listeners
                data: {
                },
                error: function() {
                    //alert('There was an error while fetching Google Calendar!');
                    console.log('Erreur fullCalendar eventSource');
                }
            }
        ],
        selectable: true,
        selectHelper: true,
        editable: false,
        eventOverlap: false,
        select: function(start, end, allDay) {
            console.log('test');
            endtime = moment(start).add(1, 'hour').format('YYYY-MM-DD HH:mm');
            starttime = moment(start).format('YYYY-MM-DD HH:mm');
            var mywhen = starttime + ' - ' + endtime;
            $('.client_event #event_startTime').val(starttime);
            $('.client_event #event_endTime').val(endtime);
            $('#event_name').focus();

            /* DEMO
                 endtime = moment(end).add(30, 'minutes').format('h:mm a');
                 starttime = moment(start).format('ddd, MMM D, h:mm a');
                 var mywhen = starttime + ' - ' + endtime;
                 $('#fullCalModal #apptStartTime').val(start);
                 $('#fullCalModal #apptEndTime').val(moment(end).add(30, 'minutes'));
                 $('#fullCalModal #apptAllDay').val(allDay);
                 $('#fullCalModal #when').text(mywhen);
                 $('#fullCalModal').modal('show');
             */
            
            /*
            var title = prompt('Event Title:');
            var eventData;
            if (title) {
                eventData = {
                    title: title,
                    start: start,
                    end: end.add(30, 'minutes'),
                };
                $('#calendar-holder').fullCalendar('renderEvent', eventData, true); // stick? = true
            }
            $('#calendar-holder').fullCalendar('unselect');
            */

        },
        dayClick: function(date, jsEvent, view) {

            /*
            console.log(moment(date).format());

            alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

            alert('Current view: ' + view.name);

            // change the day's background color just for fun
            console.log($(this));
            $(this).css('background-color', 'red');
            */

        },
        eventClick: function(calEvent, jsEvent, view) {

            alert('Event: ' + calEvent.title);
            alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
            alert('View: ' + view.name);

            // change the border color just for fun
            $(this).css('border-color', 'red');

        },
    });


    $('#submitButton').on('click', function(e){
        // We don't want this to act as a link so cancel the link action
        e.preventDefault();

        doSubmit();
    });

    function doSubmit(){
        $("#fullCalModal").modal('hide');
        console.log($('#apptStartTime').val());
        console.log($('#apptEndTime').val());
        console.log($('#apptAllDay').val());

        $("#calendar-holder").fullCalendar('renderEvent',
        {
            title: $('#patientName').val(),
            start: $('#apptStartTime').val(),
            end: $('#apptEndTime').val(),
            allDay: ($('#apptAllDay').val() == "true"),
            editable: true,
            eventStartEditable: true,
        },
        true);
        
        $('#calendar-holder').fullCalendar('unselect');
    }
});