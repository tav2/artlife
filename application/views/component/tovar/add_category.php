
<div class="uk-container" style="background-color: #ffffff;margin-top: 20px;">
    <div class="uk-grid">
        <div class="uk-width-1-1" style="text-align: center; margin-top: 10px">
            <h3>Добавление категории</h3>
            <?php //echo $this->session->flashdata('success'); ?>
        </div>
    </div>
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <form action=""  method="post" class="uk-form">
                <h4>Введите название категории</h4>
                <div class="uk-form-row">
					<input required name="category" type="text" size="40" value="<?=$category_red['tovar_category_name'];?>">
                </div>

                <div class="uk-form-row">
                    <input type="submit" value="Добавить" class="uk-button uk-width-4-10"/>
                </div>
            </form>
        </div>
        
    </div>
    <a href="/admin/components/tovar/edit_category">назад</a>
    <div class="uk-grid">
        <div class="uk-width-1-1"></div>
    </div>
</div>