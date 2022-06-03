jQuery(document).ready(function() {
    "use strict";


    // PROFILE WAYPOINTS

    if(jQuery('#cover').hasClass("featured")){
        jQuery('.posts').waypoint(function(direction) {
            if(direction === "down"){ jQuery('.profile').addClass("stuck").removeClass("featured"); jQuery('.index').fadeIn(400); jQuery('.backtotop').fadeIn(); }
            if(direction === "up"){ jQuery('.profile').removeClass("stuck").addClass("featured"); jQuery('.index').fadeOut(400); jQuery('.backtotop').fadeOut(); }
        });
    }else{
        jQuery('#posttitle, .first').waypoint(function(direction) {
            if(direction === "down"){ jQuery('.profile').addClass("stuck"); jQuery('.index').fadeIn(400); jQuery('.backtotop').fadeIn(); }
            if(direction === "up"){ jQuery('.profile').removeClass("stuck"); jQuery('.index').fadeOut(400); jQuery('.backtotop').fadeOut(); }
        });
    }
    if(jQuery('.postprofile').length > 0 && jQuery('.postprofile').css('display') != "none"){
        jQuery('.postprofile').waypoint(function(direction) {
            if(direction === "down"){ if(jQuery('.profile').first().hasClass('nohide') === false) jQuery('.profile').addClass("hide"); }
            if(direction === "up"){ jQuery('.profile').removeClass("hide"); }
        }, { offset: '100%' });
    }


    // INDEX WAYPOINTS

    if(jQuery('#posttitle').length){
        var list = [];
        jQuery('.postbody h2').waypoint(function(direction) {
            var e = jQuery(this);
            if(direction === "down"){
                jQuery('.index h2').fadeOut(function() {
                    list.push(jQuery('.index h2').text());
                    jQuery(this).text(jQuery(e).text()).fadeIn();
                });
            }
            if(direction === "up"){
                jQuery('.index h2').fadeOut(function() {
                    jQuery(this).text(list.pop()).fadeIn();
                });
            }
        });
    }


    // FITVIDS

    jQuery(".postbody").fitVids();


    // COMMENTS

    if(window.location.hash === "" && window.ecko_theme_vars.general_autoload_comments != "1"){
        jQuery('.comment_block').hide();
        jQuery('.readmore').css('display', 'inline-block');
    }
    jQuery('.readmore').click(function(){
        jQuery('.comment_block').slideDown(600);
        jQuery(this).fadeOut(400);
        jQuery('html, body').animate({
            scrollTop: jQuery(".comment_block").offset().top - 80
        }, 600);
    });


    // SEARCH

    jQuery('.searchopen').click(function(){
        jQuery('.searchbar').fadeIn();
        jQuery('.searchopen').addClass('active');
        jQuery('.searchbar .query').focus();
        return false;
    });
    jQuery('.searchbar .query').focusout(function(){
        jQuery('.searchbar').fadeOut();
        jQuery('.searchopen').removeClass('active');
        jQuery('.searchbar .query').val('');
    });


    // BACK TO TOP

    jQuery('.backtotop').click(function(){
        jQuery('html, body').animate({
            scrollTop: jQuery("body").offset().top
        }, 1000);
    });


    // SYNTAX HIGHLIGHTER

    if(window.ecko_theme_vars.general_disable_syntax_highlighter != "1"){
        Rainbow.color();
    }

    // READING TIME

    jQuery(".postbody").readingTime();

    jQuery(".inlinemenu ul").hide();
    jQuery(".inlinemenu .graybar").click(function(){
        jQuery(".inlinemenu ul").slideToggle();
    });


    // NAVIGATION

    jQuery('.menu-item-has-children > a').append('<i class="fa fa-chevron-down"></i>');

    jQuery('.navwrap').mouseenter(function(){
        jQuery('.menu', this).css('opacity', '1');
        jQuery('.toggle', this).css('opacity', '1');
    }).mouseleave(function(){
        jQuery('.menu', this).css('opacity', '0');
        jQuery('.toggle', this).css('opacity', '0.6');
    });


});
