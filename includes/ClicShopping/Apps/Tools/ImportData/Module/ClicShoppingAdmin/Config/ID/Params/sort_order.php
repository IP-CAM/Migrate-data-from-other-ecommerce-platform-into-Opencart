<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT
   * @licence MIT - Portion of osCommerce 2.4
   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  namespace ClicShopping\Apps\Tools\ImportData\Module\ClicShoppingAdmin\Config\ID\Params;

  class sort_order extends \ClicShopping\Apps\Tools\ImportData\Module\ClicShoppingAdmin\Config\ConfigParamAbstract
  {

    public $default = '300';
    public bool $app_configured = true;
    public $sort_order = 20;

    protected function init()
    {
      $this->title = $this->app->getDef('cfg_import_data_sort_order_title');
      $this->description = $this->app->getDef('cfg_import_data_sort_order_description');
    }
  }
