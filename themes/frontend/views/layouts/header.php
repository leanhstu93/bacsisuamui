<?php$header = Hinhanh::getDataByCustomSetting('header');?><div class="header-top">    <div class="w1000">       <div class="txt-left">            Sửa mũi hàn quốc - Sài Gòn Halo - Bác sĩ thẩm mỹ hàng đầu Sài Gòn       </div>        <div class="txt-right">            <ul>                <li>                    <span>                        HOTLINE                    </span>                    <a href="tel:<?php echo $this->ttc->Phone ?>">                        <?php echo $this->ttc->Phone ?>                    </a>                </li>                <li>                    <a rel="nofollow" href="#Ta__js-tu-van" data-toggle="modal" class="regist btnkn2tv">Đăng kí tư vấn</a>                </li>            </ul>        </div>    </div></div><?php $this->renderPartial("//layouts/menu"); ?><?php $this->renderPartial("//layouts/menumobile"); ?>