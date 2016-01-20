<div class="row">
    <div class="col-md-12">
        <p>Язык вопроса:
            <label for="lang-ru">Русский</label> <input type="radio" id="lang-ru" name="language" value="ru" checked="checked">
            <label for="lang-en">English</label> <input type="radio" id="lang-en" name="language" value="en">
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php
            $item_list = (isset($_GET['page'])) ? $_GET['page'] : 'ln_en';
        ?>
        <select name="selectEnTrust" id="selectEnTrust" class="form-control">
            <?php foreach ($list_response[$item_list] as $item_option): ?>
                <option value="<?=$item_option['value']?>"><?=$item_option['text']?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="col-md-2">
        <button type="button" id="startCheck" class="btn btn-primary">Пуск</button>
    </div>
    <div class="col-md-5">
        <div class="alert alert-success positive">Правильный ответ</div>
        <div class="alert alert-danger negative">Ошибка</div>
    </div>
    <div class="col-md-1">
        <div id="result" class="alert alert-info">0%</div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <textarea type="text" rows="5" id="question" class="form-control" placeholder="Проверяемое слово" disabled></textarea>
    </div>
    <div class="col-md-6">
        <textarea type="text" rows="5" autocomplete="off" id="answer" class="form-control"></textarea>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <button type="button" id="enterValue" class="btn btn-primary">Ввод</button>
    </div>
    <div class="col-md-10">
        <div class="alert alert-info">Осталось: <span id="balance"></span></div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <button type="button" id="help" class="btn btn-default">Подсказка</button>
    </div>
    <div class="col-md-10">
        <input type="text" id="fieldHelp" class="form-control" disabled>
    </div>
</div>