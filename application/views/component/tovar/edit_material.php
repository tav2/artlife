<div class="uk-container" style="background-color: #ffffff;margin-top: 20px;">
    <div class="uk-grid">
        <div class="uk-width-1-1" style="text-align: center; margin-top: 10px">
            <h3>Удалние материала</h3>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    </div>
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <form action=""  method="post" class="uk-form">
                <h4>Выберете материал</h4>
                <div class="uk-form-row">
                    <select name="dell_material" id=""  class="uk-width-4-10">
                        <?php foreach($all_material_select as $id): ?>
                            <option value="<?php echo $id['tovar_material_id'] ?>"><?php echo $id['tovar_material_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="uk-form-row">
                    <input name="dell_material_but" type="submit" value="Удалить" class="uk-button uk-width-4-10"/>
                </div>
            </form>
        </div>
        
    </div>
    <div class="uk-grid" style="height: 60px; background-color: #535C69; color: #ffffff; margin-right: -35px">
        <div class="uk-width-1-1">
            <div style="margin-top: 14px; margin-left: -15px; color: #fff">
                <a href="/admin/components/tovar/add_material" class="" style="color: #fff !important">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-square-o fa-stack-2x"></i>
                      <i class="fa fa-plus fa-stack-1x"></i>
                    </span>Добавить материал
                </a>
            </div>
        </div>
    </div>
    <a href="/admin/components/tovar">назад</a>
    <div class="uk-grid">
        <div class="uk-width-1-1"></div>
    </div>
</div>