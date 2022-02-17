jSuites.calendar(document.getElementById('calendar'), {
    format: 'YYYY-MM-DD',
    onupdate: function () {
        document.getElementById('calendar-value');
    }
});