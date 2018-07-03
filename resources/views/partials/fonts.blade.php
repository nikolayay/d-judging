<?php $fontUrl = env('APP_ENV', '') == 'live' || env('APP_ENV', '') == 'staging' || env('APP_ENV', '') == 'production' ? '/platform/' : '/' ?>

<style>
    @font-face {
        font-family: 'lg';
        src: url("{{ $fontUrl }}fonts/lg.eot?n1z373");
        src: url("{{ $fontUrl }}fonts/lg.eot?#iefixn1z373") format("embedded-opentype"), url("{{ $fontUrl }}fonts/lg.woff?n1z373") format("woff"), url("{{ $fontUrl }}fonts/lg.ttf?n1z373") format("truetype"), url("{{ $fontUrl }}fonts/lg.svg?n1z373#lg") format("svg");
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'Material-Design-Iconic-Font';
        src: url('{{ $fontUrl }}fonts/Material-Design-Iconic-Font.woff2?v=2.2.0') format('woff2'), url('{{ $fontUrl }}fonts/Material-Design-Iconic-Font.woff?v=2.2.0') format('woff'), url('{{ $fontUrl }}fonts/Material-Design-Iconic-Font.ttf?v=2.2.0') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Roboto;
        src: url("{{ $fontUrl }}fonts/roboto/Roboto-Light-webfont.eot");
        src: url("{{ $fontUrl }}fonts/roboto/Roboto-Light-webfont.eot?#iefix") format("embedded-opentype"), url("{{ $fontUrl }}fonts/roboto/Roboto-Light-webfont.woff") format("woff"), url("{{ $fontUrl }}fonts/roboto/Roboto-Light-webfont.ttf") format("truetype"), url("{{ $fontUrl }}fonts/roboto/Roboto-Light-webfont.svg#icon") format("svg");
        font-weight: 300;
        font-style: normal;
    }
    @font-face {
        font-family: Roboto;
        src: url("{{ $fontUrl }}fonts/roboto/Roboto-Regular-webfont.eot");
        src: url("{{ $fontUrl }}fonts/roboto/Roboto-Regular-webfont.eot?#iefix") format("embedded-opentype"), url("{{ $fontUrl }}fonts/roboto/Roboto-Regular-webfont.woff") format("woff"), url("{{ $fontUrl }}fonts/roboto/Roboto-Regular-webfont.ttf") format("truetype"), url("{{ $fontUrl }}fonts/roboto/Roboto-Regular-webfont.svg#icon") format("svg");
        font-weight: 400;
        font-style: normal;
    }
    @font-face {
        font-family: Roboto;
        src: url("{{ $fontUrl }}fonts/roboto/Roboto-Medium-webfont.eot");
        src: url("{{ $fontUrl }}fonts/roboto/Roboto-Medium-webfont.eot?#iefix") format("embedded-opentype"), url("{{ $fontUrl }}fonts/roboto/Roboto-Medium-webfont.woff") format("woff"), url("{{ $fontUrl }}fonts/roboto/Roboto-Medium-webfont.ttf") format("truetype"), url("{{ $fontUrl }}fonts/roboto/Roboto-Medium-webfont.svg#icon") format("svg");
        font-weight: 500;
        font-style: normal;
    }
    @font-face {
        font-family: Roboto;
        src: url("{{ $fontUrl }}fonts/roboto/Roboto-Bold-webfont.eot");
        src: url("{{ $fontUrl }}fonts/roboto/Roboto-Bold-webfont.eot?#iefix") format("embedded-opentype"), url("{{ $fontUrl }}fonts/roboto/Roboto-Bold-webfont.woff") format("woff"), url("{{ $fontUrl }}fonts/roboto/Roboto-Bold-webfont.ttf") format("truetype"), url("{{ $fontUrl }}fonts/roboto/Roboto-Bold-webfont.svg#icon") format("svg");
        font-weight: 700;
        font-style: normal;
    }
</style>