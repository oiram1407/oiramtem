var products = {

  add_form: () => {
      $.ajax({
          url: base_url + '/admin/add-product-form',
          type: 'GET',
          success: (h) => {
              $('#dialog-result').html(h);
              $('#dialog_add_form').modal('show');
          },
      });
  },

  add_send: () => {
      $('#pnam_error').html('');
      $('#idbr_error').html('');
      $('#idcat_error').html('');
      $('#prepu_error').html('');
      $('#prepro_error').html('');

      $.ajax({
          url: base_url + '/admin/add-product',
          type: 'POST',
          data: $("#add_product_form").serialize(),
          success: (data) => {
              if(data.errors) {
                  if(data.errors.product_name){
                      $('#pnam_error').html(data.errors.product_name[0]);
                  }
                  if(data.errors.id_branch){
                      $('#idbr_error').html(data.errors.id_branch[0]);
                  }
                  if(data.errors.id_category){
                      $('#idcat_error').html(data.errors.id_category[0]);
                  }
                  if(data.errors.product_price_public){
                      $('#prepu_error').html(data.errors.product_price_public[0]);
                  }
                  if(data.errors.product_price_provider){
                      $('#prepro_error').html(data.errors.product_price_provider[0]);
                  }
              }

              if(data.success)
                  location.reload();
          },
      });
  },

  set_stock_form: (id) => {
      $.ajax({
          url: base_url + '/admin/set-stock-form',
          data: {id: id},
          type: 'POST',
          success: (h) => {
              $('#dialog-result').html(h);
              $('#dialog_set_stock').modal('show');
          },
      });
  }
}
