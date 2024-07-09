<?php
$state = $_GET['state'];
if($state == 'ok'){
    echo "Payment successful";
$Ds_MerchantParameters= $_GET['Ds_MerchantParameters'];
$parametros = json_decode(base64_decode($Ds_MerchantParameters));
echo '<pre>';
print_r($parametros);


}
else{
    echo "Payment failed";
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
       $(document).ready(function() {
        var selectedDate = localStorage.getItem('selectedDate');
        var selectedTime = localStorage.getItem('selectedTime');
        var selectedPort = localStorage.getItem('selectedPort');
        console.log('Payment successful');
        console.log(selectedDate);
        console.log(selectedTime);
        console.log(selectedPort);
        $.ajax({
            url: 'updateBookings.php',
            type: 'POST',
            data: {
                selectedDate: selectedDate,
                selectedTime: selectedTime,
                selectedPort: selectedPort
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

</script>