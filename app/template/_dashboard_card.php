<div class="card mb-3" style="width: 100%;">
    <div class="row g-0">
        <!-- Hotel Image -->
        <img src="data:image/jpeg;base64,<?php echo $hotel_image; ?>" class="img-fluid rounded-start" alt="Hotel Image">
        </div>
        <!-- Hotel Details -->
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $hotel_name; ?></h5>
                <p class="card-text">Price: $<?php echo $price; ?> per night</p>
                <p class="card-text">Address: <?php echo $address; ?></p>
                <p class="card-text">Offers: <?php echo $offers; ?></p>
                <p class="card-text">State: <?php echo $State; ?></p>
                <p class="card-text">Zip: <?php echo $zip; ?></p>
                <p class="card-text">Free Cancellation: <?php echo $free_cancellation; ?></p>
            </div>
        </div>
    </div>
</div>