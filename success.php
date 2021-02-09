<?php include("inc/header.php"); ?>
<?php $data = isset($_SESSION['product']) ? $_SESSION['product'] : ''; ?>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-success">Product added successfully</div>

                    <h5>product data:</h5>
                    <?php if(! empty($data)) { ?>
                    <ul>
                        <?php foreach($data as $key => $value){ ?>
                        <li><strong><?= $key; ?>:</strong><?= $value; ?></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("inc/footer.php"); ?>