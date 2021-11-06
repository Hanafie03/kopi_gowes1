<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body id="page-top">
    
    <?php include 'navbar.php' ?> <!--navbar-->

    <?php include 'header.php' ?> <!--header-->

<br>
    
    <div class="container">
        <div class="row">
            <h2>KONTAK KAMI</h2>
            <div class="col-md-8 gy-3">
                <form class="row">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12 gy-2">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12 gy-2">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6 gy-2">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4 gx-3 gy-2">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2 gy-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                        </div>
                    </div>
                    <div class="col-12 gy-3">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 border border-success bg-primary">
                <span class="d-block p-2 text-white">aaksjdhaskhd</span>
            </div>
        </div>

        <br>

        <div class="row border border-warning">
            <section class="" id="services">
                    <div class="row">
                        <div class="col-md-8 border border-success">
                            carosel
                        </div>
                        
                        <div class="col-md-4">
                            <h2>TRY ONE OF OUR FAVORITES</h2>
                            <p>Enjoy your snacking experience. New here and not sure what to try first? Check out some of our most popular snacks and products.</p>
                            <br>
                            <button type="submit" class="btn btn-primary">BELI KUY</button>
                        </div>
                    </div>
            </section>
        </div>

        
    </div>

<br>
    
    <?php include'footer.php'?> <!-- Footer-->
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

</body>

</html>