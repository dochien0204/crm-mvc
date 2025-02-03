<?php

namespace CRM\Admin\Http\Controllers;

class TestController {

    public function test() {
        return response()->json(['data' => 'Test successfully'], 200);
    }
}