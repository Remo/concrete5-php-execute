<?php
namespace Concrete\Package\PhpExecute\Block\PhpExecute;

use \Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btTable = 'btPhpExecute';
    protected $btInterfaceWidth = "600";
    protected $btWrapperClass = 'ccm-ui';
    protected $btInterfaceHeight = "500";
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = false;
    protected $btCacheBlockOutputOnPost = false;
    protected $btCacheBlockOutputForRegisteredUsers = alse;
    protected $btIgnorePageThemeGridFrameworkContainer = true;

    public $content = "";

    public function getBlockTypeDescription()
    {
        return t('Execute PHP code in your page');
    }

    public function getBlockTypeName()
    {
        return t('PHP Execute');
    }

    public function view()
    {
        $this->set('content', $this->content);
    }

    public function add()
    {
        $this->edit();
    }

    public function edit()
    {
        $this->requireAsset('ace');
    }

    public function getSearchableContent()
    {
        return $this->content;
    }

    public function save($data)
    {
        $args['content'] = isset($data['content']) ? $data['content'] : '';
        parent::save($args);
    }

}
