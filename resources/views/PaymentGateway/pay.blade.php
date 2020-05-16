
<body onload="document.frm1.submit()">
    <form action="{{$url}}" name="frm1" method="post">
        <div>
            <center>
                <img src="../../assets/img/logo/xtremeworkers-logo-black.png" alt="xtremeworkers-logo-black.png" width="210">
                <h2>Your payment is processing Please do not close the browser.......</h2>
            </center>
        <div>
        <input type="hidden" name="signature" value='{{$signature}}'/>
        <input type="hidden" name="orderNote" value='{{$orderNote}}'/>
        <input type="hidden" name="orderCurrency" value='{{$orderCurrency}}'/>
        <input type="hidden" name="customerName" value='{{$customerName}}'/>
        <input type="hidden" name="customerEmail" value='{{$customerEmail}}'/>
        <input type="hidden" name="customerPhone" value='{{$customerPhone}}'/>
        <input type="hidden" name="orderAmount" value='{{$orderAmount}}'/>
        <input type ="hidden" name="notifyUrl" value='{{$notifyUrl}}'/>
        <input type ="hidden" name="returnUrl" value='{{$returnUrl}}'/>
        <input type="hidden" name="appId" value='{{$appId}}'/>
        <input type="hidden" name="orderId" value='{{$orderId}}'/>
    </form>
  </body>