<?php include("inc/header.php"); ?>
<?php $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : '';?>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    <?php if(! empty($errors)) { ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach($errors as $error) { ?>
                            <li> <?= $error; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                    <form method="POST" action="handlers/handle-add-product.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="name" name="name">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" placeholder="description" rows="3"
                                name=" description"></textarea>
                        </div>

                        <div class="form-group">
                            <label>type</label>
                            <select class="form-control" name="type">
                                <option value="laptop">laptop</option>
                                <option value="pc">pc</option>
                                <option value="mobile">mobile</option>
                                <option value="television">television</option>
                                <option value="tablet">tablet</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="price" name="price">
                        </div>

                        <button type="submit" class="btn btn-primary" name="add">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php session_destroy(); ?>
<?php include("inc/footer.php"); ?>