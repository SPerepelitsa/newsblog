<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Euclid Free Responsive Html5 Themes</title>

    <link rel='stylesheet' id='reset-css'  href='css/reset.css' type='text/css' media='all' />
    <link rel='stylesheet' id='superfish-css'  href='css/superfish.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawsome-css'  href='css/font-awsome/css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='orbit-css-css'  href='css/orbit.css' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'  href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='color-scheme-css'  href='css/color/green.css' type='text/css' media='all' />
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='js/jquery.carouFredSel-6.2.1-packed.js'></script>
    <script type='text/javascript' src='js/hoverIntent.js'></script>
    <script type='text/javascript' src='js/superfish.js'></script>
    <script type='text/javascript' src='js/orbit.min.js'></script>
    <script src="js/css3-mediaqueries.js"></script>

    <script type="text/javascript" language="javascript">
        $(function() {

            /* Start Carousel */
            $('#featured-posts').carouFredSel({
                auto: true,
                prev: '#prev2',
                next: '#next2',
            });
            /* End Carousel */


            /* Start Orbit Slider */
            $(window).load(function() {
                $('.post-gallery').orbit({
                    animation: 'fade',
                });
            });
            /* End Orbit Slider */


            /* Start Super fish */
            jQuery(document).ready(function(){
                jQuery('ul.sf-menu').superfish({
                    delay:         100,
                    speed:         'fast',
                    speedOut:      'fast',
                });
            });
            /* End Of Super fish */

        });
    </script>
</head>