<div class="row ">
    <div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">My Applications</h4>
        <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                    <a href="#"><th>Status</th></a>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone #</th>
                    <th>Submitted at</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user_applications as $item)
                <tr>
                    @if ($item->status == 'Approved')
                        <td>
                            <div class="btn btn-outline-success">Approved</div>
                        </td>
                    @elseif($item->status == 'Pending')
                        <td>
                            <div class="btn btn-outline-warning">Pending</div>
                        </td>
                    @elseif($item->status == 'Applied')
                        <td>
                            <div class="btn btn-outline-info">Applied</div>
                        </td>
                    @elseif($item->status == 'Rejected')
                        <td>
                            <div class="btn btn-outline-danger">Rejected</div>
                        </td>
                    @endif
                    <td><a href="{{url('/myapplication',$item->id)}}">{{$item->fname}} {{$item->lname}}</a></td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone_number}}</td>
                    <td>{{$item->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>