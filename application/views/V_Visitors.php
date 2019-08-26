<div class="content">
    <div class="x_panel">

        <div class="x_title">
            <h2 class="text-uppercase">
                visitor's data
            </h2>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <div class="table-responsive">
                <table id="datatable-buttons" class="table-striped table-hover table table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-center">
                                tgl visit
                            </th>
                            <th class="text-uppercase text-center">
                                page
                            </th>
                            <th class="text-uppercase text-center">
                                ip address
                            </th>
                            <th class="text-uppercase text-center">
                                user isp
                            </th>
                            <th class="text-uppercase text-center">
                                city
                            </th>
                            <th class="text-uppercase text-center">
                                region
                            </th>
                            <th class="text-uppercase text-center">
                                user agent
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($VisitorView as $VisitorView) { ?>
                            <tr>
                                <td>
                                    <?= $VisitorView->tgl ?>
                                </td>
                                <td>
                                    <?php
                                    if ($VisitorView->page == 1) {
                                        echo 'HOME';
                                    } else {
                                        echo 'ADMIN';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= $VisitorView->user_ip_address ?>
                                </td>
                                <td>
                                    <?= $VisitorView->user_isp ?>
                                </td>
                                <td>
                                    <?= $VisitorView->user_city ?>
                                </td>
                                <td>
                                    <?= $VisitorView->user_region ?>
                                </td>
                                <td>
                                    <?= $VisitorView->device_system ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>