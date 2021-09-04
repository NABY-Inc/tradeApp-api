<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TradeAsset extends Model
{
    protected $guarded = [];

    /**
     * Get the instrument that owns the TradeAsset
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instrument()
    {
        return $this->belongsTo(TradeInstrument::class);
    }
}
