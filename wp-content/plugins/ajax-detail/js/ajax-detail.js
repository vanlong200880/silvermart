jQuery(document).ready(function($) {
 $(".list-silver ul > li .list-silver-item").on('click', function(){
    $code = $(this).attr('data-code');
//    $('.voucher-modal').modal('show');
//    $('form#voucher_form').on('submit', function(e){
      var data = {
        'id': $code,
        'action': 'detail_action'
      };
      $.ajax({
        url : ajax.url,
        type : 'POST',
        dataType : "json",
        data: data,
        beforeSend: function(){
          $(".loading").css('display', 'inline-block');
        },
        success : function (data){
          console.log(data);
          $(".img-popup").empty().append(data.image);
          $(".title-popup").empty().append(data.title);
          $(".description-popup").empty().append(data.description);
          $(".content-popup").empty().append(data.content);
          $(".custom-field-popup").empty().append(data.custom_silver);
          $('.bs-example-modal-lg').modal('show');
          $(".loading").css('display', 'none');
//          if(data.status == true){
//            $(".voucher-error").empty();
//            var templateUrl = 'http://coupon.unimedia.vn/wp-content/themes/tmdt_magazine';
//            $(".form-voucher").empty().append('<h4>'+data.message+'</h4><div class="form-group"><label for="voucher-name">Nhập mã kích hoạt</label><input type="hidden" id="post-voucher-id" name="post-voucher-id" value="'+data.post_id+'"><input type="text" class="form-control active-code" id="voucher-code" name="voucher-code"></div><div class="form-group submit-voucher"><button type="submit" class="btn btn-primary send vald-code">Kích hoạt</button> <img class="image-loading" src="'+templateUrl+'/images/Floating rays-32.gif" width="20px" style="display: none;"></div>');
//          }else{
//            $(".voucher-error").empty().append(data.error);
//          }
        }
      });
//      e.preventDefault();

//    });
  }); 
 
});