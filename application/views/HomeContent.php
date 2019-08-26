<div class="content">
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Visitors</span>
            <div class="count"><?= $TotalVisitior ?></div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Visitors This Month</span>
            <div class="count"><?= $MonthVisitior ?></div>
            <span class="count_bottom">
                <?php
                if ($MonthVisitior < $LastmonthVisitior) {
                    echo '<i class="red"><i class="glyphicon glyphicon-chevron-down"></i> ' . round($MonthVisitior / $LastmonthVisitior, 2) . "%" . ' </i>From Last Month';
                } elseif ($MonthVisitior < 1) {
                    echo '<i class="red"><i class="glyphicon glyphicon-chevron-down"></i> ' . 0 . "%" . '</i> from yesterday';
                } else {
                    echo '<i class="green"><i class="glyphicon glyphicon-chevron-up"></i> ' . round($MonthVisitior / $LastmonthVisitior, 2) . "%" . ' </i>From Last Month';
                }
                ?>
            </span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Visitors Today</span>
            <div class="count">
                <?= $TodayVisitors ?>
            </div>
            <span class="count_bottom">
                <?php
                if ($TodayVisitors < $YesterdayVisitors) {
                    echo '<i class="red"><i class="glyphicon glyphicon-chevron-down"></i> ' . round($TodayVisitors / $YesterdayVisitors, 2) . "%" . '</i> from yesterday';
                } elseif ($TodayVisitors < 1) {
                    echo '<i class="red"><i class="glyphicon glyphicon-chevron-down"></i> ' . 0 . "%" . '</i> from yesterday';
                } else {
                    echo '<i class="green"><i class="glyphicon glyphicon-chevron-up"></i> ' . round($TodayVisitors / $YesterdayVisitors, 2) . "%" . '</i> from yesterday';
                }
                ?>
            </span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Visitors per day</span>
            <div class="count">
                <?php
                foreach ($AverageVisitor as $AverageVisitor) {
                    echo round($AverageVisitor->TOTAL / cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y")));
                }
                ?>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-flag"></i> Country Visitors</span>
            <div class="count"><?= $CountCountry ?></div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-file"></i> Project Offered</span>
            <div class="count"><?= $ProjectCount ?></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                    <h2>Device Usage</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"> <i class="fa fa-chevron-up"></i> </a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display:block">
                    <table class="" style="width:100%">
                        <tbody>
                            <tr>
                                <th style="width:37%">
                                    <p>Percentage</p>
                                </th>
                                <th>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                        <p class="">Device</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <p class="">Progress</p>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <iframe class="chartjs-hidden-iframe" style="width:100%;display:block;border:0 none;height:0;margin:0;position:absolute;left:0;right:0;top:0;bottom:0"></iframe>
                                    <canvas class="canvasDoughnut" height="140" width="140" style="margin:15px 10px 10px 0;width:140px;height:140px"></canvas>
                                </td>
                                <td>
                                    <table class="tile_info">
                                        <tbody>
                                            <?php
                                            $tot = $DeviceApple + $DeviceAndroid + $DeviceWindows + $DeviceOther;
                                            ?>
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square blue"></i>AppleWebKit </p>
                                                </td>
                                                <td id="AppleWebKit"><?= round($DeviceApple / $tot * 100); ?></td><td>%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square green"></i>Android </p>
                                                </td>
                                                <td id="Android"><?= round($DeviceAndroid / $tot * 100); ?></td><td>%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square purple"></i>Windows </p>
                                                </td>
                                                <td id="Windows"><?= round($DeviceWindows / $tot * 100); ?></td><td>%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square red"></i>Others </p>
                                                </td>
                                                <td id="Others"><?= round($DeviceOther / $tot * 100); ?></td><td>%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Visitors location <small>geo-presentation</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">
                                <div class="col-md-4 hidden-small">
                                    <h2 class="line_30"><?= $TotalVisitior ?> Views from <?= $CountCountry ?> countries</h2>

                                    <table class="countries_list">
                                        <tbody>
                                            <?php foreach ($NameCountry as $value) { ?>
                                                <tr>
                                                    <td><?= $value->user_country_name ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height: 230px; position: relative; overflow: hidden;">
                                    <div class="btn btn-sm btn-dark jqvmap-zoomin"><i class="fa fa-plus"></i></div>
                                    <div class="btn btn-sm btn-dark jqvmap-zoomout"><i class="fa fa-minus"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item" style="border: 0;" 
                src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;hl=en&amp;bgcolor=%23FFFFFF&amp;src=casugi.cabiku%40gmail.com&amp;color=%2329527A&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%2329527A&amp;src=id.indonesian%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FJakarta" 
                height="600" width="100%" 
                frameborder="0" scrolling="no">
        </iframe>
    </div>
</div>
<script type="text/javascript">
    $('#vmap').vectorMap({
        map: 'world_en',
        backgroundColor: '#333333',
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#666666',
        enableZoom: true,
        showTooltip: true,
        scaleColors: ['#C8EEFF', '#006491'],
        values: sample_data,
        normalizeFunction: 'polynomial'
    });
</script>