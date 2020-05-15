
<body onload="document.frm1.submit()">
    <form action="{{$url}}" name="frm1" method="post">
        <p>Please wait.......</p>
        <input type="text" name="signature" value='{{$signature}}'/>
        <input type="text" name="orderNote" value='{{$orderNote}}'/>
        <input type="text" name="orderCurrency" value='{{$orderCurrency}}'/>
        <input type="text" name="customerName" value='{{$customerName}}'/>
        <input type="text" name="customerEmail" value='{{$customerEmail}}'/>
        <input type="text" name="customerPhone" value='{{$customerPhone}}'/>
        <input type="text" name="orderAmount" value='{{$orderAmount}}'/>
        <input type ="text" name="notifyUrl" value='{{$notifyUrl}}'/>
        <input type ="text" name="returnUrl" value='{{$returnUrl}}'/>
        <input type="text" name="appId" value='{{$appId}}'/>
        <input type="text" name="orderId" value='{{$orderId}}'/>
    </form>
  </body>