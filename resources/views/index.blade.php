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
                            <option disabled selected></option>
                            <option value="не шлифованая">не шлифованая</option>
                            <option value="торцованная">торцованная</option>
                            <option value="спираль">спираль</option>
                        </select>
                    </div>
                    <div class="fom-group">
                        <label for="material">
                            Выбор материала
                        </label>
                        <select name="material" id="material" class="form-control">
                            <option disabled selected></option>
                            <option value="60С2А">60С2А</option>
                            <option value="51ХФА">51ХФА</option>
                            <option value="ГОСТ 9389-75">ГОСТ 9389-75</option>
                            <option value="12Х18 Н10Т">12Х18 Н10Т</option>
                        </select>
                    </div>
                    <div class="fom-group">
                        <label for="diameter">
                            Диаметер сечения
                        </label>
                        <select name="diameter" id="diameter" class="form-control">
                            <option disabled selected></option>
                            <option value="1">1</option>
                            <option value="1.5">1.5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="out_diameter">
                            Наружный диаметер
                        </label>
                        <input type="number" class="form-control" id="out_diameter" name="out_diameter">
                    </div>
                    <div class="form-group">
                        <label for="height">
                            Высота
                        </label>
                        <input type="number" class="form-control" id="height" name="height">
                    </div>
                    <div class="form-group">
                        <label for="number_circle">
                            Количество полных витков
                        </label>
                        <input type="number" class="form-control" id="number_circle" name="number_circle">
                    </div>
                    <div class="fom-group">
                        <label for="surface">
                            Покрытие
                        </label>
                        <select name="surface" id="surface" class="form-control">
                            <option disabled selected></option>
                            <option value="Масло К-17"> Масло К-17</option>
                            <option value="Цинк"> Цинк</option>
                            <option value="Кадмий"> Кадмий</option>
                            <option value="ХИМ.ФОС.прм."> ХИМ.ФОС.прм.</option>
                            <option value="ХИМ.ОКС.прм."> ХИМ.ОКС.прм.</option>
                            <option value="Эмаль П.ПЭ"> Эмаль П.ПЭ</option>
                        </select>
                    </div>
                    <div class="fom-group">
                        <label for="direction">
                            Направление навивки
                        </label>
                        <select name="direction" id="direction" class="form-control">
                            <option disabled selected></option>
                            <option value="Правое"> Правое</option>
                            <option value="Левое"> Левое</option>
                            <option value="Любое"> Любое</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact">
                            Ваши реквизиты
                        </label>
                        <textarea name="contact" id="contact" class="form-control" data-value="contact_info"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning" id="preview">Превью</button>
                        <button class="btn btn-success" type="submit" id="submit">Отправить на почту</button>
                        <button class="btn btn-danger" type="reset">Сбросить</button>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <canvas id="my_image"></canvas>
            </div>
        </div>
    </div>
@endsection