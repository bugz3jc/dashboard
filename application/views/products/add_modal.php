<div class="modal fade" tabindex="-1" id="create-product-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url()?>products/create" id="create-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="currency">$</span>
                    </div>
                    <input type="text" class="form-control numeric-only" id="price" name="price" required>
                </div>
                <small id="price-help" class="form-text text-danger" style="display:none;"><strong>Invalid Input</strong></small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="status" name="status" checked value="1">
                <label class="form-check-label" for="status">Active</label>
            </div>
            <div class="form-group">
                <label for="name">SKU</label>
                <input type="text" class="form-control" id="sku" name="sku" required>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Next</button>
        </form>
      </div>
    </div>
  </div>
</div>