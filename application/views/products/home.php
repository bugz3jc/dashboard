<div class="container mt-3 border shadow-md rounded bg-white">
    
    <div class="row py-3">
        <div class="col">

            <table class="table table-responsive-md" id="product_list">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check-all">
                            <label class="custom-control-label" for="check-all"></label>
                            </div>
                        </th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $product_list as $product ): ?>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?= $product['product_id'] ?>">
                                    <label class="custom-control-label" for="<?= $product['product_id'] ?>"></label>
                                </div>
                            </td>
                            <td><img src="<?= $product['image'] ?>" class="product-image-thumb" width="150"/></td>
                            <td><a href="<?= base_url() . 'products/view/' . $product['product_id'] ?>" ><?= $product['name'] ?></a></td>
                            <td><?= $product['available_quantity'] ?></td>
                            <td><?= money($product['price']) ?></td>   
                            <td><?= $product['status'] ? 'active': 'inactive';  ?></td>
                            <td>
                                <a href="<?= base_url() . 'products/edit/' . $product['product_id'] ?>" type="button" class="btn btn-secondary">Edit</a>
                            </td>   
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>