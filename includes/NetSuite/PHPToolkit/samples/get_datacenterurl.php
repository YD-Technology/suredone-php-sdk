<?php

require_once dirname(__FILE__).'/../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();

$params = new GetDataCenterUrlsRequest();
$params->account = "MYACCT1";
$response = $service->getDataCenterUrls($params);
$nshost = $response->getDataCenterUrlsResult->dataCenterUrls->webservicesDomain;

$service = new NetSuiteService();

$customer = new Customer();
$customer->lastName = "Doe";
$customer->firstName = "John";
$customer->companyName = "ABC company X";
$customer->phone = "123456789";

$request = new AddRequest();
$request->record = $customer;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}

?> 

