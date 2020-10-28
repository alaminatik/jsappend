
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .custom_input{
        width: 84px;
        text-align: center;
        margin-top: 0px;
    }
</style>
<div class="row-fluid sortable">
    <div class="box span12">

        <div class="box-header" data-original-title>

            <h2><strong><i class="halflings-icon plus"></i><span class="break"></span><font style="color: #990099">New Invoice</font></strong></h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>

        <?php
        $message = $this->session->userdata('message');
        if ($message) {
            ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong></strong> 
                <?php
                echo $message;
                $this->session->unset_userdata('message');
                ?>
            </div>
        <?php } ?>

        <div class="box-content">

            <form class="form-horizontal" action="<?php echo site_url('Super_Admin/store_invoice'); ?>" method="post" enctype="multipart/form-data">
                <fieldset class="table-responsive">
                    <!--                    <div style="width:20px;margin:0px auto;margin-top:30px;height:50px;">-->
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Customer Name </label>
                        <div class="controls">
                            <select class="customer_name form-control auto_select" style="width: 435px;" name="customer_name_id" >
                                <option disabled="true" selected>Select Customer Name</option>
                                <?php foreach ($customers as $c) { ?>
                                    <option value="<?php echo $c->customer_id.','.$c->customer_name ; ?>"><?php echo $c->customer_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Date </label>
                        <div class="controls">
                            <input type="date" class="span6 typeahead" id="typeahead" name="invoice_date">

                        </div>
                    </div>

                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>

                            <tr>
                                <th>Product Information</th>
                                <th style="height: 15%" width="14%">Available Ctn.</th>
                                <th style="height: 15%" width="8%">Carton</th>
                                <th style="height: 15%" width="14%">Product Item</th>
                                <th style="height: 15%" width="15%">Product Quantity</th>
                                <th style="height: 15%" width="14%">Product Price</th>
                                <th style="height: 15%" width="10%">Product Discount/pcs</th>
                                <th style="height: 15%" width="15%">Total</th>
                                <th>Actions</th>
                            </tr>

                        </thead>   
                        <tbody class="wraper">

                            <tr class="clone result">

                                <td>
                                    <select name="product_id[]" id="product_name"  class="product_name" style="margin-top: 0px;">
                                        <option disabled="true" selected>Select Product Name</option>
                                        <?php foreach ($all_published_product as $v_product) { ?>
                                            <option  value="<?php echo $v_product->product_id; ?>">
                                                <?php echo $v_product->product_name;?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control custom_input avl_ctn" style="height: 100%; width: 88%;" type="number" name="available_ctn[]" id="" readonly="">
                                </td>
                                <td>
                                    <input class="form-control custom_input carton" style="height: 100%; width: 86%;" type="number" value="" name="carton[]" id="" placeholder="0.00">
                                </td>

                                <td>
                                    <input class="form-control custom_input item" style="height: 100%; width: 90%;" type="number" name="product_item[]" id="" readonly="">
                                </td>

                                <td>
                                    <input class="form-control custom_input quantity" style="height: 100%; width: 90%;" type="number" name="product_quantity[]" id="" placeholder="0.00" readonly="">
                                </td>

                                <td>
                                    <input class="form-control custom_input rate" style="height: 100%; width: 90%;" type="number" name="product_price[]" id="" readonly="">
                                </td>

                                <td>
                                    <input class="form-control custom_input discount" style="height: 100%; width: 90%;" type="number" name="product_discount[]" id="" readonly="">
                                </td>

                                <td>
                                    <input class="form-control custom_input total" style="height: 100%; width: 90%;" type="number" name="total_amount[]" id="" readonly="">
                                </td>

                                <td>
                                    <a class="btn btn-danger delete"><i class="halflings-icon white trash"></i></a>
                                </td>

                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan = "7" style = "text-align: right;" ><strong>Total Discount:</strong></td>
                                <td>
                                    <input value="" style = "height: 100%; width: 100%;" type = "text" class = "span6 typeahead" id="total_discount" name = "total_discount" readonly="" placeholder="0.00">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan = "7" style = "text-align: right;"><strong>Grand Total:</strong></td>
                                <td>
                                    <input value="" style = "height: 100%; width: 100%;" type = "text" class = "span6 typeahead" id="grand_total" name = "grand_total" readonly="" placeholder="0">
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <button type = "button" class = "btn btn-success add">Add New Items</button>
                                </td>
                                <td colspan = "6" style = "text-align: right;"><strong>Paid Amount:</strong></td>

                                <td>
                                    <input style = "height: 100%; width: 100%;" type = "number" value="" class = "span6 typeahead" id = "paid_amount" name = "paid_amount" placeholder="0.00">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <button type = "submit" class = "btn btn-primary">Save</button>
                                    <button type = "reset" class = "btn">Reset</button>
                                </td>
                                <td colspan = "6" style = "text-align: right;"><strong>Due:</strong>


                                </td>

                                <td>
                                    <input value="" style = "height: 100%; width: 100%;" type = "number" class = "span6 typeahead" id="due_amount" name = "due_amount" readonly="" placeholder="0">

                                </td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>


                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div>

<script type="text/javascript">

    $(function () {
        $(document).on('change', '.product_name', function () {
            var product_id = $(this).val();
            var base_url = "<?php echo base_url(); ?>";

            var avl = $(this).parent().siblings().find('.avl_ctn');
            var carton = $(this).parent().siblings().find('.carton');
            var item = $(this).parent().siblings().find('.item');
            var quantity = $(this).parent().siblings().find('.quantity');
            var rate = $(this).parent().siblings().find('.rate');
            var discount = $(this).parent().siblings().find('.discount');
            var total = $(this).parent().siblings().find('.total');

            $.ajax({
                type: 'get',
                url: base_url + 'Super_Admin/new_newinvoice/' + product_id,
                dataType: 'json',
                success: function (data) {

                    if ($.trim(data)) {
                        avl.val(data.available_ctn);
                        carton.val(0);
                        item.val(data.product_item);
                        quantity.val(0);
                        rate.val(data.sell_price);
                        discount.val(data.product_discount);

                    } else {

                    }

                }
            });

        });

        $(document).on('keyup', '.carton', function () {
            var amount = parseFloat($(this).val());
            var item = parseFloat($(this).parent().siblings().find('.item').val());
            var $quantity = $(this).parent().siblings().find('.quantity');
            var quantity = item * amount;
            $quantity.val(quantity);

            var rate = parseFloat($(this).parent().siblings().find('.rate').val());
            var discount = parseFloat($(this).parent().siblings().find('.discount').val());
            

            var $total = $(this).parent().siblings().find('.total');
            $total.val(rate * quantity);



            //counting the grant total
            var $grand_total = $('#grand_total');
            var $total_discount = $("#total_discount");
            var $due_amount = $('#due_amount');
            var $paid_amount = $('#paid_amount');

            var sum_discount = 0;
            $(".result").children().find('.discount').each(function () {
                var qnt = parseFloat($(this).parent().siblings().find('.quantity').val());
                var val = parseFloat($(this).val());
                
                sum_discount += val*qnt;
            });
            $total_discount.val(sum_discount);

//            total sum
            var sum_total = 0;
            $(".result").children().find('.total').each(function () {
                var val = parseFloat($(this).val());
                sum_total += val;
            });
            $grand_total.val(sum_total - sum_discount);

            $due_amount.val(sum_total - sum_discount);



        });

        $(document).on('keyup', '#paid_amount', function () {
            var val = parseFloat($(this).val());
            var total = 0;
            total = parseFloat($("#grand_total").val());
            $('#due_amount').val(total - val);
        });


    });

</script>