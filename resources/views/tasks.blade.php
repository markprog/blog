@extends('layouts.app')

@section('content')

        <!-- Bootstrap ������... -->

<div class="panel-body">
    <!-- ����������� ������ �������� ����� -->


    <!-- ����� ����� ������ -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

                <!-- ��� ������ -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">������</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
        </div>

        <!-- ������ ���������� ������ -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> �������� ������
                </button>
            </div>
        </div>
    </form>
</div>

<!-- TODO: ������� ������ -->
@endsection