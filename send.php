<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {
    $phone = $_POST['name'];
}
if (isset($_POST['phone'])) {
    $name = $_POST['phone'];
}
if (isset($_POST['title'])) {
    $title = $_POST['title'];
}
/* Сюда впишите свою эл. почту */
$myaddres  = "rsh@blackriver.agency,s1905telos@mail.ru,s1905@mail.ru"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка BBL!\nИмя:  $phone\nТелефон:$name";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub = 'sekr@telosbeauty.ru'; //сабж
$email = 'Заказ обратного звонка'; // от кого
$send = mail($myaddres, $mes, "Заказ обратного звонка c Лэндинга BBL!\nИмя:  $phone\nТелефон:$name");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="3; url=index.html">
    <title>Спасибо! Мы свяжемся с вами!</title>
</head>

<body>
    <h1>Спасибо! Мы свяжемся с вами!</h1>
</body>

</html>




                <!-- <div class="nozzles">
                    <div class="nozzles__title">
                        <h1>Какие зоны вы сделаете привлекательными <br /> с <strong>COOLSCULPTING by Zeltiq</strong>
                        </h1>
                    </div>

                    <div class="nozzles__blocks">
                        <div class="block_left block__nozzles">
                            <div class="block__title">
                                <h3>БАЗОВЫЕ НАСАДКИ
                                    CoolSculpting (2010 год)
                                </h3>
                            </div>
                            <p class="items__title">Время процедуры: <strong>45 минут</strong></p>
                            <div class="block__items">
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolCurve+™.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolCurve+™</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolCore™.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolCore™</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolFit™.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolFit™</p>
                                    </div>
                                </div>
                            </div>
                            <p class="items__title">Время процедуры: <strong>60 минут</strong></p>
                            <div class="block__items">
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolMax™.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolMax™</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block block__img">
                            <div class="img__wrap">
                                <img src="./img/zeltik/woman.png" alt="woman_img">
                            </div>
                        </div>
                        <div class="block_right block__nozzles">
                            <div class="block__title">
                                <h3>НАСАДКИ НОВОГО ПОКОЛЕНИЯ
                                    CoolAdvantage (2017-2019 год)
                                </h3>
                            </div>
                            <p class="items__title">Время процедуры: <strong>35 минут</strong></p>
                            <div class="block__items">
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/Cool Advantage™.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>Cool Advantage™</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolFit™1.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolFit™</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolCurve+™1.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolCurve+™</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolCore™1.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolCore™</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolPetite™.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolPetite™</p>
                                    </div>
                                </div>
                            </div>
                            <p class="items__title">Время процедуры: <strong>45 минут</strong></p>
                            <div class="block__items">
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/Cool Advantage+™.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>Cool Advantage+™</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolMini™.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolMini™</p>
                                    </div>
                                </div>
                            </div>
                            <p class="items__title">Время процедуры: <strong>45 минут</strong></p>
                            <div class="block__items">
                                <div class="item">
                                    <div class="item__img">
                                        <img src="./img/zeltik/CoolSmooth PRO™.png" alt="base_nozzle">
                                    </div>
                                    <div class="item__text">
                                        <p>CoolSmooth PRO™</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->



		.nozzles {
			position: relative;
			height: auto;
			margin-bottom: 60px;

			&__title {
				margin-bottom: 10px;
				h1 {
					font-family: $main_font;
					font-size: 35px;
					line-height: 43px;
					font-weight: normal;
					text-align: center;
					text-transform: uppercase;
					color: #7449d0;
				}
			}

			&__blocks {
				display: flex;
				justify-content: space-between;
				width: 100%;
				background: url(../img/zeltik/rounds_bg.png);
				background-position: center;
				background-repeat: no-repeat;

				.block__img {
					.img__wrap {
						img {
							height: 100%;
						}
					}
				}

				.block__nozzles {
					padding-top: 75px;
					.block__title {
						width: 60%;

						margin-bottom: 30px;
						h3 {
							font-family: $main_font;
							font-style: normal;
							font-weight: normal;
							font-size: 18px;
							line-height: 22px;
							text-transform: uppercase;
							color: #7449d0;
						}
					}

					.items__title {
						font-family: $main_font;
						font-style: normal;
						font-weight: normal;
						font-size: 14px;
						line-height: 150%;
						color: #000000;
						margin-bottom: 15px;

						strong {
							font-weight: bold;
							font-size: 18px;
							line-height: 150%;
						}
					}

					.block__items {
						display: flex;
						flex-wrap: wrap;
						.item {
							position: relative;
							padding: 10px 30px;
							border: 1px dashed #e3d6ff;
							border-radius: 8px;
							margin-bottom: 10px;
							transition: all 0.3s ease;
							.item__img {
								margin: 0 auto;
								text-align: center;

								img {
									text-align: center;
								}
							}
							.item__text {
								font-family: $main_font;
								font-style: normal;
								font-weight: normal;
								font-size: 16px;
								line-height: 150%;
								text-align: center;
								color: #000000;
							}

							&::before {
								content: "";
								position: absolute;
								top: 0;
								right: 0;
								width: 42px;
								height: 42px;
								background-color: #7248ce;
								border-radius: 0px 4px 0px 0px;
								border: 1px solid #7248ce;
								z-index: -1;
							}

							&::after {
								content: "";
								position: absolute;
								top: 0;
								right: 0;
								width: 44px;
								height: 44px;
								background-color: #fff;
								border: 1px solid #fff;
								border-radius: 0px 4px 0px 0px;

								z-index: 0;
							}

							&:hover {
								border: 1px solid #7248ce;

								&::after {
									border-radius: 0px 60px 0px 0px;
								}
							}
						}
					}
				}

				.block_left {
					width: 40%;

					.block__items {
						width: 70%;
					}
				}

				.block_right {
					width: 40%;

					.block__title {
						margin-left: auto;
						margin-right: 0;
						text-align: right;
					}

					.items__title {
						text-align: right;
					}

					.block__items {
						text-align: right;
						justify-content: flex-end;

						.item {
							margin-left: 10px;
						}
					}
				}
			}
		}