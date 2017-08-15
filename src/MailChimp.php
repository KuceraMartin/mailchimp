<?php declare(strict_types = 1);

namespace Mkucera\MailChimp;

use GuzzleHttp\Client;
use Kdyby\StrictObjects\Scream;
use Nette\Utils\Json;


class MailChimp
{
	use Scream;


	/** @var string */
	private $apiUrl;

	/** @var string */
	private $apiKey;

	/** @var Client */
	private $client;


	public function __construct(string $apiUrl, string $apiKey, Client $client)
	{
		$this->apiUrl = $apiUrl;
		$this->apiKey = $apiKey;
		$this->client = $client;
	}


	public function subscribe(string $email, string $listId)
	{
		$this->client->post($this->apiUrl . "lists/$listId/members", [
			'body' => Json::encode([
				'email_address' => $email,
				'status' => 'subscribed',
			]),
			'auth' => [NULL, $this->apiKey],
		]);
	}

}
