<?php
namespace Bss\HelloWorld\Block;
// use Magento\Store\Model\StoreManagerInterface;
class CustomLink extends \Magento\Framework\View\Element\Template
{
    protected $label = "";
    protected $link = "";
    protected $storeManager = "";
    

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);

        $label = $this->getData('custom-link');
        $this->label = $label;
        $this->link = "https://bsscommerce.com/";
    }

    // Label thi o giao dien nguoi dung
    public function getLabel() {
        return $this->label;
    }

    // Link redirect
    public function getLink() {
        return $this->link;
    }

}