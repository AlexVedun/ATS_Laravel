<?php

namespace App\Observers;

use App\Models\Test;
use Carbon\Carbon;
use URLify;

class TestObserver
{
    public function creating(Test $test)
    {
        $test->alias = URLify::slug($test->name.'_'.Carbon::now()->unix());
    }

    /**
     * Handle the test "created" event.
     *
     * @param Test $test
     * @return void
     */
    public function created(Test $test)
    {
        //
    }

    /**
     * Handle the test "updated" event.
     *
     * @param Test $test
     * @return void
     */
    public function updated(Test $test)
    {
        //
    }

    /**
     * Handle the test "deleted" event.
     *
     * @param Test $test
     * @return void
     */
    public function deleted(Test $test)
    {
        //
    }

    /**
     * Handle the test "restored" event.
     *
     * @param Test $test
     * @return void
     */
    public function restored(Test $test)
    {
        //
    }

    /**
     * Handle the test "force deleted" event.
     *
     * @param Test $test
     * @return void
     */
    public function forceDeleted(Test $test)
    {
        //
    }
}
