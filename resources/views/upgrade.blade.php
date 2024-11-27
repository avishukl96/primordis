@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-warning">
        <h4>Upgrade Required</h4>
        <p>You have reached the login limit for your free plan. Upgrade now to continue accessing your account.</p>
        <a href="{{ route('upgrade.plan') }}" class="btn btn-primary">Upgrade Plan</a>
    </div>
</div>
@endsection
