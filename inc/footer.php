<script>
    "use strict";

    var ie = !(navigator.userAgent.indexOf("rv:11.0") < 0);
    
    if (ie == true){

        var esScript = document.createElement('script');
        esScript.src = "dist/app.es5.min.js";
        document.getElementsByTagName('head')[0].appendChild(esScript);

    }else{
        var script = document.createElement('script');
        script.src = "dist/app.es6.min.js";
        document.getElementsByTagName('head')[0].appendChild(script);
        // // Default Script
    }
</script>