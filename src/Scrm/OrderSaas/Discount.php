<?php

namespace Xcyc\OrderSaas;

class Discount
{
    public function use()
    {
        $data = [
            'use discount',
        ];
        return response()->json($data);
    }
}