<?php

namespace App\DataTables;

use App\Helpers\DTHelper;
use App\Models\AqarBooking;
use App\Models\BookingStatus;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AqarBookingDataTable extends DataTable
{
    private $crudName = 'aquarbooking';

    private function getRoutes()
    {
        return [
            'update' => "dashboard.$this->crudName.edit",
            'show' => "dashboard.$this->crudName.show",
            'delete' => "dashboard.$this->crudName.destroy",
            'block' => "dashboard.$this->crudName.block",
            'acceptbooking' => "dashboard.$this->crudName.acceptbooking"
           
        ];
    }

    private function getPermissions()
    {
        return [
            'update' => 'update_' . $this->crudName,
            'delete' => 'delete_' . $this->crudName,
            'create' => 'create_' . $this->crudName,
        ];
    }

    public function StatusList()
    {
        return BookingStatus::select('id','status_ar')->get();

    }

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('created_at', function ($model) {
                return (!empty($model->created_at)) ? $model->created_at->diffForHumans() : '';
            })
            ->addIndexColumn()
            ->addColumn('status', function ($model) {


                            
                $output = '';
                $output .='<div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        عمليات
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">';
                    if($model->booking_status_id==1){
                        $output .='<li><a class="dropdown-item" href="'.route('dashboard.acceptbooking' , $model->id).'">'.trans('site.accepted').'</a></li>
                        <li><a class="dropdown-item" href="'.route('dashboard.rejectbooking' , $model->id).'">'.trans('site.reject').'</a></li>';
                    }
                    if($model->booking_status_id==3){
                        $output .='<li><a class="dropdown-item" href="'.route('dashboard.attendbooking' , $model->id).'">'.trans('site.attend').'</a></li>
                        <li><a class="dropdown-item" href="'.route('dashboard.notattendbooking' , $model->id).'">'.trans('site.notattend').'</a></li>';
                    }
                    
                '</ul>
               </div>';
               return $output ;

            })
            ->addColumn('action', function ($model) {
                $actions = '';

                $actions .= DTHelper::dtDeleteButton(route($this->getRoutes()['delete'], $model->id), trans('site.delete'), $this->getPermissions()['delete'], $model->id);
                $actions .= DTHelper::dtShowButton(route($this->getRoutes()['show'], $model->id), trans('site.show'), $this->getPermissions()['delete']);

                return $actions;
            })->rawColumns(['action', 'status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Ad $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(AqarBooking $model): QueryBuilder
    {

        return $model->newQuery();
    }

    public function count()
    {
        return AqarBooking::count();

    }


    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('aqarbooking-table')
            ->addTableClass('cell-border stripe')
            ->columns($this->getColumns())
            ->minifiedAjax()
           ->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
               // Button::make('create')->text('<i class="fa fa-plus"></i> ' . trans('site.add')),
                Button::make('csv')->text('<i class="fa fa-download"></i> ' . trans('site.export')),
                Button::make('print')->text('<i class="fa fa-print"></i> ' . trans('site.print')),
             //   Button::make('reset')->text('<i class="fa fa-undo"></i> ' . trans('site.reset')),
              //  Button::make('reload')->text('<i class="fa fa-refresh"></i> ' . trans('site.reload')),
            ])->language([
                "url" => app()->getLocale() == 'ar' ? "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json":"//cdn.datatables.net/plug-ins/1.13.4/i18n/en-GB.json"
            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->data('DT_RowIndex')->name('id')->title('#'),
            Column::make('type')->title(trans('site.type')),
            Column::make('fixed_price')->title(trans('site.price')),
            Column::make('created_at')->title(trans('site.created_at')),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')->title(trans('site.action')),
                Column::computed('status')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')->title(trans('site.action')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'AqarBooking_' . date('YmdHis');
    }
}

