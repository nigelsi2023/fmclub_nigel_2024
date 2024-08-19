
      if(document.getElementByClassName('dataTable') !== null){
        $(document).ready( function () {
          $('.dataTable').DataTable({
            language: {
              paginate: {
                previous: "‹",
                next: "›",
              }
            },
            searching: false, 
            paging: true, 
            info: false, 
            bLengthChange: false, 
            ordering:  false
          });
        });
      }