<?php

namespace App\Livewire\Demo\Component;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;

class JumlahRegisterBulanan extends Component
{
    public $tahun, $listTahun;
    public $name, $listName;
    public $group, $listGroup;
    public $color;
    public $firstRun = true;
    public $showDataLabels = true;
    public $pnl;
    public $colors = [
        "#FF0000",
        "#FF1A00",
        "#FF3300",
        "#FF4D00",
        "#FF6600",
        "#FF8000",
        "#FF9900",
        "#FFB200",
        "#FFCC00",
        "#FFD900",
        "#FFE600",
        "#99FF00"
    ];

    public function mount()
    {
        $this->tahun = date('Y');
    }



    protected $index = -1;
    public function render()
    {
        // $query = DB::select("
        // WITH all_months AS (
        //     SELECT generate_series(
        //         '" . $this->tahun . "-01-01'::date,
        //         '" . $this->tahun . "-12-31'::date,
        //         interval '1 month'
        //     )::date AS month
        // )
        // SELECT
        //     TO_CHAR(all_months.month, 'YYYY-MM') AS month,
        //     COALESCE(COUNT(users.id), 0) AS registration_count
        // FROM
        //     all_months
        // LEFT JOIN
        //         (select * from users   left join role_user on users.id = role_user.user_id  where role_user.role_id = 7)
        //     users ON TO_CHAR(users.created_at , 'YYYY-MM') = TO_CHAR(all_months.month, 'YYYY-MM')


        // GROUP BY
        //     TO_CHAR(all_months.month, 'YYYY-MM')
        // ORDER BY
        //     month;
        // ");

        $query = DB::select("
            WITH RECURSIVE all_months AS (
                SELECT '" . $this->tahun . "-01-01' AS month
                UNION ALL
                SELECT DATE_ADD(month, INTERVAL 1 MONTH)
                FROM all_months
                WHERE month < '" . $this->tahun . "-12-01'
            )
            SELECT
                DATE_FORMAT(all_months.month, '%Y-%m') AS month,
                COALESCE(COUNT(users.id), 0) AS registration_count
            FROM
                all_months
            LEFT JOIN (
                SELECT users.*
                FROM users
                LEFT JOIN role_user ON users.id = role_user.user_id
                WHERE role_user.role_id = 7
            ) AS users ON DATE_FORMAT(users.created_at, '%Y-%m') = DATE_FORMAT(all_months.month, '%Y-%m')
            GROUP BY
                DATE_FORMAT(all_months.month, '%Y-%m')
            ORDER BY
                month;
        ");


        $jingan = collect($query);


        // dd($jingan);
        $columnChartModel = $jingan
            ->reduce(
                function ($columnChartModel, $data) {
                    $type = $data->month;
                    $value = $data->registration_count;
                    $this->index = $this->index + 1;


                    return $columnChartModel->addColumn($type, $value, '#017bfe');
                },
                LivewireCharts::columnChartModel()
                    ->setTitle('Register Siswa Bulanan Tahun ' . $this->tahun)
                    ->setAnimated($this->firstRun)
                    ->withOnColumnClickEventName('onColumnClick')
                    ->setLegendVisibility(false)
                    ->setDataLabelsEnabled($this->showDataLabels)
                    //->setOpacity(0.25)
                    // ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
                    ->setColumnWidth(90)
                    ->withGrid()
            );


        return view('livewire.demo.component.jumlah-register-bulanan', [
            'columnChartModel' => $columnChartModel,
        ]);
    }
}
