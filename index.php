<?php
include_once(dirname(__FILE__) . '/src/Vudn/OnePay/OnePay.php');
$data = array(
	'vpc_Amount' => 10000
	,'Title' => 'VPC 3-Party'
	,'AgainLink' => 'https://mtf.onepay.vn/vpcpay/vpcpay.op'
	,'email' => 'a@gmail.com'
	,'type' => 'international'
	,'vpc_MerchTxnRef' => date('Ymdhis').rand()
	,'vpc_OrderInfo' => 1
	,'vpc_ReturnURL' =>'http://travelusssw.com/wp-admin/admin-ajax.php?action=update_register'
	,'vpc_TicketNo' => $_SERVER ['REMOTE_ADDR']
);
$op = new Vudn\OnePay\OnePay($data);
echo $op->buildUrl();


// http://travelusssw.com/wp-admin/admin-ajax.php?action=update_register
// &vpc_OrderInfo=JSECURETEST01
// &vpc_3DSECI=06
// &vpc_AVS_Street01=Tran+Quang+Khai
// &vpc_Merchant=TESTONEPAY
// &vpc_Card=VC
// &vpc_AcqResponseCode=00
// &AgainLink=http%253A%252F%252Ftravelusssw.com%252Fvisa%252F
// &vpc_AVS_Country=VN
// &vpc_AuthorizeId=831000
// &vpc_3DSenrolled=N
// &vpc_RiskOverallResult=ACCEPT
// &vpc_ReceiptNo=174663
// &vpc_TransactionNo=556501
// &vpc_AVS_StateProv=0
// &vpc_Locale=en
// &vpc_TxnResponseCode=0
// &vpc_Amount=1000000
// &vpc_BatchNo=20180125
// &vpc_Version=2
// &vpc_AVSResultCode=Y
// &vpc_Command=pay
// &vpc_Message=Approved
// &Title=VPC+3-Party
// &vpc_SecureHash=AB48B2D491479C41F5B91FCDFFDFD20021B81084F12BCC06F62F75A2C2E46DD6
// &vpc_CardNum=444400xxxxxx4206
// &vpc_CSCResultCode=M
// &vpc_MerchTxnRef=2018012506242428067
// &vpc_VerType=3DS
// &vpc_VerSecurityLevel=06
// &vpc_AVS_City=Hanoi+http://travelusssw.com/wp-admin/admin-ajax.php?action=update_register
// &vpc_OrderInfo=JSECURETEST01
// &vpc_3DSECI=06
// &vpc_AVS_Street01=Tran+Quang+Khai
// &vpc_Merchant=TESTONEPAY
// &vpc_Card=VC
// &vpc_AcqResponseCode=00
// &AgainLink=http%253A%252F%252Ftravelusssw.com%252Fvisa%252F
// &vpc_AVS_Country=VN
// &vpc_AuthorizeId=831000
// &vpc_3DSenrolled=N
// &vpc_RiskOverallResult=ACCEPT
// &vpc_ReceiptNo=174663
// &vpc_TransactionNo=556501
// &vpc_AVS_StateProv=0
// &vpc_Locale=en
// &vpc_TxnResponseCode=0
// &vpc_Amount=1000000
// &vpc_BatchNo=20180125
// &vpc_Version=2
// &vpc_AVSResultCode=Y
// &vpc_Command=pay
// &vpc_Message=Approved
// &Title=VPC+3-Party
// &vpc_SecureHash=AB48B2D491479C41F5B91FCDFFDFD20021B81084F12BCC06F62F75A2C2E46DD6
// &vpc_CardNum=444400xxxxxx4206
// &vpc_CSCResultCode=M&vpc_MerchTxnRef=2018012506242428067&vpc_VerType=3DS&vpc_VerSecurityLevel=06&vpc_AVS_City=Hanoi+