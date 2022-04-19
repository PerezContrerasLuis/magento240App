<?php
namespace Luisdev\Inyeccion\Controller\Index;
use Luisdev\Inyeccion\NotMagento\PencilInterface;
class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $pencilInterface;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,PencilInterface $pencilInterface)
	{
		$this->pencilInterface = $pencilInterface;
		return parent::__construct($context);
	}
	public function execute()
	{
		echo $this->pencilInterface->getTypePencil();
	}
}