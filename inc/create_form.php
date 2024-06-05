<?php
    echo '<div class="create__item">
    <form enctype="multipart/form-data" action="/inc/send_form.php" method="post" class="form">
        <div>
            <h2>Добавление поста</h2>
        </div>
        <div>
            <span class="form__tittle">Введите имя заголовка: </span>
            <input name="tittle" type="text" id="tittle" placeholder="Заголовок" class="form__tittle__input" required>
        </div>
        <div>
            <span class="form__tittle">Введите текст статьи: </span>
            <textarea name="desc" id="desc" placeholder="Текст статьи" class="form__desc__input" required></textarea>
        </div>
        <div>
            <span class="form__tittle">Вставьте изображение для статьи: </span>
            <label class="input-file">
                <input name="photo" type="file" accept="image/jpeg">      
                <span class="input-file-btn">Выберите файл</span>
            </label>
        </div>
        <div>
            <button type="submit" class="form__submit">Добавить статью</button>
        </div>
    </form>
</div>';