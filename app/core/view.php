<?php
class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
    private $elementsToDisplay = [];
    protected $content_view;

	public $title = "My title";
	function generate($content_view, $template_view, $data = null)
	{
        $this->content_view = $content_view;
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		
		include 'app/views/'.$template_view;
	}

    public function setElementsToDisplay($elements)
    {
        $this->elementsToDisplay = $elements;
    }

    public function getElementsToDisplay()
    {
        return $this->elementsToDisplay;
    }
}