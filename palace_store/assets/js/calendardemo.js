document.addEventListener('DOMContentLoaded', function () {
    // Date for the calendar events (dummy data)
    var date = new Date()
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var calenderElGrid = document.getElementById('calendarGridView');
    var calenderElList = document.getElementById('calendarListView');
    var checkbox = document.getElementById('drop-remove');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function (eventEl) {
            return {
                title: eventEl.innerText,
                backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color')
            };
        }
    });

    // initialize the calendar
    // -----------------------------------------------------------------

    var calendarGrid = new Calendar(calenderElGrid, {
        // Header toolbar settings
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'timeGridDay,timeGridWeek,dayGridMonth'
        },
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar
        drop: function (info) {
            // is the "remove after drop" checkbox checked?
            if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
                info.draggedEl.parentNode.removeChild(info.draggedEl);
            }
        },

        // Random default events
        events: [{
                title: 'All Day Event',
                start: new Date(y, m, 20),
                backgroundColor: '#ff9060',
                borderColor: '#ff9060',
                allDay: true
            },
            {
                title: 'Long Event',
                start: new Date(y, m, d + 4),
                end: new Date(y, m, d + 8),
                backgroundColor: '#f5c427',
                borderColor: '#f5c427',
                textColor: '#000000'
            },
            {
                title: 'Meeting',
                start: new Date(y, m, d + 2, 10, 30),
                end: new Date(y, m, d + 2, 11, 45),
                allDay: false,
                backgroundColor: '#0073b7',
                borderColor: '#0073b7'
            },
            {
                title: 'Testing App',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
                backgroundColor: '#7b40f4',
                borderColor: '#7b40f4'
            },
            {
                title: 'App publication',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false,
                backgroundColor: '#71b037',
                borderColor: '#71b037'
            },
            {
                title: 'Click for W3Schools',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'https://www.w3schools.com/',
                backgroundColor: '#37adb0',
                borderColor: '#37adb0'
            }
        ],

        initialView: 'dayGridMonth'
    });

    // Render calendar
    calendarGrid.render();

    // Add new event
    var createNewEvent = document.getElementById('addNewEvent');
    createNewEvent.addEventListener("click", () => {
        var eventContainer = document.getElementById('external-events');
        var eventName = document.getElementById('eventNameInput');
        var eventNameInput = document.getElementById('eventNameInput').value;
        var eventColorInput = document.getElementById('colorEventInput').value;
        var textColor = adjustTextColor(eventColorInput);
        if (eventName.value.length == 0) {
            eventName.classList.add("border-danger");
        } else {
            eventName.classList.add("border-success");
            /* ADDING EVENTS */
            var a = document.createElement("div");
            a.className = "fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event p-1 ";
            a.style.backgroundColor = eventColorInput;
            a.style.borderColor = eventColorInput;
            a.style.color = textColor;
            eventContainer.appendChild(a);

            var b = document.createElement("div");
            b.className = "fc-event-main";
            var newEventName = eventNameInput;
            b.style.color = textColor;
            b.append(newEventName);
            a.appendChild(b);
        }
    });

    // Remove event from text input
    createNewEvent.addEventListener("click", () => {
        eventNameInput.value = "";
    });

    // Create listviewdate
    var calendarList = new Calendar(calenderElList, {
        // Header toolbar settings
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'listDay,listWeek,listMonth'
        },
        editable: false,
        droppable: false,

        // Random default events
        events: [{
                title: 'All Day Event',
                start: new Date(y, m, 20),
                backgroundColor: '#ff9060',
                borderColor: '#ff9060',
                allDay: true
            },
            {
                title: 'Long Event',
                start: new Date(y, m, d + 4),
                end: new Date(y, m, d + 8),
                backgroundColor: '#f5c427',
                borderColor: '#f5c427',
                textColor: '#000000'
            },
            {
                title: 'Meeting',
                start: new Date(y, m, d + 2, 10, 30),
                end: new Date(y, m, d + 2, 11, 45),
                allDay: false,
                backgroundColor: '#0073b7',
                borderColor: '#0073b7'
            },
            {
                title: 'Testing App',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
                backgroundColor: '#7b40f4',
                borderColor: '#7b40f4'
            },
            {
                title: 'App publication',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false,
                backgroundColor: '#71b037',
                borderColor: '#71b037'
            },
            {
                title: 'Click for W3Schools',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'https://www.w3schools.com/',
                backgroundColor: '#37adb0',
                borderColor: '#37adb0'
            }
        ],

        initialView: 'listDay'
    });

    // Render calendar
    calendarList.render();
});

function adjustTextColor(bgcolor) {
  var brightness;
 
  // Call lightOrDark function to get the brightness (light or dark)
  brightness = lightOrDark(bgcolor);
  
  // If the background color is dark, change color to white
  if(brightness == 'dark') {
    bgcolor = "#ffffff";
  }
  else {
    bgcolor = "#000000";
  }

  return bgcolor;
}

function lightOrDark(color) {
    // Variables for red, green, blue values
    var r, g, b, hsp;

    // Check the format of the color, HEX or RGB?
    if (color.match(/^rgb/)) {
        // If RGB --> store the red, green, blue values in separate variables
        color = color.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/);

        r = color[1];
        g = color[2];
        b = color[3];
    } else {
        // If hex --> Convert it to RGB: http://gist.github.com/983661
        color = +("0x" + color.slice(1).replace(
            color.length < 5 && /./g, '$&$&'));

        r = color >> 16;
        g = color >> 8 & 255;
        b = color & 255;
    }

    // HSP (Highly Sensitive Poo) equation from http://alienryderflex.com/hsp.html
    hsp = Math.sqrt(
        0.299 * (r * r) +
        0.587 * (g * g) +
        0.114 * (b * b)
    );

    // Using the HSP value, determine whether the color is light or dark
    if (hsp > 127.5) {
        return 'light';
    } else {
        return 'dark';
    }
}
