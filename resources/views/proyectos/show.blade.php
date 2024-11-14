@extends('layouts.master');

@section('content')
<?php return 'Vista detalle proyecto ' . $id;
->where('id', '[0-9]+'); ?>
@endsection
