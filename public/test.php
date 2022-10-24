<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test</title>

    <style>
        #testing img {
            width: 300px;
            height: auto;
        }
    </style>
</head>

<div id="testing">

</div>

<script>var _fap_destination = 'testing';</script>
<script>var _hostName = '/build';</script>
<!--<script src="https://cdn.jsdelivr.net/gh/triasigaka/tes@main/public/build/Dame_Girlfriend_Moon_Night_Snap/Dame-Girlfriend-Moon-Night-Snap-001.jpg.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/gh/triasigaka/tes@main/public/build/Dame_Girlfriend_Moon_Night_Snap/Dame-Girlfriend-Moon-Night-Snap-002.jpg.js"></script>-->

<?php
//for ($i = 0; $i <= 73; $i++) {
//    echo '<script src="build/Dame_Girlfriend_Moon_Night_Snap/Dame-Girlfriend-Moon-Night-Snap-MrCong.com-001.jpg-chunk/Dame-Girlfriend-Moon-Night-Snap-MrCong.com-001.jpg-' . $i . '.js"></script>';
//}
?>

<script>
    window._fap_destination = _fap_destination || '_fap_destination';
    window._hostName = _hostName || '/build/';

    (function (K, N, T, L, E) {

        let destination = K._fap_destination;
        let host = K._hostName;
        let total = parseInt(T);

        for (let i = 0; i < total; i++) {
            let src = host + '/' + E + '/' + L + '-chunk/' + L + '-' + i + '.js';
            let script = document.createElement('script');
            script.src = src;
            document.head.appendChild(script);
        }

        let x = setInterval(() => {
            let chunk = K[N] || [];
            if (chunk.length === total) {
                window[L] = chunk.join('');

                let img = document.createElement('img');
                img.src = chunk.join('');
                img.className = 'fap-img';

                let dest = document.getElementById(destination);
                dest.className = L;
                dest.appendChild(img);

                clearInterval(x);
            }
        }, 1000)

    })(window, `_fappakDame-Girlfriend-Moon-Night-Snap-MrCong_com-001_jpg`, `74`, `Dame-Girlfriend-Moon-Night-Snap-MrCong.com-001.jpg`, `Dame_Girlfriend_Moon_Night_Snap`);

</script>

<!--/build/Dame_Girlfriend_Moon_Night_Snap/Dame-Girlfriend-Moon-Night-Snap-MrCong.com-001.jpg-chunk/Dame-Girlfriend-Moon-Night-Snap-MrCong.com-001.jpg-0.js-->
<!--/build/Dame_Girlfriend_Moon_Night_Snap/Dame-Girlfriend-Moon-Night-Snap-MrCong.com-001.jpg-chunk/Dame-Girlfriend-Moon-Night-Snap-MrCong.com-001.jpg-0.js-->

</html>
