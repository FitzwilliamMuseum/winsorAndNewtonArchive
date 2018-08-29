<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Solarium\Core\Client\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchController extends BaseController
{

    protected $client;

    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }

    /**
     * The index page of the search system
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.search');
    }

    /**
     *
     */
    public function results(Request $request)
    {

        // Define how many items we want to be visible in each page
        $perPage = 20;
        $configSolr = \Config::get('solarium');
        $this->client = new Client($configSolr);
        $query = $this->client->createSelect();
        $query->setQuery($request->get('query'));
        $query->setQueryDefaultOperator('AND');
        $queryString = $request->get('query');
        $from = ($request->get('page', 1) - 1) * $perPage;
        $query->setStart($from);
        $query->setRows($perPage);
        $data  = $this->client->select($query);
        $number = $data->getNumFound();
        $records = $data->getDocuments();
        $paginate = new LengthAwarePaginator($records, $number, $perPage);
        $paginate->setPath($request->fullUrl());
        return view('pages.results', compact('records', 'number', 'paginate', 'queryString'));
    }




    public function ping()
    {
        // create a ping query
        $ping = $this->client->createPing();

        // execute the ping query
        try {
            $this->client->ping($ping);
            return response()->json('OK');
        } catch (\Solarium\Exception $e) {
            return response()->json('ERROR', 500);
        }
    }
}
