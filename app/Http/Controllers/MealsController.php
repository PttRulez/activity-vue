<?php

namespace App\Http\Controllers;

use App\Shared\PageInfo;
use Inertia\Response;
use function inertia;

class MealsController extends Controller
{
    public function index(): Response
    {
        return inertia('Meals', [
            'pageInfo' => new PageInfo(title: __('page-titles.meals'))
        ]);
    }
}
