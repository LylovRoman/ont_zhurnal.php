@extends('layouts.app')
@section('title')
    Нагрузка
@endsection
@section('content')
    <div class="container">
        <smart-table
            :columns="this.columns"
            :rows="this.posts"
            :can-select-row="false"
            :action-panel-row="this.userActionPanel"
        />
    </div>
    <script src="./js/nagruzka.js" type="module"></script>
@endsection
