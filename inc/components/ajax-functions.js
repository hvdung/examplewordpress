$=jQuery;
        $(function(){
            //LỌC SẢN PHẨM THEO DANH MỤC
            $('.click_product_cat').on("click",function(){
                var term_id=$(this).attr('data-term-id');

                $('.click_product_cat').removeClass('selected');
                $(this).addClass('selected');

                $.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                    url : 'http://localhost:8888/project-wp2/toyota1/wp-admin/admin-ajax.php', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                    data : {
                        action: "filter_product_cat", //Tên action
                        danhmuc: term_id,
                    },
                    beforeSend: function(){
                        $('#loadingspinner').removeClass('hidden');
                    },
                    success: function(response) {
                        
                        

                        $('#loadingspinner').addClass('hidden');
                        if(response.success) {
                            $('.product-archive .row').html(response.data);
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

                window.history.pushState({danhmuc:term_id}, '', '?danhmuc='+term_id);
            })
           
        })