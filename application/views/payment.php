<div class="container my-5">
    <div class="row">
        <div class="col-lg-4">
            <img src="<?= asset_url('img/Ship2BharatQRCODE.jpeg') ?>" alt="" class="img-fluid">
        </div>
        <div class="col-lg-8 pt-5">
            <div class="card shadow-lg border-0 mt-5">
                <div class="card-body">
                    <div class="card-header">
                        <h4 class="card-title text-center">Generate Payment Link</h4>
                    </div>
                    <form class="row g-3 payment needs-validation mt-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact No</label>
                            <input type="number" name="contact" placeholder="" class="form-control" id="contact" min="0" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email ID</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" min="1" id="amount" required>
                        </div>
                        <div class="col-12 mb-5">
                            <label for="description" class="form-label">Description </label>
                            <select name="description" id="description" class="form-control">
                                <option value="">Select Description</option>
                                <option value="Ship2Bharat Franchise Partner Fee">Ship2Bharat Franchise Partner Fee</option>
                                <option value="Wallet Recharge">Wallet Recharge</option>
                            </select>
                        </div>
                        <a href="javascript:void(0);" class="card-link btn btn-success gen-paylink">Send Payment Link</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>