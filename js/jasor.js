jQuery(document).ready(function ($) {

    var _SlideshowTransitions = [{
            $Duration: 1000,
            $Delay: 1000,
            $Cols: 8,
            $Rows: 4,
            $FlyDirection: 5,
            //$Formation:
                    //$JssorSlideshowFormations$.$FormationZigZag,
            $Assembly: 1028,
            $ChessMode: {$Column: 3, $Row: 12},
            $Easing: {$Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad},
            $Opacity: 0
        }];
    var jssor_1_options = {
        $DragOrientation: 0,
        $AutoPlay: true,
        $SlideDuration: 1000,
        $AutoPlayInterval: 1000,
        $SlideshowOptions: {//Options which specifies enable slideshow or not
            $Class: $JssorSlideshowRunner$, //Class to create instance of slideshow
            $Transitions: _SlideshowTransitions, //Transitions to play slide, see jssor slideshow transition builder
            $TransitionsOrder: 1, //The way to choose transition to play slide, 1 Sequence, 0 Random
            $ShowLink: 2, //0 After Slideshow, 2 Always
            $ContentMode: false                             //Whether to trait content as slide, otherwise trait an image as slide
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
        }

    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizing
    function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 1280);
            jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
//    ScaleSlider();
//    $(window).bind("load", ScaleSlider);
//    $(window).bind("resize", ScaleSlider);
//    $(window).bind("orientationchange", ScaleSlider);
    //responsive code end
});