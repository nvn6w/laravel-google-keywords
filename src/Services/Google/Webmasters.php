<?php 

namespace HighSolutions\GoogleKeywords\Services\Google;

use Google_Service_Webmasters;
use Google_Service_Webmasters_SearchAnalyticsQueryRequest;

class Webmasters
{

	private $client;

	public function __construct($client)
	{
		$this->client = $client;
	}

	public function query($params)
	{
		$request = new Google_Service_Webmasters_SearchAnalyticsQueryRequest();
        $request->setStartDate($params['startDate']->format('Y-m-d'));
        $request->setEndDate($params['endDate']->format('Y-m-d'));
        $request->setDimensions(['query', "date"]);
        $request->setAggregationType('byProperty');
	$request->setRowLimit( config('laravel-google-keywords.default.rowLimit', 1000));

        $service = new Google_Service_Webmasters($this->client);
        $analytics = $service->searchanalytics;
        return $analytics->query($params['url'], $request);
	}

}
