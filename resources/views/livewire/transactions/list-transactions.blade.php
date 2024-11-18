<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Transactions</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Transactions
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end mb-2">
                        <button onclick="openNav()" class="btn btn-primary">
                            <i class="fa fa-plus-circle mr-1"></i>Add New Transaction
                        </button>
                    </div>



                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Ref</th>
                                        <th scope="col">Account No.</th>
                                        <th scope="col">Account Name</th>
                                        <th scope="col">Trans Type</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <a href="">
                                                <i class="fa fa-edit mr-2"></i>
                                            </a>
                                            <a href="">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>
                                            <a href="">
                                                <i class="fa fa-edit mr-2"></i>
                                            </a>
                                            <a href="">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>
                                            <a href="">
                                                <i class="fa fa-edit mr-2"></i>
                                            </a>
                                            <a href="">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                <!-- /.col-md-6 -->

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="ml-3 mr-3">
            <form autocomplete="off" wire:submit.prevent="addTransaction">
                <div class="input-group mb-4 mt-3">
                    <label class="input-group-text" for="transtype">Transaction Type</label>
                    <select wire:model.defer="state.transtype" class="form-select selTran" id="transtype">
                        <option value="Money Payed Out" selected>Money Payed Out</option>
                        <option value="Money Received">Money Received</option>
                        <option value="Service Rendered On Credit">Service Rendered ( On Credit )</option>
                        <option value="Service Received On Credit">Service Received ( On Credit )</option>
                        <option value="Goods Sold On Credit">Goods Sold ( On Credit )</option>
                        <option value="Goods Received On Credit">Goods Received ( On Credit )</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">GMD</span>
                    <input type="number" wire:model.defer="state.amount" class="form-control"
                        aria-label="Amount (to the nearest dalasi)">
                    <span class="input-group-text">.00</span>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Description</span>
                    <textarea wire:model.defer="state.description" class="form-control is-invalid" id="validationTextarea"
                        placeholder="Write comments" required aria-label="With textarea"></textarea>
                    @error('description')
                        <div class="invalid-feedback">The description field is required</div>
                    @enderror
                </div>




                <!--<div class="input-group mb-4 mt-3">
                    <label class="input-group-text" for="transtype">Account Entry</label>
                    <select class="form-select selTran" id="transtype">
                        <option selected>Expense - Utilities</option>
                        <option value="1">Expense - Rent</option>
                        <option value="2">Expense - Insurance</option>
                        <option value="3">Expense - Cost of sales</option>
                        <option value="2">Expense - Office Supplies</option>
                        <option value="3">Expense - Accrued</option>
                    </select>
                </div>-->

                <button type="submit" class="btn btn-primary">Save</button>

            </form>



        </div>
    </div>



</div>
