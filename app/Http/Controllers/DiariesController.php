<?php

namespace App\Http\Controllers;

use App\Services\Diary;
use App\Shared\PageInfo;
use Carbon\Carbon;
use Inertia\Response;

class DiariesController extends Controller
{
    public function index(Diary $diaryService): Response
    {
//        $now = Carbon::now();
//        $before = $now->copy()->endOfWeek();
//        $after = $now->copy()->subWeeks(3)->startOfWeek();
//        $weeks = $diaryService->getDiaries($after, $before);

        return inertia('Diaries', [
            'pageInfo' => new PageInfo(title: __('page-titles.diaries'))
        ]);
    }
}
