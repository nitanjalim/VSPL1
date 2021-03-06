
<div id="main" role="main">
    <div id="ribbon">
        <span class="ribbon-button-alignment"> 
            <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                <i class="fa fa-refresh"></i>
            </span> 
        </span>
        <ol class="breadcrumb" style="width:87%;">
            <?php $this->load->view('admin/layout/breadcrumb') ?>
        </ol>
    </div>
    <div id="content">
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Add blogs</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding">
                                <form class="smart-form" enctype="multipart/form-data" action="<?= site_url('admin/save_blogs'); ?>" method="POST">
                                    <fieldset>
                                        <section  class="col col-6">
                                            <label class="label">Title</label>
                                            <label class="input">
                                                <input type="text" class="input-sm" id="title" value="<?php echo set_value('title', ''); ?>"  placeholder="Name" name="title" >
                                                <span class="error"><?php echo form_error('title'); ?></span>
                                            </label>
                                        </section><section  class="col col-6">
                                            <label class="label">Description</label>
                                            <label class="input">
                                                <input type="text" class="input-sm" id="description" value="<?php echo set_value('description', ''); ?>"  placeholder="Name" name="description" >
                                                <span class="error"><?php echo form_error('description'); ?></span>
                                            </label>
                                        </section><section  class="col col-6">
                                            <label class="label">Image</label>
                                            <label class="input">
                                                <input type="file" class="input-sm" id="image" value="<?php echo set_value('image', ''); ?>"  placeholder="Name" name="image" >
                                                <span class="error"><?php echo form_error('image'); ?></span>
                                            </label>
                                        </section>
                                        <section class="col col-6">
                                            <label class="label">Status</label>
                                            <label class="select">
                                                <?php echo form_dropdown('status', array('Active' => "Active", 'Deactive' => "Deactive"), set_value('status'), 'class="form-control" placeholder="Select Status"'); ?>
                                                <i></i>
                                                <span class="help-block"><?php echo form_error('status'); ?></span>
                                            </label>
                                        </section>
                                    </fieldset>
                                    <footer>

                                        <button type="button" class="btn btn-default" onclick="window.history.back();">Back</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </footer>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
</div>
<script>
    function validateAlpha() {
        var textInput = document.getElementById("cname").value;
        textInput = textInput.replace(/[^A-Za-z ]/g, "");
        document.getElementById("cname").value = textInput;
    }
</script>
