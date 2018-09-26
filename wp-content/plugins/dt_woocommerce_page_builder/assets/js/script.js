!(function(jQuery){

	jQuery(document).ready(function($) {
		// do something...
		
		//code to add validation on "Add to Cart" button
        jQuery('.dtwpb_single_add_to_fast_checkout').click(function(event){
        	event.preventDefault();
        	
        	//var quantity = jQuery( "form.cart input[name='quantity']" ).val();
    		var variation = jQuery( "form.cart input[name='variation']" ).val();
    		var variationId = jQuery( "form.cart input[name='variation_id']" ).val();
    		
    		//jQuery("form.dtwpb_quick_checkout_form input[name='dtwpb_quantity']" ).val(quantity);
    		jQuery("form.dtwpb_quick_checkout_form input[name='variation']" ).val(variation);
    		jQuery("form.dtwpb_quick_checkout_form input[name='variation_id']" ).val(variationId);
    		
    		var original_form = jQuery('table.variations');
    		var cloned_form = original_form.clone();
    		original_form.find('select').each(function(i) {
    		    cloned_form.find('select').eq(i).val(jQuery(this).val());
    		})
    		cloned_form.appendTo('.dtwpb_quick_checkout_form');
    		
    		
    		jQuery("form.dtwpb_quick_checkout_form table.variations").hide();
    		
    		jQuery( "form.dtwpb_quick_checkout_form" ).submit();
    		
    	});
        
        // udpate dtwpb_quantity value
        jQuery('form.cart input.qty').on('change', function(){
        	var $_thisVal = jQuery(this).val();
        	console.log( $_thisVal );
        	jQuery("form.dtwpb_quick_checkout_form input[name='dtwpb_quantity']").val($_thisVal);
        });
        
	});
})(jQuery);

