<?php

namespace App\Http\Controllers;

use App\Services\BusinessService;
use App\Services\ProductService;

class ServiceController extends Controller
{
    public function actionIndex(BusinessService $bservice, ProductService $pservice)
    {
        $response = $bservice->findOne(env('API_BID'));
        $model = json_decode($response);

        $response = $pservice->findAll(['business_id' => env('API_BID')]);
        $items = json_decode($response);

        return $this->render('index', [
            'model' => $model->data,
            'items' => $items->data,
        ]);
    }

    public function actionView($id, BusinessService $bservice, ProductService $pservice)
    {
        $response = $bservice->findOne(env('API_BID'));
        $model = json_decode($response);

        $response = $pservice->findOne($id);
        $product = json_decode($response);

        $response = $pservice->getReviews($id);
        $reviews = json_decode($response);

        return $this->render('view', [
            'model' => $model->data,
            'product' => $product->data,
            'reviews' => $reviews->data,
        ]);
    }
}
