<div class="container overflow-auto">
    <div class="row  mt-3 border shadow-sm rounded bg-white py-3">
        <div class="col-6">
            <img src="<?= $product_details['image'] ?>" alt="<?= $product_details['name'] ?>" style="width: 100%"/>
            <button class="btn btn-primary mt-3">Change Image</button>
        </div>
        <div class="col-6">
            <form action="<?= base_url() . 'products/update'?>" method="post" id="update-form">
            <input type="hidden" name="product_id" value="<?= $product_details['product_id'] ?>">
            <div class="list-group">
                <div class="list-group-item d-flex align-items-center">
                    <div class="col-3 text-right">Name:</div>
                    <div class="col">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $product_details['name']  ?>" placeholder="Name">
                    </div>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <div class="col-3 text-right">Price:</div>
                    <div class="col">
                        <input type="text" class="form-control" id="price" name="price" value="<?= $product_details['price']  ?>" placeholder="Price">
                    </div>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <div class="col-3 text-right">SKU:</div>
                    <div class="col">
                        <input type="text" class="form-control" id="sku" name="sku" value="<?= $product_details['sku']  ?>" placeholder="SKU">
                    </div>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <div class="col-3 text-right">Status:</div>
                    <div class="col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="status" name="status" value="1" <?= $product_details['status'] ? 'checked': '' ?>>
                            <label class="custom-control-label" for="status" ><strong></strong></label>
                        </div>
                        
                    
                    </div>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <div class="col-3 text-right">Description:</div>
                    <div class="col">
                        <textarea name="description" id="description" placeholder="description" class="form-control" rows="3"><?= $product_details['description']  ?></textarea>
                    </div>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <div class="col-3 text-right">Available Quantity:</div>
                    <div class="col">
                        <input type="text" class="form-control" id="available_quantity" name="available_quantity" value="<?= $product_details['available_quantity']  ?>" placeholder="Available Quantity">
                    </div>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <div class="col-3 text-right">Date Added:</div>
                    <div class="col text-muted"><strong><?= $product_details['datetime_added']  ?></strong></div>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <div class="col-3 text-right">Last Modified:</div>
                    <div class="col text-muted"><strong><?= $product_details['datetime_modified']  ?></strong></div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>