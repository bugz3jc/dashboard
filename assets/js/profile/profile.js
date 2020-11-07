$(document).ready(function(){
    openModal = $('#passwordModal').data('open');
    if(openModal) $('#passwordModal').modal('show');
    $('#passwordModal').on('hide.bs.modal', function (e) {
        form = $(this).find('#password_form');
        form.trigger('reset');
      });

      $('#password_form input#newpw,#password_form input#retypepw').on('keyup',function(){
        newpw = $('#password_form input#newpw');
        retypepw = $('#password_form input#retypepw');
        msg = $('#password_form #retype_msg');
        savebtn = $('#passwordModal .modal-footer #savebtn');
        if(retypepw.val() != newpw.val()){
            msg.removeClass();
            msg.addClass('text-danger');
            msg.html('<i class="fas fa-times"></i> password does not match');
            savebtn.prop('disabled',true);
        }else if(retypepw.val() == '' && newpw.val() == ''){
            msg.removeClass();
            msg.html('');
            savebtn.prop('disabled',true);
        }else{
            msg.removeClass();
            msg.addClass('text-success');
            msg.html('<i class="fas fa-check"></i> password match');
            savebtn.prop('disabled',false);
        }
      });
    
    $('#browseImage').click(function(){
        $('#file_input').click();
    });

    
    var jcrop_api;
    function showCoords(c){
        $('#image_parts').val(JSON.stringify(c));
    }
    $('#file_input').change(function(){
        if(jcrop_api) jcrop_api.destroy() ;
        image = window.URL.createObjectURL(this.files[0]);
        $('#currentImage').attr('src', image);
        $('#currentImage').Jcrop({
            onSelect: showCoords,
            onChange: showCoords,
            boxHeight: 500,
            aspectRatio: 1,
            setSelect: [0,0,10000,10000]
        }, function(){
            jcrop_api = this;
        });
        if ( $('#upload-form input[type=file]').length > 0 ){
            $('#upload-form input[type=file]').remove();
        }
        $clone = $(this).clone();
        $clone.appendTo('#upload-form');
        $('#cropImage').modal('show');
    });

    
    
});