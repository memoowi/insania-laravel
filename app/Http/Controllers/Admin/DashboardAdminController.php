<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('dashboard.features.welcome');
    }
    public function serviceNew()
    {
        return view('dashboard.features.service-new');
    }
    public function serviceSave(Request $request)
    {
        $client = new Client();

        $response = $client->request('POST', 'https://api.imgbb.com/1/upload', [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'key' => config('services.imgbb.api_key'),
                'image' => base64_encode(file_get_contents($request->file('image')->path())),
            ],
        ]);

        $body = json_decode($response->getBody(), true);
        $imageUrl = $body['data']['url'];

        $data = new Service();
        $data->image = $imageUrl;
        $data->service_name = $request->service_name;
        $data->price = $request->price;
        $data->save();  
        
        // $data = $request->all();
        // $data['image'] = $imageUrl;
        // Service::create($data);

        return redirect()->route('admin.service')->with('success', 'Service created successfully');
        // echo $imageUrl;
    }
    public function service()
    {
        return view('dashboard.features.service', [
            'services' => Service::all()
        ]);
    }
}
