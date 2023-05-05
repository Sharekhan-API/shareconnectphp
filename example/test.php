<?php
namespace Sharekhan\Example;

require_once("../src/SharekhanApi.php");


use Sharekhan\SharekhanApi;

class SharekhanApiTest {

    private $sharekhanApi;
    private $accessToken;
    private $apiKey;

    public function __construct() {
        $this->apiKey = "enter-your-apiKey";
        $this->accessToken = "enter-your-accessToken";
        $this->sharekhanApi = new SharekhanApi();
    }

    public function testGetLoginURL() {
        $versionId = '1005';
        $loginUrl = $this->sharekhanApi->getLoginURL($this->apiKey,$versionId);
          echo "Login URL: <a href=\"$loginUrl\">$loginUrl</a>\n";
    }

    public function testGenerateToken() {
        $requestToken = "enter-your-request-token";
        $secretKey = "enter-your-secret-key";
       
        $userId = "12345";
         // Call method under test
         $response = $this->sharekhanApi->generateToken($requestToken, $secretKey, $this->apiKey,$userId);

         // Verify response
         if (empty($response)) {
             echo 'Response is empty';
         }
         if (!json_decode($response)) {
             echo 'Response is not valid JSON';
         }
         die;
     }
     public function testPlaceOrder() {
        $params = array(
            'customerId' => 0000000,
            'scripCode' => 251731,
            'tradingSymbol' => 'GOLDPETAL',
            'exchange' => 'MX',
            'transactionType' => 'B',
            'quantity' => 1,
            'disclosedQty' => 0,
            'executedQty' => 0,
            'price' => '5845',
            'triggerPrice' => '0',
            'rmsCode' => 'ANY',
            'afterHour' => 'N',
            'orderType' => 'NORMAL',
            'channelUser' => '0000000',
            'validity' => 'GFD',
            'requestType' => 'NEW',
            'productType' => 'INVESTMENT',
            'instrumentType' => 'FS',
            'strikePrice' => '-1',
            'optionType' => 'XX',
            'expiry' => '28/04/2023'
        );
        // Call method under test
        $response = $this->sharekhanApi->placeOrder($params, $this->apiKey, $this->accessToken);
    
        // Verify response
        if (empty($response)) {
            echo 'Response is empty';
        }
        if (!json_decode($response)) {
            echo 'Response is not valid JSON';
        }
        die;
    }

    public function testModifyOrder() {
        $params = array(
            'orderId' => 0000000,
            'customerId' => 0000000,
            'scripCode' => 251731,
            'tradingSymbol' => 'GOLDPETAL',
            'exchange' => 'MX',
            'transactionType' => 'B',
            'quantity' => 1,
            'disclosedQty' => 0,
            'executedQty' => 0,
            'price' => '5844',
            'triggerPrice' => '0',
            'rmsCode' => 'SKMCX12',
            'afterHour' => 'N',
            'orderType' => 'NORMAL',
            'channelUser' => '0000000',
            'validity' => 'GFD',
            'requestType' => 'MODIFY',
            'productType' => 'INVESTMENT',
            'instrumentType' => 'FS',
            'strikePrice' => '-1',
            'optionType' => 'XX',
            'expiry' => '28/04/2023'
        );
        // Call method under test
        $response = $this->sharekhanApi->modifyOrder($params, $this->apiKey, $this->accessToken);
    
        // Verify response
        if (empty($response)) {
            echo 'Response is empty';
        }
        if (!json_decode($response)) {
            echo 'Response is not valid JSON';
        }
        die;
    }
    public function testCancelOrder() {
        $params = array(
            'orderId' => 0000000,
            'customerId' => 0000000,
            'scripCode' => 251731,
            'tradingSymbol' => 'GOLDPETAL',
            'exchange' => 'MX',
            'transactionType' => 'B',
            'quantity' => 1,
            'disclosedQty' => 0,
            'executedQty' => 0,
            'price' => '5844',
            'triggerPrice' => '0',
            'rmsCode' => 'SKMCX12',
            'afterHour' => 'N',
            'orderType' => 'NORMAL',
            'channelUser' => '0000000',
            'validity' => 'GFD',
            'requestType' => 'CANCEL',
            'productType' => 'INVESTMENT',
            'instrumentType' => 'FS',
            'strikePrice' => '-1',
            'optionType' => 'XX',
            'expiry' => '28/04/2023'
        );
        // Call method under test
        $response = $this->sharekhanApi->cancelOrder($params, $this->apiKey, $this->accessToken);
        
    
        // Verify response
        if (empty($response)) {
            echo 'Response is empty';
        }
        if (!json_decode($response)) {
            echo 'Response is not valid JSON';
        }
        die;
    }
    public function testFunds() {
        $exchange = "MX";
        $customerId = "0000000";
        // Call method under test
        $response = $this->sharekhanApi->getFunds($exchange,$customerId, $this->apiKey, $this->accessToken);
        
       // Verify response
if (empty($response)) {
    echo 'Response is empty';
    }
    if (!json_decode($response)) {
    echo 'Response is not valid JSON';
    }
    die;
    }
    
