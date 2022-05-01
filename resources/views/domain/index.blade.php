@extends('master')

@section('content')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            
        </div>
        <!-- /Widgets -->
       
        <div class="clearfix"></div>
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Domain </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            {{-- <th class="avatar">Avatar</th> --}}
                                            {{-- <th>ID</th> --}}
                                            <th>Name</th>
                                            <th>Loại</th>
                                            <th>Status</th>
                                            @if (auth()->user()->role == 1)   
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($domain as $item)
                                        <tr>
                                            <td class="serial">{{$item->id}}</td>
                                        
                                            <td>  <span class="name">{{$item->name}}.domain.com</span> </td>
                                            <td> <span class="loai">{{$item->loai}}</span> </td>
                                            @if (auth()->user()->role == 1)
                                            <td>
                                                <?php 
                                                 if ($item->status == 0)  { 
                                                ?>
                                                <a href="{{url('/unlock/'.$item->id)}}"><span class="product"><i class="fa fa-lock">  </i> Khóa</span></a>
                                            <?php }else{ ?>
                                            <a href="{{url('/lock/'.$item->id)}}"><span class="product"><i class="fa fa-unlock"> </i>  Mở</span></a>
                                            <?php 
                                            }
                                            ?>

                                             </td>
                                             @else
                                             <td>
                                                <?php 
                                                 if ($item->status == 0)  { 
                                                ?>
                                                <span class="product"><i class="fa fa-lock">  </i> Khóa</span>
                                            <?php }else{ ?>
                                            <span class="product"><i class="fa fa-unlock"> </i>  Mở</span>
                                            <?php 
                                            }
                                            ?>

                                             </td>
                                            @endif
                                           
                                            {{-- <td><span class="count"></span></td> --}}
                                            <td>
                                                @if (auth()->user()->role == 1)                                               
                                                <a href="{{route('domain.delete', $item->id)}}"> <button type="button" class="btn btn-outline-danger">Xóa</button></a>
                                                @endif

                                
                                            </td>
                                        </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div> <!-- /.card -->
                </div>  <!-- /.col-lg-8 -->

                    </div>
                </div> <!-- /.col-md-4 -->
            </div>
        </div>
        <!-- /.orders -->
      
        <!-- Calender Chart Weather  -->
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="box-title">Chandler</h4> -->
                        <div class="calender-cont widget-calender">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div><!-- /.card -->
            </div>

            
            
        </div>
        <!-- /Calender Chart Weather -->
        <!-- Modal - Calendar - Add New Event -->
        <div class="modal fade none-border" id="event-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><strong>Add New Event</strong></h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#event-modal -->
        <!-- Modal - Calendar - Add Category -->
        <div class="modal fade none-border" id="add-category">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><strong>Add a category </strong></h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Choose Category Color</label>
                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                        <option value="success">Success</option>
                                        <option value="danger">Danger</option>
                                        <option value="info">Info</option>
                                        <option value="pink">Pink</option>
                                        <option value="primary">Primary</option>
                                        <option value="warning">Warning</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>
@endsection