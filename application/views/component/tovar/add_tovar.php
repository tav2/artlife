<div class="uk-container" style="background-color: #ffffff;margin-top: 20px;">
    <div class="uk-grid">
        <div class="uk-width-1-1" style="text-align: center; margin-top: 10px">
            <h3>Добавление товара</h3>
            <?php //echo $this->session->flashdata('success'); ?>
        </div>
    </div>
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <form action="<?php $put='/admin/components/tovar/add_tovar/'.$tovar_red['id'] ?>"  method="post" class="uk-form">
                <h4>Выберете подкатегорию товара</h4>
                <div class="uk-form-row">
                    <select name="sub_category" id=""  class="uk-width-4-10">
                        <?php foreach($all_sub_category_select as $id): ?>
                            <option value="<?php echo $id['tovar_sub_category_id'] ?>"><?php echo $id['tovar_sub_category_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <h4>Введите название товара</h4>
                <div class="uk-form-row">
                    <input required name="tovar_name" type="text" size="40" value="<?=$tovar_red['tovar_name'];?>">
                </div>
                <h4>Введите цену товара</h4>
                <div class="uk-form-row">
                    a:<input name="tovar_prise" type="number" size="40" value="<?=$tovar_red['tovar_prise'];?>">
                    aв:<input  name="tovar_prise_ab" type="number" size="40" value="<?=$tovar_red['tovar_prise_ab'];?>">
                    б:<input  name="tovar_prise_b" type="number" size="40" value="<?=$tovar_red['tovar_prise_b'];?>">
                    с:<input  name="tovar_prise_c" type="number" size="40" value="<?=$tovar_red['tovar_prise_c'];?>">
                </div>
                <h4>Введите скидку на товар</h4>
                <div class="uk-form-row">
                    <input  name="tovar_skidka" type="number" size="40" value="<?=$tovar_red['tovar_skidka'];?>">
                </div>
                <h4>Введите описание товара</h4>
                <textarea required name="tovar_text" id="editor2" rows="10" cols="80"><?=$tovar_red['tovar_text'];?></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor2' );
                    </script>
                <h4>Введите состав товара</h4>
                <textarea required name="tovar_sostav" id="editor3" rows="10" cols="80"><?=$tovar_red['tovar_sostav'];?></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor3' );
                    </script>
                <h4>Введите способ применеия</h4>
                <textarea required name="tovar_sposob" id="editor4" rows="10" cols="80"><?=$tovar_red['tovar_sposob'];?></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor4' );
                    </script>
                <h4>Введите противопоказания</h4>
                <textarea required name="tovar_protivopokaz" id="editor5" rows="10" cols="80"><?=$tovar_red['tovar_protivopokaz'];?></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor5' );
                    </script>
                <h4>Введите размеры товара(объем)</h4>
                <div class="uk-form-row">
                    <input required name="tovar_razmer" type="text" size="40" value="<?=$tovar_red['tovar_razmer'];?>">
                </div>
                <h4>Введите другую информацию</h4>
                <div class="uk-form-row">
                    <input name="tovar_uther" type="text" size="40" value="<?=$tovar_red['tovar_uther'];?>">
                </div>

                <h4>Выберете доступность товара</h4>
                <div class="uk-form-row">
                    <select name="tovar_dostupnost" id=""  class="uk-width-4-10">
                            <option value="На складе">На складе</option>
                            <option value="Под заказ">Под заказ</option>
                            <option value="Нет в наличии">Нет в наличии</option>
                    </select>
                </div>

                <h4>Выберете новинка или нет</h4>
                <div class="uk-form-row">
                    <input type="checkbox" name="tovar_new" value="1" >Новинка?<Br>
                </div>


                <div class="uk-form-row">
                    <input type="submit" value="Добавить" class="uk-button uk-width-4-10"/>
                </div>
            </form>
        </div>
        
    </div>
    <a href="/admin/components/tovar/edit_tovar">назад</a>
    <div class="uk-grid">
        <div class="uk-width-1-1"></div>
    </div>
</div>