/**
 * Created with JetBrains PhpStorm.
 * User: SBPS
 * Date: 7/17/13
 * Time: 3:22 PM
 * To change this template use File | Settings | File Templates.
 */

//---  Function for fading in popup messages  ---//
function fading_msg(popup_id,msg){
    var popup = "#"+popup_id;
    $(popup).html(msg);
    $(popup).fadeIn('slow');

    setTimeout(function(){
        $(popup).fadeOut('slow');
    },2000);
}//---  End of fading_msg  ---//


