<div class="uk-container" style="background-color: #ffffff;margin-top: 20px;">
    <div class="uk-grid">
        <div class="uk-width-1-1" style="text-align: center; margin-top: 10px">
            <h3>Управление категориями</h3>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    </div>
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <form action=""  method="post" class="uk-form">
                <h4>Выберете категорию</h4>
                <div class="uk-form-row">
                    <select name="tovar_category_select" id=""  class="uk-width-4-10">
                        <?php foreach($all_category_select as $id): ?>
                            <option value="<?php echo $id['tovar_category_id'] ?>"><?php echo $id['tovar_category_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="uk-form-row">
                    <input name="tovar_category_select_but" type="submit" value="Выбрать" class="uk-button uk-width-4-10"/>
                </div>
            </form>
        </div>
    </div>

    <div class="uk-grid">
        <div class="uk-width-1-1">
                <h4>Выбранная категория:</h4>
                <div class="uk-form-row">
                        <?php foreach($tovar_category as $id): ?>
                            <?php echo $id['tovar_category_name'] ?>
                            <p>
                                <a class="btn btn-default" href="/admin/components/tovar/delete_category/<?=$id['tovar_category_id'];?>" role="button">удалить &raquo;</a>
                                <a class="btn btn-default" href="/admin/components/tovar/add_category/<?=$id['tovar_category_id'];?>" role="button">редактировать &raquo;</a>
                                <a class="btn btn-default" href="/admin/components/tovar/add_category_img/<?=$id['tovar_category_id'];?>" role="button">добавить изображения &raquo;</a>
                            </p>
                        <?php endforeach ?>
                </div>
                <h4>Изображения категории:</h4>
                <?php foreach($tovar_category as $id): 
                    if ($id['tovar_img_adres']) {
                ?>
                                <div>
                                    <a href="<?=$id['tovar_img_adres'];?>" target="_blank"><img alt="" src="<?=$id['tovar_img_adres'];?>" style="border-style:solid; border-width:10px;  height:130px; width:100px" /></a>
                                    <a class="btn btn-default" href="/admin/components/tovar/delete_category_img/<?=$id['tovar_category_id'];?>" role="button">удалить &raquo;</a>
                                </div>
                <?php        } 
                endforeach ?>
        </div>
    </div>

    <div class="uk-grid" style="height: 60px; background-color: #535C69; color: #ffffff; margin-right: -35px">
        <div class="uk-width-1-1">
            <div style="margin-top: 14px; margin-left: -15px; color: #fff">
                <a href="/admin/components/tovar/add_category" class="" style="color: #fff !important">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-square-o fa-stack-2x"></i>
                      <i class="fa fa-plus fa-stack-1x"></i>
                    </span>Добавить категорию
                </a>
            </div>
        </div>
    </div>
    <a href="/admin/components/tovar/edit_tovar">назад</a>
    <div class="uk-grid">
        <div class="uk-width-1-1"></div>
    </div>
</div>