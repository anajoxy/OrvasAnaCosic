<div class="main">
	<div class="wrapper" id="pad">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Pregled</h4>
                        </div>
                        <div class="panel-body">
                            <?php $attributes = array("name" => "Search");
                            echo form_open("", $attributes);?>
                              <div class="form-group">
                                <label for="name">City</label>
                                <input class="form-control" name="ship_city" placeholder="City Name" type="text" value="<?php echo set_value('ship_city'); ?>" />
                                <span class="text-danger"><?php echo form_error('ship_city'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="subject">Name</label>
                                <input class="form-control" name="ship_name" placeholder="Ship Name" type="text" />
                                <span class="text-danger"><?php echo form_error('ship_name'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="subject">FROM Date</label>
                                <input class="form-control" name="Fship_date" placeholder="FROM Ship Date" type="date" />
                                <span class="text-danger"><?php echo form_error('Fship_date'); ?></span>
                            </div>
                            <div class="form-group">                                
                                <label for="subject">TO Date</label>
                                <input class="form-control" name="Tship_date" placeholder="TO Ship Date" type="date" />
                                <span class="text-danger"><?php echo form_error('Tship_date'); ?></span>

                            <div id="one" class="form-group">
                                <button name="submit" type="submit" class="btn btn-default">Search</button>
                                <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                            </div>
                           
                        </div>
                        
                    </div>
                 </div>
            </div>
      </div>
    </div>
 </div>