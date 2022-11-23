@if(session()->has('message'))
<div class="alert alert-success" x-data="{show:true}" x-init="setTimeout(()=>show=false, 2500)" x-show="show">
    {{session()->get('message')}}
</div>
@endif
<div class="row ">
    <div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Sce Applications</h4>
        <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                    <a href="#"><th>Status</th></a>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone #</th>
                    <th>Address</th>
                    <th>State/Country</th>
                    <th>Submitted at</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    @if ($item->status == 'Approved')
                        <td>
                            <div class="badge badge-outline-success">Approved</div>
                        </td>
                    @elseif($item->status == 'Pending')
                        <td>
                            <div class="badge badge-outline-warning">Pending</div>
                        </td>
                    @elseif($item->status == 'Applied')
                        <td>
                            <div class="badge badge-outline-primary">Applied</div>
                        </td>
                    @elseif($item->status == 'Rejected')
                        <td>
                            <div class="badge badge-outline-danger">Rejected</div>
                        </td>
                    @endif
                    <td>{{$item->fname}} {{$item->lname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone_number}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->country}}</td>
                    <td>{{$item->created_at}}</td>
                    <td><a class="btn btn-primary" href="{{url('view_single_sce_application',$item->id)}}">View</a></td>
                    <td><a class="btn btn-info" href="{{url('single_sce_application',$item->id)}}">Edit</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_sce_application',$item->id)}}" >Delete</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <div class="show_sce__pagination">
                {!!$items->links()!!}
            </div>
        </div>
    </div>
    </div>
</div>