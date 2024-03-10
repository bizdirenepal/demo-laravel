<?php

namespace App\Http\Controllers;

use App\Services\BusinessService;
use App\Services\ProductService;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function actionIndex(BusinessService $service, ProductService $pservice)
    {
        $response = $service->findOne(env('API_BID'));
        $model = json_decode($response);

        $response = $pservice->findAll(['business_id' => env('API_BID')]);
        $items = json_decode($response);

        return $this->render('index', [
            'model' => $model->data,
            'items' => $items->data,
        ]);
    }

    public function actionAboutus(BusinessService $service)
    {
        $response = $service->findOne(env('API_BID'));
        $model = json_decode($response);

        return $this->render('aboutus', [
            'model' => $model->data,
        ]);
    }

    public function actionContact(Request $request, BusinessService $service)
    {
        $response = $service->findOne(env('API_BID'));
        $model = json_decode($response);
        if ($request->isMethod('post')) {
            $response = $service->saveContact($request->get('Contact'));
            $response = json_decode($response);
            if ($response->status) {
                return redirect()->route('contact')->with('success', 'Message has been sent successfully');
            }
        }

        return $this->render('contact', [
            'model' => $model->data,
        ]);
    }

    public function actionReviews(BusinessService $service, ReviewService $rservice)
    {
        $response = $service->findOne(env('API_BID'));
        $model = json_decode($response);

        $response = $rservice->findAll(['business_id' => env('API_BID')]);
        $items = json_decode($response);

        return $this->render('reviews', [
            'model' => $model->data,
            'items' => $items->data,
        ]);
    }
}
