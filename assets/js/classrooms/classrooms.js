$(document).ready(function(){
    $.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
        icons: {
            time: 'fal fa-clock',
            date: 'fal fa-calendar',
            up: 'fal fa-arrow-up',
            down: 'fal fa-arrow-down',
            previous: 'fal fa-chevron-left',
            next: 'fal fa-chevron-right',
            today: 'fal fa-calendar-check',
            clear: 'fal fa-trash-alt',
            close: 'fal fa-times'
        } });
    label = $("#label").val();
    description = $("#description").val();
    //time picks
    $('#time_start, #time_end').datetimepicker({
        format: 'LT',
        ignoreReadonly:true,
        buttons:{
            showClear:true
            }
    });

    

    

    //details section
        //intialize
        details_data = $('#details input[name=additional_details]').val();
        if(!details_data){ 
            details_data = '[{"key":"","value":""}]';
        }

        details_data = JSON.parse(details_data);
        
        jQuery.each(details_data, function(i,v){
            field = '';
            field = $('#details .detail-field').clone().removeClass('detail-field');
            field.attr('data-index',i);
            field.find('input.input-key').attr('name','additional_details[' + i + '][key]').val(v.key);
            field.find('input.input-value').attr('name','additional_details[' + i + '][value]').val(v.value);
            field.appendTo('#details .field-container');
            field.show();
        });
                
                
           
        


    $('#add-field').click(function(){
        i = $('#details .field-container .form-row').length;
        field = $('#details .detail-field').clone().removeClass('detail-field');
        field.attr('data-index',i);
        field.find('input.input-key').attr('name','details[' + i + '][key]').val('');
        field.find('input.input-value').attr('name','details[' + i + '][value]').val('');
        field.appendTo('#details .field-container');
        field.show();
    });

    $('#details .field-container').on('click','button.remove-field',function(){
        //remove element
        $(this).parents('.form-row').remove();

        //reconstruct indices
        fields = $('#details .field-container .form-row');
        jQuery.each(fields,function(i,v){
            $(v).find('input.input-key').attr('name','details[' + i + '][key]');
            $(v).find('input.input-value').attr('name','details[' + i + '][value]');
            $(v).attr('data-index',i);
        });
        

    });

    //Students Section
        //modal
        //*reset modal when opening
        $('#sectionsModal').on('show.bs.modal', function(e){
            static = $('input[type=hidden]#static_group_id').val();
            $('#sectionsModal #sectionSelectionTable input[type=radio][id=radio_'+ static +']').prop("checked",true);
            
            group_name = $('#sectionSelectionTable input[type=radio].sectionRadio:checked + label').text();
            if(group_name){
                $('#sectionsModal span#selected').text(group_name).addClass('font-weight-bold');
                $('#unselect').show();
            }
        });
        
        //when selecting section
        $('#sectionSelectionTable input[type=radio].sectionRadio').change(function(e){
            group_name = $('#sectionSelectionTable input[type=radio].sectionRadio:checked + label').text();
            $('#sectionsModal span#selected').text(group_name).addClass('font-weight-bold');
            $('#unselect').show();
        });

        //deselecting
        $('#unselect').click(function(e){
            $('#sectionSelectionTable input[type=radio].sectionRadio').prop('checked',false);
            $('#sectionsModal span#selected').text('No section selected.').removeClass('font-weight-bold');
            $(this).hide();
        });
});