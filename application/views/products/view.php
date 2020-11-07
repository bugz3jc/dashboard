
<?php $fdata = $this->session->flashdata() ?>
<?php if(!empty($fdata)): ?>
        <?php $key = array_keys($fdata)[0] ?>
        <div class="alert alert-<?= $key ?>" role="alert">
            <?= $fdata[$key] ?>
        </div>
<?php endif; ?>
<div class="container overflow-auto">
    <div class="row  mt-3 border shadow-sm rounded bg-white py-3">
        <div class="col-6">
            <img src="<?= $product_details['image'] ?>" alt="<?= $product_details['name'] ?>" style="width: 100%"/>
        </div>
        <div class="col-6">
            
            <div class="list-group">
                <div class="list-group-item d-flex ">
                    <div class="col-3 text-right">Name:</div>
                    <div class="col align-self-center"><strong><?= $product_details['name']  ?></strong></div>
                </div>
                <div class="list-group-item d-flex ">
                    <div class="col-3 text-right">Price:</div>
                    <div class="col align-self-center"><strong><?= money($product_details['price'])  ?></strong></div>
                </div>
                <div class="list-group-item d-flex">
                    <div class="col-3 text-right">SKU:</div>
                    <div class="col"><strong><?= $product_details['sku']  ?></strong></div>
                </div>
                <div class="list-group-item d-flex">
                    <div class="col-3 text-right">Status:</div>
                    <div class="col"><strong><?= $product_details['status'] ? 'Active': 'Inactive' ?></strong></div>
                </div>
                <div class="list-group-item d-flex">
                    <div class="col-3 text-right">Description:</div>
                    <div class="col"><?= $product_details['description']  ?></div>
                </div>
                <div class="list-group-item d-flex ">
                    <div class="col-3 text-right">Available Quantity:</div>
                    <div class="col align-self-center"><strong><?= $product_details['available_quantity']  ?></strong></div>
                </div>
                <div class="list-group-item d-flex ">
                    <div class="col-3 text-right">Date Added:</div>
                    <div class="col align-self-center"><strong><?= $product_details['datetime_added']  ?></strong></div>
                </div>
                <div class="list-group-item d-flex ">
                    <div class="col-3 text-right">Last Modified:</div>
                    <div class="col align-self-center"><strong><?= $product_details['datetime_modified']  ?></strong></div>
                </div>
            </ul>
        </div>
    </div>
</div>