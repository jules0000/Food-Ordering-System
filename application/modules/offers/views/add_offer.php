  <div id="page-wrapper">

      <div class="row">
          <div class="col-md-12">
              <?php echo $this->session->flashdata('message'); ?>
              <!-- Form Elements -->
              <div class="panel panel-default">

                  <div class="panel-heading">
                      <?php if(isset($pagetitle)) echo $pagetitle;?>

                      <a title="<?php echo get_languageword('go_to_list'); ?>" class="btn btn-primary btn-xs pull-right"
                          href="<?php echo URL_OFFERS_INDEX; ?>"><i class="fa fa-list"></i>
                      </a>
                  </div>
                  <div class="panel-body">

                      <div class="row">
                          <?php
						$attributes = array('name'=>'offer_form','id'=>'offer_form');
						echo form_open_multipart(URL_ADD_OFFER,$attributes);?>

                          <div class="col-md-6">

                              <div class="form-group">
                                  <label><?php echo get_languageword('offer_name').required_symbol();?></label>
                                  <?php
						$val='';
						if(isset($_POST))
						{
							$val = set_value('offer_name');
						}
						
						$element = array('name'=>'offer_name',
						'value'=>$val,
						'class'=>'form-control');
						echo form_input($element).form_error('offer_name');
						?>
                              </div>

                              <div class="form-group">
                                  <label><?php echo get_languageword('offer_price').required_symbol();?></label>
                                  <?php
						$val='';
						if(isset($_POST))
						{
							$val = set_value('offer_cost');
						}
						
						$element = array('name'=>'offer_cost',
						'value'=>$val,
						'class'=>'form-control');
						echo form_input($element).form_error('offer_cost');
						?>
                              </div>

                              <div class="form-group">
                                  <label><?php echo get_languageword('offer_start_date').required_symbol();?></label>
                                  <?php
						$val='';
						if(isset($_POST))
						{
							$val = set_value('offer_start_date');
						}
						
						$element = array('name'=>'offer_start_date',
						'value'=>$val,
						'class'=>'form-control dpd1'
						
						);
						echo form_input($element).form_error('offer_start_date');
						?>
                              </div>

                              <div class="form-group">
                                  <label><?php echo get_languageword('offer_valid_date').required_symbol();?></label>
                                  <?php
						$val='';
						if(isset($_POST))
						{
							$val = set_value('offer_valid_date');
						}
						
						$element = array('name'=>'offer_valid_date',
						'value'=>$val,
						'class'=>'form-control dpd1'
						);
						echo form_input($element).form_error('offer_valid_date');
						?>
                              </div>

                          </div>

                          <div class="col-md-6">

                              <div class="form-group">
                                  <label><?php echo get_languageword('offer_image_name').required_symbol();?>(<small><strong><?php echo ALLOWED_TYPES;?></strong></small>)</label>
                                  <input type="file" name="offer_image_name" title="Offer Image"
                                      onchange="photo(this,'offer_image_name')">

                                  <?php 
							$src = "";
							$style="display:none;";
							if(isset($record->offer_image_name) && $record->offer_image_name != "" && file_exists(OFFER_IMG_UPLOAD_PATH_URL.$record->offer_image_name)) 
							{
								$src = OFFER_IMG_PATH.$record->offer_image_name;
								$style="";
							}
							?>
                                  <img id="offer_image_name" src="<?php echo $src;?>" style="<?php echo $style;?>">
                              </div>

                              <div class="form-group">
                                  <label><?php echo get_languageword('offer_conditions').required_symbol();?></label>
                                  <?php
						$val='';
						if(isset($_POST))
						{
							$val = set_value('offer_conditions');
						}
						
						$element = array('name'=>'offer_conditions',												'id'=>'offer_conditions',
						'value'=>$val,												'maxlength'=>'100',
						'class'=>'form-control');
						echo form_textarea($element).form_error('offer_conditions');
						?>
                              </div>

                              <div class="form-group">
                                  <label><?php echo get_languageword('status').required_symbol();?></label>
                                  <?php
						$val='';
						if(isset($_POST))
						{
							$val = set_value('status');
						}
						
						echo form_dropdown('status',activeinactive(),$val,'class="chzn-select form-control"').form_error('status');
						?>
                              </div>

                          </div>


                          <!--ITEMS-->
                          <div class="col-md-12">

                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label><?php echo get_languageword('menu_name').required_symbol();?></label>
                                      <?php echo form_dropdown('menu_name',$categories,set_select('menu_name'),'class="chzn-select" id="menu_name" onchange="get_items(this.value)"');?>
                                      <?php echo form_error('menu_name'); ?>
                                  </div>
                              </div>

                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label><?php echo get_languageword('item_name').required_symbol();?></label>
                                      <?php echo form_dropdown('item_name', [], set_select('item_name'),'class="chzn-select" id="item_name"');?>
                                      <?php echo form_error('item_name'); ?>
                                  </div>
                              </div>

                              <div class="col-md-3">
                                  <label><?php echo get_languageword('quantity');?><span
                                          style="color:red;">*</span></label>
                                  <?php echo form_input('quantity',set_value('quantity'),'id="quantity" class="form-control"'); ?>
                              </div>

                              <div class="col-md-3">
                                  <input type="hidden" name="product_count" id="product_count" value="1">
                                  <label><?php echo get_languageword('add_remove');?></label>

                                  <input type="button" name="add" class="btn btn-primary" onclick="AddRow();" id="btn"
                                      value="+">

                                  <input type="button" name="reset" class="btn btn-warning" onclick="removeRow();"
                                      value="-">

                                  <input type="hidden" name="product_counts" id="product_counts">
                              </div>

                              <table class="table table-bordered" id="first">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th><?php echo get_languageword('menu_name');?></th>
                                          <th><?php echo get_languageword('item_name');?></th>
                                          <th><?php echo get_languageword('quantity');?></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table>

                              <div class="form-group pull-right">
                                  <button type="submit" name="add_offer" value="add_offer"
                                      class="btn btn-primary"><?php echo get_languageword('save');?></button>

                                  <a class="btn btn-warning"
                                      href="<?php echo URL_OFFERS_INDEX;?>"><?php echo get_languageword('cancel');?></a>
                              </div>

                          </div>
                          <!--ITEMS-->

                          <?php echo form_close();?>
                      </div>
                  </div>
              </div>
              <!-- End Form Elements -->
          </div>
      </div>

      <!-- /. PAGE INNER  -->
  </div>
  <!-- /. PAGE WRAPPER  -->


  <!-- Form Validation Plugins /Start -->
  <?php if(!empty($css_js_files) && in_array('form_validation', $css_js_files)) { ?>

  <link href="<?php echo CSS_ADMIN_OR_BOOTSTRAP_VALIDATOR;?>" rel="stylesheet">
  <script type="text/javascript" src="<?php echo JS_ADMIN_BOOTSTRAP_VALIDATOR;?>"></script>
  <script type="text/javascript">
$(document).ready(function() {
    $('#offer_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        /* feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        }, */
        framework: 'bootstrap',
        excluded: ':disabled',
        fields: {
            offer_name: {
                validators: {
                    notEmpty: {
                        message: '<?php echo get_languageword('offer_name_required');?>'
                    }
                }
            },
            offer_cost: {
                validators: {
                    notEmpty: {
                        message: '<?php echo get_languageword('offer_price_required');?>'
                    }
                }
            },
            offer_start_date: {
                validators: {
                    notEmpty: {
                        message: '<?php echo get_languageword('offer_start_date_required');?>'
                    }
                }
            },
            offer_valid_date: {
                validators: {
                    notEmpty: {
                        message: '<?php echo get_languageword('offer_valid_date_required');?>'
                    }
                }
            },
            offer_image_name: {
                validators: {
                    file: {
                        extension: 'jpeg,jpg,png,gif,svg',
                        type: 'image/jpeg,image/png,image/gif,image/svg',
                        message: '<?php echo get_languageword('offer_image_is_not_valid_file');?>'
                    }
                }
            },
            offer_conditions: {
                validators: {
                    notEmpty: {
                        message: '<?php echo get_languageword('offer_conditions_required');?>'
                    }
                }
            }

        },
        submitHandler: function(validator, form, submitButton) {
            form.submit();
        }
    })
});

