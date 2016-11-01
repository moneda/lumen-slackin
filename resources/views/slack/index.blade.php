@extends('app')

@section('content')
<div class="row">
    <div class="col-sm-8 col-sm-offset-2 login-box" >
        <div id="logo">
            <a href="https://{{$team['domain']}}.slack.com">
                <img src="{{$team['icon']['image_132']}}" />
            </a>
        </div>

        <div id="message">
            {!! trans('slackin.join', ['team' => $team['name'], 'domain' => $team['domain']]) !!}
        </div>

        @if(isset($totals, $totals['active'], $totals['total']))
        <div id="status" >
            {!! trans_choice('slackin.users_online', $totals['active'], $totals) !!}
        </div>
        @endif

        <div id="form-invite" class="col-sm-6 col-sm-offset-3">
            <div id="validation-message"></div>

            <form action="{{url('/invite')}}" method="post" class="form-horizontal" role="form">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                <div class="form-group">
                    <input class="form-control input-sm" type="text" name="username" placeholder="{{trans('slackin.placeholders.username')}}" autofocus="true"/>
                    <div class="help-block">

                    </div>
                </div>

                <div class="form-group">
                    <input class="form-control input-sm" type="text" name="email" placeholder="{{trans('slackin.placeholders.email')}}"/>
                    <div class="help-block">

                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="form-control input-sm btn btn-default" value="{{trans('slackin.submit')}}"/>
                </div>
            </form>
        </div>
        <div class="social-block">
          <a href="https://www.facebook.com/pehacheperos/" target="_blank" >
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="https://twitter.com/phpmx" target="_blank" >
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="https://phpmexico.mx/" target="_blank" >
            <i class="fa fa-rocket" aria-hidden="true" title="visita nuestra web"></i>
          </a>
        </div>
    </div>
</div>
@endsection
