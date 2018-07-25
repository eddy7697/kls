<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>超商頁面確認</title>
</head>
<body>

    <p>資料正在傳輸中，請稍後...</p>

    <form id="go_checkout" action="/checkout/billing" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="shipping_method" id="shipping_method" value="">
    </form>

    <script>
    document.getElementById("shipping_method").value = localStorage.choosedShipping;
    // document.getElementsByName("shipping_method").value = localStorage.choosedShipping;
    localStorage.setItem('logistic_cache', JSON.stringify({
        MerchantTradeNo: '{{$logisticsForm['MerchantTradeNo']}}',
        LogisticsSubType: '{{$logisticsForm['LogisticsSubType']}}',
        CVSStoreID: '{{$logisticsForm['CVSStoreID']}}',
        CVSStoreName: '{{$logisticsForm['CVSStoreName']}}',
        CVSAddress: '{{$logisticsForm['CVSAddress']}}',
        CVSTelephone: '{{$logisticsForm['CVSTelephone']}}'
    }));

    document.getElementById("go_checkout").submit();

    // return;
    // opener.GetCvs({
    //     MerchantTradeNo: '{{$logisticsForm['MerchantTradeNo']}}',
    //     LogisticsSubType: '{{$logisticsForm['LogisticsSubType']}}',
    //     CVSStoreID: '{{$logisticsForm['CVSStoreID']}}',
    //     CVSStoreName: '{{$logisticsForm['CVSStoreName']}}',
    //     CVSAddress: '{{$logisticsForm['CVSAddress']}}',
    //     CVSTelephone: '{{$logisticsForm['CVSTelephone']}}'
    // });
    // window.close();
    </script>

</body>
</html>
