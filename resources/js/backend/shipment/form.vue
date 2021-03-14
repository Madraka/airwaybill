<template>
    <div>
        <form class="form" method="post">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Add Shipment</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="account_number">Account Number:</label>
                                    <select name="account_number" class="form-control select2" style="width: 100%;">
                                        <option >--Choose Account--</option>
                                        <option value="1234">1234</option>
                                        <option value="1235">1235</option>
                                        <option value="1236">1236</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Customer Reference:</label>
                                    <input class="form-control" type="text" name="customer_reference"
                                        id="customer_reference" placeholder="Customer Reference">
                                </div>
                                <!-- /.form-group -->

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="awb_no">AWB No.</label>
                                    <input class="form-control" name="awb_no" type="text" value="3362218565">
                                </div>
                                <div class="form-group clearfix">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-plus"></i>FROM Shippers</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shipper_name">Name:</label>
                                            <input class="form-control" type="text" name="shipper_name" id="shipper_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_address">Address:</label>
                                            <input class="form-control" type="text" name="shipper_address"
                                                id="shipper_address">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_phone">Phone:</label>
                                            <input class="form-control" type="text" name="shipper_phone"
                                                id="shipper_phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="shipper_country">Country</label>
                                            <select name="shipper_country" class="form-control select2"
                                                style="width: 100%;">
                                                <option>--Choose Country--</option>
                                                <!-- @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach -->
                                            </select>
                                        </div>
                                        <!-- /.form-group -->

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shipper_contact_person">Contact Person Name:</label>
                                            <input class="form-control" type="text" name="shipper_contact_person"
                                                id="shipper_contact_person">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_city">City:</label>
                                            <input class="form-control" type="text" name="shipper_city" id="shipper_city">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_state">State/Provinence:</label>
                                            <input class="form-control" type="text" name="shipper_state" id="shipper_state">
                                        </div>
                                        <div class="form-group">
                                            <label for="shipper_postcode">Post/Zipcode:</label>
                                            <input class="form-control" type="text" name="shipper_postcode"
                                                id="shipper_postcode">
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-plus"></i> TO Receiver</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="receiver_name">Name:</label>
                                            <input class="form-control" type="text" name="receiver_name" id="receiver_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_address">Address:</label>
                                            <input class="form-control" type="text" name="receiver_address"
                                                id="receiver_address">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_phone">Phone:</label>
                                            <input class="form-control" type="text" name="receiver_phone"
                                                id="receiver_phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="receiver_country">Country</label>
                                            <select name="receiver_country" class="form-control select2"
                                                style="width: 100%;">
                                                <option>--Choose Country--</option>
                                                <!-- @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach -->
                                            </select>
                                        </div>
                                        <!-- /.form-group -->

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="receiver_contact_person">Contact Person Name:</label>
                                            <input class="form-control" type="text" name="receiver_contact_person"
                                                id="receiver_contact_person">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_city">City:</label>
                                            <input class="form-control" type="text" name="receiver_city" id="receiver_city">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_state">State/Provinence:</label>
                                            <input class="form-control" type="text" name="receiver_state"
                                                id="receiver_state">
                                        </div>
                                        <div class="form-group">
                                            <label for="receiver_postcode">Post/Zipcode:</label>
                                            <input class="form-control" type="text" name="receiver_postcode"
                                                id="receiver_postcode">
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Description Of Goods</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control" type="text" name="goods_description" id="goods_description">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">DECLARED VALUE FOR CUSTOM</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                    <input name="declared_value_for_custom" class="form-control" type="text"
                                        placeholder="USD. 956.00">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Size & Weight</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table dataTable table-bordered">
                            <tbody>
                                <tr>
                                    <td>No. Of Pieces</td>
                                    <td>Kilograms</td>
                                    <td>Grams</td>
                                </tr>
                                <tr>
                                    <td><input name="pieces" class="form-control" type="number" /></td>
                                    <td><input name="kilograms" class="form-control" type="number" /></td>
                                    <td><input name="grams" class="form-control" type="number" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Dimension</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table dataTable table-bordered" id="myTable">
                            <tbody>
                                <tr>
                                    <td>SN</td>
                                    <td>Length</td>
                                    <td>Breadth</td>
                                    <td>Height</td>
                                </tr>
                                {{-- <tr>
                                    <td><input name="pieces" class="form-control" type="number" /></td>
                                    <td><input name="length[]" class="form-control" type="number" /></td>
                                    <td><input name="weight" class="form-control" type="number" /></td>
                                    <td><input name="height" class="form-control" type="number" /></td>
                                </tr> --}}
                            </tbody>
                        </table>
                        <button id="add-row" type="button">Add row</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success float-sm-right">Add</button>
                    </div>
                </div>
                <!-- /.row -->
            </form>
    </div>
</template>
<script>
export default {
    data: function(){
        return{

        }
    },
    methods: {

    }
}
</script>