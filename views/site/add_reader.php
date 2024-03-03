<h2>Добавление нового читателя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Имя <input type="text" name="name"></label>
    <label>Фамилия <input type="text" name="surname"></label>
    <label>Отчество <input type="text" name="patronymic"></label>
    <label>Адрес <input type="text" name="adress"></label>
    <label>Телефон <input type="tel" name="phone"></label>
    <button>Добавить</button>
</form>
