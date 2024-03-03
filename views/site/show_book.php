<h2>Книги:</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Авторы: <br>
        <select style="height: auto;" name="books[]" multiple>
            <?php foreach($books as $book) {
                ?>
                <option value="<?php echo $book->name; ?>"><?php echo $book->name; ?></option>
            <?php } ?>
        </select>
    </label>
    <button>Выбрать</button>
</form>
<h1>Список Книг</h1>
<ol>
    <?php
    foreach ($books as $book) {
        echo '<p>Автор: ' . $book->author . '</p>';
        echo '<p>Название: ' . $book->name . '</p>';
        echo '<p>Год публикации: ' . $book->year_of_published . '</p>';
        echo '<p>Цена: ' . $book->price . '</p>';
        echo '<p>Новое издание: ' . $book->new_edition . '</p>';
        echo '<p>Аннотация: ' . $book->annotation . '</p>';
        echo '<br><br><br>';
    }
    ?>
</ol>

