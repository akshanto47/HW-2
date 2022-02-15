<?php include 'pages/include/header.php';?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>


            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="<?php echo $product['image'] ?>" alt="" class="card-img-top" style="height: 250px">
                    <div class="card-body">
                    <h4><?php echo $product['name']; ?> </h4>
                        
                        <p><?php echo $product['description']; ?> </p>
                        <small class="text-mute"> <?php echo $product['price'] ?>  </small>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</section>
<?php include 'pages/include/footer.php';?>
