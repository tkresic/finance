<?php

namespace App\Repositories;

use App\Models\Bill;
use App\Models\Shift;
use Illuminate\Support\Carbon;

class ShiftRepository extends ModelRepository
{
    public function __construct(Shift $shift)
    {
        parent::__construct($shift);
    }

    /**
     * Returns latest shift.
     *
     * @return Shift|null
     */
    public function latest(): ?Shift
    {
        return $this->model->orderByDesc('id')->first();
    }

    /**
     * Calculates gross for a shit.
     *
     * @param string $start
     * @param string $end
     * @return int
     */
    public function calculateGross(string $start, string $end): int
    {
        $start = Carbon::parse($start)->format('Y-m-d H:i:s');
        return Bill::whereBetween('created_at', [$start, $end])->sum('gross');
    }
}
