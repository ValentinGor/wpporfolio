<?php
/*
Template Name: Contact Page
Template Post Type: page
*/
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form">
                    <form id="reg-form">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" aria-describedby="firstNameText">
                            <small id="firstNameText" class="form-ex form-text text-muted">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Aliquid, distinctio.</small>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" aria-describedby="lastNameText">
                            <small id="lastNameText" class="form-text text-muted">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Aliquid, distinctio.</small>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button id="buttonSubmit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <!--
                <form action="">
                    <div class="form-group">
                        <label for="type_site">Тип сайта</label>
                        <select class="form-control" id="type_site" onchange="calc()">
                            <option value="0">Выбрать</option>
                            <option value="5000">Landing Page</option>
                            <option value="7000">Сайт-визитка</option>
                            <option value="10000">Интернет-магазин</option>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="need_design" value="3000" onchange="calc()"/>
                        <label class="form-check-label" for="need_design">Требуется дизайн?</label>
                    </div>
                    <div class="form-group">
                        <label for="count">Кол-во вариантов</label>
                        <input type="text" class="form-control" id="count" value="1" onchange="calc()"/>
                    </div>
                    <div class="form-group">
                        <div>Стоимость разработки сайта: <span id="result">0</span> грн.</div>
                    </div>
                </form>
                -->

                <form action="">
                    <div class="form-group">
                        <label for="type_site">Тип сайта</label>
                        <select class="form-control" id="type_site">
                            <option value="0">Выбрать</option>
                            <option value="5000">Landing Page</option>
                            <option value="7000">Сайт-визитка</option>
                            <option value="10000">Интернет-магазин</option>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="need_design" value="3000">
                        <label class="form-check-label" for="need_design">Требуется дизайн?</label>
                    </div>
                    <div class="form-group">
                        <label for="count">Кол-во сайтов</label>
                        <input type="number" min="1" max="20" class="form-control" id="count" value="1">
                    </div>
                    <div class="form-group">
                        <div>Стоимость разработки сайта: <span id="result">0</span> грн.</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php get_footer(); ?>