<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exportar a PDF</title>
    <style type="text/css" media="all">
        body {
            width: 100%;
            height: 100%;
            margin: 20px;
            padding: 0;
            background-color: #FAFAFA;
            font: 12pt "Tahoma";
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }



        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin-top: 80px;


            font-family: "HelveticaNeue-CondensedBold", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        }


        .card {
            height: 877px;
            width: 620px;
            margin: 0 auto;
            background: #ECECEC;
            border-radius: 4px;
        }


        .card header {
            background: #1E3A8A;
            height: 90px;
            width: 100%;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom: 2px solid rgba(180, 80, 80, .5);
            border-top: 1px solid rgba(221, 108, 108, .8);

            padding: 35px 20px;
            opacity: .9;
        }



        .card header h1 {
            color: #fff;
            line-height: 90%;
            font-size: 20px;
            margin: 0;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, .5);
        }

        .card article {
            padding: 20px;
        }

        .card article img {

            float: left;
            margin-right: 30px;
            width: 130px;
            height: 177px;
            transition: all .3s ease-in-out;
        }

        .card article h2 {
            color: #515355;
            float: left;
            margin: 0 5px 15px 0;
            font-weight: normal;
            padding: 0 0 8px 0;
            width: 250px;
        }

        .card article .area {
            height: 170px;
            width: 440px;
        }

        .card article .area h3 {
            margin: 0;
            color: #5F6163;
            font-size: 20px
        }

        .card article .area ul {
            margin: 5px 0 30px 0;
            padding: 0;
            list-style: none;
        }

        .card article .area ul li {
            margin: 5px 0 0 0;
            font-size: 16px;
            color: #94957F;
            text-shadow: 0 0 1px rgba(0, 0, 0, .3);
        }

        .card article .area ul li .bar {
            width: 280px;
            height: 15px;
            display: inline-block;
            border-radius: 50px;
            float: right;
            margin: 0 15px 0 0;

            opacity: .9;

            background-color: #CACACA;
            box-shadow: inset 0 2px 2px rgba(0, 0, 0, .35);
        }

        .card article .area ul li .bar:before {

            left: 0;
            width: 0;
            height: 15px;
            background: rgb(254, 213, 121);

            box-shadow:
                inset 0 4px 4px rgba(255, 255, 255, .3),
                inset 0 -2px 3px rgba(0, 0, 0, .05),
                0 1px 0 0px #D29D40;
            display: inline-block;
            border-radius: 50px;
            content: '';
            z-index: -1;
        }

        .card article .area ul li .bar.percent-100:before {
            width: 280px;
        }

        .card article .area ul li .bar.percent-90:before {
            width: 260px;
        }

        .card article .area ul li .bar.percent-80:before {
            width: 240px;
        }

        .card article .area ul li .bar.percent-70:before {
            width: 220px;
        }

        .card article .area ul li .bar.percent-60:before {
            width: 200px;
        }

        .card article .area ul li .bar.percent-50:before {
            width: 180px;
        }

        .card article .area ul li:before {
            /* content: '05'; */
            margin-right: 5px;
        }

        .card article .area::-webkit-scrollbar {
            width: 10px;
        }

        .card article .area::-webkit-scrollbar-track {
            background-color: rgba(217, 217, 217, .5);
            border-radius: 50px;
        }

        .card article .area::-webkit-scrollbar-thumb {
            background: rgba(184, 184, 184, .5);
            box-shadow:
                inset 1px 1px 0 rgba(0, 0, 0, 0.10),
                inset 0 -1px 0 rgba(0, 0, 0, 0.07);
            border-radius: 50px;
        }

    </style>
</head>

<body>
    <div class='card'>
        <header>
            <h1 class="text-center">Bright Group Tuition</h1>
        </header>
        <br>
        <article>
            <img alt='My Pic' id='thumb' src='https://s.cdpn.io/1202/timpietrusky_on_rampage_small_1.jpg'>
            <h2>Tim Pietrusky</h2>
            <div class='area'>
                <ul>
                    <li>
                        Std: 10th
                    </li>
                    <li>
                        Batch: B1
                    </li>
                    <li>
                        DOB: 12/12/12
                    </li>
                    <li>
                        Academic Year: 2020-2020
                    </li>
                    <li>
                        Contact Number: 8390790935
                    </li>
                    <li>
                        Address: 911B,Baker Street
                    </li>
                </ul>


            </div>
        </article>
    </div>
</body>

</html>
