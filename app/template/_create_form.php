  <body class="bg-body-tertiary">

      <div class="container">
          <main>
              <div class="py-5 text-center">
                  <h2>Create Hotel</h2>
              </div>
              <div class="row g-5">
                  <div class="col-md-7 col-lg-8">
                      <form class="needs-validation" action="create_hotel.php" method="post" enctype="multipart/form-data">
                          <div class="row g-3">
                              <div class="col-sm-6">
                                  <label for="Hotel_name" class="form-label">Hotel Name</label>
                                  <input type="text" class="form-control" name="Hotel_name" id="Hotel_name" placeholder="" value=""
                                      required>
                                  <div class="invalid-feedback">
                                      Valid Hotel_ is required.
                                  </div>
                              </div>

                              <div class="col-sm-6">
                                  <label for="prize" class="form-label">Price</label>
                                  <input type="text" class="form-control" name="price" id="prize" placeholder="" value=""
                                      required>
                                  <div class="invalid-feedback">
                                      Valid prize is required.
                                  </div>
                              </div>

                              <div class="col-12">
                                  <label for="address" class="form-label">Address</label>
                                  <input type="address" class="form-control" name="Address" id="address" placeholder="1234 Main St"
                                      required>
                                  <div class="invalid-feedback">
                                      Please enter your shipping address.
                                  </div>
                              </div>

                              <div class="col-12">
                                  <label for="offers" class="form-label">offers</label>
                                  <input type="text" class="form-control" name = "offers" id="offers" placeholder="Enter Discounts">
                                  <div class="invalid-feedback">
                                      Please enter your shipping address.
                                  </div>
                              </div>

                              <div class="col-md-5">
                                  <label for="country" class="form-label">Country</label>
                                  <select class="form-select" name="country" id="country" required>
                                      <option value="">Choose...</option>
                                      <option>India</option>
                                  </select>
                                  <div class="invalid-feedback">
                                      Please select a valid country.
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <label for="state" class="form-label">State</label>
                                  <select class="form-select" id="state" name="state" required>
                                      <option value="">Choose...</option>
                                      <option>Chennai</option>
                                      <option>Coimbatore</option>
                                  </select>
                                  <div class="invalid-feedback">
                                      Please provide a valid state.
                                  </div>
                              </div>

                              <div class="col-md-3">
                                  <label for="zip" class="form-label">Zip</label>
                                  <input type="text" class="form-control" name="zip" id="zip" placeholder="zip" required>
                                  <div class="invalid-feedback">
                                      Zip code required.
                                  </div>
                              </div>
                              <div class="col-12">
                                  <label for="image" class="form-label">Hotel Image</label>
                                  <input type="file" class="form-control" name="image" id="image" placeholder="Enter Discounts">
                                  <div class="invalid-feedback">
                                      Please enter your shipping address.
                                  </div>
                              </div>
                          </div>
                          <hr class="my-4">

                          <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="free-cancellation" id="free-cancellation">
                              <label class="form-check-label" for="free-cancellation">Free Cancellation</label>
                          </div>
                          <hr class="my-4">
                          <button class="w-100 btn btn-primary btn-lg" type="submit">Create</button>
                      </form>
                  </div>
              </div>
          </main>
        <div>
<body>