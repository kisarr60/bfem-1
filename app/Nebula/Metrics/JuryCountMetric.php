<?php

namespace App\Nebula\Metrics;

use Larsklopstra\Nebula\Metrics\ValueMetric;
use App\Models\JurySetting;

class JuryCountMetric extends ValueMetric
{
    public function calculate()
    {
		return $this->count(JurySetting::class);
    }

    // public function label()
    // {
    // 	return '';
    // }
}
