@extends('layouts.master')

@section('title')
  {{ $is_success ? "Success storing \"" . $cast["name"] . "\" as new cast 👍" : 'Error' }}
@endsection

@section('content')
  <pre>{{ print_r($cast) }}</pre>
@endsection
