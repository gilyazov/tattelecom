document.addEventListener('DOMContentLoaded', () => {
    const video = document.querySelector("#video");
    const broadcast = document.querySelector(".tv-online__broadcast-container").dataset.broadcast;

    var flashVars = {
        src: broadcast,
        plugin_hls: '/tattelecomNew/swf/flashlsOSMF.swf',
        hls_live_flushurlcache: true,
        autoPlay: true,
        javascriptCallbackFunction: 'jsBridge'
    };

    if (Hls.isSupported()) {
        var hls = new Hls();
        window.hls = hls;
        hls.loadSource(broadcast);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED, function() {
            video.play();
        });
    } else {
        swfobject.embedSWF('/tattelecomNew/swf/StrobeMediaPlayback.swf', 'player', 640, 480, '10.1.0', null, flashVars, {
            allowFullScreen: 'true'
        }, {
            name: 'flashPlayer'
        }, isPlayerEmbedded);
    }
});