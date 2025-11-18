<?php

namespace App\DataTables;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FeatureDatatable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder<Category> $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'backend.feature.action')
            ->addIndexColumn()
            ->editColumn('image', function($data) {
                return !is_null($data->image)
                    ? '<img src="' . asset('upload/feature/' . $data->image) . '" style="width:40px;height:40px;border-radius:50%;" />'
                    : '<img src="' . asset('backend/default.png') . '" style="width:40px;height:40px;border-radius:50%;" />';
            })
            ->editColumn('name', function($data) {
                return $data->getTranslation('name', 'ar');
            })
            ->rawColumns(['action', 'image'])
            ->setRowId('id');
    }

    public function query(Feature $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
        ->setTableId('feature-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->orderBy(1, 'ASC')
        ->selectStyleSingle()
        ->parameters([
            'lengthMenu'    => [[10, 25, 50, 100], [10, 25, 50, 100]],
            'dom' => '<"row mb-3" <"col-sm-4"l><"col-sm-4"f><"col-sm-4 text-end"B>>rt<"row mt-3" <"col-sm-6"i><"col-sm-6"p>>',
            'buttons' => ['colvis', 'excel', 'pdf', 'print'],
            'drawCallback' => 'function(settings) {
            var api = this.api();
            api.column(0, {page: "current"}).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1 + settings._iDisplayStart;
                });
            }',
        ]);
    }
    public function getColumns(): array
    {
        return [
            Column::make('id', 'id')->title('#')->responsivePriority(0)->addClass('text-center'),
            Column::make('id', 'id')->title('تسلسل')->responsivePriority(0)->addClass('text-center')->visible(false),
            Column::make('image', 'image')->title('الصورة')->responsivePriority(0)->addClass('text-center'),
            Column::make('name', 'name')->title('الأسم')->responsivePriority(0)->addClass('text-center'),
            Column::computed('action')
                ->responsivePriority(0)
                ->title('الأجراءات')
                ->exportable(false)
                ->printable(false)
                ->searchable(false)
                ->addClass('text-center'),
        ];
    }
        protected function filename(): string
        {
            return 'category_' . date('YmdHis');
        }
}
