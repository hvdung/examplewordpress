<div id="quickview" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="product-gallery">
            <div class="owl-carousel owl-theme main-slider">
                <div class="item">
                    <a href="#"><img src="http://via.placeholder.com/300x200" alt=""></a>
                </div>
            </div>
        </div>
        <div class="info">
            <p class="desc"></p>
            <b>Giá sản phẩm: </b><span class="price"></span>
            <p class="anh"></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
      </div>
    </div>  
  </div>
</div>

<div id="loadingspinner" class="hidden">
    <a><img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/Dual-Ring.svg"></a>
</div>
<script>
    $=jQuery;
    $(function(){
        $('.click_quickview').click(function(){
            var pid = $(this).attr('data-id');
                $.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                    url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                    data : {
                        action: "quickview", //Tên action
                        pid: pid,
                    },
                    beforeSend: function(){
                        $('#loadingspinner').removeClass('hidden');
                    },
                    success: function(response) {
                        //Làm gì đó khi dữ liệu đã được xử lý
                        $('#loadingspinner').addClass('hidden');
                        if(response.success) {
                            $('.modal-title').html(response.data.title);
                            $('.modal-body .desc').html(response.data.desc);

                            if(response.data.price.length==0){
                                $('.modal-body .price').html('Liên hệ');
                            }
                            else{
                                var price = response.data.price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

                                $('.modal-body .price').html(price+'₫');
                            }

                            var i, html = '';
                            for (i = 0; i < response.data.image.length; i++) {
                                html += `<div class="item">
                                    <a href="#"><img src="`+response.data.image[i]+`"></a>
                                </div>`;
                            }
                            $('.modal-body .main-slider').html(html);

                            var $owl = $('.product-gallery .main-slider');
                            $owl.trigger('destroy.owl.carousel');
                            // After destory, the markup is still not the same with the initial.
                            // The differences are:
                            //   1. The initial content was wrapped by a 'div.owl-stage-outer';
                            //   2. The '.owl-carousel' itself has an '.owl-loaded' class attached;
                            //   We have to remove that before the new initialization.
                            $owl.html($owl.find('.owl-stage-outer').html()).removeClass('owl-loaded');
                            $owl.owlCarousel({
                                loop:true,
                                margin:10,
                                dots:false,
                                autoHeight:true,

                                autoplay:true,
                                autoplayTimeout:3000,
                                autoplayHoverPause:false,
                                responsive:{
                                    0:{
                                        items:1,
                                    },
                                }
                            });


                            $('#quickview').modal('show');
                        }
                        else {
                            alert('Đã có lỗi xảy ra');
                        }
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        //Làm gì đó khi có lỗi xảy ra
                        console.log( 'The following error occured: ' + textStatus, errorThrown );
                    }
                })
                return false;
            })
    })
</script>