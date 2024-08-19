
      

      window.setInterval(function(){
        $.ajax({
          url: 'http://127.0.0.1:8000/live-product-data',
          type: 'GET',
          dataType: 'json',
          success: function (result) {
            $.each( result, function( key, value ) {
              var temp = t.row(key).data();


              if(value.status=='down'){

                temp[2] = '<i class="fa fa-arrow-down" style="color: #B00"></i> '+value.current_price;

                 temp[3] = '<p style="color: #B00">'+value.price_change_amount+'</p>';
                 temp[4] =  '<p style="color: #B00">'+value.price_change_percent+'</p>'; 
              }else if(value.status=='up'){

               temp[2] = '  <i class="fa fa-arrow-down" style="color: #071"></i> '+value.current_price;

                 temp[3] = '<p style="color: #071">'+value.price_change_amount+'</p>';
                 temp[4] =  '<p style="color: #071">'+value.price_change_percent+'</p>'; 
              }else{

                 temp[2] = value.current_price;
              temp[3] = value.price_change_amount;
              temp[4] = value.price_change_percent;              
            }
             // temp[2] = value.current_price;
          
              t.row(key).data(temp).draw();
            });
          }
        });
      }, 5000);