<table border="0" width="550">
    <tr>
        <td style="text-align: center" colspan="4">
            <img src="https://kls-baggage.com.tw/img/loadingText.png" width="200">
        </td>
    </tr>
    <tr>
        <td colspan="4" style="padding: 10px; border: #ccc 10px solid">
          <h2>感謝您的訂購</h2>
          <hr />
          <p>親愛的顧客您好。</p>
          <p>您的訂單我們已經著手處理，感謝您訂購本公司的商品服務。<br />
            以下是您的訂購商品清單資料，<br />
            請於7日內匯款，超過時間麻煩請重新訂購，<br />
            收到您的款項以後我們會盡速處理您的商品寄送事宜。
          </p>
        </td>
    </tr>
    <tr>
      <td colspan="4" style="padding: 10px;">
        <h3>訂單編號：{{$merchantIdCache['MerchantTradeNo']}}</h3>
      </td>
    </tr>
    <tr>
      <td style="padding: 10px; background: #ccc">
        商品名稱
      </td>
      <td style="padding: 10px; background: #ccc">
        數量
      </td>
      <td style="padding: 10px; background: #ccc">
        單價
      </td>
      <td style="padding: 10px; background: #ccc">
        小計
      </td>
    </tr>
    @foreach ($cartInfo as $item)
        <tr>
          <td style="padding: 10px;">
            {{$item->Name}}
          </td>
          <td style="padding: 10px;">
            {{$item->qty}}
          </td>
          <td style="padding: 10px;">
            {{number_format($item->price)}}
          </td>
          <td style="padding: 10px;">
            {{number_format($item->total)}}
          </td>
        </tr>
    @endforeach


    {{-- <tr>
      <td colspan="1" style="padding: 10px; border-top: #ccc thin solid">
        購物金折抵：
      </td>
      <td colspan="3" style="padding: 10px; border-top: #ccc thin solid">
        NT$ {{number_format($data['pointUsage'])}}
      </td>
    </tr>
    <tr>
      <td colspan="1" style="padding: 10px; border-top: #ccc thin solid">
        運費計算
        @php
            switch ($data['shippingMethod']) {
                case 'delivery':
                    echo ' (國內宅配)';
                    break;
                case 'cvs':
                    echo ' (超商取貨)';
                    break;
            }
        @endphp
        ：
      </td>
      <td colspan="3" style="padding: 10px; border-top: #ccc thin solid">
        NT$ {{number_format($data['shippingCosts'])}}
      </td>
    </tr>
    <tr>
        <td colspan="1" style="padding: 10px; border-top: #ccc thin solid">付款方式：</td>
        <td colspan="3" style="padding: 10px; border-top: #ccc thin solid">
            @php
                switch ($data['ChoosePayment']) {
                    case 'Credit':
                        echo '信用卡付款';
                        break;
                    case 'ATM':
                        echo 'ATM轉帳付款';
                        break;
                    case 'cod':
                        echo '超商取貨付款';
                        break;
                }
            @endphp
        </td>
    </tr> --}}
    <tr>
        <td colspan="1" style="padding: 10px; border-top: #ccc 5px solid">
            總計：
        </td>
        <td colspan="3" style="padding: 10px; border-top: #ccc 5px solid">
            NT$ {{number_format((int)$data['TotalAmount'] - (int)$data['pointUsage'] + (int)$data['shippingCosts'])}}
        </td>
    </tr>
    {{-- @if ($data['pointCount'])
        <tr>
            <td colspan="1" style="padding: 10px; border-top: #ccc 5px solid">
                可累積購物金：
            </td>
            <td colspan="3" style="padding: 10px; border-top: #ccc 5px solid">
                {{$data['pointCount']}}元
            </td>
        </tr>
    @endif --}}

</table>
