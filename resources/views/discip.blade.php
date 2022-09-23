@extends('layouts.app')
@section('title')
    Дисциплины
@endsection
@section('content')
    <div class="container">
        <h1>Специальности</h1>
        <smart-table ref="usersTable"
                     :columns="this.columnsSpezTable"
                     :rows="this.spezs"
                     v-model:selected-rows="this.selectedSpez"
                     @after-select-row="this.getDiscips"
                     :multiple-select="false"
                     :sticky-header="false"
                     :action-panel-row="this.spezActionPanel"
        ></smart-table><br>
        <h1>Дисциплины</h1>
        <smart-table
            :columns="this.columnsDiscipTable"
            :rows="this.discips"
            :can-select-row="false"
        ></smart-table>

    <script src="./js/discip.js" type="module"></script>
@endsection