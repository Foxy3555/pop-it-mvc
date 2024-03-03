<h2>Добавление новой книги</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Автор <input type="text" name="author"></label>
    <label>Название <input type="text" name="name"></label>
    <label>Год публикации <input type="text" name="year_of_published"></label>
    <label>Цена <input type="text" name="price"></label>
    <label>Новое издание 
        <select name="new_edition" id="new_edition">
            <option value="1">Да</option>
            <option value="0">Нет</option>
        </select>
    </label>
    <label>Аннотация <input type="text" name="annotation"></label>
    <button>Добавить</button>
</form>
