$(document).ready(function(){
    $('#product_list').DataTable({
        "pagingType": 'simple_numbers',
        "order": [2,"asc"],
        "columnDefs": [
            {
                "targets": [0,1],
                "orderable": false
            }
        ],
        "language":{
            "paginate":{
                "previous": '&lt;',
                "next": '&gt;'
            },
            "search": '<i class="fal fa-search"></i>'
        }
    });
    
    // validation
    $('#create-form').submit(function(e){
        price = $('#price').val();
        
        if(!isNaN(price) || (!isNaN(price) && price.split('.').length == 2 ) ){
            //alert('correct');
           // e.preventDefault();
        }else{
            
        $("#price-help").show();
            e.preventDefault();
        }
    });

    $('.modal #price').keyup(function(){
        $("#price-help").hide();
    });
    
    $('#create-product-modal').on('hide.bs.modal', function(e){
        $('#create-form').trigger("reset");
    });
});