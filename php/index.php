<?php

$PUB_ID = 'masofferdemo';
$SHOP_ID = 'adayroi';

if (!empty($_POST['publisher_id'])){ $PUB_ID = $_POST['publisher_id'];}
if (!empty($_POST['offer_id'])){ $SHOP_ID = $_POST['offer_id'];}

$BASED_API_URL = "http://api.masoffer.com/promotions?";
$API_URL = $BASED_API_URL . "offer_id=$SHOP_ID";

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $API_URL,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    $promotion_data = array();
} else {
    $data_response = json_decode($response, true);
    $promotion_data = $data_response['data']['promotions'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>MasOffer Link API Example</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <style>
        #promotion_list img {
            max-width: 250px;
            max-height: 250px;
        }
        .modal-body {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body class="components-page">
<div class="wrapper">
    <div class="main main-raised">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tim-container">
                            <!-- buttons row -->
                            <div class="tim-row" id="buttons-row">
                                <form action="" method="post">
                                    <h1>Danh sách tin khuyến mãi MasOffer</h1>
                                    <legend></legend>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating has-info">
                                                <label class="control-label">Id của Publisher</label>
                                                <input type="text" name="publisher_id" class="form-control" required value="<?php echo $PUB_ID?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 dropdown">
                                            <div class="form-group label-floating has-info">
                                                <select class="form-control" name="offer_id">
                                                    <option value="adayroi" <?php echo ($SHOP_ID == 'adayroi')? 'selected' : '';?> >Adayroi</option>
                                                    <option value="lazada" <?php echo ($SHOP_ID == 'lazada')? 'selected' : '';?>>Lazada</option>
                                                    <option value="tiki" <?php echo ($SHOP_ID == 'tiki')? 'selected' : '';?>>Tiki</option>
                                                    <option value="vienthonga" <?php echo ($SHOP_ID == 'vienthonga')? 'selected' : '';?>>Viễn Thông A</option>
                                                    <option value="nguyenkim" <?php echo ($SHOP_ID == 'nguyenkim')? 'selected' : '';?>>Nguyễn Kim</option>
                                                    <option value="hcenter" <?php echo ($SHOP_ID == 'hcenter')? 'selected' : '';?>>Home Center</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 text-right">
                                            <div class="form-group">
                                                <button class="btn btn-info">Lấy danh sách</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--  end row -->
                        </div>
                        <!-- end row -->
                        <!-- end container -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tim-container">
                            <div>
                                <table id="promotion_list" class="display table" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Shop</th>
                                            <th>Title</th>
                                            <th>Ảnh</th>
                                            <th>Ngành hàng</th>
                                            <th>Coupon Code</th>
                                            <th>Link gốc</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($promotion_data as $promotion):
                                                $masoffer_url = "https://go.masoffer.net/v0/$SHOP_ID/$PUB_ID/?go=" . urlencode($promotion['original_url']);
                                        ?>
                                        <tr>
                                            <td><?php echo $promotion['offer_id'] ?></td>
                                            <td><?php echo $promotion['title'] ?></td>
                                            <td><img src="<?php echo $promotion['thumbnail'] ?>"/></td>
                                            <td><?php echo $promotion['category_name'] ?></td>
                                            <td>
                                                <?php
                                                    if (!empty($promotion['coupon_code'])) :
                                                ?>
                                                <div>
                                                    <button class="btn btn-info"
                                                            data-clipboard-text="<?php echo $promotion['coupon_code'] ?>"
                                                            data-link="<?php echo $masoffer_url?>"
                                                            data-toggle="modal" data-target="#myModal">
                                                        Bấm để hiện mã
                                                    </button>
                                                </div>
                                                <?php endif;?>
                                            </td>
                                            <td>
                                                <a class="input-group-addon" href="<?php echo $masoffer_url ?>" target="_blank">
                                                    <i class="fa fa-external-link"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- end container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Coupon code</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <div class="text-left">Coupon đã được copy, thử Ctrl V mà xem <3</div>
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>

<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>

<script src="assets/js/material-kit.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

<script type="text/javascript">
    $(document).ready(function () {
        $('#promotion_list').dataTable();
        var clipboards = new Clipboard('button');
        $('#promotion_list').on('click', 'button', function(){
            var link = $(this).attr('data-link');
            var coupon = $(this).attr('data-clipboard-text');
            $('.modal-body').html(coupon);
            setTimeout(function () {
                window.open(link, "_blank");
            }, 1000);
        });
    });
</script>
</body>
</html>
