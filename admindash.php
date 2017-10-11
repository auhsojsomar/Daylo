<?php
  include('adminheader.php');
  include('adminfooter.php');
   ?>
<section class="content">
    <style type="text/css">
        .bg-yellow
        {
            background-color: #f39c12;
            color: #fff;
        }
        .small-box > .inner {
          padding: 10px;
        }
        .small-box {
            border-radius: 2px;
            position: relative;
            display: block;
            margin-bottom: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }
        .small-box h3 {
            font-size: 38px;
            font-weight: bold;
            margin: 0 0 10px 0;
            white-space: nowrap;
            padding: 0;
        }
        .small-box p {
            font-size: 15px;
        }
        p {
            margin: 0 0 11px;
        }
        .small-box .icon {
            -o-transition: all 0.3s linear;
            -webkit-transition: all 0.3s linear;
            transition: all 0.3s linear;
            position: absolute;
            top: -10px;
            right: 10px;
            z-index: 0;
            font-size: 90px;
            color: rgba(0, 0, 0, 0.15);

        }
    </style>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" style=" text-align: left; margin-left: 250px;">
            <div class="small-box bg-yellow" style="border-radius: 10px;">
                <div class="inner">
                    <h3>84 &nbsp;&nbsp;&nbsp;&nbsp;<span><img src="icon1" id="logo" style="width: 50px; height: 50px;"></span></h3>
                    <p style="font-family: system-ui; font-size: 20px; "><strong>Reported lost</strong></p>
                </div>
                <a href="/demo-control-panel/items/type/lost/status/new/" class="small-box-footer" style="margin-left: 45px;"><strong>Show all items</strong> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

         <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" style="text-align: left; margin-left: 10px;">
            <div class="small-box bg-tea" style="background-color: #39cccc; border-radius: 10px;">
                <div class="inner">
                    <h3>84 &nbsp;&nbsp;&nbsp;&nbsp;<span><img src="icon2" id="logo" style="width: 50px; height: 50px;"></span></h3>
                    <p style="font-family: system-ui; font-size: 20px; "><strong>Reported Found</strong></p>
                </div>
                <a href="/demo-control-panel/items/type/lost/status/new/" class="small-box-footer" style="margin-left: 45px;"><strong>Show all items</strong> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </br>
        <div class="col-xs-12 col-md-6" style="margin-left: 250px;">

            <div class="box box-default">
                <div class="box-header">
                    <h3 class="box-title">Lost Items <small>in the last month</small></h3>
                </div>
                <div class="box-body">
                    <div id="lost-none" class="text-center pad hide">
                        No data available.
                    </div>
                    <div id="lost-loader" class="text-center pad hide">
                        <i class="fa fa-refresh fa-spin"></i>&nbsp; Loading chart
                    </div>
                    <div id="lost-chart" class="" style="height: 140px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 466px; height: 140px;" width="466" height="140"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 120px; left: 71px; text-align: center;">16/09</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 120px; left: 170px; text-align: center;">23/09</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 120px; left: 287px; text-align: center;">01/10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 66px; top: 120px; left: 385px; text-align: center;">08/10</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 106px; left: 1px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 79px; left: 5px; text-align: right;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 53px; left: 2px; text-align: right;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 27px; left: 2px; text-align: right;">3</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">4</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 466px; height: 140px;" width="466" height="140"></canvas></div>
                </div>
            </div>
</section>
                    