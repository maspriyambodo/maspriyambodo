<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <?php $this->view('Head'); ?>
    <body class=stretched>
        <div id=wrapper class=clearfix>
            <?php $this->view('Header') ?>
            <section id=content>
                <div class=content-wrap>
                    <?php
                    if ($Content == "Home") {
                        $this->view('HomeContent');
                    }
                    ?>
                </div>
            </section>
            <?php $this->view('Footer'); ?>
        </div>
    </body>
</html>