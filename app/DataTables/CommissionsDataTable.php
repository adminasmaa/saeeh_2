<?php

namespace App\DataTables;

use App\Helpers\DTHelper;
use App\Models\Commission;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CommissionsDataTable extends DataTable
{
    
    private $crudName = 'commissions';
     
    private function getRoutes()
    {
        return [
            'update' => "dashboard.$this->crudName.edit",
            'show' => "dashboard.$this->crudName.show",
            'delete' => "dashboard.$this->crudName.destroy",
            'block' => "dashboard.$this->crudName.block",
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


                return '                   
                <form action="'.route('dashboard.uploadweasel').'" method="POST" style="display: inline-block" id="waseluploadForm'.$model->id.'">'.csrf_field().'  
                  <input   type="file" name="weasel" id="fileUpload" style="display:none"> 
                  <input type="hidden" name="booking_id" value="'.$model->booking_id.'" class="booking_id">           
                  <a type="button"  onclick="waseluploadAction('.$model->id.')"  id="accept" class="btn btn-secondary">رفع الإيصال</a>  
                </form>   
                ';
              

            })          
            ->addColumn('action', function ($model) {
                $actions = '';
                return $actions;
            })->rawColumns(['action', 'status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Commission $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Commission $model): QueryBuilder
    {
       if($this->pay=='unpaid'){$status=0;}else{$status=1;}
            return Commission::where('commissions.type', '=', $this->type)->where('commissions.status', '=',$status)->newQuery()->with(['user',$this->type.'Booking']);

        

    }

    public function count()
    {
        if($this->pay=='unpaid'){$status=0;}else{$status=1;}
            return Commission::where('type', '=', $this->type)->where('status', '=',$status)->count();
    }


    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('commissions-table')
            ->addTableClass('cell-border stripe')
            ->columns($this->getColumns())
            ->minifiedAjax()
           ->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
            // Button::make('create')->text('<i class="fa fa-plus"></i> ' . trans('site.add')),
            // Button::make('csv')->text('<i class="fa fa-download"></i> ' . trans('site.export')),
            // Button::make('print')->text('<i class="fa fa-print"></i> ' . trans('site.print')),
            // Button::make('reset')->text('<i class="fa fa-undo"></i> ' . trans('site.reset')),
            // Button::make('reload')->text('<i class="fa fa-refresh"></i> ' . trans('site.reload')),
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
            Column::make('DT_RowIndex')->data('DT_RowIndex')->name('id')->title('#'),
            Column::make('user.firstname')->title(trans('site.investor')),
            Column::make('price')->title(trans('site.price')),
            Column::make('booking_id')->title(trans('site.booking_id')),
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
        return 'Commissions_' . date('YmdHis');
    }

}
