  <div id="page-wrapper">

      <div class="row">
          <div class="col-md-12">
              <?php echo $this->session->flashdata('message'); ?>
              <!-- Form Elements -->
              <div class="panel panel-default">

                  <div class="panel-heading">
                      <?php if(isset($pagetitle)) echo $pagetitle;
							
							$currency = $this->config->item('site_settings')->currency_symbol;
							
							$count = count($order_products)+count($order_offers);
							?>

                      <a title="<?php echo get_languageword('go_to_list'); ?>" class="btn btn-primary btn-xs pull-right"
                          href="<?php echo URL_DM_ORDERS;?>"><i class="fa fa-list"></i>
                      </a>
                  </div>

                  <div class="panel-body">

                      <div class="row">

                          <div class="col-md-6">

                              <ul class="table-list ul">

                                  <li><span><?php echo get_languageword('order_no');?>:</span><?php if(isset($order->order_id)) echo $order->order_id;?>
                                  </li>


                                  <li><span><?php echo get_languageword('order_date');?>:</span><?php if(isset($order->order_date) && $order->order_date != '') echo get_date($order->order_date);?>
                                  </li>


                                  <li><span><?php echo get_languageword('order_time');?>:</span>
                                      <?php if(isset($order->order_time) && $order->order_time != '') echo $order->order_time;?>
                                  </li>

                                  <li><span><?php echo get_languageword('delivery_cost');?>:</span><?php if(isset($order->delivery_fee)) echo $currency.$order->delivery_fee;?>
                                  </li>


                                  <li><span><?php echo get_languageword('order_cost');?>:</span><?php if(isset($order->total_cost)) echo $currency.($order->total_cost - $order->delivery_fee);?>
                                  </li>


                                  <li><span><?php echo get_languageword('paid_amount');?>:</span><?php if(isset($order->paid_amount)) echo $currency.$order->paid_amount;?>
                                  </li>


                                  <li><span><?php echo get_languageword('is_points_redeemed');?>:</span><?php if(isset($order->is_points_redeemed)) echo $order->is_points_redeemed;?>
                                  </li>


                                  <?php if($order->is_points_redeemed=='Yes') {?>

                                  <li><span><?php echo get_languageword('no_of_points_redeemed');?>:</span><?php if(isset($order->no_of_points_redeemed)) echo $order->no_of_points_redeemed;?>
                                  </li>


                                  <li><span><?php echo get_languageword('points_value');?>:</span><?php if(isset($order->points_value)) echo $currency.$order->points_value;?>
                                  </li>

                                  <?php } ?>

                                  <li><span><?php echo get_languageword('booked_date');?>:</span><?php if(isset($order->date_created)) echo $order->date_created;?>
                                  </li>



                                  <li><span><?php echo get_languageword('status');?>:</span><?php if(isset($order->status)) echo ucwords(str_replace('_',' ',$order->status));?>
                                  </li>


                              </ul>


                          </div>


                          <div class="col-md-6">


                              <ul class="table-list ul">


                                  <li><span><?php echo get_languageword('customer_name');?>:</span><?php if(isset($order->customer_name)) echo $order->customer_name;?>
                                  </li>



                                  <li><span><?php echo get_languageword('phone');?>:</span>
                                      <?php if(isset($order->phone)) echo $order->phone;?></li>



                                  <li><span><?php echo get_languageword('house_number');?>:</span>
                                      <?php if(isset($order->house_no)) echo $order->house_no;?></li>


                                  <li><span><?php echo get_languageword('street');?>:</span>
                                      <?php if(isset($order->street)) echo $order->street;?></li>

                                  <li><span><?php echo get_languageword('landmark');?>:</span>
                                      <?php if(isset($order->landmark)) echo $order->landmark;?></li>



                                  <li><span><?php echo get_languageword('locality');?>:</span>
                                      <?php if(isset($order->locality)) echo $order->locality;?></li>

                                  <li><span><?php echo get_languageword('city');?>:</span>
                                      <?php if(isset($order->city)) echo $order->city;?></li>


                                  <li><span><?php echo get_languageword('zipcode');?>:</span>
                                      <?php if(isset($order->pincode)) echo $order->pincode;?></li>


                                  <?php if($order->km_id>0) {?>

                                  <li><span><?php echo get_languageword('kitchen_manager');?>:</span>
                                      <?php if(isset($order->kitchen_manager)) echo $order->kitchen_manager;?></li>


                                  <?php } ?>


                                  <?php if($order->dm_id > 0) {?>

                                  <li><span><?php echo get_languageword('delivery_manager');?>:</span>
                                      <?php if(isset($order->delivery_manager)) echo $order->delivery_manager;?></li>



                                  <?php } ?>


                              </ul>

                          </div>



                          <?php if(isset($order) && ($order->status=='out_to_deliver')) {?>
                          <div class="form-group">
                              <div class="buttos text-right">
                                  <a class="btn btn-success" data-toggle="modal" data-target="#update_Modal"><i
                                          class="fa fa-edit"></i> <?php echo get_languageword('order_update');?></a>
                              </div>
                          </div>
                          <?php } ?>
                      </div>


                      <!--ORDER ITEMS-->
                      <h3><?php echo get_languageword('order_items');?></h3>
                      <div class="table-responsive table1">
                          <table cellspacing="10" width="100%" id="example" class="display responsive nowrap"
                              border="1">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th><?php echo get_languageword('item_name');?></th>
                                      <th><?php echo get_languageword('option');?></th>
                                      <th><?php echo get_languageword('item_cost');?></th>
                                      <th><?php echo get_languageword('item_quantity');?></th>
                                      <th><?php echo get_languageword('total_cost');?></th>
                                      <th><?php echo get_languageword('is_deleted');?></th>

                                  </tr>
                              </thead>

                              <?php if(isset($order_products) && !empty($order_products)) { ?>
                              <tbody>
                                  <?php 
						$i=0;
						foreach($order_products as $product):
						$i++;?>
                                  <tr>
                                      <td><?php echo $i;?></td>
                                      <td><?php echo $product->item_name;?></td>
                                      <td><?php echo $product->size_name;?></td>
                                      <td><?php echo $currency.$product->item_cost;?></td>
                                      <td><?php echo $product->item_qty;?></td>
                                      <td><?php echo $currency.$product->final_cost;?></td>
                                      <td><?php if($product->is_deleted==0) echo get_languageword('no'); else if($product->is_deleted==1) echo get_languageword('yes');?>
                                      </td>

                                  </tr>
                                  <?php endforeach; ?>
                              </tbody>
                              <?php } ?>
                          </table>
                      </div>
                      <!--ORDER ITEMS-->

                      <?php if(isset($order_addons) && !empty($order_addons)) { ?>
                      <!--ORDER ADDONS-->
                      <h3><?php echo get_languageword('order_addons');?></h3>
                      <div class="table-responsive table1">
                          <table cellspacing="10" width="100%" id="example" class="display responsive nowrap"
                              border="1">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th><?php echo get_languageword('item_name');?></th>
                                      <th><?php echo get_languageword('item_cost');?></th>
                                      <th><?php echo get_languageword('item_quantity');?></th>
                                      <th><?php echo get_languageword('total_cost');?></th>
                                      <th><?php echo get_languageword('is_deleted');?></th>
                                  </tr>
                              </thead>

                              <?php if(isset($order_addons) && !empty($order_addons)) { ?>
                              <tbody>
                                  <?php 
						$i=0;
						foreach($order_addons as $addon):
						$i++;?>
                                  <tr>
                                      <td><?php echo $i;?></td>
                                      <td><?php echo $addon->addon_name;?></td>
                                      <td><?php echo $currency.$addon->price;?></td>
                                      <td><?php echo $addon->quantity;?></td>
                                      <td><?php echo $currency.$addon->final_cost;?></td>
                                      <td><?php if($addon->is_deleted==0) echo get_languageword('no'); else if($addon->is_deleted==1) echo get_languageword('yes');?>
                                      </td>
                                  </tr>
                                  <?php endforeach; ?>
                              </tbody>
                              <?php } ?>
                          </table>
                      </div>
                      <!--ORDER ADDONS--> <?php } ?>


                      <!--ORDER OFFERS--> <?php if(isset($order_offers) && !empty($order_offers)) { ?>
                      <h3><?php echo get_languageword('order_offers');?></h3>
                      <div class="table-responsive table1">
                          <table cellspacing="10" width="100%" id="example" class="display responsive nowrap"
                              border="1">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th><?php echo get_languageword('offer_name');?></th>
                                      <th><?php echo get_languageword('offer_cost');?></th>
                                      <th><?php echo get_languageword('offer_quantity');?></th>
                                      <th><?php echo get_languageword('total_cost');?></th>
                                      <th><?php echo get_languageword('no_of_products');?></th>
                                      <th><?php echo get_languageword('is_deleted');?></th>

                                  </tr>
                              </thead>

                              <?php if(isset($order_offers) && !empty($order_offers)) { ?>
                              <tbody>
                                  <?php 
						$i=0;
						foreach($order_offers as $offer):
						$i++;?>
                                  <tr>
                                      <td><?php echo $i;?></td>
                                      <td><?php echo $offer->offer_name;?></td>
                                      <td><?php echo $currency.$offer->offer_cost;?></td>
                                      <td><?php echo $offer->offer_quantity;?></td>
                                      <td><?php echo $currency.$offer->offer_final_cost;?></td>
                                      <td><?php echo $offer->no_of_products;?></td>
                                      <td><?php if($offer->is_deleted==0) echo get_languageword('no'); else if($offer->is_deleted==1) echo get_languageword('yes');?>
                                      </td>

                                  </tr>
                                  <?php endforeach; ?>
                              </tbody>
                              <?php } ?>
                          </table>
                      </div> <?php } ?>
                      <!--ORDER OFFERS-->


                  </div>
                  <!-- End Form Elements -->
              </div>
          </div>

          <!-- /. PAGE INNER  -->
      </div>
      <!-- /. PAGE WRAPPER  -->



      <!--UPDATE Modal-->
      <div class="modal fade" id="update_Modal" role="dialog">
          <div class="order-modal-dialog">

              <?php echo form_open(URL_DM_UPDATE_ORDER,array('id'=>'order_status_form'));?>
              <!-- Modal content-->
              <div class="modal-content order-content">
                  <div class="order-modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><?php echo get_languageword('update');?></h4>
                  </div>
                  <div class="modal-body">

                      <div class="form-group">
                          <label><?php echo get_languageword('update_order_status').required_symbol();?></label>
                          <?php 
			$status = array(''=>get_languageword('select'),
						'delivered'=>get_languageword('delivered')
						);
			$val='';
			echo form_dropdown('order_status',$status,$val,'class="form-control chzn-select"');			
			?>
                      </div>

                      <input type="hidden" name="order_id" id="order_id" value="<?php echo $order->order_id;?>">
                  </div>
                  <div class="order-modal-footer modal-footer">

                      <button type="submit" name="update_order_status"
                          class="btn btn-primary"><?php echo get_languageword('yes');?></button>

                      <button type="button" class="btn btn-default"
                          data-dismiss="modal"><?php echo get_languageword('no');?></button>
                  </div>
              </div>
              <?php echo form_close();?>

          </div>
      </div>
      <!--UPDATE Modal-->


      <script type="text/javascript">
      function get_km_div(status) {
          $("#km_id").val('');
          $("#km_id").trigger("liszt:updated");
          $("#km_div").fadeOut();

          $("#dm_id").val('');
          $("#dm_id").trigger("liszt:updated");
          $("#dm_div").fadeOut();

          if (status != '') {
              if (status == 'process')
                  $("#km_div").fadeIn();
              else if (status == 'out_to_deliver')
                  $("#dm_div").fadeIn();
          }
      }

      function get_dm_div(status) {
          $("#dm_id").val('');
          $("#dm_id").trigger("liszt:updated");

          $("#dm_div").fadeOut();
          if (status != '' && status == 'out_to_deliver') {
              $("#dm_div").fadeIn();
          }
      }
      </script>
      <script type="text/javascript" src="<?php echo JS_VALIDATE_MIN;?>"></script>
      <script type="text/javascript">
      (function($, W, D) {
          var JQUERY4U = {};

          JQUERY4U.UTIL = {
              setupFormValidation: function() {
                  //Additional Methods

                  //form validation rules
                  $("#order_status_form").validate({
                      ignore: "",
                      rules: {
                          order_status: {
                              required: true
                          }

                      },

                      messages: {
                          order_status: {
                              required: "<?php echo get_languageword('please_select_order_status');?>"
                          }

                      },

                      submitHandler: function(form) {
                          form.submit();
                      }
                  });
              }
          }

          //when the dom has loaded setup form validation rules
          $(D).ready(function($) {
              JQUERY4U.UTIL.setupFormValidation();
          });

      })(jQuery, window, document);
      </script>