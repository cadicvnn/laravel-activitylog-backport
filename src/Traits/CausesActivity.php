<?php

namespace Spatie\Activitylog\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Activitylog\ActivitylogServiceProvider;
use Spatie\Activitylog\Models\Activity;

trait CausesActivity
{
    /**
     * @return MorphMany
     */
    public function activity()
    {
        return $this->morphMany(ActivitylogServiceProvider::determineActivityModel(), 'causer');
    }

    /**
     * @deprecated Use activity() instead
     * @return MorphMany
     */
    public function loggedActivity()
    {
        return $this->activity();
    }
}
