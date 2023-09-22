document.addEventListener('DOMContentLoaded', function() {
    var bookingTrigger = document.getElementById('bookingTrigger');
    var roomCountInput = document.getElementById('roomCount');
    var adultCountInput = document.getElementById('adultCount');
    var childCountInput = document.getElementById('childCount');

    bookingTrigger.addEventListener('click', function() {
        // Show the booking modal when the input field is clicked
        $('#exampleModalCenter').modal('show');
    });

    // Capture room, adult, and child counts when the modal is closed
    $('#exampleModalCenter').on('hidden.bs.modal', function () {
        roomCountInput.value = ''; // Reset values
        adultCountInput.value = '';
        childCountInput.value = '';
    });
});