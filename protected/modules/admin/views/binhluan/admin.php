<!-- Start Page Header -->

<div class="page-header">
    <h1 class="title">Quản lý bình luận</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li class="active"><a href="#">Quản lý bình luận </a></li>
    </ol>
</div>
<!-- End Page Header -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->

<div class="container-widget">

    <!-- Start Fourth Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default ad-qllt">
                <div class="panel-title">
                    <h1>Quản lý bình luận </h1>
                    <ul class="panel-tools">
                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    </ul>
                   
                </div>
                <div class="panel-body table-responsive">
                    <div id="example0_wrapper" class="dataTables_wrapper">

                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id' => 'post-grid',
                            'dataProvider' => $model->search(),
                            'filter' => $model,
                            'columns' => array(
                                array(
                                    'header' => 'STT',
                                    'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                                ),
                                 array(
                                      'name' => 'tintuc_lang.Name',
                                      'header' =>'Bài viết',
                                    'filter' => CHtml::textField('Name', Yii::app()->request->getParam('Name')),
                                    ),
                                 
                                  array(
                                    'name'=>'Content',
                                    'type'=>'raw',
                                    
                                    ),
                                  array(
                                    'name' => 'CountLike',
                                    ),
                               array(
                                    'name'=>'Active',
                                    'type'=>'raw',
                                    'value'=>'$data->Active == 0 ? "<span style=\"color:red;font-size:22px\" state=\"1\" class=\"fa fa-close\" ></span>":"<span style=\"color:#399bff;font-size:22px\" state=\"1\" class=\"fa fa-check\" ></span>"',
                                    'filter'=>array(1=>'Có',0=>'Không')
                                    ),
                                array(
                                    'class' => 'CButtonColumn',
                                    'template' => '{update}{delete}',
                                    'buttons' => array(
                                        'update' => array(
                                            'label' => '',
                                            'imageUrl' => '',
                                            'options' => array('class' => 'fa fa-edit'),
                                            
                                        ),
                                        'delete' => array(
                                            'label' => '',
                                            'imageUrl' => '',
                                            'url'=>'Yii::app()->homeUrl."admin/loaitin/delete/id/".$data->id.".html"',
                                            'options' => array('class' => 'fa fa-trash-o'),
                                            'click' => 'function() {
                                                    var url = jQuery(this).attr("href");
                                                    swal({
                                                        title: "Bạn có chắc muốn xóa?",
                                                        text: "Bạn sẽ không thể khôi phục tập tin này!",
                                                        type: "warning",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#DD6B55",
                                                        confirmButtonText: "Vâng, tôi muốn xóa!",
                                                        closeOnConfirm: false
                                                    },
                                                    function(){
                                                            var th = this,
                                                            afterDelete = function(){};
                                                            jQuery("#post-grid").yiiGridView("update", {
                                                                type: "POST",
                                                                url: url,
                                                                success: function(data) {
                                                                    jQuery("#post-grid").yiiGridView("update");
                                                                    afterDelete(th, true, data);
                                                                    swal("Đã xóa!", "Thông tin đã bị xóa.", "success");
                                                                },
                                                                error: function(XHR) {
                                                                    swal("Xảy ra lỗi!", "Liên hệ admin để khắc phục.", "error");
                                                                    return afterDelete(th, false, XHR);
                                                                }
                                                            });
                                                            return false;
                                                    });
                                                    return false;
                                                }',
                                        ),
                                    ),
                                ),
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fourth Row -->
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->