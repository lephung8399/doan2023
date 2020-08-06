@extends('layouts.app1')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="toolbar">
                            <a href="{{ route('admin.product.create') }}">
                                <button type="button" class="btn btn-wd btn-success" style="margin-left: 10px">
                                    <span class="btn-label">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    New Product
                                </button>
                            </a>
                        </div>
                        <table id="bootstrap-table" class="table">
                            <thead>
                                <th data-field="state" data-checkbox="true"></th>
                                <th data-field="id" class="text-center">ID</th>
                                <th data-field="name"  class="text-center"data-sortable="true">SKU</th>
                                <th data-field="salary"  class="text-center"data-sortable="true">Name</th>
                                <th data-field="salary"  class="text-center"data-sortable="true">Category</th>
                                <th data-field="country"  class="text-center"data-sortable="true">Price</th>
                                <th data-field="city" class="text-center">Image</th>
                                <th data-field="actions" class="td-actions text-center" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td></td>
                                        <td class="text-center">{{ $product->ProductID }}</td>
                                        <td class="text-center">{{ $product->ProductSKU }}</td>
                                        <td class="text-center">{{ $product->ProductName }}</td>
                                        <td class="text-center">{{ $product->ProductCategoryID }}</td>
                                        <td class="text-center">{{ number_format($product->ProductPrice) }} VNĐ</td>
                                        <td class="text-center">
                                            <img src="{{ asset('images/' .$product->ProductImage) }}" alt="" style="width=100px; height:100px">
                                        </td>
                                        <td class="text-center">
                                            <a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view">
                                                <i class="ti-image"></i>
                                            </a>
                                            <a href="{{ route('admin.product.edit', ['ProductID'=>$product->ProductID]) }}" rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" >
                                                <i class="ti-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('admin.product.delete', ['ProductID'=>$product->ProductID]) }}" onclick="return confirm('Do you want to delete?')" rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove"  >
                                                <i class="ti-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div>
</div>


{{--        <script type="text/javascript">--}}

{{--        var $table = $('#bootstrap-table');--}}

{{--        function operateFormatter(value, row, index) {--}}
{{--            return [--}}
{{--                '<div class="table-icons">',--}}
{{--                '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',--}}
{{--                '<i class="ti-image"></i>',--}}
{{--                '</a>',--}}
{{--                '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',--}}
{{--                '<i class="ti-pencil-alt"></i>',--}}
{{--                '</a>',--}}
{{--                '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',--}}
{{--                '<i class="ti-close"></i>',--}}
{{--                '</a>',--}}
{{--                '</div>',--}}
{{--            ].join('');--}}
{{--        }--}}

{{--        $().ready(function(){--}}
{{--            window.operateEvents = {--}}
{{--                'click .view': function (e, value, row, index) {--}}
{{--                    info = JSON.stringify(row);--}}

{{--                    swal('You click view icon, row: ', info);--}}
{{--                    console.log(info);--}}
{{--                },--}}
{{--                'click .edit': function (e, value, row, index) {--}}
{{--                    info = JSON.stringify(row);--}}

{{--                    swal('You click edit icon, row: ', info);--}}
{{--                    console.log(info);--}}
{{--                },--}}
{{--                'click .remove': function (e, value, row, index) {--}}
{{--                    console.log(row);--}}
{{--                    $table.bootstrapTable('remove', {--}}
{{--                        field: 'id',--}}
{{--                        values: [row.id]--}}
{{--                    });--}}
{{--                }--}}
{{--            };--}}

{{--            $table.bootstrapTable({--}}
{{--                toolbar: ".toolbar",--}}
{{--                clickToSelect: true,--}}
{{--                showRefresh: true,--}}
{{--                search: true,--}}
{{--                showToggle: true,--}}
{{--                showColumns: true,--}}
{{--                pagination: true,--}}
{{--                searchAlign: 'left',--}}
{{--                pageSize: 8,--}}
{{--                clickToSelect: false,--}}
{{--                pageList: [8,10,25,50,100],--}}

{{--                formatShowingRows: function(pageFrom, pageTo, totalRows){--}}
{{--                    //do nothing here, we don't want to show the text "showing x of y from..."--}}
{{--                },--}}
{{--                formatRecordsPerPage: function(pageNumber){--}}
{{--                    return pageNumber + " rows visible";--}}
{{--                },--}}
{{--                icons: {--}}
{{--                    refresh: 'fa fa-refresh',--}}
{{--                    toggle: 'fa fa-th-list',--}}
{{--                    columns: 'fa fa-columns',--}}
{{--                    detailOpen: 'fa fa-plus-circle',--}}
{{--                    detailClose: 'ti-close'--}}
{{--                }--}}
{{--            });--}}

{{--            //activate the tooltips after the data table is initialized--}}
{{--            $('[rel="tooltip"]').tooltip();--}}

{{--            $(window).resize(function () {--}}
{{--                $table.bootstrapTable('resetView');--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}

@endsection
