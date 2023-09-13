<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $us = Country::where('country_code', 'US')->firstOrFail();
        $gh = Country::where('country_code', 'GH')->firstOrFail();

        $allEmployeesCount = Employee::count();
        $usEmployeesCount = $us->employees()->count();
        $ghEmployeesCount = $gh->employees()->count();

        return [
            //
            Stat::make('All Employees', $allEmployeesCount),
            Stat::make($us->name . ' Employees', $usEmployeesCount),
            Stat::make($gh->name . ' Employees', $ghEmployeesCount),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}