<?php

namespace App\DataTables;

use App\Helpers\DTHelper;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ContactsDataTable extends DataTable
{
    private $crudName = 'contacts';

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
            })->editColumn('user_id', function ($model) {
                return (!empty($model->user_id)) ? $model->user->firstname : '';
            })
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                $actions = '';

                $actions .= DTHelper::dtDeleteButton(route($this->getRoutes()['delete'], $model->id), trans('site.delete'), $this->getPermissions()['delete'], $model->id);

                return $actions;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Country $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Contact $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function count()
    {
        return Contact::count();

    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('contacts-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('create')->text('<i class="fa fa-plus"></i> ' . trans('site.add')),
                Button::make('csv')->text('<i class="fa fa-download"></i> ' . trans('site.export')),
                Button::make('print')->text('<i class="fa fa-print"></i> ' . trans('site.print')),
                Button::make('reset')->text('<i class="fa fa-undo"></i> ' . trans('site.reset')),
                Button::make('reload')->text('<i class="fa fa-refresh"></i> ' . trans('site.reload')),
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
            Column::make('DT_RowIndex')->data('DT_RowIndex')->name('DT_RowIndex')->title('#'),

            Column::make('name')->title(trans('site.name')),
            Column::make('phone')->title(trans('site.phone')),
            Column::make('message')->title(trans('site.message')),
            Column::make('user_id')->title(trans('site.users')),
            Column::make('created_at')->title(trans('site.created_at')),
            Column::computed('action')
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
        return 'Contacts_' . date('YmdHis');
    }
}
