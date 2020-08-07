<?php


namespace Ling\Light_Kit_Admin_UserDatabase\Controller\Generated;


use Ling\Light\Http\HttpResponseInterface;
use Ling\Light_Kit\PageConfigurationUpdator\PageConfUpdator;
use Ling\Light_UserRowRestriction\Service\LightUserRowRestrictionService;
use Ling\Light_Kit_Admin_UserDatabase\Controller\Generated\Base\RealGenController;


/**
 * The LudPluginOptionController class.
 */
class LudPluginOptionController extends RealGenController
{

    /**
     * Renders the plugin option list page.
     *
     * @return HttpResponseInterface|string
     * @throws \Exception
     */
    public function renderList()
    {
        return $this->renderAdminPage('Light_Kit_Admin_UserDatabase/kit/zeroadmin/generated/lud_plugin_option_list', [], PageConfUpdator::create()->updateWidget("body.light_realist", [
            'vars' => [
                'request_declaration_id' => 'Light_Kit_Admin_UserDatabase:generated/lud_plugin_option',
            ],
        ]));
    }


    /**
     * Renders the plugin option form page.
     *
     * @return string|HttpResponseInterface
     * @throws \Exception
     */
    public function renderForm()
    {

        $table = "lud_plugin_option";
        $identifier = "Light_Kit_Admin_UserDatabase.generated/lud_plugin_option";
        $parentLayout = "Light_Kit_Admin/kit/zeroadmin/dev/mainlayout_base";
        $vars = [
            "title" => "Plugin option form",
        ];
        if (array_key_exists("solo", $_GET)) {
            $parentLayout = "Light_Kit_Admin/kit/zeroadmin/dev/mainlayout_solo";
            $vars['related_links'] = []; // cancel any existing related links
            $this->setOnSuccessIframeSignal("done");
        }

        $res = $this->processForm($identifier, $table);

        if ($res instanceof HttpResponseInterface) {
            return $res;
        } else {
            $form = $res;
        }

        //--------------------------------------------
        // RENDERING
        //--------------------------------------------
        return $this->renderAdminPage('Light_Kit_Admin_UserDatabase/kit/zeroadmin/generated/lud_plugin_option_form', [
            "parent_layout" => $parentLayout,
            "form" => $form,
        ], PageConfUpdator::create()->updateWidget("body.lka_chloroform", [
            'vars' => $vars,
        ]));
    }
}