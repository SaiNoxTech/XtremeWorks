<form  id="redirectForm" method="POST" action="paymentrequest">
    @csrf
    <div class="form-group">
        <input type="number" name="AmountInUsd" class="form-control" placeholder="Enter Amount in $" required="">
        <!--input class="form-control" name="appId" placeholder="Enter App ID here (Ex. 123456a7890bc123defg4567)" value="46425743695b6e0d5d9093c4552464"/ hidden-->
        <?php
            $today = date("Ymd");
            $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
            $unique = $today . $rand; 
        ?>
        <input class="form-control" name="orderId" placeholder="Enter Order ID here (Ex. order00001)" value="{{$unique}}"/ hidden>
        <input class="form-control" name="orderCurrency" value="INR" placeholder="Enter Currency here (Ex. INR)"/ hidden>
        <input class="form-control" name="orderNote" placeholder="Enter Order Note here (Ex. Test order)" value="Test"/ hidden>
        <input class="form-control" name="customerName" placeholder="Enter your name here (Ex. John Doe)" value="aakash"/ hidden>
        <input class="form-control" name="customerEmail" placeholder="Enter your email address here (Ex. Johndoe@test.com)" value="aakashsingh1999@gmail.com"/ hidden>
        <input class="form-control" name="customerPhone" placeholder="Enter your phone number here (Ex. 9999999999)" value="9292929292"/ hidden>
        <input class="form-control" name="returnUrl" value="http://localhost/XtremeWorks/user/paymentresponse" hidden>
        <input class="form-control" name="notifyUrl" value="http://localhost/XtremeWorks/user/paymentrequest" placeholder="Enter the URL to get server notificaitons (Ex. www.example.com)"/ hidden>
    </div>
    <button type="submit" value="Pay" class="btn btn-rounded btn-primary">Deposit Now</button>
    
</form>

