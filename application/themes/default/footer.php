<?php defined('PMDDA') or die('Restricted access'); ?>
<div class="footer row-fluid">
    <div class="navbar-inner">
        <ul class="nav pull-right">

            <li > <a href="http://www.phpmongodb.org" target="_blank">&copy; <?php echo date('Y'); ?> PHPmongoDB.org</a></li>


        </ul>

    </div>
</div>

<script src="<?php echo Theme::getPath(); ?>bootstrap/js/bootstrap.js"></script>
<script src="<?php echo Theme::getPath(); ?>js/PHPMongoDB.js?v=<?php echo Theme::getVersion('/application/themes/default/js/PHPMongoDB.js'); ?>"></script>Ï
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function () {
        $('.demo-cancel-click').click(function () {
            return false;
        });
    });
    function callAjax(url) {
        url = url + '&theme=false'
        $(document).ready(function () {

            $.get(url, function (data, status) {
                if (status == 'success') {
                    $("#middle-content").html(data);
                }
            });

        })
    }
    $(function () {

        if ($(".sidebar-nav").height() > $(".content").height()) {
            $(".content").css('height', $(".sidebar-nav").height())
        }

    });
</script>    
</body>
</html>
