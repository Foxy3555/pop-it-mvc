<h2>Добавление нового библиотекаря</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Имя <input type="text" name="name"></label>
    <label>Login<input type="text" name="login"></label>
    <label>Password <input type="password" name="password"></label>
        <select name="name_role" id="name_role" hidden="hidden">
            <option value="Библиотекарь"></option>
        </select>
    <button>Добавить</button>
</form>
