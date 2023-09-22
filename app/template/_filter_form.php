<div class="container-fluid ">
  <div class="container bg-dark">
        <form id="filterForm">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Check-In Date">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Check-Out Date">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Room type">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Location">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Price Range">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Rooms/Number of persons" id="bookingTrigger">
                </div>
            </div>
        </form>

        <!-- Booking Form (modal) -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Booking Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="roomCount">Number of Rooms</label>
                                <input type="text" class="form-control" id="roomCount" placeholder="Enter number of rooms">
                            </div>
                            <div class="form-group">
                                <label for="adultCount">Number of Adults</label>
                                <input type="text" class="form-control" id="adultCount" placeholder="Enter number of adults">
                            </div>
                            <div class="form-group">
                                <label for="childCount">Number of Children</label>
                                <input type="text" class="form-control" id="childCount" placeholder="Enter number of children">
                            </div>
                            <!-- Add more booking form fields as needed -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <script src='../app/js/filter_form.js'></script>

