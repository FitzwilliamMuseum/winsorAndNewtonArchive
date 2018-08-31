<?php

namespace App\Http\Controllers;

use Solarium\Core\Client\Client;
use Mews\Purifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class DetailController extends Controller
{

    /** The Solarium client
     * @var \Solarium\Client
     */
    protected $client;

    /** Construct the client
     *
     * @param \Solarium\Client $client
     */
    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }

    /** Get the record
     * @param Request $request
     * @param $urc
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function record(Request $request, $urc) {
        $key = md5($urc . 'details');
        $expiresAt = now()->addMinutes(3600);

        if (Cache::has($key)) {
            $data = Cache::store('file')->get($key);
        } else {
            $configSolr = \Config::get('solarium');
            $this->client = new Client($configSolr);
            $query = $this->client->createSelect();
            $urc = \Purifier::clean($request->urc, array('HTML.Allowed' => ''));
            $query->setQuery('unique_recipe_code:' . $urc);
            $query->setRows(1);
            $resultset = $this->client->select($query);
            $data = $resultset->getData();
            Cache::store('file')->put($key, $data, $expiresAt);
        }
        return view('pages.detail', compact('data', 'urc'));
    }
}
