<?php include("include/header.php") ?>
<?php require_once 'admin/connect.php' ?>

<body>
    <div class="container">
        <div class="container container d-flex justify-content-center align-items-center container">
            <h2>Rate us</h2>
        </div>
        <form method="POST" action="submitRatingController.php">
            <div class="row justify-content-center">
                <div class="form-group ol-md-4 col-md-offset-1 align-center">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group ol-md-4 col-md-offset-1 align-center">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" pattern="[A-Za-z\s\W]+" title="Name should contain only alphabets" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4 col-md-offset-1 align-center">
                    <label for="checkin">Rating:</label>
                    <div class="rating">

                        <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-4 col-md-offset-1 align-center">
                    <label for="feedback">Feedback:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="feedback" rows="3"
                        value="Please enter your Feedback here"></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group container container d-flex justify-content-center align-items-center container">
                    <button type="submit" class="btn btn-primary savebtn">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <?php

    $query = "SELECT cust_name, feedback, rating FROM customer_ratings";
    $stmt = $conn->query($query);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <br>
    <div class="container container d-flex justify-content-center align-items-center container">
        <h2>Customer Reviews</h2>
    </div>
    <div class="container">

        <?php foreach ($records as $key => $record): ?>
            <?php if ($key % 2 == 0): ?>
                <div class="row">
                <?php endif; ?>
                <div class="col-md-6 ">
                    <blockquote class="blockquote reviews">
                        <p class="mb-0">
                            <?php echo $record['feedback']; ?>
                        </p>
                        <footer class="blockquote-footer">
                            <?php echo $record['cust_name']; ?>
                        </footer>
                    </blockquote>
                </div>
                <?php if ($key % 2 != 0 || $key == count($records) - 1): ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <script src="js/addons/rating.js"></script>
    <?php include("include/footer.php") ?>