<?php

namespace App\Livewire\Chart;

use Livewire\Component;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use DB;

class LineChart extends Component
{
    public $tahun, $listTahun;
    public $name, $listName;
    public $group, $listGroup;
    public $color;
    public $firstRun = true;
    public $showDataLabels = true;
    public $pnl;
    public $colors = [
        "#FF0000", "#FF1A00", "#FF3300", "#FF4D00", "#FF6600",
        "#FF8000", "#FF9900", "#FFB200", "#FFCC00", "#FFD900",
        "#FFE600", "#99FF00"
    ];



    protected $index = -1;

    public function mount()
    {
        $this->listGroup = DB::select("select group_code, group_name  from executive_group_summary");
        $this->group = 'PNL';
        $this->tahun = date('Y');
        $this->name = 'Cost of Referal';

        $this->listName = DB::select("SELECT
            DISTINCT name
            FROM
        executive_summary_item esi where group_code = 'PNL'
            ORDER BY
            name ASC;");
        $this->listTahun = DB::select("SELECT
        DISTINCT EXTRACT(
          YEAR
          FROM
            start_date:: date
        ) AS tahun
      FROM
        executive_summary_item esi
        ORDER BY
         EXTRACT(
          YEAR
          FROM
            start_date:: date
        ) ASC;");
    }

    public function updated($property)
    {
        if ($property == 'group') {
            $this->listName = DB::select("SELECT
            DISTINCT name
            FROM
            executive_summary_item esi where group_code = '" . $this->group . "'
            ORDER BY
            name ASC;");

            $this->name = $this->listName[0]->name;
        }
    }

    public function render()
    {
        $asu = DB::select("select name, sum(account) as accounts , start_date::date  from executive_summary_item esi where group_code = '" . $this->group . "' and  EXTRACT(
            YEAR
            FROM
              start_date:: date
          ) = $this->tahun and name= '" . $this->name . "'  group by name, start_date order by start_date asc ;");
        $jingan = collect($asu);
        // dd($jingan);
        $columnChartModel = $jingan
            ->reduce(function ($columnChartModel, $data) {
                $type = date('F Y', strtotime($data->start_date));
                $value = $data->accounts;
                $this->index = $this->index + 1;

                return $columnChartModel->addColumn($type, $value, $this->colors[$this->index]);
            }, LivewireCharts::columnChartModel()
                    ->setTitle($this->name . ' Group (' . $this->group . ') - ' . $this->tahun)
                    ->setAnimated($this->firstRun)
                    ->withOnColumnClickEventName('onColumnClick')
                    ->setLegendVisibility(true)
                    ->setDataLabelsEnabled($this->showDataLabels)
                    //->setOpacity(0.25)
                    // ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
                    ->setColumnWidth(90)
                    ->withGrid()
            );

        return view('livewire.chart.line-chart', [
            'info' => $asu,
            'columnChartModel' => $columnChartModel,
        ]);
    }
}
