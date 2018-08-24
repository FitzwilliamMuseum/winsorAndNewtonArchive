<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Solarium\Core\Client\Client;
use Illuminate\Http\Request;

class BrowseController extends BaseController
{


    protected $client;

    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }

    public function solr($querystring){

        $configSolr = \Config::get('solarium');
        $this->client = new Client($configSolr);
        $this->client->getEndpoint('localhost')->setCore('winsorSearches');
        switch($querystring){
            case 'materials':
                $type = 'm';
                break;
            case 'names':
                $type = 'ns';
                break;
            case 'fullnames':
                $type = 'n';
                break;
            case 'pigments':
                $type = 'p';
                break;
            case 'books':
                $type = 'b';
                break;
            case 'topics':
                $type = 't';
                break;
            default:
                $type = 'm';
                break;
        }
        $query = $this->client->createSelect();
        $query->setQuery('type:' . $type);
        $query->setRows(1500);
        $resultset = $this->client->select($query);
        $data = $resultset->getData();
        return view('pages.browsed', compact('data', 'querystring'));
    }
}
