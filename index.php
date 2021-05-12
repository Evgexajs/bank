<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://code.jquery.com/ui/1.11.4/themes/vader/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="javascript.js"></script>
    <title>Bank</title>
</head>

<body>
    <div class="head">
        <div class="head__logo">
            <img src="./images/world.png" alt="">
            <div class="head__text">
                <h1>WORLD BANK</h1>
                <h2>Publications</h2>
            </div>
        </div>
        <div class="head__left">
            <div class="head__phone">
                <h2>8-800-100-5005</h2>
                <h2>+7(3452)522-000</h2>
            </div>
        </div>
    </div>

    <div class="menu">
        <div class="menu__el">
            <a href="#">Кредитные карты</a>
        </div>
        <div class="menu__el menu__change">
            <a href="#">Вклады</a>
        </div>
        <div class="menu__el">
            <a href="#">Дебетовая карта</a>
        </div>
        <div class="menu__el">
            <a href="#">Страхование</a>
        </div>
        <div class="menu__el">
            <a href="#">Друзья</a>
        </div>
        <div class="menu__el-last">
            <a href="#">Интернет-банк</a>
        </div>
    </div>
    <div class="center">
        <div class="navigation">
            <div class="navigation__el">
                <a href="#">Главная</a>
            </div>
            <p>-</p>
            <div class="navigation__el">
                <a href="#">Вклады</a>
            </div>
            <p>-</p>
            <div class="navigation__el-last">
                <a href="#">Калькулятор</a>
            </div>
        </div>
        <div class="center__main">
            <h1>Калькулятор</h1>
            <form class="form">
                <div class="form__center">
                    <div class="calc">
                        <div class="calc__text">Дата оформления вклада</div>
                        <div class="calc__input">
                            <input type="text" id="date" name="date" placeholder="дд.мм.гггг" required>
                        </div>
                        <div class="calc__text">Сумма вклада</div>
                        <div class="calc__input">
                            <input type="number" id="sum" name="sum" min="1000" max="3000000" value="" required>
                        </div>
                        <div class="calc__range">                    
                            <input type="range" id="sum-range" oninput="rangeSum()"  min="1000" max="3000000">
                            <div class="left"><p>1 тыс. руб.</p></div>
                            <div class="right"><p>3 000 000</p></div>
                        </div>
                        <div class="calc__text">Срок вклада</div>
                        <div class="calc__input">
                            <select name="year">
                                <option selected value="1">1 год</option>
                                <option value="2">2 года</option>
                                <option value="3">3 года</option>
                                <option value="4">4 года</option>
                                <option value="5">5 лет</option>
                            </select>
                        </div>
                        <div class="calc__text">Пополнение вклада</div>
                        <div class="calc__input radio">
                            <p><input type="radio" name="replenishment" value="yes">Да</p>
                            <p><input type="radio" name="replenishment" value="no" checked>Нет</p>
                        </div>
                        <div class="calc__text">Сумма пополнения вклада</div>
                        <div class="calc__input">
                            <input type="number" id="sum_replenishment" name="sum_replenishment" min="1000" max="3000000">
                        </div>                
                        <div class="calc__range">                    
                            <input type="range" id="sum_replenishment-range" oninput="rangeReplSum()"  min="1000" max="3000000">                    
                            <div class="left"><p>1 тыс. руб.</p></div>
                            <div class="right"><p>3 000 000</p></div>
                        </div>
                    </div>
                </div>
                <div class="form__bottom">
                    <div class="form__button">
                        <button type="submit" id="button">Отправить</button>
                    </div>
                    <div class="form__result"></div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="footer">
        <div class="footer__links">
            <div class="footer__link">
                <a href="#">Кредитные карты</a>
            </div>
            <div class="footer__link">
                <a href="#">Вклады</a>
            </div>
            <div class="footer__link">
                <a href="#">Дебетовая карта</a>
            </div>
            <div class="footer__link">
                <a href="#">Страхование</a>
            </div>
            <div class="footer__link">
                <a href="#">Друзья</a>
            </div>
            <div class="footer__link">
                <a href="#">Интернет-банк</a>
            </div>
        </div>
    </div>
</body>

</html>