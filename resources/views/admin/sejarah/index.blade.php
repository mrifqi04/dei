@extends('layouts.backend')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    {{-- <div class="card shadow-sm ctm-border-radius">
                        <div class="card-body align-center">
                            <h4 class="card-title float-left mb-0 mt-2">Jam Operasional</h4>
                            <ul class="nav nav-tabs float-right border-0 tab-list-emp">
                                <li class="nav-sejarah pl-3">
                                    <button class="btn btn-theme text-white ctm-border-radius button-1" data-toggle="modal"
                                        data-target="#add-Jam">Add New</button>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    @if (session()->has('msg'))
                        <div class="alert alert-success">
                            {{ session()->get('msg') }}
                        </div>
                    @endif
                    <div class="ctm-border-radius shadow-sm card">
                        <div class="card-body">
                            <!--Content table-->
                            <div class="table-back employee-office-table">
                                <div class="table-responsive">
                                    <table id="data-table" class="table custom-table table-hover table-hover">
                                        <thead>
                                            <tr>
                                                <th>Konten</th>                                                
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td>
												<h1>{{ $sejarah->title }}</h1>
												<p>{{ \Illuminate\Support\Str::limit($sejarah->content, 100) }}</p>
                                            </td>
											<td class="text-left" align="center">
												<div class="table-action">
												{{ link_to_route('UpdateSejarah', 'Edit', '', ['class' => 'btn btn-sm btn-primary']) }}
												{{-- <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteConfirm{{$sejarah->id}}"><span class="lnr lnr-trash">Delete</span></button> --}}
												{{-- <div class="modal fade" id="deleteConfirm{{$sejarah->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-sm">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
															</div>
															<div class="modal-body">
																Are you sure want to delete  this record?
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																{!! Form::open([
																'method' => 'DELETE',
																'url' => ['/admin/jenis', $jenis->id],
																'style' => 'display:inline'
																]) !!}
																{!! Form::button('Delete', array(
																		'type' => 'submit',
																		'class' => 'btn btn-danger btn-sm',
																		'title' => 'Confirm Delete'
																)) !!}
																{!! Form::close() !!}
															</div>
														</div>
													</div>
												</div> --}}
											</div>
											</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /Content Table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Content-->   
@endsection
