<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\Metric;

use CachetHQ\Cachet\Models\Metric;

/**
 * This is the metric interface.
 *
 * @author James Brooks <james@alt-three.com>
 */
interface MetricInterface
{
    /**
     * Returns metrics for the last hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     * @param int                            $minute
     *
     * @return array
     */
    public function getPointsLastHour(Metric $metric, $hour, $minute);

    /**
     * Returns metrics for a given hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     *
     * @return array
     */
    public function getPointsByHour(Metric $metric, $hour);

    /**
     * Returns metrics for the week.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $day
     *
     * @return array
     */
    public function getPointsForDayInWeek(Metric $metric, $day);
}
