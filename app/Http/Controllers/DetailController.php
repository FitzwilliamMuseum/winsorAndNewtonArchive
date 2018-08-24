<?php

namespace App\Http\Controllers;

use Solarium\Core\Client\Client;
use Mews\Purifier;
use Illuminate\Http\Request;

class DetailController extends Controller
{

    protected $client;

    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }

    public function record(Request $request, $urc) {
        $configSolr = \Config::get('solarium');
        $this->client = new Client($configSolr);
        $query = $this->client->createSelect();
        $urc = \Purifier::clean($request->urc);
        $query->setQuery('unique_recipe_code:' . $urc);
        $query->setRows(1);
        $resultset = $this->client->select($query);
        $data = $resultset->getData();
        return view('pages.detail', compact('data', 'urc'));
    }
}
