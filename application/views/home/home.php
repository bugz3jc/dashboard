<div class="container mt-3 border shadow-md rounded bg-white">
    <div class="row pt-4 px-3 d-flex justify-content-between">
        <h4>Products</h4>
        <a href="<?=base_url()?>products" class="btn btn-primary">View All</a>
    </div>
    <hr />
    <div class="row py-3">
        <div class="col">
            <div class="card-deck">
                <div class="card bg-light mb-3">
                    <div class="card-header">All Products</div>
                    <div class="card-body">
                        <h1 class="card-title"><?= $product_stats['all'] ?></h1>
                    </div>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header">Active</div>
                    <div class="card-body">
                        <h1 class="card-title"><?= $product_stats['active'] ?></h1>
                    </div>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header">Inactive</div>
                    <div class="card-body">
                        <h1 class="card-title"><?= $product_stats['inactive'] ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>