<?php

namespace App\Helpers;

use Carbon\Carbon;

class Helper {

    public function formatDate($date = null) {
        if($date) {
            return Carbon::parse($date)->format('M d, Y');
        }
    }

    public function formatDateTime($date = null) {
        if($date) {
            return Carbon::parse($date)->format('M d, Y H:i:s');
        }
    }
}
