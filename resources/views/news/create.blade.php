@extends('layouts.default')

@section('content')

    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой новости -->
        <form action="{{route('news.store')}}" method="POST" style="display: inline-block">
        {{ csrf_field() }}

        <!-- Название и текст -->
            <div class="form-group">
                <label for="news-name" class="col-sm-3 control-label">Новость</label>
                <div class="col-sm-6">
                    <input type="title" name="title" id="news-name" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="text" id="news-name" class="form-control">
                </div>
            </div>

            <!-- Кнопка добавления новости -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить новость
                    </button>
                </div>
            </div>
        </form>
    </div>
