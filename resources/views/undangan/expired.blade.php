<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weinvitee</title>
    <style>
        h1,h2,h3,h4,h5 {
            text-align: center;
        }

        body{
            font-family: 'Akaya Kanadaka', cursive;
            color: #666666;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            /*width: 50%;*/
        }

        /* kannada */
        @font-face {
            font-family: 'Akaya Kanadaka';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/akayakanadaka/v4/N0bM2S5CPO5oOQqvazoRRb-8-MfMQZRxBQ.woff2) format('woff2');
            unicode-range: U+0964-0965, U+0C82-0CF2, U+200C-200D, U+20B9, U+25CC;
        }
        /* latin-ext */
        @font-face {
            font-family: 'Akaya Kanadaka';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/akayakanadaka/v4/N0bM2S5CPO5oOQqvazoRRb-8-MfYQZRxBQ.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Akaya Kanadaka';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/akayakanadaka/v4/N0bM2S5CPO5oOQqvazoRRb-8-MfWQZQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
</head>
<body>
<div class="container">

    <img src="{{ asset('/frontend/template/img/gambar/') }}/404.png" alt="" class="center">
    <h1>Opss ...</h1><h2>Sepertinya undangan kamu expired deh, kontak admin <a href="{{ url('/') }}"> disini</a> yuk untuk aktivasi kembali undangan kamu ...</h2>
</div>
</body>
</html>
