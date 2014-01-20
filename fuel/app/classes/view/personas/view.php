<?php

class View_Personas_view extends Viewmodel
{
	public function view()
	{
		$this->content = $this->request()->param('content', 'vacio vacio');
	}
}