<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-warning">
                    <span class="material-icons">equalizer</span>
                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>Sce Applications</strong></p>
                <h3 class="card-title">{{count($sce_applications)}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-info">info</i>
                    <a href="{{url('/show_aplication')}}">See detailed report</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-warning">
                    <span class="material-icons">equalizer</span>
                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>MRU Applications</strong></p>
                <h3 class="card-title">5</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-info">info</i>
                    <a href="{{url('/show_aplication')}}">See detailed report</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
        
        
<div class="row ">
    <div class="col-lg-7 col-md-12">
        <div class="card" style="min-height: 485px">
            <div class="card-header card-header-text">
                <h4 class="card-title">Sce Application Stats</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead class="text-primary">
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Submitted at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sce_applications as $sce_item)
                        <tr>
                            <td><a href="{{url('#',$sce_item->id)}}">{{$sce_item->fname}} {{$sce_item->lname}}</a></td></td>
                            
                            @if ($sce_item->status == 'Approved')
                            <td>
                                <div class="btn btn-outline-success">Approved</div>
                            </td>
                            @elseif($sce_item->status == 'Pending')
                                <td>
                                    <div class="btn btn-outline-warning">Pending</div>
                                </td>
                            @elseif($sce_item->status == 'Applied')
                                <td>
                                    <div class="btn btn-outline-info">Applied</div>
                                </td>
                            @elseif($sce_item->status == 'Rejected')
                                <td>
                                    <div class="btn btn-outline-danger">Rejected</div>
                                </td>
                            @endif
                            
                            <td>{{$sce_item->created_at}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="col-lg-5 col-md-12">
        <div class="card" style="min-height: 485px">
            <div class="card-header card-header-text">
                <h4 class="card-title">Notifications</h4>
            </div>
            <div class="card-content">
                <div class="streamline">
                    <div class="alert alert-primary" role="alert">
                        Your application has been successfully submitted!
                    </div>
                    <div class="alert alert-success" role="alert">
                        Your sce application has been approved!
                    </div>
                    <div class="alert alert-danger" role="alert">
                        Require file submittion before 11:30am
                    </div>
                </div>
                <div>
                    
                </div>
            </div>

        </div>
    </div>
</div>