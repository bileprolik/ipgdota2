

$('.form').find('input, textarea').on('keyup blur focus', function (e) {

    var $this = $(this),
        label = $this.prev('label');

    if (e.type === 'keyup') {
        if ($this.val() === '') {
            label.removeClass('active highlight');
        } else {
            label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
        if( $this.val() === '' ) {
            label.removeClass('active highlight');
        } else {
            label.removeClass('highlight');
        }
    } else if (e.type === 'focus') {

        if( $this.val() === '' ) {
            label.removeClass('highlight');
        }
        else if( $this.val() !== '' ) {
            label.addClass('highlight');
        }
    }

});

$('.tab a').on('click', function (e) {

    e.preventDefault();

    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');

    target = $(this).attr('href');

    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

});

    /*jQuery(document).ready(function(){
    jQuery("select[name='brend']").change(function(){
        var optionValue = jQuery("select[name='brend']").val();
        jQuery.ajax({
            type: "POST",
            url: "ajaxData.php",
            data: ({brend: optionValue, status: 1}),
            beforeSend: function(){ jQuery ("#ajaxLoader").show();  },
            complete: function(){ jQuery("#ajaxLoader").hide(); },
            success: function(response){
                jQuery("#visinaAjax").html(response);
                jQuery("#visinaAjax").show();

            },
            error: function(xhr, status, error) {
                var err = JSON.parse(xhr.responseText);
                alert(err.Message);
            }

        });
    });
});*/



















