<?php
    switch( $hostname ) {
        case 'localhost':
            define( 'WP_ENV', 'local' );
            break;

        case 'ccgbooks.com':
            define( 'WP_ENV', 'production' );

        default:
            define( 'WP_ENV', 'production' );
    }

    if( $WP_ENV == 'production' ) {
?>

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-89569312-1', 'auto');
      ga('send', 'pageview');
    </script>

<?php } ?>