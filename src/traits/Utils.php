<?php

namespace Xaviator\SaturnoClient\traits;

use Illuminate\Support\Str;

trait Utils
{

    public function isShortMsisdn($msisdn)
    {

        if (is_numeric($msisdn)) {
            if (Str::length($msisdn)==10) {
                if (Str::startsWith($msisdn,['096','097','098','099'])) {
                    return true;
                }
            }
        }

        return false;

    }

    public function isMsisdn($value)
    {
        if (is_numeric($value) && strlen($value) == 12)
        {
            return true;
        }

        return false;
    }



}