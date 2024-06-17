<?php

namespace App\Http\Controllers;

use App\Models\BorrowDetail;
use App\Services\BorrowDetailService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowingHistoryController extends Controller
{
    public function showAllHistory(Request $request) {
        $keyword = $request->get('keyword');
        if ($keyword) {
            $type = $request->get('type');
            $history = BorrowDetailService::findByKeyword($keyword, $type);
        } else {
            $history = BorrowDetail::paginate(8);
        }
        return view('borrowing-history',
                     ['history' => $history, 'resetUrl' => '/borrowing-history']);
    }

    public function unreturnedBook(Request $request) {
        $keyword = $request->get('keyword');
        if ($keyword) {
            $type = $request->get('type');
            $unreturnedBooks = BorrowDetailService::findUnreturndeBookByKeyword($keyword, $type);
        } else {
            $unreturnedBooks = BorrowDetail::where('return_date', '>', Carbon::now())->paginate(8);
        }
        return view('borrowing-history', 
                    ['history' => $unreturnedBooks, 'resetUrl' => '/unreturned-books']);
    }
}
