@extends('layout.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Область ввода данных</h2>
                <p>Не целые значения необходимо разделять точкой</p>
                <form class="form" action="/send-form" method="post">
                    {{ csrf_field() }}
                    <div class="fom-group">
                        <label for="type">
                            Тип
                        </label>
                        <select name="type" id="type" class="form-control">
                            <option disabled></option>
                            <option>не торцованная</option>
                            <option>торцованная</option>
                            <option>спираль</option>
                        </select>
                    </div>
                    <div class="fom-group">
                        <label for="material">
                            Выбор материала
                        </label>
                        <select name="material" id="material" class="form-control">
                            <option disabled></option>
                            <option>60С2А</option>
                            <option>51ХФА</option>
                            <option>ГОСТ 9389-75</option>
                            <option>12Х18 Н10Т</option>
                        </select>
                    </div>
                    <div class="fom-group">
                        <label for="diameter">
                            Диаметер сечения
                        </label>
                        <select name="diameter" id="diameter" class="form-control">
                            <option disabled></option>
                            <option>1</option>
                            <option>1.5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact">
                            Ваши реквизиты
                        </label>
                        <textarea name="contact" id="contact" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning" id="preview">Превью</button>
                        <button class="btn btn-success" type="submit">Отправить на почту</button>
                        <button class="btn btn-danger" type="reset">Сбросить</button>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <canvas id="my_image"></canvas>
            </div>
        </div>

        {{--<a id="download" download="myImage.jpg" href="" onclick="download_img(this);">Download to myImage.jpg</a>--}}
    </div>
@endsection