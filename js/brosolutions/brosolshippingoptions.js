function showHideAdditionLocalPickupOptions(element)
{
    if(element.checked){
        jQuery('#local-pickup-options-wrap').show();
    } else {
        jQuery('#local-pickup-options-wrap').hide();
    }
}
