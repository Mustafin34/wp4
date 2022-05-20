<?php require "php/db.php"; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME NEWS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../lab3/css/style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="header">
        <div class="header__content">
            <div class="content">
                <div class="header__logo">
                    <a href="/lab5"><img src="../lab3/img/logo.png" alt="logo" /></a>
                    <span>GAME NEWS</span>
                </div>
            </div>
            <div class="content">
                <nav class="header__menu">
                    <ul>
                        <li><a href="../lab3/index.html">Лабораторная №3</a></li>
                        <li><a href="../lab4/index.php">Лабораторная №4</a></li>
                        <li><a href="../lab5/index.html">Лабораторная №5</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="content">
            <div class="videoCards-wrapper">
                <?php
                $videoCards = R::findAll('videoCards');
                $k = 1;
                foreach ($videoCards as $videoCard) :
                ?>
                    <div class="videoCard">
                        <div class="tabs">
                            <ul>
                                <li><a href="#tabs-<?php echo $k; ?>">Вид №1</a></li>
                                <li><a href="#tabs-<?php echo ($k + 1); ?>">Вид №2</a></li>
                            </ul>

                            <div class="videoCard__photo" id="tabs-<?php echo $k; ?>">
                                <img src="<?php echo $videoCard['photo1']; ?>" alt="ФОТО">
                            </div>


                            <div class="videoCard__photo" id="tabs-<?php echo ($k + 1); ?>">
                                <img src="<?php echo $videoCard['photo2']; ?>" alt="ФОТО">
                            </div>
                        </div>
                        <div style="width: 100%;">
                            <div class="videoCard__name"><?php echo $videoCard['name']; ?></div>
                            <div class="videoCard__info">
                                <h3 class="accordion-title">Характеристики</h3>
                                <div class="videoCard__info-stats accordion-item">
                                    <div class="stats-item">
                                        <div class="stats__name">Выпущен:</div>
                                        <div class="stats__value"><?php echo $videoCard['date']; ?></div>
                                    </div>

                                    <div class="stats-item">
                                        <div class="stats__name">Производитель:</div>
                                        <div class="stats__value"><?php echo $videoCard['proizvod']; ?></div>
                                    </div>

                                    <div class="stats-item">
                                        <div class="stats__name">Архитектура:</div>
                                        <div class="stats__value"><?php echo $videoCard['arch']; ?></div>
                                    </div>

                                    <div class="stats-item">
                                        <div class="stats__name">Объем видеопамяти ГБ:</div>
                                        <div class="stats__value"><?php echo $videoCard['ram']; ?></div>
                                    </div>

                                    <div class="stats-item">
                                        <div class="stats__name">Частота работы видеочипа МГц:</div>
                                        <div class="stats__value"><?php echo $videoCard['chast']; ?></div>
                                    </div>
                                    <div class="stats-item">
                                        <div class="stats__name">Техпроцесс нм:</div>
                                        <div class="stats__value"><?php echo $videoCard['tech']; ?></div>
                                    </div>
                                    <div class="stats-item">
                                        <div class="stats__name">Пропускная способность памяти Гбайт/сек:</div>
                                        <div class="stats__value"><?php echo $videoCard['prop']; ?></div>
                                    </div>
                                </div>

                                <h3 class="accordion-title">Описание</h3>
                                <div class="accordion-item">
                                    <p class="videoCard__info-discription">
                                        <?php echo $videoCard['discription']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php $k += 2;
                endforeach; ?>
            </div>

            <div class="buttons__wrapper">
                <button class="btn new__card-btn" onclick='$("#new__videoCard-wrapper").dialog("open");'>
                    Добавить видеокарту
                </button>
            </div>
        </div>
        </div>
    </main>

    <footer class="footer">
        <div class="content">
            <span>&#169; Мустафин Даниил</span>
            <span>УФА 2022г.</span>
        </div>
    </footer>

    <div id="new__videoCard-wrapper">
        <form class="new__videoCard">
            <div class="new__videoCard-item">
                <label class="new__videoCard-label">Название видеокарты:</label>
                <input type="text" name="name" class="new__videoCard-input" placeholder="GTX XXX">
                <label class="new__videoCard-label">Дата выхода:</label>
                <input type="text" name="date" class="new__videoCard-input" id="date" placeholder="01.01.2010">
            </div>
            <div class="new__videoCard-item">
                <label class="new__videoCard-label">Ссылка на фото:</label>
                <input type="text" name="photo1" class="new__videoCard-input" placeholder="фото1">
                <label class="new__videoCard-label">Ссылка на второе фото:</label>
                <input type="text" name="photo2" class="new__videoCard-input" placeholder="фото1">
            </div>
            <div class="new__videoCard-item">
                <label class="new__videoCard-label">Производитель:</label>
                <select class="new__videoCard-input" name="proizvod" id="proizvod">
                    <option value="ASUS">ASUS</option>
                    <option value="MSI">MSI</option>
                    <option value="GIGABYTE">GIGABYTE</option>
                    <option value="Radeon">Radeon</option>
                    <select>
            </div>

            <div class="new__videoCard-item">
                <label class="new__videoCard-label">Архитектура:</label>
                <input type="text" name="arch" class="new__videoCard-input" id="archplace" placeholder="NVIDIA Turing">
            </div>

            <div class="new__videoCard-item">
                <label class="new__videoCard-label">Объем видеопамяти ГБ:</label>
                <input type="text" name="ram" class="new__videoCard-input catval" id="ram">
                <div class="slider-range1"></div>
            </div>

            <div class="new__videoCard-item">
                <label class="new__videoCard-label">Частота работы видеочипа МГц</label>
                <input type="text" name="chast" class="new__videoCard-input catval" id="chast">
                <div class="slider-range2"></div>
            </div>

            <div class="new__videoCard-item">
                <label class="new__videoCard-label">Техпроцесс нм</label>
                <input type="text" name="tech" class="new__videoCard-input catval" id="tech">
                <div class="slider-range3"></div>
            </div>

            <div class="new__videoCard-item">
                <label class="new__videoCard-label">Пропускная способность памяти Гбайт/сек</label>
                <input type="text" name="prop" class="new__videoCard-input catval" id="prop">
                <div class="slider-range4"></div>
            </div>

            <div class="new__videoCard-item">
                <label class="new__videoCard-label">Описание видеокарты: <span title="Максимальная длина текста 500.">(*)</span></label>
                <textarea name="discription" class="new__videoCard-textarea"></textarea>
            </div>

            <div class="new__videoCard-item df">
                <button class="btn" id="save__videoCard">Сохранить</button>
            </div>
        </form>
    </div>

    <div id="alert" title="Уведомление">
        <p>Видеокарта успешно добавлена!</p>
    </div>

    <link rel='stylesheet' href="jquery-ui-1.12.1/jquery-ui.css">
    <script src="../lab3/js/jquery-3.6.0.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="js/ui.js"></script>
</body>

</html>