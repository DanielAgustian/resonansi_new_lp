@extends("crudbooster::admin_template")
@section("content")
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                {{-- <img class="profile-user-img img-responsive img-circle"
                    src="{{ $user->photo == '' ? '/images/user-default.png' : $user->photo}}"
                    alt="User profile picture"> --}}

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                <p class="text-muted text-center">{{ ucfirst($user->status) }}</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Name</b> <a class="pull-right">{{ $user->name ? ucwords($user->name) : '-' }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Username</b> <a class="pull-right">{{ $user->username ? $user->username : '-' }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Email</b> <a class="pull-right">{{ $user->email ? $user->email : '-' }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Phone</b> <a class="pull-right">{{ $user->phone ? $user->phone : '-' }}</a>
                    </li>
                </ul>

                <form method="post" action="{{ route('processFollowUp') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Next Follow Up</label>
                        <input type="date" class="form-control" name="next_fu">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-warning" value="Submit Follow Up">
                    </div>
                </form>

                <form method="post" action="{{ route('updateStatus', $user->id) }}">
                    @method('PUT')
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select class="form-control" name="status">
                            <option value="lead" {{ $user->status == 'lead' ? 'selected' : '' }}>Lead</option>
                            <option value="contact" {{ $user->status == 'contact' ? 'selected' : '' }}>Contact</option>
                            <option value="potential" {{ $user->status == 'potential' ? 'selected' : '' }}>Potential
                            </option>
                            <option value="win" {{ $user->status == 'win' ? 'selected' : '' }}>Win</option>
                            <option value="lose" {{ $user->status == 'lose' ? 'selected' : '' }}>Lose</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:10px;">
                        <input type="submit" class="form-control btn btn-primary" value="Submit Status">
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Client's Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i> Metadata</strong>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>IP addr</b> <a class="pull-right">{{ $user->ip_address}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Desktop</b> <a class="pull-right">{{ $user->screen}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Device</b> <a class="pull-right">{{ $user->device}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Lang</b> <a class="pull-right">{{ $user->languages}}</a>
                    </li>
                </ul>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                <p class="text-muted">{{ $client->kota }}</p>

                <hr>

                <strong><i class="fa fa-pencil margin-r-5"></i> Social Media</strong>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Facebook</b> <a class="pull-right">{{ $client->facebook}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Google +</b> <a class="pull-right">{{ $client->google}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Twitter</b> <a class="pull-right">{{ $client->twitter}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Linkedin</b> <a class="pull-right">{{ $client->linkedin}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Instagram</b> <a class="pull-right">{{ $client->instagram}}</a>
                    </li>
                </ul>

                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                <p></p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <!-- /.col -->
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#timeline" data-toggle="tab">Timeline</a></li>
                <li><a href="#socialdata" data-toggle="tab">Social Data</a></li>
                <li><a href="#autobot" data-toggle="tab">Activities Feed</a></li>
            </ul>

            <div class="tab-content">
                <div class="active tab-pane" id="timeline">
                    <p><b>Follow Up :</b></p>
                    <form action="{{ route('postActivity') }}" class="form-horizontal" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <input type="hidden" name="admin_id" value="{{ CRUDBooster::myId() }}">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea name="activity" rows="2" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success pull-right">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!-- The timeline -->

                    <ul class="timeline timeline-inverse">
                        @foreach($activities as $activity)

                        <!-- timeline time label -->

                        <li class="time-label">
                            <span class="bg-blue">
                                {{ date('d-m-Y',strtotime($activity->created_at))}}
                            </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-user bg-aqua"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> {{ $activity->created_at ?
                                    \Carbon\Carbon::parse($activity->created_at)->diffForHumans() : '-' }}</span>

                                <h3 class="timeline-header"><a href="#">{{ ucwords($activity->name) }}</a> {{
                                    $activity->jenis }}</h3>

                                <div class="timeline-body">
                                    {{ $activity->activity }}
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        @endforeach

                    </ul>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="socialdata">
                    <p><small>no classification setting found</small></p>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="autobot">
                    <p><small>not enough data</small></p>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection
