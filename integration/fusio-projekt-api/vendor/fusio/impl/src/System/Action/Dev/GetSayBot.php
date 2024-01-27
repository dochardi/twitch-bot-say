<?php
namespace Fusio\Impl\System\Action\Dev;

use Fusio\Engine\ActionAbstract;
use Fusio\Engine\ContextInterface;
use Fusio\Engine\ParametersInterface;
use Fusio\Engine\RequestInterface;


class GetSayBot extends ActionAbstract
{
    public function handle(RequestInterface $request, ParametersInterface $configuration, ContextInterface $context): mixed
    {


$client = $this->connector->getConnection('twitch');



$type=$request->get('type');
$lang=$request->get('lang');
$user=$request->get('userto');
$userfrom=$request->get('sendfrom');
$streamer=$request->get('streamer');
$urls=$request->get('url');

$url='https://raw.githubusercontent.com/dochardi/twitch-bot-say-api-data/main/lang/'.$lang.'/'.$type.'.json';


$resp = $client->request('GET', $url, []);
$data=json_decode($resp->getBody(),true);

$totalRows=count($data);
$randomRowIndex = rand(0, $totalRows - 1);
$randomRow=$data[$randomRowIndex]['quote_text'];


$randomRow = str_replace("[user]", $user, $randomRow);
$randomRow = str_replace("[url]", $urls, $randomRow);
$randomRow = str_replace("[streamer]", $streamer, $randomRow);
$randomRow = str_replace("[username]", $userfrom, $randomRow);

return $this->response->build(200, [], $randomRow);
    }
}
