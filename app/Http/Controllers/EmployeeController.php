<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        return view('get-employee-data');
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $workData = $request->input('workData');
        $uri = $request->path();
        $url = $request->url();
        echo $id;
        echo '<br />';
        echo $name;
        echo '<br />';
        echo $email;
        echo '<br />';
        echo $workData;
        echo '<br />';
        echo $uri;
        echo '<br />';
        echo $url;
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $name = $input['name'];
        $email = $input['email'];
        $workData = $input['workData'];
        echo $id;
        echo '<br />';
        echo $name;
        echo '<br />';
        echo $email;
        echo '<br />';
        echo $workData;
    }

    public function jsonUpload(Request $request)
    {
        $data = $request->input('address');
        $data2 = serialize($data);
        var_dump($data2);
    }

    public function saveApiData(Request $request)
    {
        $client = new Client(['verify' => 'C:\php-8.2.22\cacert.pem']);
        $res = $client->request('GET', 'https://api.aruljohn.com/ip/json', [
            'form_params' => [
                'client_id' => 'test_id',
                'secret' => 'test_secret',
            ]
        ]);
        echo ($res->getStatusCode());
        echo ('<br />');
        var_dump($res->getHeader('content-type'));
        echo ('<br />');
        $data2 = $res->getBody();
        echo ($data2);
        echo ('<br />');
        return view('textareaj', compact('data2'));
    }
}