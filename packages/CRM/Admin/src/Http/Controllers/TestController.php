<?php

namespace CRM\Admin\Http\Controllers;

use CRM\Admin\Models\User;

class TestController {

    public function test() {
        $user = User::all();
        return response()->json(['data' => $user], 200);
    }
}