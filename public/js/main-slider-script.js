
	var tpj=jQuery;                  
    var revapi486;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_one").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_one");
        }else{
            revapi486 = tpj("#rev_slider_one").show().revolution({
			sliderType:"standard",
                jsFileLocation:"plugins/revolution/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"yes",
                delay:10000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        touchOnDesktop:"off",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style:"metis",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:1200,
                        hide_onleave:false,
                        tmp:'',
                        left: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:420,
                            v_offset:-150
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:360,
                            v_offset:-150
                        }
                    }
                    
                },
                 responsiveLevels:[1200,1040,778,600],
                 visibilityLevels:[1200,1040,778,600],
                 gridwidth:[1200,1040,778,600],
                 gridheight:[850,740,700,650],
                 lazyType:"none",
                 shadow:0,
                 spinner:"off",
                 stopLoop:"off",
                 stopAfterLoops:-1,
                 stopAtSlide:-1,
                 shuffle:"off",
                 autoHeight:"off",
                 hideThumbsOnMobile:"off",
                 hideSliderAtLimit:0,
                 hideCaptionAtLimit:0,
                 hideAllCaptionAtLilmit:0,
                 debugMode:false,
                 fallbacks: {
                     simplifyAll:"off",
                     nextSlideOnWindowFocus:"off",
                     disableFocusListener:false,
                 }
             });
        }if(tpj("#rev_slider_two").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_two");
        }else{
            revapi486 = tpj("#rev_slider_two").show().revolution({
            sliderType:"standard",
                jsFileLocation:"plugins/revolution/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"yes",
                delay:10000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        touchOnDesktop:"off",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style:"metis",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:1200,
                        hide_onleave:false,
                        tmp:'',
                        left: {
                            h_align:"center",
                            v_align:"bottom",
                            h_offset:-30,
                            v_offset:50
                        },
                        right: {
                            h_align:"center",
                            v_align:"bottom",
                            h_offset:30,
                            v_offset:50
                        }
                    }
                    
                },
                 responsiveLevels:[1200,1040,778,600],
                 visibilityLevels:[1200,1040,778,600],
                 gridwidth:[1200,1040,778,600],
                 gridheight:[950,840,750,650],
                 lazyType:"none",
                 shadow:0,
                 spinner:"off",
                 stopLoop:"off",
                 stopAfterLoops:-1,
                 stopAtSlide:-1,
                 shuffle:"off",
                 autoHeight:"off",
                 hideThumbsOnMobile:"off",
                 hideSliderAtLimit:0,
                 hideCaptionAtLimit:0,
                 hideAllCaptionAtLilmit:0,
                 debugMode:false,
                 fallbacks: {
                     simplifyAll:"off",
                     nextSlideOnWindowFocus:"off",
                     disableFocusListener:false,
                 }
             });
        }if(tpj("#rev_slider_three").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_three");
        }else{
            revapi486 = tpj("#rev_slider_three").show().revolution({
            sliderType:"standard",
                jsFileLocation:"plugins/revolution/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"yes",
                delay:100000000000000000000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        touchOnDesktop:"off",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style:"metis",
                        enable:false,
                        hide_onmobile:true,
                        hide_under:1200,
                        hide_onleave:false,
                        tmp:'',
                        left: {
                            h_align:"center",
                            v_align:"bottom",
                            h_offset:-30,
                            v_offset:50
                        },
                        right: {
                            h_align:"center",
                            v_align:"bottom",
                            h_offset:30,
                            v_offset:50
                        }
                    }
                    
                },
                 responsiveLevels:[1200,1040,778,600],
                 visibilityLevels:[1200,1040,778,600],
                 gridwidth:[1200,1040,778,600],
                 gridheight:[850,740,650,600],
                 lazyType:"none",
                 shadow:0,
                 spinner:"off",
                 stopLoop:"off",
                 stopAfterLoops:-1,
                 stopAtSlide:-1,
                 shuffle:"off",
                 autoHeight:"off",
                 hideThumbsOnMobile:"off",
                 hideSliderAtLimit:0,
                 hideCaptionAtLimit:0,
                 hideAllCaptionAtLilmit:0,
                 debugMode:false,
                 fallbacks: {
                     simplifyAll:"off",
                     nextSlideOnWindowFocus:"off",
                     disableFocusListener:false,
                }
            });
        }
     }); /*ready*/