<?php
/**
 *
 */

namespace SixPlus;

class Application
{
	public function __construct()
	{
		//need request/response factory/builder as dependency, so run() works

		//need page service to find page data
	}

	public function run()
	{
		$request = $this->builder->getServerRequest();

		$page = $this->page_service->findPage($request);

		$response = $this->builder->buildHtmlResponse($page);

		//send response to browser
		$this->sendResponse($response);
	}

	private function sendResponse($response)
	{
		//get all headers from response and set them

		//get http status code and set?

		//output body
	}
}
