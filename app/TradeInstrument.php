<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TradeInstrument extends Model
{
    protected $guarded = [];

    /**
     * Get all of the assets for the TradeInstrument
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assets()
    {
        return $this->hasMany(TradeAsset::class);
    }
}