    public function testReports() {
        $customerId = "0000000";
        // Call method under test
        $response = $this->sharekhanApi->getReports($customerId, $this->apiKey, $this->accessToken);
    
   // Verify response
   if (empty($response)) {
    echo 'Response is empty';
}
if (!json_decode($response)) {
    echo 'Response is not valid JSON';
}
die;

    }
    public function testPositions() {
        $customerId = "0000000";
        // Call method under test
        $response = $this->sharekhanApi->getPositions($customerId, $this->apiKey, $this->accessToken);
    
   // Verify response
   if (empty($response)) {
    echo 'Response is empty';
}
if (!json_decode($response)) {
    echo 'Response is not valid JSON';
}
die;
 }
 public function testHistory() {
    $exchange = "MX";
    $customerId = "0000000";
    $orderId = "0000000";
    // Call method under test
    $response = $this->sharekhanApi->getHistory($exchange,$customerId,$orderId, $this->apiKey, $this->accessToken);

// Verify response
if (empty($response)) {
echo 'Response is empty';
}
if (!json_decode($response)) {
echo 'Response is not valid JSON';
}
die;
}
public function testTrades() {
    $exchange = "NC";
    $customerId = "0000000";
    $orderId = "0000000";
    // Call method under test
    $response = $this->sharekhanApi->getTrades($exchange,$customerId,$orderId, $this->apiKey, $this->accessToken);

// Verify response
if (empty($response)) {
echo 'Response is empty';
}
if (!json_decode($response)) {
echo 'Response is not valid JSON';
}
die;
}

public function testHoldings() {
   
    $customerId = "0000000";
    // Call method under test
    $response = $this->sharekhanApi->getHoldings($customerId, $this->apiKey, $this->accessToken);

// Verify response
if (empty($response)) {
echo 'Response is empty';
}
if (!json_decode($response)) {
echo 'Response is not valid JSON';
}
die;
}
public function testActiveScrips() {
   
    $exchange = "NC";
    // Call method under test
    $response = $this->sharekhanApi->getActiveScrips($exchange, $this->apiKey, $this->accessToken);

// Verify response
if (empty($response)) {
echo 'Response is empty';
}
if (!json_decode($response)) {
echo 'Response is not valid JSON';
}
die;
}

public function testHistorical() {
   
    $exchange = "MX";
    $scripcode = "251800";
    $interval = "daily";
    // Call method under test
    $response = $this->sharekhanApi->getHistorical($exchange,$scripcode,$interval, $this->apiKey, $this->accessToken);

// Verify response
if (empty($response)) {
echo 'Response is empty';
}
if (!json_decode($response)) {
echo 'Response is not valid JSON';
}
die;
}

}
$test = new SharekhanApiTest();
// $test->testGetLoginURL();
$test->testgenerateToken();
// $test->testPlaceOrder();
// $test->testModifyOrder();
// $test->testCancelOrder();
// $test->testFunds();
// $test->testReports();
// $test->testPositions();
// $test->testHistory();
// $test->testTrades();
// $test->testHoldings();
// $test->testActiveScrips();
// $test->testHistorical();
?>
<script src="http://localhost/sharekhan/src/socket.js"></script><script type="text/javascript">
    var accesstoken = 'enter-your-access-token';
    var feedName = 'ltp';
    var feedValue = 'MX569';
    websocket(accesstoken, feedName, feedValue);
</script>