function get_items(menu_id) {
    $("#item_name").empty();
    $("#item_name").trigger('liszt:updated');
    if (menu_id > 0) {
        $.ajax({
            type: 'POST',
            async: false,
            cache: false,
            url: "<?php echo base_url();?>offers/get_items",
            data: '<?php echo $this->security->get_csrf_token_name();?>=<?php echo $this->security->get_csrf_hash();?>&menu_id=' +
                menu_id,
            success: function(data) {
                if (data != '' && data != 0) {
                    $('#item_name').empty();
                    $('#item_name').append(data);
                } else if (data == 999) {
                    window.location = '<?php echo SITEURL;?>';
                }
                $("#item_name").trigger("liszt:updated");
            }
        });
    }
}
  </script>

  <link href="<?php echo ALERTIFY_MIN_CSS;?>" rel="stylesheet">
  <script type="text/javascript" src="<?php echo ALERTIFY_MIN_JS;?>"></script>
  <script type="text/javascript">
var prod = [];

function AddRow() {
    var menu_id = $("#menu_name option:selected").val();
    var item_id = $('#item_name option:selected').val();
    var quantity = $('#quantity').val();

    if (menu_id == '') {
        alertify.error("<?php echo get_languageword('menu_required');?>");
    } else if (item_id == '') {
        alertify.error("<?php echo get_languageword('item_required');?>");
    } else if (quantity == '') {
        alertify.error("<?php echo get_languageword('quantity_required');?>");
    } else if (isNaN(quantity)) {
        alertify.error("<?php echo get_languageword('please_enter_numbers_only');?>");
    } else if (in_array(item_id, prod)) {
        alertify.error("<?php echo get_languageword('already_existed');?>");
    } else {
        var cnt = $("#product_count").val();
        var ncnt = cnt;
        var sno = cnt;

        $('#first tr').last().after('<tr><th scope="row">' + sno + '</th><td><input type="text" readonly name="menu' +
            ncnt + '" id="menu' + ncnt + '" value="' + $('#menu_name option:selected').text() +
            '" class="form-control"><input type="hidden" name="menu_id' + ncnt + '" id="menu_id' + ncnt +
            '" value="' + $('#menu_name option:selected').val() + '"></td><td><input type="text" readonly value="' +
            $('#item_name option:selected').text() + '" name="item_name' + ncnt + '" id="item_name' + ncnt +
            '" class="form-control"><input type="hidden" value="' + $('#item_name option:selected').val() +
            '" name="item_id' + ncnt + '" id="item_id' + ncnt + '"></td><td><input type="text" value="' + $(
                '#quantity').val() + '" name="quantity' + ncnt + '" id="quantity' + ncnt +
            '" class="form-control"></td></tr>');

        cnt = ++cnt;
        $("#product_count").val(cnt);
        $("#product_counts").val(cnt);

        prod.push(item_id);
    }
}

function in_array(search, array) {
    for (i = 0; i < array.length; i++) {
        if (array[i] == search) {
            return true;
        }
    }
    return false;
}

function removeRow() {
    table = document.getElementById("first");
    var rowno = table.rows.length;

    if (table.rows.length > 1) {
        var cnt = $("#product_count").val();
        var ncnt = --cnt;
        var item_id = $('#item_id' + ncnt).val();

        prod = jQuery.grep(prod, function(value) {
            return value != item_id;
        });

        $('#first tr:last-child').remove();

        $("#product_count").val(ncnt);
        $("#product_counts").val(ncnt);
    }
    $("#product_counts").val("");
}
  </script>
  <?php } ?>


  <script type="text/javascript" src="<?php echo JS_ADMIN_BOOTSTRAP_MAXLENGTH_MIN;?>"></script>
  <script type="text/javascript">
$('textarea').maxlength({
    alwaysShow: true,
    threshold: 10,
    warningClass: "label label-success",
    limitReachedClass: "label label-danger",
    separator: ' out of ',
    preText: 'You write ',
    postText: ' chars.',
    validate: true
});
  </script>