<div class="row">
        <div class="col-md-12">
            <h4 class="m-b-lg">
                Yeni Ürün Ekle

            </h4>
        </div><!-- END column -->
        <div class="col-md-12">
                <div class="widget">

                    <div class="widget-body">

                        <form action="<?php echo base_url("product/save"); ?>" method="post">
                            <div class="form-group">
                                <label>Ürün Adı</label>
                                <input  class="form-control" placeholder="Başlık" name="title">
                                <?php if(isset($form_error)){ ?>
                                    <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Açıklama</label>
                                <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">Hello Summernote</textarea>
                            </div>


                            <button type="submit" class="btn btn-primary btn-md">Kaydet</button>
                            <a href="<?php echo base_url("product"); ?> " class="btn btn-md  btn-danger ">İptal</a>
                        </form>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
        </div>
</div>